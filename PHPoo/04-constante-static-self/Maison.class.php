<?php
class Maison
{
    public $couleur = 'blanc';
    public static $espaceTerrain = '500m²'; // Appartient à la classe
    private $nbPorte = 10; // Appartient à l'objet
    private static $nbPiece = 7; // Appartient à la classe
    const HAUTEUR = '10m'; // Appartient à la classe

    public function getNbPorte(){
        return $this -> nbPorte;
    }

    public static function getNbPiece(){
        return self::$nbPiece;
    }



}
echo 'Terrain : ' . Maison::$espaceTerrain . '<br>'; // ok, j'accède à un élément de la classe par la classe
echo 'Pièces : ' . Maison::getNbPiece() . '<br>'; // ok, j'accède à un élément private de la classe via un getter appartenant à la classe.
echo 'Hauteur : ' . Maison::HAUTEUR . '<br>'; // ok, j'accède à un élément appartenant à la classe via la classe

//-------------------------
$maison = new Maison;
echo 'Couleur : ' . $maison -> couleur . '<br>'; // ok, j'accède à une propriété public via l'objet.
// echo 'Terrain : ' . $maison -> espaceTerrain . '<br>'; // Erreurn j'essaie d'accéder à une propriété appartenant à la classe par l'objet.
// echo 'Nombre de portes : ' . $maison -> nbPorte . '<br>'; // Erreur : private -> getter
echo 'Nombre de portes : ' . $maison -> getNbPorte(). '<br>'; // ok j'accède à un élément appartenant à l'objet , et private via un getter appartenant à l'objet.

/* 
    Opérateurs :
        $objet  ->     élément d'un objet à l'extérieur de la classe
        $this   ->     élément d'un objet à l'intérieur de la classe
        Class::        élément d'une classe à l'extérieur de la classXe 
        Class::        élément d'une classe à l'extérieur de la classe 
        self::
        
    2 questions à se poser :
        -Est-ce que l'élément est static ?
            -> Si oui, (Classs:: /self::)
                - Est-ce que je suis à l'intérieur ou à l'extérieur de la classe ?
                    -> intérieur : $this ->
                    -> extérieur : $objet ->

            -> Si non, ($objet -> / $this ->:)
                - Est-ce que je suis à l'intérieur ou à l'extérieur de la classe ?
                    -> intérieur : $this ->
                    -> extérieur : $objet ->

    Static signifie qu'un élément appratient à la classe. Pour y accéder in devrra donc l'appeler par la classe (Class:: ou self::). Une propriété peut être modifiée, et tous les objets qui suivront auront la nouvelle valeur (ex: singleton
    
    Const signifie qu'une propruété appartient à la classe et qu'elle ne peut pas être modifiée).


*/