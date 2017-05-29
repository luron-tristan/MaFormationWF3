/* I. Créer un Tableau 3D "PremierTrimestre" contenant la moyenne d'un étudiant pour plusieurs matières.

    Nous aurons donc pour un étudiant, sa moyenne à plusieurs matières.
    
    Par exemple : Hugo LIEGEARD : [ Francais : 12, Math : 19, Physique 4], ... etc
    
    **** Vous allez créez au minimum 5 étudiants ****

II. Afficher sur la page (à l'aide de document.write) pour chaque étudiant, la liste (ul et li) de sa moyenne à chaque matière, puis sa moyenne générale.  */

// -- Petite fonctio de raccourci (lesflemmards.js)

function w(t) {
    document.write(t);
}

function l(e){
    console.log(e)
}

// Création de notre tableau 3D en JS !

var PremierTrimestre = [
    {
        "nom"       :   "LIEGEARD",
        "prenom"    :   "Hugo",
        "moyenne"   :   {
                            "francais"  : 4,
                            "maths"      : 8,
                            "physique"  : 18,
                        }
    },
    {
        "nom"       :   "MANAS",
        "prenom"    :   "Tanguy",
        "moyenne"   :   {
                            "francais"  : 6,
                            "maths"      : 15,
                            "physique"  : 9,
                            "anglais"   : 15.5,
                        }
    },
    {
        "nom"       :   "ARAUJO",
        "prenom"    :   "Thiago",
        "moyenne"   :   {
                            "francais"  : 15,
                            "maths"      : 12,
                            "physique"  : 11,
                        }
    },
];

l(PremierTrimestre);
w('<ol>')
// -- Je souhaite afficcher la liste de mes étudiants.
for(i = 0 ; i < PremierTrimestre.length ; i++) {

    // -- On récuppère l'Objet Etudiant de l'itération
    let Etudiant = PremierTrimestre[i];

    // -- Aperçu dans la console
    l(Etudiant);

    // -- Je définis nombreDeMatieres et la sommeDesNotes 0.
    var nombreDeMatieres = 0, sommeDesNotes = 0;

    // -- Afficher le prénom et le nom d'un étudiant
    w('<li>');
        w(Etudiant.prenom + " " + PremierTrimestre[i].nom);
        // -- Afficher la moyenne de l'étudiant aux différentes matières.
        w('<ul>')
            for(let matiere in Etudiant.moyenne) {

                // l(matiere)
                // l(Etudiant.moyenne[matiere])
                nombreDeMatieres++;
                sommeDesNotes += Etudiant.moyenne[matiere];

                w("<li>");
                    w(matiere + " : " + Etudiant.moyenne[matiere]);
                w("</li>");

            } // -- Fin de la boucle Matière
            w('<li>')
                w("<strong>Moyenne Générale :</strong> " + (Math.round(sommeDesNotes / nombreDeMatieres)));
            w('</li>');

         w('</ul>');
    w('</li>');
} // -- Fin de la boucle pour les étudiants

w('</ol>');

