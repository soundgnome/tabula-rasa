<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
    <header>
        <a  id="site-name" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <p id="site-description"><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu(array('theme_location' => 'nav', 'container_id' => 'nav')); ?>
    </header>
<main>
