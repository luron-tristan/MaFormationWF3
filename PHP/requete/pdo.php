<?php
/*
// PDO => Php Data Object
//--------------------------------------------------------------------------------------

// EXEC()
    INSERT, UPDATE, DELETE: Exec() est une méthode de l'objet PDO qui est utilisée pour la formulation de requête ne retrounant pas de résultat.
    Valeur de retour:
    ----------------
    succes => on obtient un entier (int) correspondant au nombre de lignes affectées.
    echec => on obtient le booléen false

// QUERY()
    INSERT, UPDATE, DELETE, SELECT, SHOW, ...: Query() est utilisé pour tout type de requête.
    Valeur de retour:
    ----------------
    succes => on obtient un nouvel objet issu de la class PDOStatement
    echec => on obtient le booléen false

// PREPARE() + EXECUTE()
    INSERT, UPDATE, DELETE, SELECT, SHOW, ...: prepare() permet de préparer la requête mais ne l'exécute pas; execute() exécute la requête.
    Valeur de retour:
    ----------------
    prepare() => on obtient un nouvel objet issu de la classe PDOStatement
    execute() =>
        succes => PDOStatement
        echec => false

    // Les requêtes préparées sont à préconiser pour sécuriser les données.
    // Cela permet également d'éviter le cycle complet d'une requête:
        analyse / interprétation / exécution

*/

echo "<h1>1 - Connexion à une BDD</h1>";
$pdo = new PDO('mysql:host=localhost;dbname=wf3_entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// Arguments: 1 - (serveur + nom_bdd) 2 - identifiant 4 - mot de passe 4 - options
// echo '<pre>'; var_dump($pdo); echo '</pre>';
// echo '<pre>'; var_dump(get_class_methods($pdo)); echo '</pre>';
// Objet représentant la connexion à la base de données.

echo "<h1>2 - PDO: exec()</h1>";
// insert
// $resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, salaire, date_embauche) VALUES ('prenomtest', 'nomtest', 'm', 'informatique', 2000, '2017-06-22')");
// echo "nombre de lignes insérées dans la dernière requête: " . $resultat . '<br>';
// Pour récupérer le dernier id inséré:
// echo $pdo->lastInsertId();

echo "<h1>3 - PDO QUERY => SELECT + FETCH (pour un seul résultat)</h1>";
$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes=350");
echo '<pre>'; var_dump($resultat); echo '</pre>';
// echo '<pre>'; var_dump(get_class_methods($resultat)); echo '</pre>';

// En l'état, $resultat est inexploitable, nous devons le traiter avec la méthode fetch afin de rendre les informations exploitables.

$info_employe = $resultat->fetch(PDO::FETCH_ASSOC); // FETCH_ASSOC pour un tableau array associatif( le nom des colonnes comme indices du tableau)

// $info_employe = $resultat->fetch(PDO::FETCH_NUM); // FETCH_NUM pour un tableau indexé numériquement

// $info_employe = $resultat->fetch(PDO::FETCH_BOTH); // C'est le mode par défaut // FETCH_BOTH est un mélange de FETCH_ASSOC + FETCH_NUM

// $info_employe = $resultat->fetch(PDO::FETCH_OBJ); // FETCH_OBJ pour obtenir un objet avec les éléments disponibles en propriétés publiques.

echo '<pre>'; print_r($info_employe); echo '</pre>';

echo $info_employe['prenom']; // avec FETCH_ASSOC
// echo $info_employe[1] . '<hr>'; // Avec FETCH_NUM
// echo $info_employe->prenom . '<hr>'; // avec FETCH_OBJ
echo "<hr><br>";
/*
$pdo représente un objet[1] issu de la classe prédéfinie PDO
Quand on exécute une requête de séléction avec la méthode qurey sur notre objet $pdo, on obtient un nouvel objet[2] issu de la classe PDOStatement. Cet objet a donc des propriétés et méthodes différentes.

- $resultat représente la réponse de la BDD et c'est un résultat inexploitable en l'état.
- $info_employé est la réponse exploitable (grâce au fetch())
- /!\ Attention, il faut choisir l'un de ces traitements fetch(PDO::...)
- il n'est pas possible d'appliquer plusieurs traitements fetch sur un même résultat.

- Le résultat est la réponse de la BDD et est inexploitable car MySQL nous renvoie beaucoup d'informations. Le fetch permet de les organiser.
*/

echo "<h1>4 - PDO: QUERY + WHILE + FETCH (plusieurs résultats)</h1>";
$resultat = $pdo->query("SELECT * FROM employes");

echo "Le nombre d'employés: " . $resultat->rowCount() . '<br>'; // La méthode rowCount() de l'objet PDOStatement retourne le nombre de lignes dans notre résultat.
while($info_employe = $resultat->fetch(PDO::FETCH_ASSOC))
{
    // à chaque tour de la boucle, on traite avec un fetch la ligne en cours et on passe à la suivante.
    // echo '<pre>'; print_r($info_employe); echo'<pre>'; echo '<hr>';
    echo '<div style="box-sizing: border-box; padding: 10px; background-color: darkred; color: white; display: inline-block; width: 23%; margin: 1%;">';

    echo 'Id_employes: ' . $info_employe['id_employes'] . '<br>';
    echo 'Nom:' . $info_employe['nom'] . '<br>';
    echo 'Prénom: ' . $info_employe['prenom'] . '<br>';
    echo 'Salaire: ' . $info_employe['salaire'] . '<br>';
    echo 'Sexe: ' . $info_employe['sexe'] . '<br>';
    echo 'Service: ' . $info_employe['service'] . '<br>';
    echo 'Date d\'embauche: ' . $info_employe['date_embauche'] . '<br>';

    echo '</div>';
}

echo "<h1>5 - EXERCICE</h1>";
// Récupérer la liste des BDD présentes sur le serveur.

// Les traiter puis les afficher dans une liste ul li.

// Attention à l'indice si vous utilisez FETCH_ASSOC (Les indices sont sensibles à la casse) Sur cette requête il y a une majuscule dans l'indice récupéré.

$pdo = new PDO('mysql:host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$resultat = $pdo->query("SHOW DATABASES");
echo '<ul>';
while($bdd = $resultat->fetch(PDO::FETCH_ASSOC))
{

    foreach($bdd AS $val)
    {
        echo '<li>' . $val;
    }
}
echo '</ul><br><br><hr>';




echo "<h1>6 - PDO : QUERY + FETCHALL + FETCH_ASSOC (plusieurs résultats)</h1>";
$pdo = new PDO('mysql:host=localhost;dbname=wf3_entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$resultat = $pdo->query("SELECT * FROM employes");
// fetchAll
$liste_employes = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($liste_employes); echo '</pre>'; echo '<hr>';
// fetchAll() traite toutes les lignes dans notre résultat et on obtient un tableau array multidimensionnel
// 1er niveau : la ligne en cours, 2e niveau : les informations de la ligne

foreach($liste_employes AS $valeur)
{
    echo $valeur['prenom'] . '<br>';
}

echo '<br><br><hr>';


echo "<h1>6 - PDO : QUERY + FETCHALL + FETCH_ASSOC (plusieurs résultats)</h1>";
$resultat = $pdo->query("SELECT nom, prenom, salaire, service FROM employes");
echo '<pre>'; print_r($resultat); echo '</pre>';

// Balise ouverture du tableau
echo '<table border="1" style="width: 80%; margin: 0 auto; border-collapse: collapse; text-align: center;">';
// Première ligne du tableau pour le nom des colonnes
echo '<tr>';
// récupération du nombre de colonnes dans la requête:
$nb_col = $resultat->columnCount();

for($i = 0; $i < $nb_col; $i++)
{
    $colonne = $resultat->getColumnMeta($i); // On récupère les informations de la colonne en cours afin ensuite de demander le name
    echo '<th style="padding: 10px;">' . $colonne['name'] . '</th>';
}
echo '</tr>';

while($ligne = $resultat->fetch(pdo::FETCH_ASSOC))
{
    echo '<tr>';
    foreach($ligne AS $info)
    {
        echo '<td style="padding: 10px;">' . $info . '</td>';
    }
    echo '</tr>';
}


echo '</table><br><hr>';

//---------------------------------------------------------------------------------------
// ****************************** SECURISATION DES DONNEES ******************************
//---------------------------------------------------------------------------------------

echo "<h1>8 - PDO : PREPARE + BINDPARAM + EXECUTE</h1>";
$nom =  "Laborde";

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom"); // :nom est un marqueur nominatif

// Nous pouvons maintenant fournir la valeur du marqueur :nom
$resultat->bindParam(":nom", $nom, PDO::PARAM_STR); // bindParam(nom_du_marqueur, valeur_du_marqueur, type_attendu)

$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees); echo '</pre>';

// BINDPARAM n'accepte que des valeurs sous forme de variable !!




echo "<h1>implode() et explode() (fonctions prédéfinies PHP)</h1>";
// implode() permet d'afficher tous les éléments d'un tableau array séparées par un séparateur fourni en 1er argument
// explode() découpe une chaine de caractères selon un séparateur fourni en 1er argument et place chaque segment de cette chaine dans un tableau array à des indices différents.
// exemple:
echo implode('<br>', $donnees);
echo "<hr><hr><hr>";



echo "<h1>8 - PDO : PREPARE + BINDVALUE + EXECUTE</h1>";
$resultat = $pdo->prepare("SELECT * FROM employes WHERE id_employes = :id"); // :nom est un marqueur nominatif
$resultat->bindValue(":id", 350, PDO::PARAM_INT); // bindValue(nom_du_marqueur, valeur_du_marqueur, type_attendu)
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees); echo '</pre>';

// BINDVALUE accepte une variable ou la valeur directement pour le marqueur. (Ce n'est pas le cas de bindParam qui n'accepte qu'une variable)








echo "<br><br><br><br><br><br><br><br>";