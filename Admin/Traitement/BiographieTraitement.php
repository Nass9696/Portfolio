<?php
//Je charge les pages nécessaires
require "../../Model/BiographieManager.php";
require "../../Model/db.php";
//Je me connect à la BDD
$db = connectDataBase();
//Je stock les données formulaires dans une variable
$new_text = $_POST['text_area'];

if(!empty($new_text)){
  updateBio($new_text, $db);

  header("Location: ../../PageProfil.php");
  exit;
}
  else {
    header("Location: ../AdminPanel.php");
    exit;
  }

 ?>
