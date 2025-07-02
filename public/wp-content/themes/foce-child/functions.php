<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// === TOUS LES SCRIPTS ET STYLES ENFANT ici === //
function mon_theme_enfant_enqueue_scripts() {
    // SwiperJS (CDN)
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Slider custom
    wp_enqueue_script(
        'slider-custom',
        get_stylesheet_directory_uri() . '/js/slider.js',
        array('swiper-js'), // dépend de SwiperJS
        null,
        true
    );

    // Fade-in
    wp_enqueue_script(
        'fadein-sections',
        get_stylesheet_directory_uri() . '/js/fadein.js',
        array(), false, true
    );

    // Parallax
    wp_enqueue_script(
        'parallax-js',
        get_stylesheet_directory_uri() . '/js/parallax.js',
        array(), null, true
    );

    // Burger
    wp_enqueue_script(
        'burger-js',
        get_stylesheet_directory_uri() . '/js/burger.js',
        array(), null, true
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_enfant_enqueue_scripts');
