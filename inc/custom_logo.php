<?php
    add_action( 'after_setup_theme', 'theme_prefix_setup' );
    function theme_prefix_setup() {
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 800,
            'flex-width' => true,
        ) );
    }