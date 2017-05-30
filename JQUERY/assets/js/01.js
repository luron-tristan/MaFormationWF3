/* -------------------------------
        DISPONIBILITE DU DOM
------------------------------- */

/*
    A partir du moment où mon DOM, c'est-à-dire l'ensemble de l'arborescence 
    de ma page, est complètement chargé, je peux commencer à utiliser jQuery.

    Je vais mettre l'ensemble de mon code dands une fonction, cette fonction sera
    appelée AUTOMATIQUEMENT par jQuery lorsque le DOM sera complètement défini.

    3 façons de faire :
*/

jQuery(document).ready(function() {
    // -- Ici le DOM est entièrement chargé, je peux procéder à mon code JS.
});

    // -- 2e possibilité
$(document).ready(function() {
});

    // -- 3e possibilité, sans le (document).ready()
$(function() {
    // -- Ici le DOM est entièrement chargé, je peux procéder à mon code JS.
    // alert("J'ai 24 ans");

    // -- En JS :
    document.getElementById('texteEnJQuery').innerHTML = "<strong>Mon texte en JS</strong>";

    // -- En JQuery :
    $("#texteEnJQuery").html("Mon texte en JQ !");
});