<?php

//Theme CSS and jQuery File calling
function mh_css_js_file_calling()
{
  // Style
  wp_enqueue_style('mh_style', get_stylesheet_uri());

  wp_register_style('mh_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_enqueue_style('mh_bootstrap');

  wp_register_style('mh_custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('mh_custom');

  // jQuery
  wp_enqueue_script('jquery');

  wp_enqueue_script('mh_bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', 'true');
  wp_enqueue_script('mh_main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'mh_css_js_file_calling');


// Google Fonts

function mh_add_google_fonts()
{
  wp_enqueue_style('mh_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Qwitcher+Grypen:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'mh_add_google_fonts');
