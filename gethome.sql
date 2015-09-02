-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 02 Septembre 2015 à 18:18
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gethome`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `nom_cite` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `caracteristique` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preference` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='permet de gerer la chambre' AUTO_INCREMENT=25 ;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`nom_cite`, `prix`, `pays`, `ville`, `quartier`, `caracteristique`, `id`, `preference`) VALUES
('binary dream', 15000, 'cameroun', 'NGAOUNDERE', '', 'tout est moderne', 1, ''),
('nom2', 167000, 'nom1', 'nom1', '', 'nom1', 2, ''),
('ma cite', 13000, 'tchad', 'mundu', '', 'rienn de chez rien', 3, ''),
('cite des genies', 167000, 'nom1', 'nom1', '', 'nom1', 4, ''),
('binary dream', 15000, 'cameroun', 'yaounde', '', 'cuisine: moderne; douche:moderne; douche : individuelle', 5, ''),
('le king', 11000, 'cameroun', 'yaounde', '', 'douche:interne;cuisine:0;', 6, ''),
('babadjou', 12000, 'cameroun', 'ngaoundere', '', 'cuisine:non;douche:moderne,interne;', 7, ''),
('dfss', 323, 'DGFDG', 'DDVD', '', 'JY.Y/NUTJRDJ', 8, ''),
('pythagore', 9000, 'cameroun', 'NGAOUNDERE', '', 'cuisine:non;douche:moderne,interne,individuel', 9, ''),
('site du savoir', 35000, 'cameroun', 'Ngaoundere', '', 'tout est interne', 10, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:7:"moderne";s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:7:"moderne";s:12:"appartenance";s:7:"commune";}}'),
('test de preference', 12000, 'cameroun', 'fafang', '', 'rien de chez rien', 11, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:7:"commune";}}'),
('test  2', 12000, 'cameroun', 'bafout', '', 'rien de chez rien', 12, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:7:"commune";}}'),
('rachida', 13000, 'cameroun', 'bsaa', '', 'equipe', 13, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";N;s:12:"appartenance";s:7:"commune";}}'),
('TU PRENDS', 12000, 'cameroun', 'yaounde', '', 'rien de chez rien', 14, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:7:"commune";}}'),
('binary dream 2', 15000, 'cameroun', 'Douala', '', 'tout t''y est', 15, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:7:"moderne";s:12:"appartenance";s:10:"individuel";}s:6:"douche";a:3:{s:8:"position";s:7:"interne";s:4:"luxe";s:7:"moderne";s:12:"appartenance";s:10:"individuel";}}'),
('sfgfhgg', 111, 'dfsbg', 'dqzf', 'vd', '', 16, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"externe";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:7:"commune";}s:6:"douche";a:3:{s:8:"position";s:7:"externe";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:7:"commune";}}'),
('eva city', 12000, 'cameroun', 'NGAOUNDERE', 'Dang', '', 17, 'a:2:{s:7:"cuisine";a:3:{s:8:"position";s:7:"externe";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:7:"commune";}s:6:"douche";a:3:{s:8:"position";s:7:"externe";s:4:"luxe";s:12:"traditionnel";s:12:"appartenance";s:7:"commune";}}'),
('samedi', 1000, 'cameroun', 'yaounde', 'samedi', '', 18, ''),
('jkjkbg', 333, 'gjkb', 'khfvhj', 'hgh', '', 19, ''),
('rggzrg', 12000, 'vfsvsf', 'NGAOUNDERE', 'gfzgzr', '', 20, ''),
('carelle', 12000, 'cameroun', 'yaounde', 'coron', '', 21, ''),
('leana', 20000, 'cameroun', 'yaounde', 'etoudi', '', 22, ''),
('leana', 20000, 'cameroun', 'yaounde', 'etoudi', '', 23, ''),
('leana', 50000, 'cameroun', 'yaounde', 'etoudi', '', 24, '');

-- --------------------------------------------------------

--
-- Structure de la table `cuisine`
--

CREATE TABLE IF NOT EXISTS `cuisine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_chambre` int(255) NOT NULL,
  `luxe` varchar(255) NOT NULL,
  `appartenance` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `cuisine`
--

INSERT INTO `cuisine` (`id`, `id_chambre`, `luxe`, `appartenance`, `position`, `description`) VALUES
(1, 0, 'cuisin', 'fdd', 'cuisien', 'cdcdv'),
(2, 0, 'cuisin', 'fdd', 'cuisien', 'cdcdv'),
(3, 0, 'cuisin', 'fdd', 'cuisien', 'cdcdv'),
(4, 0, 'cuisin', 'fdd', 'cuisien', 'cdcdv'),
(5, 1, 'individuel', 'individuel', 'extrerne', ''),
(6, 1, 'individuel', 'individuel', 'externe', 'bbbbb'),
(7, 1, 'individuel', 'individuel', 'externe', ''),
(8, 24, 'individuel', 'individuel', 'externe', 'cool cuisine');

-- --------------------------------------------------------

--
-- Structure de la table `douche`
--

CREATE TABLE IF NOT EXISTS `douche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_chambre` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `luxe` varchar(255) NOT NULL,
  `appartenance` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `douche`
--

INSERT INTO `douche` (`id`, `id_chambre`, `position`, `luxe`, `appartenance`, `description`) VALUES
(1, 1, 'externe', 'individuel', 'individuel', 'ma ddouche'),
(2, 1, 'externe', 'individuel', 'individuel', ''),
(3, 24, 'externe', 'individuel', 'individuel', 'cool douche');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) NOT NULL,
  `prod_desc` varchar(1000) NOT NULL,
  `prod_price` varchar(1000) NOT NULL,
  `prod_quantity` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `prod_name`, `prod_desc`, `prod_price`, `prod_quantity`) VALUES
(1, 'Product', 'Description', '100', '10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
