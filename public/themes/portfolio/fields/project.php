<?php

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'project-info',
        'title' => 'Project info',
        'fields' => [
            [
                'type' => 'text',
                'label' => 'Client name',
                'key' => 'field_client-name',
                'name' => 'client-name',
                'instructions' => 'Fill in the client name',
            ],
            [
                'type' => 'url',
                'label' => 'Client website',
                'key' => 'field_client-website',
                'name' => 'client-website',
                'instructions' => 'Fill in the client website',
            ]
        ],
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
}
