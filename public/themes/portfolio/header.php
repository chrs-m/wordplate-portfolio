<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com/?plugins=typography"></script> -->
    <title>My portfolio</title>

    <?php if (
        wp_get_environment_type() === 'local' &&
        is_array(wp_remote_get('http://localhost:3000'))
    ) : ?>
        <script type="module" src="http://localhost:3000/@vite/client"></script>
        <script type="module" src="http://localhost:3000/resources/scripts/index.js"></script>
    <?php else : ?>
        <?php $manifest = json_decode(file_get_contents(get_theme_file_path('assets/manifest.json')), true); ?>
        <script type="module" src="<?= get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['file']) ?>" defer></script>
        <link rel="stylesheet" href="<?= get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['css'][0]) ?>">
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems = wp_get_nav_menu_items('main-menu'); ?>

    <nav class="flex justify-between content-center p-4 bg-gradient-to-r from-black via-gray-600 to-gray-600">
        <a href="<?= home_url(); ?>" class="text-2xl pr-5 font-bold hover:text-orange-400 text-white"><?= bloginfo('name'); ?></a>
        <div>
            <?php
            foreach ($menuItems as $item) : ?>
                <a href="<?= $item->url; ?>" class="text-lg p-2 hover:text-orange-400 hover:underline <?php if (get_queried_object_id() == $item->object_id) : ?>
            text-gray-200
        <?php endif; ?>">
                    <?= $item->title; ?></a>
            <?php endforeach; ?>
        </div>
    </nav>
    <div class="container prose mx-auto">
