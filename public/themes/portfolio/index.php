<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="hover:bg-gray-100 rounded-md px-2">
            <h2><a class="hover:text-orange-400" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>