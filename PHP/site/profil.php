<?php
require ("inc/init.inc.php");

// Vérification si l'utilisateur est connecté sinon on le redirige sur connexion
if(!utilisateur_est_connecte())
{
    header("location:connexion.php");
}

if(isset($_SESSION))
// {echo '<pre>'; print_r($_SESSION['utilisateur']); echo '</pre>';}
$statut = $_SESSION['utilisateur']['statut'];
if($statut == 1)
{
    $role = "Administrateur";
}
else {
    $role = "Membre";
}


// La ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require ("inc/nav.inc.php");
?>

        

        <div class="container">

            <div class="starter-template">
                <h1><span class = 'glyphicon glyphicon-user' style = 'color: green';></span> Profil <?php echo '( ' . $role . ' )' ?></h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>
            <div class="row">
                <ul class="col-sm-7">
                    <li class="list-group-item active">Vos informations</li>
                    <li class="list-group-item">Pseudo : <?php echo $_SESSION['utilisateur']['pseudo'] ?></li>
                    <li class="list-group-item">Nom : <?php echo $_SESSION['utilisateur']['nom'] ?></li>
                    <li class="list-group-item">Prenom : <?php echo $_SESSION['utilisateur']['prenom'] ?></li>
                    <li class="list-group-item">Sexe : <?php echo $_SESSION['utilisateur']['sexe'] ?></li>
                    <li class="list-group-item">Ville : <?php echo $_SESSION['utilisateur']['ville'] ?></li>
                    <li class="list-group-item">Code Postal : <?php echo $_SESSION['utilisateur']['cp'] ?></li>
                    <li class="list-group-item">Adresse : <?php echo $_SESSION['utilisateur']['adresse'] ?></li>
                    <li class="list-group-item">Email : <?php echo $_SESSION['utilisateur']['email'] ?></li>
                </ul>
                <div class="col-sm-5">
                    <img src="img/photo_profil.jpg" alt="Photo de profil" style="width: 100%;">
                </div>
            </div>
        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>