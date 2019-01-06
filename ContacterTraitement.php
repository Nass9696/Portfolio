<?php
if(isset($_POST)){
  $to = 'dev.nassim.pro@gmail.com';
  $subject = $_POST['text_mail'];
  $message = 'Bonjour !';
  $headers = 'From:' .$_POST['adresse_mail'];
  mail($to, $message, $subject, $headers);
}
 ?>
