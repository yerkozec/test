-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2018 a las 21:47:40
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concremag`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cant_produccion`
--

CREATE TABLE `cant_produccion` (
  `id_cant_produ` int(6) NOT NULL,
  `cant_primera` int(7) NOT NULL,
  `cant_segunda` int(7) NOT NULL,
  `cant_perdida` int(6) NOT NULL,
  `id_paletizado` int(6) NOT NULL,
  `id_total_prim` int(6) NOT NULL,
  `id_total_segunda` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `cant_produccion`
--

INSERT INTO `cant_produccion` (`id_cant_produ`, `cant_primera`, `cant_segunda`, `cant_perdida`, `id_paletizado`, `id_total_prim`, `id_total_segunda`) VALUES
(4001, 4700, 1200, 100, 3001, 6001, 7001),
(4002, 4000, 150, 50, 3002, 6031, 7031),
(4003, 2500, 350, 50, 3003, 6001, 7001),
(4004, 4520, 400, 80, 3004, 6016, 7016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_color` int(6) NOT NULL,
  `color` varchar(15) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_color`, `color`) VALUES
(1, 'gris'),
(2, 'amarillo'),
(3, 'rojo'),
(4, 'negro'),
(5, 'cafe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `id_despacho` int(6) NOT NULL,
  `fecha_despacho` date NOT NULL,
  `cant_despa_primera` int(6) DEFAULT NULL,
  `cant_despa_segunda` int(6) DEFAULT NULL,
  `id_venta` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`id_despacho`, `fecha_despacho`, `cant_despa_primera`, `cant_despa_segunda`, `id_venta`) VALUES
(9000, '2018-02-22', 1500, NULL, 8001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eficiencia`
--

CREATE TABLE `eficiencia` (
  `id_eficiencia` int(5) NOT NULL,
  `fecha_inci` date NOT NULL,
  `primera_cal` float NOT NULL,
  `segunda_cal` float NOT NULL,
  `perdida` float NOT NULL,
  `id_cant_produ` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `eficiencia`
--

INSERT INTO `eficiencia` (`id_eficiencia`, `fecha_inci`, `primera_cal`, `segunda_cal`, `perdida`, `id_cant_produ`) VALUES
(5001, '2018-02-20', 78.3, 20, 1.7, 4001),
(5002, '2018-02-28', 79, 13, 8, 4002),
(5003, '2018-02-24', 85, 10, 5, 4003),
(5013, '2018-02-21', 90.4, 8, 1.6, 4004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paletizado`
--

CREATE TABLE `paletizado` (
  `id_paletizado` int(6) NOT NULL,
  `fecha_palet` date NOT NULL,
  `fecha_produccion` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `cant_trabajador` int(5) NOT NULL,
  `id_produccion` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `paletizado`
--

INSERT INTO `paletizado` (`id_paletizado`, `fecha_palet`, `fecha_produccion`, `hora_inicio`, `hora_fin`, `cant_trabajador`, `id_produccion`) VALUES
(3001, '2018-02-20', '2018-02-06', '08:00:00', '12:00:00', 3, 2001),
(3002, '2018-02-19', '2018-02-14', '08:00:00', '11:00:00', 3, 2005),
(3003, '2018-02-16', '2018-02-14', '09:00:00', '11:00:00', 2, 2002),
(3004, '2018-02-21', '2018-02-18', '12:00:00', '15:00:00', 3, 2003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id_produccion` int(7) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `vol_ocupado` float NOT NULL,
  `colacion` time NOT NULL,
  `detencion` time NOT NULL,
  `cant_producido` int(6) NOT NULL,
  `cant_perdido` int(6) NOT NULL,
  `id_producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`id_produccion`, `fecha`, `hora_inicio`, `hora_fin`, `vol_ocupado`, `colacion`, `detencion`, `cant_producido`, `cant_perdido`, `id_producto`) VALUES
(2001, '2018-02-06', '08:00:00', '12:29:00', 6.5, '00:00:00', '00:00:00', 6000, 150, 1011),
(2002, '2018-02-14', '08:30:00', '12:00:00', 4.5, '00:00:00', '00:00:00', 2900, 200, 1011),
(2003, '2018-02-18', '12:30:00', '18:50:00', 4.5, '00:00:00', '00:00:00', 5000, 200, 1041),
(2004, '2018-02-13', '08:30:00', '12:40:00', 6.7, '00:00:00', '00:00:00', 6000, 50, 1081),
(2005, '2018-02-14', '12:20:00', '16:20:00', 4.2, '00:00:00', '00:00:00', 4200, 420, 1071);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(6) NOT NULL,
  `molde` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `stock_critico` int(6) NOT NULL,
  `id_color` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `molde`, `stock_critico`, `id_color`) VALUES
(1011, 'bloque split', 350, 1),
(1012, 'bloque split', 200, 2),
(1013, 'bloque split', 200, 3),
(1014, 'bloque split', 200, 4),
(1015, 'bloque split', 200, 5),
(1021, 'bloque', 400, 1),
(1022, 'bloque', 200, 2),
(1023, 'bloque', 200, 3),
(1024, 'bloque', 200, 4),
(1025, 'bloque', 200, 5),
(1031, 'bloque 140', 200, 1),
(1032, 'bloque 140', 200, 2),
(1033, 'bloque 140', 200, 3),
(1034, 'bloque 140', 200, 4),
(1035, 'bloque 140', 200, 5),
(1041, 'adoquin sigma', 500, 1),
(1042, 'adoquin sigma', 209, 2),
(1043, 'adoquin sigma', 200, 3),
(1044, 'adoquin sigma', 200, 4),
(1045, 'adoquin sigma', 200, 5),
(1051, 'adoquin cruz', 700, 1),
(1052, 'adoquin cruz', 300, 2),
(1053, 'adoquin cruz', 300, 3),
(1054, 'adoquin cruz', 300, 4),
(1055, 'adoquin cruz', 300, 5),
(1061, 'adoquin siames', 1200, 1),
(1062, 'adoquin siames', 300, 2),
(1063, 'adoquin siames', 300, 3),
(1064, 'adoquin siames', 300, 4),
(1065, 'adoquin siames', 300, 5),
(1071, 'solerilla', 3500, 1),
(1072, 'solerilla', 400, 2),
(1073, 'solerilla', 400, 3),
(1074, 'solerilla', 400, 4),
(1075, 'solerilla', 409, 5),
(1081, 'solera', 400, 1),
(1082, 'solera', 400, 2),
(1083, 'solera', 500, 3),
(1084, 'solera', 500, 4),
(1085, 'solera', 500, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_primera`
--

CREATE TABLE `total_primera` (
  `id_total_prim` int(6) NOT NULL,
  `cant_total_p` int(7) NOT NULL,
  `id_producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `total_primera`
--

INSERT INTO `total_primera` (`id_total_prim`, `cant_total_p`, `id_producto`) VALUES
(6001, 500, 1011),
(6002, 500, 1012),
(6003, 500, 1013),
(6004, 500, 1014),
(6005, 500, 1015),
(6006, 500, 1021),
(6007, 500, 1022),
(6008, 500, 1023),
(6009, 500, 1024),
(6010, 500, 1025),
(6011, 500, 1031),
(6012, 500, 1032),
(6013, 500, 1033),
(6014, 500, 1034),
(6015, 500, 1035),
(6016, 500, 1041),
(6017, 500, 1042),
(6018, 500, 1043),
(6019, 500, 1044),
(6020, 500, 1045),
(6021, 1500, 1051),
(6022, 500, 1052),
(6023, 500, 1053),
(6024, 500, 1054),
(6025, 500, 1055),
(6026, 500, 1061),
(6027, 500, 1062),
(6028, 500, 1063),
(6029, 500, 1064),
(6030, 500, 1065),
(6031, 500, 1071),
(6032, 500, 1072),
(6033, 500, 1073),
(6034, 500, 1074),
(6035, 500, 1075),
(6036, 500, 1081),
(6037, 500, 1082),
(6038, 500, 1083),
(6039, 500, 1084),
(6040, 500, 1085);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_segunda`
--

CREATE TABLE `total_segunda` (
  `id_total_segunda` int(6) NOT NULL,
  `cant_total_s` int(7) NOT NULL,
  `id_producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `total_segunda`
--

INSERT INTO `total_segunda` (`id_total_segunda`, `cant_total_s`, `id_producto`) VALUES
(7001, 0, 1011),
(7002, 0, 1012),
(7003, 0, 1013),
(7004, 0, 1014),
(7005, 0, 1015),
(7006, 0, 1021),
(7007, 0, 1022),
(7008, 0, 1023),
(7009, 0, 1024),
(7010, 0, 1025),
(7011, 0, 1031),
(7012, 0, 1032),
(7013, 0, 1033),
(7014, 0, 1034),
(7015, 0, 1035),
(7016, 0, 1041),
(7017, 0, 1042),
(7018, 0, 1043),
(7019, 0, 1044),
(7020, 0, 1045),
(7021, 0, 1051),
(7022, 0, 1052),
(7023, 0, 1053),
(7024, 0, 1054),
(7025, 0, 1055),
(7026, 0, 1061),
(7027, 0, 1062),
(7028, 0, 1063),
(7029, 0, 1064),
(7030, 0, 1065),
(7031, 0, 1071),
(7032, 0, 1072),
(7033, 0, 1073),
(7034, 0, 1074),
(7035, 0, 1075),
(7036, 0, 1081),
(7037, 0, 1082),
(7038, 0, 1083),
(7039, 0, 1084),
(7040, 0, 1085);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf`
--

CREATE TABLE `uf` (
  `id_uf` int(7) NOT NULL,
  `valor_uf` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `uf`
--

INSERT INTO `uf` (`id_uf`, `valor_uf`) VALUES
(11001, 26923),
(11002, 26939);

--
-- Disparadores `uf`
--
DELIMITER $$
CREATE TRIGGER `trigger_uf` AFTER INSERT ON `uf` FOR EACH ROW UPDATE valor_producto
SET id_uf = (SELECT id_uf
              	FROM uf
             	ORDER BY id_uf DESC
              	LIMIT 1)
WHERE valor_producto.id_uf = (SELECT id_uf
                                FROM uf
                                LIMIT 1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor_producto`
--

CREATE TABLE `valor_producto` (
  `id_valor_produ` int(6) NOT NULL,
  `valor_unitario` float NOT NULL,
  `id_producto` int(6) NOT NULL,
  `id_uf` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `valor_producto`
--

INSERT INTO `valor_producto` (`id_valor_produ`, `valor_unitario`, `id_producto`, `id_uf`) VALUES
(10001, 673, 1011, 11002),
(10002, 759, 1021, 11002),
(10003, 606, 1031, 11002),
(10004, 301, 1041, 11002),
(10005, 450, 1051, 11002),
(10006, 691, 1061, 11002),
(10007, 1486.1, 1071, 11002),
(10008, 5311.33, 1081, 11002),
(10009, 834, 1012, 11002),
(10010, 798, 1013, 11002),
(10011, 884, 1014, 11002),
(10012, 788, 1015, 11002),
(10013, 0, 1022, 11002),
(10014, 0, 1023, 11002),
(10015, 0, 1024, 11002),
(10016, 0, 1025, 11002),
(10017, 741, 1032, 11002),
(10018, 711, 1033, 11002),
(10019, 783, 1034, 11002),
(10020, 702, 1035, 11002),
(10021, 369, 1042, 11002),
(10022, 357, 1043, 11002),
(10023, 409, 1044, 11002),
(10024, 365, 1045, 11002),
(10025, 556, 1052, 11002),
(10026, 525, 1053, 11002),
(10027, 595, 1054, 11002),
(10028, 529, 1055, 11002),
(10029, 848, 1062, 11002),
(10030, 821, 1063, 11002),
(10031, 936, 1064, 11002),
(10032, 838, 1065, 11002),
(10033, 1663.14, 1072, 11002),
(10034, 1582.67, 1073, 11002),
(10035, 1931.39, 1074, 11002),
(10036, 1985.04, 1075, 11002),
(10037, 0, 1082, 11002),
(10038, 0, 1083, 11002),
(10039, 0, 1084, 11002),
(10040, 0, 1085, 11002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(6) NOT NULL,
  `fecha_venta` date NOT NULL,
  `orden` int(7) NOT NULL,
  `venta_primera` int(7) DEFAULT NULL,
  `venta_segunda` int(7) DEFAULT NULL,
  `id_total_primera` int(6) DEFAULT NULL,
  `id_total_segunda` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha_venta`, `orden`, `venta_primera`, `venta_segunda`, `id_total_primera`, `id_total_segunda`) VALUES
(8001, '2018-02-22', 8445, 350, NULL, 6001, NULL),
(8002, '2018-02-22', 8446, NULL, 500, NULL, 7001),
(8003, '2018-02-22', 8447, 3000, NULL, 6016, NULL),
(8004, '2018-02-23', 8448, 650, NULL, 6001, NULL),
(8005, '2018-02-23', 8449, 435, NULL, 6031, NULL),
(8006, '2018-02-23', 8450, 4589, NULL, 6031, NULL),
(8007, '2018-02-23', 8451, NULL, 4589, NULL, 7031);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cant_produccion`
--
ALTER TABLE `cant_produccion`
  ADD PRIMARY KEY (`id_cant_produ`),
  ADD KEY `id_paletizado` (`id_paletizado`),
  ADD KEY `id_total_prim` (`id_total_prim`),
  ADD KEY `id_total_segunda` (`id_total_segunda`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `despacho`
--
ALTER TABLE `despacho`
  ADD PRIMARY KEY (`id_despacho`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `eficiencia`
--
ALTER TABLE `eficiencia`
  ADD PRIMARY KEY (`id_eficiencia`),
  ADD KEY `id_produccion` (`id_cant_produ`);

--
-- Indices de la tabla `paletizado`
--
ALTER TABLE `paletizado`
  ADD PRIMARY KEY (`id_paletizado`),
  ADD KEY `id_produccion` (`id_produccion`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id_produccion`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`,`id_color`) USING BTREE,
  ADD KEY `id_color` (`id_color`);

--
-- Indices de la tabla `total_primera`
--
ALTER TABLE `total_primera`
  ADD PRIMARY KEY (`id_total_prim`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `total_segunda`
--
ALTER TABLE `total_segunda`
  ADD PRIMARY KEY (`id_total_segunda`) USING BTREE,
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`id_uf`);

--
-- Indices de la tabla `valor_producto`
--
ALTER TABLE `valor_producto`
  ADD PRIMARY KEY (`id_valor_produ`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_uf` (`id_uf`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_total_primera` (`id_total_primera`),
  ADD KEY `id_total_segunda` (`id_total_segunda`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cant_produccion`
--
ALTER TABLE `cant_produccion`
  MODIFY `id_cant_produ` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4005;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `despacho`
--
ALTER TABLE `despacho`
  MODIFY `id_despacho` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9001;

--
-- AUTO_INCREMENT de la tabla `eficiencia`
--
ALTER TABLE `eficiencia`
  MODIFY `id_eficiencia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5014;

--
-- AUTO_INCREMENT de la tabla `paletizado`
--
ALTER TABLE `paletizado`
  MODIFY `id_paletizado` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produccion` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2006;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1086;

--
-- AUTO_INCREMENT de la tabla `total_primera`
--
ALTER TABLE `total_primera`
  MODIFY `id_total_prim` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6041;

--
-- AUTO_INCREMENT de la tabla `total_segunda`
--
ALTER TABLE `total_segunda`
  MODIFY `id_total_segunda` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7041;

--
-- AUTO_INCREMENT de la tabla `uf`
--
ALTER TABLE `uf`
  MODIFY `id_uf` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11003;

--
-- AUTO_INCREMENT de la tabla `valor_producto`
--
ALTER TABLE `valor_producto`
  MODIFY `id_valor_produ` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10041;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8009;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cant_produccion`
--
ALTER TABLE `cant_produccion`
  ADD CONSTRAINT `cant_produccion_ibfk_1` FOREIGN KEY (`id_paletizado`) REFERENCES `paletizado` (`id_paletizado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cant_produccion_ibfk_2` FOREIGN KEY (`id_total_prim`) REFERENCES `total_primera` (`id_total_prim`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cant_produccion_ibfk_3` FOREIGN KEY (`id_total_segunda`) REFERENCES `total_segunda` (`id_total_segunda`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `despacho`
--
ALTER TABLE `despacho`
  ADD CONSTRAINT `despacho_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `eficiencia`
--
ALTER TABLE `eficiencia`
  ADD CONSTRAINT `eficiencia_ibfk_1` FOREIGN KEY (`id_cant_produ`) REFERENCES `cant_produccion` (`id_cant_produ`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `paletizado`
--
ALTER TABLE `paletizado`
  ADD CONSTRAINT `paletizado_ibfk_1` FOREIGN KEY (`id_produccion`) REFERENCES `produccion` (`id_produccion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_primera`
--
ALTER TABLE `total_primera`
  ADD CONSTRAINT `total_primera_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_segunda`
--
ALTER TABLE `total_segunda`
  ADD CONSTRAINT `total_segunda_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `valor_producto`
--
ALTER TABLE `valor_producto`
  ADD CONSTRAINT `valor_producto_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `valor_producto_ibfk_4` FOREIGN KEY (`id_uf`) REFERENCES `uf` (`id_uf`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_total_primera`) REFERENCES `total_primera` (`id_total_prim`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_total_segunda`) REFERENCES `total_segunda` (`id_total_segunda`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
