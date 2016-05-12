<?php
/**
 * function.php
 * @package WordPress
 * @subpackage Webex
 */

function enqueue_scripts() { 
    if(is_admin()) return false; 
    wp_deregister_script('jquery'); 
    wp_enqueue_script('jquery', get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js','','',true); 
    wp_enqueue_script('swiper', get_template_directory_uri().'/node_modules/swiper/dist/js/swiper.min.js','','',true); 
    wp_enqueue_script('mask', get_template_directory_uri().'/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js','','',true); 
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js','','',true); 
    wp_enqueue_script('main', get_template_directory_uri().'/js/script.js','','',true); 
}
add_action('wp_enqueue_scripts', 'enqueue_scripts'); 

function enqueue_styles() { 
    if(is_admin()) return false; 
    wp_enqueue_style( 'fa', get_template_directory_uri().'/node_modules/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'bs', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css' ); 
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/node_modules/swiper/dist/css/swiper.min.css' ); 
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); 
    wp_enqueue_style( 'services-page', get_template_directory_uri().'/css/services-page.css' ); 
    wp_enqueue_style( 'project-page', get_template_directory_uri().'/css/project-page.css' ); 
    wp_enqueue_style( 'all-projects-page', get_template_directory_uri().'/css/all-projects-page.css' ); 
}
add_action('wp_enqueue_scripts', 'enqueue_styles'); 

register_nav_menus(array(
	'top'    => 'top menu',
    'toggle-menu' => 'toggle menu',
	'bottom' => 'bottom menu'
));
add_theme_support('title-tag');
?>
