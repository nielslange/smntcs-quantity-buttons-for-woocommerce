<?php
/**
 * Plugin Name:           SMNTCS Quantity Increment Buttons for WooCommerce
 * Plugin URI:            https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce
 * Description:           Display the quantity increment buttons on the WooCommerce product page and the WooCommerce cart page.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-quantity-buttons-for-woocommerce
 * Version:               2.5
 * Requires PHP:          5.6
 * Requires at least:     5.0
 * WC requires at least:  5.0
 * WC tested up to:       7.1
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Quantity_Increment_Buttons_for_WooCommerce
 */

defined( 'ABSPATH' ) || exit;

/**
 * SMNTCS_Quantity_Increment_Buttons_For_WC main class.
 */
class SMNTCS_Quantity_Increment_Buttons_For_WC {
	/**
	 * Initialise plugin.
	 *
	 * @return void
	 * @since 2.0
	 */
	public static function init() {
		add_action( 'admin_notices', array( __class__, 'handle_notice' ) );
		add_action( 'wp_enqueue_scripts', array( __class__, 'enqueue_scripts_and_styles' ) );
		add_action( 'wp_enqueue_scripts', array( __class__, 'add_theme_support' ), 11 );
		add_filter( 'woocommerce_locate_template', array( __class__, 'load_template' ), 1, 3 );
		add_action( 'before_woocommerce_init', array( __class__, 'declare_compatibility' ) );
	}

	/**
	 * Declare compatibility with custom order tables for WooCommerce.
	 *
	 * @return void
	 * @since 2.4
	 */
	public static function declare_compatibility() {
		if ( class_exists( '\Automattic\WooCommerce\Utilities\FeaturesUtil' ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}

	/**
	 * Get plugin version.
	 *
	 * @return string The plugin version number.
	 * @since 2.0
	 */
	private static function get_version() {
		$plugin_data = get_file_data( __FILE__, array( 'Version' => 'Version' ), false );

		return $plugin_data['Version'];
	}

	/**
	 * Show warning if WooCommerce is not active or WooCommerce version < 2.3.
	 *
	 * @return void
	 * @since 1.0
	 */
	public static function handle_notice() {
		global $woocommerce;

		if ( ! class_exists( 'WooCommerce' ) || version_compare( $woocommerce->version, '3.0', '<' ) ) {
			$message = __( 'SMNTCS Quantity Increment Buttons for WooCommerce requires at least WooCommerce 3.0.', 'smntcs-quantity-buttons-for-woocommerce' );
			printf( '<div class="notice notice-warning is-dismissible"><p>%s</p></div>', esc_html( $message ) );
		}
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 * @since 1.0
	 */
	public static function enqueue_scripts_and_styles() {
		wp_enqueue_script( 'smntcswcqb-script', plugins_url( 'button-handler.js', __FILE__ ), null, self::get_version(), true );
		wp_enqueue_style( 'smntcswcqb-style', plugins_url( 'style.css', __FILE__ ), null, self::get_version(), 'screen' );

		$show_on_product_page = apply_filters( 'show_on_product_page', true );
		$show_on_cart_page    = apply_filters( 'show_on_cart_page', true );

		if ( false === $show_on_product_page && is_product() ) {
			wp_dequeue_script( 'smntcswcqb-script' );
			wp_dequeue_style( 'smntcswcqb-style' );
		}

		if ( false === $show_on_cart_page && is_cart() ) {
			wp_dequeue_script( 'smntcswcqb-script' );
			wp_dequeue_style( 'smntcswcqb-style' );
		}
	}

	/**
	 * Load WooCommerce template.
	 *
	 * @param string $template The name and path of the template.
	 * @param string $template_name The name of the template.
	 * @param string $template_path The path of the template.
	 * @return string The name and path of the template.
	 * @since 1.0
	 */
	public static function load_template( $template, $template_name, $template_path ) {
		global $woocommerce;

		$show_on_product_page = apply_filters( 'show_on_product_page', true );
		if ( false === $show_on_product_page && is_product() ) {
			return $template;
		}

		$show_on_cart_page = apply_filters( 'show_on_cart_page', true );
		if ( false === $show_on_cart_page && is_cart() ) {
			return $template;
		}

		$inital_template = $template;
		$plugin_path     = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/template/';
		$template_path   = ( ! $template_path ) ? $woocommerce->template_url : null;
		$template        = locate_template( array( $template_path . $template_name, $template_name ) );

		if ( ! $template && file_exists( $plugin_path . $template_name ) ) {
			$template = $plugin_path . $template_name;
		}

		if ( ! $template ) {
			$template = $inital_template;
		}

		return $template;
	}

	/**
	 * Add theme support.
	 *
	 * @return void
	 * @since 1.0
	 */
	public static function add_theme_support() {
		switch ( get_template() ) {
			case 'twentynineteen':
				wp_enqueue_style(
					'smntcswcqb-twentynineteen-style',
					plugins_url( 'assets/css/twentynineteen.css', __FILE__ ),
					null,
					self::get_version(),
					'screen'
				);
				break;
			case 'twentytwenty':
				wp_enqueue_style(
					'smntcswcqb-twentytwenty-style',
					plugins_url( 'assets/css/twentytwenty.css', __FILE__ ),
					null,
					self::get_version(),
					'screen'
				);
				break;
			case 'twentytwentyone':
				wp_enqueue_script(
					'smntcswcqb-twentytwentyone-script',
					plugins_url( 'assets/js/twentytwentyone.js', __FILE__ ),
					null,
					self::get_version(),
					true
				);
				break;
			case 'smntcs-retro':
				wp_enqueue_style(
					'smntcswcqb-smntcs-retro-style',
					plugins_url( 'assets/css/smntcs-retro.css', __FILE__ ),
					null,
					self::get_version(),
					'screen'
				);
				break;
		}
	}
}

SMNTCS_Quantity_Increment_Buttons_For_WC::init();
