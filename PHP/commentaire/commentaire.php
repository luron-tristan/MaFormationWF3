<?php
// Ici nous allons avoir un formulaire permettant à l'utilisateur d'écrire un commentaire. Il faudra enregistrer ce commentaire en BDD pour l'afficher ensuite dans la page.
// 1 - Faire un formulaire avec ces champs:
    // Pseudo (type text)
    // Commentaire (textarea)
// 2 - Récupération des saisies et affichage sur la même page
// 3 - Insertion des données dans la BDD
// 4 - Affichage des commentaires dans la page (récupération depuis la BDD puis traitement)
// 5 - Afficher les derniers commentaires (enregistrés) en premier dans la page
// 6 - Afficher le nombre de commentaires
// 7 - Afficher la date et l'heure du commentaire en français
// 8 - CSS
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Tristan Luron">

    <title>Commentaire</title>

    <!-- Bootstrap core CSS -->
    <link href="../template_bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../template_bootstrap/css/style.css" rel="stylesheet">
    <style>
        form {margin: 20px auto;}
        label, input, textarea {margin: 5px;}
        .submit { margin-top: 20px; resize: none; }
    </style>
  </head>

  <body>
<?php

// Connexion à la BDD
    
    $pdo = new PDO('mysql:host=localhost;dbname=commentaire', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if($_POST){
    echo '<pre>'; print_r($_POST); echo '</pre>';

    if(isset($_POST['pseudo']) && isset($_POST['message']))
    {
        if(!empty($_POST['pseudo']) && !empty($_POST['message']))
        {
            $pseudo = $_POST['pseudo'];
            $message = $_POST['message'];

            echo 'Votre pseudo : <b>' . $pseudo . '</b><br>';
            echo 'Votre commentaire : <b>' . $message . '</b><br>';

            $resultat = $pdo->prepare("INSERT INTO commentaire (pseudo, message, date) VALUES (:pseudo, :message, NOW())");
            $resultat->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
            $resultat->bindParam(":message", $message, PDO::PARAM_STR);
            $resultat->execute();


        }
        else{
            echo "<p class='alert alert-danger <text-center></text-center>'>Veuillez remplir les champs pseudo et commmentaire.</p>";
        }
    }
}
?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Commentaire</a>
        </div>
      </div>
    </nav>

    <div class="container">
        <form action="#" method="post" class="form-group well">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" id="pseudo" type="text" name="pseudo" placeholder="Votre pseudo...">
            <label for="message">Commentaire</label>
            <textarea class="form-control" id="message" type="text" rows="5" name="message" placeholder="Votre commentaire..."></textarea>
            <input type="submit" class="btn btn-primary center-block submit" name="envoyer" value="Envoyer">
        </form>
    </div><!-- /.container -->

<?php
    echo "<h2 class='alert alert-info text-center'>Commentaires</h2>";

      
        $resultat = $pdo->prepare("SELECT * FROM commentaire WHERE pseudo = :pseudo AND message = :message ORDER BY date ASC");

        $resultat->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $resultat->bindParam(":message", $message, PDO::PARAM_STR);

        $resultat->execute();
        $donnees = $resultat->fetch(PDO::FETCH_ASSOC);

        if(!empty($donnees))
        {
            echo 'pseudo : ' . $donnees['pseudo'];
            echo 'Commentaire : ' . $donnees['message'];
        }
    

?>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../template_bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
