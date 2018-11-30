<?php

//Function pour ajouter un projet en BDD
function addProject($project, $lastid, $db){
  $query = $db->prepare('INSERT INTO projet(projet_name, projet_img, projet_description) VALUES (:projet_name, :projet_img, :projet_description)');
  $result = $query->execute([
    'projet_name' => $project['project_name'],
    'projet_img' => $lastid['img_id'],
    'projet_description' => $project['project_description']
  ]);

  return $result;
}


 ?>
