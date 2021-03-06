<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
 * VT323 - Google Font
 */
function load_vt323() {
    wp_register_style('vt323', 'http://fonts.googleapis.com/css?family=VT323');
    wp_enqueue_style( 'vt323');
  }
add_action('wp_print_styles', 'load_vt323');


/**
 * Allow user to upload a custom header image
 */
$args = array(
	'width'         => 60,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/assets/img/header.png',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );