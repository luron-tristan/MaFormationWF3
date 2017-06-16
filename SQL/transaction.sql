USE wf3_entreprise;
START TRANSACTION; --# Démarre la zone de mise en tampon
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    5000 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 |
    +-------------+-------------+----------+------+---------------+---------------+---------+ */

UPDATE employes SET prenom = 'Test_transaction' WHERE id_employes = 350;
SELECT * FROM employes;
/*  +-------------+------------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom           | nom      | sexe | service       | date_embauche | salaire |
    +-------------+------------------+----------+------+---------------+---------------+---------+
    |         350 | Test_transaction | Laborde  | m    | direction     | 1999-12-09    |    5000 |
    |         388 | Clement          | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas           | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe            | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie           | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice          | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie          | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura            | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume        | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine           | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien           | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
    |         701 | Mathieu          | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry          | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine         | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien           | Durand   | m    | informatique  | 2010-07-05    |    2250 |
    |         854 | Daniel           | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
    |         876 | Nathalie         | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit           | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie           | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie        | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan          | Luron    | m    | informatique  | 2017-06-14    |    2850 |
    +-------------+------------------+----------+------+---------------+---------------+---------+  */

ROLLBACK; --# Annule tous les opérations effectuées durant cette transaction.
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    5000 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

COMMIT; --# à l'inverse le COMMIT va valider toutes les actions effectuées durant la transaction.

--# Si on ferme la console (session en cours) et qu'aucun commit ou rollabck n'a été effectué, ce sera un rollback par défaut.

--# TRANSACTION AVANCEE & SAVEPOINT
SELECT * FROM employes;

START TRANSACTION;

SAVEPOINT point1;
UPDATE employes SET salaire = 1500 WHERE id_employes = 350;
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    1500 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

SAVEPOINT point2;
UPDATE employes SET salaire = 5000 WHERE service = 'informatique';
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    1500 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    5000 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    5000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    5000 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    5000 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    5000 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

SAVEPOINT point3;
UPDATE employes SET salaire = '100';
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |     100 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |     100 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |     100 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |     100 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |     100 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |     100 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |     100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |     100 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |     100 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |     100 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |     100 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |     100 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |     100 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |     100 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |     100 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |     100 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |     100 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |     100 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |     100 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |     100 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |     100 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

SAVEPOINT point4;
UPDATE employes SET salaire = '2000';
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    2000 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2000 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    2000 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    2000 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    2000 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    2000 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    2000 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    2000 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    2000 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2000 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    2000 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    2000 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    2000 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2000 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    2000 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    2000 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2000 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    2000 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    2000 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2000 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

ROLLBACK TO point2; --# On revient au point 2 et toutes les actions effectuées par la suite ont été annulées.
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
    +-------------+-------------+----------+------+---------------+---------------+---------+
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    1500 |
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 |
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 |
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 |
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 |
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 |
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 |
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 |
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 |
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 |
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 |
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 |
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 |
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 |
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 |
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 |
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 |
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 |
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 |
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 |
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 |
    +-------------+-------------+----------+------+---------------+---------------+---------+  */

ROLLBACK TO point4;
SELECT * FROM employes;
/*  ERROR 1305 (42000): SAVEPOINT point4 does not exist
Le point 4 a été annulé lorsqu'on a fait un rollback to point2
    PAS DE RETOUR VERS LE FUTUR */

ROLLBACK TO point1; --# Ici OK car le point1 existe toujours du fait d'avoir été déclaré avant le point 2
SELECT * FROM employes;
/*  +-------------+-------------+----------+------+---------------+---------------+---------+ 
    | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire | 
    +-------------+-------------+----------+------+---------------+---------------+---------+ 
    |         350 | Jean-pierre | Laborde  | m    | direction     | 1999-12-09    |    5000 | 
    |         388 | Clement     | Gallet   | m    | commercial    | 2000-01-15    |    2300 | 
    |         415 | Thomas      | Winter   | m    | commercial    | 2000-05-03    |    3550 | 
    |         417 | Chloe       | Dubar    | f    | production    | 2001-09-05    |    1900 | 
    |         491 | Elodie      | Fellier  | f    | secretariat   | 2002-02-22    |    1600 | 
    |         509 | Fabrice     | Grand    | m    | comptabilite  | 2003-02-20    |    1900 | 
    |         547 | Melanie     | Collier  | f    | commercial    | 2004-09-08    |    3100 | 
    |         592 | Laura       | Blanchet | f    | direction     | 2005-06-09    |    4500 | 
    |         627 | Guillaume   | Miller   | m    | commercial    | 2006-07-02    |    1900 | 
    |         655 | Celine      | Perrin   | f    | commercial    | 2006-09-10    |    2700 | 
    |         699 | Julien      | Cottet   | m    | informatique  | 2007-01-18    |    1392 | 
    |         701 | Mathieu     | Vignal   | m    | informatique  | 2008-12-03    |    2000 | 
    |         739 | Thierry     | Desprez  | m    | secretariat   | 2009-11-17    |    1500 | 
    |         780 | Amandine    | Thoyer   | f    | communication | 2010-01-23    |    1500 | 
    |         802 | Damien      | Durand   | m    | informatique  | 2010-07-05    |    2250 | 
    |         854 | Daniel      | Chevel   | m    | informatique  | 2011-09-28    |    1700 | 
    |         876 | Nathalie    | Martin   | f    | juridique     | 2012-01-12    |    3200 | 
    |         900 | Benoit      | Lagarde  | m    | production    | 2013-01-03    |    2550 | 
    |         933 | Emilie      | Sennard  | f    | commercial    | 2014-09-11    |    1800 | 
    |         990 | Stephanie   | Lafaye   | f    | assistant     | 2015-06-02    |    1775 | 
    |         991 | Tristan     | Luron    | m    | informatique  | 2017-06-14    |    2850 | 
    +-------------+-------------+----------+------+---------------+---------------+---------+   */

ROLLBACK; --# On annule tout depuis le début de la transaction. (La transaction se termine aussi)

--# ROLLBACK et COMMIT terminent la transaction
