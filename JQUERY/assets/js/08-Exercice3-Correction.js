// -- Initialisation de jQuery
$(function() {
    //  -- Ici commence mon code jQuery
    // -- LesFlemmards.js
    function l(e){
        console.log(e);
    }

    // -- Déclaration de variables
    var collectionDeContacts = []

    /*-------------------------------------------------------------
                        DECLARATION DES FONCTIONS
    -------------------------------------------------------------*/

    // -- Fonction ajouterContact : ajouter un contact dans le tableau de contacts, mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.
    function ajouterContact(unContact) {
        // -- Ajout de unContact dans le tableau "collectionDeContacts"
        collectionDeContacts.push(unContact);

        // -- Observer l'ajout de contacts dans la collection   
        console.log(collectionDeContacts);

        // -- On cache la phrase : aucun contact
        $('.aucuncontact').hide();

        // -- Mise à jour du HTML
        $('#LesContacts').find('tbody').append('<tr><td>'+ unContact.nom + '</td><td>' + unContact.prenom + '</td><td>' + unContact.email + '</td><td>' + unContact.tel + '</td></tr>');

        // -- Réinitialisation du formulaire
        reinitialisationDuFormulaire();

        // -- Affiche une notification
        afficheUneNotification();
    }

    // Fonction réinitialisationDuFormulaire() : Après l'ajout d'un contact, on remet le formulaire à 0 !
    function reinitialisationDuFormulaire() {

        // -- En JavaScript :
        // document.getElementById('contact').reset();
        //  -- En jQuery
        $('#contact').get(0).reset();
        //  -- Autre méthode :
        // $('#contact .form-control').val('');
    }

    // -- Affichage d'une notification
    function afficheUneNotification() {
        $('.alert-contact').fadeIn().delay(3000).fadeOut('slow');
    }

    // -- Vérification de la présence d'un contact dans contacts
    function estCeQunContactEstPresent(unContact) {

        // -- Booléen qui indique la présence ou pas d'un contact
        var estPresent = false;

        // -- On parcourt le tableau à la recherche d'une correspondance
        for(var i = 0 ; i < collectionDeContacts.length ; i++) {

            // -- Vérification pour chaque contact du tableau, s'il y a une correspondance avec mon Objet contact.
            if(unContact.email === collectionDeContacts[i].email) {

                // Si une correspondance est trouvée, 'estPresent' passe à VRAI (true)
                estPresent = true;

                // -- On arrête la boucle, plus besoin de poursuivre
                break;
            }
        }

        // -- On retourne est Present
        return estPresent;

    }

    // -- Vérification de la validité d'un email
    // -- https://paulund.co.uk/regular-expression-to-validate-email-address
    function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
    }
    

    /*-------------------------------------------------------------
                        TRAITEMENT DE MON FORMULAIRE
    -------------------------------------------------------------*/

    // -- Détection de la soumission de mon formulaire
    $("#contact").on("submit", function(e) {

        // -- Voir le contenu de l'évènement
        console.log(e);

        // -- Stopper la redirection de la page
        e.preventDefault();

        // Récupération des champs à vérifier
        var nom, prenom, email, tel;
        nom     = $('#nom');
        prenom  = $('#prenom');
        email   = $('#email');
        tel     = $('#tel');

        // -- Vérification des informations
        var mesInformationsSontValides = true;

        // -- Vérification du nom
        if(nom.val().length == 0) {
            mesInformationsSontValides = false;
        }

        // -- Vérification du prénom
        if(prenom.val().length == 0) {
            mesInformationsSontValides = false;
        }
        
        // -- Vérification du tel
        if(tel.val().length == 0) {
            mesInformationsSontValides = false;
        }
        
        // -- Vérification du mail
        if(!validateEmail(email.val())) {
            mesInformationsSontValides = false;
        }

        if(mesInformationsSontValides) {
            // -- Tout est correct, préparation du contact
            var contact = {
                'nom'   :   nom.val(),
                'prenom':   prenom.val(),
                'email' :   email.val(),
                'tel'   :   tel.val()
            };
            
            // -- Observons dans la console.
            console.log(contact);

            // -- Vérification estCeQunContactEstPresent ?
            if(!estCeQunContactEstPresent(contact)) {
                // -- Ajout du contact
                ajouterContact(contact);

            } else {
                alert('ATTENTION\nCe contact est déjà présent.');
            }

        } else {
            // -- Les informations ne sont pas valides
            alert('ATTENTION\nVeuillez bien remplir tous les champs.');
        }


    });


    
}); // -- Fin de jQuery ready !