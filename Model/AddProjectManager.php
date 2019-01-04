<?php

//Function pour ajouter un projet en BDD
function addProject($project, $lastid, $db){
  $query = $db->prepare('INSERT INTO projet(projet_name, projet_img, projet_description) VALUES (:projet_name, :projet_img, :projet_description)');
  $result = $query->execute([
    'projet_name' => $project['project_name'],
    'projet_img' => $lastid['img_id'],
    'projet_description' => $project['project_description']
  ]);

  $query->closeCursor();

  return $result;
}

function getProject($db){
  $query = $db->query('SELECT projet_name, projet_id FROM projet');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();
  return $result;

}

function joinProjectOnImg($db){
  $query = $db->query('SELECT p.projet_name, p.projet_description, i.img_path FROM projet AS p INNER JOIN image AS i ON p.projet_img = i.img_id');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  return $result;

  $query->closeCursor();
}

function deleteProject($id, $db){
  $query = $db->prepare('DELETE FROM projet WHERE projet_id = ?');
  $result = $query->execute([$id]);

  return $result;

  $query->closeCursor();
}


 ?>
