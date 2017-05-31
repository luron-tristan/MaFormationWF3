/*-------------------------------------------------
        LES SELECTEURS D'ENFANTS jQUERY
-------------------------------------------------*/

// -- Initialisation de jQuery
$(function() {
    //  -- Ici commence mon code jQuery
    // -- LesFlemmards.js
    function l(e){
        console.log(e);
    }

    // -- Je souhaite sélectionner toutes mes divs
    l($('div'));
    
    // -- Je souhaite sélectionner mon header
    l($('header'));

    // -- Je souahite sélectionner tous les éléments descendants directs (enfants) qui sont dans "header"
    l($('header').children());

    // -- Je souhaite parmis mes descendants directs, uniquement les éléments "ul"
    l($('header').children('ul'));

    // -- Je souhaite récupérer tous les éléments "li" de mon "ul"
    l($('header').children('ul').find('li'));

    // -- Je souhaite récupérer uniquement le 2e élément dese mes 'li'
    l($('header').find('li').eq(1));

    // -- Je souhaite connaitre le voisin immédiat (suivant) de mon header
    l($('header').next());
    l($('header').next().next()); // -- Le voisin du voisin

    // -- Je souhaite connaitre le voisin précédent de mon header
    l($('header').prev());

    // -- Les parents
    l($('header').parent());
});
