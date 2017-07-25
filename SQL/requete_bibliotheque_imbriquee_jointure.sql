-- Une valeur NULL se teste avec IS
-- Voir les id des livres qui n'ont pas encore été rendus
SELECT id_livre FROM emprunt WHERE date_rendu IS NULL;
/*  +----------+
    | id_livre |
    +----------+
    |      105 |
    |      100 |
    +----------+  */

-- inverse => IS NOT
SELECT id_livre FROM emprunt WHERE date_rendu IS NOT NULL;
/*  +----------+
    | id_livre |
    +----------+
    |      100 |
    |      101 |
    |      100 |
    |      103 |
    |      104 |
    |      105 |
    +----------+  */

    --############## REQUETE IMBRIQUEE ##############--
-- Les titres des livres qui n'ont pas été rendus
SELECT titre FROM livre WHERE id_livre IN 
(SELECT id_livre FROM emprunt WHERE date_rendu IS NULL);
-- Pour faire une requête imbriquée ou en jointure (voir plus bas), il faut obligatoirement un champ commun. Sur la requête au-dessus, le champ commun est id_livre.
/*  +-------------------------+
    | titre                   |
    +-------------------------+
    | Une vie                 |
    | Les Trois Mousquetaires |
    +-------------------------+  */

-- Nous aimerions connaître le n° (id) des livres que Chloe a empruntés à la bibliothèque.
SELECT id_livre FROM emprunt WHERE id_abonne IN 
(SELECT id_abonne FROM abonne WHERE prenom ='Chloe');
/*  +----------+
    | id_livre |
    +----------+
    |      100 |
    |      105 |
    +----------+  */

-- EXERCICE - Afficher les prénoms des abonnés ayant emprunté un livre le 19/12/2014
SELECT prenom FROM abonne WHERE id_abonne IN 
(SELECT id_abonne FROM emprunt WHERE date_sortie = '2014-12-19');
/*  +-----------+
    | prenom    |
    +-----------+
    | Guillaume |
    | Chloe     |
    | Laura     |
    +-----------+  */

-- EXERCICE - Combien de livre a emprunté Guillaume à la bibliothèque
SELECT COUNT(id_abonne) AS 'Nb livres empruntés par Guillaume' FROM emprunt WHERE id_abonne IN 
(SELECT id_abonne FROM abonne WHERE prenom = 'Guillaume');
/*  +----------------------------------+
    | Nb livres empruntés par Guillaume |
    +----------------------------------+
    |                                2 |
    +----------------------------------+  */

-- EXERCICE - Afficher les prénoms des abonnés ayant déjà emprunté un livre écrit par Alphonse DAUDET
SELECT prenom AS 'Ont emprunté du DAUDET' FROM abonne WHERE id_abonne IN 
(SELECT id_abonne FROM emprunt WHERE id_livre IN 
(SELECT id_livre FROM livre WHERE auteur = 'Alphonse DAUDET'));
/*  +------------------------+
    | Ont emprunté du DAUDET |
    +------------------------+
    | Laura                  |
    +------------------------+  */

-- EXERCICE - Nous aimerions maintenant connaitre les titres des livres que Chloe n'a pas encore empruntés
SELECT titre FROM livre WHERE id_livre NOT IN 
(SELECT id_livre FROM emprunt WHERE id_abonne IN 
(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
/*  +-----------------+
    | titre           |
    +-----------------+
    | Bel-Ami         |
    | Le Pere Goriot  |
    | Le Petit Chose  |
    | La Reine Margot |
    +-----------------+  */

-- EXERCICE - Afficher le ou les titres des livres que Chloe n'a pas encore rendus à la bibliothèque
SELECT titre FROM livre WHERE id_livre IN 
(SELECT id_livre FROM emprunt WHERE date_rendu IS NULL AND id_abonne IN 
(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
/*  +-------------------------+
    | titre                   |
    +-------------------------+
    | Les Trois Mousquetaires |
    +-------------------------+  */

-- EXERCICE - Qui a emprunté le plus de livres à la bibliothèque
SELECT prenom AS 'Rat de bibliothèque' FROM abonne WHERE id_abonne = 
(SELECT id_abonne FROM emprunt GROUP BY id_abonne ORDER BY COUNT(*) DESC LIMIT 0, 1);
/*  +---------------------+
    | Rat de bibliothèque |
    +---------------------+
    | Benoit              |
    +---------------------+ */

-- La même requête en jointure
SELECT a.prenom
FROM abonne a
WHERE emprunt.id_abonne = a.id_abonne
AND 


    --############## REQUETE EN JOINTURE ##############--
-- Une requête en jointure sera possible dans tous les cas.
-- Une requête imbriquée n'est possible que si les informations qu'on récupère ne proviennent que d'une seule table.

-- Nous aimerions connaître les dates de sortie et de rendu pour l'abonné Guillaume
SELECT abonne.prenom, emprunt.date_sortie, emprunt.date_rendu
FROM emprunt, abonne
WHERE emprunt.id_abonne = abonne.id_abonne
AND abonne.prenom = 'Guillaume';

SELECT a.prenom, e.date_sortie, e.date_rendu
FROM emprunt e, abonne a
WHERE e.id_abonne = a.id_abonne
AND a.prenom = 'Guillaume';

/*  +-----------+-------------+------------+
    | prenom    | date_sortie | date_rendu |
    +-----------+-------------+------------+
    | Guillaume | 2014-12-17  | 2014-12-18 |
    | Guillaume | 2014-12-19  | 2014-12-28 |
    +-----------+-------------+------------+  */

-- Première ligne => ce qu'on veut récupérer
-- Deuxième ligne => de quelles tables nous avons besoin
-- Troisième ligne et les suivantes => la ou les conditions + les éventuels GROUP BY, ORDER BY etc...

-- EXERCICE - Nous aimerions connaître les dates de sortie et de rendu pour les livres écrits par Alphonse Daudet.
SELECT l.auteur, l.titre, e.date_sortie, e.date_rendu
FROM livre l, emprunt e
WHERE e.id_livre = l.id_livre
AND l.auteur = 'Alphonse Daudet';
/*  +-----------------+----------------+-------------+------------+
    | auteur          | titre          | date_sortie | date_rendu |
    +-----------------+----------------+-------------+------------+
    | ALPHONSE DAUDET | Le Petit Chose | 2014-12-19  | 2014-12-22 |
    +-----------------+----------------+-------------+------------+  */

        /* OU */

SELECT date_sortie, date_rendu FROM emprunt WHERE id_livre IN (SELECT id_livre FROM livre WHERE auteur = 'Alphonse DAUDET');
/*  +-------------+------------+
    | date_sortie | date_rendu |
    +-------------+------------+
    | 2014-12-19  | 2014-12-22 |
    +-------------+------------+  */

-- EXERCICE - Qui a emprunté une vie sur l'année 2014
SELECT a.prenom AS 'A emprunté Une vie en 2014'
FROM abonne a, emprunt e, livre l
WHERE a.id_abonne = e.id_abonne
AND e.id_livre = l.id_livre
AND e.date_sortie LIKE '2014%'
AND l.titre = 'Une vie';
/*  +----------------------------+
    | A emprunté Une vie en 2014 |
    +----------------------------+
    | Guillaume                  |
    | Chloe                      |
    +----------------------------+ */

-- EXERCICE - Nous aimerions connaître le nombre de livres empruntés par chaque abonné
SELECT a.prenom, COUNT(e.id_emprunt) AS 'Nombre de livres empruntés'
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne
GROUP BY(e.id_abonne)
ORDER BY COUNT(e.id_emprunt) DESC;
/*  +-----------+----------------------------+
    | prenom    | Nombre de livres empruntés |
    +-----------+----------------------------+
    | Benoit    |                          3 |
    | Guillaume |                          2 |
    | Chloe     |                          2 |
    | Laura     |                          1 |
    +-----------+----------------------------+  */

-- EXERCICE - Qui a emprunté quoi et quand
SELECT a.prenom, l.titre, e.date_sortie
FROM abonne a, emprunt e, livre l
WHERE a.id_abonne = e.id_abonne
AND e.id_livre = l.id_livre
ORDER BY(a.prenom);
/*  +-----------+-------------------------+-------------+
    | prenom    | titre                   | date_sortie |
    +-----------+-------------------------+-------------+
    | Benoit    | Bel-Ami                 | 2014-12-18  |
    | Benoit    | Les Trois Mousquetaires | 2015-03-20  |
    | Benoit    | Une vie                 | 2015-06-15  |
    | Chloe     | Les Trois Mousquetaires | 2015-06-13  |
    | Chloe     | Une vie                 | 2014-12-19  |
    | Guillaume | Une vie                 | 2014-12-17  |
    | Guillaume | La Reine Margot         | 2014-12-19  |
    | Laura     | Le Petit Chose          | 2014-12-19  |
    +-----------+-------------------------+-------------+  */

-- M'ajouter à la base de données
INSERT INTO abonne (id_abonne, prenom) VALUES
(NULL, 'Tristan');

-- Si on fait la dernière requête SELECT, la dernière insertion n'est pas présente du fait de ne pas avoir encore fait d'emprunt. (abonne.id_abonne = emprunt.id_abonne)
-- Dans ce cas, afin de récupérer tout le contenu d'une table pour ensuite y joindre les informations d'une autre selon la relation entre les tables => LEFT JOIN ou RIGHT JOIN
-- Afficher les prénoms plus les id_livre qu'ils ont emprunté
SELECT abonne.prenom, emprunt.id_livre
FROM abonne, emprunt
WHERE abonne.id_abonne = emprunt.id_abonne;

-- La même requête sans correspondance exigée
SELECT abonne.prenom, emprunt.id_livre
FROM abonne
LEFT JOIN emprunt ON abonne.id_abonne = emprunt.id_abonne;
    /*  +-----------+----------+
    | prenom    | id_livre |
    +-----------+----------+
    | Guillaume |      100 |
    | Benoit    |      101 |
    | Chloe     |      100 |
    | Laura     |      103 |
    | Guillaume |      104 |
    | Benoit    |      105 |
    | Chloe     |      105 |
    | Benoit    |      100 |
    | Tristan   |     NULL |
    +-----------+----------+  */

-- On rajoute un livre
INSERT INTO livre (auteur, titre) VALUES ('ALEXANDRE DUMAS', 'Monte Christo');

-- Afficher tous les titres (sans exception) et joindre les id_abonne si le livre a déjà été emprunté
SELECT livre.titre, emprunt.id_abonne
FROM livre
LEFT JOIN emprunt ON livre.id_livre = emprunt.id_livre;
/*
    +-------------------------+-----------+
    | titre                   | id_abonne |
    +-------------------------+-----------+
    | Une vie                 |         1 |
    | Bel-Ami                 |         2 |
    | Une vie                 |         3 |
    | Le Petit Chose          |         4 |
    | La Reine Margot         |         1 |
    | Les Trois Mousquetaires |         2 |
    | Les Trois Mousquetaires |         3 |
    | Une vie                 |         2 |
    | Le Pere Goriot          |      NULL |
    | Monte Christo           |      NULL |
    +-------------------------+-----------+  */
-- Même chose
SELECT livre.titre, emprunt.id_abonne
FROM emprunt
RIGHT JOIN livre ON livre.id_livre = emprunt.id_livre;
