<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->query("SELECT id, title, description, files_name, files_url, sponsors, create_at FROM news ORDER BY id");
    
    if($q){
        $news = $q->fetchAll(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        // die();
    }
      
    include "logics/post_list.php";