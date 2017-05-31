/*-------------------------------------------------
        VALIDATION DE FORMULAIRE jQUERY
-------------------------------------------------*/
// -- DECLARATION DE FONCTION
function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
}
// -- Initialisation de jQuery
$(function() {
    //  -- Ici commence mon code jQuery
    // -- LesFlemmards.js
    function l(e){
        console.log(e);
    }

    // -- Ecouter à quel moment est soumis notre formulaire
    // -- A la soumission de notre formulaire, je vais exécuter une fonction anonyme
    // -- En JS : document.getElementById('contact').addEventListener('submit', maFonctionAExecuter);

    $('#contact').on('submit', function(event) {
        // -- event : correspond ici à notre élément "submit"

        // -- Arrêter la redirection HTML5
        event.preventDefault();

        // -- Suppression des différentes erreurs

        // -- Je cible tous les éléments qui contiennent la classe "has-error", puis je supprime ".has-error" pour ces éléments.
        $('#contact .has-error').removeClass('has-error');

        // -- Je supprime la classe text-danger en ciblant les éléments qui ont la classe ".text-danger" pour ces éléments.
        $('#contact .text-danger').remove();
        $('#contact .alert').remove();        

        // -- Déclaration des variables (Champs à vérifier)
        var nom     = $('#nom');
        var prenom  = $('#prenom');
        var email   = $('#email');
        var tel     = $('#tel');

        // -- Je passe à la vérification de chaque champ...

            // -- Vérification du nom
            if(nom.val().length == 0) {

                // -- Si le champ nom est vide, alors j'ajoute à son parent la classe has-error
                nom.parent().addClass('has-error');

                // -- Je rajoute une indication texte
                $("<p class='text-danger'>N'oubliez pas de saisir votre nom</p>").appendTo(nom.parent());
            }

            // -- Vérification du prénom
            if(prenom.val() == "") {
                prenom.parent().addClass('has-error');
                $("<p class='text-danger'>N'oubliez pas de saisir votre prénom</p>").appendTo(prenom.parent());
            }

            // -- Vérification de l'email
            if(!validateEmail(email.val())){
                email.parent().addClass('has-error');
                $("<p class='text-danger'>Vérifiez votre adresse email</p>").appendTo(email.parent());
            }
        
            // -- Vérification du numéro de téléphone
            if(tel.val().length == 0 || $.isNumeric(tel.val()) == false) {
                tel.parent().addClass('has-error');
                $("<p class='text-danger'>Vérifiez votre numéro de téléphone</p>").appendTo(tel.parent());
            }

        if($(this).find('.has-error').length == 0) {

            $(this).replaceWith('<div class="alert alert-success">Votre demande a bien été envoyée ! Nous vous répondrons dans les meilleurs délais.</div>');

        } else {
            $(this).prepend("<div class='alert alert-danger'>Nous n'avons pas été en mesure de valider votre demande. Vérifiez vos informations.</div>");
        }
    });

});

