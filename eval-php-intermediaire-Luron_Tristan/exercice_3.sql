-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Juillet 2017 à 17:42
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exercice_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `title` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `year_of_prod` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `category` enum('action','drame','comédie','thriller','western') NOT NULL,
  `storyline` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `id_movie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` (`title`, `actors`, `director`, `producer`, `year_of_prod`, `language`, `category`, `storyline`, `video`, `id_movie`) VALUES
('Moi, Moche et Méchant 3', 'Gad Elmaleh, Audrey Lamy, David Marsais', 'David Yates', 'Stephen King', '2017', 'en', 'comédie', 'Alors que Gru, totalement déprimé par sa mise à pied, tente de trouver une nouvelle voie, un mystérieux individu se présente pour l’informer du décès de son père. Dans la foulée, il lui annonce l’existence d’un frère jumeau prénommé Dru qui a exprimé le désir d’une rencontre. Ébranlé par la nouvelle, Gru interroge sa mère qui avoue son secret: après avoir donné naissance à des jumeaux, elle a divorcé en faisant la promesse à son ex-mari de disparaître totalement de sa vie en échange d’un des enfants. Tout en précisant, en substance, qu’elle n’a pas eu son mot à dire et que Gru n’est somme toute qu’un second choix. Si Gru, tout d’abord enthousiasmé à l’idée d’avoir un frère, se rend avec Lucy et les filles dans son île natale, Freedonia, pour rencontrer son jumeau, il déchante vite quand il découvre que Dru est nettement supérieur à lui, et ce en tout point. Là où Gru est un misanthrope aussi dépourvu d’emploi que de cheveux, Dru arbore une masse capillaire impressionnante, un charisme naturel et une fortune colossale héritée de son père et de son élevage de cochons. Gru est rapidement miné par un sentiment d’infériorité, quand Dru lui révèle sa faille: leur père n’a jamais vu en lui l’étoffe d’un méchant, et de ce fait ne l’a pas formé dans cette direction qui est pourtant la marque de fabrique de la famille. Avec son aide, ils pourraient à eux deux perpétuer la tradition familiale. \r\n\r\nGru se sent alors investi d’un rôle de «grand frère» et lui livre les secrets de l’utilisation des gadgets ultra-sophistiqués de leur père avec l’intention d’en profiter pour mettre hors d’état de nuire l’insaisissable Balthazar Bratt. Mais cette alliance se voit sérieusement menacée par un cas aggravé de rivalité gémellaire qui va vite les dépasser et les handicaper face à un ennemi à l’envergure encore inégalée.', 'https://www.youtube.com/watch?v=L1KUBfsJ2Cs', 1),
('Interstellar', 'Matthew McConaughey, Anne Hathaway, Michael Caine', 'Batman', 'Tristan Luron', '2014', 'de', 'western', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. ', 'https://www.youtube.com/watch?v=KvEOPIh_S_o', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
