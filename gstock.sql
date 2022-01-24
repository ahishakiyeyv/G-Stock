-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2022 at 01:47 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'appareil electronique'),
(2, 'Produit Brarudi');

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
(1, 'Ahishakiye', 'Yvan Igor', 'kigobe sud', '76038723'),
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pro`, `CodePro`, `nomPro`) VALUES
(1, 'PR001', 'Primus'),
(2, 'PR002', 'Amstel'),
(3, 'PR003', 'Fanta');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id_stock` int(11) NOT NULL AUTO_INCREMENT,
  `CodePro` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `date_Entre` date NOT NULL,
  `Quantite` varchar(255) NOT NULL,
  `Prix_Achat` varchar(255) NOT NULL,
  `fournisseur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_stock`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_stock`, `CodePro`, `Designation`, `Categorie`, `date_Entre`, `Quantite`, `Prix_Achat`, `fournisseur`) VALUES
(1, 'PR002', 'Entree Amstel', 'Produit Brarudi', '2022-01-21', '24', '2300fbu', 'Budigo'),
(2, 'PR003', 'Fanta', 'Produit Brarudi', '2022-01-21', '24', '800fbu', 'Ahishakiye');

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
  `password_util` varchar(255) NOT NULL,
  PRIMARY KEY (`id_util`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom_util`, `prenom_util`, `email_util`, `password_util`) VALUES
(1, 'Ahishakiye', 'Yvan Igor', 'ahishakiyeyvanigor@gmail.com', '123456'),
(2, 'Bimenyimana', 'Tony Blaise', 'bimenyimana@gmail.com', '1111111'),
(3, 'Bimenyimana', 't', '', ''),
(4, 'Ahindoreye', 'Prudence', 'ahiprudent@gmail.com', '2222222');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
