<?php 
    function my_theme_setup() {
        add_theme_support('custom-header', array(
            'width' => 1920,
            'height' => 1080,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => false,
        ));
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
    }
    add_action('after_setup_theme', 'my_theme_setup');


    function register_my_menus() {
        register_nav_menus(array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        ));
    }
    
    add_action('init', 'register_my_menus');


    function load_theme_styles() {
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
        wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome.css', array(), null, 'all');
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css', array('bootstrap-css', 'fontawesome-css'), '1.0.0', 'all');   
     }
    add_action('wp_enqueue_scripts', 'load_theme_styles');
    

    function load_theme_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'load_theme_scripts');

?>