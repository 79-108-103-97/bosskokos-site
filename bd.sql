-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 01 2022 г., 02:52
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cr75599_proba`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(255) NOT NULL,
  `sort_orderCategory` int(11) DEFAULT '0',
  `statusCategory` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idCategory`),
  KEY `idCategory` (`idCategory`),
  KEY `idCategory_2` (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`idCategory`, `nameCategory`, `sort_orderCategory`, `statusCategory`) VALUES
(1, 'Фрукты', 0, 1),
(2, 'Овощи', 0, 1),
(3, 'Травы', 0, 1),
(4, 'Сухофрукты', 0, 1),
(5, 'Соки', 0, 1),
(6, 'Готовые корзины', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `is_topsales` tinyint(1) NOT NULL DEFAULT '0',
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_recomendet` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `avaliability` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idProduct`),
  KEY `idCategory` (`idCategory`),
  KEY `idProduct` (`idProduct`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`idProduct`, `name`, `idCategory`, `description`, `price`, `is_topsales`, `is_new`, `is_recomendet`, `image`, `avaliability`, `status`) VALUES
(1, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(2, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 0, 1, 'watermelon.png', 1, 1),
(3, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(4, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 0, 1, 'fruit5.png', 1, 1),
(5, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(6, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(7, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(8, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(9, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(10, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(11, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(12, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(13, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(14, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(15, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(16, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(17, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(18, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(19, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(20, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(21, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(22, 'Авокадо', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(23, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(24, 'Ананас', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(25, 'Авокадо', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(26, 'Авокадо', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(27, 'Ананас', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(28, 'Ананас', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(29, 'Авокадо', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '1050', 0, 1, 1, 'avokado.png', 1, 1),
(30, 'Арбуз красный', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(31, 'Ананас', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '910', 1, 1, 1, 'fruit5.png', 1, 1),
(32, 'Арбуз красный', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '850', 1, 1, 1, 'watermelon.png', 1, 1),
(33, 'Корзинка S', 6, '8 видов Фруктов', '1160', 1, 0, 1, 'basket.png', 1, 1),
(34, 'Корзинка M', 6, '10 видов Фруктов', '1160', 1, 0, 1, 'basket.png', 1, 1),
(35, 'Корзинка L', 6, '12 видов Фруктов', '1160', 1, 0, 1, 'basket.png', 1, 1),
(36, 'Корзинка XL', 6, '14 видов Фруктов', '1160', 1, 0, 1, 'basket.png', 1, 1),
(37, 'Корзинка XLL', 6, '15 видов Фруктов', '1160', 1, 0, 1, 'basket.png', 1, 1),
(38, 'Корзинка XLL', 6, '15 видов Фруктов', '1160', 1, 1, 1, 'basket.png', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Администратор', 'olga110723@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`idCategory`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
