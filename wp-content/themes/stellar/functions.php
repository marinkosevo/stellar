<?php   

function load_css()
{
        wp_register_style('stellar', get_template_directory_uri() . '/assets/css/style.css',array(),false,'all');
        wp_enqueue_style('stellar');

}
add_action('wp_enqueue_scripts','load_css');

       

function load_js()
{

    wp_register_script('stellar', get_template_directory_uri() . '/assets/js/main.js','jquery',false,true);
    wp_enqueue_script('stellar');


}
add_action('wp_enqueue_scripts','load_js')




?>