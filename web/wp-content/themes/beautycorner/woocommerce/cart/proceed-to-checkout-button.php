<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
	class="checkout-button button checkout-button--bc alt wc-forward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
	<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0_147_3554)">
			<path
				d="M1.39258 1.39288H5.85686L6.32651 5.85717M6.32651 5.85717L7.47472 16.759C7.52102 17.1975 7.72797 17.6034 8.05569 17.8985C8.38341 18.1936 8.80873 18.357 9.24972 18.3572H20.5354C20.9335 18.3572 21.3202 18.2241 21.634 17.9792C21.9479 17.7343 22.1708 17.3915 22.2676 17.0054L24.4997 8.07681C24.5657 7.81351 24.5707 7.53863 24.5145 7.27308C24.4583 7.00753 24.3423 6.75828 24.1753 6.54429C24.0083 6.3303 23.7947 6.15719 23.5508 6.03813C23.3069 5.91906 23.039 5.85718 22.7676 5.85717H6.32651ZM20.0461 24.6072C19.8093 24.6072 19.5822 24.5131 19.4148 24.3457C19.2474 24.1782 19.1533 23.9511 19.1533 23.7143C19.1533 23.4775 19.2474 23.2504 19.4148 23.083C19.5822 22.9155 19.8093 22.8215 20.0461 22.8215C20.2829 22.8215 20.5101 22.9155 20.6775 23.083C20.8449 23.2504 20.939 23.4775 20.939 23.7143C20.939 23.9511 20.8449 24.1782 20.6775 24.3457C20.5101 24.5131 20.2829 24.6072 20.0461 24.6072ZM8.43901 24.6072C8.20221 24.6072 7.9751 24.5131 7.80766 24.3457C7.64022 24.1782 7.54615 23.9511 7.54615 23.7143C7.54615 23.4775 7.64022 23.2504 7.80766 23.083C7.9751 22.9155 8.20221 22.8215 8.43901 22.8215C8.67581 22.8215 8.90291 22.9155 9.07035 23.083C9.2378 23.2504 9.33186 23.4775 9.33186 23.7143C9.33186 23.9511 9.2378 24.1782 9.07035 24.3457C8.90291 24.5131 8.67581 24.6072 8.43901 24.6072Z"
				stroke="white" stroke-width="1.78571" stroke-linecap="round" stroke-linejoin="round" />
		</g>
		<defs>
			<clipPath id="clip0_147_3554">
				<rect width="25" height="25" fill="white" transform="translate(0.5 0.5)" />
			</clipPath>
		</defs>
	</svg>
	<span>
		<?php esc_html_e('Proceed to checkout', 'woocommerce'); ?>
	</span>
</a>