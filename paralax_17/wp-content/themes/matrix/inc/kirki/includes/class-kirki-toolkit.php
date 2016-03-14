<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kirki_Toolkit' ) ) {
	final class Kirki_Toolkit {

		/** @var Kirki The only instance of this class */
		public static $instance = null;

		public static $version = '2.0.7';

		public $font_registry = null;
		public $scripts       = null;
		public $api           = null;
		public $styles        = array();

		/**
		 * Access the single instance of this class
		 * @return Kirki
		 */
		public static function get_instance() {
			if ( null == self::$instance ) {
				self::$instance = new Kirki_Toolkit();
			}
			return self::$instance;
		}

		/**
		 * Shortcut method to get the translation strings
		 */
		public static function i18n() {

			$i18n = array(
				'background-color'      => esc_attr__( 'Background Color', 'matrix' ),
				'background-image'      => esc_attr__( 'Background Image', 'matrix' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'matrix' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'matrix' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'matrix' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'matrix' ),
				'inherit'               => esc_attr__( 'Inherit', 'matrix' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'matrix' ),
				'cover'                 => esc_attr__( 'Cover', 'matrix' ),
				'contain'               => esc_attr__( 'Contain', 'matrix' ),
				'background-size'       => esc_attr__( 'Background Size', 'matrix' ),
				'fixed'                 => esc_attr__( 'Fixed', 'matrix' ),
				'scroll'                => esc_attr__( 'Scroll', 'matrix' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'matrix' ),
				'left-top'              => esc_attr__( 'Left Top', 'matrix' ),
				'left-center'           => esc_attr__( 'Left Center', 'matrix' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'matrix' ),
				'right-top'             => esc_attr__( 'Right Top', 'matrix' ),
				'right-center'          => esc_attr__( 'Right Center', 'matrix' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'matrix' ),
				'center-top'            => esc_attr__( 'Center Top', 'matrix' ),
				'center-center'         => esc_attr__( 'Center Center', 'matrix' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'matrix' ),
				'background-position'   => esc_attr__( 'Background Position', 'matrix' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'matrix' ),
				'on'                    => esc_attr__( 'ON', 'matrix' ),
				'off'                   => esc_attr__( 'OFF', 'matrix' ),
				'all'                   => esc_attr__( 'All', 'matrix' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'matrix' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'matrix' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'matrix' ),
				'greek'                 => esc_attr__( 'Greek', 'matrix' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'matrix' ),
				'khmer'                 => esc_attr__( 'Khmer', 'matrix' ),
				'latin'                 => esc_attr__( 'Latin', 'matrix' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'matrix' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'matrix' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'matrix' ),
				'arabic'                => esc_attr__( 'Arabic', 'matrix' ),
				'bengali'               => esc_attr__( 'Bengali', 'matrix' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'matrix' ),
				'tamil'                 => esc_attr__( 'Tamil', 'matrix' ),
				'telugu'                => esc_attr__( 'Telugu', 'matrix' ),
				'thai'                  => esc_attr__( 'Thai', 'matrix' ),
				'serif'                 => _x( 'Serif', 'font style', 'matrix' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'matrix' ),
				'monospace'             => _x( 'Monospace', 'font style', 'matrix' ),
				'font-family'           => esc_attr__( 'Font Family', 'matrix' ),
				'font-size'             => esc_attr__( 'Font Size', 'matrix' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'matrix' ),
				'line-height'           => esc_attr__( 'Line Height', 'matrix' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'matrix' ),
				'top'                   => esc_attr__( 'Top', 'matrix' ),
				'bottom'                => esc_attr__( 'Bottom', 'matrix' ),
				'left'                  => esc_attr__( 'Left', 'matrix' ),
				'right'                 => esc_attr__( 'Right', 'matrix' ),
				'color'                 => esc_attr__( 'Color', 'matrix' ),
				'add-image'             => esc_attr__( 'Add Image' , 'matrix' ),
				'change-image'          => esc_attr__( 'Change Image' , 'matrix' ),
				'remove'                => esc_attr__( 'Remove' , 'matrix' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'matrix' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$i18n = wp_parse_args( $config['i18n'], $i18n );
			}

			return $i18n;

		}

		/**
		 * Shortcut method to get the font registry.
		 */
		public static function fonts() {
			return self::get_instance()->font_registry;
		}

		/**
		 * Constructor is private, should only be called by get_instance()
		 */
		private function __construct() {
		}

		/**
		 * Return true if we are debugging Kirki.
		 */
		public static function kirki_debug() {
			return (bool) ( defined( 'KIRKI_DEBUG' ) && KIRKI_DEBUG );
		}

	    /**
	     * Take a path and return it clean
	     *
	     * @param string $path
		 * @return string
	     */
	    public static function clean_file_path( $path ) {
	        $path = str_replace( '', '', str_replace( array( "\\", "\\\\" ), '/', $path ) );
	        if ( '/' === $path[ strlen( $path ) - 1 ] ) {
	            $path = rtrim( $path, '/' );
	        }
	        return $path;
	    }

		/**
		 * Determine if we're on a parent theme
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_parent_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_template_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}
			return false;
		}

		/**
		 * Determine if we're on a child theme.
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_child_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_stylesheet_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}
			return false;
		}

		/**
		 * Determine if we're running as a plugin
		 */
		private static function is_plugin() {
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_stylesheet_directory() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_template_directory_uri() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( WP_CONTENT_DIR . '/themes/' ) ) ) {
				return false;
			}
			return true;
		}

		/**
		 * Determine if we're on a theme
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_theme( $file ) {
			if ( true == self::is_child_theme( $file ) || true == self::is_parent_theme( $file ) ) {
				return true;
			}
			return false;
		}
	}
}
