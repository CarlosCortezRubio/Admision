-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 18:26:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pensionados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conceptos`
--

CREATE TABLE `Conceptos` (
  `idConceptos` int(11) NOT NULL,
  `idTipoConcepto` int(11) DEFAULT NULL,
  `idEdoRegistro` int(11) DEFAULT NULL,
  `codConceptos` varchar(8) DEFAULT NULL,
  `codNewConceptos` varchar(8) NOT NULL,
  `nomConceptos` varchar(64) DEFAULT NULL,
  `etiConceptos` varchar(64) DEFAULT NULL,
  `mntConceptos` decimal(22,2) DEFAULT NULL,
  `formConceptos` varchar(128) DEFAULT NULL,
  `ordConceptos` int(11) DEFAULT NULL,
  `afecta_afp` int(11) DEFAULT NULL,
  `afecta_snp` int(11) DEFAULT NULL,
  `afecta_ipss` int(11) DEFAULT NULL,
  `es_remunera` varchar(1) DEFAULT NULL,
  `grpConceptos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Conceptos`
--

INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(1, 1, 1, '0022', '0025', 'Aguinaldo', 'Aguinaldo', NULL, NULL, 1, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(2, 1, 1, '0001', '0089', 'Basica', 'Basica', NULL, NULL, 2, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(3, 1, 1, '0002', '0104', 'Bonif personal', 'Bonif personal', NULL, NULL, 3, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(4, 1, 1, '0003', '0006', 'Ael25671', 'Ael25671', NULL, NULL, 4, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(5, 1, 1, '0004', '0010', 'Aeds081', 'Aeds081', NULL, NULL, 5, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(6, 1, 1, '0006', '0098', 'Tph', 'Tph', NULL, NULL, 6, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(7, 1, 1, '0008', '0028', 'Bonif familiar', 'Bonif familiar', NULL, NULL, 7, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(8, 1, 1, '0009', '0013', 'Du080 04', 'Du080 04', NULL, NULL, 8, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(9, 1, 1, '0010', '0003', 'Refrig y movi', 'Refrig y movi', NULL, NULL, 9, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(10, 1, 1, '0012', '0015', 'Du90 96', 'Du90 96', NULL, NULL, 10, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(11, 1, 1, '0013', '0012', 'Ds19 94 pcm', 'Ds19 94 pcm', NULL, NULL, 11, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(12, 1, 1, '0014', '0132', 'Ds21 92 pcm', 'Ds21 92 pcm', NULL, NULL, 12, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(13, 1, 1, '0024', '0001', 'Bon especial', 'Bon especial', NULL, NULL, 13, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(14, 1, 1, '0025', '0029', 'Reunificada', 'Reunificada', NULL, NULL, 14, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(15, 1, 1, '0026', '0004', 'Igv', 'Igv', NULL, NULL, 15, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(16, 1, 1, '0036', '0128', 'Cargsimul', 'Cargsimul', NULL, NULL, 16, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(17, 1, 1, '0035', '0205', 'Art18 dl 20530', 'Art18 dl 20530', NULL, NULL, 17, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(18, 1, 1, '0082', '0076', 'Du073 97', 'Du073 97', NULL, NULL, 18, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(19, 1, 1, '0100', '0075', 'Du011 99', 'Du011 99', NULL, NULL, 19, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(20, 1, 1, '0105', '0282', 'Du037 94', 'Du037 94', NULL, NULL, 20, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(21, 1, 1, '', '0257', 'Ds016', 'Ds016', NULL, NULL, 21, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(22, 1, 1, '', '0258', 'Ds017', 'Ds017', NULL, NULL, 22, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(23, 1, 1, '', '0224', 'Ds110 2006', 'Ds110 2006', NULL, NULL, 23, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(24, 1, 1, '', '0225', 'Ds039 2007', 'Ds039 2007', NULL, NULL, 24, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(25, 1, 1, '', '0322', 'Ds120 2008', 'Ds120 2008', NULL, NULL, 25, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(26, 1, 1, '', '0345', 'Ds014 2009', 'Ds014 2009', NULL, NULL, 26, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(27, 1, 1, '', '0417', 'Ds077 2010', 'Ds077 2010', NULL, NULL, 27, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(28, 1, 1, '', '0425', 'Ds031 2011', 'Ds031 2011', NULL, NULL, 28, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(29, 1, 1, '', '0451', 'Ds024 2012', 'Ds024 2012', NULL, NULL, 29, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(30, 1, 1, '', '0461', 'Ds004 2013', 'Ds004 2013', NULL, NULL, 30, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(31, 1, 1, '', '0482', 'Ds003 2014', 'Ds003 2014', NULL, NULL, 31, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(32, 1, 1, '', '0232', 'Ds002 2015', 'Ds002 2015', NULL, NULL, 32, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(33, 1, 1, '', '0250', 'Ds005 2016', 'Ds005 2016', NULL, NULL, 33, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(34, 1, 1, '', '0272', 'Ds020 2017', 'Ds020 2017', NULL, NULL, 34, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(35, 1, 1, '', '0280', 'Ds011 2018', 'Ds011 2018', NULL, NULL, 35, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(36, 1, 1, '', '0287', 'Ds009 2019', 'Ds009 2019', NULL, NULL, 36, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(37, 1, 1, '', '0290', 'Ds006 2020', 'Ds006 2020', NULL, NULL, 37, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(38, 1, 1, '', '0304', 'DS 006 - 2021', 'DS 006 - 2021', NULL, NULL, 38, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(39, 1, 1, '0023', '0117', 'Escolaridad', 'Escolaridad', NULL, NULL, 39, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(40, 1, 1, '', '0180', 'P_DL 20530', 'P_DL 20530', NULL, NULL, 40, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(41, 2, 1, '0043', '', 'CAFAE', 'CAFAE', NULL, NULL, NULL, 0, 0, 0, '0', 1);
INSERT INTO `Conceptos` (`idConceptos`, `idTipoConcepto`, `idEdoRegistro`, `codConceptos`, `codNewConceptos`, `nomConceptos`, `etiConceptos`, `mntConceptos`, `formConceptos`, `ordConceptos`, `afecta_afp`, `afecta_snp`, `afecta_ipss`, `es_remunera`, `grpConceptos`) VALUES(42, 2, 1, '7777', '', 'PRDERRMA', 'PRDERRMA', NULL, NULL, NULL, 0, 0, 0, '0', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Conceptos`
--
ALTER TABLE `Conceptos`
  ADD PRIMARY KEY (`idConceptos`),
  ADD KEY `FK_REFERENCE_12` (`idTipoConcepto`),
  ADD KEY `FK_REFERENCE_19` (`idEdoRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Conceptos`
--
ALTER TABLE `Conceptos`
  MODIFY `idConceptos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Conceptos`
--
ALTER TABLE `Conceptos`
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`idTipoConcepto`) REFERENCES `TipoConcepto` (`idTipoConcepto`),
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`idEdoRegistro`) REFERENCES `EdoRegistro` (`idEdoRegistro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
