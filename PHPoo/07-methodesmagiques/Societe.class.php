<?php
class Societe
{
	public $adresse;
	public $ville;
	public $cp;
	public function __construct(){}
	public function __set($nom, $valeur) // se d�lenche uniquement en cas de tentative d'affectation sur une propri�t� qui n'existe pas
	{
		echo "La propri�t� $nom n'existe PAS, la valeur $valeur n'a donc pas �t� affect�e!<hr />";
	}
	public function __get($nom)  // se d�lenche uniquement en cas de tentative d'affichage sur une propri�t� qui n'existe pas
	{
		echo "La propri�t� $nom n'existe PAS, on ne peut donc pas l'afficher!<hr />";
	}
	public function __call($nom, $argument) // se d�lenche uniquement en cas de tentative d'ex�cution sur une propri�t� qui n'existe pas
	{
		echo "Tentative d'ex�cuter la m�thode $nom mais elle n'existe PAS. <br /> Les arguments �taient " . implode("-",$argument) . '<hr />';
	}
	/*
	Pour information, d'autres m�thodes magiques existe :
	__callStatic($nom, $argument) : pour les m�thodes 'static'.
	__isset($nom) : se lance lors d'une condition isset/empty sur une propri�t�
	__destruct() : se lance � la fin de l'ex�cution du script. Pratique pour fermer la connexion � la BDD ou fermer un fichier en �criture.
	__toString() : se lance lorsque un objet tente d'�tre affich� par un 'echo'
	il y a aussi : __wakeup(), __sleep(), __invoke(), __clone() ...
	*/
}
//------------------------------------
$societe1 = new Societe;
// $societe1->villes = 'Paris'; // 1er test : lorsque nous tentons d'affecter une valeur � une propri�t� inexistante, cela fonctionne et ajoute la propri�t� ainsi que la valeur � l'objet. (anormal).
// echo $societe1->titre; // 2e test : erreur undefine, normal, la propri�t� n'existe pas, elle ne peut donc pas �tre affich�e.
// $societe1->methode(); // 3e test : fatal erreur, normal, la m�thode n'existe pas

$societe1->pays = 'France'; // d�clenchement de la m�thode __set() au lieu de la cr�ation d'une nouvelle propri�t�.
$societe1->ville = 'Paris'; // La propri�t� existe, aucun d�clenchement. tout va bien.
echo $societe1->titre;  // d�clenchement de __get() au lieu d'une erreur unedifine.
echo $societe1->fsdfdssdf(1,2,3); // d�clenchement de __call() au lieu d'une fatal error.

print '<pre>'; print_r($societe1); print '</pre>'; // A noter pour voir ce qu'il y a dans notre objet.
/*
Commentaire :
	Tentative d'affecter une propri�t� qui n'existe pas
		PHP d'origine : �a marche (pas normal), la propri�t� est cr��e, la valeur est affect�e (et c'est l'un des seuls langages qui laisse passer �a, PHP est trop permissif, variable non typ�s, etc).
		Avec __set : pas d'affectation si la propri�t� n'existe pas, et possibilit� d'adresser un message d'erreur trait� en Fran�ais (c'est une sorte de pansement pour une incoh�rence)

	Tentative d'affichage d'une propri�t� qui n'existe pas
		PHP d'origine : unedifine (normal)
		Avec __get : pas d'erreur sale, et possibilit� d'adresser un message d'erreur trait� en Fran�ais

	Tentative d'ex�cuter une m�thode qui n'existe pas
		PHP d'origine : Fatal error (normal)
		Avec __call : pas d'erreur sale, et possibilit� d'adresser un message d'erreur trait� en Fran�ais

	En PHP, il n'y a pas assez d'erreur orange.
	On dit qu'un site ou une application est vraiment fini quand tous les cas sont pr�vu.
	Sur un site, vous vous authentifier, ca ne fonctionne pas, il y'a �crit "erreur d'authentification", c'est une erreur propre, pas de message d'erreur orange, warning et compagnie.