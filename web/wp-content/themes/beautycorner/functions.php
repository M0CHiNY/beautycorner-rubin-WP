<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */



/**
 * Implement scripts
 */

require get_stylesheet_directory() . '/inc/scripts.php';
require get_stylesheet_directory() . '/inc/svg-support.php';
require get_stylesheet_directory() . '/inc/cpt.php';
require get_stylesheet_directory() . '/custom-oceanwp/cart/mini-cart.php';
// require get_stylesheet_directory() . '/custom-oceanwp/cart/cart.php';
require get_stylesheet_directory() . '/custom-oceanwp/settings.php';


function bc_page_layout_class( $class ) {

	// Alter your layout
	if ( is_singular( 'page' ) ) {
		$class = 'full-width';
	}

	// Return correct class
	return $class;

}
add_filter( 'ocean_post_layout_class', 'bc_page_layout_class', 20 );
// remove_action( 'woocommerce_product_image_render_on_sale_badge', 'render_on_sale_badge', 10, 3 );