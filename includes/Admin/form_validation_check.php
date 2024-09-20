<?php

namespace Form_Validation_check;

class Form_Validation_Check{


    public function init() {
        add_action('admin_init', [ $this, 'new_project_form_validation']);
    }
 
     public function new_project_form_validation(){

        $capabilty = 'manage_options';
         
        if( !isset( $_POST['submit'] )){
            return;
        }

        if( ! wp_verify_nonce( $_POST['_wpnonce'], 'new_project_form' )){
            wp_die('Are You Cheating ?');
        }
          
        if( ! current_user_can('manage_options') ){
            wp_die('This your are not permision this submission');
        }
        
        // Value received & sanitization

      $name         = isset($_POST['name']) ? sanitize_text_field( $_POST['name'] ) : '';
      $sub_title    = isset($_POST['sub_title']) ? sanitize_text_field( $_POST['sub_title'] ) : '';
      $description  = isset($_POST['description']) ? sanitize_textarea_field( $_POST['description'] ) : '';
      $referance    = isset($_POST['referance']) ? sanitize_text_field( $_POST['referance'] ) : '';
      $category     = isset($_POST['category']) ? sanitize_text_field( $_POST['category'] ) : '';
      $start_date   = isset($_POST['start_date']) ? sanitize_text_field( $_POST['start_date'] ) : '';
      $end_date     = isset($_POST['end_date']) ? sanitize_text_field( $_POST['end_date'] ) : '';
      $proje_price  = isset($_POST['project_price']) ? sanitize_text_field( $_POST['project_price'] ) : '';
      $pay_amount   = isset($_POST['pay_amount']) ? sanitize_text_field( $_POST['pay_amount'] ) : '';
      $due_amount   = isset($_POST['due_amount']) ? sanitize_text_field( $_POST['due_amount'] ) : '';
      $dateline     = isset($_POST['dateline']) ? sanitize_text_field( $_POST['dateline'] ) : '';
      $dev_name     = isset($_POST['dev_name']) ? sanitize_text_field( $_POST['dev_name'] ) : '';
      $dev_email    = isset($_POST['dev_email']) ? sanitize_text_field( $_POST['dev_email'] ) : '';
      $dev_phone    = isset($_POST['dev_phone']) ? sanitize_text_field( $_POST['dev_phone'] ) : '';
      $status       = isset($_POST['status']) ? sanitize_text_field( $_POST['status'] ) : '';



      $dataInsertSuccess =  target_project_new_add([
        'project_name'       => $name,
        'project_sub_title'  => $sub_title,
        'pro_description'    => $description,
        'pro_referance'      => $referance,
        'pro_cate'           => $category,
        'start_date'         => $start_date,
        'end_date'           => $end_date,
        'total_price'        => $proje_price,
        'pay_amount'         => $pay_amount,
        'due_amount'         => $due_amount,
        'pro_developer'      => $dev_name,
        'dev_email'          => $dev_email,
        'dev_phone'          => $dev_phone,
        'pro_status'         => $status
       ]);

       if( is_wp_error($dataInsertSuccess) ){
            echo "Data Insert Faild";
       }
       

       //var_dump($_POST);
       exit();

     }


}



?>