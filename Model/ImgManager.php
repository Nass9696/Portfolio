<?php
//J'envoye les informations de l'image avec son chemin dans la table Image de ma base de donnés
function addImg($img, $path, $img_alt){

  $db = connectDataBase();

  $query = $db->prepare('INSERT INTO image (img_path, img_name, img_type, img_alt) VALUES (:img_path, :img_name, :img_type, :img_alt)');
  $result = $query->execute(array(
    'img_path' => $path,
    'img_name' => $img['name'],
    'img_type' => $img['type'],
    'img_alt' => $img_alt
  ));

return $result;
}

function getLastId($db){
  $query = $db->query("SELECT img_id FROM image ORDER BY img_id DESC ");
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;
}
 ?>
