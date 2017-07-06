<?php
// Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=wf3_crud', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Ouverture de session
session_start();

// Déclaration de variable
$content = '';

// Inclusions de fichiers
require_once('fonction.inc.php');