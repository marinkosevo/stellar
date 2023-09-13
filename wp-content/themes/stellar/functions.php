<?php

foreach (glob(get_theme_file_path() . '/inc/*.php') as $file) {

  require_once $file;
};
function scripts()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');

  wp_enqueue_script('jquery');

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', false);

  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
  wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');



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
 

?>