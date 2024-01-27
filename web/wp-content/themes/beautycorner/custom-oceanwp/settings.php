<?php

function bc_custom_register_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Beautycorner-Rubin Filterattribute', 'beautycorner'),
            'id' => 'beautycorner_rubin_filter_attributes',
            'description' => __('Dies ist eine benutzerdefinierte Seitenleiste für Beautycorner-Rubin Filterattribute. Es wird für die Registrierung von Benutzern verwendet.', 'beautycorner'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'bc_custom_register_sidebar');


