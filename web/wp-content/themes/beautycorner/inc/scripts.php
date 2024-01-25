<?php
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

add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style');
