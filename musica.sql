-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2021 a las 00:44:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `adminuser`
--

INSERT INTO `adminuser` (`id`, `nombres`, `apellidos`, `usuario`, `clave`, `tipo`) VALUES
(1, 'Fernando Andrés', 'Carreño Rodriguez', 'fecarreno', '1019', 1),
(2, 'Administrador', 'Pilares', 'Pilares', 'Pilares-1', 0),
(3, 'Jorge', 'Quispe', 'jorgecq', '%Jorgecq84%', 1),
(4, 'Aaron', 'Rivera', 'aaron', '-Norte123', 1),
(5, 'Fabián', 'Torijano', 'ftorijano', 'Fabian2020', 1),
(6, 'Cristian', 'Reinoso', 'creinoso', '123456', 1),
(7, 'Administrador', '', 'edumediaadmin', 'EdumEdia-1', 2),
(8, 'Supervisor', 'Pilares', 'supervisor', 'Pilares-1', 2),
(9, 'Administrador', 'Pilares', 'adminpilares', '%Jorgecq84%', 2),
(10, 'Pruebas', 'Pilares', 'pruebas', 'Pilares-1', 1),
(11, 'ABIGAÍL', 'ALDAVE', 'abigail', 'Aldave-1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alum` int(11) NOT NULL,
  `nombres` varchar(225) DEFAULT NULL,
  `apellidos` varchar(225) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `curso` varchar(225) DEFAULT NULL,
  `especialidad` varchar(223) DEFAULT NULL,
  `obsevaciones` varchar(500) DEFAULT NULL,
  `profesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alum`, `nombres`, `apellidos`, `edad`, `fecha_inicio`, `fecha_fin`, `curso`, `especialidad`, `obsevaciones`, `profesor`) VALUES
(1, 'alumno 1', 'pomajulca', 23, '2021-04-21', '2021-04-23', 'gerrr', 'letras', 'asdasdas', 2),
(2, 'sa1', 'sa1', 21, '2021-04-14', '2021-05-01', 'asda1', 'sad1', 'sdasd1', 1),
(3, 'sa 2', 'ade2', 231, '2021-03-30', '2021-05-08', '21', '212', 'dasdas', 2),
(4, 'asd', 'asd', 21, '0000-00-00', '0000-00-00', 'asssssssssss', 'ssssssssssssss', 'ssssssssssss', 2),
(5, 'sa', 'sa', 21, '0000-00-00', '0000-00-00', 'sadas', 'asdas', 'dasdasd', 4),
(6, 'as', 'asd', 21, '2021-04-02', '2021-04-02', 'asa', 'aaaaaaaaaa', 'sas', 1),
(7, 'sasssss', 'PAZ ZAMORA7', 21, '2021-04-01', '2021-04-14', 'dfgdf', 'sssssssssss', '', 0),
(8, 'sasssss', 'PAZ ZAMORA7', 21, '2021-04-02', '2021-04-14', 'sad', 'aaaaaaaaaa', 'dasd', 6),
(9, '3333333', '3333333', 21, '2021-04-01', '2021-04-08', '3333', '3333333', '3333333333333333', 6),
(10, 'sa', 'PAZ ZAMORA7', 21, '2021-04-07', '2021-04-01', 'sad', 'sssssssssss', 'dasdasd', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_pro` int(11) NOT NULL,
  `nombres` varchar(225) DEFAULT NULL,
  `apellidos` varchar(225) DEFAULT NULL,
  `especialidad` varchar(223) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_pro`, `nombres`, `apellidos`, `especialidad`, `telefono`, `dni`) VALUES
(1, 'sabrina', 'Pomajulca', 'Programacion', 987912688, 76232414),
(2, 'sa', 'sa', 'asdas', 123422, 76232414),
(3, 'sa', 'sa', 'sadasd', 123422, 73699461),
(4, 'saddd', 'ddddddddd', 'ddddddddd', 987912688, 76232414),
(5, '', '', '', 0, 0),
(6, '', '', '', 0, 0),
(7, 'ssssssssssssss', 'ssssssssssss', 'sssssssssss', 0, 0),
(8, '', '', '', 0, 0),
(9, 'asdas', 'asdas', 'asd', 0, 0),
(10, 'sa', 'das', 'asd', 0, 0),
(11, 'a5555555555', '5555555', '555555', 55555555, 55555555),
(12, 'dsadas', 'asd', 'ads6666666666', 66666666, 6666666),
(13, '99999999', '999999999', '999999999', 99999999, 999999999);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alum`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
