<?php
require ("inc/init.inc.php");

$pseudo = "";
$mdp = "";
$nom = "";
$prenom = "";
$email = "";
$sexe = "";
$ville = "";
$cp = "";
$adresse = "";

// Contrôle sur l'existence de tous les champs provenant du formualire, sauf le bouton validation
if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['sexe']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['adresse']))
{   
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $adresse = $_POST['adresse'];
}



// La ligne suivante commence les affichages dans la page
require ("inc/header.inc.php");
require ("inc/nav.inc.php");
echo '<pre>'; print_r($_POST); echo '</pre>';
?>

        

        <div class="container">

            <div class="starter-template">
                <h1><span class = 'glyphicon glyphicon-user' style = 'color: plum';></span> Inscription</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
            </div>

            <div class="row">
                <div class="col-sm-6 col-sm-push-3 well">
                    <form method="POST" action ="">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?php echo $pseudo ?>">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe</label>
                            <input type="text" name="mdp" id="mdp" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $nom ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $prenom ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            <select name = "sexe" class = "form-control">
                                <option value="m">Homme</option>
                                <option value="f" <?php if($sexe == 'f') { echo 'selected'; } ?> >Femme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville" class="form-control" value="<?php echo $ville ?>">
                        </div>
                        <div class="form-group">
                            <label for="cp">Code Postal</label>
                            <input type="text" name="cp" id="cp" class="form-control" value="<?php echo $cp ?>">
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <textarea type="text" name="adresse" id="adresse" class="form-control" rows="4" style = "resize: none;" ><?php echo $adresse ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name = "inscription" class = 'btn btn-primary btn-block'>S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>


        </div><!-- /.container -->

<?php
require("inc/footer.inc.php")





?>