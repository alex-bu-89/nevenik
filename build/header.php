<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="yandex-verification" content="a3d606ddbe165f57" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel='stylesheet' id='kupinevenik-roboto-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C400%2C700&#038;subset=cyrillic&#038;ver=4.8' type='text/css' media='all' />
    <link rel='stylesheet' id='kupinevenik-ledger-css'  href='https://fonts.googleapis.com/css?family=Ledger&#038;subset=cyrillic&#038;ver=4.8' type='text/css' media='all' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.8' type='text/css' media='all' />
    <?php wp_head(); ?>

    <!-- Yandex API -->
    <script src="https://api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44942521 = new Ya.Metrika({ id:44942521, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44942521" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">

        <!-- <div id="wrap-header" class="wrap-header">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
                <button id="responsive-menu-toggle"><?php _e( 'Menu', 'voidx' ); ?></button>
                <nav id="site-navigation" class="site-navigation">
                    <div id="responsive-menu"><?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>
                </nav>
            </header>
        </div> -->

        <header id="masthead" role="banner">
			<div class="container">
				<div class="row">
					<div class="soc-icons col s12 m4">
						<a href="https://vk.com/kupinevenik" target="_blank"><i class="fa fa-vk fa-2x" aria-hidden="true" target="_blank"></i></a>
						<a href="https://www.facebook.com/kupinevenik/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true" target="_blank"></i></a>
						<a href="https://www.instagram.com/kupinevenik/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 m4 center">
						<!-- <a id="logo-container" href="#" class="brand-logo"><span class="primary-color">Не</span>Веник.ru</a> -->
						<?php kupinevenik_site_title_or_logo(); ?>
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

        <?php kupinevenik_navigation(); ?>

        <?php if( is_front_page() ) { ?>
            <section class="container main-slider">
            	<?php echo do_shortcode("[metaslider id=69]"); ?>
            </section>
        <?php } ?>
