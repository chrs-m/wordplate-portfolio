<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>
        <span class="text-sm"><?php the_date(); ?></span>

    <?php endwhile; ?>

    <div class="mt-5">
        <?= previous_post_link(); ?>
        <?= next_post_link(); ?>
    </div>

<?php endif; ?>



<?php get_footer(); ?>