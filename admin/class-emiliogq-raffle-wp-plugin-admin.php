<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Emiliogq_raffle_wp_plugin
 * @subpackage Emiliogq_raffle_wp_plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Emiliogq_raffle_wp_plugin
 * @subpackage Emiliogq_raffle_wp_plugin/admin
 * @author     Your Name <email@example.com>
 */
class Emiliogq_raffle_wp_plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $emiliogq_raffle_wp_plugin    The ID of this plugin.
	 */
	private $emiliogq_raffle_wp_plugin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $emiliogq_raffle_wp_plugin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $emiliogq_raffle_wp_plugin, $version ) {

		$this->emiliogq_raffle_wp_plugin = $emiliogq_raffle_wp_plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Emiliogq_raffle_wp_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Emiliogq_raffle_wp_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->emiliogq_raffle_wp_plugin, plugin_dir_url( __FILE__ ) . 'css/emiliogq-raffle-wp-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Emiliogq_raffle_wp_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Emiliogq_raffle_wp_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->emiliogq_raffle_wp_plugin, plugin_dir_url( __FILE__ ) . 'js/emiliogq-raffle-wp-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}
