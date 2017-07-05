<?php
require ("inc/init.inc.php");

$liste_article = $pdo->query("SELECT DISTINCT * FROM article");

// requête de récupération de tous les produits
if($_POST)
{
    $condition = "";
    $arg_couleur = false;
    $arg_taille = false;

    if(!empty($_POST['couleur']))
    {
        $condition .= " WHERE couleur = :couleur ";
        $arg_couleur = true;
        $filtre_couleur = $_POST['couleur'];
    }

    if(!empty($_POST['taille']))
    {
        if($arg_couleur)
        {
            $condition .= " AND taille = :taille ";
        }
        else {
        $condition .= " WHERE taille = :taille ";
        }
        $arg_taille = true;
        $filtre_taille = $_POST['taille'];
    }
    $liste_article = $pdo->prepare("SELECT * FROM article $condition");
    if($arg_couleur) // si $arg_couleur == true alors il faut fournir l'argument couleur
    $liste_article->bindParam(':couleur', $filtre_couleur, PDO::PARAM_STR);
    if($arg_taille) // si $arg_taille == true alors il faut fournir l'argument taille
    $liste_article->bindParam(':taille', $filtre_taille, PDO::PARAM_STR);
    $liste_article->execute();
}

elseif(!empty($_GET['categorie']))
{
    $cat = $_GET['categorie'];
    $liste_article = $pdo->prepare("SELECT * FROM article WHERE categorie = :categorie");
    $liste_article->bindParam(":categorie", $cat, PDO::PARAM_STR);
    $liste_article->execute();
}


$liste_categorie = $pdo->query("SELECT DISTINCT categorie FROM article");
$liste_couleur = $pdo->query("SELECT DISTINCT couleur FROM article ORDER BY couleur");
$liste_taille = $pdo->query("SELECT DISTINCT taille FROM article ORDER BY taille");

// La ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require ("inc/nav.inc.php");
?>

        <div class="container">

            <div class="starter-template">
                <h1>Boutique</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= '<div class="alert alert-info">Bienvenue cher utilisateur</div>' ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>

            <div class="col-sm-2">
                <?php // Récupérer toutes les cataégories en BDD et les afficher dans une liste ul li sous forme de lien a href avec une information GET par exemple: ?categorie=pantalon
                // Requête de récupération des différentes catégories en BDD
                    echo '<ul class="list-group">';
                    echo '<li class="list-group-item"><a href="boutique.php">Tous les articles</a></li>';
                    while($categorie = $liste_categorie->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<li class="list-group-item"><a href = "?categorie=' . $categorie['categorie'] . '">' . $categorie['categorie'] . 's</a></li>';
                    }
                    echo '</ul>';
                    echo '<hr>';
                    // Affichage couleur
                    echo "<form action='' method='POST'>";
                    echo   "<div class='form-group'>
                            <label for='couleur'>Couleur</label>
                            <select name='couleur' id='couleur' class='form-control'>;
                            <option></option>";
                    while($couleur = $liste_couleur->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<option>' . $couleur['couleur'] . '</option>';
                    }
                    echo '</select></div>';

                    // Affichage taille
                    echo   "<div class='form-group'>
                            <label for='taille'>Taille</label>
                            <select name='taille' id='taille' class='form-control'>;
                            <option></option>";
                    while($taille = $liste_taille->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<option>' . $taille['taille'] . '</option>';
                    }
                    echo '</select></div>';

                    echo '<div class="form-group">
                            <button type="submit" name="filtrer" id="filtrer" class="form-control btn btn-primary">Valider</button>
                          </div>';


                    echo '</form>';
                ?>
            </div>
            
            <div class="col-sm-10">
                <?php // Afficher tous les produits dans cette page par exemple: un bloc avec image + titre + prix produit
                    echo '<div class="row">';
                    $compteur = 0;

                    while($article = $liste_article->fetch(PDO::FETCH_ASSOC))
                    {
                        // Afin de ne pas avoir de souci avec le float, on ferme et on ouvre une ligne bootstrap (class="row") pout gérer les lignes d'affichage.
                        if($compteur%4 == 0 && $compteur != 0) { echo '</div><div class="row">';}
                        $compteur++;
                        echo '<div class="col-sm-3">';
                        echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading"><img src="' . URL . 'img/logo_uniqlo.png" class="img-responsive"></div>';
                        echo '<div class="panel-body text-center">';
                        echo '<h5>' . $article['titre'] . '</h5>';
                        echo '<img src="' . URL . 'photo/' . $article['photo'] . '" class="img-responsive">';
                        echo '<br><p><b>Prix: </b>' . $article['prix'] . '€ </p>';
                        echo '<hr>';
                        echo '<a href="fiche_article.php?id_article=' . $article['id_article'] . '" class="btn btn-primary">Voir la fiche article</a>'; 

                        echo '</div></div></div>';

                    }
                echo '</div>';
                ?>

                
            </div>

        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>