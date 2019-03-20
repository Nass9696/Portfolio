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
    <title>NG | Réalisations</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="SHORTCUT ICON" href="http://nassim-developpeur-web-junior.000webhostapp.com/img/favicon.ico">
    <link rel="manifest" href="con" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
<body class = "BodyRulesIndex pt-5">
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ START HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header>
  <aside>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~ XS Responsive ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <nav class = "container-fluid d-block d-sm-none NavigationFixed backblack p-1 indexFull">
      <div class="dropdown d-flex justify-content-between">
        <button class="btn dropdown-toggle FullBorder backblack" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bars white"></i>
        </button>
        <div class="dropdown-menu backblack container-fluid text-center text-white z-indexFull" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item text-white" href="PageProfil.php">Profil</a>
          <hr class = "border-top border-danger">
          <a class="dropdown-item text-white" href="PageRealisations.php">Réalisations</a>
          <hr class = "border-top border-danger">
          <a class="dropdown-item text-white" href="PageContacter.php">Contacter</a>
        </div>
        <a class="nav-item nav-link text-white" href="index.php"><i class="fas fa-home white"></i></a>
      </div>
    </nav>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~ XS Responsive ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~ DESKTOP TOUCHPAD ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <nav class="container-fluid d-none d-sm-block navbar navbar-expand-lg navbar-light backOpacityBlack NavigationFixed text-white indexFull">
        <div class="container navbar-nav d-flex flex-row justify-content-between">
          <div class="d-flex flex-row justify-content-center align-items-center hoverIconeColorRed">
            <a class="nav-item ml-2" href="index.php"><i class="fas fa-home white mr-1"></i></a>
          </div>
          <div class="d-flex flex-row justify-content-center align-items-center hoverUnderline">
            <i class="fas fa-user-alt white"></i>
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageProfil.php">A propos</a>
          </div>
          <div class="d-flex flex-row justify-content-center align-items-center hoverUnderline">
            <i class="fas fa-toolbox white"></i>
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageRealisations.php">Réalisations</a>
          </div>
          <div class="d-flex flex-row justify-content-center align-items-center hoverUnderline">
            <i class="fas fa-phone  white"></i>
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageContacter.php">Contacter</a>
          </div>
        </div>
      </div>
    </nav>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~ DESKTOP TOUCHPAD ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  </aside>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<main class = "MainOtherPages">
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~DESKTOP~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div class = "d-none d-lg-block">
    <aside class="d-lg-flex justify-content-center AsideRealisation flex-lg-wrap col-12">
    <?php foreach ($projet as $key => $value) { ?>
    <div class="card col-4 bg-transparent text-light d-flex flex-column align-items-center mt-3">
      <h5 class="card-title textAlignC mt-1"><?php echo $value['projet_name']; ?></h5>
      <div class="container-fluid">
        <img class="card-img-top" src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>">
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn FullBorder mt-3 backblack text-light" data-toggle="modal" data-target="<?php echo "#modal" . $value['projet_id'] ?>">
        Voir ici !
      </button>

      <!-- Modal -->
      <div class="modal fade mt-3" id="<?php echo "modal" . $value['projet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered model-lg" role="document">
          <div class="modal-content backblack">
            <div class="modal-header">
              <div class = "container-fluid d-flex flex-column align-items-center">
                <div>
                  <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $value["projet_name"]; ?></h5>
                </div>
                <div>
                  <img class="card-img-top mt-3" src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>" height="180" width="170">
                </div>
              </div>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo $value['projet_description']; ?>
            </div>
            <div class="modal-footer">
              <a href = "<?php echo $value['projet_github']; ?>" type="button" class="btn FullBorder mt-3 backblack text-light">GitHub</a>
              <button type="button" class="btn btn-secondary FullBorder mt-3 backblack text-light" data-dismiss="modal">Quitter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    </aside>
  </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~DESKTOP~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MOBIL~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div class = "d-block d-sm-none">
        <aside class="d-flex flex-column justify-content-between align-items-center">
        <?php foreach ($projet as $key => $value) { ?>
        <div class="card col-10 bg-transparent text-light d-flex align-items-center">
          <h5 class="card-title textAlignC mt-1"><?php echo $value['projet_name']; ?></h5>
          <div class="container-fluid">
            <img class="card-img-top" src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>">
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary FullBorder mt-3 backblack text-light" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo "#modal" . $value['projet_id'] ?>">
            Voir ici !
          </button>

          <!-- Modal -->
          <div class="modal fade bd-example-modal-sm mt-4" id="<?php echo "modal" . $value['projet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog model-sm modal-dialog-centered" role="document">
              <div class="modal-content backblack">
                <div class="modal-header">
                  <div class = "container-fluid d-flex flex-column align-items-center">
                    <div>
                      <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $value["projet_name"]; ?></h5>
                    </div>
                    <div class="">
                      <img class="card-img-top mt-3" src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>" height="180" width="170">
                    </div>
                  </div>
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php echo $value['projet_description']; ?>
                </div>
                <div class="modal-footer">
                  <a href = "<?php echo $value['projet_github']; ?>" type="button" class="btn FullBorder mt-3 backblack text-light">GitHub</a>
                  <button type="button" class="btn btn-secondary FullBorder mt-3 backblack text-light" data-dismiss="modal">Quitter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        </aside>
      </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MOBIL~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~TOUCHPAD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class = "d-none d-sm-block d-lg-none">
      <aside class="AsideRealisation d-flex justify-content-between flex-row flex-wrap col-12">
      <?php foreach ($projet as $key => $value) { ?>
      <div class="card col-6 bg-transparent text-light d-flex align-items-center">
        <h5 class="card-title textAlignC mt-1"><?php echo $value['projet_name']; ?></h5>
        <div class="">
          <img class="card-img-top " src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>" height="150" width="130">
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn FullBorder mt-3 backblack text-light" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo "#modal" . $value['projet_id'] ?>">
          Voir ici !
        </button>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg mt-4" id="<?php echo "modal" . $value['projet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog model-sm modal-dialog-centered" role="document">
            <div class="modal-content backblack">
              <div class="modal-header">
                <div class = "container-fluid d-flex flex-column align-items-center">
                  <div>
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $value["projet_name"]; ?></h5>
                  </div>
                  <div class="">
                    <img class="card-img-top mt-3" src="<?php echo $value['img_path'];?>" alt="<?php echo $value['img_alt']; ?>" height="180" width="170">
                  </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php echo $value['projet_description']; ?>
              </div>
              <div class="modal-footer">
                <a href = "<?php echo $value['projet_github']; ?>" type="button" class="btn FullBorder mt-3 backblack text-light">GitHub</a>
                <button type="button" class="btn btn-secondary FullBorder mt-3 backblack text-light" data-dismiss="modal">Quitter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      </aside>
    </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~TOUCHPAD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
      <p class = "mt-1">© Copyright 2019 N. GACEM</p>
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
