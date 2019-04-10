<?php

//Function pour ajouter un projet en BDD
function addProject($project, $lastid, $db){
  $query = $db->prepare('INSERT INTO projet(projet_name, projet_img, projet_description, projet_github) VALUES (:projet_name, :projet_img, :projet_description, :projet_github)');
  $result = $query->execute([
    'projet_name' => $project['project_name'],
    'projet_img' => $lastid['img_id'],
    'projet_description' => $project['project_description'],
    'projet_github' => $project['project_github']
  ]);

  $query->closeCursor();

  return $result;
}

//Function pour modifier un projet
function updateProject($project, $lastid, $db){
  $query = $db->prepare('UPDATE projet SET projet_name = :project_name, projet_github = :project_github, projet_description = :project_description WHERE projet_id = :project_id');
  $result = $query->execute([
    'project_name' => $project['project_name'],
    'project_github' => $project['project_github'],
    'project_description' => $project['project_description'],
    'project_id' => $lastid
  ]);

  $query->closeCursor();

  return $result;
}

//Fonction qui retourne les colonnes projet_name et projet_id de ma table projet
function getProject($db){
  $query = $db->query('SELECT p.projet_name, p.projet_id, p.projet_img, i.img_id FROM projet AS p INNER JOIN image AS i ON p.projet_img = i.img_id');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();
  return $result;

}

//Cette jointure permet d'afficher le projet avec son image associés
function joinProjectOnImg($db){
  $query = $db->query('SELECT p.projet_id, p.projet_name, p.projet_description,p.projet_github, i.img_path, i.img_alt FROM projet AS p INNER JOIN image AS i ON p.projet_img = i.img_id');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  return $result;

  $query->closeCursor();
}

//Cette jointure permet d'afficher les informations du projet et de son image associée
function showProject($db, $id_projet){
  $query = $db->prepare('SELECT p.projet_id, p.projet_name, p.projet_description, p.projet_github, i.img_path, i.img_alt FROM projet AS p INNER JOIN image AS i ON p.projet_img = i.img_id WHERE p.projet_id = ?');
  $result = $query->execute([$id_projet]);
  $tableau = $query->fetch(PDO::FETCH_ASSOC);

  return $tableau;

  $query->closeCursor();
}


//Fonction qui permet de supprimer un projet
function deleteProject($id_projet, $db){
  $query = $db->prepare('DELETE FROM projet WHERE projet_id = ?');
  $result = $query->execute([$id_projet]);

  return $result;

  $query->closeCursor();
}

//Fonction qui permet de supprimer une image associé à un projet
function deleteProjectImg($id_img, $db){
  $query = $db->prepare('DELETE FROM image WHERE img_id = ?');
  $result = $query->execute([$id_img]);

  return $result;

  $query->closeCursor();
}
 ?>
