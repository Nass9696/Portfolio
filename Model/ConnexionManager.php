<?php
function getUser($db){

  $query = $db->query('SELECT * FROM user');
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;
}

 ?>
