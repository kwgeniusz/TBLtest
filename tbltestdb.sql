-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-09-2020 a las 17:55:01
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbltestdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int(12) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contactNumber` varchar(24) NOT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`contactId`, `firstName`, `lastName`, `email`, `contactNumber`) VALUES
(115, 'Sidney', 'Bechtelar', 'amos.gerhold@example.org', '1-515-844-4563'),
(105, 'Muriel', 'Legros', 'howell.johnnie@example.org', '1-221-571-3459 x44812'),
(92, 'Joel', 'Johnson', 'abashirian@example.org', '(252) 637-3600 x2816'),
(103, 'MANUEL', 'CASTRO', 'alejocastro2@gmail.com', '123123'),
(106, 'Brant', 'Hill', 'wyatt.balistreri@example.com', '+1 (256) 659-8317'),
(90, 'Merlin', 'Gleichner', 'ystokes@example.org', '808-538-7597 x20298'),
(107, 'Macy', 'Medhurst', 'kunde.lamont@example.org', '(579) 934-8970 x8215'),
(108, 'Uriah', 'Lind', 'dimitri.labadie@example.com', '+1 (832) 742-2531'),
(109, 'Gerard', 'Stamm', 'sherwood.berge@example.com', '372-219-2624'),
(110, 'Rylee', 'Roob', 'cortney.wolff@example.net', '712.289.8109'),
(111, 'Elda', 'Goodwin', 'myrna.trantow@example.org', '+12609093106'),
(112, 'Flavio', 'Gorczany', 'rhiannon.prohaska@example.org', '234.835.8707 x4566'),
(113, 'Karli', 'Huel', 'vhowell@example.com', '560-477-5170 x806'),
(114, 'Aidan', 'Padberg', 'andrew.hammes@example.org', '1-361-287-3554 x31712');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@test.com', '$2y$10$oa9ebPMQYnUJXcvtn1Hkfe/NIWfODb.t7KQITsJlPArD4BKlfMt5W', '2020-09-01 19:00:11'),
('alejocastro2@gmail.com', '$2y$10$tpqFtQN5gSwpXSqGK2f2J.Rto2pUeJQVTe8ZKqOGe2pkuVbD44arK', '2020-09-01 21:31:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manuel Castro', 'admin@test.com', '$2y$10$PFQu6Z0./62blXhfW9UTI.MDrlO0UgmUqEvUoFpBA/MGd81oYtKX.', 'niBGF3iqFGHc1KGj6UHCGikvp0mhc0h67RxsIo8zdcDcLjukqQ5nSvpf3Lc3', '2020-09-01 00:00:31', '2020-09-01 17:25:07'),
(2, 'Manuel', 'alejocastro2@gmail.com', '$2y$10$PSc0bzX8VrD5LlWIWVlTuOsaZ87oOn4K3VpmbLPUZmKcM0R0T42/2', 'QOWqx7dSIh6u5L1zDAnlCsME63yqahFXQhPhzeshQ854JegEwHhRxnL76Tyn', '2020-09-01 21:31:26', '2020-09-01 21:31:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
