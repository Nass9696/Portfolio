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

function getProject($db){
  $query = $db->query('SELECT p.*, i.* FROM projet AS p INNER JOIN image AS i');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  return $result;

}
 ?>
