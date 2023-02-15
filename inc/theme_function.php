<?php

// Theme Function
function mh_customizar_register($wp_customize)
{
  // Header Area Function
  $wp_customize->add_section('mh_header_area', array(
    'title' => __('Header Area', 'mhasan'),
    'description' => 'If you want to update header area, you can do it here.'
  ));

  $wp_customize->add_setting('mh_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mh_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you want to update logo, you can do it here.',
    'setting' => 'mh_logo',
    'section' => 'mh_header_area',
  )));

  // Menu Position Option
  $wp_customize->add_section('mh_menu_option', array(
    'title' => __('Menu position', 'mhasan'),
    'description' => 'If you want to change menu postion, you can do it here.'
  ));

  $wp_customize->add_setting('mh_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize->add_control('mh_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu postion',
    'setting' => 'mh_menu_position',
    'section' => 'mh_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => "Left Menu",
      'right_menu' => "Right Menu",
      'center_menu' => "Center Menu",
    )
  ));

  // Footer Option
  $wp_customize->add_section('mh_footer_option', array(
    'title' => __('Footer', 'mhasan'),
    'description' => 'If you want to change footer, you can do it here.'
  ));

  $wp_customize->add_setting('mh_copyright_section', array(
    'default' => '&copy; Copyright 2022 | Mehedi Hasan',
  ));

  $wp_customize->add_control('mh_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If you need you can update copyright here',
    'setting' => 'mh_copyright_section',
    'section' => 'mh_footer_option',

  ));

  // Theme Color
  $wp_customize->add_section('mh_colors', array(
    'title' => __('Theme Color', 'mhasan'),
    'description' => 'If you want to change color, you can do it here.'
  ));

  $wp_customize->add_setting('mh_bg_color', array(
    'default' => '#ffffff',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mh_bg_color', array(
    'label' => 'Background Color',
    'description' => 'If you need you can update background color here',
    'setting' => 'mh_bg_color',
    'section' => 'mh_colors',

  )));

  $wp_customize->add_setting('mh_primary_color', array(
    'default' => '#ea1a70',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mh_primary_color', array(
    'label' => 'Primary Color',
    'description' => 'If you need you can update primary color here',
    'setting' => 'mh_primary_color',
    'section' => 'mh_colors',

  )));
}
add_action('customize_register', 'mh_customizar_register');

// Impliment Theme Color
function mh_theme_color_cust()
{
?>
  <style>
    body {
      background: <?php echo get_theme_mod('mh_bg_color'); ?>;
    }

    :root {
      --pink: <?php echo get_theme_mod('mh_primary_color'); ?>;
    }
  </style>
<?php
}
add_action('wp_head', 'mh_theme_color_cust');
