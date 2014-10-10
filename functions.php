<?php

function load_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_style('googleFonts');
}
add_action('wp_print_styles', 'load_fonts');
