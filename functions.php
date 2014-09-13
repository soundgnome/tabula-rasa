<?php
define('FALLBACK_CONTENT_WIDTH', 960);

add_theme_support('automatic-feed-links');
//add_theme_support('custom-background');
//add_theme_support('custom-header');
add_theme_support('html5');
add_theme_support('menus');
//add_theme_support('post-formats');
add_theme_support('post-thumbnails');

// remove superfluous content filter
foreach (array('the_content', 'the_title', 'comment_text' ) as $filter)
    if ( $priority = has_filter($filter, 'capital_P_dangit') )
        remove_filter($filter, 'capital_P_dangit', $priority);

function rasa_init() {

    register_nav_menu('nav', 'Main Navigation');
    register_sidebar();

    if (!isset($content_width)) {
        $content_width = FALLBACK_CONTENT_WIDTH;
    }

}
add_action('init', 'rasa_init');
