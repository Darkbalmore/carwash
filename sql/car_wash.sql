-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 01-12-2018 a las 03:40:04
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `car_wash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `placa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicios` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `listaprecio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precios` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicios`, `listaprecio`, `precios`) VALUES
(1, 'Lavado', 'preciolavado', 3),
(2, 'Pasteado', 'preciopasteado', 4),
(3, 'Lavado de motor', 'preciolavadom', 5),
(4, 'Pasteado a maquina', 'preciooasteadom', 10),
(5, 'Lavado de tapiceria', 'preciolavadot', 45),
(6, 'Abrillantado', 'precioabrillantado', 9),
(7, 'Pulido', 'preciopulido', 5),
(8, 'Pulido rines', 'preciopulidor', 10),
(9, 'pulido silvines', 'preciopulidos', 5),
(10, 'Polarizado', 'preciopolarizado', 20),
(11, 'Otros', 'preciootros', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

DROP TABLE IF EXISTS `transaccion`;
CREATE TABLE IF NOT EXISTS `transaccion` (
  `placa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_carro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `servicios` text COLLATE utf8_spanish_ci NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`placa`, `tipo_carro`, `servicios`, `total`, `fecha`) VALUES
('', '', 'Lavado Pasteado Lavado de motor        ', 123, ''),
('dasd', '', 'Lavado Pasteado  Pasteado a maquina Lavado de tapiceria Abrillantado Pulido Pulido rines pulido silvines Polarizado Otros', 200, '2018-10-25'),
('fghfgh', 'microbus', 'Lavado  Lavado de motor   Abrillantado  Pulido rines pulido silvines  ', 94, '2018-10-27'),
('p126543', 'sedan', 'Lavado Pasteado Lavado de motor       Polarizado Otros', 42, '2018-11-29'),
('p23121', 'microbus', 'Lavado         Polarizado Otros', 64, '2018-11-26'),
('p34234', 'microbus', '   Pasteado a maquina Lavado de tapiceria Abrillantado     ', 52, '2018-11-26'),
('p342342', 'microbus', 'Lavado Pasteado Lavado de motor  Lavado de tapiceria Abrillantado     Otros', 125, '2018-11-26'),
('p3e4234', 'sedan', 'Lavado  Lavado de motor      pulido silvines  ', 54, '2018-11-26'),
('p56456456', 'pickup', ' Pasteado Lavado de motor Pasteado a maquina      Polarizado ', 71, '2018-11-26'),
('p7896451', 'camion', 'Lavado Pasteado Lavado de motor Pasteado a maquina Lavado de tapiceria      ', 100, '2018-10-26'),
('p978679869', 'sedan', 'Lavado  Lavado de motor Pasteado a maquina       ', 50, '2018-11-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
