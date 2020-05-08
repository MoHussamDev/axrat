<?php
	
	
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fiveh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

		<div id="topBar" class="container-fluid">
			<div class="f-main container">
					<div class="f-main-wrapper">
						<div class="f-main-content f-site-info">
						<i class="fas fa-phone"></i>
						<span>تليفون : <?php echo get_theme_mod('blog_tele','Company Telephone')?></span>
						</div>
						<div class="f-main-content">
						<i class="fas fa-envelope"></i>
						<span>الإيميل : <?php echo get_theme_mod('blog_email','Compny_email') ?></span>
						</div>
					</div>
					<div class="f-main-wrapper right">
						<div class="f-main-content">
					

						<ul class"">
							<li><a href="<?php echo get_theme_mod('si_facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo get_theme_mod('si_twitter') ?>"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php echo get_theme_mod('si_instagram') ?>"><i class="fab fa-instagram"></i></a></li>
						</ul>
						</div>
					</div>
	
		

			</div>
		</div>


		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">فايف اتش</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>	
						<!-- <h1>data</h1> -->
	<div id="content" class="site-content">
