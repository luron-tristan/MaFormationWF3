
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Tristan Luron">

    <title>Formulaire de contact</title>

    <!-- Bootstrap core CSS -->
    <link href="../post/formulaire_contact/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../post/formulaire_contact/css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TP1</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <div class="starter-template">
            <h1>Exercice 2.1</h1>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <hr>
                <ul>
                    <li><a href="?pays=fr">France</a>
                    <li><a href="?pays=es">Espagne</a>
                    <li><a href="?pays=it">Italie</a>
                    <li><a href="?pays=en">Angleterre</a>
                </ul>
            </div>
        </div>
<?php

if(isset($_GET['pays']))
{
    if($_GET['pays'] == 'fr')
    {
    echo "<p class='text-center info alert-info' style='padding: 10px;'>Vous êtes Français ?</p>";
    }
    elseif($_GET['pays'] == 'es')
    {
    echo "<p class='text-center info alert-info' style='padding: 10px;'>Vous êtes Espagnol ?</p>";
    }
    elseif($_GET['pays'] == 'it')
    {
    echo "<p class='text-center info alert-info' style='padding: 10px;'>Vous êtes Italien ?</p>";
    }
    elseif($_GET['pays'] == 'en')
    {
    echo "<p class='text-center info alert-info' style='padding: 10px;'>Vous êtes Anglais ?</p>";
    }
}
    else
    {
    echo "<p class='text-center info alert-info' style='padding: 10px;'>D'où venez-vous ?</p>";
    }
?>
    </div><!-- /.container -->







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../post/formulaire_contact\js/bootstrap.min.js"></script>
  </body>
</html>
