<?php

//Fonction qui compare les données d'un formulaire avec ceux en BDD afin de donner accés à une page

function verifUser($form_user, $db_user){
  if($form_user['user_name'] === $db_user['user_name'] && $form_user['user_password'] === $db_user['user_password'])
    {
      session_start();
      $_SESSION['user'] = $db_user;
      header('Location: ../AdminPanel.php');
      exit;
    }
    else
    {
      header('Location: ../index.php');
      exit;
    }
}

//Fonction qui vérifie que l'utilisateur enregistré en Session existe vraiment en BDD

function verifUserSession($User_Session){
  if(!isset($User_Session) || empty($User_Session)){
    header('Location: index.php');
    exit;
  }
}
 ?>
