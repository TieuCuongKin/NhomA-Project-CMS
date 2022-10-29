<?php get_header(); ?>

<main id="site-content">
    <div class="container">
        
        <?php get_template_part( "loop", "search" ) ?>
    </div>
    <?php get_template_part( 'template-parts/pagination' ); ?>
</main>

<?php get_footer(); ?>