<?php

$postType = get_field('latest-posts-post-type') ?: 'post';
$numberOfPosts = get_field('latest-posts-number-of-posts') ?: 3;

$args = [
    'postType' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
];

$latestPosts = get_posts($args);

?>

<div class="grid gap-5 grid-flow-col mt-5">
    <?php foreach ($latestPosts as $post) : ?>
        <a class="hover:text-orange-400" href="<?php echo the_permalink($post); ?>">
            <?php if ($image = get_the_post_thumbnail($post, [150, 150])) : ?>
                <?= $image ?>
            <?php endif; ?>
            <h3 class="hover:text-orange-400 text-xl">
                <?php echo get_the_title($post); ?>
            </h3>
        </a>
    <?php endforeach; ?>
</div>

<?php $blogPageUrl = get_post_type_archive_link('post'); ?>

<a class="hover:text-orange-400 hover:italic" href="<?= $blogPageUrl; ?>">See all posts</a>
