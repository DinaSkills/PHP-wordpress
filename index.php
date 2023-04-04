<?php
/*
Plugin Name: Mo
Plugin URI: /
Description: The site plugin for custom post types, custom fields and specific features
Version: 1.0
Author: Dina
Author URI: /
Text Domain: mo
*/
require_once( 'movie-api.php' );
require_once( 'cpt.php' );
require_once( 'custom-meta-box.php' );

function mo_admin_notice_warn() {
	if(!is_singular('movies')){ 
	echo '<div class="notice notice-warning is-dismissible">
		  <p>Important: This theme does not have Movie template!</p>
		  </div>'; 
	}}
	add_action( 'admin_notices', 'plugin_admin_notice_warn' );
?>