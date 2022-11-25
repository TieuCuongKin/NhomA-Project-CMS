<?php
/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod( 'blog_section_title', __( 'NEWEST BLOG ENTRIES', 'jobscout' ) );
$blog         = get_option( 'page_for_posts' );
$label        = get_theme_mod( 'blog_view_all', __( 'See More Posts', 'jobscout' ) );
$hide_author  = get_theme_mod( 'ed_post_author', false );
$hide_date    = get_theme_mod( 'ed_post_date', false );
$ed_blog      = get_theme_mod( 'ed_blog', true );

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query( $args );

if( $ed_blog && ( $blog_heading || $qry->have_posts() ) ){ ?>
<section id="blog-section" class="article-section">
    <div class="container">
        <?php
        if ($blog_heading) {
            echo '<h2 class="section-title">' . esc_html($blog_heading)
                . '</h2>';
        }
        ?>

        <?php if ($qry->have_posts()) { ?>
            <div class="article-wrap">
                <?php
                while ($qry->have_posts()) {
                    $qry->the_post(); ?>
                    <article class="grid-container">

                        <div class="grid-item item1">
                            <a href="<?php the_permalink(); ?>"
                               class="post-thumbnail">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('jobscout-blog',
                                        array('itemprop' => 'image'));
                                } else {
                                    jobscout_fallback_svg_image('jobscout-blog');
                                }
                                ?>
                            </a>
                        </div>
                        <div class="grid-item item2">
                            <header>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </header>
                            <?php
                            the_excerpt();
                            ?>
                            <!-- .entry-content -->
                            <?php jobscout_entry_footer(); ?>
                        </div>

                    </article>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div><!-- .article-wrap -->

            <?php if ($blog && $label) { ?>
                <div class="btn-wrap">
                    <a href="<?php the_permalink($blog); ?>"
                       class="btn"><?php echo esc_html($label); ?></a>
                </div>
            <?php } ?>

        <?php } ?>
    </div>
</section>
<?php 
}