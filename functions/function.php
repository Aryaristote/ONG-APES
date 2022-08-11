<?php 

    //Check if the name does not already exist into the database
    if(!function_exists('is_already_in_use')){
        function is_already_in_use($field, $values, $table){
            global $db;
            $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
            $q->execute([$values]);
            $count = $q->rowCount();
            $q->closeCursor();
            return $count;
        }
    }

    if(!function_exists('bcrypt_hash_password')){
        function bcrypt_hash_password($value, $options = array()){
            $cost = isset($options['rounds']) ? $options['rounds']: 10;
            $hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));

            if($hash === false){
                throw new Exception("BCrypt Hashing is not supported");
            }
            return $hash;
        }
    }

    //Save input data into session 
    if(!function_exists('save_input_data')){
        function save_input_data(){
            foreach($_POST as $key => $value){
                if(strpos($key, 'password') === false){
                    $_SESSION['input'][$key] = $value;
                }
            }
        }
    }