<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->prepare("SELECT * FROM offres WHERE offre_id = :id");
    
    if($q){
		$q->execute([
			'id' => $_GET['id'],
		]);
		$offre = $q->fetch(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }

    if(isset($_POST['delete'])){
        $q = $db->prepare("DELETE FROM offres WHERE offre_id = :id");
        if($q){
            $q->execute([
                'id' => $_GET['id'],
            ]);
            $_SESSION["delete_offre"] = "Votre offre a été supprimé";
            header("Location: stage_show.php");
        }else{
            $error = "Le projet n'a pas été supprimé";
        }
    }
    
      
    include "logics/one_offre.php";