-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 12:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetm1s2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nomComplet`, `username`, `password`) VALUES
(1, 'MedLemin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `docteur`
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
-- Dumping data for table `docteur`
--

INSERT INTO `docteur` (`id`, `nomDoc`, `Numero`, `adresse`, `tel`, `speciealite`, `username`, `password`) VALUES
(13, 'Ahmed', '33399599', 'Ndb', '23456782', 'Diagnostic ', 'med', '123'),
(15, 'sidi salem', 'c12', 'sidi@gmail.com', '123334', 'GENICOLOGUE', 'sidi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaliser`
--

CREATE TABLE `hospitaliser` (
  `id_salle` int(11) NOT NULL,
  `numlit` int(11) NOT NULL,
  `num_malade` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaliser`
--

INSERT INTO `hospitaliser` (`id_salle`, `numlit`, `num_malade`, `id`) VALUES
(1, 1, 98, 43),
(5, 1, 99, 44);

-- --------------------------------------------------------

--
-- Table structure for table `infirmier`
--

CREATE TABLE `infirmier` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `rotation` varchar(30) NOT NULL,
  `salaire` varchar(30) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infirmier`
--

INSERT INTO `infirmier` (`id`, `nom`, `prenom`, `adresse`, `tel`, `rotation`, `salaire`, `code`, `id_service`) VALUES
(50, 'sidi', 'ahmed', 'kiff', 2344, 'sdd', '56666df', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `malade`
--

CREATE TABLE `malade` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `diagnostic` text NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `dated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malade`
--

INSERT INTO `malade` (`id`, `numero`, `nom`, `adresse`, `tel`, `diagnostic`, `age`, `sexe`, `dated`) VALUES
(94, 6, 'sidi', 'hhhh', '567888', 'dddd', 20, 'Homme', '2021-07-06 15:05:35'),
(98, 4, 'amar', 'hhhh', '567888', 'hhh', 20, 'Homme', '2021-07-06 15:05:35'),
(99, 2, 'dade sidi', 'daet', '2344', 'sdfg', 29, 'Femme', '2021-07-08 02:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombreLits` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`id`, `numero`, `nombreLits`, `code`) VALUES
(1, 12, 6, 6),
(2, 10, 9, 6),
(5, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `code` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `batiment` varchar(50) NOT NULL,
  `directeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`code`, `ids`, `nom`, `batiment`, `directeur`) VALUES
(1, 6, 'paarkina', 'C14', 13),
(2, 7, 'CV', 'CHG', 15);

-- --------------------------------------------------------

--
-- Table structure for table `soigner`
--

CREATE TABLE `soigner` (
  `idso` int(11) NOT NULL,
  `numero_docteur` int(11) NOT NULL,
  `numero_malade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soigner`
--

INSERT INTO `soigner` (`idso`, `numero_docteur`, `numero_malade`) VALUES
(30, 15, 94),
(34, 13, 98),
(35, 13, 99);

-- --------------------------------------------------------

--
-- Table structure for table `surveiller`
--

CREATE TABLE `surveiller` (
  `id` int(11) NOT NULL,
  `id-salle` int(11) NOT NULL,
  `surveillant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `urgence`
--

CREATE TABLE `urgence` (
  `id` int(11) NOT NULL,
  `id_docteur` int(11) NOT NULL,
  `id_malade` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `date_urgence` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urgence`
--

INSERT INTO `urgence` (`id`, `id_docteur`, `id_malade`, `id_service`, `date_urgence`, `status`) VALUES
(66, 13, 94, 7, '2021-07-06 14:21:20', 'no'),
(67, 15, 99, 6, '2021-07-08 02:55:30', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num_malade` (`num_malade`),
  ADD KEY `id-salle` (`id_salle`);

--
-- Indexes for table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `directeur` (`directeur`);

--
-- Indexes for table `soigner`
--
ALTER TABLE `soigner`
  ADD PRIMARY KEY (`idso`),
  ADD KEY `numero_malade` (`numero_malade`),
  ADD KEY `numero_docteur` (`numero_docteur`);

--
-- Indexes for table `surveiller`
--
ALTER TABLE `surveiller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surveillant` (`surveillant`),
  ADD KEY `id-salle` (`id-salle`);

--
-- Indexes for table `urgence`
--
ALTER TABLE `urgence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_docteur` (`id_docteur`),
  ADD KEY `id_malade` (`id_malade`),
  ADD KEY `id_service` (`id_service`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `infirmier`
--
ALTER TABLE `infirmier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `malade`
--
ALTER TABLE `malade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soigner`
--
ALTER TABLE `soigner`
  MODIFY `idso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `surveiller`
--
ALTER TABLE `surveiller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urgence`
--
ALTER TABLE `urgence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  ADD CONSTRAINT `hospitaliser_ibfk_1` FOREIGN KEY (`num_malade`) REFERENCES `malade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitaliser_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infirmier`
--
ALTER TABLE `infirmier`
  ADD CONSTRAINT `infirmier_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`ids`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`code`) REFERENCES `service` (`ids`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`directeur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soigner`
--
ALTER TABLE `soigner`
  ADD CONSTRAINT `soigner_ibfk_1` FOREIGN KEY (`numero_docteur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soigner_ibfk_2` FOREIGN KEY (`numero_malade`) REFERENCES `malade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surveiller`
--
ALTER TABLE `surveiller`
  ADD CONSTRAINT `surveiller_ibfk_1` FOREIGN KEY (`id-salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveiller_ibfk_2` FOREIGN KEY (`surveillant`) REFERENCES `infirmier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `urgence`
--
ALTER TABLE `urgence`
  ADD CONSTRAINT `urgence_ibfk_1` FOREIGN KEY (`id_docteur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urgence_ibfk_2` FOREIGN KEY (`id_malade`) REFERENCES `malade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urgence_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`ids`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
