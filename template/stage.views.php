<?php
	session_start(); 

    require "config/database.php";
	require "partial/flash.php";
    // require "functions/function.php";

    if(isset($_POST['submit'])){
        if(!empty($_POST['name'] && $_POST['country'] && $_POST['location'] && $_POST['domain'] && $_POST['niveau'] && $_POST['experience'])){
            extract($_POST);

            if(!empty($_FILES)){
                $file_name = $_FILES['file']['name'];
                $file_extension = strtolower(strrchr($file_name, "."));
        
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_dest = 'files/'.$file_name;
        
                $allow_extension = array('.pdf', '.PDF'); 


            
                if(in_array($file_extension, $allow_extension)){
                    if(move_uploaded_file($file_tmp_name, $file_dest)){

                    }
                }else{
                    $error = "Mauvais format de fichier, seule l'extensions PDF est acceptées";
                    return;
                }
            }else{
                $error = "Veillez selectioner un fichier";
                return;
            }

            // // Second check
            if(!empty($_FILES)){
                $file_name2 = $_FILES['file2']['name'];
                $file_extension2 = strtolower(strrchr($file_name2, "."));
        
                $file_tmp_name2 = $_FILES['file2']['tmp_name'];
                $file_dest2 = 'files/'.$file_name2;
        
                $allow_extension2 = array('.pdf', '.PDF'); 


            
                if(in_array($file_extension2, $allow_extension2)){
                    if(move_uploaded_file($file_tmp_name2, $file_dest2)){

                    }
                }else{
                    $error = "Mauvais format de fichier, seule l'extensions PDF est acceptées";
                    return;
                }
            }else{
                $error = "Veillez selectioner un fichier";
                return;
            }

            // Third check
            if(!empty($_FILES)){
                $file_name3 = $_FILES['file3']['name'];
                $file_extension3 = strtolower(strrchr($file_name3, "."));
        
                $file_tmp_name3 = $_FILES['file3']['tmp_name'];
                $file_dest3 = 'files/'.$file_name3;
        
                $allow_extension3 = array('.pdf', '.PDF'); 


            
                if(in_array($file_extension3, $allow_extension3)){
                    if(move_uploaded_file($file_tmp_name3, $file_dest3)){

                    }
                }else{
                    $error = "Mauvais format de fichier, seule l'extensions PDF est acceptées";
                    return;
                }
            }else{
                $error = "Veillez selectioner un fichier";
                return;
            }

            $q = $db->prepare("INSERT INTO visitors(
                name, country, location, domain, niveau, experience, files_name, files_url, files_name2, files_url2, files_name3, files_url3
                ) VALUE(:name, :country, :location, :domain, :niveau, :experience, :files_name, :files_url, :files_name2, :files_url2, :files_name3, :files_url3)");
            $q->execute([
                'files_name' => $file_name,
                'files_url' => $file_dest,
                'files_name2' => $file_name2,
                'files_url2' => $file_dest2,
                'files_name3' => $file_name3,
                'files_url3' => $file_dest3,
                // 'files_resume' => $file_resume_name,
                // 'files_resume_url' => $file_resume_dest,
                // 'files_ident_name' => $file_ident_name,
                // 'files_ident_url' => $file_ident_dest,
                'name' => $name,
                'country' => $country,
                'location' => $location,
                'domain' => $domain,
                'niveau' => $niveau,
                'experience' => $experience,
            ]);

            // var_dump($q);
            // die();

            $success = "Demande envoyée avec succès";
        }else{
            $error = "Veuillez remplir tous les champs";
        }
    }

    // Get file 
    // if(!empty($_FILES)){
    //     $file_name = $_FILES['file']['name'];
    //     $file_extension = strtolower(strrchr($file_name, "."));

    //     $file_tmp_name = $_FILES['file']['tmp_name'];
    //     $file_dest = 'files/'.$file_name;

    //     $allow_extension = array('.pdf', '.PDF'); 

    //     if(in_array($file_extension, $allow_extension)){
    //         if(move_uploaded_file($file_tmp_name, $file_dest)){
    //             $req = $db->prepare("INSERT INTO visitors(files_name, files_url) VALUE (?, ?)");
    //             $req->execute([
    //                 $file_name,
    //                 $file_dest,
    //             ]);
    //             $success = "Demande envoyée avec succès";
    //         }
    //     }else{
    //         $error = "Seul le format PDF peut être envoyé";
    //     }
    // }
	
	