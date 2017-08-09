<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" id="myForm">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>Prénom</label>
        <input type="text" name="prenom">
        <input type="submit" value="Envoyer">
    </form>
    <div id="response-div"></div>



    <?php
    $multi = [[2 => 'deux', '3', 'quatre'], [5,6,7], ['x', 'y', 'z']];
    echo $multi[0][3] + $multi[1][2] . $multi[2][1+1];

class Z {
    public $a = 'Zoo';
}
class Y extends Z {
    public $a = 'Yoo';
}
class X extends Y {
}

$z = new X();
echo $z->a;
    ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        $('#myForm').submit(function(event){ // on écoute le submit du form
            event.preventDefault(); // empêche la soumission du form

            var $this = $(this);

            var data = $this.serialize(); // transforme le form en JSON

            $.post(
                'back.php', // la page qu'on appelle en ajax
                data, // les données qu'on envoie
                function(response){ // fonction qui traite la réponse de l'appel
                    console.log(response);

                    var message;

                    if(response.status == 'ok') {
                        message = 'Tout est ok'
                    } else {
                        message = 'Il y a des erreurs';
                        message += '<br>' + response.errors.join('<br>');
                    }

                    $('#response-div').html(message);
                },
                'json' // type de retour
            );
        });
    </script>

</body>
</html>