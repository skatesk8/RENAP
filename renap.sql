-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2020 a las 01:30:44
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ottos_25392760_renap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `noRegistro` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(150) NOT NULL,
  `depart_nacimiento` varchar(150) NOT NULL,
  `municipio_nacimiento` varchar(150) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `name_madre` varchar(50) NOT NULL,
  `edad_madre` int(2) NOT NULL,
  `nacionalidad_madre` varchar(150) NOT NULL,
  `dpi_madre` int(15) NOT NULL,
  `TipoIdent_madre` varchar(20) NOT NULL,
  `name_padre` varchar(50) NOT NULL,
  `edad_padre` int(2) NOT NULL,
  `nacionalidad_padre` varchar(150) NOT NULL,
  `dpi_padre` int(15) NOT NULL,
  `TipoIdent_padre` varchar(20) NOT NULL,
  `name_compariente` varchar(50) NOT NULL,
  `dpi_compariente` int(15) NOT NULL,
  `TipoIdent_compariente` varchar(20) NOT NULL,
  `direccion_compariente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`noRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `noRegistro` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
