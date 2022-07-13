<?php
	session_start(); 

    require "config/database.php";
	require "partial/flash.php";
    // require "functions/function.php";

	if(!function_exists('set_flash')){
        function set_flash($message, $type = 'info'){
            echo "<b>The message has gone</b>";
        }
    }

    if(isset($_POST['submit'])){
        if(!empty(['name','country','location','domain','experience'])){
            extract($_POST);
            
            $q = $db->prepare("INSERT INTO visitors(name, country, location, domain, experience) 
                            VALUE(:name, :country, :location, :domain, :experience)");
            $q->execute([
                'name' => $name,
                'country' => $country,
                'location' => $location,
                'domain' => $domain,
                'experience' => $experience,
            ]);

            set_flash("Your story has been updated", "success");
        }else{
            set_flash("Your story's update has failled", "danger");
        }     
    }
	
	