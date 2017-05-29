/* -- 
    Votre mission, que vous devez accepter !
    Réaliser une fonction permettant à un internaute de :
        -   Saisir son prénom dans un prompt
        -   Retourner à l'utilisateur : Bonjour [prénom], quel age as-tu ?
        -   Saisir son age
        -   Retourner à l'utilisateur : tu es donc né en [année de naissance].
        -   Afficher ensuite un récapitulatif dans la page :
            Bonjour [prénom], tu as [age] !
-- */

/* function hello(){
let prenom = prompt("Quel est ton nom ?");

let age = prompt("Bonjour " + prenom + ", quel age as-tu ?");

let annee = alert("Tu es donc né en " + (2017 - age));

document.write("<p> Bonjour " + prenom + ", tu as " + age + " ans ! </p>");
}

hello();
*/   
            /************ Correction ************/

// 1 -- Initialisation des variables
var anneeActuelle = new Date();

// 2 -- Création de ma fonction
function hello() {

    // 2a. -- Je demande à l'utilisateur son prénom
    let prenom = prompt("Hello ! What's your name ?", "<Saisir votre prénom>");
    console.log(prenom);
    console.log(typeof prenom);

    //  2b. -- Je lui demande son age
    let age = parseInt(prompt("Hello " + prenom + " ! How old are you ?", "<Saisir votre age>"));
    console.log(age);
    console.log(typeof age);

    //  2c. -- J'affiche une alerte avec son année de naissance !
    alert("AMAZING ! So you were born in " + (anneeActuelle.getFullYear() - age) + " !");
    
    // 2d. -- Affichage dans ma page html
    document.write("Hello " + prenom + " it's AMAZING ! You're " + age + " years old !");
}

// 3 -- Execution de ma fonction
hello();