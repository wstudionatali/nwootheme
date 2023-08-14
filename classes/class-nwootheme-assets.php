<?php
/**
 * Add Theme Assets.
 *
 * @package nwootheme Theme
 */

class n_woo_theme_Assets {

	public function __construct() {

		$this->setup_hooks();
	}

	public function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

	}

	/**
	 * Register Styles
	 *
	 * @return void
	 */
	public function register_styles() {

		wp_register_style( 'main-css', NWT_BUILD_CSS_URI . '/main.css', [], filemtime( NWT_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );
		wp_enqueue_style( 'main-css' );

	}

	/**
	 * Register Scripts
	 *
	 * @return void
	 */
	public function register_scripts() {

		wp_register_script( 'main-js', NWT_BUILD_JS_URI . '/main.js', ['jquery'], filemtime( NWT_BUILD_JS_DIR_PATH . '/main.js' ), 'all' );
		wp_enqueue_script( 'main-js' );

	}

}
