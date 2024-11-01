<?php 
/*
Plugin Name: WP Logged-In Only Basic
Plugin URI: https://github.com/alignwebs/wp-logged-in-only
Description: Only logged-in users can view the site if this plugin is activated.
Author: ALiGNWEBS
Version: 1.0.0
Author URI: https://www.alignwebs.com
License: GPLv2
*/

function logged_in_only_frontend() {
	if ( ! is_user_logged_in() ) {
		auth_redirect();
	}
}
add_action( 'template_redirect', 'logged_in_only_frontend' );

 ?>