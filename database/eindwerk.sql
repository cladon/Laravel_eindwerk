-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jun 2015 om 13:14
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ew_test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `doelens`
--

CREATE TABLE IF NOT EXISTS `doelens` (
  `id` int(10) unsigned NOT NULL,
  `lp_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `competentie` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `graad_j1` tinyint(1) NOT NULL DEFAULT '1',
  `graad_j2` tinyint(1) NOT NULL DEFAULT '0',
  `waar_ip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `waar_ep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoe_ood` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hoe_doe` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hoe_project` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoe_awv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wie_pav` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wie_zaco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wie_ned` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wie_mavo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wie_wisk` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wie_lo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wanneer_vw` date NOT NULL,
  `wanneer_wm` date NOT NULL,
  `eva_instru` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eva_dat` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `doelens`
--

INSERT INTO `doelens` (`id`, `lp_id`, `code`, `competentie`, `graad_j1`, `graad_j2`, `waar_ip`, `waar_ep`, `hoe_ood`, `hoe_doe`, `hoe_project`, `hoe_awv`, `wie_pav`, `wie_zaco`, `wie_ned`, `wie_mavo`, `wie_wisk`, `wie_lo`, `wanneer_vw`, `wanneer_wm`, `eva_instru`, `eva_dat`, `created_at`, `updated_at`) VALUES
(24, '2', 'C1', 'Administra', 1, 0, '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00 00:00:00', '2015-06-15 16:07:31'),
(26, '3', 'qaa', 'aaa', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2015-06-17 19:31:44', '2015-06-17 19:31:44'),
(27, '3', 'qaa', 'aaaaaaaaaa', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2015-06-17 19:33:22', '2015-06-17 19:33:22'),
(31, '3', 'qaaZ', 'aaaaaaaaaa', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2015-06-18 07:03:26', '2015-06-18 07:03:26');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lang_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `languages`
--

INSERT INTO `languages` (`id`, `position`, `name`, `lang_code`, `icon`, `user_id`, `user_id_edited`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'English', 'en', 'icon_flag_gb.gif', NULL, NULL, '2015-06-05 18:28:37', '2015-06-05 18:28:37', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerplans`
--

CREATE TABLE IF NOT EXISTS `leerplans` (
  `id` int(10) unsigned NOT NULL,
  `leerplannummer` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `leerplans`
--

INSERT INTO `leerplans` (`id`, `leerplannummer`, `ingang`, `created_at`, `updated_at`) VALUES
(1, 'D125/GHBG125/lMLKM', '2015', '2015-06-08 12:57:54', '2015-06-08 12:57:54'),
(2, 'dsfdsds', 'sdsdfsdqQQQqQqQqQ', '2015-06-08 12:58:57', '2015-06-15 12:44:27'),
(3, 'leerplan 34', '2015', '2015-06-08 16:58:51', '2015-06-09 18:16:29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_10_18_195027_create_languages_table', 1),
('2014_10_18_225005_create_article_categories_table', 1),
('2014_10_18_225505_create_articles_table', 1),
('2014_10_18_225928_create_photo_albums_table', 1),
('2014_10_18_230227_create_video_albums_table', 1),
('2014_10_18_231619_create_photos_table', 1),
('2014_10_18_232019_create_videos_table', 1),
('2015_06_07_092959_create_leerplan_table', 2),
('2015_06_08_143701_create_jaldoelen_tables', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `confirmation_code`, `confirmed`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admininstor', 'admin_user', 'admin@admin.com', '$2y$10$S2vzlwIvDvuFLAeduN7L0.Q3Hz0d44CdtL5KywDGSjmQKVyM21E3.', '84fc6f9819d5c090e2672bccd3435509', 1, 1, 'DEgArLSW2lqgjGPKb08H7WzMCyoXFU0gStf03nSOt6vtJocuwMvafEx0poQ8', '2015-06-05 18:28:36', '2015-06-18 07:33:01'),
(2, 'Gebruiker', 'test_user', 'user@user.com', '$2y$10$S2vzlwIvDvuFLAeduN7L0.Q3Hz0d44CdtL5KywDGSjmQKVyM21E3.', '1dd4b3dcc5f67794eb49e9111de29324', 1, 0, 'hugL14qzV6RJVGH5i1a3XM8kyFxFO0UvJgJgTMfiaj4Mzi8QWPLiYqT48eFz', '2015-06-05 18:28:36', '2015-06-18 07:39:45'),
(3, 'donaldje', 'eee', 'eee@tst.com', '$2y$10$3Gs8UaHYSydKlKX2fsN5KOnwgp7LKfXEzrfABhMjiQSlbJsDdqcjW', 'XacSzWFRztv3fJJsV5pWqRqZtun5GPA0', 1, 0, NULL, '2015-06-17 19:09:23', '2015-06-18 07:20:24'),
(4, 'test', 'ttt', 'test@test.com', '$2y$10$0EAuKuuR4vo8pyQulObrZuNOgxfq1BQOy1cGzhlpFbWQVOltr0MpC', 'NM385w42dfa181afUeHbob0CoiIJbOTy', 1, 0, NULL, '2015-06-18 07:21:13', '2015-06-18 07:21:13');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `doelens`
--
ALTER TABLE `doelens`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `languages_name_unique` (`name`), ADD UNIQUE KEY `languages_lang_code_unique` (`lang_code`), ADD KEY `languages_user_id_foreign` (`user_id`), ADD KEY `languages_user_id_edited_foreign` (`user_id_edited`);

--
-- Indexen voor tabel `leerplans`
--
ALTER TABLE `leerplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `doelens`
--
ALTER TABLE `doelens`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT voor een tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `leerplans`
--
ALTER TABLE `leerplans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `languages`
--
ALTER TABLE `languages`
ADD CONSTRAINT `languages_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `languages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
