<?php
/*
 * Plugin Name: Auto Feature Image
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: Automatically set an image as a featured image at the same time as it is inserted into the post content
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 3.9
 * Tested up to: 3.9.1
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'includes/class-auto-feature-image.php' );

/**
 * Returns the main instance of Auto_Feature_Image to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Auto_Feature_Image
 */
function Auto_Feature_Image () {
	$instance = Auto_Feature_Image::instance( __FILE__, '1.0.0' );
	return $instance;
}

Auto_Feature_Image();
