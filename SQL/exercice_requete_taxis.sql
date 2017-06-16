--# 1. Qui conduit la voiture 503
SELECT c.prenom,  a.id_vehicule
FROM conducteur c, association_vehicule_conducteur a
WHERE c.id_conducteur = a.id_conducteur
AND a.id_vehicule = 503;
/*  +----------+-------------+
    | prenom   | id_vehicule |
    +----------+-------------+
    | Philippe |         503 |
    +----------+-------------+  */


--# 2. Qui conduit quoi
SELECT c.*, v.*
FROM conducteur c, association_vehicule_conducteur a, vehicule v
WHERE c.id_conducteur = a.id_conducteur
AND a.id_vehicule = v.id_vehicule;
/*  +---------------+----------+-----------+-------------+------------+--------+---------+-----------------+
    | id_conducteur | prenom   | nom       | id_vehicule | marque     | modele | couleur | immatriculation |
    +---------------+----------+-----------+-------------+------------+--------+---------+-----------------+
    |             1 | Julien   | Avigny    |         501 | Peugeot    | 807    | noir    | AB-355-CA       |
    |             2 | Morgane  | Alamia    |         502 | Citroen    | C8     | bleu    | CE-122-AE       |
    |             3 | Philippe | Pandre    |         503 | Mercedes   | Cls    | vert    | FG-953-HI       |
    |             4 | Amelie   | Blondelle |         504 | Volkswagen | Touran | noir    | SO-322-NV       |
    |             3 | Philippe | Pandre    |         501 | Peugeot    | 807    | noir    | AB-355-CA       |
    +---------------+----------+-----------+-------------+------------+--------+---------+-----------------+  */


--# 3. Ajoutez vous dans la table conducteur, ensuite, affichez tous les conducteurs ( même ceux qui ne sont pas présents sur la table association_vehicule_conducteur) Ainsi que les véhicules qu'ils conduisent si c'est le cas.
INSERT INTO conducteur VALUES
(NULL, 'Tristan', 'Luron');
SELECT * FROM conducteur;

SELECT c.id_conducteur, c.nom, c.prenom, v.id_vehicule, v.marque, v.modele
FROM conducteur c
LEFT JOIN association_vehicule_conducteur a ON a.id_conducteur = c.id_conducteur
LEFT JOIN vehicule v ON v.id_vehicule = a.id_vehicule;
/*  +---------------+-----------+----------+-------------+------------+--------+
    | id_conducteur | nom       | prenom   | id_vehicule | marque     | modele |
    +---------------+-----------+----------+-------------+------------+--------+
    |             1 | Avigny    | Julien   |         501 | Peugeot    | 807    |
    |             2 | Alamia    | Morgane  |         502 | Citroen    | C8     |
    |             3 | Pandre    | Philippe |         503 | Mercedes   | Cls    |
    |             4 | Blondelle | Amelie   |         504 | Volkswagen | Touran |
    |             3 | Pandre    | Philippe |         501 | Peugeot    | 807    |
    |             5 | Richy     | Alex     |        NULL | NULL       | NULL   |
    |             6 | Luron     | Tristan  |        NULL | NULL       | NULL   |
    +---------------+-----------+----------+-------------+------------+--------+  */


--# 4. Ajoutez un nouveau véhicule sur la table véhicule. Ensuit affichez tous les véhicules (même ceux qui ne sont pas présents sur la table association_vehicule_conducteur) ainsi que les conducteurs si c'est le cas.
SELECT c.id_conducteur, c.nom, c.prenom, v.id_vehicule, v.marque, v.modele
FROM conducteur c
RIGHT JOIN association_vehicule_conducteur a ON a.id_conducteur = c.id_conducteur
RIGHT JOIN vehicule v ON v.id_vehicule = a.id_vehicule;
/*  +---------------+-----------+----------+-------------+------------+---------+
    | id_conducteur | nom       | prenom   | id_vehicule | marque     | modele  |
    +---------------+-----------+----------+-------------+------------+---------+
    |             1 | Avigny    | Julien   |         501 | Peugeot    | 807     |
    |             3 | Pandre    | Philippe |         501 | Peugeot    | 807     |
    |             2 | Alamia    | Morgane  |         502 | Citroen    | C8      |
    |             3 | Pandre    | Philippe |         503 | Mercedes   | Cls     |
    |             4 | Blondelle | Amelie   |         504 | Volkswagen | Touran  |
    |          NULL | NULL      | NULL     |         505 | Skoda      | Octavia |
    |          NULL | NULL      | NULL     |         506 | Volkswagen | Passat  |
    +---------------+-----------+----------+-------------+------------+---------+  */


--# 5. Affichez tous mes véhicules et tous les conducteurs sans exception, qu'ils soient présents sur association_vehicule_conducteurs ou pas.
SELECT c.id_conducteur, c.nom, c.prenom, v.id_vehicule, v.marque, v.modele
FROM conducteur c
LEFT JOIN association_vehicule_conducteur a ON a.id_conducteur = c.id_conducteur
LEFT JOIN vehicule v ON v.id_vehicule = a.id_vehicule
UNION
SELECT c.id_conducteur, c.nom, c.prenom, v.id_vehicule, v.marque, v.modele
FROM conducteur c
RIGHT JOIN association_vehicule_conducteur a ON a.id_conducteur = c.id_conducteur
RIGHT JOIN vehicule v ON v.id_vehicule = a.id_vehicule;
/*  +---------------+-----------+----------+-------------+------------+---------+
    | id_conducteur | nom       | prenom   | id_vehicule | marque     | modele  |
    +---------------+-----------+----------+-------------+------------+---------+
    |             1 | Avigny    | Julien   |         501 | Peugeot    | 807     |
    |             2 | Alamia    | Morgane  |         502 | Citroen    | C8      |
    |             3 | Pandre    | Philippe |         503 | Mercedes   | Cls     |
    |             4 | Blondelle | Amelie   |         504 | Volkswagen | Touran  |
    |             3 | Pandre    | Philippe |         501 | Peugeot    | 807     |
    |             5 | Richy     | Alex     |        NULL | NULL       | NULL    |
    |             6 | Luron     | Tristan  |        NULL | NULL       | NULL    |
    |          NULL | NULL      | NULL     |         505 | Skoda      | Octavia |
    |          NULL | NULL      | NULL     |         506 | Volkswagen | Passat  |
    +---------------+-----------+----------+-------------+------------+---------+  */