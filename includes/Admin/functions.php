<?php


    /*  
        Data insert in database
        return items
    */
 
    function target_project_new_add( $args = [] ){
         global $wpdb;

         if( empty($args['project_name']) ){
            return new \WP_Error('no-name',__('Please Enter The Project Name'),' target-ajax-form');  
        }

        $defults = [
            'project_name' => '',
            'project_sub_title' => '',
            'pro_description' => '',
            'pro_referance' => '',
            'pro_cate' => '',
            'start_date' => '',
            'end_date' => '',
            'total_price' => '',
            'pay_amount' => '',
            'due_amount' => '',
            'pro_developer' => '',
            'dev_email' => '',
            'dev_phone' => '',
            'pro_status' => ''
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
                    '%s'
                ]
            );
            

        if( !$insteted ){
            return new \WP_Error('Faild-to-install',__('Faild To Install Data'),' target-ajax-form');
        
        }else{
            echo "<script>alert('Data Save Successfully !');</script>";
            $redierecto = admin_url('admin.php?page=project_new_form&inserted=true');
            wp_redirect( $redierecto );
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



    /*  
    Data edit function

    */
    function target_project_edit($id){

        global $wpdb;

       return $wpdb->get_row(
            $wpdb->prepare("SELECT * FROM target_project_info WHERE id=%d", $id)
       );

    }


    /*  
    Data delete function

    */
    function target_project_delete($id){

        global $wpdb;

        return $wpdb->delete(
            'target_project_info',
            ['id' => $id],
            ['%d']
        );

    }

?>