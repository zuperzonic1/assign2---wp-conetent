<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

    add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' );
    function twentytwentyonechild_wp_enqueue_scripts() {
        wp_enqueue_style( 'twentytwentyonechild-style', 
        get_stylesheet_uri(), 
        array( 'twenty-twenty-one-style' ), 
        wp_get_theme()->get('Version') 
        );
    }
    // define( 'DISALLOW_FILE_EDIT', true );
?>