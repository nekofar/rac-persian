<?php

/*
	Plugin Name: Recover Abandoned Cart Persian
	Plugin URI: http://github.com/nekofar/rac-persian
	Description: Persian improvements for Recover Abandoned Cart plugin of Wordpress.
	Version: 0.1.0
	Author: Milad Nekofar
	Author URI: http://milad.nekofar.com
	Text Domain: recoverabandoncart-persian
	Domain Path: /languages
*/

// prevent file from loading outside wordpress
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// load plugin text domain after other plugins load
add_action( 'plugins_loaded', function () {
	// configure plugin language path
	load_plugin_textdomain( 'recoverabandoncart', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
} );

// add css file to the admin header
add_action( 'admin_enqueue_scripts', function () {
	wp_register_style( 'recoverabandoncart-persian', plugins_url( '/assets/css/styles.css', __FILE__ ) );
	wp_enqueue_style( 'recoverabandoncart-persian' );
} );