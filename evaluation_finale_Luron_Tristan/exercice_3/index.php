<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Exercice 3</title>
    </head>
    <body>
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST" action="" id='form'>
                        <label for="marque">Marque</label>
                        <input type="text" class="form-control" id="marque" name="marque" value="">

                        <label for="modele">Modèle</label>
                        <input type="text" class="form-control" id="modele" name="modele" value="">

                        <label for="annee">Année</label>
                        <input type="text" class="form-control" id="annee" name="annee" value="">
                        
                        <label for="couleur">Couleur</label>
                        <input type="text" class="form-control" id="couleur" name="couleur" value="">

                        <input type="submit" class="btn btn-primary form-control" name="submit" value="Envoyer" style="margin-top: 15px;">
                    </form>
                </div>
            </div>
            <hr>
            <div id="resultat"></div>
            
        </div>
    </div>




    
    <script>
            
            var form = document.getElementById('form').addEventListener("submit", function(e) {

                // On bloque la soumission du formulaire.
                e.preventDefault();

                // On lance la requête ajax
                ajax();
            });

            // Requête ajax
            function ajax(){
                // Fichier cible 
                var file = "ajax.php";

                // Vérification pour la compatibilité navigateur
                if(window.XMLHttpRequest)
                    var xhttp = new XMLHttpRequest();
                else
                    var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE



                    var ma = document.getElementById('marque');
                    var marque = ma.value; 
                    console.log('Marque: ' + marque);
                    
                    var mo = document.getElementById('modele');
                    var modele = mo.value;
                    console.log('Modèle: ' + modele);

                    var a = document.getElementById('annee');
                    var annee = a.value;
                    console.log('Annee: ' + annee);

                    var c = document.getElementById('couleur');
                    var couleur = c.value;
                    console.log('Couleur: ' + couleur);

                   



                    var param = "marque=" + marque + "&modele=" + modele + "&annee=" + annee + "&couleur=" + couleur; 
                    console.log(param);

                    // on ouvre la requête ajax en mode POST
                    xhttp.open("POST", file, true);

                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


                    // On teste le staut de la requête ajax ainsi que le statut http
                    xhttp.onreadystatechange = function (){
                        
                        if(xhttp.readyState == 4 && xhttp.status == 200) {
                            
                            // .responseText représente la réponde fournie par notre requête ajax
                            console.log(xhttp.responseText);

                            // Si  on récupère une chaine de caractères au format JSON, nous devons utiliser JSON.parse() afin d'en créer un objet JS.
                            var result = JSON.parse(xhttp.responseText);

                            // .resultat correspond à l'indice défini en php sur ajax.php
                            // On place donc la réponse dans l'élément html prévu à cet effet.
                            document.getElementById('resultat').innerHTML = result.resultat;
                        }

                    }
                xhttp.send(param);
            }
        </script>
    
    
    
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </body>
</html>