<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CONTACTER</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet">
</head>

<body class = "BodyRulesIndex">
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ START HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header>
  <aside>
    <nav class="navbar navbar-expand-lg navbar-light backblack NavigationNoFixed indexFull">
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
            <i class="fas fa-phone  white"></i>
            <a class="nav-item nav-link text-white ml-2" href="PageContacter.php">Contacter</a>
          </div>
        </div>
      </div>
    </nav>
  </aside>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<main>
  <section>
    <aside class = "AsideContact white padding">
      <form method="post" action="ContacterTraitement.php">
        <div class="row">
          <div class="col">
            <label for="exampleFormControlTextarea1">Votre Nom :</label>
            <input type="text" class="form-control" name="nom">
          </div>
        </div>
        <div class="form-group mt-4">
          <label for="exampleFormControlInput1">Votre adresse mail :</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
        </div>
          <label for="exampleFormControlTextarea1">Votre Texte :</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
          <button type="submit" class="btn btn-primary mt-3 bg-transparent border border-danger text-white">Envoyer</button>
        </div>
      </form>
    <nav class = "NavIconeContact column spaceAround">
      <div class = "flex column alignItemCenter hoverColorRed">
        <h2 class = "underline">Par Téléphone</h2>
        <a href = "tel:+33622752818"><i class="fas fa-phone-square fa-3x"></i></a>
        <h2 class = "underline">Par E-mail</h2>
        <a href="mailto:dev.nassim.pro@gmail.com"><i class="fas fa-envelope-square fa-3x"></i></a>
      </div>
    </nav>
    <nav class = "NavIconeContactDekstop column spaceAround">
      <div class = "flex column alignItemCenter hoverColorRed">
        <h2 class = "underline">Par Téléphone</h2>
        <p>+33622752818</p>
        <h2 class = "underline">Par E-mail</h2>
        <a href="mailto:dev.nassim.pro@gmail.com">dev.nassim.pro@gmail.com</a>
      </div>
    </nav>
  </aside>
</section>
</main>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END MAIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class = "flex column spaceBetween justifyCenter textAlignC backOpacityBlack white">
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
