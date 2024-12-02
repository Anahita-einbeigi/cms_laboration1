<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title> Lab1 </title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'menu_class' => 'header-nav'
        ));
        ?>
    </nav>
</header>