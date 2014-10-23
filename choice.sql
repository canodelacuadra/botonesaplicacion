-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2014 a las 06:22:31
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
  `marcha` enum('on','off') COLLATE utf8_spanish_ci NOT NULL,
  `direccion` enum('izquierda','derecha') COLLATE utf8_spanish_ci NOT NULL,
  `agua` enum('on','off') COLLATE utf8_spanish_ci NOT NULL,
  `autostart` enum('on','off') COLLATE utf8_spanish_ci NOT NULL,
  `autoreverse` enum('on','off') COLLATE utf8_spanish_ci NOT NULL,
  `velocidad` int(11) NOT NULL,
  `presion` int(11) NOT NULL,
  `caudal` int(11) NOT NULL,
  `seguridad` enum('on','off') COLLATE utf8_spanish_ci NOT NULL,
  `angulo` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `choice`
--

INSERT INTO `choice` (`id`, `marcha`, `direccion`, `agua`, `autostart`, `autoreverse`, `velocidad`, `presion`, `caudal`, `seguridad`, `angulo`) VALUES
(1, 'off', 'izquierda', 'on', 'on', 'on', 200, 3, 100, 'off', 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
