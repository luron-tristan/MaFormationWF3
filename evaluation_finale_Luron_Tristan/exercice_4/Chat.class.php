<?php

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    public function __construct($prenom, $age, $couleur, $sexe, $race){
        $this -> setPrenom($prenom);
        $this -> setAge($age);
        $this -> setCouleur($couleur);
        $this -> setSexe($sexe);
        $this -> setRace($race);
    }


    public function getPrenom() {
        return $this -> prenom;
    }
    public function setPrenom($arg) {
        if(!empty($arg) && strlen($arg) >= 3 && strlen($arg) <= 20 && is_string($arg)) {
            $this -> prenom = $arg;
        }
        else {
            return false;
        }
    }


    public function getAge() {

        return $this -> age;
    }
    public function setAge($arg) {
        if(!empty($arg) && is_numeric($arg))
            $this -> age = $arg;
        else {
            return false;
        }
    }


    public function getCouleur() {
        return $this -> couleur;
    }
    public function setCouleur($arg) {
        if(!empty($arg) && is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 10) {
            $this -> couleur = $arg;
        }
        else {
            return false;
        }
    }


    public function getSexe() {
        return $this -> sexe;
    }
    public function setSexe($arg) {
        if(!empty($arg) && is_string($arg) && ($arg == 'male' || $arg == 'femelle')) {
            $this -> sexe = $arg;
        }
        else {
            return false;
        }
    }


    public function getRace() {
        return $this -> race;
    }
    public function setRace($arg) {
        if(!empty($arg) && strlen($arg) >= 3 && strlen($arg) <= 20 && is_string($arg)){
            $this -> race = $arg;
        }
        else {
            return false;
        }
    }

    
}