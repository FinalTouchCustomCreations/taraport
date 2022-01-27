<?php
//Theme Fumctions go HERE

function enqueue_my_styles_and_scripts(){

  //enqueue boostrap
  wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '1.0.0', false);




  //enqueue personal code
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/master.css', array(), '1.0.0', 'all');



}

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');

function myTheme_setup(){

  //Registering our nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

}

add_action('after_setup_theme', 'myTheme_setup');








?>
