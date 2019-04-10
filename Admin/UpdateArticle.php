<?php
//Je charge les pages
require "../Model/db.php";
require "../Model/ConnexionManager.php";
require "../Model/ImgManager.php";
require "../Model/AddProjectManager.php";
//Je me connect à la BDD
$db = connectDataBase();
//Je stock mes paramètre de l'URL dans des variables
$id_project = $_GET['id_projet'];
//Je récupère le projet selectionné par son ID
$project = showProject($db, $id_project);
 ?>
<?php include "Template/header.php" ?>
<form method="post" action="Traitement/UpdateTraitement.php?id_project=<?php echo htmlspecialchars($id_project); ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Titre :</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name = "project_name" value="<?php echo $project['projet_name'];  ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" id="updateArea" name = "project_description" rows="7"><?php echo $project['projet_description'];  ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Lien GitHub :</label>
    <input type="text" class="form-control-file" id="exampleFormControlFile1" name = "project_github" value=" <?php echo $project['projet_github'];  ?>">
  </div>
  <button type="submit" class="btn btn-primary">Valider !</button>
</form>
<?php include "Template/footer.php" ?>
