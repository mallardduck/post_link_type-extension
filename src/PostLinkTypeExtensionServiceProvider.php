<?php namespace MallardDuck\PostLinkTypeExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\PostLinkType\PostLinkTypePostsEntryModel;
use MallardDuck\PostLinkTypeExtension\PostLinkTypeModel;
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
