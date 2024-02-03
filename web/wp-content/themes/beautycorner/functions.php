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
	// wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('oceanwp-style'), $version);
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
// require get_stylesheet_directory() . '/inc/woocommerce/customWooCommerce.php';

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



add_action('ocean_after_single_product_price', 'ts_add_notice_free_shipping');


function ts_add_notice_free_shipping()
{
	$free_shipping_settings = get_option('woocommerce_free_shipping_1_settings');
	$amount_for_free_shipping = $free_shipping_settings['min_amount'];
	$cart = WC()->cart->get_subtotal();
	$remaining = $amount_for_free_shipping - $cart;
	if ($amount_for_free_shipping > $cart) {
		$notice = sprintf("Noch %s bis zum gratis Versand.", wc_price($remaining));
		wc_print_notice($notice, 'notice');
	} else {
		wc_print_notice("Dir steht kostenloser Versand zur Verfügung", 'notice');
	}
	
}


function bc_hide_shipping_for_order_total($rates)
{
	$free = array();

	$order_total = WC()->cart->get_subtotal();

	$free_shipping_settings = get_option('woocommerce_free_shipping_1_settings');
	$amount_for_free_shipping = $free_shipping_settings['min_amount'];

	if ($order_total >= $amount_for_free_shipping) {
		foreach ($rates as $rate_id => $rate) {
			// Перевірка, чи метод безкоштовної доставки
			if ('free_shipping' === $rate->get_method_id()) {
				$free[$rate_id] = $rate;
			}
			if ('local_pickup' === $rate->get_method_id()) {
				$free[$rate_id] = $rate;
			}
		}

	}
	return !empty($free) ? $free : $rates;
}
add_filter('woocommerce_package_rates', 'bc_hide_shipping_for_order_total', 100);

 