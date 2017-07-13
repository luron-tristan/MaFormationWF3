<?php
// mise en place de la connexion à une bdd
$pdo = new PDO('mysql:host=localhost;dbname=tchat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// On lance une session
session_start();

