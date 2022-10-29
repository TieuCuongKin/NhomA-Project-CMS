
<div class="row">
    <div class="col-md-8">
        <?php  while( have_posts() ) : the_post(); ?>
            <div class="item">
                <div class="row">
                    <div class="col-md-4">
                        <?php 
                        global $post;
                        $featureImage = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                    
                        ?>
                        <img src="<?php echo $featureImage ?>">
                    </div>
                    <div class="col-md-8">
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title() ?></a></h2>
                        <p><?php echo mb_substr( get_the_excerpt(), 0, 100 ) ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="col-md-8">
        <?php get_sidebar(); ?>
    </div>
</div>