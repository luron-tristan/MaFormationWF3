-- # EXERCICES

-- 1. Afficher la profession de l'employé ayant l'id 547
SELECT id_employes, service FROM employes WHERE id_employes = 547;
/*  +-------------+------------+
	| id_employes | service    |
	+-------------+------------+
	|         547 | commercial |
	+-------------+------------+  */

-- 2. Afficher la date d'embauche d'Amandine
SELECT prenom, date_embauche FROM employes WHERE prenom = 'Amandine';
/*  +----------+---------------+
	| prenom   | date_embauche |
	+----------+---------------+
	| Amandine | 2010-01-23    |
	+----------+---------------+  */

-- 3. Afficher le nom de famille de Guillaume
SELECT prenom, nom FROM employes WHERE prenom = "Guillaume";
/*  +-----------+--------+
	| prenom    | nom    |
	+-----------+--------+
	| Guillaume | Miller |
	+-----------+--------+  */

-- 4. Afficher le nombre d'employés ayant un id commençant par le chiffre 5
SELECT COUNT(*) AS 'ID 5--' FROM employes WHERE id_employes LIKE '5%';
/*  +--------+
	| ID 5-- |
	+--------+
	|      3 |
	+--------+  */

-- 5. Afficher le nombre de commerciaux
SELECT COUNT(*) AS 'Nombre de commerciaux' FROM employes WHERE service = 'commercial';
/*  +-----------------------+
	| Nombre de commerciaux |
	+-----------------------+
	|                     6 |
	+-----------------------+  */

-- 6.Afficher le salaire moyen des informaticiens (arrondi à l'unité)
SELECT service, ROUND(AVG(salaire)) AS 'Salaire moyen' FROM employes WHERE service = 'informatique';
/*  +--------------+---------------+
	| service      | Salaire moyen |
	+--------------+---------------+
	| informatique |          2038 |
	+--------------+---------------+  */

-- 7. Afficher les 5 premiers employés après les avoir classés par ordre aphabétique
SELECT * FROM employes ORDER BY nom ASC LIMIT 0, 5;
/*  +-------------+---------+----------+------+--------------+---------------+---------+
	| id_employes | prenom  | nom      | sexe | service      | date_embauche | salaire |
	+-------------+---------+----------+------+--------------+---------------+---------+
	|         592 | Laura   | Blanchet | f    | direction    | 2005-06-09    |    4500 |
	|         854 | Daniel  | Chevel   | m    | informatique | 2011-09-28    |    1700 |
	|         547 | Melanie | Collier  | f    | commercial   | 2004-09-08    |    3100 |
	|         699 | Julien  | Cottet   | m    | informatique | 2007-01-18    |    1392 |
	|         739 | Thierry | Desprez  | m    | secretariat  | 2009-11-17    |    1500 |
	+-------------+---------+----------+------+--------------+---------------+---------+  */

-- 8. Afficher le coût des commerciaux sur une année
SELECT SUM(salaire*12) AS 'Masse salariale commerciaux' FROM employes WHERE service = 'commercial';
/*  +-----------------------------+
	| Masse salariale commerciaux |
	+-----------------------------+
	|                      184200 |
	+-----------------------------+
*/
-- 9. Afficher le salaire moyen par service (service + salaire moyen)
SELECT service, ROUND(AVG(salaire)) AS 'Salaire moyen' FROM employes GROUP BY service;
/*  +---------------+---------------+
	| service       | Salaire moyen |
	+---------------+---------------+
	| assistant     |          1775 |
	| commercial    |          2558 |
	| communication |          1500 |
	| comptabilite  |          1900 |
	| direction     |          4750 |
	| informatique  |          2038 |
	| juridique     |          3200 |
	| production    |          2225 |
	| secretariat   |          1550 |
	+---------------+---------------+  */

-- 10. Afficher le nombre de recrutements sur l'année 2010 (avec un alias si possible)
SELECT COUNT(*) AS 'Nombre de recrutements 2010' FROM employes WHERE date_embauche LIKE '2010%';
SELECT COUNT(*) AS 'Nombre de recrutements 2010' FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';
SELECT COUNT(*) AS 'Nombre de recrutements 2010' FROM employes WHERE date_embauche >= '2010-01-01' AND date_embauche <= '2010-12-31';

/*  +-----------------------------+
| Nombre de recrutements 2010 |
+-----------------------------+
|                           2 |
+-----------------------------+  */

-- 11. Afficher le salaire moyen appliqué sur les recrutements de la période allant de 2005 à 2007
SELECT AVG(salaire) FROM employes WHERE date_embauche BETWEEN '2005-01-01' AND '2007-12-31';
/*  +--------------+
	| AVG(salaire) |
	+--------------+
	|    2623.0000 |
	+--------------+ */

-- 12. Afficher le nombre de services différents
SELECT COUNT(DISTINCT service) AS 'Nombre de services' FROM employes;
/*  +--------------------+
	| Nombre de services |
	+--------------------+
	|                  9 |
	+--------------------+  */

-- 13. Afficher tous les employés sauf ceux des services de production et secretariat
SELECT * FROM employes WHERE service NOT IN ('production', 'secretariat');
SELECT nom, prenom, service FROM employes WHERE service != 'production' AND service =! 'secretariat';
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
	| id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
	+-------------+-------------+----------+------+---------------+---------------+---------+
	|         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    5000 |
	|         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
	|         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
	|         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
	|         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
	|         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
	|         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
	|         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
	|         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
	|         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
	|         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
	|         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 |
	|         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
	|         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
	|         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
	|         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
	|         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 |
	+-------------+-------------+----------+------+---------------+---------------+---------+  */

-- 14. Afficher le nombre d'hommes et de femmes (sexe + nombre)
SELECT sexe, COUNT(*) AS 'nombre' FROM employes GROUP BY sexe;
/*  +------+----------+
	| sexe |  nombre  |
	+------+----------+
	| m    |       12 |
	| f    |        9 |
	+------+----------+  */

-- 15. Afficher les commerciaux ayant été recrutés avant 2005 de sexe masculin et gagnant un salaire supérieur à 2500
SELECT * FROM employes WHERE service = 'commercial' AND date_embauche < '2005-01-01' AND sexe = 'm' AND salaire > 2500;
/*  +-------------+--------+--------+------+------------+---------------+---------+
	| id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
	+-------------+--------+--------+------+------------+---------------+---------+
	|         415 | Thomas | Winter | m    | commercial | 2000-05-03    |    3550 |
	+-------------+--------+--------+------+------------+---------------+---------+  */

-- 16. Qui a été embauché en dernier
SELECT * FROM employes ORDER BY date_embauche DESC LIMIT 0, 1;
SELECT * FROM employes WHERE date_embauche = (SELECT MAX(date_embauche) FROM employes);
/*  +-------------+---------+-------+------+--------------+---------------+---------+
	| id_employes | prenom  | nom   | sexe | service      | date_embauche | salaire |
	+-------------+---------+-------+------+--------------+---------------+---------+
	|         991 | Tristan | Luron | m    | informatique | 2017-06-14    |    2850 |
	+-------------+---------+-------+------+--------------+---------------+---------+  */

-- 17. Afficher les informations de l'employé du service commercial ayant le salaire le plus élevé
SELECT * FROM employes WHERE service = 'commercial' ORDER BY salaire DESC LIMIT 0, 1;
SELECT * FROM employes WHERE service = 'commercial' AND salaire = (SELECT MAX(salaire)FROM employes WHERE service='commercial');
SELECT * FROM employes WHERE salaire = (SELECT MAX(salaire)FROM employes WHERE service='commercial') AND service = 'commercial';
/*  +-------------+--------+--------+------+------------+---------------+---------+
	| id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
	+-------------+--------+--------+------+------------+---------------+---------+
	|         415 | Thomas | Winter | m    | commercial | 2000-05-03    |    3550 |
	+-------------+--------+--------+------+------------+---------------+---------+  */

-- 18. Afficher le prénom de l'employé du service informatique ayant été embauché en premier
SELECT date_embauche, service, prenom AS 'Dernier embauché du service informatique' FROM employes WHERE service = 'informatique' ORDER BY date_embauche ASC LIMIT 0, 1;
/*  +---------------+--------------+------------------------------------------+
	| date_embauche | service      | Dernier embauché du service informatique |
	+---------------+--------------+------------------------------------------+
	| 2007-01-18    | informatique | Julien                                   |
	+---------------+--------------+------------------------------------------+  */

-- 19. Augmenter le salaire de chaque employé de 100€
UPDATE employes SET salaire = salaire +100;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
	| id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
	+-------------+-------------+----------+------+---------------+---------------+---------+
	|         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    5100 |
	|         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2400 |
	|         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3650 |
	|         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    2000 |
	|         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1700 |
	|         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    2000 |
	|         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3200 |
	|         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4600 |
	|         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    2000 |
	|         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2800 |
	|         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1492 |
	|         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2100 |
	|         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1600 |
	|         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1600 |
	|         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2350 |
	|         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1800 |
	|         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3300 |
	|         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2650 |
	|         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1900 |
	|         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1875 |
	|         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2950 |
	+-------------+-------------+----------+------+---------------+---------------+---------+ */

-- 20. Supprimer les employes du service secretariat uniquement
DELETE FROM employes WHERE service = 'secretariat';