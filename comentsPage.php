<!DOCTYPE html>
<html lang="es" ng-app="peliculas">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Netflux.com</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="./js/angular/angular.min.js" charset="utf-8"></script>
    <script src="./js/angular/angular-resource.min.js" charset="utf-8"></script>
    <script src="./js/angular/FirstController.js" charset="utf-8"></script>
    <script src="./js/angular/CommentController.js" charset="utf-8"></script>
    <script src="./js/jquery.js" type="text/javascript">  </script>
    <link rel="icon" href="/public/icono.ico"/>
  </head>
  <body ng-controller="CommentController">
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">Netflux</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="aboutUs.php">About us</a></li>
          <li><a href="comentsPage.php">Comments</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="aboutUs.php">About us</a></li>
          <li><a href="comentsPage.php">Comments</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
    <div class="">
      <img src="http://www.fundayoutdoormovies.com/wp-content/uploads/2014/05/popcorn.jpg" width="100%" alt="">
    </div>
    <div class="container">
      <div class="section">
        <div class="row">
          <img src="https://modernmanofthecloth.files.wordpress.com/2013/09/comments.gif" width="50%">
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="comment" ng-model="nombre" ng-keyup="tam()" placeholder="Express yourself ..." type="text" class="validate" name="nombre" value="" maxlength="150">
            <label for="first_name">Share your comments</label>
            <p>Caracteres disponibles {{cont}}</p>
            <button class="btn waves-effect waves-light" ng-click="ver()" name="action">Share
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <div class="row">
          <label for="">Lates comments: </label>
          <br><br>
          <div class="" ng-repeat="post in arreglo">
            {{post.post}} Date:{{fecha}}
            <br><br>
          </div>
        </div>
      </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    <footer class="page-footer light-blue">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Netflux</h5>
            <p class="grey-text text-lighten-4">We share of passion for movies.</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Contact us</h5>
            <ul>
              <li><a class="white-text" href="#!">Donations</a></li>
              <li><a class="white-text" href="#!">FAQ</a></li>
              <li><a class="white-text" href="#!">Advertisers</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Partners</h5>
            <ul>
              <li><a class="white-text" href="#!">Traemello</a></li>
              <li><a class="white-text" href="http://www.imdb.com/movies-in-theaters/">IMDb</a></li>
              <li><a class="white-text" href="http://www.cinepolisusa.com/index.aspx">Cinépolis</a></li>
              <li><a class="white-text" href="https://www.regmovies.com/">Regmovies</a></li>
              <li><a class="white-text" href="https://www.amctheatres.com/">AMC Theatres</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
      </div>
    </footer>
  </body>

</html>
