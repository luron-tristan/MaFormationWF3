// -- Déclarer un tableau numérique
var monTableau  = [];
var myArray     = new Array;

// -- Affecter des valeurs à un tableau numérique
monTableau[0] = "Hugo";
monTableau[1] = "Tanguy";
monTableau[2] = "Géraldine";

//  Afficher le contenu de mon tableau numérique dans la console
console.log(monTableau[0]); // -- Hugo
console.log(monTableau[2]); // -- Géraldine
console.log(monTableau); // -- Affiche toutes les données

// -- Déclarer et afficher des valeurs à un tableau numérique
var nosPrénoms = ["Yimin", "Alex", "Cristian", "Tristan"];
console.log(nosPrénoms);
console.log(typeof nosPrénoms);

// -- Déclarer et affecter des valeurs à un Objet. (Pas de tableau associatif en JS)
var coordonnee = {
    "prenom"    :   "Tristan",
    "nom"       :   "Luron",
    "age"       :   24,
}

console.log(coordonnee);
console.log(typeof coordonnee);

// -- Comment créer et affecter des valeurs à un tableau à 2 dimensions

//  -- Je vais créer 2 tableaux numériques
var listeDePrénoms  = ["Hugo", "Rodrigue", "Kristie"];
var listeDeNoms     = ["LIEGEARD", "NOUEL", "SOUKAI"];

// -- Je vais créer un tableau à 2 dimensions à patir de mes 2 tableaux précédents
var annuaire = [listeDePrénoms, listeDeNoms];
console.log(annuaire);

// -- Afficher un nom et un prénom sur ma page HTML !
document.write(annuaire[0][1]);
document.write(" ");
document.write(annuaire[1][1]);

/* --------------
Exercice :

Créer un tableau à 2 dimensions appelé "annuaireDesStagiaires" qui contiendra toutes les coordonnées pour chaque stagiaire

ex: nom, prénom, tel
-------------- */

var annuaireDesStagiaires = [
    {"prénom" : "Hugo",      "nom" : "LIEGEARD",     "tel" : "0783 97 15 15"},
    {"prénom" : "Tanguy",    "nom" : "MANAS",        "tel" : "XXXX XX XX XX"},
    {"prénom" : "Yimin",     "nom" : "JI",           "tel" : "XXXX XX XX XX"},
];

console.log(annuaireDesStagiaires);
console.log(annuaireDesStagiaires[0].nom); // -- LIEGEARD
console.log(annuaireDesStagiaires[1].nom); // -- MANAS

/* ----------------------------------
        AJOUTER UN ELEMENT
---------------------------------- */

var couleurs =["Rouge", "Jaune","Vert"];

/* --   Si je souhaite ajouter un élément dans mon tableau,
        Je fais appel à la fontion push() qui me renvoie le nombre 
        d'éléments de mon tableau.
*/
 console.log(couleurs);
 var nombreElementsDeMonTableau = couleurs.push("Orange");
 console.log(couleurs);
 console.log(nombreElementsDeMonTableau);

/*  -- NB : La fonction unshift() permet d'ajouter un ou plusieurs éléments
            en début de tableau */
            
/* ------------------------------------------------
        RECUPERERR ET SORTIR LE DERNIER ELEMENT
------------------------------------------------ */

/*  --  La fontion pop() me permet de supprimer le dernier élément de mon tableau)
        et d'en récupérer la valeur.
        Je peux accessoirement récupérer cette valeur dans une variable.
*/

var monDernierElement = couleurs.pop();
console.log(monDernierElement);
console.log(couleurs);

/* --   La même chose est possible avec le premier élément en utilisant la fonction shift();
        NB : La fonction splice() vous permet de faire sortir un ou plusieurs éléments
        de votre tableau.
*/