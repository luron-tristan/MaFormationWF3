<?php

// Design Patterns (patron de conception) :
// C'est une réponse trouvéé par d'autres dev à un problème rencontré par la communauté

// Singleton : C'est la réponse à la question suivante : Comment faire pour créer une classe qui ne peut être instanciable qu'UNE SEULE ET UNIQUE FOIS ?

class Singleton
{
    private static $instance = NULL;
    private function __construct(){} // Fonction private, donc la classe ne peut pas être instanciée...
    private function __clone(){} // Fonction private, donc l'objet de la classe ne pouurra pas être cloné

    public static function getInstance(){
        // if(!self::$instance){}
        if(is_null(self::$instance)){
            self::$instance = new Singleton();
            // self::$instance = new Singleton;
            // self::$instance = new self;
        }
        return self::$instance;
    }
}
//--------------------------------
// $singleton = new Singleton; // IMPOSSIBLE !!!

$objet = Singleton::getInstance();
echo '<pre>'; var_dump($objet); echo '</pre>';