<?php
// Sur formulaire2.php mettre en place un formulaire avec deux champs (pseudo & email) + le bouton de validation
// Ce formulaire doit envoyer les informations saisies sur la page formulaire2_resultat.php
// Faire en sorte d'afficher les informations reçues (var_dump ou print_r)
// Ensuite afficher proprement les informations saisies
// Attention au cas d'erreur, par exemple si j'arrive directement sur formulaire2_resultat.php sans être passé par la validation du formulaire, y a t'il des erreurs ?
// Pour aller plus loin, le pseudo doit avoir entre 4 et 14 caractères inclus.
// Si la taille est ok: on affiche le pseudo est : ... etc
// S'il y a un souci sur la taille du pseudo, on affiche un message à l'utilisateur.



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * { font-family: sans-serif; }
        form { width: 30%; margin: 0 auto; }
        label { display: inline-block; width: 120px; font-style: italic; }
        input, textarea { height: 30px; border: 1px solid #eee; width: 100%; resize: none; margin-bottom: 10px; }
        textarea { height: 50px; }
    </style>
</head>
<body>

    <form method="post" action="formulaire2_resultat.php" entype="multipart/form-data">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value="">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value=""><br><br>

        <input type="submit" name="submit" value="Valider">
    </form>
</body>
</html>











