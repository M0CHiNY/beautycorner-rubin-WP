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
function oceanwp_child_enqueue_parent_style()
{

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme = wp_get_theme('OceanWP');
	$version = $theme->get('Version');

	// Load the stylesheet.
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('oceanwp-style'), $version);
	wp_enqueue_style('beautycorner-global', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all');
	wp_enqueue_style('beautycorner-cunstom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_script('beautycorner-main', get_stylesheet_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);

	wp_enqueue_script('beautycorner-custon', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);

	if (is_page_template('template-prices.php')) {
		wp_enqueue_script('masonry', get_stylesheet_directory_uri() . '/assets/js/mesonry.js', array(), '1.0.0', true);
	}

	if (is_page_template('kontakt.php')) {
		wp_enqueue_script('beautycorner-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
	}

}

add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style', 999);

// require get_stylesheet_directory() . '/inc/scripts.php';

require get_stylesheet_directory() . '/inc/svg-support.php';

require get_stylesheet_directory() . '/inc/cpt.php';
require get_stylesheet_directory() . '/inc/woocommerce/customWooCommerce.php';

require get_stylesheet_directory() . '/custom-oceanwp/cart/mini-cart.php';

// require get_stylesheet_directory() . '/custom-oceanwp/cart/cart.php';

require get_stylesheet_directory() . '/custom-oceanwp/settings.php';





function bc_page_layout_class($class)
{



	// Alter your layout

	if (is_singular('page')) {

		$class = 'full-width';

	}



	// Return correct class

	return $class;



}

add_filter('ocean_post_layout_class', 'bc_page_layout_class', 20);


// add_filter('woocommerce_get_price_html', 'my_custom_price_html', 10, 2);

// function my_custom_price_html( $price, $product ) {
//     // Ваш код тут для перевірки умов або вимкнення ціни
//     // Наприклад, якщо ви хочете приховати знижену ціну:
//     if ( $product->is_on_sale() ) {
//         $price = ''; // Пуста строка, щоб ціна не відображалася
//     }

//     return $price;
// }

