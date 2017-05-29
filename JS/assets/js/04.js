/* -----------------------------------------
        LES OPERATEURS ARITHMETIQUES
----------------------------------------- */

// ########### L'addition ########### //

// -- Déclaration de plusieurs variables à à la suite
var nb1, nb2, resultat;

nb1 = 10;
nb2 = 5;

// -- Addition de nb1 et nb2 avec l'opérateur "+"
resultat = nb1 + nb2;

// -- Affichage du résultat dans la console
console.log("L'addition de nb1 et nb2 est égale à : " + resultat)

// ########### La soustraction ########### //

// -- La soustraction de nb1 par nb2 avec l'opérateur "-"
resultat = nb1 - nb2;

// -- Affichage du résultat dans la console
console.log("La soustraction de nb1 et nb2 est égale à : " + resultat);

// ########### La multiplication ########### //

// -- La multiplication de nb1 par nb2 avec l'opérateur "-"
resultat = nb1 * nb2;

// -- Affichage du résultat dans la console
console.log("La multiplication de nb1 et nb2 est égale à : " + resultat);

// ########### La division ########### //

// -- La division de nb1 par nb2 avec l'opérateur "-"
resultat = nb1 / nb2;

// -- Affichage du résultat dans la console
console.log("La division de nb1 et nb2 est égale à : " + resultat);

// ########### Le modulo ########### //

// -- Le résultat du Modulo est le reste de la division

// -- Le modulo de nb1 par nb2 avec l'opérateur "%"
nb1 = 11;
resultat = nb1 % nb2;

// -- Affichage du résultat dans la console
console.log("Le reste de la division de " + nb1 + " par " + nb2 + " est égal à : " + resultat);

/* ----------------------------------------
        LES ECRITURES SIMPLIFIEES
---------------------------------------- */

nb1 = 15;
nb1 = nb1 + 5;
console.log(nb1);
nb1 += 5; // -- Ce qui équivaut à écrire nb1 = nb1 + 5;
// Ici, j'ai incrémenté et réaffecté.

console.log(nb1);
// -- Je peux procéder de la même manière pour tous les autres opérateurs arithmétiques :
// : "+", "-", "/", "*", "%"