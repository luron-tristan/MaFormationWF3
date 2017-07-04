<?php
require ("inc/init.inc.php");
// vider le panier

if(isset($_GET['action']) && $_GET['action'] == 'vider_panier')
{
    unset($_SESSION['panier']); // Permet de supprimer la partie panier de la session
}

// Retirer un article du panier
if(isset($_GET['action']) && $_GET['action'] == 'retirer' && !empty($_GET['id_article']))
{
    retirer_article_du_panier($_GET['id_article']);
}


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
    ajouter_un_article_au_panier($_POST['id_article'], $article['prix'], $_POST['quantite'], $article['titre'], $article['photo']);
    // On redirige sur la même page pour perdre les informations dans POST afin que si l'utilisateur actualise la page (F5) l'article ne soit pas rentré une nouvelle fois.
    header("location:panier.php");
}


// VALIDATION DU PAIEMENT DU PANIER
if(isset($_GET['action']) && $_GET['action'] == 'payer' && !empty($_SESSION['panier']['prix']))
{
    // Si l'utilisateur clique sur le bouton "payer le panier"
    // 1e action : vérification du stock disponible en comparaison des quantités demandées
    for($i = 0; $i < count($_SESSION['panier']['id_article']); $i++)
    {
        $resultat = $pdo->query("SELECT * FROM article WHERE id_article = " . $_SESSION['panier']['id_article'][$i]);
        $verif_stock = $resultat->fetch(PDO::FETCH_ASSOC);

        if($verif_stock['stock'] < $_SESSION['panier']['quantite'][$i])
        {
            // Si on rentre dans cette condition alors il y a un stock inférieur à la quantité demandée.
            // 2 possibilités : stock à 0 ou stock > 0 mais inférieur à la quantité
            if($verif_stock['stock'] > 0)
            {
                // il reste du stock alors on affecte directement le stock restant pour la quantité demandée
                $_SESSION['panier']['quantite'][$i] = $verif_stock['stock'];
                $message .= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Attention, la quantité de l'article '" . $_SESSION['panier']['titre'][$i] . "' a été modifiée car notre stock est insuffisant.<br>Veuillez vérifier votre commande.</div>";
            }
            else
            {   // Si le stock est à 0 alors on enlève l'article du panier
                retirer_article_du_panier($_SESSION['panier']['id_article'][$i]);
                $message .= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Attention, l'article '" . $_SESSION['panier']['titre'][$i] . "' a été supprimé de votre panier car nous sommes en rupture de stock pour ce produit.<br>Veuillez vérifier votre commande.</div>";
                $i--; // Si nous enlevons un article du panier, il est nécessaire de décrémenter (-1) la variable $i avec array_splice (voir retirer_article_du_panier() sur function.inc.php) les indices sont réordonnés
            }
            $erreur = true;
        }
    }

    if(!$erreur) // ou if(erreur != true)
    {
        $id_membre = $_SESSION['utilisateur']['id_membre'];
        $montant_commande = montant_total();
        $pdo->query("INSERT INTO commande (id_membre, montant, date) VALUES ($id_membre, $montant_commande, NOW())");
        $id_commande = $pdo->lastInsertId(); // On récupère l'id inséré par la dernière requête
        $nb_tout_panier = count($_SESSION['panier']['titre']);
        for($i = 0; $i < $nb_tout_panier; $i++)
        {
            $id_article_commande = $_SESSION['panier']['id_article'][$i];
            $quantite_commande = $_SESSION['panier']['quantite'][$i];
            $prix_commande = $_SESSION['panier']['prix'][$i];
            $pdo->query("INSERT INTO details_commande (id_commande, id_article, quantite, prix) VALUES ($id_commande, $id_article_commande, $quantite_commande, $prix_commande)");

            // Mise à jour du stock
            $pdo->query("UPDATE article SET stock = stock - $quantite_commande WHERE id_article = $id_article_commande");
        }
        unset($_SESSION['panier']);
    }
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
                            <th colspan="6" class="text-center">Panier</th>
                        </tr>
                        <tr>
                            <th class="text-center">Article</th>
                            <th class="text-center">Titre</th>
                            <th class="text-center">Quantité</th>
                            <th class="text-center">Prix unitaire (TTC)</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php
                            // Vérification si le panier est vide sur n'importe quel tableau array du dernier niveau (id_article / prix / quantité / titre)
                            if(empty($_SESSION['panier']['id_article']))
                            {
                                echo '<tr><th class="text-center alert alert-danger" colspan="6">Aucun article dans votre panier</th></tr>';
                            }
                            else 
                            {
                                // Sinon on affiche tous les produits dans un tableau html
                                $taille_tableau = count($_SESSION['panier']['titre']);
                                for($i = 0; $i < $taille_tableau; $i++)
                                {
                                    echo '<tr>';
                                        echo '<td>' . $_SESSION['panier']['id_article'][$i] . '</td>';
                                        echo '<td>' . $_SESSION['panier']['titre'][$i] . '</td>';
                                        echo '<td>' . $_SESSION['panier']['quantite'][$i] . '</td>';
                                        echo '<td>' . number_format($_SESSION['panier']['prix'][$i], 2) . '</td>';
                                        echo '<td><img src="' . URL . 'photo/' . $_SESSION['panier']['photo'][$i] . '" alt="Photo de l\'image" style="width: 50px;"></td>';

                                        if(!empty($_SESSION['panier']['id_article']))
                                            {
                                                echo '<td><a href="?action=retirer&id_article=' . $_SESSION['panier']['id_article'][$i] . '" class="btn btn-danger glyphicon glyphicon-trash"</td>';
                                            }
                                    echo '</tr>';
                                }
                                // Affichage du prix total du panier
                                // $total = number_format(montant_total(), 2, ',', ' ')
                                $total = number_format(montant_total(), 2);
                                $total = str_replace(',', ' ', $total);
                                $total = str_replace('.', ',', $total);
                                echo    '<tr>
                                            <td colspan="4">Montant total <b>TTC</b></td>
                                            <td colspan="2"><b>' . number_format(montant_total(), 2) . ' €</b></td>
                                        </tr>';
                                        

                                // Affichage du bouton payer si l'utilisateur est connecté
                                if(utilisateur_est_connecte())
                                {
                                    echo '<tr><td colspan="6"><a href="?action=payer" class="btn btn-success form-control">Payer le panier</a></td></tr>';
                                }
                                else {
                                    echo '<tr><td colspan="6">Vous n\'êtes pas connecté, veuillez vous <a href="connexion.php">connecter</a> ou vous <a href="inscription.php">inscrire</a> pour continuer</td></tr>';
                                }

                                // Bouton vider le panier
                                
                                    echo '<td colspan="6"><a href="?action=vider_panier" class="btn btn-danger form-control">Vider le panier</a></td>';

                            }
                            
                            
                            //  Rajouter une ligne au tableau qui affiche un lien a href(?action=payer) pour payer le panier si l'utilisateur est connecté
                            

                            // Rajouter une ligne au tableau qui affiche un bouton vider la panier uniquement si le panier n'est pas vide. Et faire le traitement afin que si on clique sur le bouton, on vide le panier. (unset())

                            

                            // Rajouter une ligne pour afficher le prix total du panier
                        ?>
                    </table>
                    <hr>
                    <p>Règlement par chèque uniquement !<br>A l'adresse: 18 rue Geoffroy l'Asnier 75004 Paris</p>
                    <hr>
                    <p>
                    <?php
                    if(utilisateur_est_connecte())
                    {
                        // Si l'utilisateur est connecté, on affiche son adresse de livraison
                        echo '<address><b>Votre adresse de livraison est:</b><br>' . $_SESSION['utilisateur']['adresse'] . '<br>' . $_SESSION['utilisateur']['cp'] . '<br>' . $_SESSION['utilisateur']['ville'] . '</address>';
                    }
                    ?>
                </div>
            </div>

        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>