<?php namespace Lucidinternets\PostLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\Contract\LinkTypeInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\PostsModule\Post\Contract\PostInterface;
use Lucidinternets\PostLinkTypeExtension\Form\PostLinkTypeFormBuilder;

class PostLinkTypeExtension extends LinkTypeExtension implements LinkTypeInterface
{

    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.navigation::link_type.post';

    /**
     * Return the entry URL.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function url(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return url('');
        }

        /* @var PostInterface $post */
        if (!$post = $entry->getPost()) {
            return url('');
        }

        return route('anomaly.module.posts::posts.view', [$post->getSlug()]);
    }

    /**
     * Return the entry title.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function title(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return '[Broken Link]';
        }

        /* @var PostInterface $post */
        if (!$post = $entry->getPost()) {
            return '[Broken Link]';
        }

        return $entry->getTitle() ?: $post->getTitle();
    }

    /**
     * Return if the link exists or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function exists(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        return (bool)$entry->getPost();
    }

    /**
     * Return if the link is enabled or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function enabled(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        /* @var PostInterface $post */
        if (!$post = $entry->getPost()) {
            return false;
        }

        return $post->isEnabled();
    }

    /**
     * Return the form builder for
     * the link type entry.
     *
     * @return FormBuilder
     */
    public function builder()
    {
        return app(PostLinkTypeFormBuilder::class);
    }
}
