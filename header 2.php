<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Open+Sans" rel="stylesheet">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <nav class="site-nav">
            <div class="menu"><?php 
            $args = array(
                'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu( $args ); ?></div>
            <div class="title"><?php bloginfo('name'); ?></div>
    </nav>

    <div class="container">
        <header class="site-header">
        </header>