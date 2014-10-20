-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-10-2014 a las 17:22:51
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `freeze`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choice`
--

CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `choice` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `choice`
--

INSERT INTO `choice` (`id`, `name`, `choice`) VALUES
(1, 'Marcha', 'off'),
(2, 'Dirección', 'off'),
(3, 'Agua', 'on'),
(4, 'velocidad', 'off');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
