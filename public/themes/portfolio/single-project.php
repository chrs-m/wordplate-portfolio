<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>

            <?php if (get_field('client-name')) : ?>
                <?php if (get_field('client-website')) : ?>

                    <p>
                        Client: <a class="underline" href="<?php the_field('client-website'); ?>"><?php the_field('client-name'); ?></a>
                    </p>

                <?php else : ?>

                    <p>Client: <?php the_field('client-name'); ?></p>

                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <p><?php the_content(); ?></p>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>