<?php

if (function_exists('acf_add_options_page')) {

    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Theme General Settings'),
        'menu_title'    => __('Theme Settings'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_local_field_group([
        'key' => 'field_footer-fields',
        'title' => 'Footer',
        'fields' => [
            [
                'name' => 'footer-contact-label',
                'label' => 'Contact label',
                'type' => 'text',
                'key' => 'contact-label',
            ],
            [
                'name' => 'footer-email',
                'label' => 'Footer email',
                'type' => 'email',
                'key' => 'email',
            ],
            [
                'name' => 'footer-copywrite',
                'label' => 'Copywrite',
                'type' => 'text',
                'key' => 'copywrite',
            ],
            [
                'name' => 'footer-email-img',
                'label' => 'Email',
                'type' => 'image',
                'key' => 'email-img',
            ],
            [
                'name' => 'footer-github',
                'label' => 'Github',
                'type' => 'image',
                'key' => 'github',
            ],
            [
                'name' => 'footer-twitter',
                'label' => 'Twitter',
                'type' => 'image',
                'key' => 'twitter',
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),

    ]);
}
