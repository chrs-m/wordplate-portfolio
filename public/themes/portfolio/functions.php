<?php

declare(strict_types=1);

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri());
});

require get_template_directory() . '/post-types/project.php';
require get_template_directory() . '/taxonomies/tool.php';
require get_template_directory() . '/fields/project.php';
require get_template_directory() . '/fields/options.php';
require get_template_directory() . '/blocks/latest-posts.php';
require get_template_directory() . '/block-patterns/resume-item.php';

add_filter('body_class', function ($classes) {
    $classes[] = 'min-h-screen flex flex-col';
    return $classes;
});

add_action('enqueue_block_editor_assets', function () {
    $manifest = json_decode(file_get_contents(get_theme_file_path('assets/manifest.json')), true);
    wp_enqueue_style('block_editor_css', get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['css'][0]));
}, 10, 0);
