/* --------------------------------
    LA MANIPULATION DES CONTENUS
-------------------------------- */

function l(e) {
    console.log(e);
}

// -- Je souhaite récupérer mon lien, comment procéder ?
var google = document.getElementById("google");
l(google)

// -- Maintenant, je souhaite accéder aux informations de ce lien; par exemple:

    // -- A : Le lien vers lequel pointe la balise
    l("Le lien vers lequel pointe la balise :");
    l(google.href);

    // -- B : L'ID de la balise
    l("L'ID de la balise :");
    l(google.id);

    // -- C : La classe de la balise
    l("La classe de la balise");
    l(google.className);

    // -- D : Le texte de la balise (l'élément)
    l("Le texte de la balise");
    l(google.textContent);

    // -- Maintenant, je souhaite modifier le contenu de mon lien
    // -- Comme une variable classique, je vais simplement affecter une nouvelle valeur
    google.textContent = "Mon lien vers Google !";

    /* ------------------------------------------
        AJOUTER UN NOUVEL ELEMENT DANS MA PAGE
    ------------------------------------------ */

// -- 1 : La fonction document.createElement() va permettre de générer un nouvel élément dans le DOM, que je pourrai pas la suite modifier avec les méthodes que nous venons de voir

    // PS : Ce nouvel élément est placé en mémoire.

    // -- Définition d'un élément
    var span = document.createElement("span");

    // -- Si je souhaite lui donner un ID
    span.id = "MonSpan";

    // -- Si je souhaite lui attribuer du contenu
    span.textContent = " Mon beau texte en JS";

// -- 2 : La fontion appendChild() va me perlettre de rajouter un élément enfant à un élément du DOM.
google.appendChild(span);


/* -------------------------------------
        EXERCICE
En partant du travail déjà réalisé sur la page.
Créez directement daans la page une balise <h1></h1> ayant comme contenu : "Titre de mon article".

Dans cette balise, vous créerez un lien vers une url de votre choix.

BONUS : Ce lien sera de couleur rouge et non souligné.
------------------------------------- */


// -- Création de la balise h1
var h1 = document.createElement("h1");

// -- Création de la balise a
var a = document.createElement("a");

// -- Je vais donner un titre à mon lien
a.textContent = "Titre de mon article";

//  -- je veux donner un lien à mon lien :
a.href = "#";

//  -- appendChild()

    // -- Je mets mon lien (a) dans mon h1
    h1.appendChild(a);

    // -- Je mets mon h1 dans ma page, dans mon body
    document.body.appendChild(h1);

// -- Correction du BONUS

    // -- Je veux que mon lien soit de couleur rouge
    a.style.color = "red";

    // -- Je veux que mon lien ne soit pas souligné
    a.style.textDecoration = "none";