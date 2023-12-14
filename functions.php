<?php

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/index.css', [], filemtime(get_stylesheet_directory() . '/dist/index.css'), 'screen');
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/index.js', [], filemtime(get_stylesheet_directory() . '/dist/index.js'), true);
});

add_action('init', function() {
  add_filter('show_admin_bar', '__return_false');
});