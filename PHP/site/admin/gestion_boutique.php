<?php
require ("../inc/init.inc.php");





// La ligne suivante commence les affichages dans la page
require ("../inc/header.inc.php");
require ("../inc/nav.inc.php");
// echo '<pre>'; print_r($_SERVER); echo '</pre>';
?>

        

        <div class="container">

            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>

        </div><!-- /.container -->

<?php
require("../inc/footer.inc.php")





?>