-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: nov. 20, 2021 la 06:24 PM
-- Versiune server: 5.7.31
-- Versiune PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `facultate`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `codDisciplina` int(11) NOT NULL,
  `Disciplina` varchar(30) DEFAULT NULL,
  `An_Studiu` int(11) DEFAULT NULL,
  PRIMARY KEY (`codDisciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `discipline`
--

INSERT INTO `discipline` (`codDisciplina`, `Disciplina`, `An_Studiu`) VALUES
(3271, 'PAI', 3),
(3981, 'PJ', 3);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `Marca` char(6) DEFAULT NULL,
  `codDisciplina` int(11) DEFAULT NULL,
  `Nota` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `studenti_ac`
--

DROP TABLE IF EXISTS `studenti_ac`;
CREATE TABLE IF NOT EXISTS `studenti_ac` (
  `Marca` char(6) NOT NULL,
  `Nume` varchar(30) DEFAULT NULL,
  `Prenume` varchar(30) DEFAULT NULL,
  `An_Studiu` int(11) DEFAULT NULL,
  PRIMARY KEY (`Marca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
