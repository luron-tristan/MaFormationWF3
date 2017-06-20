<?php
// $_POST est une superglobale donc un tableau ARRAY
// $_POST est toujours existant mais par défaut est vide !
// $_POST ,oud permet de récupérer les informations provenant d'un formulaire.
// L'indice correspondant à la saisie d'un champ sera l'attribut name="" du champ

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        * { font-family: sans-serif; }
        form { width: 30%; margin: 0 auto; }
        label { display: inline-block; width: 120px; font-style: italic; }
        input, textarea { height: 30px; border: 1px solid #eee; width: 100%; resize: none; margin-bottom: 10px; }
        textarea { height: 50px; }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire en PHP</title>
</head>
<body>
<?php
    echo'<pre>'; print_r($_POST); echo '</pre>';

    if(isset($_POST['pseudo']) && isset($_POST['message']))
    {
        echo 'Le pseudo est: ' . $_POST['pseudo'] . '<br>';
        echo 'Le message est: ' . $_POST['message'] . '<br>';
    }
?>
    <form method="POST" action="" entype="multipart/form-data">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value="">

        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea><br><br>

        <input type="submit" name="submit" value="Valider">
    </form>
</body>
</html>