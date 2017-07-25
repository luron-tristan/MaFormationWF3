<?php

class Membre
{
    public $id_membre;
    public $pseudo;
    public $email;

    public function seConnecter(){
        return 'Je me connecte !';
    }
    
    public function inscription(){
        return 'Je m\'inscris !';
    }

}
//-----------------
class Admin extends Membre // la classe Admin hérite de la classe Membre
{
    // C'est comme si tout le code de Membre était présent ici !

    public function accesBackOffice(){
        return 'J\'ai accès au BO !';
    }
}
//-----------------------
$admin = new Admin;
echo $admin -> seConnecter() . '<br>';
echo $admin -> inscription() . '<br>';
echo $admin -> accesBackOffice() . '<br>';

/*
Dans notre site, un admin est avant tout un membre, avec une ou plusieurs fonctionnalités supplémentaires : l'accès au BO.
Il est donc naturel que la classe Admin extends la classe Membre et qu'on ne réécrive pas tout le code deux fois !

*/