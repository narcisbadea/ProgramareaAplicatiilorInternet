-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 30, 2021 at 01:17 PM
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
-- Database: `facultate`
--

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `codDisciplina` int(11) NOT NULL,
  `Disciplina` varchar(30) DEFAULT NULL,
  `An_Studiu` int(11) DEFAULT NULL,
  PRIMARY KEY (`codDisciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`codDisciplina`, `Disciplina`, `An_Studiu`) VALUES
(3021, 'PAI', 3),
(3022, 'PJ', 3),
(3023, 'PC', 1),
(4025, 'MTP', 3);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `Marca` char(6) DEFAULT NULL,
  `codDisciplina` int(11) DEFAULT NULL,
  `Nota` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`Marca`, `codDisciplina`, `Nota`) VALUES
('12000', 3021, 10),
('19999', 3023, 7),
('12000', 3022, 9),
('12001', 3021, 10),
('12001', 3022, 9),
('12045', 4025, 6),
('12045', 4025, 8),
('12045', 3022, 9),
('12045', 3041, 7),
('12045', 3021, 6.5);

-- --------------------------------------------------------

--
-- Table structure for table `studenti_ac`
--

DROP TABLE IF EXISTS `studenti_ac`;
CREATE TABLE IF NOT EXISTS `studenti_ac` (
  `Marca` char(6) NOT NULL,
  `Nume` varchar(30) DEFAULT NULL,
  `Prenume` varchar(30) DEFAULT NULL,
  `An_Studiu` int(11) DEFAULT NULL,
  PRIMARY KEY (`Marca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenti_ac`
--

INSERT INTO `studenti_ac` (`Marca`, `Nume`, `Prenume`, `An_Studiu`) VALUES
('12000', 'Popescu', 'Andrei', 3),
('12001', 'Badea', 'Narcis', 3),
('19999', 'Ionescu', 'Adelin', 1),
('12045', 'Predescu', 'Marian', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
