/*-------------------------------------
            LES EVENEMENTS
 -------------------------------------

Les évènements vont me permettre de déclencher une fonction,
c'est-à-dire une série d'instruction,
suite à une action de mon utilisateur.

OBJECTIF : Etre en mesure de capturer ces évènements,
afin d'exécuter une fonction

Les évènements : MOUSE (Souris)

    - click         : au clic sur un évènement,
    - mouseenter    : la souris passe au-desssus de la zone qu'occupe un élément
    - mouseleave    : la souris sort de cette zone

Les évènements : KEYBORAD (Clavier)

    - keydown   : une touche du clavier est enfoncée
    - keyup     : une touche a été relachée

Les évènements : WINDOW (Fenêtre)

    - scroll : défilement de la fenêtre
    - resize : redimensionnement de la fenêtre

Les évènements FORM (Formulaire)

    - change : pour les éléments <input>, <select> et <textarea>
    - submit : à l'envoi (soumission) d'un formulaire

Les évènements : DOCUMENT

    - DOMContentLoaded : exécuté lorsque le document HTML est complètement chargé, sans attendre le CSS et les images.
*/

/*-------------------------------------
            LES ECOUTEURS D'EVENEMENTS
 -------------------------------------

Pour attacher un évènement à un élément, ou autrement dit,
pour déclarer un éffcouteur d'évènement qui se chargera de la cer
une action, c'est-à-dire une fonction pour un évènement donné,
je vais utiliser la syntaxe suivante : */

var p = document.getElementById("monParagraphe");
console.log(p);

// -- Je souhaite que mon, paragraphe soir rouge au clic de la souris.

    // -- 1 : Je définis une fonction chargée d'exécuter cette action.
    function changeColorToRed() {
        p.style.color = "red";
    }

    // -- 2 : Je déclare un écouteur qui se chargera d'appeler la fonction
    // au déclenchement de l'évènement.
    p.addEventListener("click", changeColorToRed);



/* --------------------------------------
        EXERCICE PRATIQUE
A l'aide de JS, créer un champ "input" type text avec un ID unique.
Afficher ensuite dans une alerte la saisie de l'utilisateur.
-------------------------------------- */

    // -- 1 : Création de mon champ input
var input = document.createElement('input');

    // -- 2 : Atttribution d'un attribut
input.setAttribute('type','text');

    // -- 3 : Je veux donner un ID à mon input
input.id = "monInput";

    // -- 4 : Je mets mon input dans ma page, dans le body
document.body.appendChild(input);

    // -- 5 : Création d'un écouteur
input.addEventListener("change", saisieInput);

    // -- 6 : Création de ma fonction
function saisieInput() {
    alert(input.value);
}