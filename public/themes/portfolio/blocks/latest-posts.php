<?php

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'latest-posts',
            'title' => __('Custom Latest Posts'),
            'description' => __('A block that displays the latest posts'),
            'render_template' => 'block-templates/latest-posts.php',
            'category' => 'formatting',
            'icon' => 'megaphone',
            'keywords' => array('posts')
        ]);
    }
});


if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'latest-posts-fields',
        'title' => 'Block settings',
        'fields' => [
            [
                'type' => 'select',
                'label' => 'Post type',
                'key' => 'field_latest-posts-post-type',
                'name' => 'latest-posts-post-type',
                'choices' => [
                    'posts' => 'posts',
                    'projects' => 'projects'
                ]
            ],
            [
                'type' => 'number',
                'label' => 'Number of posts',
                'key' => 'field_latest-posts-number-of-posts',
                'name' => 'latest-posts-number-of-posts',
                'default_value' => 3
            ],
            [
                'type' => 'page_link',
                'label' => 'Link to posts archive',
                'key' => 'field_latest-posts-link-to-blog',
                'name' => 'latest-posts-link-to-blog',
                'post_type' => 'page',
            ]
        ],
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/latest-posts',
                ),
            ),
        ),
    ));
}
