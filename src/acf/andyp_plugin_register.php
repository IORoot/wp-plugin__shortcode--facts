<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Shortcode [facts]',
        'icon'      => 'book-alphabet',
        'color'     => '#00f',
        'path'      => __FILE__,
    ]);
} );