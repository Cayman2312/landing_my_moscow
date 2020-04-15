-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 22 2020 г., 07:14
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project1`
--
CREATE DATABASE IF NOT EXISTS `project1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project1`;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `fio`, `email`, `phone`, `message`) VALUES
(1, 'Михаил Студицкий', 'cayman2312@gmail.com', '89260563017', 'jjjj'),
(4, 'Вася Пупкин', 'Vasya@rambler.ru', 'no phone', 'Привет!'),
(5, 'Иванов Иван Иванович', 'IvanovII@yandex.ru', '+7(916)-111-12-13', 'Прошу со мной связаться!'),
(6, 'Петров Петр Петрович', 'PPP@gmail.com', 'no phone', 'Прошу написать'),
(7, 'Петров Петр Петрович', 'PPP@gmail.com', 'no phone', 'Прошу написать'),
(8, 'Михаил Петров', 'MP@mail.ru', 'no phone', 'Очень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщение'),
(9, 'Михаил Петров', 'MP@mail.ru', 'no phone', 'Очень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщениеОчень длинное сообщение'),
(10, 'Михаил Студицкий', 'cayman2312@gmail.com', '89260563017', 'Привет');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
