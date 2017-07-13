<?php
require_once("inc/init.inc.php");

if(!empty($_SESSION['utilisateur']['pseudo']))
{
    header('location:dialogue.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil - Connexion</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="contenu col-sm-4 col-sm-offset-4">
            <fieldset>
                <div id="message">
                    <!-- Mettre en place une requête ajax déclenchée lors de la calidation du fomulaire. Récupérer les paramètres à fournir puis tester si la communication est ok si vous recevez bien la réponse depuis ajax_connexion.php -->
                </div>
            </fieldset>
            <fieldset>
                <form method="post" action="#" id="form">
                    <label for="pseudo">Nom de Maître</label>
                    <input type="text" id="pseudo" name="pseudo" value="" placeholder="Maître Yoda">

                    <label for="sexe">Espèce</label>
                    <select name="sexe" id="sexe">
                        <option value="m">Jedi</option>
                        <option value="f">Soeur de la Nuit</option>
                    </select>

                    <label for="ville">Système solaire</label>
                    <input type="text" id="ville" name="ville" value="" placeholder="Coruscant">

                    <label for="date_de_naissance">Date d'arrivée dans la force</label>
                    <input type="date" id="date_de_naissance" name="date_de_naissance" placeholder="AAAA/MM/JJ" value="">

                    <input type="submit" id="submit" class="btn btn-danger" name="submit" value="Passer du côté obscur de la force">
                </form>
            </fieldset>
        </div>






        <script>
            // Mise en place de l'évènement sur la soumission du formulaire
            var form = document.getElementById('form').addEventListener("submit", function(e){
                // on bloque l'évènement
                e.preventDefault();
                // On déclenche la fonction ajax()
                ajax();
            });

            function ajax(){
                // Déclaration du fichier cible
                var file = "ajax_connexion.php";

                // Instanciation de l'objet ajax représenté par la variable xhttp
                if(window.XMLHttpRequest)
                var xhttp = new XMLHttpRequest(); // Pour la plupart des navigateurs

                else
                var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // Pour un ancien IE

                // Récupération des values des champs du formulaire
                var p = document.getElementById('pseudo');
                var pseudo = p.value;

                var s = document.getElementById('sexe');
                var sexe = s.value;

                var v = document.getElementById('ville');
                var ville = v.value;

                var d = document.getElementById('date_de_naissance');
                var dateDeNaissance = d.value;

                // Mise en place des paramètres qur nous allons envoyer sur ajax_connexion.php via ajax
                var param = 'pseudo=' + pseudo + '&sexe=' + sexe + '&ville=' + ville + '&date_de_naissance=' + dateDeNaissance;
                console.log(param);

                xhttp.open('POST', file, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200){
                        console.log(xhttp.responseText);
                        var result = JSON.parse(xhttp.responseText);

                        document.getElementById('message').innerHTML = result.resultat;
                        if(result.pseudo == 'disponible') {
                            // Si la valeur de l'indice pseudo est 'disponible' alors je sais qu'il n'y a pas eu d'erreur
                            window.location = 'dialogue.php';
                        }
                    }
                }

                xhttp.send(param);
            }





        </script>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>