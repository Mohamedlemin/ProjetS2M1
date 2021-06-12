-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2021 at 03:46 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `projetm1s2`
--
-- ---------------------------p------------------------------
--
-- Table structure for table `admin`
--
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Dumping data for table `admin`
--
INSERT INTO `admin` (`id`, `nomComplet`, `username`, `password`)
VALUES (1, 'MedLemin', 'Admin', 'Admin');
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `docteur`
--
INSERT INTO `docteur` (
    `id`,
    `nomDoc`,
    `Numero`,
    `adresse`,
    `tel`,
    `speciealite`,
    `username`,
    `password`
  )
VALUES (
    6,
    'Mohamed lemin',
    'c134',
    'Nouakchott',
    '46571233',
    'Cardiologist ',
    'ahmed',
    '1234'
  ),
  (
    13,
    'Ahmed',
    '33399599',
    'Ndb',
    '23456782',
    'Diagnostic ',
    'med',
    '123'
  );
-- --------------------------------------------------------
--
-- Table structure for table `hospitaliser`
--
CREATE TABLE `hospitaliser` (
  `id-salle` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL,
  `numlit` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `infirmier`
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `infirmier`
--
INSERT INTO `infirmier` (
    `id`,
    `nom`,
    `prenom`,
    `adresse`,
    `tel`,
    `rotation`,
    `salaire`,
    `code`
  )
VALUES (
    2,
    'Neye',
    'Ahmed',
    'rosso',
    '23456782',
    'tewst',
    '5680$',
    1
  ),
  (
    3,
    'Ahmed',
    'Ali',
    'kiffa',
    '23456782',
    'test',
    '1500',
    2
  );
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `salle`
--
CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombreLits` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `salle`
--
INSERT INTO `salle` (`id`, `numero`, `nombreLits`, `code`)
VALUES (2, 12, 6, 1);
-- --------------------------------------------------------
--
-- Table structure for table `service`
--
CREATE TABLE `service` (
  `code` int(11) NOT NULL,
  `directeur` int(11) NOT NULL,
  `ids` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `batiment` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `service`
--
INSERT INTO `service` (`code`, `directeur`, `ids`, `nom`, `batiment`)
VALUES (4, 6, 1, 'GENICOLOQUE', 'CHG'),
  (12, 8, 2, 'Sidaty', 'B4');
-- --------------------------------------------------------
--
-- Table structure for table `soigner`
--
CREATE TABLE `soigner` (
  `numero-docteur` int(11) NOT NULL,
  `numero-malade` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `surveiller`
--
CREATE TABLE `surveiller` (
  `id-salle` int(11) NOT NULL,
  `surveillant` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
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
ADD PRIMARY KEY (`id-salle`),
  ADD KEY `id-salle` (`id-salle`),
  ADD KEY `numero-malade` (`numero-malade`);
--
-- Indexes for table `infirmier`
--
ALTER TABLE `infirmier`
ADD PRIMARY KEY (`id`);
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
  ADD UNIQUE KEY `code` (`code`);
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT for table `docteur`
--
ALTER TABLE `docteur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
--
-- AUTO_INCREMENT for table `infirmier`
--
ALTER TABLE `infirmier`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--
-- AUTO_INCREMENT for table `malade`
--
ALTER TABLE `malade`
MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- Constraints for dumped tables
--
--
-- Constraints for table `hospitaliser`
--
ALTER TABLE `hospitaliser`
ADD CONSTRAINT `hospitaliser_ibfk_1` FOREIGN KEY (`id-salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitaliser_ibfk_2` FOREIGN KEY (`numero-malade`) REFERENCES `malade` (`numero`);