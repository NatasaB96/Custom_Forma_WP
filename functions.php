<?php
    function tema_setup(){
        add_theme_support('title-tag');
    }
 
add_action('after_setup_theme', 'tema_setup');


function theme_styles(){
    wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/owl.theme.default.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js(){
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/owl.carousel.min.js', array('jquery'), '', true  );
    wp_enqueue_script('owl_js', get_template_directory_uri() . '/main.js', array('jquery'), '', true  );
    wp_enqueue_script( 'contact-form',
    get_template_directory_uri() . '/contact-form.js',
    array(), '', true );
}
add_action('wp_enqueue_scripts', 'theme_js');

function widget(){
    register_sidebar(array(
        'name' => 'footer-1',
        'id' => 'footer-1',
        'before_widget' =>'<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<i>',
        'after_title' => '</i>'
    ));
    register_sidebar(array(
        'name' => 'footer-2',
        'id' => 'footer-2',
        'before_widget' =>'<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<i>',
        'after_title' => '</i>'
    ));
    register_sidebar(array(
        'name' => 'footer-3',
        'id' => 'footer-3',
        'before_widget' =>'<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<i>',
        'after_title' => '</i>'
    ));
}

add_action('widgets_init', 'widget');

include('custom-shortcodes.php');
