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

// register menu start
function bc_register_menus()
{
	register_nav_menu('categories-menu', __('Menü Kategorien'));
}
// register menu end

add_action('init', 'bc_register_menus');

require get_stylesheet_directory() . '/inc/svg-support.php';

require get_stylesheet_directory() . '/inc/cpt.php';


require get_stylesheet_directory() . '/custom-oceanwp/cart/mini-cart.php';


require get_stylesheet_directory() . '/custom-oceanwp/settings.php';





function bc_page_layout_class($class)
{

	if (is_singular('page')) {

		$class = 'full-width';

	}

	return $class;

}

add_filter('ocean_post_layout_class', 'bc_page_layout_class', 20);



add_action('ocean_after_single_product_price', 'ts_add_notice_free_shipping');


function ts_add_notice_free_shipping()
{
	$free_shipping_settings = get_option('woocommerce_free_shipping_1_settings');
	$amount_for_free_shipping = isset($free_shipping_settings['min_amount']) ? $free_shipping_settings['min_amount'] : 0;
	$cart_total = WC()->cart->get_subtotal();
	$cart_currency = get_woocommerce_currency_symbol();
	$remaining = $amount_for_free_shipping - $cart_total;

	if ($cart_total <= $amount_for_free_shipping && $remaining >= 0) {
		$notice = sprintf("Noch %s %s bis zum gratis Versand.", $remaining, $cart_currency);
		wc_print_notice($notice, 'notice');
	} elseif ($remaining > 0) {
		$notice = sprintf("Noch %s %s bis zum gratis Versand.", $remaining, $cart_currency);
		wc_print_notice($notice, 'notice');
	} elseif ($remaining < 0) { // зміна тут
		$notice = "Dir steht kostenloser Versand zur Verfügung";
		wc_print_notice($notice, 'notice');
	}
}






function bc_hide_shipping_for_order_total($rates)
{
	$free = array();

	$order_total = WC()->cart->get_subtotal();

	// $order_total = WC()->cart->get_total('edit');

	$free_shipping_settings = get_option('woocommerce_free_shipping_1_settings');
	$amount_for_free_shipping = $free_shipping_settings['min_amount'];

	if ($order_total >= intval($amount_for_free_shipping)) {
		foreach ($rates as $rate_id => $rate) {
			// Перевірка, чи метод безкоштовної доставки або самовивіз
			if ('free_shipping' === $rate->get_method_id() || 'local_pickup' === $rate->get_method_id()) {
				$free[$rate_id] = $rate;
			}
		}
	} else {
		// Якщо сума менша за 250, показати інші методи доставки
		foreach ($rates as $rate_id => $rate) {
			if ('free_shipping' !== $rate->get_method_id()) {
				$free[$rate_id] = $rate;
			}
		}
	}

	return !empty($free) ? $free : $rates;
}
add_filter('woocommerce_package_rates', 'bc_hide_shipping_for_order_total', 100);

// Alter WooCommerce View Cart Text 
add_filter('gettext', function ($translated_text) {
	if ('View cart' === $translated_text) {
		$translated_text = 'Warenkorb anzeigen';
	}
	return $translated_text;
});

// tags text for single product

add_filter('woocommerce_get_price_html', 'custom_display_price_without_tax', 10, 2);
function custom_display_price_without_tax($price, $product)
{
	if ($product->is_taxable() && !wc_prices_include_tax() && $product->is_purchasable() && is_product()) {
		$price = wc_price($product->get_price_excluding_tax()) . ' ' . __('exkl. MwSt.', 'woocommerce');
	}
	return $price;
}


// Set Minimum Order Amount in WooCommerce
remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );

add_filter('woof_clear_all_text', function($default_text) {
    return 'Filter löschen';
}, 99, 1);


