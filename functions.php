<?php
// Negate censorship
foreach (array('the_content', 'the_title', 'comment_text' ) as $filter)
  if ( $priority = has_filter($filter, 'capital_P_dangit') )
    remove_filter($filter, 'capital_P_dangit', $priority);

// Set up dynamic menu and sidebar
function register_theme_bits() {

  if (function_exists('register_nav_menu')) {
    add_theme_support('menus');
    register_nav_menu('nav', 'Main Navigation');
  }

  if (function_exists('register_sidebar')) register_sidebar();

}
add_action('init', 'register_theme_bits');

// Usually wanted
add_theme_support('post-thumbnails');

/* Shortcode Template
http://codex.wordpress.org/Shortcode_API

function foo_shortcode($atts, $content=null, $code='') {
  extract(shortcode_atts(array(
                               'bar' => 'default value'
                               ), $atts));
  return $bar;
}
add_shortcode('foo', 'foo_shortcode');
*/

?>