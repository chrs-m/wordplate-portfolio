<?php

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'portfolio-theme/resume',
        [
            'title' => 'Resume item',
            'description' => 'A list item for building a resume',
            'categories' => ['portfolio-patterns'],
            'content' => '<!-- wp:group {"backgroundColor":"luminous-vivid-orange"} -->
            <div class="wp-block-group has-luminous-vivid-orange-background-color has-background"><!-- wp:heading -->
            <h2>Education/Employment - School/Company</h2>
            <!-- /wp:heading -->

            <!-- wp:separator {"className":"is-style-wide"} -->
            <hr class="wp-block-separator is-style-wide"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph -->
            <p><em>2021 - 2023</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Description</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            ',
        ]
    );

    register_block_pattern_category(
        'portfolio-patterns',
        [
            'label' => 'Portfolio Patterns',
        ]
    );
}
