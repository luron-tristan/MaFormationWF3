<?php
// Pour voir  les fichiers de session => dossier tmp à la racine du serveur (wampp / wamp / mamp / ...)

//Pour créer une session
session_start(); // Crée une session ou ne fait que l'ouvrir si la session existe déjà.
// Lors de la création d'une session, un cookie d'identifiant est créé coté utilisateur pour avoir le lien entre la session et l'utilisateur.
// Comme pour setCookie(), la fonction session_start() doit être exécutée avant le moindre affichage html !

$_SESSION['pseudo'] = "Marie"; // $_SESSION est une superglobale, toutes les superglobales sont des tableaux array. Il est donc possible de créer des indices avec des valeurs dans notre session.
$_SESSION['password'] = "soleil";
$_SESSION['email'] = 'mail@mail.fr';
$_SESSION['age'] = 40;
$_SESSION['adresse']['code_postal'] = 75000;
$_SESSION['adresse']['ville'] = 'Paris';
$_SESSION['adresse']['adresse'] = 'Rue du Tertre';

echo 'Premier affichage de la session: <br>';
echo '<pre>'; print_r($_SESSION); echo '</pre><br>';

// Pour supprimer un élément de la session: unset()
unset($_SESSION['password']);

echo 'Deuxième affichage de la session: <br>';
echo '<pre>'; print_r($_SESSION); echo '</pre><br>';

// Pour détruire la session
session_destroy(); // Nous permet de supprimer la session, EN REVANCHE il fait savoir que l'information session_destroy() est vue par l'interpréteur php, mise de côté, puis exécutée uniquement à la fin du script en cours.

echo 'Deuxième affichage de la session: <br>';
echo '<pre>'; print_r($_SESSION); echo '</pre><br>';