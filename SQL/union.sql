---- UNION permet de fusionner deux résultats dans une même colonne
-- Exemple : Sur la BDD bibliotheque, nous voulons fusionner tous les abonnées et les auteurs dans un même résultat.

SELECT prenom AS 'Liste personnes physiques' FROM abonne
UNION
SELECT auteur FROM livre;
/*  +---------------------------+
    | Liste personnes physiques |
    +---------------------------+
    | Guillaume                 |
    | Benoit                    |
    | Chloe                     |
    | Laura                     |
    | Tristan                   |
    | GUY DE MAUPASSANT         |
    | HONORE DE BALZAC          |
    | ALPHONSE DAUDET           |
    | ALEXANDRE DUMAS           |
    +---------------------------+  */

-- UNION applique un DISTINCT par défaut.
-- POur avoir tous les résultats sans DITINCT, nous pouvons utiliser UNION ALL
SELECT prenom, id_abonne AS 'Liste personnes physiques' FROM abonne
UNION ALL
SELECT date_sortie, id_abonne FROM emprunt;
/*  +------------+---------------------------+
    | prenom     | Liste personnes physiques |
    +------------+---------------------------+
    | Guillaume  |                         1 |
    | Benoit     |                         2 |
    | Chloe      |                         3 |
    | Laura      |                         4 |
    | Tristan    |                         5 |
    | 2014-12-17 |                         1 |
    | 2014-12-18 |                         2 |
    | 2014-12-19 |                         3 |
    | 2014-12-19 |                         4 |
    | 2014-12-19 |                         1 |
    | 2015-03-20 |                         2 |
    | 2015-06-13 |                         3 |
    | 2015-06-15 |                         2 |
    +------------+---------------------------+  */