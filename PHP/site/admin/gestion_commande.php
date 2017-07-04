<?php
// EXERCICE:
// 1 - Modifier le projet site afin d'avoir la photo dans le panier et de l'afficher sur la page panier
// 2 - Afficher le prix total pour chaque article
// 3- Mettre en place des filtres de recherche sur la page boutique (couleur / taille / sexe / prix / mot clé)

require ("inc/init.inc.php");





// La ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require ("inc/nav.inc.php");
?>

        

        <div class="container">

            <div class="starter-template">
                <h1>Gestion commande</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>

        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>