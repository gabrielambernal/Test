-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-09-2018 a las 21:04:52
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laptopassignation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assignation`
--

DROP TABLE IF EXISTS `assignation`;
CREATE TABLE IF NOT EXISTS `assignation` (
  `idRequest` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `serialNumber` int(11) NOT NULL,
  `sso` int(11) NOT NULL,
  PRIMARY KEY (`idRequest`),
  KEY `sso` (`sso`),
  KEY `serialNumber` (`serialNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `assignation`
--

INSERT INTO `assignation` (`idRequest`, `date`, `serialNumber`, `sso`) VALUES
(1, '2018-09-23', 12345, 1111),
(2, '2018-09-24', 8967, 5555),
(3, '2018-09-24', 5678, 3333),
(7, '2018-09-25', 1011, 8888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laptops`
--

DROP TABLE IF EXISTS `laptops`;
CREATE TABLE IF NOT EXISTS `laptops` (
  `serialNumber` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`serialNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laptops`
--

INSERT INTO `laptops` (`serialNumber`, `model`, `color`, `brand`, `description`) VALUES
(12345, 'inspiron', 'rojo', 'dell', 'Buenas Condiciones'),
(5678, 'ROG', 'Azul', 'Asus ', ''),
(8967, 'E555', 'Negro', 'Acer', 'AMD'),
(4321, 'Pavilion', 'Blanco', 'HP', ' Touch 2T'),
(1011, 'ep', 'Rojo', 'dell', '2T '),
(1122, '78GH', 'Negro', 'ASUS', ' 1T 50 RAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sso` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sso`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`sso`, `password`, `name`, `email`, `type`) VALUES
(1111, '1234', 'admin', 'admin@admin', 1),
(3333, '1234', 'Luis', 'luis@luis', 0),
(5555, '1234', 'Oswaldo', 'oswa@oswa', 0),
(6666, '1234', 'Guillermo', 'memo@memo', 0),
(1235, '1234', 'Ana', 'ana@ana', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
