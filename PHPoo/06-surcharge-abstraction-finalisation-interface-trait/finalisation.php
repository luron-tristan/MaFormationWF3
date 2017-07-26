<?php

final class Application
{
    public function run(){
        return 'L\'application se lance';
    }
}
//------------------------------
$app = new Application;
echo $app -> run();
// class Extension extends Application{} // Une classe finale ne peut être héritée

class Application2
{
    final public function run2(){
        return 'L\'application se lance';
    }
}
class Extension2 extends Application2
{
    // public function run2(){} // Une méthode finale ne peut pas être redéfinie, ni surchargée
}

/*
    - une classe finale ne peut être héritée
    - une classe finale ne peut être instanciée

    - une méthode finale peut être présente dans une classe normale
    - une méthode finale ne peut pas être surchargée, ni redéfinie.
*/