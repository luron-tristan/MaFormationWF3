<?php

class Homme
{
    private $prenom; // propriété private
    private $nom; // propriété private

    public function getPrenom(){
        return $this -> prenom;
    }

    public function setPrenom($arg){
        if(!empty($arg) && strlen($arg) > 3 && strlen($arg) < 20 && is_string($arg)) {
            $this -> prenom = $arg;
        }
        else {
            return false;
        }
    }



}
//---------------------
$homme = new Homme;
// $homme -> prenom = 'Yakine'; // Erreur : La propriété $prenom est private, je n'y ai pas accès à l'extérieur de la classe.
$_POST['prenom'] = 'Tristan';
$homme ->setPrenom($_POST['prenom']);
echo 'prenom : ' . $homme -> getPrenom();

/*
    Pourquoi faire des getter et des setter ?
        - Le PHP est un langage qui ne type pas ses variables. Il faut donc constament vérifier celles-ci, donc mettre une propriété en private, et créer les getter et setter, permet de vérifier une seule fois l'intégrité des données.
        - Tout dev' qui voudra affecter une valeur devra obligatoirement passer par le setter !
        ==> CECI EST UNE BONNE CONTRAINTE !

    $this représente l'objet en cours de manipulation.

    Setter : affecter une valeur
    Getter : récupérer la valeur

    Nous aurons autant de getter/setter que de propriétés private !