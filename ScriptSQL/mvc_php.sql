-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2016 a las 07:00:47
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_php`
--
CREATE DATABASE IF NOT EXISTS `mvc_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `mvc_php`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nomprod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precioU` float NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `producto`
--

TRUNCATE TABLE `producto`;
--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nit`, `nomprod`, `precioU`, `descrip`) VALUES
(456789, '1010', 'Dolex', 700, 'Pastillas para el dolor y fiebre.'),
(898902, '2020', 'Acetaminofen', 500, 'Pastillas para el dolor y fiebre.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `razonS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `proveedor`
--

TRUNCATE TABLE `proveedor`;
--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nit`, `razonS`, `dir`, `tel`) VALUES
('1010', 'Drogras La Rebaja', 'Calle 41 # 24 - 53', '785 09 52'),
('2020', 'Droguería Olimpica', 'Calle 29 # 17 - 24', '782 45 67');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Producto_FKIndex1` (`nit`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898903;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `proveedor` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
