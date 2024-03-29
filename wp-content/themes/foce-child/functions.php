<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'slider-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/assets/js/menu.js', [], '', true);
    wp_enqueue_script('slider-script', get_stylesheet_directory_uri() . '/assets/js/slider.js', [], '', true);
    wp_enqueue_script('slider-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
    wp_enqueue_script('parallaxe-script', get_stylesheet_directory_uri() . '/assets/js/parallaxe.js', [], '', true);
    wp_enqueue_script('lieu-script', get_stylesheet_directory_uri() . '/assets/js/lieu.js', [], '', true);
    
    
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

