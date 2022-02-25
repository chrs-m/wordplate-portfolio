<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('tool', ['project'], [
        'hierarchial' => true,
        'labels' => [
            'add_new_item' => __('Add New Tool'),
            'edit_item' => __('Edit Tool'),
            'name' => __('Tools'),
            'search_items' => __('Search Tools'),
            'singular_name' => __('Tool'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
