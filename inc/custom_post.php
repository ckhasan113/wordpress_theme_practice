<?php

// Service Post
function custom_servie()
{
  register_post_type('service', array(
    'labels' => array(
      'name' => __('Service', 'mhasan'),
      'singular_name' => __('Service', 'mhasan'),
      'add_new' => __('Add New Service', 'mhasan'),
      'add_new_item' => __('Add New Service', 'mhasan'),
      'edit_item' => __('Edit Service', 'mhasan'),
      'new_item' => __('New Service', 'mhasan'),
      'view_item' => __('View Service', 'mhasan'),
      'not_found' => __('Sorry, we could\'n find the service you are looking for', 'mhasan'),
    ),
    'menu_icon' => 'dashicons-networking',
    'public' => true,
    'publicly_queryable' => true,
    'exclude_from_serch' => true,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'menu_position' => 6, //Serial number in left side menubar in wp dashboard
    'rewrite' => array('slag' => 'service'), //The name use after domain name in url
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
  ));
}
add_action('init', 'custom_servie');
