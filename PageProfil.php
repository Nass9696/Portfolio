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
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageProfil.php">A propos</a>
          </div>
          <div class = "flex row justifyCenter spaceAround alignItemCenter ml-1">
            <i class="fas fa-toolbox white"></i>
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageRealisations.php">Réalisations</a>
          </div>
          <div class = "flex row justifyCenter spaceAround alignItemCenter ml-1">
            <i class="fas fa-phone  white"></i>
            <a class="nav-item nav-link text-white ml-2 policeTitle" href="PageContacter.php">Contacter</a>
          </div>
        </div>
      </div>
    </nav>
  </aside>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<main class = "MainOtherPages white">
  <section class = "SectionProfil flex column">
    <h2 class = "underline textAlignC policeTitle">Qui suis-je ?</h2>
    <article class = "ArticlePageProfil flex column spaceAround alignItemCenter">
      <div class = "ImageBlock Fullwidth flex justifyCenter alignItemCenter">
        <img class = "stylePicture" src="img/nassim.jpg" alt="Photo de profil"/>
      </div>
      <article class = "BlockInformations flex column alignItemCenter  marginT Fullwidth">
        <div class = "Biographies">
          <h2 class = "underline textAlignC policeTitle">Biographie</h2>
          <p class = "marginL policeText">
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
    </article>
  </section>
  <section class =  "mt-5">
    <h2 class = "text-center back">COMPÉTENCES</h2>
    <aside class="container-fluid mt-5">
      <div class = "d-flex justify-content-between col-12">
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
          <div class="btRed p-3 d-flex">
            <img src="icon/php.jpg" height = "49" alt=""/>
            <img src="icon/symfony.jpg" alt="" class = "text-light"/>
          </div>
        </article>
      </div>
      <div class = "d-flex justify-content-between col-12 mt-5 align-items-center">
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="fas fa-server fa-3x"></i>
            <h4 class = "text-center mt-1">Serveur</h3>
          </div>
          <div class="btRed p-3">
            <img src="icon/mysql.jpg" alt="MySQL"/>
            <img src="icon/sql.jpg" alt="SQL"/>
          </div>
        </article>
        <article class="col-4 backOpacityBlack rounded">
          <div class="d-flex flex-column align-items-center p-3">
            <i class="fas fa-project-diagram fa-3x"></i>
            <h4 class = "text-center mt-1">Gestion de projet</h3>
          </div>
          <div class="btRed p-3">
            <img src="icon/github.jpg" alt="GitHub"/>
            <img src="icon/linux.jpg" alt="Linux"/>
          </div>
        </article>
      </div>
    </aside>
  </section>
  <!--
  <section class = "flex column alignItemCenter textAlignC marginT">
      <h2 class = "Fullwidth underline">COMPÉTENCES</h2>
    <article class = "ArticleCompetence flex column alignItemCenter justifyCenter">
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
