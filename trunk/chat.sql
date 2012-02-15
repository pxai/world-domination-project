-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2011 a las 12:25:50
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6-1+lenny13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `id` int(11) NOT NULL auto_increment,
  `texto` text collate utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `idusuario` int(11) NOT NULL,
  `idcanal` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `texto`, `fecha`, `idusuario`, `idcanal`) VALUES
(1, 'va', '2011-11-24 10:56:51', 1, 1),
(2, 'que bueno', '2011-11-24 10:57:49', 1, 1),
(3, 'que risas', '2011-11-24 10:57:52', 1, 1),
(4, 'jeje', '2011-11-24 10:58:16', 1, 1),
(5, 'este chat es una merde', '2011-11-24 10:58:25', 1, 1),
(6, 'este chat es una merde', '2011-11-24 11:00:48', 1, 1),
(7, 'este chat es una merde', '2011-11-24 11:01:20', 1, 1),
(8, 'jeje', '2011-11-24 11:07:36', 1, 1),
(9, 'que risas', '2011-11-24 11:07:39', 1, 1),
(10, 'que bueno', '2011-11-24 11:07:47', 1, 1),
(11, 'que bueno', '2011-11-24 11:07:49', 1, 1),
(12, 'que bueno', '2011-11-24 11:07:51', 1, 1),
(13, 'yo me cago en to', '2011-11-24 11:07:59', 1, 1),
(14, 'yo me cago en to', '2011-11-24 11:09:36', 1, 1),
(15, 'yo me cago en to', '2011-11-24 11:09:42', 1, 1),
(16, 'yo me cago en to', '2011-11-24 11:10:31', 1, 1),
(17, 'yo me cago en to', '2011-11-24 11:11:28', 1, 1),
(18, 'polla', '2011-11-24 11:11:39', 1, 1),
(19, 'polla', '2011-11-24 11:12:05', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(15) collate utf8_unicode_ci NOT NULL,
  `password` varchar(100) collate utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `password`, `nombre`) VALUES
(1, 'falken', '244ee9354d95eb4c1e23dd484fccf098c5566cc5', 'Falken'),
(2, 'juan', 'bbcc4660458da2c09c520e69f4dd3c5c645b699c', 'Juan');
