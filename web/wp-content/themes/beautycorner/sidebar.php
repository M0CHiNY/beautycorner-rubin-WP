<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package OceanWP WordPress theme
 */

// Retunr if full width or full screen.
if (in_array(oceanwp_post_layout(), array('full-screen', 'full-width'), true)) {
	return;
} ?>

<?php do_action('ocean_before_sidebar'); ?>

<aside id="right-sidebar" class="sidebar-container widget-area sidebar-primary" <?php oceanwp_schema_markup('sidebar'); ?> role="complementary" aria-label="<?php esc_attr_e('Primary Sidebar', 'oceanwp'); ?>">

	<?php do_action('ocean_before_sidebar_inner'); ?>

	<div id="right-sidebar-inner" class="clr">

		<?php
		$sidebar = oceanwp_get_sidebar();
		if (!is_product_category()) {
			if ($sidebar) {

				dynamic_sidebar($sidebar);
			}
		} else {

			if (is_active_sidebar('beautycorner_rubin_filter_attributes')) {
				echo '<div class="sidebar-box beautycorner__customsitebar">';
				dynamic_sidebar('beautycorner_rubin_filter_attributes');
				echo '</div">';
			}
		}

		?>

	</div><!-- #sidebar-inner -->

	<?php do_action('ocean_after_sidebar_inner'); ?>

</aside><!-- #right-sidebar -->

<?php do_action('ocean_after_sidebar'); ?>