<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajax Json Jquery Ajax</title>
    </head>
    <body>
        <form method="post" action="ajax_json.php" id="form" style="width: 50%; margin: 0 auto;">
            <?php
                $fichier = file_get_contents("fichier.json"); // On récupère le contenuu du fichier json
                $json = json_decode($fichier, true); // on transforme le format json en tableau array

                echo '<select name="personne" id="personne" style="width: 100%; min-height: 28px; border: 1px solid #dedede; border-radius: 3px;">';

                foreach($json AS $sous_tableau)
                {
                    echo '<option>' . $sous_tableau['prenom'] . '</option>';
                }

                echo '</select>';

                echo '<input type="submit" value="ok" id="submit" style="width: 100%;">';



                ?>
        </form>
        <hr>
        <div id="resultat">

        </div>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {

                $('#form').on('submit', function(e){
                    e.preventDefault();

                    // on récupère la valeur du champ select (id personne)
                    var perso = $('#personne').val();
                    var param = 'personne=' + perso;

                    var parametres = $(this).serialize();
                    // serialize() récupère tous les noms et valeurs d'un formulaire et nous l'envoie dans un format correct (GET)
                    // équivalent en JS formData https://developer.mozilla.org/fr/docs/Web/API/FormData
                    console.log(parametres);

                    // fichier cible // on récupère la valeur de l'attribut action="" du fomulaire
                    var file = $(this).attr("action");
                    console.log(file);

                    // méthode //  on récupère la valeur de l'attribut method="" du fomulaire
                    var method = $(this).attr("method");
                    console.log(method);

                    // API : http://api.jquery.com/jquery.ajax/
                    $.ajax({
                        url: file,          // url: 'ajax_json.php'
                        type: method,       // type: 'POST'
                        data: param,        // data: 'personne=' + perso
                        dataType:"json",    // il faut préciser le format des données reçues
                        success: function(reponse) {
                            $('#resultat').html(reponse.resultat); // la fonction qui sera executée lors de la réception de la réponse.
                        }
                    });

                    // avec la méthode de jQuery post
                    $.post(file, param, function(reponse) {
                         $('#resultat').html(reponse.resultat);
                    }, "json");
                    // $.post(lefichiercible, lesparametres, fonctionàdéclencher, format)

                });
            });
        </script>
    </body>
</html>