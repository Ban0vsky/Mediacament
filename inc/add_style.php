<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    function add_styles(){
        wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap' );

        wp_register_style( 'font', CSS_URL.'/font-awesome.min.css' );
        wp_enqueue_style( 'font' );

        wp_enqueue_style( 'jquery-ui' );

        wp_register_style( 'Mainstyle', CSS_URL.'/style.css' );
        wp_enqueue_style( 'Mainstyle' );

        wp_register_style( 'Responsive', CSS_URL.'/responsive.css' );
        wp_enqueue_style( 'Responsive' );
    }