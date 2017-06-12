$(function() {
    
    /*-------------------------------------------------------------
                        TRAITEMENT DE MON FORMULAIRE
    -------------------------------------------------------------*/
    $("#form").on("submit", function(e) {
        e.preventDefault();

        // -- Réinitialisation du formulaire
        $('.has-error').removeClass('has-error');
        $('.text-danger').remove();
        $('.alert').remove();    

        var choixValide = true;

        // -- Vérification du champ select

        if($('select').val() === "") {
            choixValide = false;
            $('select').parent().addClass('has-error');
            $("<p class='text-danger'>N'oubliez pas de choisir un chat</p>").appendTo($('select').parent());
        }
        console.log('Choix valide : ' + choixValide);
        
        // -- Vérification du textarea

        var messageValide = true;

        var nombreDeCaracteres = $("#message").val().length;

        console.log('Nombre de caractères : ' + nombreDeCaracteres + " " + typeof(nombreDeCaracteres));

        console.log(parseInt(nombreDeCaracteres))

        if(parseInt(nombreDeCaracteres) < 15 ) {
            messageValide = false;
            $('textarea').addClass('has-error');
            $("<p class='text-danger'>N'oubliez pas de préciser votre choix</p>").appendTo($('select').parent());
        }
        console.log('Message valide : ' + messageValide);

        if(choixValide && messageValide) {

            $(this).replaceWith('<div class="alert alert-success">Votre demande a bien été envoyée ! Nous vous répondrons dans les meilleurs délais.</div>');

        } else {
            $(this).prepend("<div class='alert alert-danger'>Nous n'avons pas été en mesure de valider votre demande. Vérifiez vos informations.</div>");
        }
    })


})
