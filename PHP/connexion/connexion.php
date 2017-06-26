<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <style>
        * { font-family: calibri; }
        form { width: 25%; min-width: 200px; margin: 0 auto; }
        input { width: 100%; border: 1px solid #dedede; border-radius: 3px; height: 28px; }
    </style>
</head>
<body>
    <?php
    echo '<pre>'; print_r($_POST); echo '</pre>';
    // Connexion à la BDD
    $pdo = new PDO('mysql:host=localhost;dbname=connexion', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    if(isset($_POST['pseudo']) && isset($_POST['mdp']))
    {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        // Dans pseudo : "Marie' #" suffit à se connecter
        // Dans mdp : "' OR id_utilisateur LIKE'2%" suffit à se connecter
        // Dans pseudo et mdp : ' OR 1='1 suffit à se connecter
        // Récupération des informations en ajoutant la fonction prédéfinie addslashes() pour gérer les quotes et guillemets.
        // $pseudo = addslashes($_POST['pseudo']);
        // $mdp = addslashes($_POST['mdp']);
        // addslashes() rajoute un antislash dès qu'il trouve une quote ou guillemet dans une chaine de caractères
        echo '<b>Pseudo: </b>' . $pseudo . '<br>';
        echo '<b>Mot de Passe: </b>' . $mdp . '<br>';


        $req = "SELECT * FROM utilisateur WHERE pseudo = '$pseudo' AND mdp = '$mdp'";
        echo '<b>Requête: </b>' . $req . '<br>'; // Affichage de la requête pour comprendre les injections

        // execution de la requête
        // $resultat = $pdo->query($req);
        // La ligne au-dessus permet l'injection de code via le formulaire (injections sql notamment), pour sécuriser, il nous suffit d'utiliser prepare + execute

        $resultat = $pdo->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp");
        $resultat->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $resultat->bindParam(":mdp", $mdp, PDO::PARAM_STR);
        $resultat->execute();
        
        $membre = $resultat->fetch(PDO::FETCH_ASSOC);

        if(!empty($membre)) // Si on récupère quelque chose de la bdd
        {
            // Alors le pseudo et le mdp sont corrects
            echo '<h1 style = "background-color: green; color: white; padding: 10px;">Vous êtes connecté</h1>';
            echo '<b>Vos informations:</B><br>';
            echo '<b>id_utilisateur:</b> ' . $membre['id_utilisateur'] . '<br>';
            echo '<b>Pseudo:</b> ' . $membre['pseudo'] . '<br>';
            echo '<b>Mot de passe:</b> ' . $membre['mdp'] . '<br>';
            echo '<b>Sexe:</b> ' . $membre['sexe'] . '<br>';
            echo '<b>Email:</b> ' . $membre['email'] . '<br>';
            echo '<b>Adresse:</b> ' . $membre['adresse'] . '<br>';
        }
        else {
            echo '<h1 style = "background-color: red; color: white; padding: 10px;">Erreur sur le pseudo ou le mot de passe<br>Veuillez recommencer</h1>';
        }
    }

    







    ?>


    <hr>
    <form method="post" action="">
        <label for="pseudo">Pseudo</label>
        <input id="pseudo" name="pseudo" type="text">
        <label for="mdp">Mot de passe</label>
        <input id="mdp" name="mdp" type="text"><hr>
        <input type="submit" value="Connexion">      
    </form>
    <hr>
</body>
</html>