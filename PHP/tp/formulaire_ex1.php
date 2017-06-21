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
                <a class="navbar-brand" href="#">Project name</a>
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
            <h1>Formulaire</h1>
        </div>

<?php
if ($_POST)
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['codepostal']) && isset($_POST['sexe']) && !empty($_POST['description']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $codepostal = $_POST['codepostal'];
        $sexe = $_POST['sexe'];
        $description = $_POST['description'];

        echo "<p class='alert alert-success'>Bonjour " . $prenom . " " . $nom . ", résidant au " . $adresse . ", dans la ville de " . $ville . ", " . $codepostal . ".<br> Vous êtes un";

        if($sexe == "Homme")
        {
            echo " " . $sexe . '.<br>';
        }
        else {
            echo "e ". $sexe . '.<br>';
        }
        echo "Voici votre description : " . $description . '<br>Vos informations ont bien été enregistrées.</p>';
    }
    else
    {
        echo "<p class='alert alert-danger'>Il semblerait que des informations soient manquantes, veuillez bien remplir tous les champs.<p>";
    }
}
?>

        <form action="" method="post" class="form-group">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input class="form-control" type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input class="form-control" type="text" id="prenom" name="prenom">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input class="form-control" type="text" id="adresse" name="adresse">
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input class="form-control" type="text" id="ville" name="ville">
            </div>
            <div class="form-group">
                <label for="codepostal">Code Postal</label>
                <input class="form-control" type="text" id="codepostal" name="codepostal">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <select id="sexe" name="sexe">
                    <option>Femme</option>
                    <option>Homme</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form">
              <button type="submit" class="btn btn-primary center-block ">Valider</button>
            </div>
        </form>
    </div><!-- /.container -->















    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../post/formulaire_contact\js/bootstrap.min.js"></script>
</body>
</html>
