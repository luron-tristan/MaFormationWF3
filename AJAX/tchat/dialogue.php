<?php
require_once("inc/init.inc.php");

if(empty($_SESSION['utilisateur']['pseudo']))
{
    header('location:index.php');
}

// echo '<pre>'; var_dump($_SESSION); echo '</pre>';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dialogue</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="conteneur">
            <h2 id="moi">Bonjour <?php echo $_SESSION['utilisateur']['pseudo']; ?></h2>
            <div id="message_tchat"></div>
            <div id="liste_membre_connecte"></div>
            <div class="clear"></div>
            <div id="smiley">
                <img src="smil/smiley1.gif" class="smiley" alt=":)">
            </div>
            <!-- FORMULAIRE -->
            <div id="formulaire_tchat">
                <form method="post" action="#" id="form">
                    <textarea rows="5" id="message" name="name" maxlength="300"></textarea><br>
                    <input type="submit" name="envoi" value="Envoi" class="submit">                        
                </form>
            </div>
            <div id="postMessage"></div>
        </div>

        <script>
            // récupération de la liste des connectés via un setInterval()
            setInterval("ajax(liste_membre_connecte)", 5333);

            // Récupération et affichage de tous les messages via un setInterval
            setInterval('ajax(message_tchat)', 3333);

            // Suppression de l'utilisateur sur le fichier pseudo.txt lors de la fermeture de la fenêtre
            window.onbeforeunload = function(){
                ajax('liste_membre_connecte', 'retirer');
            }

            // Enregistrement des messages lors de la validation (submit) du formulaire
            document.getElementById('form').addEventListener('submit', function(e) {
                e.preventDefault(); // bloque le rechargement de page consécutif au submit du formulaire
                ajax('postMessage', message.value);
                ajax("message_tchat");
                document.getElementById('message').value = '';
            });

            // Enregistrement des messages lors de la validation du formulaire via la touche entrée
            document.addEventListener('keypress', function(e) {
                if(e.keyCode == 13) // La touche entrée a un keyCode = 13
                {
                    e.preventDefault();
                    ajax('postMessage', message.value);
                    ajax("message_tchat");
                    document.getElementById('message').value = '';
                }
            })


            // Déclaration de la fonction Ajax
            function ajax(mode, arg = '') {
                if(typeof(mode) == 'object') {
                    mode = mode.id;
                    // Si notre argument mode est de type object, c'est que je ne récupère pas le texte normal de l'argument mais la balise html qui possède cet id puisqu'il est possible de sélectionner un élément directement par son id. Du coup on pioche dedans pour ne récupérer que l'id. (mode.id)
                }
                console.log("Mode: " + mode);

                var file = "ajax.php"; // le fichier cible
                var param = "mode=" + mode + "&arg=" + arg; // Les paramètres à fournir sur ajax.php

                if(window.XMLHttpRequest){
                    var xhttp = new XMLHttpRequest();
                } else {
                    var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // IE
                }

                xhttp.open("POST", file, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhttp.onreadystatechange = function () {
                    if(xhttp.readyState == 4 & xhttp.status == 200) {
                        console.log(xhttp.responseText);
                        var obj = JSON.parse(xhttp.responseText);
                        console.log(obj);

                        document.getElementById(mode).innerHTML = obj.resultat; // on place la réponse dans l'élément html dont l'id a été fourni dans l'argument "mode"
                        document.getElementById(mode).scrollTop = message_tchat.scrollHeight; // Permet de descendre le scroll (ascenseur) pour voir les derniers messages (ou les derniers membres)
                    }
                }
                xhttp.send(param); // On envoie en fournissant les paramètres

            }



        </script>


        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>