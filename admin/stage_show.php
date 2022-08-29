<?php 
    session_start();
    include "../config/database.php";
    include "./filter/auth.php";

    $q = $db->query("SELECT * FROM offres ORDER BY created_at DESC");
    $offres = $q->fetchAll(PDO::FETCH_OBJ);

    // echo $rowcount;

  include "logics/stage_show.php";