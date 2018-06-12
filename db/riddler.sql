-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2018, 19:21
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `riddler`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `riddles`
--

CREATE TABLE `riddles` (
  `id` int(11) NOT NULL,
  `riddle` varchar(5000) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `riddles`
--

INSERT INTO `riddles` (`id`, `riddle`, `answer`) VALUES
(1, 'What\'s nowhere but everywhere, except where something is?', 'Nothing'),
(2, 'What do a dead man, a cruise ship and emu have in common?', 'Nothing'),
(3, 'What\'s green and then red?', 'Frogs in a blender'),
(4, 'What\'s strong enough to smash ships but still fears the sun?', 'Ice'),
(5, 'The more you cut me the bigger I grow. What am I?', 'A hole'),
(6, 'What I want, the poor have, the rich need, and if you eat it you\'ll die', 'Nothing');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `riddles`
--
ALTER TABLE `riddles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `riddles`
--
ALTER TABLE `riddles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
