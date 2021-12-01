-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 20:36:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `visualiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `documento` varchar(110) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `documento`, `telefono`, `correo`) VALUES
(2, '12312321321', '21312312', '2'),
(3, '1231231', '123123', '3'),
(4, '1333333', '12312312', '4'),
(5, '1233333', '21312312321', '5'),
(7, '111111', '123123', '7'),
(8, '11112', '1231233', '8'),
(9, '12', '123', '9'),
(10, '1234', '1234', '10'),
(13, '12333', '123123', '13'),
(16, '12345', '12345', '16'),
(17, '123344555', '123455666777', 'viviery@siemprevareto.com'),
(18, '1113', '1113', '18'),
(20, '12312321', '21312312', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oftalmologos`
--

CREATE TABLE `oftalmologos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `calificacion` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oftalmologos`
--

INSERT INTO `oftalmologos` (`id`, `nombre`, `correo`, `telefono`, `calificacion`) VALUES
(1, 'Arturo Calle Rodolfo', 'Arturo@gmail.com', '3004215125', 2.125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `orden` int(255) NOT NULL,
  `id_cliente` varchar(255) NOT NULL,
  `id_oftalmologo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`orden`, `id_cliente`, `id_oftalmologo`) VALUES
(1, '1', '1'),
(2, '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_daltonismo`
--

CREATE TABLE `resultado_daltonismo` (
  `id` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `resultado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado_daltonismo`
--

INSERT INTO `resultado_daltonismo` (`id`, `id_usuario`, `resultado`) VALUES
(1, 1, NULL),
(2, 1, NULL),
(3, 3, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_general`
--

CREATE TABLE `resultado_general` (
  `id` int(255) NOT NULL,
  `id_usuario` varchar(100) NOT NULL,
  `resultado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado_general`
--

INSERT INTO `resultado_general` (`id`, `id_usuario`, `resultado`) VALUES
(9, '7', 10),
(10, '8', 6),
(11, '9', 8),
(12, '10', 8),
(13, '13', 7),
(14, '16', 5),
(15, '17', 10),
(16, '18', 9),
(17, '20', 8),
(18, '2', 9),
(19, '3', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_miopia`
--

CREATE TABLE `resultado_miopia` (
  `id` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `resultado` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado_miopia`
--

INSERT INTO `resultado_miopia` (`id`, `id_usuario`, `resultado`) VALUES
(1, 1, NULL),
(2, 1, NULL),
(3, 3, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `primera_encuesta` tinyint(1) NOT NULL DEFAULT 0,
  `test_daltonismo` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `primera_encuesta`, `test_daltonismo`, `password`) VALUES
(3, 'sxs12', 'sxs', 1, 0, '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oftalmologos`
--
ALTER TABLE `oftalmologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`orden`);

--
-- Indices de la tabla `resultado_daltonismo`
--
ALTER TABLE `resultado_daltonismo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultado_general`
--
ALTER TABLE `resultado_general`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultado_miopia`
--
ALTER TABLE `resultado_miopia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oftalmologos`
--
ALTER TABLE `oftalmologos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `orden` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `resultado_daltonismo`
--
ALTER TABLE `resultado_daltonismo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resultado_general`
--
ALTER TABLE `resultado_general`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `resultado_miopia`
--
ALTER TABLE `resultado_miopia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
