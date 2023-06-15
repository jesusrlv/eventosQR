-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2023 a las 09:12:45
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventosUACYA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_asistente` int(11) NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_m` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semestre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grupo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unidad_academica` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Programa',
  `numero_control` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Matrícula',
  `idQr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `tipo_asistente`, `apellidos`, `apellido_m`, `curp`, `tipo_sangre`, `semestre`, `grupo`, `unidad_academica`, `carrera`, `numero_control`, `idQr`) VALUES
(97, 'MARCO ANTONIO', 1, 'CANCINO ', 'ANCHEYTA', 'CAAM791207HCSNNR07', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '422055742', 'CAAM791207HCSNNR07_42205574'),
(98, 'CELBA', 1, 'CASTILLO', 'CHAIREZ', 'CACC561125MZSSHL08', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '39200547', 'CACC561125MZSSHL08_39200547'),
(99, 'JORGE CARLOS', 1, 'DE LA BRENA', 'WIEDFELDT', 'BEWJ740122HDFRDR09', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '422057132', 'BEWJ740122HDFRDR09_42205713'),
(100, 'SALVADOR', 1, 'DEL HOYO', 'SOTO', 'HOSS721204HZSYTL06', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '21205404', 'HOSS721204HZSYTL06_21205404'),
(101, 'JUAN', 1, 'ESPINOZA', 'GARCIA', 'EIGJ850106HVZSRN07', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '42205714', 'EIGJ850106HVZSRN07_42205714'),
(102, 'NORBERTO', 1, 'ESTRADA', 'GUTIERREZ', 'EAGN650606HTSSTR09', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '42207726', 'EAGN650606HTSSTR09_42207726'),
(103, 'MONICA ISELA', 1, 'GALINDO ', 'COSME', 'GACM680902MDFLSN08', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '422059652', 'GACM680902MDFLSN08_42205965'),
(104, 'JESUS FIDEL', 1, 'HERNANDEZ', 'RODRIGUEZ', 'HERJ661015HDFRDS08', 'Genérico', 'Genérico', 'Genérico', 'Unidad Académica de Contaduría y Administración', 'DOCTORADO EN IMPUESTOS                                                          ', '422059662', 'HERJ661015HDFRDS08_42205966');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `capacidad`, `fecha`, `lugar`, `activo`) VALUES
(1, 'EVENTO ', 60, '2022-12-01', 'ANFECA', NULL),
(2, 'EVENTO 2', 60, '2022-12-01', 'ANFECA', NULL),
(3, 'EVENTO 3', 60, '2022-12-01', 'ANFECA', NULL),
(4, 'EVENTO 4', 60, '2022-12-01', 'ANFECA', NULL),
(5, 'EVENTO 5', 60, '2022-12-01', 'ANFECA', NULL),
(6, 'EVENTO 6', 60, '2022-12-01', 'ANFECA', NULL),
(7, 'EVENTO 7', 60, '2022-12-01', 'ANFECA', NULL),
(8, 'EVENTO 8', 60, '2022-12-01', 'ANFECA', NULL),
(9, 'EVENTO 9', 30, '2022-12-02', 'Auditorio FCA', 1),
(10, 'EVENTO 9', 30, '2022-12-02', 'Auditorio FCA', 1),
(11, 'Contabilidad', 10, '2022-12-04', 'Aula 1', 1),
(12, 'Simpsium', 30, '2022-12-01', 'ANFECA', 1),
(13, 'Evento NOV', 21, '2022-11-01', 'Anfeca', 1),
(14, 'Evento OCT', 9, '2022-10-01', 'FECA', 1),
(15, 'Evento SEPT', 81, '2022-09-01', 'Anfeca', 1),
(16, 'Evento DIC', 90, '2022-12-19', 'FECA', 1),
(17, 'Evento ENE 2023', 9, '2023-01-02', 'FECA', 1),
(18, 'Evento ENE 2023 2', 81, '2023-01-04', 'FECA', 1),
(19, 'Evento ENE 2023 3', 21, '2023-01-04', 'Anfeca', 1),
(20, '', 0, '0000-00-00', '', 1),
(21, '', 0, '0000-00-00', '', 1),
(22, 'Simpsium', 30, '2023-01-01', 'ANFECA', 1),
(23, 'Evento prueba 1', 60, '2023-02-15', 'Auditorio FCA', 1),
(24, 'Simposium', 90, '2023-02-16', 'Fernando Calderón', 1),
(25, 'Evento 1', 100, '2023-05-15', 'ANFECA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_asistente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `programa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `programa`) VALUES
(1, 'Licenciatura en contaduría'),
(2, 'Licenciatura en administración'),
(3, 'Maestría en administración'),
(4, 'Maestría en impuestos'),
(5, 'Doctorado en administración'),
(6, 'Doctorado en impuestos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `asistente` int(11) NOT NULL,
  `evento` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `idQr` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `asistente`, `evento`, `asistencia`, `fecha_registro`, `idQr`) VALUES
(1, 27, 17, 1, '2023-01-02 00:00:00', '1'),
(34, 31, 17, 1, '2023-01-04 02:35:36', '00450489_LEVJ810924HZSXLS04'),
(35, 31, 18, 1, '2023-01-04 14:24:52', '00450489_LEVJ810924HZSXLS04'),
(36, 31, 19, 1, '2023-01-04 14:27:28', '00450489_LEVJ810924HZSXLS04'),
(37, 31, 22, 1, '2023-01-09 10:03:42', '00450489_LEVJ810924HZSXLS04'),
(41, 32, 22, 1, '2023-01-10 21:31:40', '0009_LEVJ810924HZSXLS04'),
(42, 32, 23, 1, '2023-02-15 18:10:46', '0009_LEVJ810924HZSXLS04'),
(43, 32, 24, 1, '2023-02-16 17:38:49', '0009_LEVJ810924HZSXLS04'),
(56, 103, 25, 1, '2023-05-16 00:16:18', 'GACM680902MDFLSN08_42205965'),
(58, 99, 25, 1, '2023-05-16 00:36:52', 'BEWJ740122HDFRDR09_42205713'),
(59, 99, 1, 1, '2023-05-16 01:27:25', 'BEWJ740122HDFRDR09_42205713');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_sitios`
--

CREATE TABLE `registro_sitios` (
  `id` int(11) NOT NULL,
  `asistente` int(11) NOT NULL,
  `sitio` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `idQr` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro_sitios`
--

INSERT INTO `registro_sitios` (`id`, `asistente`, `sitio`, `asistencia`, `fecha_registro`, `fecha_salida`, `idQr`) VALUES
(1, 27, 17, 1, '2023-01-02 00:00:00', '0000-00-00 00:00:00', '1'),
(34, 31, 17, 1, '2023-01-04 02:35:36', '0000-00-00 00:00:00', '00450489_LEVJ810924HZSXLS04'),
(35, 31, 18, 1, '2023-01-04 14:24:52', '0000-00-00 00:00:00', '00450489_LEVJ810924HZSXLS04'),
(36, 31, 19, 1, '2023-01-04 14:27:28', '0000-00-00 00:00:00', '00450489_LEVJ810924HZSXLS04'),
(37, 31, 22, 1, '2023-01-09 10:03:42', '0000-00-00 00:00:00', '00450489_LEVJ810924HZSXLS04'),
(41, 32, 22, 1, '2023-01-10 21:31:40', '0000-00-00 00:00:00', '0009_LEVJ810924HZSXLS04'),
(42, 32, 23, 1, '2023-02-15 18:10:46', '0000-00-00 00:00:00', '0009_LEVJ810924HZSXLS04'),
(43, 32, 24, 1, '2023-02-16 17:38:49', '0000-00-00 00:00:00', '0009_LEVJ810924HZSXLS04'),
(56, 103, 25, 1, '2023-05-16 00:16:18', '1900-01-16 00:46:41', 'GACM680902MDFLSN08_42205965'),
(75, 99, 17, 1, '2023-05-16 03:05:17', '2023-05-18 00:46:02', 'BEWJ740122HDFRDR09_42205713'),
(76, 99, 17, 1, '2023-05-16 03:06:22', '2023-05-19 00:00:00', 'BEWJ740122HDFRDR09_42205713');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sangre`
--

CREATE TABLE `sangre` (
  `id` int(11) NOT NULL,
  `tipo_sangre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sangre`
--

INSERT INTO `sangre` (`id`, `tipo_sangre`) VALUES
(1, 'A positivo (A +)'),
(2, 'A negativo (A-)'),
(3, 'B positivo (B +)'),
(4, 'B negativo (B-)'),
(5, 'AB positivo (AB+)'),
(6, 'AB negativo (AB-)'),
(7, 'O positivo (O+)'),
(8, 'O negativo (O-)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `semestre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id`, `semestre`) VALUES
(1, 'Primer semestre'),
(2, 'Segundo semestre'),
(3, 'Tercer semestre'),
(4, 'Cuarto semestre'),
(5, 'Quinto semestre'),
(6, 'Sexto semestre'),
(7, 'Séptimo semestre'),
(8, 'Octavo semestre'),
(9, 'Noveno semestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `id` int(11) NOT NULL,
  `sitio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sitio` int(11) NOT NULL COMMENT '1 -Biblioteca 2- CC',
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`id`, `sitio`, `tipo_sitio`, `activo`) VALUES
(1, 'Biblioteca', 1, 1),
(2, 'Centro de Cómputo', 2, 1),
(4, 'Sitio 2', 3, 1),
(5, 'sitio 3', 3, 1),
(6, 'sitio 4', 3, 1),
(15, 'ANFECA', 1, 1),
(16, 'ANFECA 2', 2, 1),
(17, 'ANFECA 3', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_academica`
--

CREATE TABLE `unidad_academica` (
  `id` int(11) NOT NULL,
  `unidad_academica` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidad_academica`
--

INSERT INTO `unidad_academica` (`id`, `unidad_academica`) VALUES
(1, 'Unidad Académica de Contaduría y Adminisitración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` int(20) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'admin', 123456789, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_sitios`
--
ALTER TABLE `registro_sitios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sangre`
--
ALTER TABLE `sangre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_academica`
--
ALTER TABLE `unidad_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `registro_sitios`
--
ALTER TABLE `registro_sitios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `sangre`
--
ALTER TABLE `sangre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sitio`
--
ALTER TABLE `sitio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `unidad_academica`
--
ALTER TABLE `unidad_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
