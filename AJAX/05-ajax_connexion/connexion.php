<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Formulaire de connexion</title>

    </head>
    <body>

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </nav>

        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form id="form" class="form-group" method="POST" action="">

                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" value="">

                            <label for="mdp">Mot de passe</label>
                            <input type="text" class="form-control" id="mdp" name="mdp" value="">

                            <input type="submit" class="btn btn-primary form-control" name="submit" value="Envoyer" style="margin-top: 15px;">
                        </form>
                    </div>
                </div>
                <hr>
                <div id="resultat"></div>
            </div>
        </div>

        <script>
            // On récupère l'élément html qui a l'id form et on rajoute un évènement (la soumission du formulaire) puis on déclenche une foinction sur cet évènement qui bloque la soumission du formulaire (bloque le rechargement de la page)
            var form = document.getElementById('form').addEventListener("submit", function(e) {

                // On bloque la soumission du formulaire. // preventDefault() permet de bloquer l'évènement quel qu'il soit.
                e.preventDefault();

                // On exécute notre fonction déclarée à l'extérieur de l'évènement qui lancera la requête ajax
                ajax();
            });

            // Déclaration d'une fonction js nous permettant de lancer une requête ajax
            function ajax(){
                // Déclaration du nom du fichier cible qui devra être exécuté lors de la requête ajax
                var file = "ajax.php";

                // Vérification pour la compatibilité navigateur si XMLHttpRequest existe sur ce navigateur
                if(window.XMLHttpRequest)
                    var xhttp = new XMLHttpRequest(); // pour la plupart des navigateurs
                else
                    // sinon c'est un navigateur ancien IE et c'est ActiveXObject qui devra être utilisé
                    var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE

                    // on récupère l'élément qui a l'ID pseudo et on le place dans la variable p
                    var p = document.getElementById('pseudo');
                    //On récupère dans la variable p la value de la saisie du champ
                    var pseudo = p.value; // Récupération de la valeur du pseudo
                    console.log('Pseudo: ' + pseudo);
                    
                    // on récupère l'élément qui a l'ID mdp et on le place dans la variable m
                    var m = document.getElementById('mdp');
                    //On récupère dans la variable m la value de la saisie du champ
                    var mdp = m.value; // Récupération de la valeur du mdp
                    console.log('Mdp: ' + mdp);

                    // Mise en place d'une chaine de caractères représentannt les paramètres qur nous allons transmettre à ajax.php sous la forme indice=valeur&indice2=valeur2&indice3=valeur3...
                    var param = "pseudo=" + pseudo + "&mdp=" + mdp;
                    console.log(param);

                    // on ouvre la requête ajax en mode POST, en fournissant le fichier cible concerné poar la requête ajax représenté par file en mode true (asynchrone)
                    // https://fr.wikipedia.ord/wiki/Asynchronisme
                    xhttp.open("POST", file, true);

                    // On transmet notre requête ajax un header http obligatoire lorsque nous utilisons la méthode POST
                    // https://fr.wikipedia.org/wiki/Hypertext_Transfer_Protocol
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    // Mise en place de l'évènement qui va se déclencher à chaque changement de statut de la requête ajax
                    // On teste ke staut de la requête ajax ainsi que le statut http
                    xhttp.onreadystatechange = function (){
                        // Si lme statut de la requête ajax est égale à 4 et dans le même temps si le statut http est égal à 200
                        if(xhttp.readyState == 4 && xhttp.status == 200) {
                            /*
                                Les statuts de la requête XMLHttpRequest
                                - 0 => objet créé, demande non-initialisée
                                - 1 => connexion avec le serveur établie
                                - 2 => demande envoyée et reçue par le serveur
                                - 3 => traitement côté serveur
                                - 4 => demande terminée et réponse reçue

                                Statuts HTTP
                                https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP

                                "200" => "OK"
                                "403" => "Forbidden"
                                "404" => "Not found"

                                Nous attendrons toujours que le statut de la requête soit à 4 et le statut http à 200 afin de manipuler la réponse.
                            */

                            // .responseText représente la réponde fournie par notre requête ajax
                            console.log(xhttp.responseText);

                            // Si  on récupère une chaine de caractères au format JSON, nous devons utiliser JSON.parse() afin d'en créer un objet JS.
                            var result = JSON.parse(xhttp.responseText);

                            // .resultat correspond à l'indice défini en php sur ajax.php
                            // On place donc la réponse dans l'élément html prévu à cet effet.
                            document.getElementById('resultat').innerHTML = result.resultat;
                        }

                    }
                    // Cette ligne déclenche l'envoi de la requête ajax en fournissant les paramètres attendus sur ajax.php
                    xhttp.send(param);
            }


        </script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>