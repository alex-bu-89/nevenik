<?php // ==== NAVIGATION ==== //

// Post navigation, a bare bones implementation
if ( !function_exists( 'kupinevenik_navigation' ) ) : function kupinevenik_navigation() {
?>

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

<?php } endif;
