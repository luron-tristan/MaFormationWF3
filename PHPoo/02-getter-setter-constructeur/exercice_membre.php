<?php

// Consigne : Au regard de la classe ci dessous, créer un membre, lui affecter un pseudo et un email et afficher les informations :

class Membre
{
    private $pseudo;
    private $email;

    public function getPseudo(){
        return $this -> pseudo;
    }

    public function setPseudo($arg){
        if(!empty($arg) && strlen($arg) > 3 && strlen($arg) < 20 && is_string($arg)){
            $this -> pseudo = $arg;
        }
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setEmail($arg){
        if(!empty($arg) && strlen($arg) > 3 && strlen($arg) < 20 && filter_var($arg, FILTER_VALIDATE_EMAIL)){
            $this -> email = $arg;
        }
    }
}

$membre = new Membre;
$membre -> setPseudo('Triss');
$membre -> setEmail('luront@gmail.com');
echo 'Prenom : ' . $membre -> getPseudo() . ', Email : ' . $membre -> getEmail();