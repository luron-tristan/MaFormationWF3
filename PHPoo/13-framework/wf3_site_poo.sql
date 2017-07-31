-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Juillet 2017 à 17:47
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wf3_site_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(5) NOT NULL,
  `reference` int(15) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `sexe` enum('m','f') NOT NULL DEFAULT 'm',
  `photo` varchar(255) NOT NULL,
  `prix` double(7,2) NOT NULL,
  `stock` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `sexe`, `photo`, `prix`, `stock`) VALUES
(1, 257, 'chemise', 'Chemise blanche femme', 'Chemise blanche en coton', 'blanc', 'xl', 'f', '257_chemise_femme_blanc.jpg', 25.00, 16),
(2, 175, 'chemise', 'Chemise bleue femme', 'Chemise bleue en coton (femme non incluse)', 'bleu', 'm', 'f', '175_chemise_femme_bleu.jpg', 43.00, 372),
(3, 7653, 'chemise', 'Chemise bordeaux femme', 'Chemise bordeaux en coton', 'bordeaux', 'xl', 'f', '7653_chemise_femme_bordeaux.jpg', 45.00, 546),
(4, 25796, 'chemise', 'Chemise rose femme', 'Chemise rose en coton', 'rose', 's', 'f', '25796_chemise_femme_rose.jpg', 75.00, 362),
(5, 2877, 'chemise', 'Chemise rouge femme', 'Chemise rouge en coton', 'rouge', 'xl', 'f', '2877_chemise_femme_rouge.jpg', 24.00, 3),
(6, 3737, 'chemise', 'Chemise verte femme', 'Chemise verte en coton', 'vert', 'l', 'f', '3737_chemise_femme_vert.jpg', 57.00, 45),
(7, 24363, 'pantalon', 'Pantalon rose homme', 'Pantalon rose en lin', 'rose', 'm', 'm', '24363_pantalon_homme_rose.jpg', 12.00, 200),
(8, 36727, 'pantalon', 'Pantalon blanc homme', 'Pantalon blanc en lin', 'blanc', 's', 'm', '36727_pantalon_homme_blanc.jpg', 75.00, 6578),
(9, 347693, 'pantalon', 'Pantalon bordeaux homme', 'Pantalon bordeaux en coton', 'bordeaux', 'l', 'm', '347693_pantalon_homme_bordeaux.jpg', 45.00, 6788),
(10, 238469, 'pantalon', 'Pantalon vert homme', 'Pantalon vert en lin', 'vert', 'l', 'm', '238469_pantalon_homme_vert.jpg', 24.00, 20),
(11, 3476387, 'pantalon', 'Pantalon noir homme', 'Pantalon noir en coton', 'noir', 'xl', 'm', '3476387_pantalon_homme_noir.jpg', 54.00, 6762);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(5) NOT NULL,
  `id_membre` int(5) DEFAULT NULL,
  `montant` double(7,2) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') NOT NULL DEFAULT 'en cours de traitement'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(1, 1, 202.80, '2017-07-04 15:17:10', 'livré'),
(2, 1, 202.80, '2017-07-04 15:17:36', 'envoyé'),
(3, 1, 150.00, '2017-07-04 15:19:55', 'livré'),
(4, 1, 30.00, '2017-07-04 16:11:06', 'livré'),
(5, 1, 51.60, '2017-07-04 16:12:04', 'envoyé'),
(6, 1, 135.60, '2017-07-04 16:53:51', 'envoyé'),
(7, 1, 90.00, '2017-07-04 17:23:19', 'en cours de traitement'),
(8, 1, 450.00, '2017-07-04 17:23:27', 'en cours de traitement'),
(9, 1, 288.00, '2017-07-05 11:48:27', 'en cours de traitement'),
(10, 1, 214.80, '2017-07-05 11:50:33', 'en cours de traitement'),
(12, 1, 54.00, '2017-07-05 15:18:47', 'en cours de traitement');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(5) NOT NULL,
  `id_commande` int(5) NOT NULL,
  `id_article` int(5) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` double(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_article`, `quantite`, `prix`) VALUES
(1, 3, 1, 5, 30.00),
(2, 4, 1, 1, 30.00),
(3, 5, 2, 1, 51.60),
(4, 6, 2, 1, 51.60),
(5, 6, 1, 1, 30.00),
(6, 6, 3, 1, 54.00),
(7, 7, 4, 1, 90.00),
(8, 8, 4, 5, 90.00),
(9, 9, 8, 1, 90.00),
(10, 9, 5, 5, 28.80),
(11, 9, 9, 1, 54.00),
(12, 10, 1, 2, 30.00),
(13, 10, 2, 3, 51.60),
(16, 12, 3, 1, 54.00);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(5) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexe` enum('m','f') NOT NULL DEFAULT 'm',
  `ville` varchar(255) NOT NULL,
  `cp` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` text NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `sexe`, `ville`, `cp`, `adresse`, `statut`) VALUES
(1, 'admin', 'admin', 'Luron', 'Tristan', 'admin@gmail.com', 'm', 'Conflans', 12345, '123 rue de chez moi', 1),
(2, 'test', 'test', 'Lorem', 'Ipsum', 'mail@mail.fr', 'f', 'Paris', 75123, '456 domaine des saucisses', 0),
(4, 'Tristan7', 'motdepasse', 'Luron', 'Tristan', 'luront@gmail.com', 'm', 'Conflans', 78700, '75 rue ds champs du four', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `details_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `details_commande_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
