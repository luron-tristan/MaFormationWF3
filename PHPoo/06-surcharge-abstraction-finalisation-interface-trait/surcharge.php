<?php

// Surcharge (override) : Permet de mofidier le comportement d'une méthode héritée, et d'y apporter le complément supplémentaire.
// Surcharge != redéfinition

class A
{
    public function calcul(){
        return 10;
    }
}

class B extends A
{
    public function calcul(){
        // return 15 (10 + 5)

    // return $this -> calcul() + 5; // Cela est récursif, car en utilisant $this -> la fonction fait appel à elle même.

        return parent::calcul() + 5;
        // return A::calcul() + 5
        // Avec les deux propositions ci-dessus; on fait réellement appel à la méthode de NOTRE PARENT (class A)
    }
}

/*
    La surcharge est très utile dans le cadre de l'héritage, car permet d'ajouter (modifier) des traitements dans une méthode héritée.
    Oar exemple, lorsqu'on travaille sur un CMS ou un framework, on n'a pas le droit de toucher aux fichiers du coeur de l'application, mais on peut hériter de certaines classes, et potentiellement modifier les traitements de certaines méthodes.

*/