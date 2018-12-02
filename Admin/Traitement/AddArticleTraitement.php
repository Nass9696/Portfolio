<?php
//je charge les pages neceséssaire
require "../../Model/db.php";
require "../../Model/ConnexionManager.php";
require "../../Model/ImgManager.php";
require "../../Model/AddProjectManager.php";
//Je me connect à la BDD
$db = connectDataBase();
//Je stock les informations de mon formulaire dans une variable
$form = $_POST;
$img = $_FILES['project_img'];

if(!empty($img)){
  $path = 'img/' .$img['name'];
  //Si addImg est a true
  if(addImg($img, $path,$db)){
    $lastid = getLastId($db);
      //Si lastidest a true
    if(!empty($lastid)){
        if(addProject($form, $lastid, $db)){
          //Chemin dans lequel je vais enregistrer l'image
          if(move_uploaded_file($img['tmp_name'], "../../" .$path)){
            header('Location: ../AdminPanel.php');
            exit;
          }
        }

    }
  }
}
?>
