<?php
// connexionn à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=wf3_site', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Appel du fichier contenant toutes nos fonctions.
require_once("function.inc.php");

// Création de variables pouvant nous servir dans le cadre du projet:
// Variable pour afficher des messages à l'utilisateur
$message = "";
// $message1 = "<div class='alert alert-success'>" . $message . "</div>";
// $message2 = "<div class='alert alert-danger'>" . $message . "</div>";

$erreur = "";

// Ouverture de la session
session_start();


// Définition de constante pour le chemin absolu, ainsi que pour la racine serveur
// Racine site
define("URL","/FORMATION/PHP/site/");

// Racine serveur
define("RACINE_SERVEUR", $_SERVER['DOCUMENT_ROOT'] . URL ); 