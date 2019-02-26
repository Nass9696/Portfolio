<?php
//Je charge les pages nécessaires
require "Model/BiographieManager.php";
require "Model/db.php";
//je me connect à la DB
$db = connectDataBase();
//Je stock le contenu de la table Biographie dans une variable
$biographie = getBio($db);
 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NG | Profil</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="SHORTCUT ICON" href="http://nassim-developpeur-web-junior.000webhostapp.com/img/favicon.ico">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
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
        <div class="dropdown-menu backblack container-fluid text-center text-white " aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item text-white" href="PageProfil.php">Profil</a>
          <hr class = "border-top border-danger">
          <a class="dropdown-item text-white" href="PageRealisations.php">Réalisation</a>
          <hr class = "border-top border-danger">
          <a class="dropdown-item text-white" href="PageContacter.php">Contact</a>
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
<main class = "MainOtherPages white">
  <section class = "container-fluid">
    <h2 class = "underline textAlignC policeTitle mb-5">Qui suis-je ?</h2>
    <article class="container d-block d-sm-none d-flex flex-column justify-content-center align-items-center ">
      <img class = "responsiveImg border border-white" src="img/nassim.jpg" alt="Photo de profil" height="210"/>
    </article>
    <article class = "mt-5">
        <img class = "responsiveImg d-none d-sm-block float-sm-left mr-sm-4 border border-white" src="img/nassim.jpg" alt="Photo de profil" height="510"/>
        <div class = "container">
          <h2 class = "underline textAlignC policeTitle">Biographie</h2>
          <p>
            <?php echo $biographie['bio_text']; ?>
            <!-- Bonjour, je m'appelle Nassim Gacem et je suis un passioné du monde numérique. On peut dire que, je suis tombé dans la programmation en étant jeune.
            J'ai réalisé mes premier programmes à l'âge de 14 ans, j'ai notemment démarrer avec les languages C++ et Lua, pour ceux qui connaissent j'ai exprimé ma créativité dans Garry's Mod.
            C'est alors que j'ai décidé de faire de la programmation mon métier. <br> <br> C'est pourquoi j'ai intégré la formation Simplon à l'Adep de Roubaix ou j'ai pu monté en compétence sur l'intégration web
            en HTML, CSS et la réalisation d'application en JavaScript mais principalement en PHP. Aujourd'hui je peux dire que Symphony et la programmation orientée objet sont mes meilleurs amis ;).

            Je cherche une entreprise et une équipe qui seront acceuillir en stage un développeur avec un profil Junior comme le mien.
            Je suis curieux et motivé, apprendre de nouveaux languages et de nouvelles technologies ne m'a jamais fait peur.
            <br>
            <br>
            N'hésitez pas à me contacter, j'ai déjà hâte de collaborer avec vous !
            Sinon mis à part le dev je suis un fan de skateboard et d'astronomie.
            J'ai toujours envie de savoir ce qui se cache derrière la planéte suivante. -->
          </p>
        </div>
      </article>
  </section>
  <section class =  "container-fluid m-t8">
    <div class="d-flex justify-content-center">
      <h2 class = "text-center back mt-3">COMPÉTENCES</h2>
    </div>
    <aside class="container-fluid mt-5 d-none d-sm-block">
      <div class = "d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between mb-5">
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="far fa-eye fa-3x text-center"></i>
            <h4 class = "text-center mt-1">Front-End</h3>
          </div>
          <div class="btRed p-3 d-flex justify-content-around flex-wrap align-items-center">
            <img src="icon/html.jpg" alt="HTML"/>
            <img src="icon/css.jpg" alt="CSS"/>
            <img src="icon/js.jpg" alt="JS" height = "45"/>
            <img src="icon/boot.jpg" alt="Bootstrap"/>
            <img src="icon/angular.jpg" alt="Angular"/>
          </div>
        </article>
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="fas fa-cog fa-3x"></i>
            <h4 class = "text-center mt-1">Back-End</h3>
          </div>
          <div class="btRed p-3 d-flex justify-content-around flex-wrap align-items-center p-3">
              <img src="icon/php.jpg" height = "49" alt=""/>
              <img src="icon/symfony.jpg" height = "49" alt="" class = "text-light"/>
          </div>
        </article>
      </div>
      <div class = "mt-5 d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between">
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="fas fa-database fa-3x"></i>
            <h4 class = "text-center mt-1">Base de données</h3>
          </div>
          <div class="btRed p-3 d-flex justify-content-around flex-wrap align-items-center">
            <img src="icon/mysql.jpg" alt="MySQL"/>
            <img src="icon/sql.jpg" alt="SQL"/>
          </div>
        </article>
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="fas fa-project-diagram fa-3x"></i>
            <h4 class = "text-center mt-1">Autres..</h3>
          </div>
          <div class="btRed p-3 d-flex justify-content-around flex-wrap align-items-center">
            <img src="icon/github.jpg" alt="GitHub"/>
            <img src="icon/linux.jpg" alt="Linux"/>
            <img src="icon/git.jpg" alt="Git"/>
            <img src="icon/slack.jpg" alt="Slack"/>
          </div>
        </article>
      </div>
    </aside>
    <!---~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MOBIL ~~~~~~~~~~~~~~~~~~~~~~~~~~~~---------->
    <aside class="d-block d-sm-none container-fluid mt-4">
      <!-- FIRST BLOCK -->
      <div class = " d-flex flex-row justify-content-between align-items-center mb-5">
        <div class="card col-5 d-flex flex-column align-items-center backblack p-3 FullBorder">
          <div class="card-body d-flex flex-column align-items-center p-3">
            <h5 class="card-title text-center">Front-end</h5>
            <i class="far fa-eye fa-2x text-center"></i>
          </div>
            <button type="button" class="btn rounded-circle FullBorder backblack z-index-1" data-toggle="modal" data-target=".bd-example-modal-sm#front"><i class="far fa-hand-point-up text-white"></i></button>
          </div>
          <!-- MODAL -->
        <div class="modal fade bd-example-modal-sm" id="front" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-body backblack rounded">
              <div class="btRed borderB p-3 d-flex justify-content-around flex-wrap align-items-center">
                <img src="icon/html.jpg" alt="HTML"/>
                <img src="icon/css.jpg" alt="CSS"/>
                <img src="icon/js.jpg" alt="JS" height = "45"/>
                <img src="icon/boot.jpg" alt="Bootstrap"/>
                <img src="icon/angular.jpg" alt="Angular"/>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-5 backblack d-flex flex-column align-items-center backblack p-3 FullBorder">
          <div class="card-body d-flex flex-column align-items-center p-3">
            <h5 class="card-title text-center">Back-end</h5>
            <i class="fas fa-cog fa-2x"></i>
          </div>
          <button type="button" class="btn rounded-circle FullBorder backblack" data-toggle="modal" data-target=".bd-example-modal-sm#back"><i class="far fa-hand-point-up text-white"></i></button>
        </div>

        <div class="modal fade bd-example-modal-sm" id="back" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" role="dialog">
            <div class="modal-body backblack rounded">
              <div class="btRed borderB p-3 d-flex justify-content-around flex-wrap align-items-center p-3">
                  <img src="icon/php.jpg" height = "49" alt=""/>
                  <img src="icon/symfony.jpg" height = "49" alt="" class = "text-light"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SECOND BLOCK -->
      <div class = " d-flex flex-row justify-content-between align-items-center mt-5 border-top border-light pt-5">
        <div class="card col-5 backOpacityBlack d-flex flex-column align-items-center FullBorder p-3">
          <div class="card-body d-flex flex-column align-items-center p-3">
            <h5 class="card-title text-center">BDD</h5>
            <i class="fas fa-database fa-2x"></i>
          </div>
          <button type="button" class="btn rounded-circle FullBorder backblack" data-toggle="modal" data-target=".bd-example-modal-sm#serveur"><i class="far fa-hand-point-up text-white"></i></button>
        </div>
        <!-- MODAL -->
        <div class="modal fade bd-example-modal-sm" id= "serveur" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" role="dialog">
            <div class="modal-body backblack rounded">
              <div class="btRed borderB p-3 d-flex justify-content-around flex-wrap align-items-center">
                <img src="icon/mysql.jpg" alt="MySQL"/>
                <img src="icon/sql.jpg" alt="SQL"/>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-5 backblack FullBorder d-flex flex-column align-items-center p-3">
          <div class="card-body d-flex flex-column align-items-center p-3">
            <h5 class="card-title text-center">Autres...</h5>
            <i class="fas fa-project-diagram fa-2x"></i>
          </div>
          <button type="button" class="btn rounded-circle FullBorder backblack " data-toggle="modal" data-target=".bd-example-modal-sm#autre"><i class="far fa-hand-point-up text-white"></i></button>

          <!-- MODAL -->
          <div class="modal fade bd-example-modal-sm" id= "autre" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-body backblack rounded">
                <div class="btRed borderB p-3 d-flex justify-content-around flex-wrap align-items-center">
                  <img src="icon/github.jpg" alt="GitHub"/>
                  <img src="icon/linux.jpg" alt="Linux"/>
                  <img src="icon/git.jpg" alt="Git"/>
                  <img src="icon/slack.jpg" alt="Slack"/>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </aside>
  </section>
  <!--
  <section class = "flex column alignItemCenter textAlignC marginT">
      <h2 class = "Fullwidth underline">COMPÉTENCES</h2>
<<<<<<< HEAD
    <article class = "ArticleCompetence flex column alignItemCenter justifyCenter spaceAround">
=======
    <article class = "ArticleCompetence flex column alignItemCenter justifyCenter">
>>>>>>> 8f4a739a2f0f2339e4ebbc571eeb153f761756e4
      <div class = "HTML styleLien">
        <p>HTML</p>
        <i class="fab fa-html5 fa-3x  textAlignC"></i>
      </div>
      <div class= "CSS styleLien">
        <p>CSS</p>
        <i class="fab fa-css3-alt fa-3x"></i>
      </div>
      <div class = "PHP styleLien">
        <p>PHP</p>
        <i class="fab fa-php fa-3x"></i>
      </div>
    </article>
  </section>
  -->
</main>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class = " footerSize flex column spaceBetween justifyCenter textAlignC white marginT">
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
