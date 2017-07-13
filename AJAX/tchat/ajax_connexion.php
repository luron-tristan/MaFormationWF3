<?php
// Inclusion du fichier contenant la connexion BDD ainsi que le lancement d'une session
require_once('inc/init.inc.php');

$tab = array();
$tab['resultat'] = "";
// Rajout d'un indice dans le tableau array qui serta renvoyé nous permettant de faure un contrôle sur la disponibilité du pseudo.
$tab['pseudo'] = "disponible";

// Variable de contrôle en cas d'erreur
$erreur = false;

$pseudo             = isset($_POST['pseudo'])               ? $_POST['pseudo']                  : "";
$sexe               = isset($_POST['sexe'])                 ? $_POST['sexe']                    : "";
$ville              = isset($_POST['ville'])                ? $_POST['ville']                   : "";
$date_de_naissance  = isset($_POST['date_de_naissance'])    ? $_POST['date_de_naissance']       : "";

// RRequête en bdd pour vérifier si le pseudo existe déjà
$resultat = $pdo->prepare('SELECT * FROM membre WHERE pseudo = :pseudo');
$resultat->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$resultat->execute();
// fetch
$membre = $resultat->fetch(PDO::FETCH_ASSOC);

// Vérification si le pseudo existe déjà:
if($resultat->rowCount() === 0)
{
    // Ici le pseudo n'existe pas car nous n'avons pas récupéré au moins une ligne
    $inscription = $pdo->prepare('INSERT INTO membre (pseudo, sexe, ville, date_de_naissance, ip, date_connexion) VALUES (:pseudo, :sexe, :ville, :date_de_naissance, :ip, NOW())');
    $inscription->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $inscription->bindParam(':sexe', $sexe, PDO::PARAM_STR);
    $inscription->bindParam(':ville', $ville, PDO::PARAM_STR);
    $inscription->bindParam(':date_de_naissance', $date_de_naissance, PDO::PARAM_STR);
    $inscription->bindParam(':ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR); // $_SERVER['REMOTE_ADDR'] => Adresse IP de l'utilisateur
    $inscription->execute();

    // On récupère l'id inséré pour le placer dans un deuxième temps dans la session
    $id_membre = $pdo->lastInsertId();
}
elseif($resultat->rowCount() > 0 && $membre['ip'] == $_SERVER['REMOTE_ADDR'])
{
    // Si rowCount() > 1 alors le pseudo existe maos om est possible que ce soit la même personne. On compare donc l'adresse ip en cours ($_SERVER['REMOTE_ADDR']) avec l'adresse enregistrée dans la BDD ($membre['ip'])
    $id_membre = $membre['id_membre'];
    // On met donc à jour la date de connexion
    $pdo->query("UPDATE membre SET date_connexion = NOW() WHERE id_membre = $id_membre");
}
else
{
    // Si on rentre dans ce else, le pseudo existe déjà et l'adresse ip n'est plus la même que celle pré-enregistrée.

    // On envoie un message d'erreur
    $tab['resultat'] = "<div class='alert alert-danger'>Ce pseudo est déjà utilisée, veuillez choisir un autre pseudo.</div>";
    // On change la valeur de la variable $erreur nous permettant de tester dans ce script s'il y a eu une erreur
    $erreur = true;
    // On change la valeur de $tab['pseudo'] afin de savoir s'il y a une erreur via javascript sur index.php
    $tab['pseudo'] = "reserve";
}

// Vérification s'il n'y a pas eu d'erreur au préalable:
if(!$erreur) // Si erreur est égal à false
{
    // On inscrit dans la session des informations sur l'utilisateur
    $_SESSION['utilisateur']                = array();
    $_SESSION['utilisateur']['pseudo']      = $pseudo;
    $_SESSION['utilisateur']['sexe']        = $sexe;
    $_SESSION['utilisateur']['id_membre']   = $id_membre;

    // Création d'un fichier pour inscrire les utilisateurs présents sur le tchat
    $f = fopen('pseudo.txt', 'a');
    if(filesize("pseudo.txt") === 0 ) // avant d'enregistrer l'information, on regarde si le fichier a une taille = 0, si c'est le cas, alors c'est la première ligne du fichier.
    {
        fwrite($f, $pseudo);
    }
    else
    {
        // Si on rentre ici alors des pseudos sont déjà insrcits donc on commence par sauter une ligne.
        fwrite($f, "\n" . $pseudo);
    }
}

echo json_encode($tab);