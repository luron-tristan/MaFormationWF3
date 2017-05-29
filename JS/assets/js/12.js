        /*--------------------------------------------------|
        |~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ LE DOM ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ |
        |---------------------------------------------------|
        |   Le Dom est une interface de développement       |
        |   en JS pour HTML. Grâce au DOM, je vais être     |
        |   en mesure  d'accéder / modifier mon HTML.       |
        |                                                   |
        |   L'Objet "document" est le point d'entrée        |
        |   vers moon contenu HTML !                        |
        |                                                   |
        |   Chaque page chargée dans mon navigateur a un    |
        |   objet "document".                               |
        |--------------------------------------------------*/

        //  -- Comment puis-je faire pour récupérer les différentes informations de ma pagge HTML ?

/*

        /*----------------------------------------------|
        |~ ~ ~ ~ ~ ~ document.getElementById ~ ~ ~ ~ ~ ~|
        |-----------------------------------------------|
        |   document.getElementById() : C'est une       |
        | fonction qui va permettre dfe récupérer un    |
        | élément HTML à partir de son identifiant      |
        | unique : ID                                   |
        |----------------------------------------------*/
        
var bonjour = document.getElementById("bonjour");
console.log(bonjour);


        /*--------------------------------------------------|
        |~ ~ ~ ~ ~ ~ ~ document.getElementsByClassName      |
        |----------------------------------------------
        |   document.getElementByClassName() : C'est une 
        fonction qui va permettre dfe récupérer un ou
        plusieurs éléments (une liste) HTML à partir
        de leur classe.*/

var contenu = document.getElementsByClassName("contenu");
console.log(contenu);

// -- Me renvoie : un tableau JS avec mes éléments HTML, ou ecncore autrement dit, une collection d'éléments HTML.


        /*-----------------------------------------------------
        |~ ~ ~ ~ ~ ~ ~ document.getElementsByTagName
        |------------------------------------------------------
        |   document.getElementByTagName() : C'est une 
        fonction qui va permettre dfe récupérer un ou
        plusieurs éléments (une liste) HTML à partir
        de leur *nom de balise*.*/

var span = document.getElementsByTagName("span");
console.log(span)