<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:      https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Client_Customization
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die( 'not allowed' );
}

add_filter('the_content', function ( $content ) {

    // Check if the content is a single post
    if ( is_single() ) {
        $message = '<p><b>This content is created by: ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';
        return $content . $message;
    }

    // If it's not a single post, return the content without the message
    return $content;

}, 10 );