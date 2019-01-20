<?php
  //On récupère la session
  session_start();
  //On détruit les variables
  session_unset();
  //On détruit la session
  session_destroy();
  //On redirige
  header('Location: ../AdminConnexionPage.php');
  exit;
  ?>
