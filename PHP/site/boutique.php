<?php
require ("inc/init.inc.php");

$liste_article = $pdo->query("SELECT DISTINCT * FROM article");
$liste_categorie = $pdo->query("SELECT DISTINCT categorie FROM article");


// Requête de récupération de tous les produits
if(empty($_GET['categorie']))
{
    $liste_article = $pdo->query("SELECT * FROM article");
}
else {
    $cat = $_GET['categorie'];
    $liste_article = $pdo->prepare("SELECT * FROM article WHERE categorie = :categorie");
    $liste_article->bindParam(":categorie", $cat, PDO::PARAM_STR);
    $liste_article->execute();
}


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