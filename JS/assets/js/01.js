// alert("WOW ! Tu es sur ma page");

// Deux slash pour faire un commentaire uniligne.

/*
    Ici je peux faire un commentaire
    sur plusieurs lignes

    raccourci : ctrl + /
            ou  ctrl + shift + /
*/

// -- 1 : Déclarer une variable en JS
var prenom;

//  -- 2 : Affecter une valeur
prenom = "Tristan";

// -- 3 : Afficher la valeur de ma variable dans la console
console.log(prenom);

/*-------------------------------------------------------------
|  ~ ~ ~ ~ ~ ~ ~ ~ ~ Les types de variables ~ ~ ~ ~ ~ ~ ~ ~ ~  |
--------------------------------------------------------------*/

// -- Ici, typeof me permet de connaitre le type de ma variable.
console.log(typeof prenom);

// -- Déclaration d'un nombre
var age = 24;

//  -- Afficher dans la console
console.log(age);

// -- Connaitre son type
console.log(typeof age);

                /*----------------------------------------------------------|
                |                    LA PORTEE DES VARIABLES                |
                |                                                           |
                |   Les variables déclarées directement à la racine         |
                |   du fichier JS sont appelées variables globales.         |
                |                                                           |
                |   Elles sont disponibles dans l'ensemble de votre         |
                |   document, y compris dans les fonctions.                 |
                |                                                           |
                |   ###                                                     |
                |                                                           |
                |   Les variables qui sont déclarées à l'intérieur d'une    |
                |   fonction sont appelées variables locales.               |
                |                                                           |
                |   ###                                                     |
                |                                                           |
                |   Depuis ECMA6, vous pouvez déclarer une variable avec    |
                |   le mot-clé "let".                                       |
                |                                                           |
                |   Votre variable sera alors accessible uniquement dans    |
                |   le bloc dans lequel elle est contenue, càd déclarée.    |
                |                                                           |
                |   Si elle est déclarée dans une condition, elle sera      |
                |   disponible uniquement dans le bloc de la condition      |
                |                                                           |
                |----------------------------------------------------------*/

// -- Les variables FLOAT
var uneDecimale = -2.984;
console.log(uneDecimale);
console.log(typeof uneDecimale);

// -- Les Booléens (VRAI/FAUX)

var unBooleen = false; // -- true
console.log(unBooleen);
console.log(typeof unBooleen);

// -- Les constantes

/*
    La déclaration CONST permet de créer une constante accessible uniquement en lecture.
    Sa valeur, ne pourra pas être modifiée par des réaffectations ultérieures.
    Une constante ne peut pas être déclarée à nouveau.
*/

// -- Généralement, par convention, les constantes sont en majuscules.

const HOST = "localhost";
const USER = "root";
const PASSWORD = "mysql";

// -- Je ne peux pas faire cela
// USER = "Tristan";
// Uncaught TypeError: Assignment to constant variable.
console.log(USER);


            /*----------------------------------------------------------|
            |                     LA MINUTE INFO                        |
            |                                                           |
            |   Au fur et à mesure que l'on affecte ou ré-affecte       |
            |   des valeurs à une variable, celle-ci prend la           |
            |    nouvelle valeur et le nouveau type.                    |
            |                                                           |
            |   En JavaScript (ECMA Script), les variables sont         |
            |   auto-typées.                                            |
            |                                                           |
            |   Pour convertir une variable de type NUMBER en STRING    |
            |   et STRING en NUMBER, je peux utiliser les fonctions     |
            |   natives de javascript.                                  |
            |                                                           |
            |----------------------------------------------------------*/

var unNombre = "25";
console.log(unNombre);
console.log(typeof unNombre);

// -- La fonction parseInt() pour retourner un entier à partie de ma chaine de caractères.
unNombre = parseInt(unNombre);
console.log(unNombre);
console.log(typeof unNombre);

// -- Je ré-affecte une valeur à ma variable
unNombre = "12.55";
console.log(unNombre);
console.log(typeof unNombre);

// -- La Fonction parseFloat() permet de retourner un Float sur la base d'un STRING
unNombre = parseFloat(unNombre);
console.log(unNombre);
console.log(typeof unNombre);

// -- Conversion d'un nombre en string avec la fonction toString()
var unNombreEnString = 10;
var maChaineDeCaracteres = unNombreEnString.toString();
console.log(unNombreEnString);
console.log(typeof unNombreEnString);
console.log(typeof maChaineDeCaracteres);