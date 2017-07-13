<?php
// mise en place de la connexion à une bdd
$pdo = new PDO('mysql:host=localhost;dbname=connexion', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// récupération des arguments dans post fournis viz notre reqête ajax (variable param)
// ecriture en ternaire
$pseudo = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : "";
$mdp = (isset($_POST['mdp'])) ? $_POST['mdp'] : "";
/* écriture classique
if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
}
else {
    $pseudo = "";
}
*/
// Déclaration d'un tabkeau array qui contiendra notre réponse à la requête ajax
$tab = array();
// Déclaration de l'indice dans le tableau array qui contiendra la réponse, c'est cet indice que l'on appelle dans l'évènement onreadystatechange:
$tab['resultat'] = "";

// EXERCICE
// faire le contrôle si le pseudo et le mdp correspondent à une entrée dans la bdd
// S'il y a une erreur : renvoyer une chaine de caractères annonçant l'erreur à l'utilisateur
// Si le pseudo et le mdp sont ok, envoyer un message du type "vous êtes connecté, vous êtes pseudo de sexe (masculin / féminin), votre adesse email est : "maildelabdd"

$bdd = $pdo->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp");
$bdd->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$bdd->bindParam(':mdp', $mdp, PDO::PARAM_STR);
$bdd->execute();

// On vérifie le nombre de lignes dans la réponse de la BDD
// S'il y a moins d'une ligne alors le pseudo, le mdp ou les deux sont faux


if($bdd->rowCount() < 1)
{
    // on envoie un message d'erreur à l'utilisateur.
    $tab['resultat'] = '<div class="alert alert-danger text-center">Erreur sur le pseudo ou le mot de passe.<br>Veuillez recommencer.</div>';
}
else
{   
    // on transforme la ligne présente dans la réponse de la BDD en tableau array
    $utilisateur = $bdd->fetch(PDO::FETCH_ASSOC);

    // Condition ternaire
    $sexe = ($utilisateur['sexe'] == 'm') ? 'masculin' : 'féminin';

    $tab['resultat'] = "<div class='alert alert-success text-center'>Vous êtes connecté, vous êtes " . $utilisateur['pseudo'] . " de sexe " . $sexe . ",<br> votre adresse mail est : " . $utilisateur['email'] . "</div>";
}


// envoi de la réponse en encodant sous le format JSON
echo json_encode($tab);