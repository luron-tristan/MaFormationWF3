<?php
require_once("inc/init.inc.php");

$tab = array();
$tab['resultat'] = '';

$arg    = isset($_POST['arg'])  ? $_POST['arg']     : "";
$mode   = isset($_POST['mode']) ? $_POST['mode']    : "";


if($mode == 'liste_membre_connecte' && !empty($arg) && $arg == 'retirer')
{
    // Si on rentre ici, on doit récupérer la liste des membres dur le fichier pseudo.txt // Attention au sens entre cette condition et la suivante car la valeur de $mode est la même pour les deux.

    // on récupère le contenu de pseudo.txt
    $contenu = file_get_contents("pseudo.txt");

    // on remplace dans la chaine de caractères représentée par $contenu le pseudo par rien (pour le supprimer)
    $contenu = str_replace($_SESSION['utilisateur']['pseudo'], '', $contenu);

    // on remet le contenu modifié dans le fichier
    file_put_contents('pseudo.txt', $contenu);
    
}
elseif($mode == 'liste_membre_connecte')
{
    // Si on rentre ici, on doit récupérer la liste des membres sur le fichier pseudo.txt puis la renvoyer
    $fichier = file("pseudo.txt");
    if(!empty($fichier))
    {
        // implode() permet de récupérer les valeurs d'un tableau array et de les renvoyer sous forme de chaine de caractères séparées par un séparateur fourni en premier argument
        $tab['resultat'] .= '<p>' . implode('</p><p>', $fichier) . '</p>';
    }
}
elseif($mode == "postMessage")
{
    // si la valeur de mode est égale à postMessage alors nous devons enregistrer le message de l'utilisateur
    if(!empty($arg)) // $arg est censé contenir le message à enregistrer, donc s'il n'est pas vide on l'enregistre
    {
        $id = $_SESSION['utilisateur']['id_membre'];
        $enregistrement = $pdo->prepare("INSERT INTO dialogue (id_membre, message, date_dialogue) VALUES ($id, :message, NOW())");
        $enregistrement->bindParam(":message", $arg, PDO::PARAM_STR);
        $enregistrement->execute();

        $tab['resultat'] .= '<br><p>Message enregistré</p>';
    }
}
elseif($mode == 'message_tchat')
{
    // Exercice: récupérer tous lesmessages de la bdd ainsi que les pseudos correspondant
    // les renvoyer dans $tab['resultat']
    // chaque message doit être affiché sous la forme: pseudo > message
    // faire en sorte que les pseudos des messages postés par les hommes et les femmes soient d'une couleur différente.

    $message = $pdo->query('SELECT d.message, m.pseudo, m.sexe 
    FROM dialogue d, membre m
    WHERE d.id_membre = m.id_membre
    ORDER BY d.date_dialogue ASC');

    foreach($message AS $affichage)
    {
        if($affichage['sexe'] == 'm')
        {
            $tab['resultat'] .= '<span class = "bleu">' . $affichage['pseudo'] . '</span> ' . '&#62 ' . $affichage['message'] . '<br>';
        }
        else
        {
            $tab['resultat'] .= '<span class = "rose">' . $affichage['pseudo'] . '</span> ' . '&#62 ' . $affichage['message'] . '<br>';
        }
    }

    /* Autre possibilité:

    while($affichage = $message->fetch(PDO::FETCH_ASSOC))
    {
        if($affichage['sexe'] == 'm')
        {
            $couleur = 'bleu';
        }
        else
        {
            $couleur = 'rose';
        }
        $tab['resultat'] .= '<p><span class="' . $couleur . '">' . $affichage['pseudo'] . '</span> >' . $affichage['message'] . '</p>';
    }

    */

}


echo json_encode($tab);