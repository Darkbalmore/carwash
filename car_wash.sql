-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2018 a las 10:48:10
-- Versión del servidor: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `carro` (
  `placa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicios` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `listaprecio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicios`, `listaprecio`, `precios`) VALUES
(1, 'Lavado', 'preciolavado', 25),
(2, 'Pasteado', 'preciopasteado', 30),
(3, 'Lavado de motor', 'preciolavadom', 10),
(4, 'Pasteado a maquina', 'preciooasteadom', 15),
(5, 'Lavado de tapiceria', 'preciolavadot', 20),
(6, 'Abrillantado', 'precioabrillantado', 17),
(7, 'Pulido', 'preciopulido', 12),
(8, 'Pulido rines', 'preciopulidor', 23),
(9, 'pulido silvines', 'preciopulidos', 19),
(10, 'Polarizado', 'preciopolarizado', 16),
(11, 'Otros', 'preciootros', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `placa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_carro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `servicios` text COLLATE utf8_spanish_ci NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`placa`, `tipo_carro`, `servicios`, `total`, `fecha`) VALUES
('', '', 'Lavado Pasteado Lavado de motor        ', 123, ''),
('dasd', '', 'Lavado Pasteado  Pasteado a maquina Lavado de tapiceria Abrillantado Pulido Pulido rines pulido silvines Polarizado Otros', 200, '2018-10-25'),
('fghfgh', 'microbus', 'Lavado  Lavado de motor   Abrillantado  Pulido rines pulido silvines  ', 94, '2018-10-27'),
('p7896451', 'camion', 'Lavado Pasteado Lavado de motor Pasteado a maquina Lavado de tapiceria      ', 100, '2018-10-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`placa`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
