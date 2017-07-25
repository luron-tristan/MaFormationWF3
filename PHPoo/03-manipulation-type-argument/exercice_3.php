<?php

// 

class Vehicule
{
    private $litreEssence; // 5 contenu à un instant t
    private $reservoir; // 50 capacité max du reservoir

    public function getLitreEssence(){
        return $this -> litreEssence;
    }
    public function setLitreEssence($litre){
        $this -> litreEssence = $litre;
    }


    public function getReservoir(){
        return $this -> reservoir;
    }
    public function setReservoir($litre){
        $this -> reservoir = $litre;
    }
}

class Pompe
{
    private $litreEssence; // 800 contenu à un instant t

    public function getLitreEssence(){
        return $this -> litreEssence;
    }
    public function setLitreEssence($litre){
        $this -> litreEssence = $litre;
    }
    // fonction pour la consigne 8
    public function plein(Vehicule $v)
    {
        // On stocke dans une variable la quantité nécessaire pour faire le plein dans le véhicule (soit 50 - ce qu'il y a déjà)
        $difference = $v -> getReservoir() - $v -> getLitreEssence();
        
        // modifier le contenu de ma pompe passant de 800 à 755L (soit 800 - ce dont a besoin le véhicule)
        $this -> setLitreEssence($this -> getLitreEssence() - $difference);

        // modifier le contenu de mon véhicule passant de 5 à 50 (soit ce qu'il y a déjà plus la capacité max moins ce qu'il y a déjà)
        $v -> setLitreEssence($v -> getLitreEssence() + $difference);
    }
}


$vehicule = new Vehicule;
$vehicule -> setLitreEssence(5);
$vehicule -> setReservoir(50);
echo 'Nombre de litres d\'essence dans le vehicule : ' . $vehicule -> getLitreEssence() . 'L<br>';


$pompe = new Pompe;
$pompe -> setLitreEssence(800);
echo 'Nombre de litres d\'essence dans la pompe : ' . $pompe -> getLitreEssence() . 'L<br><hr>';

$pompe -> plein($vehicule);

echo 'Nombre de litres d\'essence dans le vehicule après plein : ' . $vehicule -> getLitreEssence() . 'L.<br>';
echo 'Nombre de litres d\'essence dans la pompe après plein : ' . $pompe -> getLitreEssence() . 'L.<br>';