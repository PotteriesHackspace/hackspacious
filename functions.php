<?php

function load_fonts() {
    wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_style('googleFonts');
}

add_action('wp_print_styles', 'load_fonts');

function spacious_footer_copyright () {
    return;
}

include_once get_template_directory() . '/../spacious/functions.php';

function hackspacious_site_link() {
   return '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
}

function hackspacious_footer_copyright() {
    $footer = '<div class="copyright">' . __('Copyright &copy; ', 'spacious') . date('Y') . ' ' . hackspacious_site_link() . '.</div>';
    echo $footer;
}
add_action( 'spacious_footer_copyright', 'hackspacious_footer_copyright', 10 );