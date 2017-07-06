<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 3 - Liste films BDD</title>
</head>
<body>
    <?php
// connexionn à la BDD
    $pdo = new PDO('mysql:host=localhost;dbname=exercice_3', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Récupération des films en BDD
    $requete = $pdo->query("SELECT title, director, year_of_prod FROM movies");
    $nb_colonnes = $requete->columnCount();

    // echo '<pre>'; print_r($film); echo '</pre>';

        
    // var_dump([$film][0]); echo '<br><br>';

    // var_dump([$film][0][0]);
    // echo '<br><br>';

    // var_dump([$film][0][1]);

    echo "<table style='border-collapse: collapse; width: 50%; text-align: center;' border=1>";

    for( $i = 0 ; $i < $nb_colonnes ; $i++)
    {
        $colonnes = $requete->getColumnMeta($i);
        echo '<th>' . $nb_colonnes['name'] . '</th>';
    }

    echo '</table>';







    ?>

</body>
</html>