<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";
    
    if(isset($_POST['submit'])){
      if(!empty($_POST['project_name'] && $_POST['project_content'] && $_POST['project_sponsor'] && $_POST['project_status'] && $_POST['project_zone'])){
          extract($_POST);

            if(!empty($_FILES)){
              $file_name = $_FILES['file']['name'];
              $file_extension = strtolower(strrchr($file_name, "."));
      
              $file_tmp_name = $_FILES['file']['tmp_name'];
              $file_name = md5(uniqid(rand())).$file_extension;
              $file_dest = 'files/'.$file_name;
      
              $allow_extension = array('.jpg', '.jpeg', '.gif', '.mp4', '.mov', '.wmv'); 


          
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
            $q = $db->prepare("INSERT INTO project(
              project_name, project_content, project_sponsor, project_status, project_zone, files_name, files_url) 
              VALUE(:project_name, :project_content, :project_sponsor, :project_status, :project_zone, :files_name, :files_url)");
          $q->execute([
              'files_name' => $file_name,
              'files_url' => $file_dest,
              'project_name' => $project_name,
              'project_content' => $project_content,
              'project_sponsor' => $project_sponsor,
              'project_status' => $project_status,
              'project_zone' => $project_zone,
          ]);

            // var_dump($description);
            // die();

            $success = "Votre projet a été créé avec succès";
          }else{
              $error = "Veuillez remplir tous les champs";
          }
    }
      
  include "logics/create_project.php";