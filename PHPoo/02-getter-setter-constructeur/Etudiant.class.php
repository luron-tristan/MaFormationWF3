<?php
class Etudiant
{
    private $prenom;

    public function __construct($argument){
        $this -> setPrenom($argument);
    }


    public function getPrenom() {
        return $this -> prenom;
    }
    public function setPrenom($prenom) {
        $this -> prenom = $prenom;
    }
}
//-------------------------
$etudiant = new Etudiant('Tristan');
echo $etudiant -> getPrenom();

/*
    - La méthode magique __construct() s'exécute automatiquement au moment de l'instanciation.
    - Il n'est pas obligatoire de la déclarer, en théorie on ne la déclare que si on a besoin d'automatiser un traitement.
    - On l'utilise souvent pour déployer automatiquement notre application (instance sans héritage par exemple, voir chapitre 5).
    - Toutes les méthodes magiques s'écrivent ave le double underscore (__)
*/