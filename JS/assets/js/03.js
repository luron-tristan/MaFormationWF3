/* ----------------------------
        LA CONCATENATION
---------------------------- */

var débutDePhrase       =   "Aujourd'hui ";
var dateDuJour          =   new Date();
var suiteDePhrase       =   ", sont présents : ";
var nombreDeStagiaires  =   19;
var finDePhrase         =   " stagiaires.<br>";

/* -- Nous souhaitons maintenant, grâce à la concaténation, afficher tout ce petit monde, en un seul morceau !

*/

document.write(débutDePhrase + dateDuJour.getDate() + "/" + (dateDuJour.getMonth() + 1) + "/" + dateDuJour.getFullYear() + suiteDePhrase + nombreDeStagiaires + finDePhrase);

/* --------------------------------------------------------
EXERCICE : 
Créez une concaténation à partir des éléments suivants :
-------------------------------------------------------- */

var phrase1 = "Je m'appelle ";
var phrase2 = "Tristan et j'ai ";
var age     = 24;
var phrase3 = " ans !";

document.write(phrase1 + phrase2 + age + phrase3);