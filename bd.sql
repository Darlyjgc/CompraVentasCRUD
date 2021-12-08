-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 22:40:10
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelas`
--
CREATE DATABASE IF NOT EXISTS `escuelas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escuelas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `cod_alum` int(11) NOT NULL,
  `nom_alum` varchar(25) NOT NULL,
  `ape_alum` varchar(25) NOT NULL,
  `dni_alum` char(8) NOT NULL,
  `cod_cat` int(11) DEFAULT NULL,
  `cod_pais` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`cod_alum`, `nom_alum`, `ape_alum`, `dni_alum`, `cod_cat`, `cod_pais`, `estado`) VALUES(1, 'Darly Jack', 'Gongora', '72747310', 2, 4, 1);
INSERT INTO `alumnos` (`cod_alum`, `nom_alum`, `ape_alum`, `dni_alum`, `cod_cat`, `cod_pais`, `estado`) VALUES(2, 'Jose', 'Robles', '47152615', 2, 2, 1);
INSERT INTO `alumnos` (`cod_alum`, `nom_alum`, `ape_alum`, `dni_alum`, `cod_cat`, `cod_pais`, `estado`) VALUES(3, 'Cesar', 'Vega', '65542115', 3, 3, 1);
INSERT INTO `alumnos` (`cod_alum`, `nom_alum`, `ape_alum`, `dni_alum`, `cod_cat`, `cod_pais`, `estado`) VALUES(4, 'Diego', 'Gutarra', '54154895', 1, 4, 1);
INSERT INTO `alumnos` (`cod_alum`, `nom_alum`, `ape_alum`, `dni_alum`, `cod_cat`, `cod_pais`, `estado`) VALUES(5, 'Ricardo', 'Rios', '74489515', 2, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cod_cat` int(11) NOT NULL,
  `nom_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_cat`, `nom_cat`) VALUES(1, 'DECIMO SUPERIOR');
INSERT INTO `categorias` (`cod_cat`, `nom_cat`) VALUES(2, 'TERCIO SUPERIOR');
INSERT INTO `categorias` (`cod_cat`, `nom_cat`) VALUES(3, 'QUINTO SUPERIOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `cod_pais` int(11) NOT NULL,
  `desc_pais` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`cod_pais`, `desc_pais`) VALUES(1, 'Peru');
INSERT INTO `pais` (`cod_pais`, `desc_pais`) VALUES(2, 'Argentina');
INSERT INTO `pais` (`cod_pais`, `desc_pais`) VALUES(3, 'Chile');
INSERT INTO `pais` (`cod_pais`, `desc_pais`) VALUES(4, 'Colombia');
INSERT INTO `pais` (`cod_pais`, `desc_pais`) VALUES(5, 'España');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`cod_alum`),
  ADD KEY `cod_cat` (`cod_cat`),
  ADD KEY `cod_pais` (`cod_pais`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_cat`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`cod_pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `cod_alum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cod_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `cod_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`cod_cat`) REFERENCES `categorias` (`cod_cat`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`cod_pais`) REFERENCES `pais` (`cod_pais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
