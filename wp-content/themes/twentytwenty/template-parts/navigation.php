<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<nav class="pagination-single section-inner bg-white <?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'twentytwenty' ); ?>">

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

            <div class="list_news">
                <div class="headlines">
                    <?php
                    if ( $prev_post ) {
                        ?>
                        <ul>
                            <li>
                                <div class="headlinesdate">
                                    <?php $prev_post_date = $prev_post->post_date;
                                    $day = date("d", strtotime($prev_post_date));
                                    $month = date("m", strtotime($prev_post_date));
                                    $year = date("y", strtotime($prev_post_date));
                                    ?>
                                    <div class="headlinesdm">
                                        <div class="headlinesday"><?php echo $day ?></div>
                                        <div class="headlinesmonth"><?php echo $month ?></div>
                                    </div>
                                    <div class="headlinesyear"><?php echo $year ?></div>
                                </div>
                                <div class="headlinestitle pt-4">
                                    <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></a>
                                </div>
                            </li>
                        </ul>

                    <?php
                    }

                    if ( $next_post ) {
                    ?>
                        <ul>
                            <li>
                                <div class="headlinesdate">
                                    <?php $next_post_date = $next_post->post_date;
                                    $day = date("d", strtotime($next_post_date));
                                    $month = date("m", strtotime($next_post_date));
                                    $year = date("y", strtotime($next_post_date));
                                    ?>
                                    <div class="headlinesdm">
                                        <div class="headlinesday"><?php echo $day ?></div>
                                        <div class="headlinesmonth"><?php echo $month ?></div>
                                    </div>
                                    <div class="headlinesyear"><?php echo $year ?></div>
                                </div>
                                <div class="headlinestitle pt-4">
                                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

	</nav><!-- .pagination-single -->

	<?php
}
