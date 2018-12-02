<?php
function getBio($db){

  $query = $db->query('SELECT * FROM biographie');
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;

  $query->closeCursor();
}

function updateBio($update, $db){
  $query = $db->prepare("UPDATE biographie SET bio_text = ?");
  $query->execute(array($update));

  return $query;

  $query->closeCursor();
}
 ?>
