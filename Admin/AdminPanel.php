<?php
session_start();
//je charge les pages nécessaires
require "../Service/VerifUser.php";
require "../Model/BiographieManager.php";
require "../Model/db.php";
require "../Model/AddProjectManager.php";
//Je me connect à la base de données
$db = connectDataBase();
//Je stock la Biographie de ma BDD
$biographie = getBio($db);
$project = getProject($db);
//Je vérifie que l'utilisateur enregistré existe vraiment en BDD
verifUserSession($_SESSION['user']);

 ?>
<?php include "Template/header.php"; ?>

<a href= "Traitement/SessionTraitement.php" class="btn btn-danger">Déconnexion</a>
<aside>
  <h2>Projet</h2>
  <a href="AddArticle.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter +</a>
  <table class="table mt-1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($project as $key => $value) {?>
    <tr>
      <th scope="row"><?php echo $value['projet_id'];?></th>
      <td><?php echo $value['projet_name']; ?></td>
      <td><?php echo $value['projet_description']; ?></td>
      <td><?php echo "<a href='#' class='btn bg-warning text-dark' role='button' >Modifier</a>";?></td>
    </tr>
        <?php } ?>
  </table>
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
