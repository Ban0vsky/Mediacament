<?php
    add_action('wp_enqueue_scripts', 'add_scripts');
    function add_scripts(){
        wp_register_script('jquery-3.2.1.min', JS_URL . '/jquery-3.2.1.min.js', array(),'1.1', true);
        wp_enqueue_script('jquery-3.2.1.min');

        wp_register_script('popper', JS_URL . '/popper.js', array(),'1.1', true);
        wp_enqueue_script('popper');

        wp_register_script('bootstrap.min', JS_URL . '/bootstrap.min.js', array(),'1.1', true);
        wp_enqueue_script('bootstrap.min');

        wp_register_script('stellar', JS_URL . '/stellar.js', array(),'1.1', true);
        wp_enqueue_script('stellar');

        wp_register_script('theme', JS_URL . '/theme.js', array(),'1.1', true);
        wp_enqueue_script('theme');
    }