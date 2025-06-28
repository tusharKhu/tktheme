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
<body>
    <header> Header</header>