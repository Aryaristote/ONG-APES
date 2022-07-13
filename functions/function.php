<?php 
    require "./partial/flash.php";
    //Activate the flash message for wrong of success notification
    if(!function_exists('set_flash')){
        function set_flash($message, $type = 'info'){
            $_SESSION['notification']['message'] = $message;
            $_SESSION['notification']['type'] = $type;
        }
    }