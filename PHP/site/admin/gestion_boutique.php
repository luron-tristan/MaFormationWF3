<?php
require ("../inc/init.inc.php");

// Restriction d'accès, si l'utilisateur n'est pas admin, alors il ne doit pas accéder à cette page.
if(!utilisateur_est_admin())
{
    header("location:../connexion.php");
    exit(); // permet d'arrêter l'exécution du script au cas où une personne maveillante ferait des injections via GET
}


// Déclaration de variables vides pour affichage dans les values du formulaire
$id_article      = "";
$reference      = "";
$categorie      = "";
$titre          = "";
$description    = "";
$couleur        = "";
$taille         = "";
$sexe           = "";
$prix           = "";
$stock          = "";
$photo_bdd      = "";

// Déclaration d'une variable de contrôle
$erreur = '';


/**********************************************************************************
                           ENREGISTREMENT DES PRODUITS
**********************************************************************************/
// Contrôle sur l'existence de tous les champs provenant du formulaire, sauf le bouton validation, l'id article et la photo
if(isset($_POST['id_article']) && isset($_POST['reference']) && isset($_POST['categorie']) && isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['couleur']) && isset($_POST['taille']) && isset($_POST['sexe']) && isset($_POST['prix']) && isset($_POST['stock']))
{

    $id_article     = $_POST['id_article'];
    $reference      = $_POST['reference'];
    $categorie      = $_POST['categorie'];
    $titre          = $_POST['titre'];
    $description    = $_POST['description'];
    $couleur        = $_POST['couleur'];
    $taille         = $_POST['taille'];
    $sexe           = $_POST['sexe'];
    $prix           = $_POST['prix'];
    $stock          = $_POST['stock'];



        // Contrôle sur la disponibilité de la référence en BDD
        $verif_ref = $pdo->prepare("SELECT * FROM article WHERE reference = :reference");
        $verif_ref->bindParam(":reference", $reference, PDO::PARAM_STR);
        $verif_ref->execute();

        if($verif_ref->rowCount() > 0)
        {
            $message.= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Attention, la référence est déjà utilisée.<br>Veuillez choisir une autre référence.</div>";
            $erreur= true;
        }

        // Vérification si la référence n'est pas vide
        if(empty($reference))
        {
            $message .= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Veuillez choisir une référence à votre article.</div>";
            $erreur= true;
        }

        // Vérification si le titre n'est pas vide
        if(empty($titre))
        {
            $message .= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Veuillez choisir un titre à votre article.</div>";
            $erreur= true;
        }

        // Vérification si l'utilisateur a chargé une image
        if(!empty($_FILES['photo']['name']))
        {
            // Si ce n'est pas vide alors un fichier a bien été chargé via le formulaire

            // On concatène la référence sur le titre afin de ne jamais avoir un fichier avec un nom déjà existant
            $photo_bdd = $reference . '_' . $_FILES['photo']['name'];

            // Vérification de l'extension de l'image (extensions acceptées: jpg, jpeg, png, gif)
            $extension = strrchr($_FILES['photo']['name'], '.'); // Cette fonction prédéfinie permet de découper une chaine selon un caractère fourni en 2e argument (ici le .). Attention, cette fonction découpera la chaine à partir de la dernière occurence du 2e argument (donc nous renvoie la chaine comprise après le dernier point trouvé)
            // exemple : maphoto.jpg => on récupère .jpg
            // exemple : maphoto.maphoto.png => on récupère .png
            // echo '<pre>'; var_dump($extension); echo '</pre>';

            // On transforme $extension afin que tous les caractères soient en minuscules
            $extension = strtolower($extension); // inverse strtoupper();
            // On enlève le .
            $extension = substr($extension, 1); // exemple: .jpg => jpg
            // Les extensions acceptées
            $tab_extension_valide = array("jpg", "jpeg", "png", "gif");
            // Nous pouvons donc vérifier si extension fait partie des valeurs autorisées dans $tab_extension_valide
            $verif_extension = in_array($extension, $tab_extension_valide);
            // in_array vérifie si une valeur fournie en 1er argument fait partie des valeurs contenues dans un tableau array fourni en 2e argument.

            if($verif_extension && !$erreur)
            {
                // Si verif_extension est égal à true et que $erreur n'est pas égal à true (il n'y a pas eu d'erreur au préalable)
                $photo_dossier = RACINE_SERVEUR . 'photo/' . $photo_bdd;

                copy($_FILES['photo']['tmp_name'], $photo_dossier);
                // copy() permet de copier un ficher depuis un emplacement fourni en 1er argument vers un autre emplacement fourni en 2e argument
            }
            elseif(!$verif_extension)
            {
                $message .= "<div class='alert alert-danger' role='alert' style='margin-top: 20px;'>Attention, l'extension de la photo n'est pas au bon format. (Formats acceptés : jpg / jpeg / png / gif)</div>";
                $erreur= true;
            }
        }


        if(!$erreur)
        {
            $enregistrement = $pdo->prepare("INSERT INTO article (reference, categorie, titre, description, couleur, taille, sexe, prix, stock, photo) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :sexe, :prix, :stock, :photo)");
            $enregistrement->bindParam(":reference", $reference, PDO::PARAM_STR);
            $enregistrement->bindParam(":categorie", $categorie, PDO::PARAM_STR);
            $enregistrement->bindParam(":titre", $titre, PDO::PARAM_STR);
            $enregistrement->bindParam(":description", $description, PDO::PARAM_STR);
            $enregistrement->bindParam(":couleur", $couleur, PDO::PARAM_STR);
            $enregistrement->bindParam(":taille", $taille, PDO::PARAM_STR);
            $enregistrement->bindParam(":sexe", $sexe, PDO::PARAM_STR);
            $enregistrement->bindParam(":prix", $prix, PDO::PARAM_STR);
            $enregistrement->bindParam(":stock", $stock, PDO::PARAM_STR);
            $enregistrement->bindParam(":photo", $photo_bdd, PDO::PARAM_STR);
            $enregistrement->execute();
        }
}
/**********************************************************************************
                         FIN ENREGISTREMENT DES PRODUITS
**********************************************************************************/


// La ligne suivante commence les affichages dans la page
require ("../inc/header.inc.php");
require ("../inc/nav.inc.php");
// echo '<pre>'; print_r($_SERVER); echo '</pre>';
echo '<pre>'; print_r($_POST); echo '</pre>';
echo '<pre>'; print_r($_FILES); echo '</pre>';
?>

        

        <div class="container">

            <div class="starter-template">
                <h1>Gestion boutique</h1>
                <?php // echo $message; // messages dédiés à l'utilisateur ?>
                <?= $message; // Cette balise php inclue un echo // cette ligne php est équivalente à la ligne au-dessus. ?>
                <hr>
                <a href="?action=ajout" class="btn btn-primary">Ajouter un produit</a>
                <a href="?action=affichage" class="btn btn-info">Afficher les produits</a>
            </div>

            <?php if(isset($_GET['action']) && $_GET['action'] == 'ajout') { ?>
            <div class="row">
                <div class="col-xs-6 col-xs-push-3 well">
                    <form method="POST" action ="" enctype="multipart/form-data">
                         <span class='text-danger'>* (Champs obligatoires)</span>
                        <!-- id_article => caché (hidden) -->
                        <div class="form-group">
                            <input type="hidden" name="id_article" id="id_article" class="form-control" value="<?php echo $id_article ?>">
                        </div>
                        <div class="form-group">
                            <label for="reference">Référence <span class='text-danger'>*</span></label>
                            <input type="text" name="reference" id="reference" class="form-control" value="<?php echo $reference ?>">
                        </div>
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <select name = "categorie" class="form-control">
                                <option value="chemise">Chemises</option>
                                <option value="pantalon" <?php if($categorie == 'pantalon') { echo 'selected'; } ?> >Pantalons</option>
                                <option value="t-shirt" <?php if($categorie == 't-shirt') { echo 'selected'; } ?> >T-shirts</option>
                                <option value="pull-over" <?php if($categorie == 'pull-over') { echo 'selected'; } ?> >Pull-overs</option>
                                <option value="sweat" <?php if($categorie == 'sweat') { echo 'selected'; } ?> >Sweats à capuche</option>
                                <option value="manteau" <?php if($categorie == 'manteau') { echo 'selected'; } ?> >Manteaux</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="titre">Titre <span class='text-danger'>*</span></label>
                            <input type="text" name="titre" id="titre" class="form-control" value="<?php echo $titre ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" rows="6" style = "resize: none;" ><?php echo $description ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="couleur">Couleur</label>
                            <select name = "couleur" class = "form-control">
                                <option value="blanc">Blanc</option>
                                <option value="noir" <?php if($couleur == 'noir') { echo 'selected'; } ?> >Noir</option>
                                <option value="bordeaux" <?php if($couleur == 'bordeaux') { echo 'selected'; } ?> >Bordeaux</option>
                                <option value="rouge" <?php if($couleur == 'rouge') { echo 'selected'; } ?> >Rouge</option>
                                <option value="vert" <?php if($couleur == 'vert') { echo 'selected'; } ?> >Vert</option>
                                <option value="bleu" <?php if($couleur == 'bleu') { echo 'selected'; } ?> >Bleu</option>
                                <option value="bleu" <?php if($couleur == 'rose') { echo 'selected'; } ?> >Rose</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="taille">Taille</label>
                            <select name = "taille" class = "form-control">
                                <option value="xs">XS</option>
                                <option value="s" <?php if($taille == 's') { echo 'selected'; } ?> >S</option>
                                <option value="m" <?php if($taille == 'm') { echo 'selected'; } ?> >M</option>
                                <option value="l" <?php if($taille == 'l') { echo 'selected'; } ?> >L</option>
                                <option value="xl" <?php if($taille == 'xl') { echo 'selected'; } ?> >XL</option>
                                <option value="xxl" <?php if($taille == 'xxl') { echo 'selected'; } ?> >XXL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            <select name = "sexe" class = "form-control">
                                <option value="m">Homme</option>
                                <option value="f" <?php if($sexe == 'f') { echo 'selected'; } ?> >Femme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id = "photo" value="">
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix (en €)</label>
                            <input type="text" name="prix" id="prix" class="form-control" value="<?php echo $prix ?>">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" class="form-control" value="<?php echo $stock ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name ="enregistrer" class ='btn btn-success btn-block' style="margin-top: 25px;">Enregistrer le produit</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php } // Accolade correspondant à la condition sur l'affichage du formulaire
                    // if(isset($_GET['action']) && $_GET['action'] == 'ajout') 
            ?>
            
            
            
            
            <?php if(isset($_GET['action']) && $_GET['action'] == 'affichage')
            {
                $resultat = $pdo->query("SELECT * FROM article");

                // Balise ouverture du tableau
                echo '<table border="1" style="width: 80%; margin: 0 auto; border-collapse: collapse; text-align: center;">';
                // Première ligne du tableau pour le nom des colonnes
                echo '<tr>';
                // récupération du nombre de colonnes dans la requête:
                $nb_col = $resultat->columnCount();

                for($i = 0; $i < $nb_col; $i++)
                {
                    $colonne = $resultat->getColumnMeta($i); // On récupère les informations de la colonne en cours afin ensuite de demander le name
                    echo '<th style="padding: 10px;">' . $colonne['name'] . '</th>';
                }
                echo '</tr>';

                while($ligne = $resultat->fetch(pdo::FETCH_ASSOC))
                    {
                        echo '<tr>';
                        foreach($ligne AS $indice => $info)
                        {
                            if($indice == 'photo')
                            {
                                echo '<td style="padding: 10px;"><img src = "' . URL . 'photo/' . $info . '" width="140"></td>';
                            }
                            else {
                                echo '<td style="padding: 10px;">' . $info . '</td>';
                            }
                        }
                        echo '</tr>';
                    }
                echo '</table><br><hr>';
                }
            ?>
            


        </div><!-- /.container -->

<?php
require("../inc/footer.inc.php")





?>