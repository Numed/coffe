<?php

    function theme_styles(){
        wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
    }

    function theme_script() {
        wp_register_script('scripts', get_template_directory_uri() . '/assets/js/index.js');
    }

    function theme_supports(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }

    function nav_menu(){
        register_nav_menus(array(
            'home' => __('Coffee house'),
            'footer' => __('Footer nav')
        ));
    }

    function add_styles_links($atts){
        $atts['class'] = 'nav-link';
        return $atts;
    }
    

    add_action('wp_enqueue_scripts', 'theme_styles');
    add_action('wp_enqueue_scripts', 'theme_script');
    add_action('after_setup_theme', 'theme_supports');
    add_action("init", "nav_menu");
    add_filter('nav_menu_css_class', 'add_styles_links',10, 4);

?>