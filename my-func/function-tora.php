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

// This theme requires WordPress 5.3 or later.

/***** CSSファイルの読み込み *****/

/***** CSSファイルの読み込み *****/
function my_styles()  {
  // page-sample用のCSS
  if ( is_page('menu') ) {
    wp_enqueue_style( 'menu', get_template_directory_uri() . '/tora-style.css/menu.css', array(), '1.0.0' );
    }
  }
add_action( 'wp_enqueue_scripts', 'my_styles' );