<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('| ', true, 'right'); bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div id="container">
    <header>
        <a  id="site-name" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <p id="site-description"><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu(array("theme_location" => "nav", "container_id" => "nav")); ?>
    </header>
<main>
