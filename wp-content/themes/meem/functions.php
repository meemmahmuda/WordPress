<?php

add_theme_support('title-tag');

function css_js_file_calling(){
    wp_register_style('custom', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'css_js_file_calling');


function customizar_register($wp_customize){

  
    // Menu Position Option
    $wp_customize->add_section('menu_option', array(
      'title' => __('Menu Position Option'),
      'description' => 'If you interested to change your menu position you can do it.'
    ));
  
    $wp_customize->add_setting('menu_position', array(
      'default' => 'right_menu',
    ));
  
    $wp_customize-> add_control('menu_position', array(
      'label' => 'Menu Position',
      'description' => 'Select your menu position',
      'setting' => 'menu_position',
      'section' => 'menu_option',
      'type' => 'radio',
      'choices' => array(
        'left_menu' => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu' => 'Center Menu',
      ),
    ));


    
  // Footer Option
  $wp_customize->add_section('footer_option', array(
    'title' => __('Footer Option'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));

  $wp_customize-> add_control('copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'copyright_section',
    'section' => 'footer_option',
  ));
 
  }
  
  add_action('customize_register', 'customizar_register');

// Menu
register_nav_menu('main_menu', __('Main Menu'));