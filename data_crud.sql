-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-12-2022 a las 01:32:32
-- Versión del servidor: 10.3.37-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `data_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `cod` int(8) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  `p_venta` float NOT NULL,
  `p_compra` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `cod`, `cantidad`, `nombre`, `marca`, `fabricante`, `p_venta`, `p_compra`) VALUES
(12, 2322, 9999, 'dfaas', 'asdasd', 'asdasd', 25, 55),
(20, 5544, 558, 'asdas', '55', 'dfas', 515, 55),
(23, 8889, 5, 'cable', 'apple', 'apple', 8, 8),
(25, 99996, 86, 'cargador mac', 'apple', 'apple', 96, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `documento` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nombre`, `documento`, `password`, `user_type`) VALUES
(1, 'admin', 'Pedro', 1007972063, 'admin', 0),
(4, 'sdsd', 'sdsd', 0, '551151', 2),
(6, 'ruben223hhh', 'ruben ', 1234, '1234', 0),
(7, 'zxc', 'zxczx', 55555, '555', 0),
(11, '5252', '995', 52952, '2282', 2),
(12, 'pedro', 'juan', 123568, 'hshh', 2),
(13, 'asd', 'asd', 888, '5525', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod` (`cod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
