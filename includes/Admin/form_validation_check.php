<?php

namespace Form_Validation_check;

class Form_Validation_Check{
 

     public function new_project_form_validation(){

        $capabilty = 'manage_options';
         
        if( !isset( $_POST['submit'] )){
            return;
        }

        if( ! wp_varify_nonce( $_POST['_wpnonce'], 'new_project_form' )){
            wp_die('Are You Cheating ?');
        }
          
        if( ! current_user_can('manage_options') ){
            wp_die('This your are not permision this submission');
        }

        var_dump($_POST);

     }


}



?>