<?php
 namespace AjaxForm\AddNewProject;


    /*  
        Data insert in database
        return items
    */
 
    function target_project_new_add( $args = [] ){
         global $wpdb;

         if( empty($data['name']) ){
            return new \WP_Error('no-name',__('Please Enter The Project Name'),' target-ajax-form');  
        }

        $defults = [
            'name' => '',
            'sub_title' => '',
            'namdescriptione' => '',
            'referance' => '',
            'category' => '',
            'start_date' => '',
            'end_date' => '',
            'project_price' => '',
            'pay_amount' => '',
            'due_amount' => '',
            'dateline' => '',
            'dev_name' => '',
            'dev_email' => '',
            'dev_phone' => '',
            'status' => ''
        ];

        $data = wp_parse_args($args, $defults);

        $insteted =  $wpdb->insert(
                'target_project_info',
                $data,
                [
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s'

                ]
            );
        if( !$insteted ){
            return new \WP_Error('Faild-to-install',__('Faild To Install Data'),' target-ajax-form');
        }

        return $wpdb->return_id;
    }


    /*  
        View All Data form Database Table
        return items
    */

    function target_project_data_view( $args = [] ){

            global $wpdb;

            $defult = [
                'number'    => 20,
                'offset'    => 0,
                'orderby'   => 'id',
                'order'     => 'ASC'
            ];

            $data = wp_parse_args($args, $defults);

            $items = $wpdb->get_results(
                $wpdb->prepare(

                    "SELECT * FROM target_project_info
                    ORDER BY %s %s
                    LIMIT %d %d",
                ));

            return $items;    
    }
   
    /*  
    Count of total Number of row in table
    return int

    */
    function target_project_count( $args = [] ){
        global $wpdb;
        return (int) $wpdb->get_var("SELECT count(id) FROM target_project_info");
    }

?>