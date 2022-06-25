-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 25 Juin 2022 à 22:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet_boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `section1`
--

CREATE TABLE IF NOT EXISTS `section1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `section1`
--

INSERT INTO `section1` (`id`, `name`, `image`, `price`) VALUES
(1, 'Complet femme', 'complet-f-gris.png', 10000),
(2, 'Ordinateur Apple bureau', 'clay_banks_tqytwfn1b_kS7Cm.jpg', 450000),
(3, 'Plante Cactus', 'cactus.jpg', 1200),
(4, 'Complet homme', 'complet-homme.png', 17000),
(5, 'PC Apple + mobile + montre', 'julian_o_hayon_hy3l4_2yfhX.jpg', 800000),
(6, 'Pull Adidas', 'clothe/pull-adidas.jpg', 25000);

-- --------------------------------------------------------

--
-- Structure de la table `section2`
--

CREATE TABLE IF NOT EXISTS `section2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
