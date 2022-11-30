<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>
<h1 class="tieudeblog">NEWEST BLOG ENTRIES</h1>
	<div id="primary" class="content-area ">

        <?php
        /**
         * Before Posts hook
        */
        do_action( 'jobscout_before_posts_content' );
        ?>

        <main id="main" class="site-main col-item clr">

		<?php
		 $count = 1;
		 $class = 'col-1';
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				?>
                                <?php 
                                if ( ($count%2) == 0 ) {
                                        $class = 'col-2';
                                }
                                ?>
                                <!-- get_template_part( 'template-parts/content', get_post_format() ); -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?> itemscope itemtype="https://schema.org/Blog">
                                <?php
                                        /**
                                         * @hooked jobscout_post_thumbnail - 10
                                        */
                                        do_action( 'jobscout_before_post_entry_content' );

                                        echo '<div class="content-wrap">';
                                        /**
                                         * @hooked jobscout_entry_header  - 10 
                                         * @hooked jobscout_entry_content - 15
                                         * @hooked jobscout_entry_footer  - 20
                                        */
                                        do_action( 'jobscout_post_entry_content' );
                                        
                                        echo '</div>';
                                ?>
                                </article><!-- #post-<?php the_ID(); ?> -->
                        <?php $count++; endwhile;
                
                // no blog
                // else :
                //         get_template_part( 'template-parts/content', 'none' );
                endif; ?>
		</main><!-- #main -->

        <?php
        /**
         * After Posts hook
         * @hooked jobscout_navigation - 15
        */
        do_action( 'jobscout_after_posts_content' );
        ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();