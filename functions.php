<?php

if ( ! defined( 'NWT_DIR_PATH' ) ) {
	define( 'NWT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'NWT_DIR_URI' ) ) {
	define( 'NWT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'NWT_BUILD_URI' ) ) {
	define( 'NWT_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'NWT_BUILD_PATH' ) ) {
	define( 'NWT_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'NWT_BUILD_JS_URI' ) ) {
	define( 'NWT_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'NWT_BUILD_JS_DIR_PATH' ) ) {
	define( 'NWT_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'NWT_BUILD_IMG_URI' ) ) {
	define( 'NWT_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'NWT_BUILD_CSS_URI' ) ) {
	define( 'NWT_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'NWT_BUILD_CSS_DIR_PATH' ) ) {
	define( 'NWT_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'NWT_BUILD_LIB_URI' ) ) {
	define( 'NWT_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

// File Includes
require_once NWT_DIR_PATH . '/classes/class-nwootheme-assets.php';
new n_woo_theme_Assets();
require_once NWT_DIR_PATH . '/classes/class-nwootheme-menus.php';
new n_woo_theme_Menus();
require_once NWT_DIR_PATH . '/classes/class-nwootheme.php';
new n_woo_theme();


