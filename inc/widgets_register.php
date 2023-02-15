<?php
// Sidebar Register Function

function mh_widgets_register()
{
  // Main sidebar
  register_sidebar(array(
    'name' => __('Main Widget Area', 'mhasan'),
    'id' => 'sidebar_1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));

  // Footer sidebar
  register_sidebar(array(
    'name' => __('Footer 1', 'mhasan'),
    'id' => 'footer_1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' => __('Footer 2', 'mhasan'),
    'id' => 'footer_2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' => __('Footer 3', 'mhasan'),
    'id' => 'footer_3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'mh_widgets_register');
