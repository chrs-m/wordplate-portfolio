<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('project', [
        'has_arhive' => true,
        'labels' => [
            'add_new_item' => __('Add New Project'),
            'edit_project' => __('Edit Project'),
            'name' => __('Projects'),
            'search_items' => __('Search Projects'),
            'singular_name' => __('Project')
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-portfolio',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
