-- Adminer 3.2.0 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `zan_blog`;
CREATE TABLE `zan_blog` (
  `ID_Post` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  `Slug` varchar(150) NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Start_Date` int(11) unsigned NOT NULL DEFAULT '0',
  `Tags` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Post`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `zan_blog` (`ID_Post`, `Title`, `Slug`, `Content`, `Author`, `Start_Date`, `Tags`) VALUES
(1,	'Bienvenidos a ZanPHP',	'bienvenidos-a-zanphp',	'<p>Hola a todos bienvenidos a <strong>ZanPHP</strong></p>',	'Carlos Santana',	1302293494,	'programacion, musica, peliculas'),
(2,	'Prueba',	'prueba',	'Pruebaaaaa',	'Carlos Santana',	1302293502,	'abc, def, gui'),
(3,	'Hola a todos',	'hola-a-todos',	'A mi me gusta la programación y a ti?',	'Carlos Santana',	1234567899,	'lalala, lololo, lilili'),
(4,	'sdfds sdf ds',	'sdfds-sdf-ds',	'dsfsf',	'Carlos Santana',	1341817330,	'dfgd'),
(5,	'sdfds sdf ds',	'sdfds-sdf-ds',	'dsfsf',	'Carlos Santana',	1341817344,	'dfgd'),
(6,	'sdfds sdf ds',	'sdfds-sdf-ds',	'dsfsf',	'Carlos Santana',	1341817402,	'dfgd'),
(7,	'sdfds sdf ds',	'sdfds-sdf-ds',	'dsfsf',	'Carlos Santana',	1341817411,	'dfgd'),
(8,	'Gracias por haber asistido al taller de ZanPHP',	'gracias-por-haber-asistido-al-taller-de-zanphp',	'<p>Holamuchas gracias por haber participado</p>',	'Carlos Santana',	1341817638,	'php, asp, programacion'),
(9,	'Gracias por haber asistido al taller de ZanPHP22222',	'gracias-por-haber-asistido-al-taller-de-zanphp22222',	'<p>Hola muchas gracias por haber participado</p>',	'Carlos Santana',	1341817965,	'php, asp, programacion');

-- 2012-07-09 02:30:23
