<?php
/**
 * Theme Fuctions.
 * 
 * @package tktheme
 */

 function tktheme_enqueue_scripts()
 {
    
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css'),'all');
 }

 add_action('wp_enqueue_scripts','tktheme_enqueue_scripts'); // on wp enqueue script hook this action will be trigerred to register style and js files

 ?>