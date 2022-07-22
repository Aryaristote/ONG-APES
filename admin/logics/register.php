<?php
    session_start();

    include "../config/database.php";
    include "../functions/function.php";

    // if (isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $role = $_POST['role'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $password_hash = password_hash($password, PASSWORD_BCRYPT);

    //     $q = $db->prepare("SELECT * FROM admin WHERE email=:email");

    //     $q->bindParam("email", $email, PDO::PARAM_STR);
    //     $q->execute();
    //     if ($q->rowCount() > 0) {
    //         $errors = "The email address is already registered!";
    //     }
    //     if ($q->rowCount() == 0) {
    //         $q = $connection->prepare("INSERT INTO admin(name, role, password, email) VALUES (:name, :role, :password_hash,:email)");
    //         $q->bindParam("name", $name, PDO::PARAM_STR);
    //         $q->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
    //         $q->bindParam("email", $email, PDO::PARAM_STR);

    //         $result = $q->execute();
    //         if ($result) {
    //             echo '<p class="success">Your registration was successful!</p>';
    //         } else {
    //             echo '<p class="error">Something went wrong!</p>';
    //         }
    //     }
    // }

    if(isset($_POST['submit'])){
        if(!empty(['name', 'email', 'role', 'password', 'password_confirm'])){
            $errors = [];
            extract($_POST);

            //Check if the input and fill out
            if(mb_strlen($name) < 5){
                $errors[] = "Le nom est trop court";
            }
            if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[] = "Mauvaise address Email";
            }
            if(mb_strlen($password) < 6){
                $errors[] = "Mot de passe insuffisant";
            }else{
                if($password_confirm != $password_confirm){
                    $errors[] = "Le mot de passe ne correspond pas";
                }
            }

            // Check if the value is not already used
            if(is_already_in_use('name', '$name', 'admin')){
                $errors[] = "pseudo already used";
            }
            if(is_already_in_use('email', '$email', 'users')){
                $errors[] = "Email already used";
            }

            //Incase the login succed
            if(count($errors) == 0){
                $password = $password;

                //Send data in database
                $q = $db->prepare('INSERT INTO admin(name, email, role, password) VALUES (:name, :email, :role, :password)');
                $q->execute([
                    'name' => $name,
                    'email' => $email,
                    'role' => $role,
                    'password' => $password,
                ]);

                header("Location: login.php");
            }else{
                save_input_data();
            }
        }else{
            $errors[] = "Please, Fill out all input";
            save_input_data();
        }
    }else{
        // clear_input_data();
    }

    // require 'views/register.views.php';