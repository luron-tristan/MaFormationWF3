<?php

/* En objet :
    variable = propriété
    fonction = méthode
*/

class Panier
{
    public $nbProduit; // Propriété (défaut : NULL)

    // echo 'Bonjour ! '; Erreur, tout le code des classes doit être encapsulé dans des méthodes (fonctions)

    public function ajouterProduit(){
        // Traitements de ma méthode
        return 'Le produit a été ajouté au panier ! ';
    }

    protected function retirerProduit(){
        return 'Le produit a été retiré du panier ! ';
    }

    private function affichagePanier(){
        return 'Voici les produits dans le panier ! ';
    }
}
//---------------------------------
$panier = new Panier;
echo '<pre>';
var_dump($panier);
var_dump(get_class_methods($panier));
echo '</pre>';

$panier -> nbProduit = 5; // J'affecte la valeur à la propriété $nbProduit;
echo 'Le nombre de produits dans le panier est : ' . $panier -> nbProduit . ' !<br>'; // Me retourne la valeur affectée dans la propriété $nbProduit de mon objet.
echo '<pre>'; var_dump($panier); echo '</pre>';

echo 'Panier : ' . $panier -> ajouterProduit() . '<br>';

// echo 'Panier : ' . $panier -> retirerProduit() . '<br>';
// echo 'Panier : ' . $panier -> affichagePanier() . '<br>';

// En l'état, seuls les éléments publics sont accessibles.

$panier2 = new Panier;
echo '<pre>';
var_dump($panier);
echo '</pre>';

// La propriété nbProduit de $panier2 est nulle alors que celle de panier contient la valeur 5



/*
Commentaires :
    - new est un mot clé qui permet de créer un objet d'une classe. On parle d'instanciation.

    - On peut créer plusieurs objets d'une même classe.

    - Niveau de visibilité :
        --> public : les éléments sont accessibles de partout
        --> protected : les éléments sont accessibles de la classe à l'intérieur de laquelle ils ont été déclarés et à l'intérieur des classes héritières
        --> private : les éléments sont accessibles UNIQUEMENT à l'intérieur des la classe où ils sont déclarés.

*/




















