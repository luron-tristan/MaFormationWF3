<?php
require("inc/init.inc.php");

// on vérifie si l'indice id_article existe dans GET ou s'il n'est pas vide || on teste aussi si la valeur est bien un chiffre
if(empty($_GET['id_article']) || !is_numeric($_GET['id_article']))
{
    header("location:boutique.php");
}

// récupération des informations de l'article en bdd
$id_article = $_GET['id_article'];
$recup_article = $pdo->prepare("SELECT * FROM article WHERE id_article = :id_article");
$recup_article->bindParam(":id_article", $id_article, PDO::PARAM_STR);
$recup_article->execute();

// verification si l'on a bien récupéré un article ou si nous avons une réponse vide (exemple changement d'id_article dans l'url par l'utilisateur)
if($recup_article->rowCount() < 1)
{
    // s'il y a moins d'une ligne alors la réponse de la BDD est vide donc on redirige vers l'accueil
    header("location:boutique.php");
}

$article = $recup_article->fetch(PDO::FETCH_ASSOC);


// la ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require("inc/nav.inc.php");
echo '<pre>'; print_r($article); echo '</pre>';
// dans cette page affichez les infos de l'article sauf le stock
// mettez egalement en place un lien retour vers votre selection de la boutique
?>


<div class="container">
    <div class="col-sm-8 col-sm-push-2">
        <h1 class="text-center"><span class="glyphicon glyphicon-list"style="color: NavajoWhite">&nbsp;</span>Fiche article</h1>
        <?php // echo $message; // messages destinés a l'utilisateur ?>
        <?= $message; // cette balise php inclu un echo // cette ligne php est equivalente a la ligne au dessus ?>

        <div class="panel-heading text-center">
            <img src=<?= URL . 'photo/' . $article['photo'] ?> alt="Photo de l'article">

        </div>

        <div class="col-md-12">
            <?php
                echo '<hr><h3 class="text-center">' . $article['titre'] . '</h3>';
                echo '<hr><p class="text-center">' . $article['description'] . '</p>';
                echo '<hr><p class="text-center">Taille : ' . $article['taille'] . '</p>';
                echo '<hr><p class="text-center">Couleur : ' . $article['couleur'] . '</p>';
                echo '<hr>';

                // On affiche le formulaire d'ajout si le stock est supérieur à zéro
                if($article['stock'] > 0)
                {

                    // Formulaire d'ajout au panier
                    echo '<form method="post" action="panier.php">';

                    // On récupère l'id_article dans un champ caché afin de savoir ensuite quel est le produit qui a été ajouté
                    echo '<input type="hidden" name="id_article" value="' . $article['id_article'] . '">';

                    // Faire un champ select pour le choix de la quantité selin la quantité disponible du produit avec une sécurité pour afficher maximum 7 si la quuantité est supérieure (2e condition d'entée dans la boucle ($i<8)).
                    echo '<select name="quantite" class="form-control">';

                    for($i = 1; $i <= $article['stock'] && $i < 8; $i++)
                    {
                        echo '<option>' . $i . '</option>';
                    }

                    echo '</select><br>';

                    echo '<input type="submit" name="ajout_panier" value="Ajouter au panier" class="form-control btn btn-warning">';

                    echo '</form><hr>';
                }
                else {
                    echo '<h3>Rupture de stock pour ce produit</h3><hr>';
                }

                echo '<a href="boutique.php?categorie="' . $article['categorie'] . ' class="btn btn-primary form-control">Retour à la sélection</a><br><br>';
        
            ?>

    </div>
</div>

<?php
require("inc/footer.inc.php");




