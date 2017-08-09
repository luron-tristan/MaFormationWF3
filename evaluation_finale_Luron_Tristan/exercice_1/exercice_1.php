<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 1</title>
</head>
<body>
<?php

    $requete =  'SELECT a.*, u.firstname, u.lastname 
                FROM articles a, users u
                WHERE a.id_user = u.id
                AND a.id = 10';
?>
</body>
</html>