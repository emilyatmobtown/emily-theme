<?php
/**
 * WP Theme constants and setup functions
 *
 * @package EmilyTheme
 */

// Useful global constants.
define( 'EMILY_THEME_VERSION', '0.1.0' );
define( 'EMILY_THEME_TEMPLATE_URL', get_template_directory_uri() );
define( 'EMILY_THEME_PATH', get_template_directory() . '/' );
define( 'EMILY_THEME_INC', EMILY_THEME_PATH . 'includes/' );

require_once EMILY_THEME_INC . 'core.php';
require_once EMILY_THEME_INC . 'overrides.php';
require_once EMILY_THEME_INC . 'template-tags.php';
require_once EMILY_THEME_INC . 'utility.php';
require_once EMILY_THEME_INC . 'blocks.php';

// Run the setup functions.
EmilyTheme\Core\setup();
EmilyTheme\Blocks\setup();

// Require Composer autoloader if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for the the new wp_body_open() function that was added in 5.2
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
