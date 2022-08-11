<?php
    session_start();
    include "../config/database.php";
    include "./filter/geust.php";
    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $q = $db->prepare("SELECT * FROM admin WHERE email=:email");
        $q->bindParam("email", $email, PDO::PARAM_STR);
        $q->execute();
        
        $result = $q->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            $error = "la combinaison du mot de passe de l'utilisateur est fausse";
        } else {
            if ($result['password'] == $password) {
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['role'] = $result['role'];
                $success = "Bienvenue";
                
                header("Location: index.php?id=".$_SESSION['user_id']);
            } else {
                $error = "La combinaison du nom d'utilisateur et du mot de passe est incorrecte !";
            }
        }
    }