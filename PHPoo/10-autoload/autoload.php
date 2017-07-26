<?php

function inclusion_automatique($className){
    // la class A est dans le fichier a.class.php
    require $className . '.class.php';

    // -----------------
    echo 'On passe dans l\'autoload<br>';
    echo 'On fait un : require "' . $className . '.class.php"<br>';
}


//----------------------
spl_autoload_register('inclusion_automatique');
//----------------------
/*
    spl_autoload_register :
        - Est une fonction super pratique, qui va s'exécuter lorsqu'elle voit passer le mot clé 'New'.
        - Elle va lancer une fonction, celle que nous allons lui préciser en argument.
        - Elle va apporter à ma fonction le(s) mot(s) qui suit le mot clé 'New'.
        --> CAD le nom de la classe !
*/