-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u9
-- http://www.phpmyadmin.net
--
-- Host: mysql.next-data.net
-- Generation Time: Ott 26, 2023 alle 16:33
-- Versione del server: 10.3.31-MariaDB-0+deb10u1
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `www_wpschool_it`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `libri_frascaroli`
--

CREATE TABLE IF NOT EXISTS `libri_frascaroli` (
`ID` int(11) NOT NULL,
  `Titolo` varchar(255) NOT NULL,
  `Autore` varchar(255) DEFAULT NULL,
  `Genere` varchar(50) DEFAULT NULL,
  `AnnoPubblicazione` int(11) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `AltreInformazioni` text DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `libri_frascaroli`
--

INSERT INTO `libri_frascaroli` (`ID`, `Titolo`, `Autore`, `Genere`, `AnnoPubblicazione`, `ISBN`, `AltreInformazioni`) VALUES
(1, 'ciao', 'prova', 'giallo', 2003, '10ihsjdwiue30', 'nessuno'),
(2, 'ciao', 'prova', 'giallo', 2003, '10ihsjdwiue30', 'nessuno'),
(3, 'Davide', 'Frasca', 'giallo', 2032, '1234567891011', 'nessuna'),
(4, 'Un anno sull''altipiano', 'Emilio Lussu', 'Biografia', 1938, 'apdjw7325frcc', 'nessuna'),
(5, 'Harry Potter', 'J. K. Rowling', 'Letteratura per ragazzi', 1997, '10ihsjdwiue30', 'nessuna'),
(6, 'It', 'Stephen King', 'Horro', 1986, 'ho20sjejabasa', 'pauroso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libri_frascaroli`
--
ALTER TABLE `libri_frascaroli`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libri_frascaroli`
--
ALTER TABLE `libri_frascaroli`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
