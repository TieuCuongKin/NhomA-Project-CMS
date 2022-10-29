<?php
/**
 * Template name: Home
 */
get_header(); ?>

<main id="site-content">
    <div class="container">
        <?php get_template_part( "loop", "home" ) ?>
    </div>
</main>

<?php get_footer(); ?>