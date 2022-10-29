<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <p><?php twentytwenty_site_logo(); ?></p>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/wordpressv1/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo site_url(); ?>">

                        <input  class="form-control mr-sm-2" type="search" name="s" placeholder="Search" aria-label="Search" pattern=".{3,}">
                        <button class="btn btn-outline-secondary btn-lg my-2 my-sm-0" type="submit" >Submit</button>

                    </form>
                </ul>

                <ul class="navbar-nav  list-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thể thao</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khoa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item icontop">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        Menu
                    </li>
                    <li class="nav-item icontop">
                        <?php
                            // Check whether the header search is activated in the customizer.
                            $enable_header_search = get_theme_mod( 'enable_header_search', true );
                        ?>
                        <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<i class="fa fa-search" aria-hidden="true"></i>

								<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
							</span>
                        </button><!-- .search-toggle -->
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
