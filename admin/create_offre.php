<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";
    
    if(isset($_POST['submit'])){
      if(!empty($_POST['post_name'] && $_POST['post_description'] && $_POST['post_exigence'] && $_POST['post_number'] && $_POST['post_zone'] && $_POST['start_date'] && $_POST['post_contract'])){
          extract($_POST);
    
            //Send data in database
            $q = $db->prepare("INSERT INTO offres(
              post_name, post_description, post_exigence, post_number, post_zone, start_date, post_contract) 
              VALUE(:post_name, :post_description, :post_exigence, :post_number, :post_zone, :start_date, :post_contract)");
              $q->execute([
                  'post_name' => $post_name,
                  'post_description' => $post_description,
                  'post_exigence' => $post_exigence,
                  'post_number' => $post_number,
                  'post_zone' => $post_zone,
                  'start_date' => $start_date,
                  'post_contract' => $post_contract,
              ]);

            // var_dump($description);
            // die();

            $success = "Demande envoyée avec succès";
            header("Location: stage_show.php");
          }else{
            $error = "Veuillez remplir tous les champs";
          }
    }

  include "logics/create_offre.php";