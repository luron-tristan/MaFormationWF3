<?php

class Animal {
    protected function deplacement() {
        return 'Je me déplace !';
    }

    public function manger() {
        return 'Je mange';
    }
}
//--------------------
class Elephant extends Animal
{
    public function quiSuisJe(){
        return 'Je suis un éléphant et ' . $this -> deplacement() . ' !';
        // Je peux appeler la méthode deplacement avec $this -> car on hérite également des méthodes protected.
    }
}

class Chat extends Animal
{
    public function quiSuisJe(){
        return 'Je suis un chat !';
    }

    public function manger(){
        return 'Je mange peu... Car je suis un chat !';
        // La fontion manger existe déjà dans la classe mère (Animal)... Mais puissque mon entité Chat a des caractéristiques particuliuères (manger peu) on peut redéfinir une méthode héritée.
    }
}

$eleph = new Elephant;
echo 'Elephant : ' . $eleph -> quiSuisJe() . '<br>';
echo 'Elephant : ' . $eleph -> manger() . '<hr>';

$chat = new Chat;
echo 'Chat : ' . $chat -> quiSuisJe() . '<br>';
echo 'Chat : ' . $chat -> manger() . '<hr>';

/*
    L'héritage est un des fondements de la programmation objet.
    Lorsqu'une classe hérite d'un autre classe, elle importe etout le code. Les éléments sont donc appelés avec $this -> (à l'intérieur de la classe).

Redéfinition : Une classe enfant (héritière) peut modifier entièrement le comportement d'une méthode dont elle a hérité. Lors de l'exécution, l'interpréteur va dans un premier temps regarder dans la classe enfant si la méthode existe... Puis dans la classe mère.

REDEFINITION != SURCHARGE (voir chapitres 6)
*/