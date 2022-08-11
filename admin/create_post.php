<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";
    
    if(isset($_POST['submit'])){
      if(!empty($_POST['title'] && $_POST['description'] && $_POST['sponsors'])){
          extract($_POST);

            if(!empty($_FILES)){
              $file_name = $_FILES['file']['name'];
              $file_extension = strtolower(strrchr($file_name, "."));
      
              $file_tmp_name = $_FILES['file']['tmp_name'];
              $file_name = md5(uniqid(rand(), true)).$file_extension;
              $file_dest = 'files/'.$file_name;
      
              $allow_extension = array('.jpg', '.jpeg', '.gif'); 


          
              if(in_array($file_extension, $allow_extension)){
                  if(move_uploaded_file($file_tmp_name, $file_dest)){

                  }
              }else{
                  $error = "Mauvais format de fichier, seule l'extensions PDF est acceptées";
                  // return;
              }
            }else{
                $error = "Veillez selectioner un fichier";
                // return;
            }
    
            //Send data in database
            $q = $db->prepare("INSERT INTO news(
              title, description, sponsors, files_name, files_url) 
              VALUE(:title, :description, :sponsors, :files_name, :files_url)");
          $q->execute([
              'files_name' => $file_name,
              'files_url' => $file_dest,
              'title' => $title,
              'description' => $description,
              'sponsors' => $sponsors,
          ]);

            // var_dump($description);
            // die();

            $success = "Demande envoyée avec succès";
          }else{
              $error = "Veuillez remplir tous les champs";
          }
    }
      
  include "logics/create_post.php";