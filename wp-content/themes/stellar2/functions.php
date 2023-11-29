<?php

foreach (glob(get_theme_file_path() . '/inc/*.php') as $file) {

  require_once $file;
};
function scripts()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');

  wp_enqueue_script('jquery');

  
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/4d1287908c.js', array(), null, true);

  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
  wp_enqueue_script('app');
  
}
add_action('wp_enqueue_scripts', 'scripts');


function enqueue_custom_fonts() {
  wp_enqueue_style('custom-fonts', get_theme_file_uri() . '/assets/src/css/app.scss');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');
function register_my_menu()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'help-menu' => __('Help Menu'),

    )
  );
}
add_action('init', 'register_my_menu');
add_theme_support('custom-header');
add_theme_support('post-tumbnails');


define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // Update path
    $path = MY_PLUGIN_DIR_PATH . '/acf-json';

    // Return path
    return $path;
    
}
add_action( 'init', 'stellar_register_acf_blocks' );
add_theme_support( 'post-thumbnails' );
function stellar_register_acf_blocks() {
/*
  register_block_type( dirname(__FILE__) . '/blocks/header-section' );
  register_block_type( dirname(__FILE__) . '/blocks/logo-bar' );
  register_block_type( dirname(__FILE__) . '/blocks/skill-section' );
  register_block_type( dirname(__FILE__) . '/blocks/gallery-section' );
  register_block_type( dirname(__FILE__) . '/blocks/testimonials' );
  register_block_type( dirname(__FILE__) . '/blocks/contact-section' ); 
  */
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Hero');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Partners');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Reviews');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Benefits');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Achievements');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Integrations');
  register_block_type( dirname(__FILE__) . '/blocks/Landify/Projects');





  /*
  register_block_type( dirname(__FILE__) . '/blocks/Landify/rates' );
  register_block_type( dirname(__FILE__) . '/blocks/Landify/portfolio' );
  register_block_type( dirname(__FILE__) . '/blocks/Landify/skills' );
  register_block_type( dirname(__FILE__) . '/blocks/Landify/testimonial' );
  register_block_type( dirname(__FILE__) . '/blocks/Landify/aboutme' );
  register_block_type( dirname(__FILE__) . '/blocks/Landify/footer' );
  */









}
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
