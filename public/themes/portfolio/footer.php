</div>

<footer class="not-prose flex flex-col fixed bottom-0 w-screen h-24 bg-black">
    <p class="prose mx-auto my-auto text-white"><?php the_field('copywrite', 'option'); ?></p>

    <div class="contact-div flex flex-col mx-auto my-auto">
        <?php
        if (get_field('footer-contact-label', 'option')) : ?>
            <div class="flex">
                <h4 class="prose text-white"><?php the_field('footer-contact-label', 'option'); ?></h4>
                <a href="mailto:<?php the_field('footer-email', 'option'); ?>" class="prose text-white hover:underline hover:text-orange-400"><?php the_field('footer-email', 'option'); ?></p>
            </div>
            <div class="flex justify-evenly">
                <a href="mailto:<?php the_field('footer-email', 'option'); ?>" class="self-center">
                    <?php if (get_field('footer-email-img', 'option')) : ?>
                        <?php $img = get_field('footer-email-img', 'option'); ?>
                        <img class="grayscale hover:grayscale-0" alt="Email" src="<?= $img['url']; ?>" width="32" height="32">
                    <?php endif; ?>
                    <a href="https://www.github.com/chrs-m">
                        <?php if (get_field('footer-github', 'option')) : ?>
                            <?php $img = get_field('footer-github', 'option'); ?>
                            <img class="grayscale over:grayscale-0" alt="GitHub page" src="<?= $img['url']; ?>" width="32" height="32">
                        <?php endif; ?>
                        <a href="https://www.twitter.com">
                            <?php if (get_field('footer-twitter', 'option')) : ?>
                                <?php $img = get_field('footer-twitter', 'option'); ?>
                                <img class="grayscale hover:grayscale-0" alt="Twitter page" src="<?= $img['url']; ?>" width="32" height="32">
                            <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>