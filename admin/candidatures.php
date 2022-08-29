<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->query("SELECT * FROM visitors ORDER BY applied_offer DESC");
    $stages = $q->fetchAll(PDO::FETCH_OBJ);

    $req = $db->query("SELECT COUNT(*) FROM visitors;");
    $rowcount = $req->fetchAll(PDO::FETCH_OBJ);

    // echo $rowcount;

  include "logics/candidatures.php";