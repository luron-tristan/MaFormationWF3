/* -------------------------------------------
                LES FONCTIONS
------------------------------------------- */

// -- Déclarer une fonction
// -- Cette fonction ne retourne aucune valeur
function disBonjour() {
    // -- Lors de l'appel de la fonction, les instructions ci-dessous seront exécutées.
    alert("Bonjour !");
}

// -- Je vais appeler ma fonction "disBonjour" et déclencher ses instructions.
disBonjour();

// --Déclarer une fonction qui prend en variable un paramètre
function bonjour(prenom, nom) {
    document.write("<p>Hello <strong> " + prenom + " " + nom + "</strong> !</p>");
}

// -- Appeler / utiliser une fonction avec un paramètre
bonjour("Tristan", "LURON");

// -- OU

var monPrenom = "Romain";
var monNom = "HEDOUX";

bonjour(monPrenom, monNom);
bonjour("Clement", "RASO");

/* -------------------------------------------
                EXERCICE
    Créeer une fonction permettant d'effectuer l'addition de deux nombres passées en paramètres.
------------------------------------------- */

function addition(nb1, nb2){
    let resultat = nb1 + nb2;
    // -- Le mot clé "return" permet de renvoyer une valeur en sortie.
    return nb1 + nb2; // resultat;
}

document.write("<p>" + addition(9, 13) + "</p>");
