<?php
	session_start(); 

    require "config/database.php";
	require "partial/flash.php";
    // require "functions/function.php";

    if(isset($_POST['submit'])){
        if(!empty($_POST['name'] && $_POST['country'] && $_POST['location'] && $_POST['domain'] && $_POST['experience'])){
            extract($_POST);

            if(!empty($_FILES)){
                $file_name = $_FILES['file']['name'];
                $file_extension = strtolower(strrchr($file_name, "."));
        
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_dest = 'files/'.$file_name;
        
                $allow_extension = array('.pdf', '.PDF'); 


            
                if(in_array($file_extension, $allow_extension)){
                    if(move_uploaded_file($file_tmp_name, $file_dest)){
                        
                        // $q = $db->prepare("INSERT INTO visitors(name, country, location, domain, experience, files_name, files_url) 
                        //                 VALUE(:name, :country, :location, :domain, :experience, :files_name, :files_url)");
                        // $q->execute([
                        //     'files_name' => $file_name,
                        //     'files_url' => $file_dest,
                        //     'name' => $name,
                        //     'country' => $country,
                        //     'location' => $location,
                        //     'domain' => $domain,
                        //     'experience' => $experience,
                        // ]);
                    }
                    // $success = "Demande envoyée avec succès";
                }else{
                    $error = "Mauvais format de fichier, seule l'extensions PDF est acceptées";
                    return;
                }
            }else{
                $error = "Veillez selectioner un fichier";
                return;
            }

            // Second check
            if(!empty($_FILES)){
                $file_resume_name = $_FILES['file_resume']['name'];
                $file_resume_extension = strtolower(strrchr($file_resume_name, "."));
        
                $file_resume_tmp_name = $_FILES['file_resume']['tmp_name'];
                $file_resume_dest = 'files/'.$file_resume_name;
        
                $allow_resume_extension = array('.pdf', '.PDF'); 


            
                if(in_array($file_resume_extension, $allow_resume_extension)){
                    if(move_uploaded_file($file_resume_tmp_name, $file_resume_dest)){
                        
                        
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
                $file_ident_name = $_FILES['file_ident']['name'];
                $file_ident_extension = strtolower(strrchr($file_ident_name, "."));
        
                $file_ident_tmp_name = $_FILES['file_ident']['tmp_name'];
                $file_ident_dest = 'files/'.$file_ident_name;
        
                $allow_ident_extension = array('.pdf','.PDF','.png','.jpg', '.jpeg');


                if(in_array($file_ident_extension, $allow_ident_extension)){
                    if(move_uploaded_file($file_ident_tmp_name, $file_ident_dest)){
                        
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
                name, country, location, domain, experience, files_name, files_url, file_resume, file_resume_url, file_ident_name, file_ident_url
                ) VALUE(:name, :country, :location, :domain, :experience, :files_name, :files_url, :files_resume, :files_resume_url :files_ident_name, :files_ident_url, )");
            $q->execute([
                'files_name' => $file_name,
                'files_url' => $file_dest,
                'files_resume' => $file_resume_name,
                'files_resume_url' => $file_resume_dest,
                'files_ident_name' => $file_ident_name,
                'files_ident_url' => $file_ident_dest,
                'name' => $name,
                'country' => $country,
                'location' => $location,
                'domain' => $domain,
                'experience' => $experience,
            ]);

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
	
	