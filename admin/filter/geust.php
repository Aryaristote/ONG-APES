<?php
    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])){
        header('Location: ../index.php');
        exit();
    }