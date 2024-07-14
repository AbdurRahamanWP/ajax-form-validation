<?php

/**
 * Plugin Name:       Ajax Form Validation
 * Plugin URI:        http://targetsoftbd.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Target Soft BD
 * Author URI:        https://www.facebook.com/AbdurRahamanWP
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       target-ajax-form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/** 
 * The Main Plugin Class
 */

 final class Target_Ajax_Form{
	
	 
	/* Class Construct */
		private function  __construct(){

			$this->define_constants();


			add_action('plugin_loaded', [$this,'target_ajax_init_plugin']);
			add_action('admin_enqueue_scripts', [$this, 'target_ajax_form_enqueue_styles']);

			
			register_activation_hook( __FILE__, [$this , 'target_ajax_activate'] );

		}

	/** 
	 * Initializes a singleton instance
	 * @return\Target_Ajax_Form 
	 * 
	 */
		public static function init(){
			static $instance = false;

			if(! $instance){
				$instance = new self();
			}

			return $instance;
		}

		public function define_constants() {
			define('TARGET_AJAX_VERSION', '1.0.0');
			define('TARGET_AJAX_FILE',__FILE__);
			define('TARGET_AJAX_PATH',__DIR__);
			define('TARGET_AJAX_URL', plugins_url('',TARGET_AJAX_FILE));
			define('TARGET_AJAX_ASSETS', TARGET_AJAX_URL . '/assets');
		}


		/**
		 * Do stuff upon plugin activation
		 */
		public function target_ajax_activate(){

			require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/installer.php';
				
			$installer = new AjaxForm\Installer\InstallPlugin();
			$installer->installPlugins();
			
			
		}


		/**
		 * Initialize the plugin
		 */
		public function target_ajax_init_plugin(){

				do_action('TARGET_AJAX_Lodaded');

				$this->include();

		}

		public function include(){
			require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/menu.php';
			require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/form_validation_check.php';
			require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/functions.php';

			$form_check = new Form_Validation_check\Form_Validation_Check();
			$form_check->init();
		}


		public function target_ajax_form_enqueue_styles(){

		//var_dump(plugin_dir_path());
			
		wp_enqueue_style( 'plugin-name', plugin_dir_url( __FILE__ ) . 'assets/css/ajax_form_validation.css', array(), TARGET_AJAX_VERSION, 'all' );
		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'assets/css/bootstrap.min.css', array(), TARGET_AJAX_VERSION, 'all' );
		wp_enqueue_style( 'dataTables', plugin_dir_url( __FILE__ ) . 'assets/css/dataTables.bootstrap5.min.css', array(), TARGET_AJAX_VERSION, 'all' );
		wp_enqueue_style( 'style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', array(), TARGET_AJAX_VERSION, 'all' );

		}

 }

/**
 * Initializes the main plugin
 *
 * @return \Target_Ajax_Form
 */
 function target_ajax_form(){
	return Target_Ajax_Form::init();
 }

 // kick-off the plugin
 target_ajax_form();
