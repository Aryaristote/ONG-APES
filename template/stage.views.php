<?php
	session_start(); 

    require "config/database.php";
	require "partial/flash.php";
    // require "functions/function.php";

    $q = $db->prepare("SELECT * FROM offres WHERE offre_id  = :offre_id");
    
    if($q){
		$q->execute([
			'offre_id' => $_GET['id'],
		]);
		$one_offre = $q->fetch(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }

    if(isset($_POST['submit'])){
        if(!empty($_POST['name'] && $_POST['country'] && $_POST['location'] && $_POST['phone'] && $_POST['domain'] && $_POST['niveau'] && $_POST['experience'])){
            extract($_POST);

            if(!empty($_FILES)){
                $file_name = $_FILES['file']['name'];
                $file_extension = strtolower(strrchr($file_name, "."));
        
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_name = md5(uniqid(rand())).$file_extension;
                $file_dest = 'admin/files/'.$file_name;
        
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
                $file_name2 = md5(uniqid(rand())).$file_extension2;
                $file_dest2 = 'admin/files/'.$file_name2;
        
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
                $file_name3 = md5(uniqid(rand())).$file_extension3;
                $file_dest3 = 'admin/files/'.$file_name3;
        
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
                name, country, location, domain, phone, niveau, experience, files_name, files_url, files_name2, files_url2, files_name3, files_url3, applied_offer
                ) VALUE(:name, :country, :location, :domain, :phone, :niveau, :experience, :files_name, :files_url, :files_name2, :files_url2, :files_name3, :files_url3, :applied_offer)");
            $q->execute([
                'files_name' => $file_name,
                'files_url' => $file_dest,
                'files_name2' => $file_name2,
                'files_url2' => $file_dest2,
                'files_name3' => $file_name3,
                'files_url3' => $file_dest3,
                'name' => $name,
                'country' => $country,
                'location' => $location,
                'domain' => $domain,
                'phone' => $phone,
                'niveau' => $niveau,
                'experience' => $experience,
                'applied_offer' => $one_offre->post_name,
            ]);

            // var_dump($q);
            // die();

            $success = "Candidature envoyée avec succès";
            header("Location: jobs.php");
        }else{
            $error = "Veuillez remplir tous les champs";
        }
    }
	
	