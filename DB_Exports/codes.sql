-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 05 2021 г., 23:11
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zovdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` int(11) NOT NULL,
  `countryinfoid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `codes`
--

INSERT INTO `codes` (`id`, `userid`, `code`, `countryid`, `countryinfoid`, `created_at`, `updated_at`) VALUES
(1, 5, 'S3-4001', 3, 1, NULL, NULL),
(2, 6, 'S5-4002', 5, 1, NULL, NULL),
(3, 7, 'S3-4003', 3, 1, NULL, NULL),
(4, 8, 'S3-4004', 3, 1, NULL, NULL),
(5, 9, 'S5-4005', 5, 1, NULL, NULL),
(6, 10, '-1', 0, -1, NULL, NULL),
(7, 11, '-1', 0, -1, NULL, NULL),
(8, 12, '-1', 0, -1, NULL, NULL),
(9, 13, '-1', 0, -1, NULL, NULL),
(10, 14, '-1', 0, -1, NULL, NULL),
(11, 15, 'S4-4012', 4, 1, NULL, NULL),
(12, 2, 'S4-4012', 4, 1, '2020-02-22 11:24:30', '2020-02-22 11:24:30'),
(13, 16, 'S2-4013', 2, 1, NULL, NULL),
(14, 24, 'S5-4014', 5, 1, '2020-09-27 04:16:56', '2020-09-27 04:16:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
