-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : ven. 10 sep. 2021 à 11:49
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `boards`
--

CREATE TABLE `boards` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `description` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boards`
--

INSERT INTO `boards` (`ID`, `name`, `description`) VALUES
(1, 'General', 'lorem ipsum'),
(2, 'Description', 'lorem ipsum'),
(3, 'Smalltalk', 'lorem ipsum'),
(4, 'Events', 'lorem ipsum');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `content` text NOT NULL,
  `creationDate` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `editionDate` datetime NOT NULL,
  `topic` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `edited` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`content`, `creationDate`, `author`, `editionDate`, `topic`, `deleted`, `edited`) VALUES
('test4', '2021-09-10 08:59:03', 'William', '2021-09-10 08:59:03', 'test4', 0, 0),
('test5', '2021-09-10 08:59:42', 'William', '2021-09-10 08:59:42', 'test5', 0, 0),
('test99', '2021-09-10 09:23:59', 'William', '2021-09-10 09:23:59', 'test99', 0, 0),
('testHeure2', '2021-09-10 11:29:24', 'William', '2021-09-10 11:29:24', 'testHeure2', 0, 0),
('test85', '2021-09-10 11:54:41', 'William', '2021-09-10 11:54:41', 'test85', 0, 0),
('testfinal', '2021-09-10 12:25:36', 'William', '2021-09-10 12:25:36', 'testfinal', 0, 0),
('jarjar', '2021-09-10 12:27:17', 'William', '2021-09-10 12:27:17', 'testest', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `title` varchar(255) NOT NULL,
  `creationDate` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`title`, `creationDate`, `author`, `board`) VALUES
('test', '2021-09-10 08:34:35', 'William', 'ins. board here'),
('test2', '2021-09-10 08:39:49', 'William', 'ins. board here'),
('test3', '2021-09-10 08:49:36', 'William', 'ins. board here'),
('test4', '2021-09-10 08:53:22', 'William', 'ins. board here'),
('test4', '2021-09-10 08:59:03', 'William', 'ins. board here'),
('test5', '2021-09-10 08:59:42', 'William', 'ins. board here'),
('test99', '2021-09-10 09:23:59', 'William', 'ins. board here'),
('testHeure2', '2021-09-10 11:29:24', 'William', 'ins. board here'),
('test85', '2021-09-10 11:54:41', 'William', 'General'),
('testfinal', '2021-09-10 12:25:36', 'William', 'General'),
('testest', '2021-09-10 12:27:17', 'William', 'Lieutenant');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `email` varchar(320) NOT NULL,
  `password` varchar(20) NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nickname` (`nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
