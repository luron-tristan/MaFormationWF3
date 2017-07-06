<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>On se présente !</title>
</head>
<body>
    <?php
        // Déclaration de mon tableau
        $identifiants = array();

        // Affectation des indices et valeurs
        $identifiants['prenom']         = 'Tristan';
        $identifiants['nom']            = 'Luron';
        $identifiants['adresse']        = '75 Rue des champs du four';
        $identifiants['cp']             = '78700';
        $identifiants['ville']          = 'Conflans';
        $identifiants['email']          = 'luront@gmail.com';
        $identifiants['telephone']      = '0628302397';
        $identifiants['date_naissance'] = '18/03/1993';

        // Mise en place de ma boucle
        echo '<ul>';
        foreach($identifiants AS $val => $valeur)
        {
            echo '<li>' . $val . ' : ' . $valeur . '</li>';
        }
        echo '</ul>';
    
    
    
    ?>
</body>
</html>