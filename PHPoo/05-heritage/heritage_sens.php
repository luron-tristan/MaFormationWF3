<?php

// Transitivité : si B hérite de A et C hérite de B, alors C hérite de A.

class A {
    public function test(){
        return 'test';
    }
}

class B extends A {
    public function test2(){
        return 'test2';
    }
}

class C extends B {
    public function test3(){
        return 'test3';
    }
}
//-------------------
$c = new C;
echo $c -> test() . '<br>';  // Méthode de A accessible par C (héritage indirect)
echo $c -> test2() . '<br>'; // Méthode de B accessible par C (héritage)
echo $c -> test3() . '<br>'; // Méthode de C accessible par C
echo '<hr>';
var_dump(get_class_methods($c)); // Nous retourne test, test2, test3...

/*
    Transitivité :
        Si B hérite de A... 
            Et que C hérite de B
                Alors C hérite de A (indirectement)
--->  Les méthodes protected de A sont également accessibles dans C (pourtant l'héritage est indirecte)


    L'héritage n'est pas :
        -> reflexif : Class D extends D : Ce n'est pas possible, une classe ne peut pas hériter d'elle-même.
        -> symétrique (réciproque) : Ce n'est pas parce que Class E extends F que F extends E automatiquement.
        -> cyclique : Si X extends Y, alors il est impossible que Y extends X.
        -> multiple : Class N extends O, M : En PHP ce n'est pas possible. Pas d'héritage multiple en PHP, mais cela existe dans d'autres langages.

    Une classe peut avoir un nombre infini d'héritiers

*/