<?
/*
   Plugin Name: Nextweb Icons24
   Plugin URI: http://wordpress.org/plugins/nextweb-icons24
   Version: 1.0
   Author: Luka Petrovic
   Author URI: http://nextweb.rs
   Description: Adds a little css to enable 24x24 icons in WP menu
   Text Domain: icons32
   License: GPLv3
  */
  
add_action( 'admin_enqueue_scripts', 'icons24_add_css' ); 
function icons24_add_css() {
	wp_register_style('icons24_css', plugins_url('admin.css', __FILE__));
	wp_enqueue_style('icons24_css');
}