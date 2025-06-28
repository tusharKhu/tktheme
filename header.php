<?php
/**
 * Header template.
 * 
 * @package tktheme
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"><!-- language attribute basically set language based on what u want if want to chnage labguage based on country so it can change dynamicaaly -->
<head>
    <meta charset="<?php bloginfo('charset');  ?>"> <!-- blog info display the information for the current site -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('hello-class'); ?>> <!-- It add bunch of class in different places so we can use it for styling purpose-->
  <?php
    if(function_exists('wp_body_open'))
    {
        wp_body_open();  //If we want to add the scripts inside the body in that case we can use it for analytic etc purposes...
    }
  ?>
<header> Header</header>