<?php
class Ecole
{
	public $nom = 'Ifocop';
	public $cp = 94;
	public function __clone()
	{ // Un clone peut se faire en l'absence de cette m�thode. Elle s'ex�cute en cas de clone demand� et s'applique sur l'objet clon� (et non celui qui sert au clonage).
		$this->cp = 92;
	}
}
//--------------------------------------------------
$ecole1 = new Ecole;
$ecole1->cp = 75;
var_dump($ecole1); // object[1]

$ecole2 = new Ecole;
var_dump($ecole2); // object[2]

$ecole3 = $ecole1; // transmission de la r�f�rence [1]
var_dump($ecole3); // object[1]
// lorsque je modifie $ecole1 cela prend effet sur $ecole3 et vice-versa, $ecole1 et $ecole3 sont des r�f�rences qui pointe vers le m�me objet #1. ils repr�sentent le m�me objet.

$ecole3->cp = 91; // modifie $ecole1, $ecole3
echo 'Ecole1> ' . $ecole1->cp . '<hr />';
echo 'Ecole3> ' . $ecole3->cp . '<hr />';

$ecole4 = clone $ecole2; // clone cr�e un objet et recup�re les informations de $ecole2 (le cp passe � 92, voir __clone())
var_dump($ecole4);
//--------------------------------------------------
echo 'ecole1> ' . $ecole1->cp . '<br / >'; // 91
echo 'ecole2> ' . $ecole2->cp . '<br / >'; // 94
echo 'ecole3> ' . $ecole3->cp . '<br / >'; // 91
echo 'ecole4> ' . $ecole4->cp . '<br / >'; // 92
/*****************************
* Communication* 
		En conclusion, j'ai 3 objets et 4 variables qui les repr�sentes.
		Schema
				  RAM
		|----------------------|
		|________Objet1_$cp=91_| <-- repr�sent� par $ecole1, et $ecole3
		|________Objet2________| <-- repr�sent� par $ecole2 (l'origine du clone)
		|________Objet3________| <-- repr�sent� par $ecole4 (la copie apr�s le clone)
		|					   |
		|					   |
		|					   |
		|----------------------|
	les attributs nom et cp sont affect� dans l'objet c'est � dire dans la RAM et non dans la variable qui n'est juste une r�f�rence pointant sur l'objet.
*****************************/