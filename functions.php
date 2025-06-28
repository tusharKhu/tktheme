<?php
/**
 * Theme Fuctions.
 * 
 * @package tktheme
 */

 function tktheme_enqueue_scripts()
 {
    // wp_enqueue_style('style-css', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css'),'all');
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [] ,  filemtime( get_template_directory() . '/assets/main.js'), true );

    wp_register_style('style-css', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [] ,  filemtime( get_template_directory() . '/assets/main.js'), true );

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
 }

 add_action('wp_enqueue_scripts','tktheme_enqueue_scripts'); // on wp enqueue script hook this action will be trigerred to register style and js files

 ?>