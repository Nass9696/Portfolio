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

<aside>
  <div class="d-flex justify-content-between align-items-center">
    <div class="d-flex justify-content-end">
      <a href= "Traitement/SessionTraitement.php" class="btn btn-danger mr-1">Déconnexion</a>
    </div>
    <h2>Mes traveaux</h2>
    <a href="AddArticle.php" role="button" aria-pressed="true">Ajouter +</a>
  </div>
  <table class="table mt-1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($project as $key => $value) {
    ?>
    <tr>
      <th scope="row"><?php echo $value['projet_id'];?></th>
      <td><?php echo $value['projet_name']; ?></td>
      <td>
        <a href='#' class='btn bg-warning text-dark mr-1' role='button'>Modifier</a>
        <a href= 'Traitement/deleteTraitement.php?id_projet=<?php echo htmlspecialchars($value['projet_id']); ?>&amp;id_img=<?php echo htmlspecialchars($value['img_id']); ?>' class='btn bg-danger text-light' role='button'>Supprimer</a>
      </td>
    </tr>
      <?php } ?>
    </tbody>
  </table>
</aside>
<aside>
  <h2>Biographie</h2>
  <form class="" action="Traitement/BiographieTraitement.php" method="post">
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name = "text_area">
        <?php echo $biographie['bio_text']; ?>
      </textarea>
      <button type="submit" class="btn btn-success mt-1">Valider !</button>
    </div>
  </form>
</aside>

<?php include "Template/footer.php"; ?>
