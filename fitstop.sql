-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 17, 2024 alle 13:22
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitstop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `abbonamento`
--

CREATE TABLE `abbonamento` (
  `id` int(10) NOT NULL,
  `tipologia` varchar(20) NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `amministratore`
--

CREATE TABLE `amministratore` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `istruttore`
--

CREATE TABLE `istruttore` (
  `id` int(10) NOT NULL,
  `id_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(10) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `data_nascita` datetime NOT NULL,
  `indirizzo` varchar(60) NOT NULL,
  `num_tel` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente_tesserato`
--

CREATE TABLE `utente_tesserato` (
  `id_utente` int(10) NOT NULL,
  `id_abbonamento` int(10) NOT NULL,
  `data_inizio_abb` datetime NOT NULL,
  `daia_fine_abb` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `abbonamento`
--
ALTER TABLE `abbonamento`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `amministratore`
--
ALTER TABLE `amministratore`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `istruttore`
--
ALTER TABLE `istruttore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_utente` (`id_utente`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utente_tesserato`
--
ALTER TABLE `utente_tesserato`
  ADD KEY `id_abbonamento` (`id_abbonamento`),
  ADD KEY `id_utente` (`id_utente`) USING BTREE;

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `abbonamento`
--
ALTER TABLE `abbonamento`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `istruttore`
--
ALTER TABLE `istruttore`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `istruttore`
--
ALTER TABLE `istruttore`
  ADD CONSTRAINT `istruttore_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`);

--
-- Limiti per la tabella `utente_tesserato`
--
ALTER TABLE `utente_tesserato`
  ADD CONSTRAINT `utente_tesserato_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`),
  ADD CONSTRAINT `utente_tesserato_ibfk_2` FOREIGN KEY (`id_abbonamento`) REFERENCES `abbonamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
