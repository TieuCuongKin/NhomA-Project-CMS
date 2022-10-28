<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id( 'search-form-' );

$twentytwenty_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $twentytwenty_aria_label ) && ! empty( $args['label'] ) ) {
   $twentytwenty_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 <div class="content">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-search h2 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-9">
                                        <input id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="form-control form-control-lg form-control-borderless" class="search-1" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-2">
                                        <button class="btn btn-lg btn-success" class="submit" type="submit-1">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
 </div>
