<?php
include get_theme_file_path('inc/menu.php');
function bootstrap_menu_enqueue(){
	$uri                      =get_template_directory_uri();
	wp_enqueue_style('music_style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css',esc_url($uri.'/assets/css/bootstrap.min.css'));
	wp_enqueue_script('bootstrap_js',$uri.'/assets/js/bootstrap.min.js',[],true,true);
}
function bootstrap_menu_setup(){
	register_nav_menus(array(
		'primary_menu'              =>__('Primary Menu','bootstrap_menu'),
	));
	add_theme_support('custom-logo');
}
add_action('wp_enqueue_scripts','bootstrap_menu_enqueue');
add_action('after_setup_theme','bootstrap_menu_setup');