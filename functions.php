<?php

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/index.css', [], filemtime(get_stylesheet_directory() . '/dist/index.css'), 'screen');
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/index.js', [], filemtime(get_stylesheet_directory() . '/dist/index.js'), true);
});

add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menu('header-navigation', 'Header Navigation');
  register_nav_menu('footer-navigation', 'Footer Navigation');
});
