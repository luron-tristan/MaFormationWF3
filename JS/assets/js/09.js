/* -------------------------------------------
                LES BOUCLES
------------------------------------------- */

// -- La boucle FOR

// -- Pour i = 1 ; tant que i <= (strictement inférieur ou égal à) 10, alors j'incrémente;
for(var i = 1 ; i <= 10 ; i++) {
    document.write("<p>Instruction exécutée : <strong>" + i + "</strong></p>");
}

document.write("<hr>");

// -- La boucle WHILE : Tant que

var j = 1;
while(j <= 10) {
    document.write("<p>Instruction exécutée : <strong>" + j + "</strong></p>");
    j++;
}

    // EXERCICE
    // Supposons le tableau suivant :
var prenoms = ['Hugo', 'Jean', 'Matthieu', 'Luc', 'Pierre', 'Marc'];

document.write("<hr>");

// CONSIGNE : Grâce à une boucle FOR, afficher la liste de prénoms du tableau dans la console ou sur votre page. 

for(var i = 0 ; i < prenoms.length ; i++){
    document.write(prenoms[i] + " ");
    console.log(prenoms[i] + " ");
}
    console.log(prenoms.length)

// https://benhollis.net/blog/2009/12/13/investigating-javascript-array-iteration-performance/

// https://leftshifht.io/4-javascript-optimisations-you-should-know