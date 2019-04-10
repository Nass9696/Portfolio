<?php
require "../../Model/AddProjectManager.php";
require "../../Model/db.php";

if(!empty($_POST)){
  $project = $_POST;
  $id = $_GET['id_project'];
  if(!empty($project) && !empty($id)){
    $db = connectDataBase();
    //Je verifie que je suis bien connecté
    if(connectDataBase()){
      //J'execute la requête pour modifier
      updateProject($project, $id, $db);
      if(updateProject($project, $id, $db)){
        //Si la requête retourne True, je redirige
        header('Location: ../AdminPanel.php');
        exit;
      }
    }
  }
}
 ?>
