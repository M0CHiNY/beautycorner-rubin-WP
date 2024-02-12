<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

</main><!-- #main -->

<?php do_action('ocean_after_main'); ?>
<?php do_action('ocean_before_footer'); ?>
<div class="footer footer-cb custom parallax-footer">
	<div class="footer__box">
		<div class="container">
			<div class="footer__items">
				<div class="footer__item">
					<div class="footer____item services">

						<?php if ($services = get_field('footer__services', 'options')): ?>
							<?php foreach ($services as $service): ?>
								<?php if (!empty($service['link-to-services'])): ?>
									<a href="<?php echo $service['link-to-services']; ?>" class="services__list_link">
										<img src="<?php echo $service['bild']['url']; ?>"
											alt="<?php echo $service['bild']['alt']; ?>">
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>

					</div>
					<div class="footer____itembox">
						<?php if ($adress = get_field('adressen', 'options')):
							$counter = 0;
							foreach ($adress as $arrayAdress):
								?>
								<?php if ($counter === 0): ?>
									<div class="footer____itembox-title">
										<?php echo $arrayAdress['name-of-salon']; ?>
									</div>
									<?php echo $arrayAdress['adresse_der_unterkunft']; ?>
								</div>
								<?php
								break;
								endif; ?>
							<?php
							$counter++;
							endforeach; ?>
					<?php endif; ?>

					<div class="footer__logo-img">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="footer__item">
					<?php
					$addresses = get_field('adressen', 'options');
					if ($addresses):
						foreach ($addresses as $key => $address):
							if ($key !== 0): ?>
								<div class="footer____itembox">
									<div class="footer____itembox-title">
										<?php echo $address['name-of-salon']; ?>
									</div>
									<div class="footer____itembox-address">
										<?php echo $address['adresse_der_unterkunft']; ?>
									</div>
								</div>
							<?php endif;
						endforeach;
					endif;
					?>
				</div>

			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container">
			<div class="footer__bottom-inner">
				<div class="footer__bottom-text">
					<a href="#" target="_blank" rel="noopener noreferrer"> ©
						<?php echo date('Y') ?> - Alle Rechte vorbehalten
					</a>
				</div>
				<div class="footer__bottom-text">
					Beauty Corner Rubin
				</div>
				<div class="footer__bottom-text">
					Entwickelt von<a href="https://rankexperts.ch/" target="_blank" rel="noopener noreferrer">
						<span>Rankexperts</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
// Elementor `footer` location.
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
	?>

	<?php do_action('ocean_footer'); ?>

<?php } ?>

<?php do_action('ocean_after_footer'); ?>

</div><!-- #wrap -->

<?php do_action('ocean_after_wrap'); ?>

</div><!-- #outer-wrap -->

<?php do_action('ocean_after_outer_wrap'); ?>

<?php
// If is not sticky footer.
if (!class_exists('Ocean_Sticky_Footer')) {
	get_template_part('partials/scroll-top');
}
?>

<?php
// Search overlay style.
if ('overlay' === oceanwp_menu_search_style()) {
	get_template_part('partials/header/search-overlay');
}
?>

<?php
// If sidebar mobile menu style.
if ('sidebar' === oceanwp_mobile_menu_style()) {

	// Mobile panel close button.
	if (get_theme_mod('ocean_mobile_menu_close_btn', true)) {
		get_template_part('partials/mobile/mobile-sidr-close');
	}
	?>

	<?php
	// Mobile Menu (if defined).
	get_template_part('partials/mobile/mobile-nav');
	?>

	<?php
	// Mobile search form.
	if (get_theme_mod('ocean_mobile_menu_search', true)) {
		ob_start();
		get_template_part('partials/mobile/mobile-search');
		echo ob_get_clean();
	}
}
?>

<?php
// If full screen mobile menu style.
if ('fullscreen' === oceanwp_mobile_menu_style()) {
	get_template_part('partials/mobile/mobile-fullscreen');
}
?>

<?php wp_footer(); ?>
</body>

</html>