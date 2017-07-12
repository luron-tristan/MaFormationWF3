<?php
$tab = array();
$tab['villes'] = "";

if(!empty($_POST['pays']))
{
    // exercice : renvoyer dans $tab['resultat'] les villes selon la valeur de l'indice pays
    // sous forme '<option>ville1</option><option>ville2</option>'
    $pays = $_POST['pays'];

    if($pays == 'France')
    {
        $tab['villes'] = '<option>Paris</option>
                            <option>Bordeaux</option>
                            <option>Toulouse</option>
                            <option>Nice</option>';
    }
    elseif($pays == 'Italie')
    {
        $tab['villes'] = '<option>Rome</option>
                            <option>Turin</option>
                            <option>Gênes</option>
                            <option>Milan</option>';
    }
    elseif($pays == 'Espagne')
    {
        $tab['villes'] = '<option>Madrid</option>
                            <option>Seville</option>
                            <option>Valence</option>
                            <option>Barcelone</option>';
    }
}


echo json_encode($tab);