<?php
session_start();
//je charge les pages nécessaires
require "../Service/VerifUser.php";
require "../Model/BiographieManager.php";
require "../Model/db.php";
//Je me connect à la base de données
$db = connectDataBase();
//Je stock la Biographie de ma BDD
$biographie = getBio($db);
//Je vérifie que l'utilisateur enregistré existe vraiment en BDD
verifUserSession($_SESSION['user']);

 ?>
<?php include "Template/header.php"; ?>

<a href= "Traitement/SessionTraitement.php" class="btn btn-danger">Déconnexion</a>
<aside>
  <h2>Projet</h2>
  <a href="AddArticle.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter +</a>
</aside>
<aside>
  <h2>Biographie</h2>
  <form class="" action="Traitement/BiographieTraitement.php" method="post">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">test</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name = "text_area">
<?php echo $biographie['bio_text']; ?>
      </textarea>
      <button type="submit" class="btn btn-success mt-1">Valider !</button>
    </div>
  </form>
</aside>

<?php include "Template/footer.php"; ?>
