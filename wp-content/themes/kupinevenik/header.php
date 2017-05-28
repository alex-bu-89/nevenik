<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kupinevenik
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>

	<!-- HEADER -->
	<?php
	/**
	 * Functions hooked into storefront_header action
	 *
	 * @hooked storefront_skip_links                       - 0
	 * @hooked storefront_social_icons                     - 10
	 * @hooked storefront_site_branding                    - 20
	 * @hooked storefront_secondary_navigation             - 30
	 * @hooked storefront_product_search                   - 40
	 * @hooked storefront_primary_navigation_wrapper       - 42
	 * @hooked storefront_primary_navigation               - 50
	 * @hooked storefront_header_cart                      - 60
	 * @hooked storefront_primary_navigation_wrapper_close - 68
	 */
	// do_action( 'storefront_header' );
	?>
	<header id="masthead" role="banner" style="<?php storefront_header_styles(); ?>">
			<div class="container">
					<div class="row">
							<div class="soc-icons col s6 m4">
									<a href="#"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
							</div>
							<div class="col s6 m4 center">
									<!-- <a id="logo-container" href="#" class="brand-logo"><span class="primary-color">Не</span>Веник.ru</a> -->
										<?php storefront_site_title_or_logo(); ?>
							</div>
							<div class="col s12 m4">
									<div class="right-align">
											<p class="phone">
													<!-- <i class="fa fa-phone fa-lg"></i>  -->
													<span class="primary">(812)</span> 555-1234
											</p>
											<p class="opening-hours">
													<!-- <i class="fa fa-clock-o fa-lg"></i>  -->
													Часы работы: Пн-Вт с 9-18
											</p>
									</div>
							</div>
					</div>
			</div>
	</header>

	<!-- MENU -->
	<nav role="navigation">
			<div class="nav-wrapper container center-align">

					<!-- DESCTOPE -->
					<?php
						wp_nav_menu(
							array(
								'theme_location'	=> 'primary',
								'container_class'	=> 'primary-navigation',
								)
						);
					?>

					<!-- MOBILE -->
					<!-- <ul id="nav-mobile" class="side-nav">
							<li><a href="#">О нас</a></li>
							<li><a href="#">Оплата и доставка</a></li>
							<li><a href="#">Услуги</a></li>
							<li><a href="#">Акции</a></li>
							<li><a href="#">Свадебные</a></li>
							<li><a href="#">Контакты</a></li>
					</ul> -->

					<!-- COLLAPSE BUTTON -->
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="fa fa-bars fa-lg"></i></a>

					<!-- <div class="cart right">
							<a href="#"><i class="fa fa-shopping-cart fa-1-5x"></i> 0 шт.</a>
					</div> -->
			</div>
	</nav>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
