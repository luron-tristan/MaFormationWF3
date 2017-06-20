<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="formulaire2.php">Retour vers formulaire</a><br>
</body>
</html>

<?php
    var_dump($_POST);
    echo "<br><br><br>";

    if(iconv_strlen($_POST['pseudo']) >= 4 && iconv_strlen($_POST['pseudo']) <= 14 && isset($_POST['pseudo']) && isset($_POST['email']))
    {   
        echo "Vos informations ont bien été enregistrées<br>";
        echo "Pseudo: " . $_POST['pseudo'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }
    else
    {
        echo "Votre email doit contenir entre 4 et 14 caractères";
    }
?>