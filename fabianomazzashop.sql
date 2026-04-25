-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 04, 2022 alle 21:12
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabianomazzashop`
--
CREATE DATABASE IF NOT EXISTS `fabianomazzashop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fabianomazzashop`;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `idcarr` int(11) NOT NULL,
  `dataCarr` date NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`idcarr`, `dataCarr`, `email`) VALUES
(37, '2022-04-04', 'giuseppe@gmail.com'),
(38, '2022-04-04', 'andrea@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglio`
--

CREATE TABLE `dettaglio` (
  `iddett` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  `taglia` varchar(5) NOT NULL,
  `idprod` int(11) NOT NULL,
  `idcarr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioord`
--

CREATE TABLE `dettaglioord` (
  `iddo` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `idcarr` int(11) NOT NULL,
  `idord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `dettaglioord`
--

INSERT INTO `dettaglioord` (`iddo`, `quant`, `idp`, `idcarr`, `idord`) VALUES
(21, 1, 5, 37, 22),
(22, 1, 1, 37, 22),
(23, 1, 7, 37, 23),
(24, 1, 3, 38, 24);

-- --------------------------------------------------------

--
-- Struttura della tabella `dettagliopref`
--

CREATE TABLE `dettagliopref` (
  `iddettpref` int(11) NOT NULL,
  `idprod` int(11) NOT NULL,
  `idpref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `dettagliopref`
--

INSERT INTO `dettagliopref` (`iddettpref`, `idprod`, `idpref`) VALUES
(9, 1, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `idord` int(11) NOT NULL,
  `dataOrdine` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`idord`, `dataOrdine`, `email`) VALUES
(22, '04-04-2022 21:00:04 pm', 'giuseppe@gmail.com'),
(23, '04-04-2022 21:00:41 pm', 'giuseppe@gmail.com'),
(24, '04-04-2022 21:02:20 pm', 'andrea@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `idpref` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`idpref`, `email`) VALUES
(3, 'andrea@gmail.com'),
(2, 'giuseppe@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `idprod` int(11) NOT NULL,
  `descrizione` varchar(70) NOT NULL,
  `prezzo` float NOT NULL,
  `marca` varchar(30) NOT NULL,
  `immagine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`idprod`, `descrizione`, `prezzo`, `marca`, `immagine`) VALUES
(1, 'Air Force 1 Bianche ', 99.99, 'Nike', 'img/Nike/1.png'),
(3, 'Air Max 270 Senape', 119.99, 'Nike', 'img/Nike/2.png'),
(5, 'Air Max Plus X Supreme Bianche', 749.99, 'Nike', 'img/Nike/4.png'),
(6, 'Yeezy 350 Zebra', 350, 'Adidas', 'img/Adidas/4.png'),
(7, 'Yeezy 600', 400, 'Adidas', 'img/Adidas/2.png'),
(8, 'Yeezy 500', 329, 'Adidas', 'img/Adidas/3.png'),
(9, 'Yeezy nere', 800, 'Adidas', 'img/Adidas/1.png'),
(10, 'Converse X Comme Des Garcons', 180.99, 'Converse', 'img/Converse/1.png'),
(12, 'Converse X Dior', 1199.99, 'Converse', 'img/Converse/3.png'),
(13, 'Converse X Trasher ', 99.99, 'Converse', 'img/Converse/4.png'),
(17, 'Jordan 6 X Travis Scott', 600, 'Jordan', 'img/Jordan/4.png'),
(21, 'Lacoste Bianche', 200, 'Lacoste', 'img/Lacoste/w.png'),
(22, 'Puma Bianche', 150, 'Puma', 'img/Puma/1.png'),
(24, 'Puma black omaggio al Puma', 277.99, 'Puma', 'img/Puma/3.png'),
(25, 'Puma X Ferrari', 499.99, 'Puma', 'img/Puma/4.png'),
(29, 'Vans X Trasher High', 99.99, 'Vans', 'img/Vans/4.png'),
(31, 'Puma super X', 145, 'Puma', 'img/puma/2.png'),
(32, 'Vans X Supreme', 180, 'Vans', 'img/Vans/8.png'),
(33, 'Vans Old Skool', 99.99, 'Vans', 'img/Vans/2.png'),
(34, 'Vans X Trasher low', 150, 'Vans', 'img/Vans/9.png'),
(35, 'Lacoste Blu', 120, 'Lacoste', 'img/Lacoste/bl.png'),
(36, 'Lacoste Nere', 130, 'Lacoste', 'img/Lacoste/b.png'),
(37, 'Lacoste Sportive', 170, 'Lacoste', 'img/Lacoste/bl1.png'),
(38, 'Balzer bianche', 130, 'Nike', 'img/Nike/3.png'),
(39, 'Converse Nere', 99.99, 'Converse', 'img/Converse/b.png'),
(40, 'Jordan 1 X Travis Scott', 3800, 'Jordan', 'img/Jordan/j1.png'),
(41, 'Jordan 4 White And Red', 400, 'Jordan', 'img/Jordan/r1.png'),
(42, 'Jordan 4 X Off White', 1300, 'Jordan', 'img/Jordan/off2.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `email` varchar(60) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dataNascita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`email`, `nome`, `cognome`, `password`, `dataNascita`) VALUES
('andrea@gmail.com', 'Andrea', 'Mazza', 'mazza', '2004-04-20'),
('giuseppe@gmail.com', 'Giuseppe', 'Fabiano', 'fabiano', '2003-05-28');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idcarr`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indici per le tabelle `dettaglio`
--
ALTER TABLE `dettaglio`
  ADD PRIMARY KEY (`iddett`),
  ADD KEY `idcarr` (`idcarr`) USING BTREE,
  ADD KEY `idprod` (`idprod`) USING BTREE;

--
-- Indici per le tabelle `dettaglioord`
--
ALTER TABLE `dettaglioord`
  ADD PRIMARY KEY (`iddo`),
  ADD KEY `idcarr` (`idcarr`),
  ADD KEY `idord` (`idord`);

--
-- Indici per le tabelle `dettagliopref`
--
ALTER TABLE `dettagliopref`
  ADD PRIMARY KEY (`iddettpref`),
  ADD KEY `idprod` (`idprod`),
  ADD KEY `idpref` (`idpref`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`idord`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`idpref`),
  ADD KEY `email` (`email`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`idprod`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idcarr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT per la tabella `dettaglio`
--
ALTER TABLE `dettaglio`
  MODIFY `iddett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT per la tabella `dettaglioord`
--
ALTER TABLE `dettaglioord`
  MODIFY `iddo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `dettagliopref`
--
ALTER TABLE `dettagliopref`
  MODIFY `iddettpref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `idord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `idpref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `idprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`email`) REFERENCES `utenti` (`email`);

--
-- Limiti per la tabella `dettaglio`
--
ALTER TABLE `dettaglio`
  ADD CONSTRAINT `dettaglio_ibfk_1` FOREIGN KEY (`idprod`) REFERENCES `prodotti` (`idprod`),
  ADD CONSTRAINT `dettaglio_ibfk_3` FOREIGN KEY (`idcarr`) REFERENCES `carrello` (`idcarr`);

--
-- Limiti per la tabella `dettaglioord`
--
ALTER TABLE `dettaglioord`
  ADD CONSTRAINT `dettaglioord_ibfk_1` FOREIGN KEY (`idcarr`) REFERENCES `carrello` (`idcarr`),
  ADD CONSTRAINT `dettaglioord_ibfk_2` FOREIGN KEY (`idord`) REFERENCES `ordini` (`idord`);

--
-- Limiti per la tabella `dettagliopref`
--
ALTER TABLE `dettagliopref`
  ADD CONSTRAINT `dettagliopref_ibfk_1` FOREIGN KEY (`idpref`) REFERENCES `preferiti` (`idpref`),
  ADD CONSTRAINT `dettagliopref_ibfk_2` FOREIGN KEY (`idprod`) REFERENCES `prodotti` (`idprod`);

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`email`) REFERENCES `utenti` (`email`);

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`email`) REFERENCES `utenti` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
