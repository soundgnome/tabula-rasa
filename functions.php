<?php
define('FALLBACK_CONTENT_WIDTH', 960);

add_theme_support('automatic-feed-links');
//add_theme_support('custom-background');
//add_theme_support('custom-header');
add_theme_support('html5');
add_theme_support('menus');
//add_theme_support('post-formats');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');


// remove superfluous content filter
foreach (array('the_content', 'the_title', 'comment_text' ) as $filter)
    if ( $priority = has_filter($filter, 'capital_P_dangit') )
        remove_filter($filter, 'capital_P_dangit', $priority);


function rasa_init() {

    register_nav_menu('nav', 'Main Navigation');

    if (!isset($content_width)) {
        $content_width = FALLBACK_CONTENT_WIDTH;
    }

}
add_action('init', 'rasa_init');


function rasa_widgets_init() {
    $sidebar_args = array(
        'name' => __('Sidebar', 'tabula-rasa'),
        'id' => 'rasa-sidebar',
    );
    register_sidebar($sidebar_args);
}
add_action('widgets_init', 'rasa_widgets_init');


//add_action('after_setup_theme', function() { load_theme_textdomain('tabula-rasa'); });
