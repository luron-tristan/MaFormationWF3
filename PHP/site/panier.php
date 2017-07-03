<?php
require ("inc/init.inc.php");

// création du panier
creation_panier();

if(isset($_POST['ajout_panier']))
{
    // Si l'indice existe dans post, alors l'utilisateur a cliqué sur le bouton ajouter au panier (depuis la page fiche_article.php)
    $info_article = $pdo->prepare("SELECT * FROM article WHERE id_article = :id_article");
    $info_article->bindParam(":id_article", $_POST['id_article'], PDO::PARAM_STR);
    $info_article->execute();

    $article = $info_article->fetch(PDO::FETCH_ASSOC);

    // Ajout de la TVA sur le prix
    $article['prix'] = $article['prix'] * 1.2;

    // On ajoute l'article dans le panier via cette fontion (voir dans function.inc.php)
    ajouter_un_article_au_panier($_POST['id_article'], $article['prix'], $_POST['quantite'], $article['titre']);
    // On redirige sur la même page pour perdre les informations dans POST afin que si l'utilisateur actualise la page (F5) l'article ne soit pas rentré une nouvelle fois.
    header("location:panier.php");
}



// La ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require ("inc/nav.inc.php");
// echo '<pre>'; var_dump($_POST); echo '</pre>';
// echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>

        

        <div class="container">

            <div class="starter-template">
                <h1><span class="glyphicon glyphicon-shopping-cart" style="color: NavajoWhite;"></span> Panier</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <table class="table table-bordered" style="text-align: center;">
                        <tr>
                            <th colspan="4" class="text-center">Panier</th>
                        </tr>
                        <tr>
                            <th class="text-center">Article</th>
                            <th class="text-center">Titre</th>
                            <th class="text-center">Quantité</th>
                            <th class="text-center">Prix unitaire</th>
                        </tr>
                        <?php
                            // Vérification si le panier est vide sur n'importe quel tableau array du dernier niveau (id_article / prix / quantité / titre)
                            if(empty($_SESSION['panier']['id_article']))
                            {
                                echo '<tr><th class="text-center" colspan="4">Aucun article dans votre panier</th></tr>';
                            }
                            else {
                                // Sinon on affiche tous les produits dans un tableau html
                                $taille_tableau = count($_SESSION['panier']['titre']);
                                for($i = 0; $i < $taille_tableau; $i++)
                                {
                                    echo '<tr>';
                                        echo '<td>' . $_SESSION['panier']['id_article'][$i] . '</td>';
                                        echo '<td>' . $_SESSION['panier']['titre'][$i] . '</td>';
                                        echo '<td>' . $_SESSION['panier']['quantite'][$i] . '</td>';
                                        echo '<td>' . $_SESSION['panier']['prix'][$i] . '</td>';
                                    echo '</tr>';
                                }
                            }
                            //  Rajouter une ligne au tableau qui affiche un lien a href(?action=payer) pour payer le panier si l'utilisateur est connecté
                            if(utilisateur_est_connecte())
                            {
                                echo '<tr><td colspan="4"><a href="?action=payer">Payer</a></td></tr>';
                            }else
                            {
                                echo '<tr><td colspan="4">Vous n\'êtes pas connecté, veuillez vous <a href="connexion.php">connecter</a> ou vous <a href="inscription.php">inscrire</a> pour continuer</td></tr>';
                            }

                            // Rajouter une ligne au tableau qui affiche un bouton vider la panier uniquement si le panier n'est pas vide. Et faire le traitement afin que si on clique sur le bouton, on vide le panier. (unset())
                            if(!empty($_SESSION['panier']['id_article']))
                            {
                                echo '<td><a href="?action=vider_panier" class="btn btn-warning">Vider le panier</a></td>';

                                if(isset($_GET['action']) && $_GET['action'] == 'vider_panier')
                                {
                                    unset($_SESSION['panier']);
                                    header("location:panier.php");
                                }
                            }

                            

                            // Rajouter une ligne pour afficher le prix total du panier
                        ?>
                    </table>
                </div>
            </div>

        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>