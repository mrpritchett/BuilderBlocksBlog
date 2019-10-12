<?php
/**
 * Adds Assets
 *
 * @package Builder Blocks Blog
 */

require_once dirname( __DIR__, 1 ) . '/vendor/autoload.php';

/**
 * Builder Blocks Blog Assets Class
 *
 * @since 0.1
 */
class Builder_Blocks_Blog_Assets {
	/**
	 * Enqueue constant
	 *
	 * @since 0.1
	 * @var Object
	 */
	public static $enqueue;

	/**
	 * Ininitialize class methods.
	 *
	 * @since 0.1
	 */
	public static function init() {
		self::$enqueue = new \WPackio\Enqueue( 'builderBlocksBlog', 'assets/dist', '1.0.0', 'theme', __FILE__ );

		add_action( 'wp_enqueue_scripts', [ self::class, 'inline_styles' ] );
	}

	/**
	 * Adds inline styles
	 *
	 * @since 0.1
	 */
	public static function inline_styles() {
		self::$enqueue->enqueue( 'main', 'main', [] );
	}
}
