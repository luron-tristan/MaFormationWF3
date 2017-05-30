/*-------------------------------------------------
        LE CHAINAGE DE METHODES EN JQUERY
-------------------------------------------------*/

$(function() {

    // -- Je souhaite cacher toutes les DIVs de ma page HTML
    //  console.log( $('div));

    $('div').hide('slow', function() {
    
    // -- Une fois que la méthode hide() est terminée, mon alerte peut s'exécuter.
    alert('Fin du hide');

    // NB : La fonction s'exécutera pour l'ensemble des éléments du sélecteur.

    // -- CSS
    $('div').css("background", "yellow");
    $('div').css("color","red");

    // -- Je fais réapparaître mes DIVs
    $('div').show();

    }); // -- Fin Fonction Anonyme

    // -- En utilisant le chainage de méthodes, vous pouvez faire s'enchainer plusieurs fonctions les unes après les autres...

    $('p').hide(1000).css('color','blue').css('font-size','20px').delay(2000).show(500);

    // -- MAIS C'EST ENCORE TROP LONG !!!
    $('p').hide().css({'color':'blue','font-size':'20px'}).delay(2000).show();

});