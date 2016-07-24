--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.1.13.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 24.07.2016 22:52:44
-- Версия сервера: 5.5.5-10.1.13-MariaDB
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE papa_db;

--
-- Описание для таблицы category
--
DROP TABLE IF EXISTS category;
CREATE TABLE category (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  url VARCHAR(255) NOT NULL,
  parent_id VARCHAR(255) NOT NULL,
  img VARCHAR(255) NOT NULL,
  background_img VARCHAR(255) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 21
AVG_ROW_LENGTH = 1260
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы migrations
--
DROP TABLE IF EXISTS migrations;
CREATE TABLE migrations (
  migration VARCHAR(255) NOT NULL,
  batch INT(11) NOT NULL
)
ENGINE = INNODB
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы password_resets
--
DROP TABLE IF EXISTS password_resets;
CREATE TABLE password_resets (
  email VARCHAR(255) NOT NULL,
  token VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX password_resets_email_index (email),
  INDEX password_resets_token_index (token)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы products
--
DROP TABLE IF EXISTS products;
CREATE TABLE products (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  url VARCHAR(255) NOT NULL,
  category_id VARCHAR(255) NOT NULL,
  img VARCHAR(255) NOT NULL,
  price VARCHAR(255) NOT NULL,
  compare_price VARCHAR(255) NOT NULL,
  title VARCHAR(255) DEFAULT NULL,
  description VARCHAR(255) DEFAULT NULL,
  keywords VARCHAR(255) DEFAULT NULL,
  text TEXT DEFAULT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы users
--
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX users_email_unique (email)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

-- 
-- Вывод данных для таблицы category
--
INSERT INTO category VALUES
(8, 'Жареные ролы', 'zharenye-roly', '19', 'null-10-1469190824.png', '', NULL, '2016-07-22 12:33:44', '2016-07-24 12:26:16'),
(9, 'Классические ролы', 'klassicheskie-roly', '19', 'c5usyydwv7m-1469190853.jpg', '', NULL, '2016-07-22 12:34:13', '2016-07-24 12:26:33'),
(10, 'Острые ролы', 'ostrye-roly', '19', 'ustanovka-1469190877.png', '', NULL, '2016-07-22 12:34:37', '2016-07-24 12:26:42'),
(11, 'Обеды', 'obedy', '0', 'c5usyydwv7m-1469190894.jpg', '', NULL, '2016-07-22 12:34:54', '2016-07-22 12:34:54'),
(12, 'Лапша и рис', 'lapsha-i-ris', '0', 'c5usyydwv7m-1469190909.jpg', '', NULL, '2016-07-22 12:35:09', '2016-07-22 12:35:09'),
(13, 'Горячие блюда', 'goryachie-blyuda', '0', 'c5usyydwv7m-1469190924.jpg', '', NULL, '2016-07-22 12:35:24', '2016-07-22 12:35:24'),
(14, 'Салаты', 'salaty', '0', 'akcii-1469190937.png', '', NULL, '2016-07-22 12:35:37', '2016-07-22 12:35:37'),
(15, 'Пицца', 'picca', '0', 'c5usyydwv7m-1469190950.jpg', '', NULL, '2016-07-22 12:35:50', '2016-07-22 12:35:50'),
(16, 'Напитки и соусы', 'napitki-i-sousy', '0', 'mmmcl4canto-1469190974.png', '', NULL, '2016-07-22 12:36:14', '2016-07-22 12:36:14'),
(17, 'Напитки', 'napitki', '16', 'c5usyydwv7m-1469190996.jpg', '', NULL, '2016-07-22 12:36:36', '2016-07-22 12:36:36'),
(18, 'Соусы', 'sousy', '16', 'ustanovka-1469191011.png', '', NULL, '2016-07-22 12:36:51', '2016-07-22 12:36:51'),
(19, 'Роллы', 'rolly', '0', 'prodykt7-1469363163.png', 'fonroll-1469363163.png', NULL, '2016-07-24 12:26:03', '2016-07-24 12:26:03'),
(20, 'Суши', 'sushi', '0', 'prodykt9-1469363256.png', 'fonsusi-1469363256.png', NULL, '2016-07-24 12:27:36', '2016-07-24 12:27:36');

-- 
-- Вывод данных для таблицы migrations
--
INSERT INTO migrations VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_22_093133_CreateCategory', 2),
('2016_07_23_091128_Products', 3);

-- 
-- Вывод данных для таблицы password_resets
--

-- Таблица papa_db.password_resets не содержит данных

-- 
-- Вывод данных для таблицы products
--
INSERT INTO products VALUES
(1, 'Роллы с лососем', 'rolly-s-lososem', '9', 'mmmcl4canto-1469276499.png', '99', '0', 'Роллы с лососем', 'Роллы с лососем', 'Роллы с лососем', '<p>Ролы</p>\r\n\r\n<p>Роллфы</p>\r\n', NULL, '2016-07-23 12:21:39', '2016-07-23 12:32:54');

-- 
-- Вывод данных для таблицы users
--
INSERT INTO users VALUES
(1, 'papa', 'papa@papa.ru', '$2y$10$IbBMBEqXIN.NlE7/tVLxXuCdmDw4cAZmQEQSwUzs145V20nYMqTnu', 'GPJMm6g14Q2ovB6afzcTUgPNBAEh342uBhgp33k7453XsiJzQaAZElb81m64', '2016-07-22 09:20:39', '2016-07-22 11:07:10');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;