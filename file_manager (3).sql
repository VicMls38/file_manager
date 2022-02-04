-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 fév. 2022 à 17:44
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `file_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `Id_Compte` int NOT NULL AUTO_INCREMENT,
  `Nom_Compte` varchar(255) NOT NULL,
  `Prenom_Compte` varchar(255) NOT NULL,
  `Email_Compte` varchar(255) NOT NULL,
  `Password_Compte` varchar(255) NOT NULL,
  `DateNais_Compte` date NOT NULL,
  `Tel_Compte` varchar(11) NOT NULL,
  `Cp_Compte` varchar(255) NOT NULL,
  `Ville_Compte` varchar(255) NOT NULL,
  `Adresse1_Compte` varchar(255) NOT NULL,
  `Adresse2_Compte` varchar(255) DEFAULT NULL,
  `Region_Compte` varchar(255) NOT NULL,
  `Pays_Compte` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Compte`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Id_Compte`, `Nom_Compte`, `Prenom_Compte`, `Email_Compte`, `Password_Compte`, `DateNais_Compte`, `Tel_Compte`, `Cp_Compte`, `Ville_Compte`, `Adresse1_Compte`, `Adresse2_Compte`, `Region_Compte`, `Pays_Compte`) VALUES
(1, 'Duchmolito', 'Bobino', 'duchmol@bob.com', 'dd669481a2d6d723ea44515d2f6f85bb2ce32ea431e3ef85098ff7c766100333', '2022-01-21', '0456897412', '38170', 'seyssinet-pariset', '9 rue laurent darve', '', 'Auvergne-Rhône Alpes', 'france'),
(2, 'razer', 'raoul', 'raoul@razer.com', '0a18fa6311b4a85fb284f562abf5c9ac9f25109ae1e14a12d6f64d35700b325f', '0000-00-00', '', '', '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `Id_Dossier` int NOT NULL AUTO_INCREMENT,
  `Id_Compte_Dossier` int NOT NULL,
  `Nom_Dossier` varchar(255) NOT NULL,
  `Parent_Dossier` int NOT NULL,
  PRIMARY KEY (`Id_Dossier`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`Id_Dossier`, `Id_Compte_Dossier`, `Nom_Dossier`, `Parent_Dossier`) VALUES
(35, 2, 'qwerty', 1),
(33, 2, 'folder', 1),
(31, 2, 'racine', 1),
(36, 2, 'dossier', 1),
(37, 1, 'jacques', 1);

-- --------------------------------------------------------

--
-- Structure de la table `stockage`
--

DROP TABLE IF EXISTS `stockage`;
CREATE TABLE IF NOT EXISTS `stockage` (
  `Id_Stockage` int NOT NULL AUTO_INCREMENT,
  `Id_Compte_Stockage` int NOT NULL,
  `Nom_Stockage` varchar(255) NOT NULL,
  `Size_Stockage` bigint NOT NULL,
  `Type_Stockage` varchar(255) NOT NULL,
  `Data_Stockage` varchar(10000) NOT NULL,
  `Date_Stockage` date NOT NULL,
  `Date_Modif_Stockage` date NOT NULL,
  `Id_Parent_Dossier_Stockage` int NOT NULL,
  PRIMARY KEY (`Id_Stockage`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stockage`
--

INSERT INTO `stockage` (`Id_Stockage`, `Id_Compte_Stockage`, `Nom_Stockage`, `Size_Stockage`, `Type_Stockage`, `Data_Stockage`, `Date_Stockage`, `Date_Modif_Stockage`, `Id_Parent_Dossier_Stockage`) VALUES
(178, 1, 'background_land.png', 481433, 'image/png', 'file/1/background_land.png', '2022-02-02', '2022-02-02', 0),
(179, 1, 'background.png', 463263, 'image/png', 'file/1/background.png', '2022-02-02', '2022-02-02', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
