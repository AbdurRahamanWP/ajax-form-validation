<?php 
 namespace AjaxForm\Installer;

    class InstallPlugin{

        public function installPlugins(){

            $this->createTable();
            
        }

        public function createTable(){

            $tableQuery = "CREATE TABLE `target_project_info` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `project_name` varchar(25) NOT NULL,
                `project_sub_title` varchar(25) NOT NULL,
                `pro_description` longtext NOT NULL,
                `pro_referance` varchar(25) NOT NULL,
                `pro_cate` varchar(20) NOT NULL,
                `start_date` varchar(20) NOT NULL,
                `end_date` varchar(25) NOT NULL,
                `total_price` varchar(25) NOT NULL,
                `pay_amount` varchar(20) NOT NULL,
                `due_amount` varchar(20) NOT NULL,
                `pro_developer` varchar(20) NOT NULL,
                `dev_email` varchar(20) NOT NULL,
                `dev_phone` varchar(20) NOT NULL,
                `pro_status` varchar(20) NOT NULL,
                PRIMARY KEY (`id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";


            if( !function_exists('createTable') ){
                require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                dbDelta($tableQuery);
            }
        }
    }


?>