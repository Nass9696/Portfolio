<?php include "Template/header.php" ?>
<form method="post" action="Traitement/AddArticleTraitement.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Titre :</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name = "project_name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Télécharger l'image :</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "project_img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Alt de l'image :</label>
    <input type="text" class="form-control-file" id="exampleFormControlFile1" name = "img_alt">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" id="addProject" name = "project_description" rows="7"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Lien GitHub :</label>
    <input type="text" class="form-control-file" id="exampleFormControlFile1" name = "project_github">
  </div>
  <button type="submit" class="btn btn-primary">Valider !</button>
</form>
<?php include "Template/footer.php" ?>
