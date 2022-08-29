<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->prepare("SELECT * FROM news WHERE id = :id");
    
    if($q){
		$q->execute([
			'id' => $_GET['id'],
		]);
		$new = $q->fetch(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }

    if(isset($_POST['delete'])){
        $q = $db->prepare("DELETE FROM news WHERE id = :id");
        if($q){
            $q->execute([
                'id' => $_GET['id'],
            ]);
            $_SESSION["delete_post"] = "Votre projet a été supprimé";
            header("Location: post_list.php");
        }else{
            $error = "Le projet n'a pas été supprimé";
        }
    }
    
      
    include "logics/one_post.php";