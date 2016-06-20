-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jun 2016 om 09:17
-- Serverversie: 5.7.11
-- PHP-versie: 5.5.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avontuur`
--
CREATE DATABASE IF NOT EXISTS `avontuur` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `avontuur`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `choices`
--

DROP TABLE IF EXISTS `choices`;
CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `from_location_id` int(11) NOT NULL,
  `to_location_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `needs_item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `choices`
--

TRUNCATE TABLE `choices`;
--
-- Gegevens worden geëxporteerd voor tabel `choices`
--

INSERT INTO `choices` (`id`, `from_location_id`, `to_location_id`, `title`, `needs_item_id`) VALUES
(1, 1, 2, 'Continue ...', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mod_health` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `locations`
--

TRUNCATE TABLE `locations`;
--
-- Gegevens worden geëxporteerd voor tabel `locations`
--

INSERT INTO `locations` (`id`, `x`, `y`, `title`, `image`, `description`, `mod_health`) VALUES
(1, 1, 1, 'Welcome to Sryth', 'http://vignette2.wikia.nocookie.net/sryth/images/b/b4/Tysa4.png/revision/latest?cb=20110718075118', 'Your adventures are about to begin...\r\n\r\nYour adventures in Sryth begin with you as the lone passenger on a coach bound for the village of Hawklor, a small settlement tucked into the Hart Hills region of Southwest Tysa.\r\n\r\nTo view Hawklor on the map of Tysa, click here. The map will launch in a new window. You\'ll find Hawklor (in yellow) in the lower left portion of the map, in the Hart Hills.\r\n\r\nYou\'ve never before been to this part of the Kingdom, but an insatiable thirst for adventure has at last drawn you out of the quiet existence you\'ve long known and into the wider (albeit more perilous) world.\r\n\r\nIntroductory Hint: Clicking the link below will take you to the next game section. You will often have multiple links at the end of a game section from which to choose your next course of action.\r\n\r\nPlease continue...', 0),
(2, 2, 1, 'Your adventures are about to begin...', 'http://www.mmogames.com/wp-content/uploads/2009/12/browser-mmo-games-adventure-quest-worlds-greenguard-screenshot.jpg', 'Your adventures in Sryth begin with you as the lone passenger on a coach bound for the village of Hawklor, a small settlement tucked into the Hart Hills region of Southwest Tysa.\r\nYou\'ve never before been to this part of the Kingdom, but an insatiable thirst for adventure has at last drawn you out of the quiet existence you\'ve long known and into the wider (albeit more perilous) world.', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
