<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>

    <?php

    $args = [
        'numberposts' => 3,
        'order' => 'desc',
    ];

    $latestPosts = get_posts($args);
    ?>

    <div class="grid gap-5 grid-flow-col mt-5">
        <?php foreach ($latestPosts as $post) : setup_postdata($post); ?>
            <a class="hover:text-orange-400" href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail([150, 150]); ?>
                <?php endif; ?>
                <h3 class="hover:text-orange-400 text-xl">
                    <?php the_title(); ?>
                </h3>
            </a>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>

    <?php $blogPageUrl = get_post_type_archive_link('post'); ?>

    <a class="hover:text-orange-400 hover:italic" href="<?= $blogPageUrl; ?>">See all posts</a>

<?php endif; ?>

<?php get_footer(); ?>