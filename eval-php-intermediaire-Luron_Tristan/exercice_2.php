<?php

// Déclaration de ma fonction
function conversion($valeur, $devise_de_sortie)
{
    // Mise en place des paramètres
    $resultat = 0;
    $devise = $devise_de_sortie;

    // Contrôle du type des paramètres
    settype($valeur, "float");
    settype($devise, "string");

    // Mise en place de la condition pour la conversion vers la devise de sortie
    if($devise == 'USD')
    {   
        // 1€ = 1.1394$
        $resultat = $valeur * 1.1394;
        echo $valeur . '€ =>' . $resultat . '$<br>';
    }
    elseif($devise == 'EUR')
    {
        // 1$ = 0.8777€
        $resultat = $valeur * 0.8777;
        echo $valeur . '$ =>' . $resultat . '€<br>';
    }
    return $resultat;
}

conversion(100, 'USD');
conversion(100, 'EUR');







?>