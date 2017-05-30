/*---------------------------------
        LES SELECTEURS JQUERY
---------------------------------*/

// -- Format : $('selecteur')
// -- En jQuery, tous les sélecteurs CSS sont disponibles...

// -- DOM READY !
$(function(){

    // LesFlemmards.js
    function l(e) {
        console.log(e);
    }

    // -- Sélectionner les balises SPAN :

        //  Version en JavaScript :
        l('SPAN en JS :');
        l(document.getElementsByTagName('span'));

        // Version jQuery
        l('SPAN en JQ :');
        l($("span"));

    // -- Sélectionner mon Menu :

        // -- Version en JavaScript :
        l("ID via JS :");
        l(document.getElementById("menu"));

        // -- Version jQuery
        l('ID via jQuery');
        l($("#menu"));

    // -- Sélectionner une classe :

        // -- Version en JavaScript :
        l("classe via JS :");
        l(document.getElementsByClassName(".maClasse"));

        // -- Version jQuery
        l('classe via jQuery');
        l($(".maClasse"));

    // -- Sélectionner par attribut

        l('Par attribut :')
        l($("[href='http://www.google.fr"))
});