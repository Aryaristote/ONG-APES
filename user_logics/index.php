<?php 
    include "../config/database.php";
    // include "./filter/auth.php";

    $q = $db->query("SELECT project_id, project_name, project_content, project_sponsor, project_status, project_zone, created_at, files_name, files_url  FROM project");
    
    if($q){
        $projects = $q->fetchAll(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }