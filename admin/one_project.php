<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->prepare("SELECT * FROM project WHERE project_id = :id");
    
    if($q){
		$q->execute([
			'id' => $_GET['id'],
		]);
		$project = $q->fetch(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }

    if(isset($_POST['delete'])){
        $q = $db->prepare("DELETE FROM project WHERE project_id = :id");
        if($q){
            $q->execute([
                'id' => $_GET['id'],
            ]);
            $success = "Votre projet a été supprimé";
            header("Location: project_list.php");
        }else{
            $error = "Le projet n'a pas été supprimé";
        }
    }
    
      
    include "logics/one_project.php";