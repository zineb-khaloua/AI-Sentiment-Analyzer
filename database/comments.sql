-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 sep. 2025 à 14:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sentiment_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `sentiment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `sentiment`, `created_at`, `updated_at`) VALUES
(9, 'bad product', 'negative', '2025-09-17 14:37:27', '2025-09-17 14:37:27'),
(11, 'good', 'positive', '2025-09-17 14:49:57', '2025-09-17 14:49:57'),
(12, 'fine', 'positive', '2025-09-17 14:50:30', '2025-09-17 14:50:30'),
(13, 'bad', 'negative', '2025-09-17 14:50:37', '2025-09-17 14:50:37'),
(15, 'bad product', 'negative', '2025-09-17 14:52:15', '2025-09-17 14:52:15'),
(16, 'good product', 'positive', '2025-09-17 15:51:33', '2025-09-17 15:51:33'),
(17, 'good', 'positive', '2025-09-18 17:37:56', '2025-09-18 17:37:56'),
(18, 'good', 'positive', '2025-09-19 10:43:26', '2025-09-19 10:43:26'),
(19, 'bad', 'negative', '2025-09-19 10:43:45', '2025-09-19 10:43:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
