<?php
//Je charge les pages nécessaires
require "Model/AddProjectManager.php";
require "Model/db.php";
//Je me connect à la DB
$db = connectDataBase();
$projet = joinProjectOnImg($db);
 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RÉALISATIONS</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="con" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet">
</head>

<body class = "BodyRulesIndex pt-5">
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ START HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header>
  <aside>
    <nav class="navbar navbar-expand-lg navbar-light backblack NavigationFixed  indexFull">
      <button class="navbar-toggler border border-danger" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars white"></i>
      </button>
      <div class = "d-flex justify-content-end d-block hoverIconeColorRed">
        <a class="nav-item nav-link text-white" href="index.php"><i class="fas fa-home white"></i></a>
      </div>
      <div class="NavBarRow collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="NavBar navbar-nav hoverUnderline">
          <div class = "flex row justifyCenter spaceAround alignItemCenter ml-1">
            <i class="fas fa-user-alt white"></i>
            <a class="nav-item nav-link text-white ml-2" href="PageProfil.php">A propos</a>
          </div>
          <div class = "flex row justifyCenter spaceAround alignItemCenter ml-1">
            <i class="fas fa-toolbox white"></i>
            <a class="nav-item nav-link text-white ml-2" href="PageRealisations.php">Réalisations</a>
          </div>
          <div class = "flex row justifyCenter spaceAround alignItemCenter ml-1">
            <i class="fas fa-phone white"></i>
            <a class="nav-item nav-link text-white ml-2" href="PageContacter.php">Contacter</a>
          </div>
        </div>
      </div>
    </nav>
  </aside>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<main class = "MainOtherPages">
  <aside class="d-flex align-content-lg-center AsideRealisation flex-wrap">
  <?php foreach ($projet as $key => $value) {
  ?>
  <div class="card col-3 bg-transparent text-light d-flex flex-column align-items-center">
    <h5 class="card-title textAlignC mt-1"><?php echo $value['projet_name']; ?></h5>
    <div class="">
      <img class="card-img-top " src="<?php echo $value['img_path'];?>" alt="Card image cap" height="180" width="170">
    </div>
    <div class="card-body">
      <a href="#" class="btn btn-primary">Voir ici !</a>
    </div>
  </div>
  <?php } ?>
  </aside>
</main>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class = "flex column spaceBetween justifyCenter textAlignC white marginT backOpacityBlack">
  <h3 class = "underline">Vous pouvez aussi me retrouver sur :</h3>
  <nav class = "flex row spaceAround justifyCenter">
    <span>
      <a href = "https://twitter.com/NG80798309?lang=fr"><i class="fab fa-twitter fa-2x"></i></a>
      <p>Twitter</p>
    </span>
    <span>
      <a href = "https://www.linkedin.com/in/nassim-gacem-5a3375172/"><i class="fab fa-linkedin-in fa-2x"></i></a>
      <p>LinkedIn</p>
    </span>
    <span>
      <a href = "https://github.com/Nass9696"><i class="fab fa-github fa-2x"></i></a>
      <p>GitHub</p>
    </span>
  </nav>
  <div class = "BlockCopy flex justifyCenter alignItemCenter">
    <div class = "Copy">
      <p>Copyright Nassim 2018</p>
    </div>
  </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
