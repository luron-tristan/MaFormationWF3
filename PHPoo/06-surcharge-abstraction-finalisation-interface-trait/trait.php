<?php

// Attention, les traits ne fonctionnent que depuis PHP 5.4

trait TPanier
{
    public function affichageProduit(){
        return 'Voici les produits dans le panier !';
    }
}

trait TMembre
{
    public function affichageMembre(){
        return 'Voici le Membre !';
    }
}

class Site
{
    use TPanier;
    use TMembre;
    // use TPanier, TMembre;
    // Cela importe le code présent dans TPanier et TMembre

}

/*
    - Les traits ont été inventés pour repousser les limites de l'héritage non multiple du PHP
    - Une classe peut hériter d'une seule classe mais elle peut importer plusieurs traits.
    - Un trait peut importer un autre trait.
*/