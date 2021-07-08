-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 juil. 2020 à 14:17
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_infermier` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `date` date NOT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_personnelM` (`id_infermier`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `password`) VALUES
(1, 'Ahmed', '123'),
(2, 'Ahmed', '123'),
(3, 'sidati', '444');

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

DROP TABLE IF EXISTS `centre`;
CREATE TABLE IF NOT EXISTS `centre` (
  `id_centre` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `id_Admin` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL COMMENT 'Fk',
  `ville` varchar(50) DEFAULT NULL,
  `hopital` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_centre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id_centre`, `Nom`, `id_Admin`, `id_sp`, `ville`, `hopital`) VALUES
(1, 'centreA', 1, 1, NULL, NULL),
(2, 'centreB', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `generaliste`
--

DROP TABLE IF EXISTS `generaliste`;
CREATE TABLE IF NOT EXISTS `generaliste` (
  `id_generaliste` int(11) NOT NULL AUTO_INCREMENT,
  `id_personnel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_generaliste`),
  KEY `id_personnel` (`id_personnel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `generaliste`
--

INSERT INTO `generaliste` (`id_generaliste`, `id_personnel`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

DROP TABLE IF EXISTS `infirmier`;
CREATE TABLE IF NOT EXISTS `infirmier` (
  `id_infermier` int(11) NOT NULL AUTO_INCREMENT,
  `id_personnelM` int(11) NOT NULL,
  PRIMARY KEY (`id_infermier`),
  KEY `id_personnelM` (`id_personnelM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `Prénoms` varchar(30) NOT NULL,
  `dateN` date NOT NULL,
  `LieuN` varchar(30) NOT NULL,
  `Nationalité` varchar(30) NOT NULL,
  `Profession` varchar(30) NOT NULL,
  `Sexe` varchar(25) NOT NULL,
  `Addresse` varchar(30) NOT NULL,
  `Tél` int(25) NOT NULL,
  `Num_prise` int(25) NOT NULL,
  `Allergies_médicamenteuse` varchar(50) NOT NULL,
  `Durée_s` varchar(25) NOT NULL,
  `Rythme_s` varchar(25) NOT NULL,
  `Groupe_sanguin` varchar(10) NOT NULL,
  `Nom_PCU` varchar(25) NOT NULL,
  `Prénom_PCU` varchar(25) NOT NULL,
  `Téléphone_PCU` int(15) NOT NULL,
  `Adresse_PCU` varchar(25) NOT NULL,
  `Tampon` varchar(25) NOT NULL,
  `Anticoagulant` varchar(25) NOT NULL,
  `dose` varchar(25) NOT NULL,
  `Débit_pompe_sang` varchar(25) NOT NULL,
  `Membrane` varchar(50) NOT NULL,
  `surface` varchar(50) NOT NULL,
  `Débit_dialysat` varchar(25) NOT NULL,
  `Aiguille_Num` int(30) NOT NULL,
  `id_centre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `id_centre` (`id_centre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `nom`, `Prénoms`, `dateN`, `LieuN`, `Nationalité`, `Profession`, `Sexe`, `Addresse`, `Tél`, `Num_prise`, `Allergies_médicamenteuse`, `Durée_s`, `Rythme_s`, `Groupe_sanguin`, `Nom_PCU`, `Prénom_PCU`, `Téléphone_PCU`, `Adresse_PCU`, `Tampon`, `Anticoagulant`, `dose`, `Débit_pompe_sang`, `Membrane`, `surface`, `Débit_dialysat`, `Aiguille_Num`, `id_centre`) VALUES
(3, 'fatma', 'mohamed', '2018-09-02', 'kiffa', 'mauritanien', 'commercante', 'feminin', 'tvsd', 2564899, 45, 'grave', '2h', 'bien', 'A+', 'ahmed', 'vlan', 4561122, 'bggyyhyh', 'kkllkk', 'gfttj', 'v77778', 'tres', 'tsfshd', 'vlanty', 'bien', 152, 1),
(4, 'salek', 'vadel', '2018-09-02', 'kiffa', 'mauritanien', 'commercant', 'masculin', 'ksar', 8556320, 12, 'variante', '4h', 'normal', 'O+', 'sambe', 'omar', 45363222, 'ddrty', 'slow', 'vra', 'good', 'sens', 'fityyr', 'vlanty', 'bien', 458, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personnel_medical`
--

DROP TABLE IF EXISTS `personnel_medical`;
CREATE TABLE IF NOT EXISTS `personnel_medical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_centre` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `dateN` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `NumTel` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `categori` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `centre` (`id_centre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnel_medical`
--

INSERT INTO `personnel_medical` (`id`, `id_centre`, `nom`, `dateN`, `sexe`, `NumTel`, `age`, `username`, `password`, `categori`) VALUES
(3, 1, 'sidi', '2018-09-24', 'masculin', 444444, 20, 'sidi', '123', 'docteur'),
(4, 1, 'vadel', '2018-09-02', 'masc', 444444, 20, 'vadel', '123', 'infirmier'),
(5, 2, 'salem', '2018-09-02', 'masculin', 2254688, 30, 'salem', '123', 'docteur');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_g` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `fk_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_r`),
  KEY `patient` (`id_p`),
  KEY `generaliste` (`id_g`),
  KEY `specialiste` (`id_sp`),
  KEY `fk_id` (`fk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `id_seance` int(11) NOT NULL AUTO_INCREMENT,
  `id_inf` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `PLAINTES` varchar(255) NOT NULL,
  `ETAT_GENERAL` varchar(255) NOT NULL,
  `DIETETIQUE` varchar(255) NOT NULL,
  `EXAMENS_DEMENDES` varchar(255) NOT NULL,
  `REMARQUES` varchar(255) NOT NULL,
  `PROCHAINE_SEANCE` varchar(255) NOT NULL,
  `Médcin` varchar(25) NOT NULL,
  `Infermier` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `Dialyseure` varchar(25) NOT NULL,
  `Lignes Av` varchar(50) NOT NULL,
  `Aiguille_Av` varchar(50) NOT NULL,
  `Condictivité` varchar(50) NOT NULL,
  `Poids_d` varchar(50) NOT NULL,
  `Perte_Poids_d` varchar(50) NOT NULL,
  `T.A_d` varchar(50) NOT NULL,
  `T.A _c_d` varchar(50) NOT NULL,
  `Température_d` varchar(50) NOT NULL,
  `Poids_fin` varchar(25) NOT NULL,
  `Perte_Poids_fin` varchar(50) NOT NULL,
  `T.A_fin` varchar(25) NOT NULL,
  `T.A_c_fin` varchar(25) NOT NULL,
  `Température_fin` varchar(25) NOT NULL,
  PRIMARY KEY (`id_seance`),
  KEY `personnel_medical` (`id_inf`),
  KEY `patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seance_tab`
--

DROP TABLE IF EXISTS `seance_tab`;
CREATE TABLE IF NOT EXISTS `seance_tab` (
  `id_t` int(11) NOT NULL AUTO_INCREMENT,
  `id_seance` int(11) NOT NULL,
  PRIMARY KEY (`id_t`),
  KEY `seance` (`id_seance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `specialiste`
--

DROP TABLE IF EXISTS `specialiste`;
CREATE TABLE IF NOT EXISTS `specialiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `specialiste`
--

INSERT INTO `specialiste` (`id`, `nom`, `password`) VALUES
(1, 'idomou', '123'),
(2, 'kadi', '444');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id_v` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_g` int(11) NOT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `bilan` varchar(50) DEFAULT NULL,
  `examen_clinic` varchar(50) DEFAULT NULL,
  `traitement` varchar(50) DEFAULT NULL,
  `ordonance` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_v`),
  KEY `patient` (`id_p`),
  KEY `generaliste` (`id_g`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id_v`, `id_p`, `id_g`, `motif`, `bilan`, `examen_clinic`, `traitement`, `ordonance`) VALUES
(2, 3, 1, 'fievre avec mal téte', 'aucun', 'a cause de l au glasse ', 'aucun', 'parecetemol-antibiothique');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD CONSTRAINT `infermier` FOREIGN KEY (`id_infermier`) REFERENCES `infirmier` (`id_infermier`),
  ADD CONSTRAINT `pat_id` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`);

--
-- Contraintes pour la table `centre`
--
ALTER TABLE `centre`
  ADD CONSTRAINT `admin` FOREIGN KEY (`id_Admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `specialiste` FOREIGN KEY (`id_sp`) REFERENCES `specialiste` (`id`);

--
-- Contraintes pour la table `generaliste`
--
ALTER TABLE `generaliste`
  ADD CONSTRAINT `generaliste_ibfk_1` FOREIGN KEY (`id_personnel`) REFERENCES `personnel_medical` (`id`);

--
-- Contraintes pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD CONSTRAINT `personnel` FOREIGN KEY (`id_personnelM`) REFERENCES `personnel_medical` (`id`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`id_centre`) REFERENCES `centre` (`id_centre`);

--
-- Contraintes pour la table `personnel_medical`
--
ALTER TABLE `personnel_medical`
  ADD CONSTRAINT `personnel_medical_ibfk_1` FOREIGN KEY (`id_centre`) REFERENCES `centre` (`id_centre`);

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `specialiste` (`id`),
  ADD CONSTRAINT `rapport_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `rapport_ibfk_3` FOREIGN KEY (`id_g`) REFERENCES `generaliste` (`id_generaliste`),
  ADD CONSTRAINT `rapport_ibfk_4` FOREIGN KEY (`fk_id`) REFERENCES `rapport` (`id_r`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`id_inf`) REFERENCES `infirmier` (`id_infermier`);

--
-- Contraintes pour la table `seance_tab`
--
ALTER TABLE `seance_tab`
  ADD CONSTRAINT `seance_tab_ibfk_1` FOREIGN KEY (`id_seance`) REFERENCES `seance` (`id_seance`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `visite_ibfk_1` FOREIGN KEY (`id_g`) REFERENCES `generaliste` (`id_generaliste`),
  ADD CONSTRAINT `visite_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `patient` (`id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
