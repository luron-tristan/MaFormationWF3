<?php
// Récupération du choix de l'utilisateur ou cas par défaut
if(isset($_GET['langue']))
{
    $langue = $_GET['langue']; // Choix de l'utilisateur
}
elseif(isset($_COOKIE['langue']))
{
    $langue = $_COOKIE['langue'];
}
else
{
    $langue = 'fr'; // Cas par défaut
    // echo 'langue du navigateur: ' . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) . '<br>';
}
// /!\ On ne manipule rien sans avoir testé avant si cela existe

// Nombre de secondes dans une année
$un_an = 365 * 24 * 3600; // nb_de_jours*nb_heures*nb_secondes

// Création d'un cookie sur le poste utilisateur
// /!\ La fontion setCookie doit être appelée avant le moindre affichage dans la page !
// Pour générer un cookie: 3 arguments setCookie(nom, valeur, duree_de_vie)
setCookie("langue", $langue, time()+$un_an); 
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Tristan Luron">

    <title>Formulaire de contact</title>

    <!-- Bootstrap core CSS -->
    <link href="../template_bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../template_bootstrap/css/style.css" rel="stylesheet">
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
            <h1>Cookies</h1>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <hr>
                <ul>
                    <li><a href="?langue=fr">France</a>
                    <li><a href="?langue=es">Espagne</a>
                    <li><a href="?langue=it">Italie</a>
                    <li><a href="?langue=en">Angleterre</a>
                </ul>
            </div>
        </div>
<?php
// Affichage d'un texte selon la langue
switch($langue) // On teste la valeur de $langue
{
    case 'fr':
        echo '<P>Bonjour,<br> vous visitez le site en langue française</p>';
    break;
    case 'en':
        echo '<P>Hello,<br> vous visitez le site en langue anglaise</p>';
    break;
    case 'it':
        echo '<P>Ciao,<br> vous visitez le site en langue italienne</p>';
    break;
    case 'es':
        echo '<P>Hola,<br> vous visitez le site en langue espagnole</p>';
    break;
    default:
        echo '<p>Langue inconnue</p>';
    break;
}

// echo'<pre>'; print_r($_SERVER); echo'</pre>';
// Il est possible de récupérer la langue du navigateur de l'utilisateur
$langue = 'fr'; // Cas par défaut
echo 'langue du navigateur: ' . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) . '<br>';
echo time(); // time() affiche la valeur du time stamp
echo '<pre>'; print_r($_COOKIE); echo '</pre>';
?>
    </div><!-- /.container -->

    





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../template_bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
