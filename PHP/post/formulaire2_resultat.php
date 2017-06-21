<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire2_resultat</title>
    <style>
    * { font-family: sans-serif; }
    h1 { padding: 10px; background-color: navy; color: white; }
    .erreur { margin-top: 20px; background-color: darkred; color: white; padding: 10px; text-align: center;}
    .succes { margin-top: 20px; background-color: green; color: white;padding: 10px; text-align: center;}
    </style>
</head>
<body>
    <a href="formulaire2.php">Retour vers formulaire</a><br>
</body>
</html>

<!--<?php
// print_r($_POST);
// echo "<br><br><hr>";
// if(isset($_POST['pseudo']) && isset($_POST['email']))
// {
//     if(iconv_strlen($_POST['pseudo']) >= 4 && iconv_strlen($_POST['pseudo']) <= 14 && isset($_POST['pseudo']) && isset($_POST['email']))
//     {   
//         echo "Vos informations ont bien été enregistrées<br>";
//         echo "Pseudo: " . $_POST['pseudo'] . "<br>";
//         echo "Email: " . $_POST['email'] . "<br>";
//     }
//     else
//     {
//         echo "Votre pseudo doit contenir entre 4 et 14 caractères";
//     }
// }
?>-->

<!--CORRECTION-->

<?php

$message = '';

echo '<pre>'; print_r($_POST); echo '</pre><hr>';
if(isset($_POST['pseudo']) && isset($_POST['email']))
{
    // echo 'Le pseudo est:' . $_POST['pseudo'] . "<br>";
    // echo 'Le mail est:' . $_POST['mail'] . "<br>";

    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];

    // Contrôle sur la taille du pseudo

    if(iconv_strlen($pseudo) > 3 && iconv_strlen($pseudo) < 15)
    {
        $message .= '<p class = "succes">Votre pseudo est: ' . $pseudo . '</p>';
    }
    else {
        // Il y a un souci sur la taille du pseudo
        $message .= '<p class="erreur">Attention, la taille du pseudo est invalide<br> En effet, le pseudo doit avoir entre 4 et 14 caracrères inclus.</p>';
    }

    // Contrôle sur le format du mail
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $message .= '<p class = "succes">Votre pseudo est: ' . $email . '</p>';
    }
    else {
        $message .= '<p class="erreur">Attention, le format du mail est invalide<br> Veuillez vérifier votre saisie.</p>';
    }
}



echo '<h1>Résultats:</h1>';
echo $message;