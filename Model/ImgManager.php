00<?php
//J'envoye les informations de l'image avec son chemin dans la table Image de ma base de donnés
function addImg($img, $path, $db){
  $query = $db->prepare('INSERT INTO image (img_path, img_name, img_type) VALUES (:img_path, :img_name, :img_type)');
  $result = $query->execute(array(
    'img_path' => $path,
    'img_name' => $img['name'],
    'img_type' => $img['type']
  ));

return $result;
}

function getLastId($db){
  $query = $db->query("SELECT img_id FROM image ORDER BY img_id DESC ");
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;
}
 ?>
