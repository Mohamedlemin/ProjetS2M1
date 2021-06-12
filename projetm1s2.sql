-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2021 at 03:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `projetm1s2`
--
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
--
-- Indexes for dumped tables
--
--
-- Indexes for table `infirmier`
--
ALTER TABLE `infirmier`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `infirmier`
--
ALTER TABLE `infirmier`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;