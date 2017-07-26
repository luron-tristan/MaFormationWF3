<?php

$pdo = new PDO('mysql:host=localhost;dbname=wf3_entreprise', 'root', '', array(
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // Affiche les erreurs
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

try{
// Erreur de requête volontaire :
$resultat = $pdo -> query("qndfbqlkdfnb");
}
catch(PDOException $e){
    echo '<div style="background: red; color: white; padding: 10px">';
    echo 'Erreur SQL : <br>';
    echo 'Message : ' . $e ->getMessage() . '<br>';
    echo 'Fichier : ' . $e ->getFile() . '<br>';
    echo 'Ligne : ' . $e ->getLine() . '<br>';
    echo '</div>';
    exit;
}


// Marqueur non nominatif
// Exemple 1 : une seule valeur :
$resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ?");
$resultat -> execute(array('Amandine'));

// Exemple 2 : plusieurs valeurs :
$resultat = $pdo -> prepare("SELECT * FROM emplyes WHERE prenom = ? AND service = ? ");
$resultat -> execute(array('Amandine','Communication'));

// Marqueur nominatif (:)

$resultat = $pdo -> prepare("SELECT * FROM emplyes WHERE prenom = :prenom AND service = :service ");
$resultat -> execute(array(
    ':service' => 'Communication',
    ':prenom' => 'Amandine'
    ));


// Query + fetchAll à l'intérieur de la requête
$resultat = $pdo -> query("SELECT * FROM employes", PDO::FETCH_ASSOC);
var_dump($resultat);

foreach($resultat AS $valeur)
{
    echo 'Prenom : ' . $valeur['prenom'] . '<br>';
}