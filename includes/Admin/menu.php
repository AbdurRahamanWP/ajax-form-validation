<?php
  class Menu{
 
     function __construct(){

        add_action('admin_menu', [$this,'target_ajax_admin_menu']);
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

?>