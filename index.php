<?php
include "config.php"

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/3a3b2f94d0.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/normalize.css">
  <link rel="icon" href="./images/icon.png">


  <title><?php echo $lang['title'] ?></title>
</head>
<body>

  <img class="logo" src="./images/Logo.png" alt="">

  <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: rgba(255,255,255,0.9);">
    <a class="navbar-brand" href="#" style="margin: 0px"><img src="./images/icon2.png" class="icon"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse sticky-top navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><?php echo $lang['nav-home'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $lang['nav-housing'] ?></a>
        </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./mallorca.php"><?php echo $lang['nav-mallorca'] ?></a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><?php echo $lang['nav-guides'] ?></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $lang['nav-about'] ?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#"><?php echo $lang['nav-about-us'] ?></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><?php echo $lang['nav-faq'] ?></a>
        <a class="dropdown-item" href="#"><?php echo $lang['nav-terms'] ?></a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user" style="padding: 3px"></i> Log-in</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user-plus" style="padding: 3px"></i> <?php echo $lang['nav-regiser'] ?></a>
    </li>
    <li class="nav-item dropdown" style="margin: 0 auto; text-align: center">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $lang['lang'] ?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="?lang=es"> <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/google/241/flag-spain_1f1ea-1f1f8.png" height="20px"> Español </a>
        <a class="dropdown-item" href="?lang=en"> <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/google/241/flag-united-kingdom_1f1ec-1f1e7.png" height="20px"> English </a>
        <a class="dropdown-item" href="?lang=de"> <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/google/241/flag-germany_1f1e9-1f1ea.png" height="20px"> Deutsche </a>
      </div>
    </li>
    <!--<form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success mr-sm-1 ml-sm-4" type="submit">Buscar</button>
    <input class="form-control " type="search" placeholder="Escribir aquí..." aria-label="Search">
  </form>-->
</ul>
</nav>


<div class="cuerpo">
  <div class="portada">

    <!-- Extra large modal -->
    <button type="button" class="btn" data-toggle="modal" data-target=".carrouselzoom">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner info imgportada">
          <div class="carousel-item active" data-interval="4000" >
            <img src="./images/Caimari.jpg" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item" data-interval="4000" >
            <img src="./images/Patio.jpg" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item" data-interval="4000" >
            <img src="./images/Casa.jpg" class="d-block w-100" alt="..." >
          </div>
        </div>
      </div>
    </button>

    <div class="modal fade carrouselzoom" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div id="carousel" class="carousel slide info imgportada" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="5000">
                <img src="./images/Caimari.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="./images/Patio.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="./images/Casa.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>


    <div class="info ">
      <h1><?php echo $lang['home-h1'] ?></h1>

      <p><?php echo $lang['home-p1'] ?></p>

      <center><a href="#carousel" class="boton"><i class="fas fa-search-location"></i> <?php echo $lang['home-search'] ?></a></center>
    </div>
  </div>

  <div class="portada">

    <div class="info ">
      <p><?php echo $lang['home-h1'] ?></p>

      <h1><?php echo $lang['home-p2'] ?></h1>

      <center><a href="#carouselExampleIndicators" class="boton"><i class="fas fa-search-location"></i> <?php echo $lang['home-search'] ?></a></center>
    </div>


    <!-- Extra large modal -->
    <button type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-xl" ><img src="./images/Playa.jpg" class="info imgportada" alt="..."></button>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <img src="./images/Playa.jpg" class="info imgportada" alt="...">
        </div>
      </div>
    </div>

  </div>

  <div class="portada">

    <!-- Extra large modal -->
    <button type="button" class="btn" data-toggle="modal" data-target=".campo"><img src="./images/Campo.jpg" class="info imgportada" alt="..."></button>

    <div class="modal fade campo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <img src="./images/Campo.jpg" class="info imgportada" alt="...">
        </div>
      </div>
    </div>

    <div class="info ">
      <h1><?php echo $lang['home-p3'] ?></h1>

      <p></p>

      <center><a href="#carouselExampleIndicators" class="boton"><i class="fas fa-search-location"></i> <?php echo $lang['home-search'] ?></a></center>
    </div>

  </div>

</div> <!-- Fin del cuerpo -->
<div class="pie">

  <!-- View Source Button -->
  <a class="pieart" href="https://glitch.com/edit/?utm_content=project_mallorcaparadise&utm_source=view_source&utm_medium=button&utm_campaign=glitchButton#!/mallorcaparadise">
    <img src="https://cdn.glitch.com/2bdfb3f8-05ef-4035-a06e-2043962a3a13%2Fview-source%402x.png?1513093958802" alt="view source" height="33">
  </a>
  <p class="pieart" ><?php echo $lang['nav-footer'] ?></p>

  <div class="social">

    <!-- Add font awesome icons -->
    <a href="https://www.facebook.com/" class="fa fa-facebook social"></a>
    <a href="https://twitter.com/" class="fa fa-twitter social"></a>
    <a href="https://instagram.com/" class="fa fa-instagram social"></a>
  </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
