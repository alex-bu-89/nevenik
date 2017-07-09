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
<meta name="yandex-verification" content="a3d606ddbe165f57" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>

<!-- Yandex API -->
<script src="https://api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44942521 = new Ya.Metrika({ id:44942521, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44942521" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

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
							<div class="soc-icons col s12 m4">
									<a href="https://vk.com/kupinevenik" target="_blank"><i class="fa fa-vk fa-2x" aria-hidden="true" target="_blank"></i></a>
									<a href="https://www.facebook.com/kupinevenik/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true" target="_blank"></i></a>
									<a href="https://www.instagram.com/kupinevenik/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
							</div>
							<div class="col s12 m4 center">
									<!-- <a id="logo-container" href="#" class="brand-logo"><span class="primary-color">Не</span>Веник.ru</a> -->
										<?php storefront_site_title_or_logo(); ?>
							</div>
							<div class="col s12 m4 сontact-details">
									<div class="right-align">
											<p class="phone">
													<!-- <i class="fa fa-phone fa-lg"></i>  -->
													<span class="primary">8 (921)</span> 940-84-80
											</p>
											<p>Часы работы:<br /> Пн-Пт 9-20, Сб-Вс 11-17</p>
									</div>
							</div>
					</div>
			</div>
	</header>

	<!-- MENU -->
	<div class="navigation-wrapper">
		<nav id="navigation" role="navigation">
			<div class="nav-wrapper container center-align">

					<!-- DESCTOPE -->
					<div class="hide-on-med-and-down">
						<?php
							wp_nav_menu(
								array(
									'theme_location'	=> 'primary',
									'container_class'	=> 'primary-navigation',
									)
							);
						?>
					</div>
					<div id="nav-mobile" class="side-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location'	=> 'primary',
									'container_class'	=> 'primary-navigation',
									)
							);
						?>
					</div>

					<!-- COLLAPSE BUTTON -->
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="fa fa-bars fa-lg"></i></a>

					<!-- <div class="cart right">
							<a href="#"><i class="fa fa-shopping-cart fa-1-5x"></i> 0 шт.</a>
					</div> -->
			</div>
	</nav>
</div>

	<section id="header-widget-region">
		<div class="container">
			<?php do_action( 'storefront_before_content' ); //  @hooked storefront_header_widget_region - 10 ?>
		</div>
	</section>

	<section id="breadcrumbs">
		<div class="container">
			<?php do_action( 'storefront_content_top' ); // @hooked woocommerce_breadcrumb - 10 ?>
		</div>
	</section>

	<?php // @TODO if( is_front_page() ) { ?>

	<?php //} ?>

	<section id="content" tabindex="-1">
		<div class="container">
