<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Exercice 3</title>
</head>
<body>
<?php

// connexionn à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=exercice_3', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//Message destiné à l'utilisateur
$message = '';

// Variable pour la vérification des erreurs
$erreur = false;

// Déclaration de variables vides pour affichage dans les values du formulaire
$title          = "";
$acteurs        = "";
$realisateur    = "";
$producteur     = "";
$annee          = "";
$langue         = "";
$categorie      = "";
$synopsis       = "";
$video          = "";


// Vérification 

if($_POST)
{
    
    if(isset($_POST['title']) && isset($_POST['acteurs']) && isset($_POST['realisateur']) && isset($_POST['producteur']) && isset($_POST['annee']) && isset($_POST['langue']) && isset($_POST['categorie']) && isset($_POST['synopsis']) && isset($_POST['video']))
    {
        $title          = $_POST['title'];
        $acteurs        = $_POST['acteurs'];
        $realisateur    = $_POST['realisateur'];
        $producteur     = $_POST['producteur'];
        $annee          = $_POST['annee'];
        $langue         = $_POST['langue'];
        $categorie      = $_POST['categorie'];
        $synopsis       = $_POST['synopsis'];
        $video          = $_POST['video'];
    

        // Vérification de la longueur des champs
        $title_len          = iconv_strlen($title);
        $realisateur_len    = iconv_strlen($realisateur);
        $acteurs_len        = iconv_strlen($acteurs);
        $producteur_len     = iconv_strlen($producteur);
        $synopsis_len       = iconv_strlen($synopsis);

        if($title_len < 5)
        {
            $message .= '<div class ="alert alert-danger text-center">Le titre doit contenir au moins 5 caractères.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;

        }

        if($realisateur_len < 5)
        {
            $message .= '<div class ="alert alert-danger text-center">Le nom du réalisateur doit contenir au moins 5 caractères.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;
        }

        if($acteurs_len < 5)
        {
            $message .= '<div class ="alert alert-danger text-center">Le nom des acteurs doit contenir au moins 5 caractères.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;
        }

        if($producteur_len < 5)
        {
            $message .= '<div class ="alert alert-danger text-center">Le nom du producteur doit contenir au moins 5 caractères.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;
        }

        if($synopsis_len < 5)
        {
            $message .= '<div class ="alert alert-danger text-center">Le synopsis doit contenir au moins 5 caractères.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;
        }

        
        // Contrôle de la validité de l'url
        if (!filter_var($video, FILTER_VALIDATE_URL)) 
        {
            $message .= '<div class ="alert alert-danger text-center">L\'url de votre video n\'est pas valide.<br>Veuillez vérifier vos informations</div>';
            $erreur = true;
        }
    
        // Ajout du film dans la BDD
        if(!$erreur)
        {
            $ajout_du_film = $pdo->prepare("INSERT INTO movies (title, actors, director, producer, year_of_prod, language, category, storyline, video) VALUES (:title, :actors, :director, :producer, :year_of_prod, :language, :category, :storyline, :video)");
            $ajout_du_film->bindParam(':title', $title, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':actors', $acteurs, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':director', $realisateur, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':producer', $producteur, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':year_of_prod', $annee, PDO::PARAM_INT);
            $ajout_du_film->bindParam(':language', $langue, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':category', $categorie, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':storyline', $synopsis, PDO::PARAM_STR);
            $ajout_du_film->bindParam(':video', $video, PDO::PARAM_STR);
            $ajout_du_film->execute();

            $message .= '<div class ="alert alert-success text-center">Votre film a bien été ajouté dans la base de données. Merci !</div>';
        }
    
    
    
    
    }

}


// affichage de la superglobale POST
// echo '<pre>'; print_r($_POST); echo '</pre>';
?>
    <div class="container">

            <div class="starter-template">
                <h1 class ="text-center"><span class = 'glyphicon glyphicon-film' style = 'color: plum';></span> Et si on regardait un film ?</h1>
                <?= $message; ?>
            </div>

            <div class="row">
                <div class="col-xs-6 col-xs-push-3 well">
                    <form method="POST" action ="">
                        <div class="form-group">
                            <label for="pseudo">Titre</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= $title ?>">
                        </div>
                        <div class="form-group">
                            <label for="acteurs">Acteurs</label>
                            <input type="text" name="acteurs" id="acteurs" class="form-control" value="<?= $acteurs ?>">
                        </div>
                        <div class="form-group">
                            <label for="realisateur">Réalisateur</label>
                            <input type="text" name="realisateur" id="realisateur" class="form-control" value="<?= $realisateur ?>">
                        </div>
                        <div class="form-group">
                            <label for="producteur">Producteur</label>
                            <input type="text" name="producteur" id="producteur" class="form-control" value="<?= $producteur ?>">
                        </div>
                        <div class="form-group">
                            <label for="annee">Année de production</label>
                            <select name = "annee" class = "form-control">
                            <?php
                            for($i = 1895; $i <= 2017; $i++)
                            {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="langue">Langue</label>
                            <select name = "langue" class = "form-control">
                                <option value="fr">Français</option>
                                <option value="en" <?php if($langue == 'en') { echo 'selected'; } ?> >Anglais</option>
                                <option value="de" <?php if($langue == 'de') { echo 'selected'; } ?> >Allemand</option>
                                <option value="es" <?php if($langue == 'es') { echo 'selected'; } ?> >Espagnol</option>
                                <option value="it" <?php if($langue == 'it') { echo 'selected'; } ?> >Italien</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <select name = "categorie" class = "form-control">
                                <option value="action">Action</option>
                                <option value="drame" <?php if($categorie == 'drame') { echo 'selected'; } ?> >Drame</option>
                                <option value="comedie" <?php if($categorie == 'comedie') { echo 'selected'; } ?> >Comédie</option>
                                <option value="thriller" <?php if($categorie == 'thriller') { echo 'selected'; } ?> >Thriller</option>
                                <option value="western" <?php if($categorie == 'western') { echo 'selected'; } ?> >Western</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="synopsis">Synopsis</label>
                            <textarea type="text" name="synopsis" id="synopsis" class="form-control" rows="10" style = "resize: none;" ><?= $synopsis ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="text" name="video" id="video" class="form-control" value="<?= $video ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name ="inscription" class ='btn btn-primary btn-block' style="margin-top: 25px;">Ajouter le film</button>
                        </div>
                    </form>
                </div>
            </div> <!--row-->


        </div><!-- /.container -->








        
</body>
</html>