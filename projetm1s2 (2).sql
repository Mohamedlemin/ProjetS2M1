-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 juil. 2021 à 01:42
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetm1s2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nomComplet`, `username`, `password`) VALUES
(1, 'MedLemin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `id` int(11) NOT NULL,
  `nomDoc` varchar(30) DEFAULT NULL,
  `Numero` varchar(25) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `speciealite` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`id`, `nomDoc`, `Numero`, `adresse`, `tel`, `speciealite`, `username`, `password`) VALUES
(13, 'Ahmed', '33399599', 'Ndb', '23456782', 'Diagnostic ', 'med', '123');

-- --------------------------------------------------------

--
-- Structure de la table `hospitaliser`
--

CREATE TABLE `hospitaliser` (
  `id-salle` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL,
  `numlit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

CREATE TABLE `infirmier` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `rotation` varchar(30) NOT NULL,
  `salaire` varchar(30) NOT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infirmier`
--

INSERT INTO `infirmier` (`id`, `nom`, `prenom`, `adresse`, `tel`, `rotation`, `salaire`, `code`) VALUES
(2, 'Neye', 'Ahmed', 'rosso', '23456782', 'tewst', '5680$', 1);

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

CREATE TABLE `malade` (
  `numero` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `diagnostic` text NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(50) NOT NULL DEFAULT 'homme,femme'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombreLits` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `numero`, `nombreLits`, `code`) VALUES
(2, 12, 6, 1),
(4, 1, 10, 6);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `code` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `batiment` varchar(50) NOT NULL,
  `directeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`code`, `ids`, `nom`, `batiment`, `directeur`) VALUES
(1, 6, 'paarkina', 'C14', 13);

-- --------------------------------------------------------

--
-- Structure de la table `soigner`
--

CREATE TABLE `soigner` (
  `numero-docteur` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `surveiller`
--

CREATE TABLE `surveiller` (
  `id-salle` int(11) NOT NULL,
  `surveillant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  ADD PRIMARY KEY (`id-salle`),
  ADD KEY `id-salle` (`id-salle`),
  ADD KEY `numero-malade` (`numero-malade`);

--
-- Index pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `directeur` (`directeur`);

--
-- Index pour la table `soigner`
--
ALTER TABLE `soigner`
  ADD KEY `numero-docteur` (`numero-docteur`),
  ADD KEY `numero-malade` (`numero-malade`);

--
-- Index pour la table `surveiller`
--
ALTER TABLE `surveiller`
  ADD PRIMARY KEY (`id-salle`),
  ADD KEY `surveillant` (`surveillant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `infirmier`
--
ALTER TABLE `infirmier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `malade`
--
ALTER TABLE `malade`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  ADD CONSTRAINT `hospitaliser_ibfk_1` FOREIGN KEY (`id-salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitaliser_ibfk_2` FOREIGN KEY (`numero-malade`) REFERENCES `malade` (`numero`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`directeur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
