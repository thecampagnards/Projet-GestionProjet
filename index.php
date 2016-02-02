<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEK Games</title>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- StarRating -->
    <link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- Fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Main -->
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="header">
      <img src="img/banniere.png" alt="bannière"/>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="./">Les Jeux</a></li>
            <li><a href="team">L'Équipe</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <?php require 'routes.php' ?>
    
    <footer> DEK Games - Copyright ISEN 2016 </footer>
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- StarRating -->
    <script src="js/star-rating.min.js" type="text/javascript"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
  </body>
</html>
