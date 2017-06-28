<?php

// Fonction pour savoir si un utilisateur est connecté
function utilisateur_est_connecte()
{
    if(isset($_SESSION['utilisateur']))
    {
        // Si l'indice utilisateur existe alors l'utilisateur est connecté car il est passé par la page de connexion
        return true; // Si on passe sur cette ligne, on sort de la fonction et le return false en dessous ne sera pas pris en compte.
    }
    return false; // Si on ne rentre pas dans le if, on retourne false.
}

// fonction pour savoir si un utilisateur est connecté mais aussi s'il a le statut administrateur.
function utilisateur_est_admin()
{
    if(utilisateur_est_connecte() && $_SESSION['utilisateur']['statut'] == 1)
    {
        return true;
    }
    return false;
}