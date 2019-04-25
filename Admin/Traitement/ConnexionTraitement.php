<?php
//Je charge les pages nécessaires
require "../../Model/db.php";
require "../../Model/ConnexionManager.php";
require "../../Service/VerifUser.php";

//Je me connect à la base de données
$db = connectDataBase();

//Je stock les champs des formulaires dans une variables
$form_user = $_POST;

//Je stock les résultats des requêtes
$user = getUser($db);

//Je vérifie si les informations rentrées dans le champs correspondent bien à ceux dans la BDD
verifUser($form_user, $user);
 ?>
