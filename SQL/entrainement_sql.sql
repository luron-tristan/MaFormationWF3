-- Ceci est un commentaire sur une ligne
-- Démarrer la console : démarrer : 'cmd'
-- Lancer MySQL : C:\xampp\mysql\bin> mysql --user=root --password=
-- Pour créer une base de données
CREATE DATABASE wf3_entreprise;

-- Pour voir toutes les BDD sur le serveur
SHOW DATABASES;

-- Pour utiliser une BDD
USE nom_de_la_bdd;
USE wf3_entreprise;

-- Pour effacer une BDD
DROP DATABASE nom_de_la_bdd;

-- Pour effacer une table
DROP TABLE nom_de_la_table;

-- Pour vider une table sans l'effacer
TRUNCATE nom_de_la_table;

-- Pour observer la structure d'une table
DESC nom_de_la_table;

	--############## REQUETES SELECTION (question) ##############--

-- Récupération de toutes les données de la table employes
SELECT id_employes, nom, prenom, sexe, service, date_embauche, salaire FROM employes;

-- Il est possible d'afficher tout le contenu d'une table avec le caractère universel * (ALL)
SELECT * FROM employes;

-- Uniquement les prénoms et les noms
SELECT prenom, nom FROM employes;

-- Afficher tous les services
SELECT service FROM employes;
-- Idem mais sans répétition
SELECT DISTINCT service FROM employes;
-- Afficher tous les services sauf 'assistant'
SELECT DISTINCT service FROM employes WHERE service != 'assistant';

-- Affichage des infos des employes du service informatique
SELECT nom, prenom, service FROM employes WHERE service = 'informatique';

-- BETWEEN
-- Afficher les employés ayant été recrutés entre 2010 et aujourd'hui
SELECT * FROM EMPLOYES WHERE date_embauche BETWEEN '2010-01-01' AND '2017-06-14';

-- La date du jour
SELECT CURDATE();
SELECT * FROM EMPLOYES WHERE date_embauche BETWEEN '2010-01-01' AND CURDATE();

-- LIKE
-- Affichage des employes avec un prénom dont la première lettre commence par un 's'
SELECT prenom FROM employes WHERE prenom LIKE 's%';
-- Prénom finissant par 'ie'
SELECT prenom FROM employes WHERE prenom LIKE '%ie';
-- Prénom contenant un trait d'union
SELECT prenom FROM employes WHERE prenom LIKE '%-%';

-- La liste des employes avec un salaire supérieur à 3000
SELECT nom, prenom, service, salaire FROM employes WHERE salaire > 3000;
-- Opérateurs de comparaison >, <, =, !=, >=, <=

-- Pour récupérer les infos avec un ordre
SELECT prenom FROM employes ORDER BY prenom ASC; -- ASC ascendant => valeur par défaut
SELECT prenom FROM employes ORDER BY prenom;
-- L'inverse
SELECT prenom FROM employes ORDER BY prenom DESC; -- DESC descendant

SELECT prenom, salaire FROM employes ORDER BY salaire ASC;
-- pour un deuxième classement
SELECT prenom, salaire FROM employes ORDER BY salaire ASC, prenom ASC;

-- LIMIT
-- Affichage des employes 3 par 3
SELECT prenom, nom FROM employes LIMIT 0, 3;
SELECT prenom, nom FROM employes LIMIT 3, 3;
SELECT prenom, nom FROM employes LIMIT 6, 3;
-- Avec LIMIT, la première valeur est la position de départ, la deuxième valeur représente le nombre de lignes à renvoyer

-- -- Le salaire annuel des employés
SELECT prenom, salaire * 12 FROM employes;
SELECT prenom, salaire * 12 AS 'Salaire Annuel' FROM employes;
-- AS => Alias

-- SUM()
-- La masse salariale
SELECT SUM(salaire*12) AS 'Masse salariale' FROM employes;

-- AVG()
-- Le salaire moyen
SELECT AVG (salaire) AS 'Salaire moyen' FROM employes;
-- ROUND() -- Arrondi
SELECT ROUND(AVG (salaire)) AS 'Salaire moyen' FROM employes;
-- Avec deux décimales
SELECT ROUND(AVG (salaire), 2) AS 'Salaire moyen' FROM employes;

-- COUNT
-- Affichage du nombre de femmes dans la table employes
SELECT COUNT(*) AS 'Nombre de femmes' FROM employes WHERE sexe = 'f';

-- MIN()
SELECT MIN(salaire) FROM employes;
-- MAX()
SELECT MAX(salaire) FROM employes;

-- Afficher le nom, le prénom de l'employé ayant le salaire le plus petit
-- /!\ La requête suivante est FAUSSE
SELECT nom, prenom, MIN(salaire) FROM employes;
-- En effet, le MIN() bloque la requpete car MIN() ne peut renvoyer qu'une seule ligne. Du coup, on récupère le premier nom, prenom de la table et le salaire minimum qui ne correspond pas forcément au nom, prénom.
-- Pour avoir la bonne information, dans ce cas précis nous pouvons utiliser ORDER BY avec LIMIT
SELECT nom, prenom, salaire FROM employes ORDER BY salaire ASC LIMIT 0, 1;
/*  +--------+--------+---------+
	| nom    | prenom | salaire |
	+--------+--------+---------+
	| Cottet | Julien |    1390 |
	+--------+--------+---------+ */

-- Requête imbriquée
SELECT nom, prenom, salaire FROM employes WHERE salaire = (SELECT MIN(salaire) FROM employes);
/*  +--------+--------+---------+
	| nom    | prenom | salaire |
	+--------+--------+---------+
	| Cottet | Julien |    1390 |
	+--------+--------+---------+ */
	
-- IN -- Inclusion
SELECT nom, prenom, service FROM employes WHERE service IN ('informatique', 'comptabilite');
/*  +--------+---------+--------------+
	| nom    | prenom  | service      |
	+--------+---------+--------------+
	| Grand  | Fabrice | comptabilite |
	| Vignal | Mathieu | informatique |
	| Durand | Damien  | informatique |
	| Chevel | Daniel  | informatique |
	+--------+---------+--------------+ */
-- IN permet de faire une comparaison sur plusieures valeurs

-- NOT IN -- Exclusion
SELECT nom, prenom, service, salaire 
FROM employes 
WHERE service 
NOT IN ('informatique', 'comptabilite') 
ORDER BY service;
/*  +----------+-------------+---------------+---------+
	| nom      | prenom      | service       | salaire |
	+----------+-------------+---------------+---------+
	| Lafaye   | Stephanie   | assistant     |    1775 |
	| Sennard  | Emilie      | commercial    |    1800 |
	| Perrin   | Celine      | commercial    |    2700 |
	| Miller   | Guillaume   | commercial    |    1900 |
	| Collier  | Melanie     | commercial    |    3100 |
	| Winter   | Thomas      | commercial    |    3550 |
	| Gallet   | Clement     | commercial    |    2300 |
	| Thoyer   | Amandine    | communication |    1500 |
	| Laborde  | Jean-pierre | direction     |    5000 |
	| Blanchet | Laura       | direction     |    4500 |
	| Martin   | Nathalie    | juridique     |    3200 |
	| Dubar    | Chloe       | production    |    1900 |
	| Lagarde  | Benoit      | production    |    2550 |
	| Desprez  | Thierry     | secretariat   |    1500 |
	| Cottet   | Julien      | secretariat   |    1390 |
	| Fellier  | Elodie      | secretariat   |    1600 |
	+----------+-------------+---------------+---------+
-- NOT IN (plusieurs valeurs)
-- != (une seule valeur) */

-- REQUETE avec plusieurs conditions
-- Les employés du service commercial gagnant moins de 2000
SELECT * 
FROM employes 
WHERE service = 'commercial' 
AND salaire <= 2000;
/*  +-------------+-----------+---------+------+------------+---------------+---------+
	| id_employes | prenom    | nom     | sexe | service    | date_embauche | salaire |
	+-------------+-----------+---------+------+------------+---------------+---------+
	|         627 | Guillaume | Miller  | m    | commercial | 2006-07-02    |    1900 |
	|         933 | Emilie    | Sennard | f    | commercial | 2014-09-11    |    1800 |
	+-------------+-----------+---------+------+------------+---------------+---------+ */

-- Les employes du service production ayant un salaire de 1900 ou 2300
SELECT * FROM employes WHERE service = 'production' AND salaire = 1900 OR salaire = 2300;
/*  +-------------+---------+--------+------+------------+---------------+---------+
	| id_employes | prenom  | nom    | sexe | service    | date_embauche | salaire |
	+-------------+---------+--------+------+------------+---------------+---------+
	|         388 | Clement | Gallet | m    | commercial | 2000-01-15    |    2300 |
	|         417 | Chloe   | Dubar  | f    | production | 2001-09-05    |    1900 |
	+-------------+---------+--------+------+------------+---------------+---------+ */
-- /!\ Attention la requête au dessus est fausse. Sans parenthèses, le OR crée une incohérence. La dernière condition ne se trouve pas liée au service = 'production'
-- Pour éviter cela, il faut mettre les parenthèses
SELECT * 
FROM employes 
WHERE service = 'production' 
AND (salaire = 1900 OR salaire = 2300);
/*  +-------------+--------+-------+------+------------+---------------+---------+
	| id_employes | prenom | nom   | sexe | service    | date_embauche | salaire |
	+-------------+--------+-------+------+------------+---------------+---------+
	|         417 | Chloe  | Dubar | f    | production | 2001-09-05    |    1900 |
	+-------------+--------+-------+------+------------+---------------+---------+ */

-- GROUP BY
-- Le nombre d'employés par service
SELECT service, COUNT(*) FROM employes GROUP BY service;	
/*  +---------------+----------+
	| service       | COUNT(*) |
	+---------------+----------+
	| assistant     |        1 |
	| commercial    |        6 |
	| communication |        1 |
	| comptabilite  |        1 |
	| direction     |        2 |
	| informatique  |        3 |
	| juridique     |        1 |
	| production    |        2 |
	| secretariat   |        3 |
	+---------------+----------+  */
	
	
-- Pour mettre une ou des conditions avec un group by	
-- HAVING
-- Même requête qu'au-dessus avec une condition : si la valeur du count(*) > 2
SELECT service, COUNT(*) FROM employes GROUP BY service HAVING COUNT(*) > 2;
/*  +--------------+----------+
	| service      | COUNT(*) |
	+--------------+----------+
	| commercial   |        6 |
	| informatique |        3 |
	| secretariat  |        3 |
	+--------------+----------+  */
-- Le nombre d'employes (femme uniquement) par service
SELECT service, COUNT(*) FROM employes WHERE sexe='f' GROUP BY service;
/*  +---------------+----------+
	| service       | COUNT(*) |
	+---------------+----------+
	| assistant     |        1 |
	| commercial    |        3 |
	| communication |        1 |
	| direction     |        1 |
	| juridique     |        1 |
	| production    |        1 |
	| secretariat   |        1 |
	+---------------+----------+  */
	
-- GROUP BY permet de regrouper des informations
-- HAVING permet de mettre une condition sur le GROUP BY
	
	
	

	
	
	--############## REQUETES INSERTION (Enregistrement) ##############--
INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES (NULL, 'Tristan', 'Luron', 'm', 'informatique', '2017-06-14', 2850);
SELECT * FROM employes;

-- Si nous donnons tous les champs dans le même ordre que la table, il n'est pas nécessaire de préciser les champs
INSERT INTO employes VALUES (NULL, 'Tristan', 'Luron', 'm', 'informatique', '2017-06-14', 2850);
SELECT * FROM employes;

-- Si on fait une insertion sans remplir tous les champs nous sommes obligés de préciser les champs
INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Tristan', 'Luron', 'm', 'informatique', '2017-06-14', 2850);
SELECT * FROM employes;






	--############## REQUETES UPDATE (Modification) ##############--
UPDATE employes SET salaire = 1391 WHERE id_employes = 699;
-- Pour une modification d'une entrée précise, il faut privilégier la condition sur la clé primaire de la table (ici id_employes)
UPDATE employes SET salaire = 1392, service = 'informatique' WHERE id_employes = 699;






	--############## REQUETES DELETE (Suppression) ##############--
SELECT * FROM employes;
DELETE FROM employes WHERE id_employes = 992;
SELECT * FROM employes;

DELETE FROM employes WHERE id_employes = 992 AND service = 'informatique';

DELETE FROM employes; -- équivalent à un TRUNCATE employes;













	
	
	