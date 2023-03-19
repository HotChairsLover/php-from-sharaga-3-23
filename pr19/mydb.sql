-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 14 2023 г., 20:22
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classics`
--

CREATE TABLE `classics` (
  `isbn` varchar(12) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `classics`
--

INSERT INTO `classics` (`isbn`, `title`, `category`, `year`, `author`) VALUES
('das', 'das', 'das', 'das', 'das'),
('isbn', 'title', 'category', 'year', 'author');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `user_id` int NOT NULL,
  `fio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passportRussia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passportNonRussia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`user_id`, `fio`, `passportRussia`, `passportNonRussia`, `phone`, `visa`, `birthdate`) VALUES
(1, 'Олег Олег Олег', '123', '321', '123', '1', '2000-03-08'),
(2, 'ЫЫ Ы ЫЫЫЫ', '312', '5412', '6132', '152', '1999-01-01'),
(4, 'ads', 'fas', 'asf', '987654321', 'fd', '2022-09-01'),
(5, 'fafsad', 'sfd', 'fsda', '9876543210', 'fsda', '2023-03-02'),
(7, 'aaa', 'aaa', 'aaa', '1234567891', 'aaa', '2023-02-28'),
(8, 'aqqq', 'qqq', 'qqq', '1234567891', 'qq', '2023-03-04'),
(9, 'h', 'h', 'h', '1234567891', 'h', '2023-03-15'),
(10, 'ga', 'gfas', 'gfas', '1234567891', 'dfas', '2023-03-05');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int NOT NULL,
  `client` int NOT NULL,
  `country` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `client`, `country`, `destination`, `hotel`, `transport`) VALUES
(1, 2, 'ddd', 'ddasda', 'das', 'da');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `classics`
--
ALTER TABLE `classics`
  ADD PRIMARY KEY (`isbn`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD UNIQUE KEY `ticket_id_UNIQUE` (`ticket_id`),
  ADD KEY `client_idx` (`client`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `client` FOREIGN KEY (`client`) REFERENCES `clients` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
