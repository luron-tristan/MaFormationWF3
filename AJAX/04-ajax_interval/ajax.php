<?php
require_once('inc/init.inc.php');
 
$tab = array();
$tab['tableau'] = '';

$table = $pdo->query("SELECT * FROM employes");

$tab['tableau'] .= "<table class = 'table table-striped table-bordered table-hover'><thead>";
$nb_col = $table->ColumnCount();
for($i = 0; $i < $nb_col; $i++)
{
    $colonne = $table->getColumnMeta($i);
    $tab['tableau'] .= '<th>' . $colonne['name'] . '</th>';
}
$tab['tableau'] .= '</thead><tbody>';


while($ligne = $table->fetch(PDO::FETCH_ASSOC))
{   
    $tab['tableau'] .= '<tr>';
    foreach($ligne AS $val)
    {
        $tab['tableau'] .= '<td>' . $val . '</td>';
    }
    $tab['tableau'] .= '</tr>';
}

$tab['tableau'] .= '</tbody></table>';


echo json_encode($tab);