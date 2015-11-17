-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2015 às 13:25
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `borrows`
--

CREATE TABLE IF NOT EXISTS `borrows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `retrievedate` datetime NOT NULL,
  `client_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `retrieved` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  KEY `movie_id` (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `borrows`
--

INSERT INTO `borrows` (`id`, `retrievedate`, `client_id`, `film_id`, `retrieved`) VALUES
(1, '2015-12-14 11:36:00', 1, 2, 0),
(2, '2015-11-18 05:19:36', 2, 2, 0),
(3, '2032-11-17 12:44:00', 2, 3, 0),
(4, '2032-11-17 12:44:00', 2, 3, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `disctrict` varchar(255) NOT NULL,
  `docnr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `gender`, `zone`, `disctrict`, `docnr`) VALUES
(1, 'Celso', 'M', 'Mahotas', 'Maputo Cidade', '11345459459B'),
(2, 'Osvaldo Maria', 'M', 'Polana Canico', 'Maputo Cidade', '221312343243C'),
(3, 'Maria de Fatima', 'F', 'Mahotas', 'Maputo Cidade', '23234342434234X');

-- --------------------------------------------------------

--
-- Estrutura da tabela `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sinopse` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `actor` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `films`
--

INSERT INTO `films` (`id`, `title`, `sinopse`, `category`, `actor`, `author`, `status_id`) VALUES
(2, 'Perseguicao sem Treguas', 'breve sinopse', 'Accao', 'Jean Claude Van Dam', '', 1),
(3, 'Tai-chi', 'breve descricao', 'Accao', 'Jet Li', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `statuses`
--

INSERT INTO `statuses` (`id`, `designation`) VALUES
(1, 'Bom'),
(2, 'Razoavel'),
(3, 'Mau');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
