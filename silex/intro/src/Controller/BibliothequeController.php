<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Silex\Application;

class BibliothequeController 
{
    public function abonnesAction(Application $app)
    {
        $abonnes = $app['db']->fetchAll('SELECT * FROM abonne');

        return $app['twig']->render(
            'bibliotheque/abonnes.html.twig',
            [
                'abonnes' => $abonnes
            ]
        );
    }
    
    public function abonneDetailAction(Application $app, $id){
        $abonne = $app['db']->fetchAssoc(
            'SELECT * FROM abonne WHERE id_abonne = :id',
            [':id' => $id]
            );
        
        return $app['twig']->render(
            'bibliotheque/abonne.html.twig',
            [
                'abonne' => $abonne
            ]
            );
    }
    
    public function abonneAjoutAction(Application $app)
    {
        if(!empty($_POST)){
            $app['db']->insert(
            'abonne', // nom de la table
            [
                'prenom' => $_POST['prenom']
            ] // tableau des valeurs à insérer (les clés sont les noms des champs en bdd)
            ); 
        
        return $app->redirect(
            $app['url_generator']->generate('abonnes')
        ); // redirection vers une route
        
        }
        
        return $app['twig']->render(
            'bibliotheque/abonne_ajout.html.twig'
        );
    }
    
    public function abonneModifAction(Application $app, $id)
    {
        $abonne = $app['db']->fetchAssoc(
            'SELECT * FROM abonne WHERE id_abonne = :id',
            [':id' => $id]
        );
        
        if(empty($abonne)){
            // Pour jeter une 404
            $app->abort(404, "Aucun abonne avec l'id $id");
        }
        
        if(!empty($_POST)){
            $app['db']->update(
            'abonne', // nom de la table
            [
                'prenom' => $_POST['prenom']
            ], // tableau des valeurs à modifier (les clés sont les noms des champs en bdd)
            [
                'id_abonne' => $id
            ] // tableau pour la clause WHERE (ici WHERE id_abonne = $id)
            );

            return $app->redirect(
            $app['url_generator']->generate('abonnes')
            ); // redirection vers une route
        
        }
        
        return $app['twig']->render(
            'bibliotheque/abonne_modif.html.twig',
            [
                'abonne' => $abonne
            ]
        );
    }
    
    public function abonneSupprimerAction(Application $app, $id)
    {
        $app['db']->delete(
            'abonne', // nom de la table
            [
                'id_abonne' => $id
            ] // clause WHERE
        );
        
        return $app->redirect(
            $app['url_generator']->generate('abonnes')
        ); // redirection vers une route
    }
            
    // Créer une page qui liste les emprunts avec
    // - id de l'emprunt
    // - prénom de l'abonné
    // - auteur et titre du livre
    // - date sortie et rendu au format français
    // - si non rendu case vide
    
    public function abonnesEmpruntsAction(Application $app)
    {
//        $abonnes_emprunts = $app['db']->fetchAll(
//            'SELECT e.id_emprunt, a.prenom, l.auteur, l.titre, e.date_sortie, e.date_rendu
//             FROM abonne a, emprunt e, livre l
//             WHERE a.id_abonne = e.id_abonne
//             AND e.id_livre = l.id_livre
//             ORDER BY id_emprunt'
//        );
        
        $abonnes_emprunts = $app['db']->fetchAll(
            'SELECT e.id_emprunt, a.prenom, l.auteur, l.titre, e.date_sortie, e.date_rendu
             FROM abonne a, emprunt e, livre l
             WHERE a.id_abonne = e.id_abonne
             AND e.id_livre = l.id_livre
             ORDER BY id_emprunt'
        );
        
        return $app['twig']->render(
            'bibliotheque/abonnes_emprunts.html.twig', 
            [
                'abonnes_emprunts' => $abonnes_emprunts
            ]
        );
    }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
}

