-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 nov. 2023 à 20:15
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mes_projets`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `budget` int(8) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `code`, `nom`, `description`, `budget`, `date_debut`, `date_fin`, `statut`) VALUES
(5, 'PROJET@20231124030333#', 'GESTION DE PROJET ', 'Il nous est demandé de faire une application CRUD pour la gestion des projets futurs !', 500000, '2023-11-22', '2023-11-24', 1),
(6, 'PROJET@20231124121840#', 'Gestion de bus', 'Il nous est demandé de faire une application CRUD pour la gestion des projets futurs !', 740000, '2023-11-10', '2023-11-02', 0),
(9, 'PROJET@20231124125014#', 'HOSPITAL REGIONAL DE LABE ', 'GTFDjkfsdjfiofjmeio', 800000, '2023-11-15', '2023-11-29', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
