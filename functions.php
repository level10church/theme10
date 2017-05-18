<?php
function theme10_enqueue_styles() {
    if ( !is_admin() ) {
        wp_enqueue_style( 'hemingway_googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Raleway:70
0,400' );
        wp_enqueue_style( 'hemingway_style', get_template_directory_uri() . '/style.css' );

        wp_enqueue_style( 'theme10-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( 'hemingway_style' ),
            wp_get_theme()->get('Version')
        );
    }
}
add_action( 'wp_enqueue_scripts', 'theme10_enqueue_styles' );
?>

