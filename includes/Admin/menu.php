<?php
namespace Ajax_form_validation;
  class Menu{
 
     function __construct(){

        add_action('admin_menu', [$this,'target_ajax_admin_menu']);
     }

    public function target_ajax_admin_menu(){

		$capabilty = 'manage_options';

        add_menu_page(
			'Target Project',
			'Target Project',
			'manage_options',
			'project_new_form',
			array($this,"target_ajax_form_added"),
			'dashicons-menu-alt',
			9
		);

		add_submenu_page(
			'project_new_form',
			'New Project',
			'New Project',
			'manage_options',
			'project_new_form',
			array($this,"target_ajax_form_added"),
			'dashicons-menu-alt',
			9
		);

		add_submenu_page(
			'project_new_form',
			'All Project',
			'All Project',
			'manage_options',
			'view_project',
			array($this,"target_ajax_form_all"),
			'dashicons-menu-alt',
			9
		);
	
     }


	 public function target_ajax_form_added(){
		
		//$add_new_project->target_project_new_form();  // how to used this name space of target_project_new_form
		ob_start();
		require_once TARGET_AJAX_PATH . "/includes/template/new_project.php"; 
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}


	public function target_ajax_form_all(){
		ob_start();
		require_once TARGET_AJAX_PATH . "/includes/template/view_project.php"; 
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}


	 
     
  }
new menu();
?>