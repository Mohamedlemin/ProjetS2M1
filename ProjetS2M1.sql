-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2021 at 10:14 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ProjetM1S2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `nomComplet`, `username`, `password`) VALUES
(1, 'MedLemin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `docteur`
--

CREATE TABLE `docteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `Numéro` int(25) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `speciealite` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitaliser`
--

CREATE TABLE `hospitaliser` (
  `id-salle` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL,
  `numlit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infirmier`
--

CREATE TABLE `infirmier` (
  `numero` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `rotation` varchar(30) NOT NULL,
  `salaire` varchar(30) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `malade`
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
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombreLits` int(11) NOT NULL,
  `code-service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `code` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `batiment` int(11) NOT NULL,
  `directeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soigner`
--

CREATE TABLE `soigner` (
  `numero-docteur` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surveiller`
--

CREATE TABLE `surveiller` (
  `id-salle` int(11) NOT NULL,
  `surveillant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
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
  ADD PRIMARY KEY (`id-salle`),
  ADD KEY `id-salle` (`id-salle`),
  ADD KEY `numero-malade` (`numero-malade`);

--
-- Indexes for table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`numero`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code-service` (`code-service`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`code`),
  ADD KEY `directeur` (`directeur`);

--
-- Indexes for table `soigner`
--
ALTER TABLE `soigner`
  ADD KEY `numero-docteur` (`numero-docteur`),
  ADD KEY `numero-malade` (`numero-malade`);

--
-- Indexes for table `surveiller`
--
ALTER TABLE `surveiller`
  ADD PRIMARY KEY (`id-salle`),
  ADD KEY `surveillant` (`surveillant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infirmier`
--
ALTER TABLE `infirmier`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malade`
--
ALTER TABLE `malade`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospitaliser`
--
ALTER TABLE `hospitaliser`
  ADD CONSTRAINT `hospitaliser_ibfk_1` FOREIGN KEY (`id-salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitaliser_ibfk_2` FOREIGN KEY (`numero-malade`) REFERENCES `malade` (`numero`);

--
-- Constraints for table `infirmier`
--
ALTER TABLE `infirmier`
  ADD CONSTRAINT `infirmier_ibfk_1` FOREIGN KEY (`code`) REFERENCES `service` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`code-service`) REFERENCES `service` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`directeur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soigner`
--
ALTER TABLE `soigner`
  ADD CONSTRAINT `soigner_ibfk_1` FOREIGN KEY (`numero-docteur`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soigner_ibfk_2` FOREIGN KEY (`numero-malade`) REFERENCES `malade` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surveiller`
--
ALTER TABLE `surveiller`
  ADD CONSTRAINT `surveiller_ibfk_1` FOREIGN KEY (`id-salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveiller_ibfk_2` FOREIGN KEY (`surveillant`) REFERENCES `infirmier` (`numero`);
