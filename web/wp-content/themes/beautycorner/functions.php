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

function rc_woocommerce_recently_viewed_products( $atts, $content = null ) {

	// Get shortcode parameters
	extract(shortcode_atts(array(
		"per_page" => '5'
	), $atts));

	// Get WooCommerce Global
	global $woocommerce;

	// Get recently viewed product cookies data
	$viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] ) : array();
	$viewed_products = array_filter( array_map( 'absint', $viewed_products ) );

	// If no data, quit
	if ( empty( $viewed_products ) )
		return __( 'You have not viewed any product yet!', 'rc_wc_rvp' );

	// Create the object
	ob_start();

	// Get products per page
	if( !isset( $per_page ) ? $number = 5 : $number = $per_page )

	// Create query arguments array
    $query_args = array(
    				'posts_per_page' => $number, 
    				'no_found_rows'  => 1, 
    				'post_status'    => 'publish', 
    				'post_type'      => 'product', 
    				'post__in'       => $viewed_products, 
    				'orderby'        => 'rand'
    				);

	// Add meta_query to query args
	$query_args['meta_query'] = array();

    // Check products stock status
    $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();

	// Create a new query
	$r = new WP_Query($query_args);

	// If query return results
	if ( $r->have_posts() ) {

		$content = '<ul class="rc_wc_rvp_product_list_widget">';

		// Start the loop
		while ( $r->have_posts()) {
			$r->the_post();
			global $product;

			$content .= '<li>
				<a href="' . get_permalink() . '">
					' . ( has_post_thumbnail() ? get_the_post_thumbnail( $r->post->ID, 'shop_thumbnail' ) : woocommerce_placeholder_img( 'shop_thumbnail' ) ) . ' ' . get_the_title() . '
				</a> ' . $product->get_price_html() . '
			</li>';
		}

		$content .= '</ul>';

	}

	// Get clean object
	$content .= ob_get_clean();
	
	// Return whole content
	return $content;
}

// Register the shortcode
add_shortcode("woocommerce_recently_viewed_products", "rc_woocommerce_recently_viewed_products");

