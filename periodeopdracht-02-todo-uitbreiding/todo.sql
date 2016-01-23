-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jan 2016 om 23:26
-- Serverversie: 10.1.9-MariaDB
-- PHP-versie: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_01_21_192201_create_tasks_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `done` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `done`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'sqf', '2016-01-22 11:28:45', '2016-01-22 11:28:45'),
(2, 1, 1, 'qsf', '2016-01-22 12:54:02', '2016-01-22 11:28:57'),
(3, 1, 0, 'dsfqfqs', '2016-01-22 12:18:57', '2016-01-22 12:18:57'),
(4, 2, 0, 'fddf', '2016-01-22 19:19:57', '2016-01-22 19:19:57'),
(5, 2, 0, 'fd', '2016-01-22 19:20:01', '2016-01-22 19:20:01'),
(6, 3, 0, 'ddd', '2016-01-22 21:10:58', '2016-01-22 20:10:58'),
(7, 3, 0, 'ddd', '2016-01-22 21:11:00', '2016-01-22 20:11:00'),
(8, 3, 0, 'ddd', '2016-01-22 20:10:09', '2016-01-22 20:10:09'),
(9, 5, 0, 'dd', '2016-01-23 22:16:45', '2016-01-23 21:16:45'),
(10, 5, 1, 'dsd', '2016-01-23 22:16:49', '2016-01-23 21:16:49'),
(11, 5, 0, 'aaaa', '2016-01-23 20:56:05', '2016-01-23 20:56:05'),
(12, 5, 1, 'ccc', '2016-01-23 22:08:11', '2016-01-23 21:08:11'),
(13, 5, 0, 'sdqf', '2016-01-23 21:06:52', '2016-01-23 21:06:52'),
(14, 5, 0, 'sqf', '2016-01-23 21:07:28', '2016-01-23 21:07:28'),
(15, 5, 0, 'ssss', '2016-01-23 21:07:41', '2016-01-23 21:07:41'),
(16, 6, 0, 'dsd', '2016-01-23 21:17:39', '2016-01-23 21:17:39'),
(17, 8, 0, 'ssss', '2016-01-23 21:19:01', '2016-01-23 21:19:01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anton', 'paraplu@lisdddt.ru', '$2y$10$4uOfbJnhhJJGR79ZMOGVCe/y4ihn3GiJ.b/p2SL6F22yzhSKTTfDe', NULL, '2016-01-22 11:28:39', '2016-01-22 11:28:39'),
(2, 'anton', 'parapffflu@lisdddt.ru', '$2y$10$hO.sENUGBHss.EXCCh5sAOCt7pFKwE0XYWUZCHFVp1eFSsxMHlliW', 'kw9kuLj5Zd53IhOO7WckDV08y052CvEUlMwZTVsExi0YlkIyjoJHa8Kmo6Rm', '2016-01-22 20:50:46', '2016-01-22 19:50:46'),
(3, 'blabla', 'pppp@list.ru', '$2y$10$SOWp0o7I.IpUwgn9L4GDp.HqTjtt/Urgz8THoDqJVqEHjI5BCmMPS', 'JZaMZMgSnSuHC1RHr02SOFQmyKOiLYRxpYDF9huL7cK3HtPB6mR1D5e5bxMR', '2016-01-22 21:15:16', '2016-01-22 20:15:16'),
(4, 'blabla', 'bb@list.ru', '$2y$10$UUQeKbYfPF298Li/6HDbR.t7IGct8vbRvpVvC2ngxh0AGPZJ4/cI2', NULL, '2016-01-22 20:25:42', '2016-01-22 20:25:42'),
(5, 'bbbbb', 'pbbp@list.ru', '$2y$10$UxBynqibt0jKocnsUdxdp.eZuw2FhRJR8MWiO9SSPy1.T8nn26q.i', 'h4pvdoVB9cIlQOdO1NirVHJkndq0EcIphFNZIzWsWPgRjZqiXAwZcpiLIP7H', '2016-01-23 22:16:52', '2016-01-23 21:16:52'),
(6, 'bbbbbbb', 'ppdddddddddd@list.ru', '$2y$10$qefNmRAps7EmjksZG9HiJeM10qi6iAYO2S.0NJPTo3.NBG6FsJPgG', NULL, '2016-01-23 21:17:36', '2016-01-23 21:17:36'),
(7, 'dsqf', 'paradplu@list.ru', '$2y$10$/ykJJIVndHxQDs9qeaBJ9u7UbcpwmqPlHRLFRxWTt1LrJ1IWVssAC', NULL, '2016-01-23 21:18:00', '2016-01-23 21:18:00'),
(8, 'sqf', 'paraplssu@list.ru', '$2y$10$rao/VARlFbXOpp9Sh1SVg.4DPBnNtKwawEBW/26x8Lp9rYgaKolsC', NULL, '2016-01-23 21:18:57', '2016-01-23 21:18:57'),
(9, 'mama', 'mama@list.ru', '$2y$10$XP78Q59X.lHYdAu50uLFvOa7CGwWJsXbJEeZesA12hZFOScH2YZ4i', NULL, '2016-01-23 21:22:20', '2016-01-23 21:22:20');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_index` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
