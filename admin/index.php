<?php 
  session_start();
  
  include "../config/database.php";
  include "./filter/auth.php";

  $q = $db->query("SELECT * FROM visitors ORDER BY applied_offer DESC LIMIT 0,5");
  $stages = $q->fetchAll(PDO::FETCH_OBJ);

  $q = $db->query("SELECT * FROM visitors");
  $All_apply = $q->fetchAll(PDO::FETCH_OBJ);

  $q = $db->query("SELECT * FROM project");
  $All_project = $q->fetchAll(PDO::FETCH_OBJ);

  $q = $db->query("SELECT * FROM offres");
  $All_offres = $q->fetchAll(PDO::FETCH_OBJ);

  $q = $db->query("SELECT * FROM news");
  $All_news = $q->fetchAll(PDO::FETCH_OBJ);

  $req = $db->query("SELECT COUNT(*) FROM visitors;");
  $rowcount = $req->fetchAll(PDO::FETCH_OBJ);

  $req = $db->query("SELECT * FROM contact");
  $contacts = $req->fetchAll(PDO::FETCH_OBJ);

  // echo $rowcount;

  include "logics/index.php";