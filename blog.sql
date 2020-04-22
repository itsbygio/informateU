-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2020 a las 01:56:57
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idcarrera` int(5) NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idcarrera`, `carrera`) VALUES
(1, 'INGENIERIA DE SISTEMAS'),
(2, 'INGENIERIA INDUSTRIAL'),
(3, 'INGENIERIA ELECTRONICA'),
(4, 'ADMINISTRACION DE EMPRESAS'),
(5, 'PSICOLOGIA'),
(6, 'DISEÑO GRAFICO'),
(10000, 'NINGUNA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `token` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `DateTimeRecover` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `apellidos` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `TokenActivate` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `cumpleaños` date NOT NULL,
  `biografia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idcarrera` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `usuario`, `email`, `clave`, `token`, `foto`, `DateTimeRecover`, `data_register`, `apellidos`, `TokenActivate`, `tipo`, `genero`, `cumpleaños`, `biografia`, `idcarrera`) VALUES
(144, 'miguel', 'miguelocampoc', 'miguelocampoc@gmail.com', '$2y$10$wpR6RFayL6Ve0rJ4dELPOeg0QXZQnHIV7irR1ceVNLe/B5tYWfJlW', 'NULL', 'GIO2.jpg', '2020-04-13 14:12:00', '2020-04-13 14:12:00', 'ocampo', '$2y$10$iENUlFLarhCIYOrnLZ/Ilepsge2T2uOF8UGwznP0Kl9jmwRNLCfn2', 'Actived', 'M', '2020-04-03', 'Estudiante de ingenieria de sistemas', 1),
(145, 'miguel', 'miguel09', 'magelosac@gmail.com', '', '', '', '2020-04-13 20:30:27', '2020-04-13 20:30:27', 'ocampo', '', 'Activated', 'M', '2020-04-03', 'Estudiante de ingenieria de sistemas', 1),
(159, 'Giovanni', 'itsbygio', 'gioangil@gmail.com', '$2y$10$/5F28NXz4H7RT/2JP8B/suPKCGGlWbsxJeaYgyT/RW0GEZXVPHOrW', 'NULL', 'GIO2.jpg', '2020-04-18 03:15:00', '2020-04-18 03:15:00', 'Giovanni', '$2y$10$zskWXsXpY8Kn1F5J9AwSzOWO6MI0mtZ6wFdbqGbSns7u7PAoFSgRi', 'Activated', '', '0000-00-00', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idcarrera` (`idcarrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `idcarrera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idcarrera`) REFERENCES `carreras` (`idcarrera`);

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `itsbygio` ON SCHEDULE AT '2020-04-13 15:19:08' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM usuarios WHERE usuario='itsbygio' < (CURRENT_TIMESTAMP - INTERVAL 1 HOUR)$$

CREATE DEFINER=`root`@`localhost` EVENT `fmestra` ON SCHEDULE AT '2020-04-17 22:53:31' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM usuarios WHERE usuario='fmestra' < (CURRENT_TIMESTAMP - INTERVAL 1 HOUR)$$

CREATE DEFINER=`root`@`localhost` EVENT `itsbygio2` ON SCHEDULE AT '2020-04-17 23:08:26' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM usuarios WHERE usuario='itsbygio2' < (CURRENT_TIMESTAMP - INTERVAL 1 HOUR)$$

CREATE DEFINER=`root`@`localhost` EVENT `ayuda` ON SCHEDULE AT '2020-04-17 23:10:56' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM usuarios WHERE usuario='ayuda' < (CURRENT_TIMESTAMP - INTERVAL 1 HOUR)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
