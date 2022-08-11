<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->query("SELECT * FROM project");
    
    if($q){
        $projects = $q->fetchAll(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }
    
    include "logics/project_list.php";