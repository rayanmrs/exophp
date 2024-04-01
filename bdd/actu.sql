-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 31 mars 2024 à 14:11
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actu`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `auteur` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `tags` text NOT NULL,
  `sources` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `auteur`, `image`, `date_publication`, `date_revision`, `tags`, `sources`) VALUES
(1, 'Rayan était malade ce matin', 'Rayan', '', '2024-02-07', '2024-02-02', 'suiiii', 'moi'),
(2, 'Theo aime jouer a brawl star', 'Rayan', '', '2024-02-04', '2024-02-21', '#THEO', 'MOI encore'),
(3, 'Gabriel est vraiment bon a lol', 'Rayan', '', '2014-02-12', '2015-02-01', '#Theo #Rayan', 'encore moi '),
(4, 'Rayan fait le ramadan', 'Rayan', '', '2025-05-14', '2024-02-02', '#Ramadan', 'Moi'),
(6, 'dfgfdgdfg', 'gdfgdfgfd', '', '2025-05-14', '2024-02-02', 'dgdfgdf', 'dfgdf');

-- --------------------------------------------------------

--
-- Structure de la table `catégories`
--

DROP TABLE IF EXISTS `catégories`;
CREATE TABLE IF NOT EXISTS `catégories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `categories_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categories_id` (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `catégories`
--

INSERT INTO `catégories` (`id`, `nom`, `categories_id`) VALUES
(1, 'Sport', NULL),
(2, 'Foot', 1),
(3, 'Ski nordique', 1),
(4, 'Actualites', NULL),
(5, 'politique', 4),
(6, 'Météo', 4);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `prenom`, `mail`) VALUES
('Mars', 'Rayan', 'salut'),
('Mars', 'Rayan', 'salut'),
('Mars', 'Rayan', 'anismars32@gmail.com'),
('Mars', 'Rayan', 'anismars32@gmail.com'),
('Mars', 'Rayan', 'rayanmars44@gmail.com'),
('Gerard', 'Leo', 'rayanmars44@gmail.com'),
('Gerard', 'Leo', 'rayanmars44@gmail.com'),
('Mars', 'Rayan', 'rayanmars44@gmail.com'),
('Ronaldo', 'Cristiano', 'anismars32@gmail.com'),
('Gerard', 'Leo', 'rayanmars44@gmail.com'),
('Rayan', 'Mars', 'salut'),
('le neuille', 'leo', 'salut'),
('Cristiano', 'Ronaldo', 'salut'),
('le neuille', 'leo', 'salut'),
('Rayan', 'Mars', 'anismars32@gmail.com'),
('theolegoat', 'foucher', 'anismars32@gmail.com'),
('Rayanuygyug', 'Mars', 'salut'),
('Rayan', 'Mars', 'anismars32@gmail.com'),
('Leo', 'Gerard', 'salut'),
('Cristiano', 'Ronaldo', 'salut'),
('Cristiano', 'Ronaldo', 'rayanmars44@gmail.com'),
('Cristiano', 'Ronaldo', 'rayanmars44@gmail.com'),
('foucher', 'root', 'salut'),
('Leo', 'Gerard', 'salut'),
('theolegoat', 'foucher', 'anismars32@gmail.com'),
('Rayan', 'Mars', 'rayanmars44@gmail.com'),
('Cristiano', 'Ronaldo', 'salut'),
('Mars', 'Rayan', 'anismars32@gmail.com'),
('Gerard', 'Leo', 'rayanmars44@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
