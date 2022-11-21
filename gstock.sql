-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2022 at 05:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'appareil electronique'),
(2, 'Produit Brarudii'),
(3, 'rrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `entreestock`
--

DROP TABLE IF EXISTS `entreestock`;
CREATE TABLE IF NOT EXISTS `entreestock` (
  `id_stock` int(11) NOT NULL AUTO_INCREMENT,
  `CodePro` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `date_Entre` date NOT NULL,
  `Quantite` varchar(255) NOT NULL,
  `Prix_Achat` varchar(255) NOT NULL,
  `fournisseur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_stock`),
  KEY `CodePro` (`CodePro`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entreestock`
--

INSERT INTO `entreestock` (`id_stock`, `CodePro`, `Designation`, `Categorie`, `date_Entre`, `Quantite`, `Prix_Achat`, `fournisseur`) VALUES
(1, 'PR001', 'Entree Amstel', 'Produit Brarudii', '2022-01-21', '20', '2300fbu', 'Ahishakiye'),
(2, 'PR003', 'Fanta', 'Produit Brarudi', '2022-01-21', '24', '800fbu', 'Ahishakiye'),
(4, 'PR004', 'viva malt', 'Produit Brarudii', '2022-02-08', '32', '1000fbu', 'Bimenyimana'),
(5, 'PR001', 'Entree Amstel', 'appareil electronique', '2022-03-03', '89', '1000fbu', 'Budigo');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id_fourn` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fourn` varchar(255) NOT NULL,
  `prenom_fourn` varchar(255) NOT NULL,
  `addresse_fourn` varchar(255) NOT NULL,
  `telephone_fourn` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fourn`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`id_fourn`, `nom_fourn`, `prenom_fourn`, `addresse_fourn`, `telephone_fourn`) VALUES
(1, 'Ahishakiye', 'Yvan Igor', 'kigobe nord', '76038723'),
(2, 'Budigo', 'Bertrand', 'Kamenge', '76837105'),
(3, 'Bimenyimana', 'Tony Blaise', 'Gihosha', '67123456');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT,
  `CodePro` varchar(250) NOT NULL,
  `nomPro` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pro`, `CodePro`, `nomPro`) VALUES
(1, 'PR001', 'Primus'),
(2, 'PR002', 'Amstel'),
(3, 'PR003', 'Fanta'),
(4, 'PR004', 'Viva Malt');

-- --------------------------------------------------------

--
-- Table structure for table `sortiestock`
--

DROP TABLE IF EXISTS `sortiestock`;
CREATE TABLE IF NOT EXISTS `sortiestock` (
  `id_sortie` int(11) NOT NULL AUTO_INCREMENT,
  `codepro` varchar(255) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `qte_sortie` int(10) NOT NULL,
  `Prix_Achat` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  PRIMARY KEY (`id_sortie`),
  KEY `codepro` (`codepro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sortiestock`
--

INSERT INTO `sortiestock` (`id_sortie`, `codepro`, `designation`, `categorie`, `qte_sortie`, `Prix_Achat`, `date_sortie`) VALUES
(1, 'PR003', 'Fanta', 'Produit Brarudi', 4, '1000fbu', '2022-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `idstock` int(11) NOT NULL AUTO_INCREMENT,
  `qte_stock` varchar(250) NOT NULL,
  `Id_sortiestock` int(11) NOT NULL,
  `Id_entrestock` int(11) NOT NULL,
  `Codepro` int(11) NOT NULL,
  PRIMARY KEY (`idstock`),
  KEY `Id_sortiestock` (`Id_sortiestock`),
  KEY `Id_entrestock` (`Id_entrestock`),
  KEY `Codepro` (`Codepro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` int(11) NOT NULL AUTO_INCREMENT,
  `nom_util` varchar(255) NOT NULL,
  `prenom_util` varchar(255) NOT NULL,
  `email_util` varchar(255) NOT NULL,
  `adresse_util` varchar(250) NOT NULL,
  `phone_util` varchar(250) NOT NULL,
  `password_util` varchar(255) NOT NULL,
  PRIMARY KEY (`id_util`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom_util`, `prenom_util`, `email_util`, `adresse_util`, `phone_util`, `password_util`) VALUES
(1, 'Ahishakiye', 'Yvan Igor', 'ahishakiyeyvanigor@gmail.com', 'Kamenge', '76038723', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
