<?php
require "../../Model/db.php";
require "../../Model/AddProjectManager.php";

//Je me connect à la BDD
$db = connectDataBase();
//Je vérifie si les variables dans la barre URL existe
if(isset($_GET['id_projet']) && isset($_GET['id_img'])){
  //Je vérifie si les variables sont vides
  if(!empty($_GET['id_projet']) && !empty($_GET['id_img'])){
    $id_projet = $_GET['id_projet'];
    $id_img = $_GET['id_img'];
    //Je re-verifie les variable $_GET stocké dans d'autre variable si elle ne se pas vides
    if(!empty($id_projet) && !empty($id_img)){
      deleteProject($id_projet, $db);
      deleteProjectImg($id_img, $db);
    }
  }
  //Je redirige vers Panel d'administration
  header('Location: ../AdminPanel.php');
  exit;
}
 ?>
