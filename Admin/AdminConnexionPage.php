<?php include "Template/header.php"; ?>

<form action = "Traitement/ConnexionTraitement.php" method = "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom d'utilisateur :</label>
    <input type="text" class="form-control" name = "user_name"id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe :</label>
    <input type="password" class="form-control" name = "user_password"id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php include "Template/footer.php"; ?>
