<?php

function bc_register_post_type()
{

    //  Marketing-services start
    $labels = array(
        'name' => esc_html_x('Preise', 'Post type general name', 'beautycorner'),
        'singular_name' => esc_html_x('Preis', 'Post type singular name', 'beautycorner'),
        'menu_name' => esc_html_x('Preise', 'Admin Menu text', 'beautycorner'),
        'name_admin_bar' => esc_html_x('Preise', 'Add New on Toolbar', 'beautycorner'),
        'add_new' => esc_html__('Neu hinzufügen', 'beautycorner'),
        'add_new_item' => esc_html__('Neuen Preis hinzufügen', 'beautycorner'),
        'new_item' => esc_html__('Neuer Preis', 'beautycorner'),
        'edit_item' => esc_html__('Preis bearbeiten', 'beautycorner'),
        'view_item' => esc_html__('Preis anzeigen', 'beautycorner'),
        'all_items' => esc_html__('Alle Preise', 'beautycorner'),
        'search_items' => esc_html__('Preise durchsuchen', 'beautycorner'),
        'parent_item_colon' => esc_html__('Übergeordnete Preise:', 'beautycorner'),
        'not_found' => esc_html__('Keine Preise gefunden.', 'beautycorner'),
        'not_found_in_trash' => esc_html__('Keine Preise im Papierkorb gefunden.', 'beautycorner'),
        'featured_image' => esc_html_x('Preise Titelbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'set_featured_image' => esc_html_x('Titelbild setzen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'remove_featured_image' => esc_html_x('Titelbild entfernen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'use_featured_image' => esc_html_x('Als Titelbild verwenden', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'archives' => esc_html_x('Preisarchiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'beautycorner'),
        'insert_into_item' => esc_html_x('In Preis einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'beautycorner'),
        'uploaded_to_this_item' => esc_html_x('Zu diesem Preis hochgeladen', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'beautycorner'),
        'filter_items_list' => esc_html_x('Preisliste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'beautycorner'),
        'items_list_navigation' => esc_html_x('Preisliste Navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'beautycorner'),
        'items_list' => esc_html_x('Preisliste', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'beautycorner'),
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'prices'),
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => true,
        'menu_position' => 5,
        'hierarchical' => true,
    );

    register_post_type('bc-prices', $args);

    unset($labels);
    unset($args);

    $labels = array(
        'name' => esc_html_x('Angebot', 'Post type general name', 'beautycorner'),
        'singular_name' => esc_html_x('Angebot', 'Post type singular name', 'beautycorner'),
        'menu_name' => esc_html_x('Angebot', 'Admin Menu text', 'beautycorner'),
        'name_admin_bar' => esc_html_x('Angebot', 'Add New on Toolbar', 'beautycorner'),
        'add_new' => esc_html__('Neu hinzufügen', 'beautycorner'),
        'add_new_item' => esc_html__('Neues Angebot hinzufügen', 'beautycorner'),
        'new_item' => esc_html__('Neues Angebot', 'beautycorner'),
        'edit_item' => esc_html__('Angebot bearbeiten', 'beautycorner'),
        'view_item' => esc_html__('Angebot anzeigen', 'beautycorner'),
        'all_items' => esc_html__('Alle Angebote', 'beautycorner'),
        'search_items' => esc_html__('Angebote durchsuchen', 'beautycorner'),
        'parent_item_colon' => esc_html__('Übergeordnete Angebote:', 'beautycorner'),
        'not_found' => esc_html__('Keine Angebote gefunden.', 'beautycorner'),
        'not_found_in_trash' => esc_html__('Keine Angebote im Papierkorb gefunden.', 'beautycorner'),
        'featured_image' => esc_html_x('Angebot Titelbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'set_featured_image' => esc_html_x('Titelbild setzen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'remove_featured_image' => esc_html_x('Titelbild entfernen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'use_featured_image' => esc_html_x('Als Titelbild verwenden', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'beautycorner'),
        'archives' => esc_html_x('Angebot Archiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'beautycorner'),
        'insert_into_item' => esc_html_x('In Angebot einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'beautycorner'),
        'uploaded_to_this_item' => esc_html_x('Zu diesem Angebot hochgeladen', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'beautycorner'),
        'filter_items_list' => esc_html_x('Angebot Liste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'beautycorner'),
        'items_list_navigation' => esc_html_x('Angebot Liste Navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'beautycorner'),
        'items_list' => esc_html_x('Angebot Liste', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'beautycorner'),
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => false, // відключення архівної сторінки
        'rewrite' => array('slug' => 'angebot'),        
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => true,
        'menu_position' => 5,
        'hierarchical' => false,
    );

    register_post_type('bcangebot', $args);
}

add_action('init', 'bc_register_post_type', 99);



