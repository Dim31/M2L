-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Mars 2019 à 09:16
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fredi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

CREATE TABLE IF NOT EXISTS `adherents` (
  `NUMERO_LICENCE` varchar(25) NOT NULL DEFAULT '0',
  `NUM_CLUB` varchar(10) NOT NULL,
  `SEXE` char(1) DEFAULT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `DATE_NAIS` date DEFAULT NULL,
  `rue` varchar(128) DEFAULT NULL,
  `CP` varchar(5) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`NUMERO_LICENCE`),
  KEY `FK_ADHERENTS_CLUBS` (`NUM_CLUB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `adherents`
--

INSERT INTO `adherents` (`NUMERO_LICENCE`, `NUM_CLUB`, `SEXE`, `NOM`, `PRENOM`, `DATE_NAIS`, `rue`, `CP`, `VILLE`, `EMAIL`) VALUES
('1', '1', 'H', 'Desserich', 'Loic', '1998-12-26', 'st agne', '31430', 'toulouse', 'loic@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `NUM_CLUB` varchar(10) NOT NULL,
  `NUM_LIGUE` varchar(10) NOT NULL DEFAULT '0',
  `NUMERO_LICENCE` varchar(25) DEFAULT NULL,
  `mdpTresorier` varchar(20) NOT NULL,
  `NOM_CLUB` varchar(128) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  `CP` varchar(5) DEFAULT NULL,
  `RUE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`NUM_CLUB`),
  KEY `FK_CLUBS_LIGUES` (`NUM_LIGUE`),
  KEY `FK_CLUBS_ADHERENTS` (`NUMERO_LICENCE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`NUM_CLUB`, `NUM_LIGUE`, `NUMERO_LICENCE`, `mdpTresorier`, `NOM_CLUB`, `VILLE`, `CP`, `RUE`) VALUES
('1', '1', NULL, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demandeurs`
--

CREATE TABLE IF NOT EXISTS `demandeurs` (
  `ADRESSE_MAIL` varchar(128) NOT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `RUE` varchar(100) DEFAULT NULL,
  `CP` char(5) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  `NUM_RECU` varchar(10) DEFAULT '0',
  `PASSWORD` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ADRESSE_MAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `demandeurs`
--

INSERT INTO `demandeurs` (`ADRESSE_MAIL`, `NOM`, `PRENOM`, `RUE`, `CP`, `VILLE`, `NUM_RECU`, `PASSWORD`) VALUES
('axel31@gmail.com', 'ly', 'axel', '40 rue ', '31430', 'Le Fousseret', '1', 'axel'),
('jc.berbier@gmail.com', 'Berbier', 'Jean-Christophe', '12 rue des marrons', '54600', 'Villers-Les-Nancy', '0', 'jcb'),
('r.becker@gmail.com', 'Becker', 'Romain', '1 rue des mesanges', '54600', 'Villers-Les-Nancy', '0', 'rb');

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE IF NOT EXISTS `lien` (
  `NUMERO_LICENCE` varchar(25) NOT NULL DEFAULT '0',
  `ADRESSE_MAIL` varchar(128) NOT NULL,
  PRIMARY KEY (`NUMERO_LICENCE`,`ADRESSE_MAIL`),
  KEY `FK_LIEN_DEMANDEURS` (`ADRESSE_MAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `lignes_frais`
--

CREATE TABLE IF NOT EXISTS `lignes_frais` (
  `ADRESSE_MAIL` varchar(128) NOT NULL,
  `DATE_FRAIS` date NOT NULL,
  `ID_MOTIF` bigint(2) DEFAULT NULL,
  `TRAJET` varchar(50) DEFAULT NULL,
  `KM` bigint(4) DEFAULT '0',
  `COUT_PEAGE` decimal(4,2) DEFAULT '0.00',
  `COUT_REPAS` decimal(4,2) DEFAULT '0.00',
  `COUT_HEBERGEMENT` decimal(4,2) DEFAULT '0.00',
  `KM_VALIDE` bigint(4) DEFAULT '0',
  `PEAGE_VALIDE` decimal(4,2) DEFAULT '0.00',
  `REPAS_VALIDE` decimal(4,2) DEFAULT '0.00',
  `HEBERGEMENT_VALIDE` decimal(4,2) DEFAULT '0.00',
  `TOTAL` decimal(6,2) DEFAULT '0.00',
  PRIMARY KEY (`ADRESSE_MAIL`,`DATE_FRAIS`),
  KEY `FK_LIGNES_FRAIS_MOTIFS` (`ID_MOTIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `lignes_frais`
--

INSERT INTO `lignes_frais` (`ADRESSE_MAIL`, `DATE_FRAIS`, `ID_MOTIF`, `TRAJET`, `KM`, `COUT_PEAGE`, `COUT_REPAS`, `COUT_HEBERGEMENT`, `KM_VALIDE`, `PEAGE_VALIDE`, `REPAS_VALIDE`, `HEBERGEMENT_VALIDE`, `TOTAL`) VALUES
('axel31@gmail.com', '0001-01-01', 1, 'rdqs', 2, '1.00', '2.00', '2.00', NULL, NULL, NULL, NULL, NULL),
('axel31@gmail.com', '0002-02-02', 1, 'paris france', 200, '50.00', '32.00', '2.00', NULL, NULL, NULL, NULL, NULL),
('axel31@gmail.com', '2001-01-01', 1, 'test', 5, '5.00', '5.00', '5.00', NULL, NULL, NULL, NULL, NULL),
('axel31@gmail.com', '2017-11-06', 1, NULL, 25, '2.00', '2.00', '2.00', 0, '0.00', '0.00', '0.00', '0.00'),
('axel31@gmail.com', '2019-03-05', 1, 'Toullouse', 25, '25.00', '25.00', '25.00', NULL, NULL, NULL, NULL, NULL),
('axel31@gmail.com', '7878-08-07', 1, 'sasa', 1, '1.00', '1.00', '1.00', NULL, NULL, NULL, NULL, NULL),
('jc.berbier@gmail.com', '0197-12-26', 1, 'paris tlse', 1, '1.00', '1.00', '1.00', NULL, NULL, NULL, NULL, NULL),
('jc.berbier@gmail.com', '2012-01-12', 3, '', 280, '24.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00'),
('jc.berbier@gmail.com', '2012-03-13', 3, '', 150, '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00'),
('jc.berbier@gmail.com', '2012-06-24', 3, '', 1500, '99.99', '99.99', '99.99', 0, '0.00', '0.00', '0.00', '0.00'),
('r.becker@gmail.com', '2012-02-02', NULL, 'Nancy-Paris', 600, '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `ligues`
--

CREATE TABLE IF NOT EXISTS `ligues` (
  `NUM_LIGUE` varchar(10) NOT NULL DEFAULT '0',
  `NOM` varchar(100) DEFAULT NULL,
  `SIGLE` varchar(10) DEFAULT NULL,
  `PRESIDENT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NUM_LIGUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `ligues`
--

INSERT INTO `ligues` (`NUM_LIGUE`, `NOM`, `SIGLE`, `PRESIDENT`) VALUES
('1', 'Lorraine', 'L2L', 'Quiche');

-- --------------------------------------------------------

--
-- Structure de la table `motifs`
--

CREATE TABLE IF NOT EXISTS `motifs` (
  `ID_MOTIF` bigint(2) NOT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_MOTIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `motifs`
--

INSERT INTO `motifs` (`ID_MOTIF`, `LIBELLE`) VALUES
(1, 'Reunion'),
(2, 'Reunion arbitrage'),
(3, 'Competition'),
(4, 'Competition regionale'),
(5, 'Competition nationale'),
(6, 'Competition internationale'),
(7, 'Stage');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD CONSTRAINT `FK_ADHERENTS_CLUBS` FOREIGN KEY (`NUM_CLUB`) REFERENCES `clubs` (`NUM_CLUB`);

--
-- Contraintes pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `FK_CLUBS_ADHERENTS` FOREIGN KEY (`NUMERO_LICENCE`) REFERENCES `adherents` (`NUMERO_LICENCE`),
  ADD CONSTRAINT `FK_CLUBS_LIGUES` FOREIGN KEY (`NUM_LIGUE`) REFERENCES `ligues` (`NUM_LIGUE`);

--
-- Contraintes pour la table `lien`
--
ALTER TABLE `lien`
  ADD CONSTRAINT `FK_LIEN_ADHERENTS` FOREIGN KEY (`NUMERO_LICENCE`) REFERENCES `adherents` (`NUMERO_LICENCE`),
  ADD CONSTRAINT `FK_LIEN_DEMANDEURS` FOREIGN KEY (`ADRESSE_MAIL`) REFERENCES `demandeurs` (`ADRESSE_MAIL`);

--
-- Contraintes pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  ADD CONSTRAINT `FK_LIGNES_FRAIS_DEMANDEURS` FOREIGN KEY (`ADRESSE_MAIL`) REFERENCES `demandeurs` (`ADRESSE_MAIL`),
  ADD CONSTRAINT `FK_LIGNES_FRAIS_MOTIFS` FOREIGN KEY (`ID_MOTIF`) REFERENCES `motifs` (`ID_MOTIF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
