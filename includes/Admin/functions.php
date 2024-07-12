<?php
 
    function target_project_new_add( $args = [] ){
         global $wpbd;

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

?>