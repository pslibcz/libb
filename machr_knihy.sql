-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '+02:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `machr_knihy` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `machr_knihy`;

CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `isbn` varchar(128) NOT NULL,
  `pages` smallint(5) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `books_authors` (
  `books_id` int(11) NOT NULL,
  `authors_id` int(11) NOT NULL,
  KEY `books_id` (`books_id`),
  KEY `authors_id` (`authors_id`),
  CONSTRAINT `books_authors_ibfk_10` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `books_authors_ibfk_11` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `books_images` (
  `books_id` int(11) NOT NULL,
  `images_id` int(11) NOT NULL,
  KEY `books_id` (`books_id`),
  KEY `images_id` (`images_id`),
  CONSTRAINT `books_images_ibfk_1` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`),
  CONSTRAINT `books_images_ibfk_2` FOREIGN KEY (`images_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2014-04-03 16:02:54
