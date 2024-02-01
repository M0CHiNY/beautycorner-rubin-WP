<?php

/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class('loading'); ?> <?php oceanwp_schema_markup('html'); ?>>



  <?php wp_body_open(); ?>


  <?php do_action('ocean_before_outer_wrap'); ?>

  <!-- custom preloader start -->
  <!-- <div class="loader-wrapper">
    <div class="loader-line"></div>
  </div> -->
  <!-- custom preloader end -->

  <div id="outer-wrap" class="site clr">

    <a class="skip-link screen-reader-text" href="#main">
      <?php echo esc_html(oceanwp_theme_strings('owp-string-header-skip-link', false)); ?>
    </a>

    <?php do_action('ocean_before_wrap'); ?>

    <div id="wrap" class="clr">

      <?php do_action('ocean_top_bar'); ?>

      <?php do_action('ocean_header'); ?>

      <?php do_action('ocean_before_main'); ?>

      <main id="main" class="site-main clr" <?php oceanwp_schema_markup('main'); ?> role="main">

        <?php do_action('ocean_page_header'); ?>


        <?php
        if (function_exists('bcn_display') && (is_shop() || is_product_category() || is_product())): ?>
          <div class="container clr">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php bcn_display(); ?>
            </div>
            <div class='bc-title'>
              <?php if (!is_product()) {
              echo '<h1>' . woocommerce_page_title().'</h1>';
              }
              ?>
            </div>
          </div>
        <?php endif; ?>

        