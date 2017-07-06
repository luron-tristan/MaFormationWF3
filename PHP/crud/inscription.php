<?php
require_once('inc/init.inc.php');

// echo '<pre>'; print_r($_POST); echo '</pre>';
if($_POST)
{
    $erreur = '';
    // Exercice : Contrôler les champs pseudo, nom, prénom, taille max : 20 caractères, taille min : 4
    // contrôler que le pseudo lors de l'inscription n'existe pas en BDD
    $pseudo     = $_POST['pseudo'];
    $mdp        = $_POST['mdp'];
    $nom        = $_POST['nom'];
    $prenom     = $_POST['prenom'];
    $email      = $_POST['email'];
    $civilite   = $_POST['civilite'];
    $ville      = $_POST['ville'];
    $cp         = $_POST['cp'];
    $adresse    = $_POST['adresse'];

    $pseudo_len = iconv_strlen($pseudo);
    $nom_len = iconv_strlen($nom);
    $prenom_len = iconv_strlen($prenom);

    if(($pseudo_len) < 4 || ($pseudo_len) > 20)
    {
        $content .= '<div class="alert alert-danger text-center">Attention, votre pseudo doit comprendre entre 4 et 20 caractères inclus.</div>';
        $erreur = true;
    }
    if(($nom_len) < 4 || ($nom_len) > 20)
    {
        $content .= '<div class="alert alert-danger text-center">Attention, votre nom doit comprendre entre 4 et 20 caractères inclus.</div>';
        $erreur = true;
    }
    if(($prenom_len) < 4 || ($prenom_len) > 20)
    {
        $content .= '<div class="alert alert-danger text-center">Attention, votre prenom doit comprendre entre 4 et 20 caractères inclus.</div>';
        $erreur = true;
    }

    if(!$erreur)
    {
        // Vérification de la dispo du pseudo en bdd
        $verif_pseudo = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
        $verif_pseudo->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $verif_pseudo->execute();
    }

    if(!$erreur && $verif_pseudo->rowCount() > 0)
    {
        $content .= '<div class="alert alert-danger text-center">Attention, votre pseudo n\'est pas disponible, veuillez choisir un autre pseudo.</div>';
        $erreur = true;
    }

    if(!$erreur)
    {
        $enregistrement = $pdo->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :ville, :cp, :adresse) ");
        $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $enregistrement->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
        $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
        $enregistrement->bindParam(':civilite', $civilite, PDO::PARAM_STR);
        $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
        $enregistrement->bindParam(':cp', $cp, PDO::PARAM_STR);
        $enregistrement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $enregistrement->execute();

        $content .= '<div class="alert alert-success">Votre compte a bien été enregistré.</div>';
    }

}

require_once('inc/haut.inc.php');
?>

<section>
    <div class="container">

        <div class="starter-template">
            <h1><span class = 'glyphicon glyphicon-user' style = 'color: plum';></span> Inscription</h1>
            <?= $content; 
            ?>
        </div>

        <div class="row">
            <div class="col-xs-6 col-xs-push-3 well">
                <form method="POST" action ="">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?php echo $pseudo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="text" name="mdp" id="mdp" class="form-control" value="<?php echo $mdp; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $nom; ?>">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $prenom; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="civilite">Civilité</label>
                        <select name = "civilite" class = "form-control">
                            <option value="m">Homme</option>
                            <option value="f" <?php if($civilite == 'f') { echo 'selected'; } ?>>Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" class="form-control" value="<?php echo $ville; ?>">
                    </div>
                    <div class="form-group">
                        <label for="cp">Code Postal</label>
                        <input type="text" name="cp" id="cp" class="form-control" value="<?php echo $cp; ?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <textarea type="text" name="adresse" id="adresse" class="form-control" rows="4" style = "resize: none;" ><?php echo $adresse; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name ="inscription" class ='btn btn-primary btn-block' style="margin-top: 25px;">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container -->
</section>









<?php
require_once('inc/bas.inc.php');