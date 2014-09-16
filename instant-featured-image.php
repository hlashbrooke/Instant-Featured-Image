<?php
/*
 * Plugin Name: Instant Featured Image
 * Version: 1.0.1
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: Set an image as the featured image at the same time as you insert it into the post content
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 3.8
 * Tested up to: 4.0
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'includes/class-instant-featured-image.php' );

/**
 * Returns the main instance of Instant_Featured_Image to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Instant_Featured_Image
 */
function Instant_Featured_Image () {
	$instance = Instant_Featured_Image::instance( __FILE__, '1.0.1' );
	return $instance;
}

Instant_Featured_Image();