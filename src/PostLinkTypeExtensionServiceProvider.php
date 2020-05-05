<?php namespace Lucidinternets\PostLinkTypeExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\PostLinkType\PostLinkTypePostsEntryModel;
use Lucidinternets\PostLinkTypeExtension\PostLinkTypeModel;
use Illuminate\Routing\Router;

class PostLinkTypeExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        PostLinkTypePostsEntryModel::class => PostLinkTypeModel::class,
    ];
}
