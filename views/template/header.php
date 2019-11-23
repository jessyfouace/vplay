<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <meta name="description" content="easyBuy, agence de vente de maison entre particuler">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#282828">
  <meta name="keywords" content="vente, immobilier, immobilié, appartments, appartement, lille, paris, particulier, pas cher, maison, location, easybuy, rewrite, easybuy rewrite, easybuy-rewrite, jessy, fouace, jessy fouace">
  <meta name="copyright" content="Copyright (C) 2019 - https://easybuy-rewrite.000webhostapp.com">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="http://localhost/youtube/youtube/icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/youtube/youtube/favicon.ico" />
  <script src="http://localhost/youtube/youtube/assets/js/listjs.js"></script>
  <!-- Place favicon.ico in the root directory -->

  <meta name="og:type" content="article" />
  <meta name="og:title" content="<?= $title ?>" />
  <meta name="og:description" content="<?= $description ?>" />
  <meta name="og:image" content="<?= $imageName ?>" />
  <meta name="og:url" content="https://easybuy-rewrite.000webhostapp.com" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $title ?>" />
  <meta name="twitter:description" content="<?= $description ?>" />
  <meta name="twitter:image" content="<?= $imageName ?>" />

  <link rel="stylesheet" href="http://localhost/youtube/youtube/assets/aos-master/dist/aos.css">
  <script src="http://localhost/youtube/youtube/assets/aos-master/dist/aos.js"></script>
  <script src="http://localhost/youtube/youtube/assets/js/main.js"></script>

  <link rel="stylesheet" href="http://localhost/youtube/youtube/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/youtube/youtube/assets/css/normalize.css">
  <link rel="stylesheet" href="http://localhost/youtube/youtube/assets/css/main.css">
  <link href="http://localhost/youtube/youtube/assets/js/jquery-ui-1.8.23.custom/css/ui-lightness/jquery-ui-1.8.23.custom.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

  <div class="col-12 m-0 p-0 position-fixed" style="top: 0px; z-index: 100">
    <div class="col-12 mx-auto bg-dark" style="height: 11.5vh;">
      <nav class="navbar bg-dark justify-content-between pt-0 pb-0">
        <div class="row">
          <p class="navbar-brand my-auto" id="burgerleftmenu" onclick="openMenu()"><i class="fas fa-align-justify text-white my-auto"></i></p>
          <a class="navbar-brand d-none d-md-block" href="http://localhost/youtube/youtube/accueil"><img src="http://localhost/youtube/youtube/assets/img/logo.jpg" class="my-auto" style="width: 100px;" alt="Logo V Play"></a>
        </div>
        <form class="form-inline my-1" action="http://localhost/youtube/youtube/controllers/index.php" method="post">
          <div class="md-form form-sm my-0 mr-0 ml-0">
            <input class="form-control form-control-sm mr-sm-2 mb-0 ml-0 mr-0 w-100 navbarsearch pt-2 pb-2" type="text" placeholder="Rechercher.." aria-label="Rechercher">
          </div>
          <button class="btn buttonsearch btn-sm my-0 mr-0 ml-0" type="submit"><i class="fas fa-search pt-2 pb-2"></i></button>
        </form>
      </nav>
    </div>
    <div class="col-12 m-0 p-0 position-fixed d-none" id="closeburger" onclick="closeburger()">
      <div class="bg-dark col-lg-4 col-xl-2 col-sm-6 col-md-4 text-white m-0 p-0 scrollbar burgereffect" id="otherburger" style="height: 88.5vh; overflow: scroll">
        <ul class="list-unstyled mb-0">
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-user my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Mon Compte</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/ajouter-une-video">
              <i class="fas fa-video my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Ajouter une vidéo</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-home my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Accueil</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-fire my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Tendances</p>
            </a>
          </li>
          <li class="p-2 pl-4 mb-0 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-clone my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Abonnements</p>
            </a>
          </li>
        </ul>
        <hr class="m-0 p-0 col-12 burgericoncollor">
        <ul class="list-unstyled mb-0">
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-heart my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Vidéos "J'aime"</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <i class="fas fa-clock my-auto burgericoncollor"></i>
              <p class="pl-2 my-auto">Regarder plus tards</p>
            </a>
          </li>
        </ul>
        <hr class="m-0 p-0 col-12 burgericoncollor">
        <p class="pl-4 burgerabonnements p-2">ABONNEMENTS</p>
        <ul class="list-unstyled">
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="">
              <p class="my-auto"> PNL</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="">
              <p class="my-auto">Nekfeu</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="">
              <p class="my-auto">Nekfeu</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="">
              <p class="my-auto">Nekfeu</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="">
              <p class="my-auto">Nekfeu</p>
            </a>
          </li>
          <li class="p-2 pl-4 burgerlist">
            <a class="row p-2 m-0" href="http://localhost/youtube/youtube/accueil">
              <img src="http://localhost/youtube/youtube/assets/img/logo.jpg" class="my-auto" style="width: 100px;" alt="Logo V Play">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>