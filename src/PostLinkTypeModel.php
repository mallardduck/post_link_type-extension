<?php namespace Lucidinternets\PostLinkTypeExtension;

use Lucidinternets\PostLinkTypeExtension\Contract\PostLinkTypeInterface;
use Anomaly\PostsModule\Post\Contract\PostInterface;
use Anomaly\Streams\Platform\Model\PostLinkType\PostLinkTypePostsEntryModel;

class PostLinkTypeModel extends PostLinkTypePostsEntryModel implements PostLinkTypeInterface
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'post',
        'translations',
    ];

    /**
     * Get the post.
     *
     * @return PostInterface
     */
    public function getPost()
    {
        return $this->post;
    }
}
