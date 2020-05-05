<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class LucidinternetsExtensionPostLinkTypeCreatePostLinksStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'posts',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'post' => [
            'required' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
    ];

}
