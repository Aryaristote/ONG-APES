<?php 
    session_start();
    include "../config/database.php";

    $q = $db->query("SELECT id, name, location, domain, niveau, files_url, files_url2, files_url3 FROM visitors ORDER BY name DESC LIMIT 0,5");
    $stages = $q->fetchAll(PDO::FETCH_OBJ);

    $req = $db->query("SELECT COUNT(*) FROM visitors;");
    $rowcount = $req->fetchAll(PDO::FETCH_OBJ);

    // echo $rowcount;

  include "logics/create_post.php";