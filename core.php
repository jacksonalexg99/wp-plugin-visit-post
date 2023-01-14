<?php
/*
Plugin Name:بازدید پست
Plugin URI: http://wordpress.org/plugins/plugin-wordpress/
Description:  افزونه بازدید پست
Author: محمدرضا کیانی
Version: 1.0.0
Author URI:http://developer-wp.local
*/
if ( ! defined( "ABSPATH" ) ) {
	die( 'دسترسی به این صفحه را ندارید!' );
}

function set_visit_post( $post_id ) {
	$meta_post = "_vp_visit_post";
	$view_post = get_post_meta( $post_id, $meta_post, true );
	if ( ! metadata_exists( 'post', $post_id, $meta_post ) ) {
		add_post_meta( $post_id, $meta_post, 0 );
		return 0;
	} else {
		$view_post ++;
		update_post_meta( $post_id, $meta_post, $view_post );
		return  $view_post;
	}
}

