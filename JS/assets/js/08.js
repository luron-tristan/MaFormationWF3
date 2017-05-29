/* -------------------------------------------
                LES CONDITIONS
------------------------------------------- */

var majoriteLegaleFr = 18;

// if(16 > majoriteLegaleFr) {
//     alert("Bienvenue !");
// } else{
//     alert("Google...");
// }

/* -------------------------------------------------------------------
        EXERCICE
Créer une fonction permettant de vérifier l'age d'un visiteur (prompt).
S'il a la majorité légale, alors je lui souhaite la bienvenue,
sinon, je fais une redirection sur Google après lui avoir signalé le souci.
-------------------------------------------------------------------*/


// 1 -- Déclarer la majorité légale
var majoriteLegaleFr = 18;

// 2 -- Créer une fonction pour demander son age
function verifierAge() {
    // -- Demande l'age de mon visiteur puis je le retourne
    return parseInt(prompt("Bonjour, quel age avez-vous ?", "<Saisissez votre age>"));
}

// 3 -- Une condition pout vérifier si l'age de l'utilisateur est supérieur à la majoriteLegaleFr
if(verifierAge() >= majoriteLegaleFr) {
    // -- J'affiche un message de bienvenue
    alert("Bienvenue sur mon site internet pour les majeurs !");
} else {
    // -- J'affiche une alerte
    alert("ATTENTION !!! Vous devez être majeur pour accéder à ce site !");

    // -- Je redirige vers Google.
    document.location.href = "https://www.google.fr/search?q=majorit%C3%A9+l%C3%A9gale+france&oq=majorit%C3%A9+l%C3%A9gale+france&aqs=chrome..69i57j0l3.5719j0j4&sourceid=chrome&ie=UTF-8";
}





/* -------------------------------------------
        LES OPERATEURS DE COMPARAISON
------------------------------------------- */

/* 
-- L'opérateur de comparaison "==" signifie : Egal à...
Il va comparer que deux variables sont identiques.

-- L'opérateur de comparaison "===" signifie : Strictement égal à...
Il va comparer la valeur et aussi le type de données.

-- L'opérateur de comparaison "!=" signifie : Différent de...

-- L'opérateur de comparaison "!==" signifie : Strictement diférent de...
*/

/* -------------------------------------------
                EXERCICE :
J'arrive sur un espace sécurisé au moyen d'un email et d'un mot de passe.
Je dois saisir mon email et mon mot de passe afin d'être authentifié sur le site.
En cas d'échec, une alert m'informe du problème.
Si tout se passe bien, un message de bienvenue m'accueille.
------------------------------------------- */

// Base de données
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

/* MON EXO
//  Création de ma fontion
function verifieremail() {

//  Je demande à l'utilisateur son email et son mot de passe
    return prompt("Veuillez entrer votre email", "<Votre email ici>");
}
    if(verifieremail===email){
        prompt("Veuillez entrer votre mot de passe", "<Votre mot de passe ici>");
    } else {
        alert("Votre email est incorrect");
    }

//  J'affiche une alerte en cas de mauvais email


//  J'affiche une alerte en cas de mauvais mot de passe


//  J'affiche un message de bienvenue
*/

// Opérateur "!" : signifie le CONTRAIRE de, on encore NOT
// var siMonUtilisateurEstApprouve = true;
// if(!siMonUtilisateurEstApprouve) { Si l'utilisateur n'st pas approuvé }