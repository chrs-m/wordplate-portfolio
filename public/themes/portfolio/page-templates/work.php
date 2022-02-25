<?php /*Template Name: Work */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="prose">
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

<?php endif; ?>

<?php
$projects = get_posts(['post_type' => 'project']);
?>

<div class="max-w-prose mx-auto">
    <h2 class="text-2xl mt-8">Check out my projects</h2>
    <ul class="flex flex-col">
        <?php foreach ($projects as $post) : setup_postdata($post); ?>
            <?php $tools = get_the_terms($post, 'tool'); ?>
            <li class="flex flex-col my-3 w-full min-h-[60px] p-4 border border-gray-300 shadow-md rounded-md">
                <a class="text-lg mb-3 font-black underline hover:text-orange-400" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                <?php foreach ($tools as $tool) : ?>
                    <a class="text-xs hover:text-orange-400" href="<?= get_term_link($tool); ?>"><?= $tool->name; ?></a>

                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php get_footer(); ?>