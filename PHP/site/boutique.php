<?php
require ("inc/init.inc.php");


$liste_article = $pdo->query("SELECT DISTINCT * FROM article");


$liste_categorie = $pdo->query("SELECT DISTINCT categorie FROM article");

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
                    while($categorie = $liste_categorie->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<li class="list-group-item"><a href = "?categorie=' . $categorie['categorie'] . '">' . $categorie['categorie'] . '</a></li>';
                    }
                    echo '</ul>';
                ?>
            </div>
            
            <div class="col-sm-10">
                <?php // Afficher tous les produits dans cette page par exemple: un bloc avec image + titre + prix produit
                    echo '<div class="row">';
                    while($article = $liste_article->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<div class="col-sm-3">';
                        echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading"><img src="' . URL . 'img/logo_uniqlo.png" class="img-responsive"></div>';
                        echo '<div class="panel-body text-center">';
                        echo '<p>' . $article['titre'] . '</p>';
                        echo '<img src="' . URL . 'photo/' . $article['photo'] . '" class="img-responsive">';
                        echo '<hr>';

                        echo '</div></div></div>';

                    }
                echo '</div>';
                ?>

                
            </div>

        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>