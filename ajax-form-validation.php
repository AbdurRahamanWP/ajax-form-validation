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
	
    /**  Plugin Version  */
	const version ='1.0.0';
	 
	/* Class Construct */
		private function  __construct(){

			$this->define_constants();

			register_activation_hook( __FILE__, [$this , 'target_ajax_activate'] );

			add_action('plugin_loaded',[$this,'target_ajax_init_plugin']);

			add_action('admin_menu', [$this,'target_ajax_admin_menu']); // menu register

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


		public function define_constants(){

			define('TARGET_AJAX_VERSION', self::version);
			define('TARGET_AJAX_FILE',__FILE__);
			define('TARGET_AJAX_PATH',__DIR__);
			define('TARGET_AJAX_URL', plugins_url('',TARGET_AJAX_FILE));
			define('TARGET_AJAX_ASSETS', TARGET_AJAX_URL . '/assets');
		}


		/**
		 * Do stuff upon plugin activation
		 */
		public function target_ajax_activate(){

			//add_action('admin_menu', [$this,'target_ajax_admin_menu']);
			//require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/menu.php';

		}


		/**
		 * Initialize the plugin
		 */
		public function target_ajax_init_plugin(){

		}


		public function target_ajax_admin_menu(){

			add_menu_page(
				'Target Project',
				'Target Project',
				'manage_options',
				'project_list_plugin',
				array($this,"target_project_new_project"),
				'dashicons-menu-alt',
				9
			);
	
			add_submenu_page(
				'project_list_plugin',
				'New Project',
				'New Project',
				'manage_options',
				'project_list_plugin',
				array($this,"target_project_new_project"),
				'dashicons-menu-alt',
				9
			);
	
			add_submenu_page(
				'project_list_plugin',
				'All Project',
				'All Project',
				'manage_options',
				'custom-plugin',
				array($this,"target_project_view_project"),
				'dashicons-menu-alt',
				9
			);
		
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
