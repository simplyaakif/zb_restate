<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

 global $redux_builder_uw_ar_restate;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<style>
		
		/* <?php echo $redux_builder_uw_ar_restate['css_editor'];?> */
	</style>
</head>

<body <?php body_class(); ?>>

<div class="ar_topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<ul class="list-inline head_social ">

<?php  if($redux_builder_uw_ar_restate['1agent_fb']){
echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_fb'].' "><i class="fa fa-facebook"></i></a></li>';
}

?>

<?php
if($redux_builder_uw_ar_restate['1agent_tw']){
echo '<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_tw'].' "><i class="fa fa-twitter"></i></a></li>';
}
?>

<?php
if($redux_builder_uw_ar_restate['1agent_li']){
echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_li'].' "><i class="fa fa-linkedin"></i></a></li>';
}
?>

<?php
if($redux_builder_uw_ar_restate['1agent_ig']){
echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_ig'].' "><i class="fa fa-instagram"></i></a></li>';
}
?>

<?php
if($redux_builder_uw_ar_restate['1agent_ytube']){
echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_ytube'].' "><i class="fa fa-youtube"></i></a></li>';
}
?>


</ul>
			</div>
			<div class="col-md-6">
				<div class="headLeft">
					<?php echo $redux_builder_uw_ar_restate['tb-editor']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<div class="ar_nav">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				<?php if ($redux_builder_uw_ar_restate['ar-logo']['url']) : ?>
				 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">	<img src="<?php echo $redux_builder_uw_ar_restate['ar-logo']['url']  ?>" alt="" class="img-fluid"> </a>
				<?php else : ?>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>

				</div>
			</div>
		</div>
		</div>
		<nav class="navbar navbar-expand-md navbar-light">
		<div class="container">
		

					<!-- Your site title as branding in the menu -->
					<?php if ( $redux_builder_uw_ar_restate['ar-logo']['url'] ) { ?>
						
						<a class="ar-mb-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">	<img src="<?php echo $redux_builder_uw_ar_restate['ar-logo']['url']  ?>" alt="" class="img-fluid"> </a>
							

						
					
					<?php } else { ?>

						<a class="navbar-brand ar-mb-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php

					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav nav-fill w-100',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div>
		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
