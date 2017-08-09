<?php
// mise en place de la connexion à une bdd
$pdo = new PDO('mysql:host=localhost;dbname=voitures', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$errors = [];

$marque = (isset($_POST['marque'])) ? $_POST['marque'] : "";
$modele = (isset($_POST['modele'])) ? $_POST['modele'] : "";
$annee = (isset($_POST['annee'])) ? $_POST['annee'] : "";
$couleur = (isset($_POST['couleur'])) ? $_POST['couleur'] : "";

$tab = array();

$tab['resultat'] = "";

if(!empty($_POST['marque']) && !empty($_POST['modele']) && !empty($_POST['annee']) && !empty($_POST['couleur']))
{
    if(strlen($marque) < 3){
		$errors[] = '<div class="alert alert-danger text-center">La marque doit comporter au moins 3 caractères</div>';		
	}

	if(strlen($modele) < 3){
		$errors[] = '<div class="alert alert-danger text-center">Le modèle doit comporter au moins 3 caractères</div>';
	}
	
	if(empty($annee)){
		$errors[] = '<div class="alert alert-danger text-center">L\'année doit être complétée</div>';
	}

	if(strlen($annee) < 4){
		$errors[] = '<div class="alert alert-danger text-center">Le format de l\'année doit être de type YYYY</div>';
	}

	if(strlen($couleur) < 4){
		$errors[] = '<div class="alert alert-danger text-center">La couleur doit comporter au moins 3 caractères</div>';
	}

    if(!$errors){
            
        $bdd = $pdo->prepare("INSERT INTO vehicule (marque, modele, annee, couleur) VALUES (:marque, :modele, :annee, :couleur)");
        $bdd->bindParam(':marque', $marque, PDO::PARAM_STR);
        $bdd->bindParam(':modele', $modele, PDO::PARAM_STR);
        $bdd->bindParam(':annee', $annee, PDO::PARAM_STR);
        $bdd->bindParam(':couleur', $couleur, PDO::PARAM_STR);
        $bdd->execute();

        $tab['resultat'] = "<div class='alert alert-success text-center'>Votre véhicule a bien été ajouté !</div>";
    } else {
        $tab['resultat'] = $errors;
    }
}
else {
    $tab['resultat'] = '<div class="alert alert-danger text-center">Veuillez remplir tous les champs</div>';
}

// envoi de la réponse en encodant sous le format JSON
echo json_encode($tab);