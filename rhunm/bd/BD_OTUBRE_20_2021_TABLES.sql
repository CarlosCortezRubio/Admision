-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 07:19:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afp`
--

CREATE TABLE `afp` (
  `idAfp` int(11) NOT NULL,
  `codAfp` varchar(8) DEFAULT NULL,
  `nomAfp` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `afp`
--

INSERT INTO `afp` (`idAfp`, `codAfp`, `nomAfp`) VALUES
(1, 'codAfp', 'nomAfp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `idBeneficiario` int(11) NOT NULL,
  `idTipoCalcJud` int(11) DEFAULT NULL,
  `idModoPago` int(11) DEFAULT NULL,
  `idParentesco` int(11) DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `CESSaludBeneficiario` varchar(32) DEFAULT NULL,
  `tPensBeneficiario` varchar(32) DEFAULT NULL,
  `plazaBeneficiario` varchar(32) DEFAULT NULL,
  `leyendaBeneficiario` varchar(32) DEFAULT NULL,
  `ctaDepBeneficiario` varchar(32) DEFAULT NULL,
  `regJudicialBeneficiario` int(11) DEFAULT NULL,
  `fecIniBeneficiario` date DEFAULT NULL,
  `fecFinBeneficiario` date DEFAULT NULL,
  `edoBeneficiario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`idBeneficiario`, `idTipoCalcJud`, `idModoPago`, `idParentesco`, `idPersona`, `CESSaludBeneficiario`, `tPensBeneficiario`, `plazaBeneficiario`, `leyendaBeneficiario`, `ctaDepBeneficiario`, `regJudicialBeneficiario`, `fecIniBeneficiario`, `fecFinBeneficiario`, `edoBeneficiario`) VALUES
(3, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', NULL, 1, '2021-10-12', '2021-10-12', 1),
(4, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', NULL, 1, '2021-10-12', '2021-10-12', 1),
(5, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 3, '2021-10-18', '2021-10-31', 5),
(6, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2021-10-28', '2021-10-22', 33),
(7, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 12, '2021-10-21', '2021-10-10', 1),
(8, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 111, '2021-10-05', '2021-10-30', 1),
(9, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-10-01', '2021-10-20', 1),
(10, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2021-10-20', '2021-10-19', 3),
(11, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-10-20', '2021-10-20', 1),
(12, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', '11', 11, '2021-10-20', '2021-10-20', 1),
(13, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', '1111', 1, '2021-10-20', '2021-10-20', 3),
(14, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 3, '2021-10-20', '2021-10-21', 1),
(15, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 3, '2021-10-20', '2021-10-21', 1),
(16, 1, 1, 1, 1, 'cessalud', 'xxxxx', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-10-19', '2021-10-22', 1),
(17, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', '1111', 1, '2021-10-28', '2021-10-29', 9),
(18, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2021-01-31', NULL, NULL),
(19, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2021-01-31', NULL, NULL),
(20, 1, 1, 1, 2, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2021-01-31', NULL, NULL),
(21, 1, 1, NULL, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2020-01-01', '2021-01-01', 1),
(22, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2020-01-01', '2021-01-01', 1),
(23, 1, 1, 1, 1, '?', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-01-01', '2019-01-01', 1),
(24, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 2, '2020-01-01', '2021-01-01', 1),
(25, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-01-31', '2021-01-01', 1),
(26, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-01-31', '2022-01-01', 1),
(27, 1, 1, 1, 1, 'cessalud', 'tpens', 'plaza', 'leyendBe', 'ctaDep', 1, '2021-12-02', '2021-01-01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarioempleado`
--

CREATE TABLE `beneficiarioempleado` (
  `idBeneficiarioEmpleado` int(11) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `idBeneficiario` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beneficiarioempleado`
--

INSERT INTO `beneficiarioempleado` (`idBeneficiarioEmpleado`, `idEmpleado`, `idBeneficiario`, `estado`) VALUES
(1, 5, NULL, NULL),
(2, 3, NULL, NULL),
(3, 1, 3, NULL),
(4, 5, 3, 1),
(5, 5, 3, 1),
(6, 5, NULL, 1),
(7, 5, NULL, 1),
(8, 1, 10, 1),
(9, 5, 11, 1),
(10, 5, NULL, 1),
(11, 1, NULL, 1),
(12, 1, NULL, 1),
(13, 5, NULL, 1),
(14, 5, NULL, 1),
(15, 5, 27, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoorigen`
--

CREATE TABLE `cargoorigen` (
  `idCargoOrigen` int(11) NOT NULL,
  `codCargoOrigen` varchar(4) DEFAULT NULL,
  `nomCargoOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargoorigen`
--

INSERT INTO `cargoorigen` (`idCargoOrigen`, `codCargoOrigen`, `nomCargoOrigen`) VALUES
(1, '7777', 'cargo Origen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `codCategoria` varchar(4) DEFAULT NULL,
  `nomCategoria` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coddescuento`
--

CREATE TABLE `coddescuento` (
  `idCodDescuento` int(11) NOT NULL,
  `codCodDescuento` varchar(16) DEFAULT NULL,
  `nomCodDescuento` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codfiscal`
--

CREATE TABLE `codfiscal` (
  `idCodFiscal` int(11) NOT NULL,
  `codCodFiscal` varchar(8) DEFAULT NULL,
  `nomCodFiscal` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codfiscal`
--

INSERT INTO `codfiscal` (`idCodFiscal`, `codCodFiscal`, `nomCodFiscal`) VALUES
(1, 'nroCodig', 'nomCodigoFiscal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codregional`
--

CREATE TABLE `codregional` (
  `idCodRegional` int(11) NOT NULL,
  `codCodRegional` varchar(4) DEFAULT NULL,
  `nomCodRegional` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codregional`
--

INSERT INTO `codregional` (`idCodRegional`, `codCodRegional`, `nomCodRegional`) VALUES
(1, 'codC', 'nomCodRegional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `idPais` int(11) DEFAULT NULL,
  `nomDepartamento` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `idPais`, `nomDepartamento`) VALUES
(1, 1, 'Departamento 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `idDescuento` int(11) NOT NULL,
  `idRegionCargo` int(11) DEFAULT NULL,
  `idCodDescuento` int(11) DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `vigMntoDescuento` decimal(22,2) DEFAULT NULL,
  `fecIniDescuento` date DEFAULT NULL,
  `fecFinDescuento` date DEFAULT NULL,
  `edoDescuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direncargo`
--

CREATE TABLE `direncargo` (
  `idDirEncargo` int(11) NOT NULL,
  `codDirEncargo` varchar(4) DEFAULT NULL,
  `nomDirEncargo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direncargo`
--

INSERT INTO `direncargo` (`idDirEncargo`, `codDirEncargo`, `nomDirEncargo`) VALUES
(1, '4321', 'Dir Encargo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `idDistrito` int(11) NOT NULL,
  `idProvincia` int(11) DEFAULT NULL,
  `nomDistrito` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`idDistrito`, `idProvincia`, `nomDistrito`) VALUES
(1, 1, 'Distrito 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edocivil`
--

CREATE TABLE `edocivil` (
  `idEdoCivil` int(11) NOT NULL,
  `nomEdoCivil` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edocivil`
--

INSERT INTO `edocivil` (`idEdoCivil`, `nomEdoCivil`) VALUES
(1, 'Soltero por conveniencia actualizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edoregistro`
--

CREATE TABLE `edoregistro` (
  `idEdoRegistro` int(11) NOT NULL,
  `nomEdoRegistro` varchar(64) DEFAULT NULL,
  `descEdoRegistro` varchar(128) DEFAULT NULL,
  `grupoEdoRegistro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edoregistro`
--

INSERT INTO `edoregistro` (`idEdoRegistro`, `nomEdoRegistro`, `descEdoRegistro`, `grupoEdoRegistro`) VALUES
(1, 'Activo', 'Activo', NULL),
(2, 'Inactivo', 'Inactivo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `idSituacion` int(11) DEFAULT NULL,
  `idTipRegistro` int(11) DEFAULT NULL,
  `idSegSalud` int(11) DEFAULT NULL,
  `idTipoPlanilla` int(11) DEFAULT NULL,
  `idCodFiscal` int(11) DEFAULT NULL,
  `idAfp` int(11) DEFAULT NULL,
  `idCodRegional` int(11) DEFAULT NULL,
  `idUniEjecutora` int(11) DEFAULT NULL,
  `idNEC` int(11) DEFAULT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `idEstablecimiento` int(11) DEFAULT NULL,
  `idRegLaboral` int(11) DEFAULT NULL,
  `idTipServidor` int(11) DEFAULT NULL,
  `idNumMagist` int(11) DEFAULT NULL,
  `idGpoRemunerativo` int(11) DEFAULT NULL,
  `idhatEmb` int(11) DEFAULT NULL,
  `idCargoOrigen` int(11) DEFAULT NULL,
  `idNivelOrigen` int(11) DEFAULT NULL,
  `idPalMagist` int(11) DEFAULT NULL,
  `idDirEncargo` int(11) DEFAULT NULL,
  `codModular` varchar(16) DEFAULT NULL,
  `fecIngAdmPubEmpleado` date DEFAULT NULL,
  `fecIngMedEmpleado` date DEFAULT NULL,
  `fecCeseEmpleado` date DEFAULT NULL,
  `infCompEmpleado` varchar(128) DEFAULT NULL,
  `fecHabEmpleado` date DEFAULT NULL,
  `fecDesEmpleado` date DEFAULT NULL,
  `fecFallEmpleado` date DEFAULT NULL,
  `valPorEmpleado` int(11) DEFAULT NULL,
  `fecValEmpleado` date DEFAULT NULL,
  `docRefEmpleado` varchar(128) DEFAULT NULL,
  `numSegSaludEmpleado` varchar(128) DEFAULT NULL,
  `eVidaEmpleado` varchar(8) DEFAULT NULL,
  `CUSPPEmpleado` varchar(128) DEFAULT NULL,
  `fecAfiPenEmpleado` date DEFAULT NULL,
  `fecDevPenEmpleado` date DEFAULT NULL,
  `plazaEmpleado` varchar(128) DEFAULT NULL,
  `tipPlazaEmpleado` varchar(128) DEFAULT NULL,
  `asigInserEmpleado` int(11) DEFAULT NULL,
  `diasTrabEmpleado` int(11) DEFAULT NULL,
  `numDepEmpleado` int(11) DEFAULT NULL,
  `numDecEmpleado` int(11) DEFAULT NULL,
  `licDiasEmpleado` int(11) DEFAULT NULL,
  `tipServEmpleado` int(11) DEFAULT NULL,
  `fecIniLicEmpleado` date DEFAULT NULL,
  `insasitEmpleado` varchar(16) DEFAULT NULL,
  `permisosEmpleado` varchar(16) DEFAULT NULL,
  `huelgasEmpleado` int(11) DEFAULT NULL,
  `leyMenEmpleado` varchar(64) DEFAULT NULL,
  `leyPerEmpleado` varchar(64) DEFAULT NULL,
  `cadPresupEmpleado` varchar(128) DEFAULT NULL,
  `ctaEmpleado` varchar(64) DEFAULT NULL,
  `preG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `idPersona`, `idSituacion`, `idTipRegistro`, `idSegSalud`, `idTipoPlanilla`, `idCodFiscal`, `idAfp`, `idCodRegional`, `idUniEjecutora`, `idNEC`, `idNivel`, `idEstablecimiento`, `idRegLaboral`, `idTipServidor`, `idNumMagist`, `idGpoRemunerativo`, `idhatEmb`, `idCargoOrigen`, `idNivelOrigen`, `idPalMagist`, `idDirEncargo`, `codModular`, `fecIngAdmPubEmpleado`, `fecIngMedEmpleado`, `fecCeseEmpleado`, `infCompEmpleado`, `fecHabEmpleado`, `fecDesEmpleado`, `fecFallEmpleado`, `valPorEmpleado`, `fecValEmpleado`, `docRefEmpleado`, `numSegSaludEmpleado`, `eVidaEmpleado`, `CUSPPEmpleado`, `fecAfiPenEmpleado`, `fecDevPenEmpleado`, `plazaEmpleado`, `tipPlazaEmpleado`, `asigInserEmpleado`, `diasTrabEmpleado`, `numDepEmpleado`, `numDecEmpleado`, `licDiasEmpleado`, `tipServEmpleado`, `fecIniLicEmpleado`, `insasitEmpleado`, `permisosEmpleado`, `huelgasEmpleado`, `leyMenEmpleado`, `leyPerEmpleado`, `cadPresupEmpleado`, `ctaEmpleado`, `preG`) VALUES
(1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(8, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', '2021-10-31', '2021-10-31', '2021-10-29', '1', '2021-10-09', '2021-10-15', '2021-10-27', NULL, '2021-11-02', 'mll?', '?l,', 'l?,', 'l?,', '2021-10-28', '2021-11-04', '?l,?l', 'l,?l', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-28', 'mn,mn,', ',mnm,n', NULL, ',mn,mn', ',mn,mn', ',mn,mn', ',mn,m', 1),
(9, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', '2021-10-31', '2021-10-31', '2021-10-29', '1', '2021-10-09', '2021-10-15', '2021-10-27', NULL, '2021-11-02', 'mll?', '?l,', 'l?,', 'l?,', '2021-10-28', '2021-11-04', '?l,?l', 'l,?l', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-28', 'mn,mn,', ',mnm,n', NULL, ',mn,mn', ',mn,mn', ',mn,mn', ',mn,m', 1),
(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', '2021-10-29', '2021-10-01', '2021-10-01', '1', '2021-10-01', '2021-10-01', '2021-10-07', 4, '2021-10-01', 'mll?', '?l,', 'l?,', 'l?,', '2021-10-21', '2021-10-20', '?l,?l', 'l,?l', 4, 1, 1, 1, 2, 1, '2021-10-06', 'mn,mn,', ',mnm,n', 4, ',mn,mn', ',mn,mn', ',mn,mn', ',mn,m', 1),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `idEstablecimiento` int(11) NOT NULL,
  `codEstablecimiento` varchar(4) DEFAULT NULL,
  `nomEstablecimiento` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`idEstablecimiento`, `codEstablecimiento`, `nomEstablecimiento`) VALUES
(1, '1111', 'estable001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nomGenero` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `nomGenero`) VALUES
(1, 'Masculino act'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gporemunerativo`
--

CREATE TABLE `gporemunerativo` (
  `idGpoRemunerativo` int(11) NOT NULL,
  `codGpoRemunerativo` varchar(4) DEFAULT NULL,
  `nomGpoRemunerativo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gporemunerativo`
--

INSERT INTO `gporemunerativo` (`idGpoRemunerativo`, `codGpoRemunerativo`, `nomGpoRemunerativo`) VALUES
(1, '001', 'Remunerativo 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hatemb`
--

CREATE TABLE `hatemb` (
  `idhatEmb` int(11) NOT NULL,
  `codhatEmb` varchar(8) DEFAULT NULL,
  `nomhatEmb` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hatemb`
--

INSERT INTO `hatemb` (`idhatEmb`, `codhatEmb`, `nomhatEmb`) VALUES
(1, '1234', 'Hat Emb act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idIdioma` int(11) NOT NULL,
  `nomIdioma` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idIdioma`, `nomIdioma`) VALUES
(1, 'Espa?ol act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `idlog` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `fechalog` date NOT NULL,
  `iplog` varchar(16) NOT NULL,
  `accionlog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modopago`
--

CREATE TABLE `modopago` (
  `idModoPago` int(11) NOT NULL,
  `codModoPago` varchar(8) DEFAULT NULL,
  `nomModoPago` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modopago`
--

INSERT INTO `modopago` (`idModoPago`, `codModoPago`, `nomModoPago`) VALUES
(1, '1234', 'Efectivo act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nec`
--

CREATE TABLE `nec` (
  `idNEC` int(11) NOT NULL,
  `codNEC` varchar(4) DEFAULT NULL,
  `nomNEC` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nec`
--

INSERT INTO `nec` (`idNEC`, `codNEC`, `nomNEC`) VALUES
(1, '1234', 'Nec 1 Act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `idNivel` int(11) NOT NULL,
  `codNivel` varchar(4) DEFAULT NULL,
  `nomNivel` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`idNivel`, `codNivel`, `nomNivel`) VALUES
(1, '1234', 'Nivel 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelorigen`
--

CREATE TABLE `nivelorigen` (
  `idNivelOrigen` int(11) NOT NULL,
  `codNivelOrigen` varchar(4) DEFAULT NULL,
  `nomNivelOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivelorigen`
--

INSERT INTO `nivelorigen` (`idNivelOrigen`, `codNivelOrigen`, `nomNivelOrigen`) VALUES
(1, '1999', 'Nivel Origen 1 Act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nummagist`
--

CREATE TABLE `nummagist` (
  `idNumMagist` int(11) NOT NULL,
  `codNumMagist` varchar(4) DEFAULT NULL,
  `nomNumMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nummagist`
--

INSERT INTO `nummagist` (`idNumMagist`, `codNumMagist`, `nomNumMagist`) VALUES
(1, '1234', 'N?mero Magisterio 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nomPais` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nomPais`) VALUES
(1, 'Per? act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palmagist`
--

CREATE TABLE `palmagist` (
  `idPalMagist` int(11) NOT NULL,
  `codPalMagist` varchar(4) DEFAULT NULL,
  `nomPalMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `palmagist`
--

INSERT INTO `palmagist` (`idPalMagist`, `codPalMagist`, `nomPalMagist`) VALUES
(1, '2332', 'PalMAgist');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `idParentesco` int(11) NOT NULL,
  `codParentesco` varchar(8) DEFAULT NULL,
  `nomParentesco` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`idParentesco`, `codParentesco`, `nomParentesco`) VALUES
(1, '1234', 'Parentesco 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `idEdoCivil` int(11) DEFAULT NULL,
  `idIdioma` int(11) DEFAULT NULL,
  `idDistritoNac` int(11) DEFAULT NULL,
  `idDistritoDir` int(11) DEFAULT NULL,
  `idTipoDoc` int(11) DEFAULT NULL,
  `idZona` int(11) DEFAULT NULL,
  `idVia` int(11) DEFAULT NULL,
  `dniPersona` varchar(16) DEFAULT NULL,
  `nom1Persona` varchar(32) DEFAULT NULL,
  `nom2Persona` varchar(32) DEFAULT NULL,
  `ape1Persona` varchar(32) DEFAULT NULL,
  `ape2Persona` varchar(32) DEFAULT NULL,
  `numDepPersona` int(11) DEFAULT NULL,
  `fecNacPersona` date DEFAULT NULL,
  `zonaDomPersona` varchar(128) DEFAULT NULL,
  `desViaDomPersona` varchar(128) DEFAULT NULL,
  `numViaDomPersona` varchar(32) DEFAULT NULL,
  `intDomPersona` varchar(32) DEFAULT NULL,
  `tel1DomPersona` varchar(16) DEFAULT NULL,
  `tel2DomPersona` varchar(16) DEFAULT NULL,
  `refDomPersona` varchar(128) DEFAULT NULL,
  `emaDomPersona` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `idGenero`, `idEdoCivil`, `idIdioma`, `idDistritoNac`, `idDistritoDir`, `idTipoDoc`, `idZona`, `idVia`, `dniPersona`, `nom1Persona`, `nom2Persona`, `ape1Persona`, `ape2Persona`, `numDepPersona`, `fecNacPersona`, `zonaDomPersona`, `desViaDomPersona`, `numViaDomPersona`, `intDomPersona`, `tel1DomPersona`, `tel2DomPersona`, `refDomPersona`, `emaDomPersona`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, '47732123', 'jose', 'samuel', 'pardo', 'diaz', 5, '1998-10-11', 'xxxx', 'xxx', 'xxx', '12', '9912312321', '123112', 'xxxxx', 'pardo@gmail.com'),
(2, 1, 1, 1, 1, 1, 1, 1, 1, '66666666', 'martin', 'juan', 'peredo', 'martinez', 1111, '2021-10-27', 'xxx', '1111', '12', 'xx', '99999', '999999', 'xxxx', 'pvillegasj@crece.uss.edu.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idProvincia` int(11) NOT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  `nomProvincia` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idProvincia`, `idDepartamento`, `nomProvincia`) VALUES
(1, 1, 'Provincia 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regioncargo`
--

CREATE TABLE `regioncargo` (
  `idRegionCargo` int(11) NOT NULL,
  `codRegionCargo` varchar(16) DEFAULT NULL,
  `nomRegionCargo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regioncargo`
--

INSERT INTO `regioncargo` (`idRegionCargo`, `codRegionCargo`, `nomRegionCargo`) VALUES
(1, '1234', 'Regi?n cargo 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reglaboral`
--

CREATE TABLE `reglaboral` (
  `idRegLaboral` int(11) NOT NULL,
  `codRegLaboral` varchar(4) DEFAULT NULL,
  `nomRegLaboral` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reglaboral`
--

INSERT INTO `reglaboral` (`idRegLaboral`, `codRegLaboral`, `nomRegLaboral`) VALUES
(1, '1234', 'R?gimen laboral 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(64) DEFAULT NULL,
  `descRol` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`, `descRol`) VALUES
(1, 'Administrador', 'Administrador act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segsalud`
--

CREATE TABLE `segsalud` (
  `idSegSalud` int(11) NOT NULL,
  `nomSegSalud` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `segsalud`
--

INSERT INTO `segsalud` (`idSegSalud`, `nomSegSalud`) VALUES
(1, 'Seguro Salud 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion`
--

CREATE TABLE `situacion` (
  `idSituacion` int(11) NOT NULL,
  `codSituacion` varchar(4) DEFAULT NULL,
  `nomSituacion` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `situacion`
--

INSERT INTO `situacion` (`idSituacion`, `codSituacion`, `nomSituacion`) VALUES
(1, '1234', 'Situaci?n 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocalcjud`
--

CREATE TABLE `tipocalcjud` (
  `idTipoCalcJud` int(11) NOT NULL,
  `codTipoCalcJud` varchar(8) DEFAULT NULL,
  `nomTipoCalcJud` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Calculo Judicial';

--
-- Volcado de datos para la tabla `tipocalcjud`
--

INSERT INTO `tipocalcjud` (`idTipoCalcJud`, `codTipoCalcJud`, `nomTipoCalcJud`) VALUES
(1, '1234', 'Tipo C?lculo Judicial 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `idTipoDoc` int(11) NOT NULL,
  `nomTipoDoc` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Documento (DNI)';

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`idTipoDoc`, `nomTipoDoc`) VALUES
(1, 'DNI act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoplanilla`
--

CREATE TABLE `tipoplanilla` (
  `idTipoPlanilla` int(11) NOT NULL,
  `nomTipoPlanilla` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoplanilla`
--

INSERT INTO `tipoplanilla` (`idTipoPlanilla`, `nomTipoPlanilla`) VALUES
(1, 'Tipo Planilla 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipregistro`
--

CREATE TABLE `tipregistro` (
  `idTipRegistro` int(11) NOT NULL,
  `nomTipRegistro` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipregistro`
--

INSERT INTO `tipregistro` (`idTipRegistro`, `nomTipRegistro`) VALUES
(1, 'Tipo registro 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipservidor`
--

CREATE TABLE `tipservidor` (
  `idTipServidor` int(11) NOT NULL,
  `codTipServidor` varchar(4) DEFAULT NULL,
  `nomTipServidor` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipservidor`
--

INSERT INTO `tipservidor` (`idTipServidor`, `codTipServidor`, `nomTipServidor`) VALUES
(1, '0292', 'nomTip Servidor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubigeo`
--

CREATE TABLE `ubigeo` (
  `id_ubigeo` int(11) NOT NULL,
  `cod_ubigeo` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dto_ubigeo` varchar(64) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `prov_ubigeo` varchar(64) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dpto_ubigeo` varchar(64) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pob_ubigeo` float DEFAULT NULL,
  `sup_ubigeo` float DEFAULT NULL,
  `x_ubigeo` float DEFAULT NULL,
  `y_ubigeo` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ubigeo`
--

INSERT INTO `ubigeo` (`id_ubigeo`, `cod_ubigeo`, `dto_ubigeo`, `prov_ubigeo`, `dpto_ubigeo`, `pob_ubigeo`, `sup_ubigeo`, `x_ubigeo`, `y_ubigeo`) VALUES
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(1, '010101', 'Chachapoyas', 'Chachapoyas', 'Amazonas', 29171, 153.78, -6.2294, -77.8714),
(2, '010102', 'Asuncion', 'Chachapoyas', 'Amazonas', 288, 25.71, -6.0317, -77.7122),
(3, '010103', 'Balsas', 'Chachapoyas', 'Amazonas', 1644, 357.09, -6.8375, -78.0214),
(4, '010104', 'Cheto', 'Chachapoyas', 'Amazonas', 591, 56.97, -6.2558, -77.7003),
(5, '010105', 'Chiliquin', 'Chachapoyas', 'Amazonas', 687, 143.43, -6.0778, -77.7392),
(6, '010106', 'Chuquibamba', 'Chachapoyas', 'Amazonas', 2064, 278.63, -6.9333, -77.8575),
(7, '010107', 'Granada', 'Chachapoyas', 'Amazonas', 379, 181.41, -6.0997, -77.6344),
(8, '010108', 'Huancas', 'Chachapoyas', 'Amazonas', 1329, 48.79, -6.1747, -77.8686),
(9, '010109', 'La Jalca', 'Chachapoyas', 'Amazonas', 5513, 380.39, -6.4825, -77.8192),
(10, '010110', 'Leimebamba', 'Chachapoyas', 'Amazonas', 4206, 373.14, -6.6636, -77.8006),
(11, '010111', 'Levanto', 'Chachapoyas', 'Amazonas', 862, 77.54, -6.3086, -77.8994),
(12, '010112', 'Magdalena', 'Chachapoyas', 'Amazonas', 782, 135.47, -6.3736, -77.9017),
(13, '010113', 'Mariscal Castilla', 'Chachapoyas', 'Amazonas', 986, 83.58, -6.5939, -77.8053),
(14, '010114', 'Molinopampa', 'Chachapoyas', 'Amazonas', 2750, 333.86, -6.2056, -77.6683),
(15, '010115', 'Montevideo', 'Chachapoyas', 'Amazonas', 572, 119.01, -6.6133, -77.8025),
(16, '010116', 'Olleros', 'Chachapoyas', 'Amazonas', 363, 125.16, -6.0239, -77.6761),
(17, '010117', 'Quinjalca', 'Chachapoyas', 'Amazonas', 830, 91.59, -6.085, -77.66),
(18, '010118', 'San Francisco de Daguas', 'Chachapoyas', 'Amazonas', 351, 47.41, -6.2333, -77.7392),
(19, '010119', 'San Isidro de Maino', 'Chachapoyas', 'Amazonas', 703, 101.67, -6.3533, -77.8439),
(20, '010120', 'Soloco', 'Chachapoyas', 'Amazonas', 1302, 84.48, -6.2619, -77.7453),
(21, '010121', 'Sonche', 'Chachapoyas', 'Amazonas', 218, 113.26, -6.2183, -77.7753),
(22, '010201', 'Bagua', 'Bagua', 'Amazonas', 26091, 150.99, -5.6389, -78.5319),
(23, '010202', 'Aramango', 'Bagua', 'Amazonas', 10940, 809.07, -5.4156, -78.4361),
(24, '010203', 'Copallin', 'Bagua', 'Amazonas', 6319, 99.05, -5.6733, -78.4228),
(25, '010204', 'El Parco', 'Bagua', 'Amazonas', 1492, 18.48, -5.6247, -78.4764),
(26, '010205', 'Imaza', 'Bagua', 'Amazonas', 24323, 4430.84, -5.16, -78.2903),
(27, '010206', 'La Peca', 'Bagua', 'Amazonas', 8048, 144.29, -5.6092, -78.4344),
(28, '010301', 'Jumbilla', 'Bongara', 'Amazonas', 1764, 154.18, -5.9006, -77.7958),
(29, '010302', 'Chisquilla', 'Bongara', 'Amazonas', 335, 174.96, -5.9003, -77.7839),
(30, '010303', 'Churuja', 'Bongara', 'Amazonas', 269, 33.34, -6.0192, -77.9517),
(31, '010304', 'Corosha', 'Bongara', 'Amazonas', 1046, 45.67, -5.8294, -77.84),
(32, '010305', 'Cuispes', 'Bongara', 'Amazonas', 899, 110.72, -5.9236, -77.9392),
(33, '010306', 'Florida', 'Bongara', 'Amazonas', 8663, 203.22, -5.8336, -77.9714),
(34, '010307', 'Jazan', 'Bongara', 'Amazonas', 9349, 88.83, -5.9419, -77.9806),
(35, '010308', 'Recta', 'Bongara', 'Amazonas', 201, 24.58, -5.9194, -77.7861),
(36, '010309', 'San Carlos', 'Bongara', 'Amazonas', 310, 100.76, -5.9636, -77.9447),
(37, '010310', 'Shipasbamba', 'Bongara', 'Amazonas', 1819, 127.29, -5.8744, -78.0692),
(38, '010311', 'Valera', 'Bongara', 'Amazonas', 1281, 90.14, -6.0425, -77.9139),
(39, '010312', 'Yambrasbamba', 'Bongara', 'Amazonas', 8470, 1715.96, -5.6908, -77.9772),
(40, '010401', 'Nieva', 'Condorcanqui', 'Amazonas', 29213, 4481.63, -4.5947, -77.8672),
(41, '010402', 'El Cenepa', 'Condorcanqui', 'Amazonas', 9620, 5458.48, -4.4503, -78.1592),
(42, '010403', 'Rio Santiago', 'Condorcanqui', 'Amazonas', 16986, 8035.28, -4.0106, -77.7658),
(43, '010501', 'Lamud', 'Luya', 'Amazonas', 2292, 69.49, -6.1308, -77.9503),
(44, '010502', 'Camporredondo', 'Luya', 'Amazonas', 7131, 376.01, -6.2136, -78.3186),
(45, '010503', 'Cocabamba', 'Luya', 'Amazonas', 2517, 355.85, -6.6297, -78.0303),
(46, '010504', 'Colcamar', 'Luya', 'Amazonas', 2263, 106.6, -6.3175, -78.0019),
(47, '010505', 'Conila', 'Luya', 'Amazonas', 2083, 256.17, -6.1592, -78.1419),
(48, '010506', 'Inguilpata', 'Luya', 'Amazonas', 587, 118.04, -6.2428, -77.9561),
(49, '010507', 'Longuita', 'Luya', 'Amazonas', 1161, 57.91, -6.4147, -77.9681),
(50, '010508', 'Lonya Chico', 'Luya', 'Amazonas', 961, 83.82, -6.2328, -77.9564),
(51, '010509', 'Luya', 'Luya', 'Amazonas', 4420, 91.21, -6.165, -77.9469),
(52, '010510', 'Luya Viejo', 'Luya', 'Amazonas', 489, 73.87, -6.1275, -78.0847),
(53, '010511', 'Maria', 'Luya', 'Amazonas', 945, 80.27, -6.4517, -77.9733),
(54, '010512', 'Ocalli', 'Luya', 'Amazonas', 4259, 177.39, -6.2347, -78.2667),
(55, '010513', 'Ocumal', 'Luya', 'Amazonas', 4194, 235.86, -6.3061, -78.2294),
(56, '010514', 'Pisuquia', 'Luya', 'Amazonas', 6132, 306.5, -6.5114, -78.0747),
(57, '010515', 'Providencia', 'Luya', 'Amazonas', 1536, 71.22, -6.3108, -78.2503),
(58, '010516', 'San Cristobal', 'Luya', 'Amazonas', 685, 33.36, -6.0997, -77.9525),
(59, '010517', 'San Francisco del Yeso', 'Luya', 'Amazonas', 821, 113.94, -6.5861, -77.8469),
(60, '010518', 'San Jeronimo', 'Luya', 'Amazonas', 880, 214.66, -6.0344, -77.9669),
(61, '010519', 'San Juan de Lopecancha', 'Luya', 'Amazonas', 506, 88.02, -6.4572, -77.8969),
(62, '010520', 'Santa Catalina', 'Luya', 'Amazonas', 1908, 126.21, -6.1117, -78.0633),
(63, '010521', 'Santo Tomas', 'Luya', 'Amazonas', 3537, 84.93, -6.5617, -77.8739),
(64, '010522', 'Tingo', 'Luya', 'Amazonas', 1363, 102.67, -6.3761, -77.9056),
(65, '010523', 'Trita', 'Luya', 'Amazonas', 1378, 12.68, -6.1519, -77.9806),
(66, '010601', 'San Nicolas', 'Rodriguez de Mendoza', 'Amazonas', 5290, 206.01, -6.3956, -77.4831),
(67, '010602', 'Chirimoto', 'Rodriguez de Mendoza', 'Amazonas', 2079, 153, -6.5283, -77.4869),
(68, '010603', 'Cochamal', 'Rodriguez de Mendoza', 'Amazonas', 504, 199.44, -6.3933, -77.5889),
(69, '010604', 'Huambo', 'Rodriguez de Mendoza', 'Amazonas', 2542, 99.56, -6.4275, -77.5369),
(70, '010605', 'Limabamba', 'Rodriguez de Mendoza', 'Amazonas', 3049, 317.88, -6.5025, -77.5097),
(71, '010606', 'Longar', 'Rodriguez de Mendoza', 'Amazonas', 1619, 66.24, -6.3853, -77.5461),
(72, '010607', 'Mariscal Benavides', 'Rodriguez de Mendoza', 'Amazonas', 1376, 176.18, -6.3697, -77.5003),
(73, '010608', 'Milpuc', 'Rodriguez de Mendoza', 'Amazonas', 599, 26.8, -6.4983, -77.4358),
(74, '010609', 'Omia', 'Rodriguez de Mendoza', 'Amazonas', 9787, 175.13, -6.4686, -77.3947),
(75, '010610', 'Santa Rosa', 'Rodriguez de Mendoza', 'Amazonas', 457, 34.11, -6.4542, -77.4539),
(76, '010611', 'Totora', 'Rodriguez de Mendoza', 'Amazonas', 448, 6.02, -6.4914, -77.4711),
(77, '010612', 'Vista Alegre', 'Rodriguez de Mendoza', 'Amazonas', 3803, 899.02, -6.1514, -77.3019),
(78, '010701', 'Bagua Grande', 'Utcubamba', 'Amazonas', 54033, 746.64, -5.7558, -78.4428),
(79, '010702', 'Cajaruro', 'Utcubamba', 'Amazonas', 28491, 1746.23, -5.7364, -78.4267),
(80, '010703', 'Cumba', 'Utcubamba', 'Amazonas', 8752, 292.66, -5.9317, -78.6653),
(81, '010704', 'El Milagro', 'Utcubamba', 'Amazonas', 6399, 313.89, -5.6367, -78.5578),
(82, '010705', 'Jamalca', 'Utcubamba', 'Amazonas', 8243, 357.98, -5.9158, -78.2203),
(83, '010706', 'Lonya Grande', 'Utcubamba', 'Amazonas', 10443, 327.92, -6.0956, -78.4219),
(84, '010707', 'Yamon', 'Utcubamba', 'Amazonas', 2841, 57.61, -6.0525, -78.5322),
(85, '020101', 'Huaraz', 'Huaraz', 'Ancash', 65663, 432.99, -9.5272, -77.5333),
(86, '020102', 'Cochabamba', 'Huaraz', 'Ancash', 1983, 135.65, -9.4939, -77.8619),
(87, '020103', 'Colcabamba', 'Huaraz', 'Ancash', 826, 50.65, -9.5956, -77.8108),
(88, '020104', 'Huanchay', 'Huaraz', 'Ancash', 2235, 209.34, -9.7236, -77.8197),
(89, '020105', 'Independencia', 'Huaraz', 'Ancash', 75559, 342.95, -9.5189, -77.5344),
(90, '020106', 'Jangas', 'Huaraz', 'Ancash', 5106, 59.84, -9.4014, -77.5767),
(91, '020107', 'La Libertad', 'Huaraz', 'Ancash', 1138, 164.26, -9.6333, -77.7442),
(92, '020108', 'Olleros', 'Huaraz', 'Ancash', 2148, 222.91, -9.6664, -77.4661),
(93, '020109', 'Pampas', 'Huaraz', 'Ancash', 1165, 357.81, -9.6556, -77.8272),
(94, '020110', 'Pariacoto', 'Huaraz', 'Ancash', 4794, 162.5, -9.5622, -77.8931),
(95, '020111', 'Pira', 'Huaraz', 'Ancash', 3755, 243.73, -9.5814, -77.7075),
(96, '020112', 'Tarica', 'Huaraz', 'Ancash', 5936, 110.28, -9.3919, -77.5769),
(97, '020201', 'Aija', 'Aija', 'Ancash', 1841, 159.74, -9.7819, -77.6114),
(98, '020202', 'Coris', 'Aija', 'Ancash', 2270, 267.15, -9.8211, -77.7225),
(99, '020203', 'Huacllan', 'Aija', 'Ancash', 628, 37.91, -9.7975, -77.6747),
(100, '020204', 'La Merced', 'Aija', 'Ancash', 2190, 153.08, -9.7361, -77.6189),
(101, '020205', 'Succha', 'Aija', 'Ancash', 828, 78.84, -9.8242, -77.6497),
(102, '020301', 'Llamellin', 'Antonio Raymondi', 'Ancash', 3552, 90.82, -9.1006, -77.0183),
(103, '020302', 'Aczo', 'Antonio Raymondi', 'Ancash', 2130, 69.03, -9.1525, -76.9903),
(104, '020303', 'Chaccho', 'Antonio Raymondi', 'Ancash', 1670, 73.99, -9.0586, -77.0594),
(105, '020304', 'Chingas', 'Antonio Raymondi', 'Ancash', 1909, 48.95, -9.12, -76.9947),
(106, '020305', 'Mirgas', 'Antonio Raymondi', 'Ancash', 5370, 175.69, -9.0792, -77.0933),
(107, '020306', 'San Juan de Rontoy', 'Antonio Raymondi', 'Ancash', 1648, 103.13, -9.1803, -77.0044),
(108, '020401', 'Chacas', 'Asuncion', 'Ancash', 5619, 447.69, -9.1622, -77.3694),
(109, '020402', 'Acochaca', 'Asuncion', 'Ancash', 3130, 80.97, -9.1139, -77.3697),
(110, '020501', 'Chiquian', 'Bolognesi', 'Ancash', 3587, 184.16, -10.1517, -77.1586),
(111, '020502', 'Abelardo Pardo Lezameta', 'Bolognesi', 'Ancash', 1263, 11.31, -10.2992, -77.1508),
(112, '020503', 'Antonio Raymondi', 'Bolognesi', 'Ancash', 1065, 118.7, -10.1575, -77.4703),
(113, '020504', 'Aquia', 'Bolognesi', 'Ancash', 2465, 434.6, -10.0742, -77.1464),
(114, '020505', 'Cajacay', 'Bolognesi', 'Ancash', 1603, 193.06, -10.1564, -77.4419),
(115, '020506', 'Canis', 'Bolognesi', 'Ancash', 1308, 19.45, -10.3381, -77.1711),
(116, '020507', 'Colquioc', 'Bolognesi', 'Ancash', 4165, 274.61, -10.3117, -77.6156),
(117, '020508', 'Huallanca', 'Bolognesi', 'Ancash', 8325, 873.39, -9.8994, -76.9444),
(118, '020509', 'Huasta', 'Bolognesi', 'Ancash', 2610, 387.91, -10.1225, -77.1458),
(119, '020510', 'Huayllacayan', 'Bolognesi', 'Ancash', 1076, 127.99, -10.2436, -77.4342),
(120, '020511', 'La Primavera', 'Bolognesi', 'Ancash', 951, 68.61, -10.3344, -77.1253),
(121, '020512', 'Mangas', 'Bolognesi', 'Ancash', 566, 115.84, -10.3694, -77.1039),
(122, '020513', 'Pacllon', 'Bolognesi', 'Ancash', 1771, 211.98, -10.2333, -77.0722),
(123, '020514', 'San Miguel de Corpanqui', 'Bolognesi', 'Ancash', 1298, 43.78, -10.285, -77.2),
(124, '020515', 'Ticllos', 'Bolognesi', 'Ancash', 1291, 89.41, -10.2522, -77.1911),
(125, '020601', 'Carhuaz', 'Carhuaz', 'Ancash', 15712, 194.62, -9.2806, -77.6469),
(126, '020602', 'Acopampa', 'Carhuaz', 'Ancash', 2685, 14.17, -9.2942, -77.6225),
(127, '020603', 'Amashca', 'Carhuaz', 'Ancash', 1571, 11.99, -9.2392, -77.6464),
(128, '020604', 'Anta', 'Carhuaz', 'Ancash', 2510, 40.77, -9.3569, -77.5978),
(129, '020605', 'Ataquero', 'Carhuaz', 'Ancash', 1353, 47.22, -9.2625, -77.6914),
(130, '020606', 'Marcara', 'Carhuaz', 'Ancash', 9452, 157.49, -9.3211, -77.6033),
(131, '020607', 'Pariahuanca', 'Carhuaz', 'Ancash', 1630, 11.74, -9.3642, -77.5828),
(132, '020608', 'San Miguel de Aco', 'Carhuaz', 'Ancash', 2794, 133.89, -9.3678, -77.5644),
(133, '020609', 'Shilla', 'Carhuaz', 'Ancash', 3318, 130.19, -9.2306, -77.6256),
(134, '020610', 'Tinco', 'Carhuaz', 'Ancash', 3301, 15.44, -9.2711, -77.6819),
(135, '020611', 'Yungar', 'Carhuaz', 'Ancash', 3462, 46.43, -9.3778, -77.5931),
(136, '020701', 'San Luis', 'Carlos Fermin Fitzca', 'Ancash', 12689, 256.45, -9.0933, -77.3331),
(137, '020702', 'San Nicolas', 'Carlos Fermin Fitzca', 'Ancash', 3690, 197.39, -8.9767, -77.1842),
(138, '020703', 'Yauya', 'Carlos Fermin Fitzca', 'Ancash', 5591, 170.41, -8.9875, -77.2894),
(139, '020801', 'Casma', 'Casma', 'Ancash', 33648, 1204.85, -9.475, -78.3036),
(140, '020802', 'Buena Vista Alta', 'Casma', 'Ancash', 4250, 476.62, -9.4289, -78.2047),
(141, '020803', 'Comandante Noel', 'Casma', 'Ancash', 2044, 222.36, -9.4622, -78.3831),
(142, '020804', 'Yautan', 'Casma', 'Ancash', 8531, 357.2, -9.5097, -77.9956),
(143, '020901', 'Corongo', 'Corongo', 'Ancash', 1420, 143.13, -8.5683, -77.8967),
(144, '020902', 'Aco', 'Corongo', 'Ancash', 442, 56.54, -8.5228, -77.8769),
(145, '020903', 'Bambas', 'Corongo', 'Ancash', 546, 151.13, -8.6022, -77.9925),
(146, '020904', 'Cusca', 'Corongo', 'Ancash', 2985, 411.55, -8.5106, -77.8631),
(147, '020905', 'La Pampa', 'Corongo', 'Ancash', 1004, 93.94, -8.6619, -77.9011),
(148, '020906', 'Yanac', 'Corongo', 'Ancash', 704, 45.85, -8.6178, -77.8636),
(149, '020907', 'Yupan', 'Corongo', 'Ancash', 1041, 85.87, -8.615, -77.9661),
(150, '021001', 'Huari', 'Huari', 'Ancash', 10423, 398.91, -9.3478, -77.1725),
(151, '021002', 'Anra', 'Huari', 'Ancash', 1581, 80.31, -9.2347, -76.9253),
(152, '021003', 'Cajay', 'Huari', 'Ancash', 2552, 159.35, -9.3253, -77.1569),
(153, '021004', 'Chavin de Huantar', 'Huari', 'Ancash', 9251, 434.13, -9.5869, -77.1772),
(154, '021005', 'Huacachi', 'Huari', 'Ancash', 1826, 86.7, -9.3164, -76.9356),
(155, '021006', 'Huacchis', 'Huari', 'Ancash', 2079, 72.16, -9.2, -76.7875),
(156, '021007', 'Huachis', 'Huari', 'Ancash', 3466, 153.89, -9.4097, -77.1003),
(157, '021008', 'Huantar', 'Huari', 'Ancash', 3058, 156.15, -9.4517, -77.175),
(158, '021009', 'Masin', 'Huari', 'Ancash', 1652, 75.33, -9.3653, -77.0958),
(159, '021010', 'Paucas', 'Huari', 'Ancash', 1827, 135.31, -9.1522, -76.8983),
(160, '021011', 'Ponto', 'Huari', 'Ancash', 3333, 118.29, -9.325, -77.0047),
(161, '021012', 'Rahuapampa', 'Huari', 'Ancash', 814, 9.02, -9.3592, -77.0772),
(162, '021013', 'Rapayan', 'Huari', 'Ancash', 1800, 143.34, -9.2053, -76.7611),
(163, '021014', 'San Marcos', 'Huari', 'Ancash', 15094, 556.75, -9.525, -77.1575),
(164, '021015', 'San Pedro de Chana', 'Huari', 'Ancash', 2850, 138.65, -9.4025, -77.0117),
(165, '021016', 'Uco', 'Huari', 'Ancash', 1668, 53.61, -9.1886, -76.9269),
(166, '021101', 'Huarmey', 'Huarmey', 'Ancash', 24856, 2894.38, -10.0697, -78.1517),
(167, '021102', 'Cochapeti', 'Huarmey', 'Ancash', 747, 100.02, -9.9872, -77.6467),
(168, '021103', 'Culebras', 'Huarmey', 'Ancash', 3758, 630.25, -9.9486, -78.2247),
(169, '021104', 'Huayan', 'Huarmey', 'Ancash', 1064, 58.99, -9.8761, -77.7081),
(170, '021105', 'Malvas', 'Huarmey', 'Ancash', 905, 219.52, -9.9294, -77.6581),
(171, '021201', 'Caraz', 'Huaylas', 'Ancash', 26740, 246.52, -9.0472, -77.8108),
(172, '021202', 'Huallanca', 'Huaylas', 'Ancash', 686, 178.8, -8.8194, -77.8653),
(173, '021203', 'Huata', 'Huaylas', 'Ancash', 1638, 70.69, -9.0167, -77.8625),
(174, '021204', 'Huaylas', 'Huaylas', 'Ancash', 1421, 56.89, -8.8694, -77.8925),
(175, '021205', 'Mato', 'Huaylas', 'Ancash', 2003, 107.12, -8.9617, -77.8456),
(176, '021206', 'Pamparomas', 'Huaylas', 'Ancash', 9268, 496.35, -9.0731, -77.9819),
(177, '021207', 'Pueblo Libre', 'Huaylas', 'Ancash', 7246, 130.99, -9.1117, -77.8025),
(178, '021208', 'Santa Cruz', 'Huaylas', 'Ancash', 5236, 357.7, -8.9486, -77.815),
(179, '021209', 'Santo Toribio', 'Huaylas', 'Ancash', 1056, 82.02, -8.8644, -77.915),
(180, '021210', 'Yuracmarca', 'Huaylas', 'Ancash', 1760, 565.7, -8.7364, -77.9036),
(181, '021301', 'Piscobamba', 'Mariscal Luzuriaga', 'Ancash', 3799, 45.93, -8.8611, -77.3567),
(182, '021302', 'Casca', 'Mariscal Luzuriaga', 'Ancash', 4534, 77.38, -8.8553, -77.3919),
(183, '021303', 'Eleazar Guzman Barron', 'Mariscal Luzuriaga', 'Ancash', 1381, 93.96, -8.8997, -77.2419),
(184, '021304', 'Fidel Olivas Escudero', 'Mariscal Luzuriaga', 'Ancash', 2242, 204.82, -8.8067, -77.2806),
(185, '021305', 'Llama', 'Mariscal Luzuriaga', 'Ancash', 1223, 48.13, -8.9142, -77.2994),
(186, '021306', 'Llumpa', 'Mariscal Luzuriaga', 'Ancash', 6435, 143.27, -8.9467, -77.3669),
(187, '021307', 'Lucma', 'Mariscal Luzuriaga', 'Ancash', 3262, 77.37, -8.9194, -77.4097),
(188, '021308', 'Musga', 'Mariscal Luzuriaga', 'Ancash', 1014, 39.72, -8.9061, -77.3372),
(189, '021401', 'Ocros', 'Ocros', 'Ancash', 1003, 230.55, -10.4058, -77.3958),
(190, '021402', 'Acas', 'Ocros', 'Ancash', 1057, 252.48, -10.4592, -77.3283),
(191, '021403', 'Cajamarquilla', 'Ocros', 'Ancash', 600, 75.52, -10.355, -77.1997),
(192, '021404', 'Carhuapampa', 'Ocros', 'Ancash', 841, 109.78, -10.4969, -77.2428),
(193, '021405', 'Cochas', 'Ocros', 'Ancash', 1486, 408.66, -10.535, -77.4236),
(194, '021406', 'Congas', 'Ocros', 'Ancash', 1223, 130.03, -10.3361, -77.4419),
(195, '021407', 'Llipa', 'Ocros', 'Ancash', 1814, 33.69, -10.3808, -77.2067),
(196, '021408', 'San Cristobal de Rajan', 'Ocros', 'Ancash', 639, 67.75, -10.3858, -77.2192),
(197, '021409', 'San Pedro', 'Ocros', 'Ancash', 2044, 531.21, -10.3706, -77.4875),
(198, '021410', 'Santiago de Chilcas', 'Ocros', 'Ancash', 383, 85.76, -10.4381, -77.3669),
(199, '021501', 'Cabana', 'Pallasca', 'Ancash', 2715, 150.29, -8.3928, -78.0089),
(200, '021502', 'Bolognesi', 'Pallasca', 'Ancash', 1293, 86.88, -8.3517, -78.0506),
(201, '021503', 'Conchucos', 'Pallasca', 'Ancash', 8458, 585.24, -8.2658, -77.8483),
(202, '021504', 'Huacaschuque', 'Pallasca', 'Ancash', 563, 63.59, -8.3061, -78.0031),
(203, '021505', 'Huandoval', 'Pallasca', 'Ancash', 1123, 116, -8.3272, -77.9728),
(204, '021506', 'Lacabamba', 'Pallasca', 'Ancash', 559, 64.68, -8.2583, -77.8958),
(205, '021507', 'Llapo', 'Pallasca', 'Ancash', 732, 28.69, -8.5111, -78.0397),
(206, '021508', 'Pallasca', 'Pallasca', 'Ancash', 2417, 59.77, -8.2494, -77.9972),
(207, '021509', 'Pampas', 'Pallasca', 'Ancash', 8780, 438.18, -8.1925, -77.8931),
(208, '021510', 'Santa Rosa', 'Pallasca', 'Ancash', 1038, 298.77, -8.5239, -78.065),
(209, '021511', 'Tauca', 'Pallasca', 'Ancash', 3170, 209.12, -8.4717, -78.0347),
(210, '021601', 'Pomabamba', 'Pomabamba', 'Ancash', 16631, 347.92, -8.8147, -77.4592),
(211, '021602', 'Huayllan', 'Pomabamba', 'Ancash', 3668, 88.97, -8.8547, -77.4336),
(212, '021603', 'Parobamba', 'Pomabamba', 'Ancash', 7016, 331.1, -8.6886, -77.4294),
(213, '021604', 'Quinuabamba', 'Pomabamba', 'Ancash', 2390, 146.06, -8.6944, -77.3978),
(214, '021701', 'Recuay', 'Recuay', 'Ancash', 4372, 142.96, -9.7214, -77.455),
(215, '021702', 'Catac', 'Recuay', 'Ancash', 4038, 1018.27, -9.8017, -77.4303),
(216, '021703', 'Cotaparaco', 'Recuay', 'Ancash', 648, 172.85, -9.9931, -77.5878),
(217, '021704', 'Huayllapampa', 'Recuay', 'Ancash', 1339, 105.29, -10.055, -77.535),
(218, '021705', 'Llacllin', 'Recuay', 'Ancash', 1872, 101.1, -10.07, -77.6222),
(219, '021706', 'Marca', 'Recuay', 'Ancash', 969, 184.84, -10.0878, -77.4747),
(220, '021707', 'Pampas Chico', 'Recuay', 'Ancash', 2109, 100.51, -10.1147, -77.3981),
(221, '021708', 'Pararin', 'Recuay', 'Ancash', 1403, 254.85, -10.0497, -77.6533),
(222, '021709', 'Tapacocha', 'Recuay', 'Ancash', 452, 81.23, -10.0097, -77.5681),
(223, '021710', 'Ticapampa', 'Recuay', 'Ancash', 2232, 142.29, -9.7578, -77.4444),
(224, '021801', 'Chimbote', 'Santa', 'Ancash', 216037, 1461.44, -9.0758, -78.5842),
(225, '021802', 'Caceres del Peru', 'Santa', 'Ancash', 4865, 549.78, -9.0131, -78.1403),
(226, '021803', 'Coishco', 'Santa', 'Ancash', 16057, 9.21, -9.0239, -78.6181),
(227, '021804', 'Macate', 'Santa', 'Ancash', 3325, 584.65, -8.7603, -78.0603),
(228, '021805', 'Moro', 'Santa', 'Ancash', 7545, 359.35, -9.1378, -78.1844),
(229, '021806', 'Nepeña', 'Santa', 'Ancash', 15949, 458.24, -9.1731, -78.3597),
(230, '021807', 'Samanco', 'Santa', 'Ancash', 4676, 153.98, -8.9878, -78.6161),
(231, '021808', 'Santa', 'Santa', 'Ancash', 21041, 42.23, -9.1156, -78.5314),
(232, '021809', 'Nuevo Chimbote', 'Santa', 'Ancash', 157211, 389.73, -9.2606, -78.4994),
(233, '021901', 'Sihuas', 'Sihuas', 'Ancash', 5750, 43.81, -8.5556, -77.6344),
(234, '021902', 'Acobamba', 'Sihuas', 'Ancash', 2234, 153.04, -8.3264, -77.585),
(235, '021903', 'Alfonso Ugarte', 'Sihuas', 'Ancash', 762, 80.71, -8.455, -77.4292),
(236, '021904', 'Cashapampa', 'Sihuas', 'Ancash', 2833, 66.96, -8.5617, -77.6558),
(237, '021905', 'Chingalpo', 'Sihuas', 'Ancash', 1034, 173.2, -8.3394, -77.5992),
(238, '021906', 'Huayllabamba', 'Sihuas', 'Ancash', 3982, 287.58, -8.535, -77.5689),
(239, '021907', 'Quiches', 'Sihuas', 'Ancash', 2958, 146.98, -8.3944, -77.4933),
(240, '021908', 'Ragash', 'Sihuas', 'Ancash', 2613, 208.45, -8.5308, -77.6692),
(241, '021909', 'San Juan', 'Sihuas', 'Ancash', 6568, 209.24, -8.6461, -77.5808),
(242, '021910', 'Sicsibamba', 'Sihuas', 'Ancash', 1808, 86, -8.6236, -77.5367),
(243, '022001', 'Yungay', 'Yungay', 'Ancash', 22323, 276.68, -9.1375, -77.7475),
(244, '022002', 'Cascapara', 'Yungay', 'Ancash', 2332, 138.32, -9.2261, -77.7197),
(245, '022003', 'Mancos', 'Yungay', 'Ancash', 6954, 64.05, -9.1911, -77.7164),
(246, '022004', 'Matacoto', 'Yungay', 'Ancash', 1666, 43.65, -9.1775, -77.7494),
(247, '022005', 'Quillo', 'Yungay', 'Ancash', 14134, 373.83, -9.3297, -78.0431),
(248, '022006', 'Ranrahirca', 'Yungay', 'Ancash', 2690, 22.89, -9.1725, -77.725),
(249, '022007', 'Shupluy', 'Yungay', 'Ancash', 2412, 162.21, -9.2183, -77.6975),
(250, '022008', 'Yanama', 'Yungay', 'Ancash', 6986, 279.85, -9.0222, -77.4744),
(251, '030101', 'Abancay', 'Abancay', 'Apurimac', 56871, 313.07, -13.6367, -72.8792),
(252, '030102', 'Chacoche', 'Abancay', 'Apurimac', 1226, 186.1, -13.9417, -72.9897),
(253, '030103', 'Circa', 'Abancay', 'Apurimac', 2515, 641.68, -13.8778, -72.8736),
(254, '030104', 'Curahuasi', 'Abancay', 'Apurimac', 18422, 817.98, -13.5417, -72.6953),
(255, '030105', 'Huanipaca', 'Abancay', 'Apurimac', 4770, 432.62, -13.4917, -72.9397),
(256, '030106', 'Lambrama', 'Abancay', 'Apurimac', 5577, 521.62, -13.8706, -72.7728),
(257, '030107', 'Pichirhua', 'Abancay', 'Apurimac', 4028, 370.69, -13.8606, -73.0736),
(258, '030108', 'San Pedro de Cachora', 'Abancay', 'Apurimac', 3864, 108.77, -13.5144, -72.8161),
(259, '030109', 'Tamburco', 'Abancay', 'Apurimac', 9894, 54.6, -13.6211, -72.8725),
(260, '030201', 'Andahuaylas', 'Andahuaylas', 'Apurimac', 46760, 174.11, -13.6561, -73.3847),
(261, '030202', 'Andarapa', 'Andahuaylas', 'Apurimac', 6335, 172.05, -13.5264, -73.3681),
(262, '030203', 'Chiara', 'Andahuaylas', 'Apurimac', 1323, 148.92, -13.8681, -73.6681),
(263, '030204', 'Huancarama', 'Andahuaylas', 'Apurimac', 7408, 153.04, -13.6467, -73.0856),
(264, '030205', 'Huancaray', 'Andahuaylas', 'Apurimac', 4617, 112.2, -13.7578, -73.5275),
(265, '030206', 'Huayana', 'Andahuaylas', 'Apurimac', 1060, 96.87, -14.0503, -73.6097),
(266, '030207', 'Kishuara', 'Andahuaylas', 'Apurimac', 9356, 309.91, -13.6914, -73.1214),
(267, '030208', 'Pacobamba', 'Andahuaylas', 'Apurimac', 4676, 245.9, -13.6167, -73.0872),
(268, '030209', 'Pacucha', 'Andahuaylas', 'Apurimac', 9833, 170.39, -13.6089, -73.3442),
(269, '030210', 'Pampachiri', 'Andahuaylas', 'Apurimac', 2820, 602.5, -14.1861, -73.5436),
(270, '030211', 'Pomacocha', 'Andahuaylas', 'Apurimac', 1048, 129.19, -14.085, -73.5911),
(271, '030212', 'San Antonio de Cachi', 'Andahuaylas', 'Apurimac', 3183, 178.78, -13.7733, -73.6036),
(272, '030213', 'San Jeronimo', 'Andahuaylas', 'Apurimac', 29017, 237.42, -13.6506, -73.3656),
(273, '030214', 'San Miguel de Chaccrampa', 'Andahuaylas', 'Apurimac', 2080, 83.37, -13.9594, -73.6086),
(274, '030215', 'Santa Maria de Chicmo', 'Andahuaylas', 'Apurimac', 9864, 162.14, -13.6578, -73.4931),
(275, '030216', 'Talavera', 'Andahuaylas', 'Apurimac', 18478, 148.12, -13.6536, -73.4278),
(276, '030217', 'Tumay Huaraca', 'Andahuaylas', 'Apurimac', 2448, 446.71, -14.0539, -73.5689),
(277, '030218', 'Turpo', 'Andahuaylas', 'Apurimac', 4152, 121.67, -13.7856, -73.4728),
(278, '030219', 'Kaquiabamba', 'Andahuaylas', 'Apurimac', 3006, 97.79, -13.5369, -73.2878),
(279, '030220', 'José María Arguedas', 'Andahuaylas', 'Apurimac', 3921, 195.92, -13.7336, -73.3503),
(280, '030301', 'Antabamba', 'Antabamba', 'Apurimac', 3185, 603.76, -14.3653, -72.8778),
(281, '030302', 'El Oro', 'Antabamba', 'Apurimac', 548, 68.81, -14.2092, -73.0583),
(282, '030303', 'Huaquirca', 'Antabamba', 'Apurimac', 1568, 337.6, -14.3369, -72.8936),
(283, '030304', 'Juan Espinoza Medrano', 'Antabamba', 'Apurimac', 2044, 623.22, -14.4286, -72.9147),
(284, '030305', 'Oropesa', 'Antabamba', 'Apurimac', 3127, 1180.12, -14.2628, -72.5639),
(285, '030306', 'Pachaconas', 'Antabamba', 'Apurimac', 1291, 226.73, -14.2244, -73.0147),
(286, '030307', 'Sabaino', 'Antabamba', 'Apurimac', 1657, 178.77, -14.3122, -72.9442),
(287, '030401', 'Chalhuanca', 'Aymaraes', 'Apurimac', 5098, 322.34, -14.295, -73.2431),
(288, '030402', 'Capaya', 'Aymaraes', 'Apurimac', 1013, 77.75, -14.1181, -73.3217),
(289, '030403', 'Caraybamba', 'Aymaraes', 'Apurimac', 1497, 234.91, -14.3783, -73.1608),
(290, '030404', 'Chapimarca', 'Aymaraes', 'Apurimac', 2139, 213.09, -13.9747, -73.0644),
(291, '030405', 'Colcabamba', 'Aymaraes', 'Apurimac', 959, 95.75, -14.005, -73.2519),
(292, '030406', 'Cotaruse', 'Aymaraes', 'Apurimac', 5444, 1749.83, -14.4164, -73.2053),
(293, '030407', 'Huayllo', 'Aymaraes', 'Apurimac', 739, 72.89, -14.1331, -73.2686),
(294, '030408', 'Justo Apu Sahuaraura', 'Aymaraes', 'Apurimac', 1340, 97.64, -14.1489, -73.1758),
(295, '030409', 'Lucre', 'Aymaraes', 'Apurimac', 2141, 110.48, -13.9506, -73.2253),
(296, '030410', 'Pocohuanca', 'Aymaraes', 'Apurimac', 1154, 82.55, -14.22, -73.0881),
(297, '030411', 'San Juan de Chacña', 'Aymaraes', 'Apurimac', 833, 86.13, -13.9239, -73.1828),
(298, '030412', 'Sañayca', 'Aymaraes', 'Apurimac', 1455, 448.91, -14.2036, -73.3461),
(299, '030413', 'Soraya', 'Aymaraes', 'Apurimac', 824, 43.56, -14.1656, -73.3139),
(300, '030414', 'Tapairihua', 'Aymaraes', 'Apurimac', 2252, 163.73, -14.1408, -73.1431),
(301, '030415', 'Tintay', 'Aymaraes', 'Apurimac', 3213, 136.58, -13.9592, -73.1867),
(302, '030416', 'Toraya', 'Aymaraes', 'Apurimac', 2005, 173.05, -14.0522, -73.2958),
(303, '030417', 'Yanaca', 'Aymaraes', 'Apurimac', 1169, 103.88, -14.225, -73.1589),
(304, '030501', 'Tambobamba', 'Cotabambas', 'Apurimac', 11793, 722.23, -13.945, -72.1769),
(305, '030502', 'Cotabambas', 'Cotabambas', 'Apurimac', 4274, 331.96, -13.7458, -72.3567),
(306, '030503', 'Coyllurqui', 'Cotabambas', 'Apurimac', 8629, 418.95, -13.8367, -72.4339),
(307, '030504', 'Haquira', 'Cotabambas', 'Apurimac', 11908, 475.46, -14.2153, -72.1903),
(308, '030505', 'Mara', 'Cotabambas', 'Apurimac', 6718, 224.17, -14.0864, -72.1025),
(309, '030506', 'Challhuahuacho', 'Cotabambas', 'Apurimac', 9998, 439.96, -14.1192, -72.2486),
(310, '030601', 'Chincheros', 'Chincheros', 'Apurimac', 6998, 132.4, -13.5175, -73.7222),
(311, '030602', 'Anco_Huallo', 'Chincheros', 'Apurimac', 12627, 38.9, -13.5328, -73.6769),
(312, '030603', 'Cocharcas', 'Chincheros', 'Apurimac', 2742, 109.9, -13.61, -73.7408),
(313, '030604', 'Huaccana', 'Chincheros', 'Apurimac', 9142, 472.12, -13.3872, -73.69),
(314, '030605', 'Ocobamba', 'Chincheros', 'Apurimac', 8331, 58.2, -13.4828, -73.5617),
(315, '030606', 'Ongoy', 'Chincheros', 'Apurimac', 3812, 118.69, -13.4031, -73.6697),
(316, '030607', 'Uranmarca', 'Chincheros', 'Apurimac', 3748, 148.73, -13.6728, -73.6686),
(317, '030608', 'Ranracancha', 'Chincheros', 'Apurimac', 5377, 44.52, -13.5322, -73.6056),
(318, '030609', 'Rocchacc', 'Chincheros', 'Apurimac', 3409, 56.96, -13.44, -73.5997),
(319, '030610', 'El Porvenir', 'Chincheros', 'Apurimac', 2014, 61.89, -13.3975, -73.595),
(320, '030611', 'Los Chankas', 'Chincheros', 'Apurimac', 1276, 142.22, -13.4353, -73.8219),
(321, '030701', 'Chuquibambilla', 'Grau', 'Apurimac', 5410, 432.5, -14.1042, -72.7086),
(322, '030702', 'Curpahuasi', 'Grau', 'Apurimac', 2320, 293.42, -14.0631, -72.6714),
(323, '030703', 'Gamarra', 'Grau', 'Apurimac', 3890, 370.45, -13.8728, -72.5122),
(324, '030704', 'Huayllati', 'Grau', 'Apurimac', 1654, 110.75, -13.9283, -72.4847),
(325, '030705', 'Mamara', 'Grau', 'Apurimac', 973, 66.21, -14.2275, -72.5906),
(326, '030706', 'Micaela Bastidas', 'Grau', 'Apurimac', 1689, 110.14, -14.115, -72.6136),
(327, '030707', 'Pataypampa', 'Grau', 'Apurimac', 1127, 158.91, -14.1775, -72.6706),
(328, '030708', 'Progreso', 'Grau', 'Apurimac', 3342, 254.59, -14.0742, -72.4744),
(329, '030709', 'San Antonio', 'Grau', 'Apurimac', 358, 24.12, -14.1689, -72.6233),
(330, '030710', 'Santa Rosa', 'Grau', 'Apurimac', 700, 36.16, -14.1408, -72.6586),
(331, '030711', 'Turpay', 'Grau', 'Apurimac', 746, 52.34, -14.2283, -72.6253),
(332, '030712', 'Vilcabamba', 'Grau', 'Apurimac', 1402, 7.97, -14.0758, -72.625),
(333, '030713', 'Virundo', 'Grau', 'Apurimac', 1305, 117.19, -14.2506, -72.6811),
(334, '030714', 'Curasco', 'Grau', 'Apurimac', 1624, 139.77, -14.0606, -72.5672),
(335, '040101', 'Arequipa', 'Arequipa', 'Arequipa', 52425, 2.8, -16.4008, -71.5378),
(336, '040102', 'Alto Selva Alegre', 'Arequipa', 'Arequipa', 85223, 6.98, -16.3706, -71.5272),
(337, '040103', 'Cayma', 'Arequipa', 'Arequipa', 96878, 246.31, -16.3881, -71.5492),
(338, '040104', 'Cerro Colorado', 'Arequipa', 'Arequipa', 158836, 174.9, -16.375, -71.5611),
(339, '040105', 'Characato', 'Arequipa', 'Arequipa', 10101, 86, -16.4706, -71.4897),
(340, '040106', 'Chiguata', 'Arequipa', 'Arequipa', 3012, 460.81, -16.4025, -71.3939),
(341, '040107', 'Jacobo Hunter', 'Arequipa', 'Arequipa', 48985, 20.37, -16.4467, -71.5556),
(342, '040108', 'La Joya', 'Arequipa', 'Arequipa', 32048, 670.22, -16.4239, -71.8206),
(343, '040109', 'Mariano Melgar', 'Arequipa', 'Arequipa', 52881, 29.83, -16.4058, -71.5117),
(344, '040110', 'Miraflores', 'Arequipa', 'Arequipa', 48242, 28.68, -16.395, -71.5211),
(345, '040111', 'Mollebaya', 'Arequipa', 'Arequipa', 1979, 26.7, -16.4883, -71.4686),
(346, '040112', 'Paucarpata', 'Arequipa', 'Arequipa', 126053, 31.07, -16.4233, -71.5083),
(347, '040113', 'Pocsi', 'Arequipa', 'Arequipa', 537, 172.48, -16.5172, -71.3925),
(348, '040114', 'Polobaya', 'Arequipa', 'Arequipa', 1497, 441.61, -16.5606, -71.3747),
(349, '040115', 'Quequeña', 'Arequipa', 'Arequipa', 1410, 34.93, -16.5586, -71.4544),
(350, '040116', 'Sabandia', 'Arequipa', 'Arequipa', 4234, 36.63, -16.4561, -71.495),
(351, '040117', 'Sachaca', 'Arequipa', 'Arequipa', 20059, 26.63, -16.4286, -71.5678),
(352, '040118', 'San Juan de Siguas', 'Arequipa', 'Arequipa', 1591, 93.31, -16.3461, -72.1314),
(353, '040119', 'San Juan de Tarucani', 'Arequipa', 'Arequipa', 2193, 2264.59, -16.1839, -71.0656),
(354, '040120', 'Santa Isabel de Siguas', 'Arequipa', 'Arequipa', 1273, 187.98, -16.3197, -72.1028),
(355, '040121', 'Santa Rita de Siguas', 'Arequipa', 'Arequipa', 5854, 370.16, -16.4928, -72.0944),
(356, '040122', 'Socabaya', 'Arequipa', 'Arequipa', 83799, 18.64, -16.4522, -71.5308),
(357, '040123', 'Tiabaya', 'Arequipa', 'Arequipa', 14812, 31.62, -16.4489, -71.5908),
(358, '040124', 'Uchumayo', 'Arequipa', 'Arequipa', 12950, 227.14, -16.425, -71.6722),
(359, '040125', 'Vitor', 'Arequipa', 'Arequipa', 2267, 1543.5, -16.4658, -71.9389),
(360, '040126', 'Yanahuara', 'Arequipa', 'Arequipa', 26233, 2.2, -16.395, -71.5539),
(361, '040127', 'Yarabamba', 'Arequipa', 'Arequipa', 1140, 492.2, -16.5481, -71.4775),
(362, '040128', 'Yura', 'Arequipa', 'Arequipa', 28556, 1942.9, -16.245, -71.6931),
(363, '040129', 'Jose Luis Bustamante y Rivero', 'Arequipa', 'Arequipa', 76905, 10.83, -16.4344, -71.5175),
(364, '040201', 'Camana', 'Camana', 'Arequipa', 14409, 11.67, -16.6236, -72.7114),
(365, '040202', 'Jose Maria Quimper', 'Camana', 'Arequipa', 4195, 16.72, -16.6031, -72.7275),
(366, '040203', 'Mariano Nicolas Valcarcel', 'Camana', 'Arequipa', 7728, 557.74, -16.0303, -73.1625),
(367, '040204', 'Mariscal Caceres', 'Camana', 'Arequipa', 6637, 579.31, -16.6183, -72.7361),
(368, '040205', 'Nicolas de Pierola', 'Camana', 'Arequipa', 6387, 391.84, -16.5717, -72.7147),
(369, '040206', 'Ocoña', 'Camana', 'Arequipa', 4862, 1414.8, -16.4328, -73.1081),
(370, '040207', 'Quilca', 'Camana', 'Arequipa', 630, 912.25, -16.7164, -72.4275),
(371, '040208', 'Samuel Pastor', 'Camana', 'Arequipa', 15933, 113.4, -16.615, -72.6989),
(372, '040301', 'Caraveli', 'Caraveli', 'Arequipa', 3705, 727.68, -15.7728, -73.3681),
(373, '040302', 'Acari', 'Caraveli', 'Arequipa', 3010, 799.21, -15.4325, -74.6172),
(374, '040303', 'Atico', 'Caraveli', 'Arequipa', 4128, 3146.24, -16.2089, -73.6258),
(375, '040304', 'Atiquipa', 'Caraveli', 'Arequipa', 945, 423.55, -15.7956, -74.3658),
(376, '040305', 'Bella Union', 'Caraveli', 'Arequipa', 7296, 1588.41, -15.4519, -74.6622),
(377, '040306', 'Cahuacho', 'Caraveli', 'Arequipa', 909, 1412.1, -15.5042, -73.4817),
(378, '040307', 'Chala', 'Caraveli', 'Arequipa', 7186, 378.38, -15.8667, -74.2472),
(379, '040308', 'Chaparra', 'Caraveli', 'Arequipa', 5814, 1473.19, -15.8058, -73.9672),
(380, '040309', 'Huanuhuanu', 'Caraveli', 'Arequipa', 3469, 708.52, -15.6592, -74.0936),
(381, '040310', 'Jaqui', 'Caraveli', 'Arequipa', 1163, 424.73, -15.4753, -74.4414),
(382, '040311', 'Lomas', 'Caraveli', 'Arequipa', 1356, 452.7, -15.5719, -74.8533),
(383, '040312', 'Quicacha', 'Caraveli', 'Arequipa', 1890, 1048.42, -15.6253, -73.7978),
(384, '040313', 'Yauca', 'Caraveli', 'Arequipa', 1555, 556.3, -15.6606, -74.5269),
(385, '040401', 'Aplao', 'Castilla', 'Arequipa', 8856, 640.04, -16.0761, -72.4925),
(386, '040402', 'Andagua', 'Castilla', 'Arequipa', 1116, 480.74, -15.4975, -72.355),
(387, '040403', 'Ayo', 'Castilla', 'Arequipa', 401, 327.97, -15.6836, -72.2744),
(388, '040404', 'Chachas', 'Castilla', 'Arequipa', 1671, 1190.49, -15.5017, -72.2719),
(389, '040405', 'Chilcaymarca', 'Castilla', 'Arequipa', 1376, 181.37, -15.2867, -72.3794),
(390, '040406', 'Choco', 'Castilla', 'Arequipa', 985, 904.33, -15.5761, -72.1331),
(391, '040407', 'Huancarqui', 'Castilla', 'Arequipa', 1288, 803.65, -16.0969, -72.4722),
(392, '040408', 'Machaguay', 'Castilla', 'Arequipa', 681, 246.89, -15.6486, -72.5056),
(393, '040409', 'Orcopampa', 'Castilla', 'Arequipa', 10039, 724.37, -15.2661, -72.3431),
(394, '040410', 'Pampacolca', 'Castilla', 'Arequipa', 2612, 205.19, -15.7131, -72.5728),
(395, '040411', 'Tipan', 'Castilla', 'Arequipa', 506, 57.68, -15.7272, -72.5053),
(396, '040412', 'Uñon', 'Castilla', 'Arequipa', 464, 296.93, -15.7275, -72.4317),
(397, '040413', 'Uraca', 'Castilla', 'Arequipa', 7235, 713.83, -16.2231, -72.4733),
(398, '040414', 'Viraco', 'Castilla', 'Arequipa', 1647, 141, -15.6547, -72.5247),
(399, '040501', 'Chivay', 'Caylloma', 'Arequipa', 8073, 240.64, -15.64, -71.6033),
(400, '040502', 'Achoma', 'Caylloma', 'Arequipa', 869, 393.54, -15.6611, -71.7017),
(401, '040503', 'Cabanaconde', 'Caylloma', 'Arequipa', 2332, 460.55, -15.6214, -71.9797),
(402, '040504', 'Callalli', 'Caylloma', 'Arequipa', 1915, 1485.1, -15.5067, -71.4483),
(403, '040505', 'Caylloma', 'Caylloma', 'Arequipa', 3021, 1499, -15.1872, -71.7725),
(404, '040506', 'Coporaque', 'Caylloma', 'Arequipa', 1542, 111.98, -15.6275, -71.6483),
(405, '040507', 'Huambo', 'Caylloma', 'Arequipa', 566, 705.79, -15.7297, -72.1072),
(406, '040508', 'Huanca', 'Caylloma', 'Arequipa', 1383, 391.16, -16.0311, -71.8736),
(407, '040509', 'Ichupampa', 'Caylloma', 'Arequipa', 648, 74.89, -15.6503, -71.6892),
(408, '040510', 'Lari', 'Caylloma', 'Arequipa', 1548, 384.02, -15.6217, -71.7692),
(409, '040511', 'Lluta', 'Caylloma', 'Arequipa', 1253, 1226.46, -16.0156, -72.0161),
(410, '040512', 'Maca', 'Caylloma', 'Arequipa', 692, 227.48, -15.6417, -71.7711),
(411, '040513', 'Madrigal', 'Caylloma', 'Arequipa', 463, 160.09, -15.6086, -71.8103),
(412, '040514', 'San Antonio de Chuca', 'Caylloma', 'Arequipa', 1593, 1531.27, -15.8403, -71.0903),
(413, '040515', 'Sibayo', 'Caylloma', 'Arequipa', 655, 286.03, -15.4858, -71.4586),
(414, '040516', 'Tapay', 'Caylloma', 'Arequipa', 523, 420.17, -15.5789, -71.9414),
(415, '040517', 'Tisco', 'Caylloma', 'Arequipa', 1388, 1445.02, -15.3469, -71.4492),
(416, '040518', 'Tuti', 'Caylloma', 'Arequipa', 738, 241.89, -15.5325, -71.5511),
(417, '040519', 'Yanque', 'Caylloma', 'Arequipa', 2113, 1108.58, -15.65, -71.6614),
(418, '040520', 'Majes', 'Caylloma', 'Arequipa', 69348, 1625.8, -16.3586, -72.1908),
(419, '040601', 'Chuquibamba', 'Condesuyos', 'Arequipa', 3279, 1255.04, -15.8397, -72.6542),
(420, '040602', 'Andaray', 'Condesuyos', 'Arequipa', 657, 847.56, -15.7961, -72.8597),
(421, '040603', 'Cayarani', 'Condesuyos', 'Arequipa', 3046, 1395.67, -14.6731, -72.0231),
(422, '040604', 'Chichas', 'Condesuyos', 'Arequipa', 638, 392.16, -15.5469, -72.9183),
(423, '040605', 'Iray', 'Condesuyos', 'Arequipa', 633, 247.62, -15.8564, -72.625),
(424, '040606', 'Rio Grande', 'Condesuyos', 'Arequipa', 2606, 527.48, -15.9411, -73.1308),
(425, '040607', 'Salamanca', 'Condesuyos', 'Arequipa', 841, 1235.8, -15.5042, -72.8333),
(426, '040608', 'Yanaquihua', 'Condesuyos', 'Arequipa', 6061, 1057.07, -15.7747, -72.8758),
(427, '040701', 'Mollendo', 'Islay', 'Arequipa', 22008, 960.83, -17.025, -72.0181),
(428, '040702', 'Cocachacra', 'Islay', 'Arequipa', 8901, 1536.96, -17.0942, -71.7711),
(429, '040703', 'Dean Valdivia', 'Islay', 'Arequipa', 6703, 134.08, -17.145, -71.8239),
(430, '040704', 'Islay', 'Islay', 'Arequipa', 7851, 383.78, -17, -72.1017),
(431, '040705', 'Mejia', 'Islay', 'Arequipa', 1014, 100.78, -17.1028, -71.9086),
(432, '040706', 'Punta de Bombon', 'Islay', 'Arequipa', 6444, 769.6, -17.1728, -71.7928),
(433, '040801', 'Cotahuasi', 'La Union', 'Arequipa', 2923, 166.5, -15.2111, -72.8911),
(434, '040802', 'Alca', 'La Union', 'Arequipa', 1988, 193.42, -15.1342, -72.7647),
(435, '040803', 'Charcana', 'La Union', 'Arequipa', 536, 165.27, -15.2411, -73.0697),
(436, '040804', 'Huaynacotas', 'La Union', 'Arequipa', 2207, 932.64, -15.1744, -72.8514),
(437, '040805', 'Pampamarca', 'La Union', 'Arequipa', 1231, 782.17, -15.185, -72.9072),
(438, '040806', 'Puyca', 'La Union', 'Arequipa', 2797, 1501.2, -15.0589, -72.6908),
(439, '040807', 'Quechualla', 'La Union', 'Arequipa', 228, 138.37, -15.2758, -73.0233),
(440, '040808', 'Sayla', 'La Union', 'Arequipa', 592, 66.55, -15.3211, -73.2214),
(441, '040809', 'Tauria', 'La Union', 'Arequipa', 317, 314.68, -15.3553, -73.2319),
(442, '040810', 'Tomepampa', 'La Union', 'Arequipa', 813, 94.16, -15.1728, -72.8297),
(443, '040811', 'Toro', 'La Union', 'Arequipa', 767, 391.44, -15.2642, -72.9275),
(444, '050101', 'Ayacucho', 'Huamanga', 'Ayacucho', 96671, 83.11, -13.1542, -74.2228),
(445, '050102', 'Acocro', 'Huamanga', 'Ayacucho', 11081, 436.65, -13.2183, -74.0411),
(446, '050103', 'Acos Vinchos', 'Huamanga', 'Ayacucho', 6197, 156.82, -13.1125, -74.1017),
(447, '050104', 'Carmen Alto', 'Huamanga', 'Ayacucho', 22397, 17.52, -13.1722, -74.2242),
(448, '050105', 'Chiara', 'Huamanga', 'Ayacucho', 7216, 461.61, -13.2733, -74.2053),
(449, '050106', 'Ocros', 'Huamanga', 'Ayacucho', 6466, 305.41, -13.3917, -73.9164),
(450, '050107', 'Pacaycasa', 'Huamanga', 'Ayacucho', 3314, 53.55, -13.0564, -74.2142),
(451, '050108', 'Quinua', 'Huamanga', 'Ayacucho', 6375, 116.61, -13.0497, -74.1397),
(452, '050109', 'San Jose de Ticllas', 'Huamanga', 'Ayacucho', 2591, 82.31, -13.1328, -74.3331),
(453, '050110', 'San Juan Bautista', 'Huamanga', 'Ayacucho', 52935, 15.19, -13.1658, -74.2222),
(454, '050111', 'Santiago de Pischa', 'Huamanga', 'Ayacucho', 1700, 91.09, -13.085, -74.3911),
(455, '050112', 'Socos', 'Huamanga', 'Ayacucho', 7637, 172.34, -13.215, -74.2894),
(456, '050113', 'Tambillo', 'Huamanga', 'Ayacucho', 5462, 153.23, -13.1922, -74.1097),
(457, '050114', 'Vinchos', 'Huamanga', 'Ayacucho', 17136, 928.68, -13.2417, -74.3536),
(458, '050115', 'Jesus Nazareno', 'Huamanga', 'Ayacucho', 18815, 16.12, -13.1531, -74.2114),
(459, '050116', 'Andrés Avelino Cáceres Dorregaray', 'Huamanga', 'Ayacucho', 22356, 9.28, -13.1617, -74.2106),
(460, '050201', 'Cangallo', 'Cangallo', 'Ayacucho', 6866, 187.05, -13.6281, -74.1442),
(461, '050202', 'Chuschi', 'Cangallo', 'Ayacucho', 8127, 418.03, -13.5831, -74.3536),
(462, '050203', 'Los Morochucos', 'Cangallo', 'Ayacucho', 8316, 253.22, -13.5572, -74.1947),
(463, '050204', 'Maria Parado de Bellido', 'Cangallo', 'Ayacucho', 2576, 129.13, -13.6039, -74.2347),
(464, '050205', 'Paras', 'Cangallo', 'Ayacucho', 4636, 789.09, -13.5517, -74.6272),
(465, '050206', 'Totos', 'Cangallo', 'Ayacucho', 3742, 112.9, -13.5681, -74.5242),
(466, '050301', 'Sancos', 'Huanca Sancos', 'Ayacucho', 3632, 1289.7, -13.9192, -74.3339),
(467, '050302', 'Carapo', 'Huanca Sancos', 'Ayacucho', 2543, 241.34, -13.8375, -74.3147),
(468, '050303', 'Sacsamarca', 'Huanca Sancos', 'Ayacucho', 1637, 673.03, -13.9464, -74.315),
(469, '050304', 'Santiago de Lucanamarca', 'Huanca Sancos', 'Ayacucho', 2683, 658.26, -13.8433, -74.3722),
(470, '050401', 'Huanta', 'Huanta', 'Ayacucho', 42538, 193.48, -12.9386, -74.2486),
(471, '050402', 'Ayahuanco', 'Huanta', 'Ayacucho', 6452, 297.89, -12.5981, -74.3231),
(472, '050403', 'Huamanguilla', 'Huanta', 'Ayacucho', 5345, 95.27, -13.0108, -74.1731),
(473, '050404', 'Iguain', 'Huanta', 'Ayacucho', 3327, 61.44, -12.9919, -74.2083),
(474, '050405', 'Luricocha', 'Huanta', 'Ayacucho', 5359, 130.04, -12.8981, -74.2711),
(475, '050406', 'Santillana', 'Huanta', 'Ayacucho', 4906, 336.17, -12.7656, -74.2528),
(476, '050407', 'Sivia', 'Huanta', 'Ayacucho', 13511, 1053.52, -12.5119, -73.8578),
(477, '050408', 'Llochegua', 'Huanta', 'Ayacucho', 11372, 469.02, -12.4114, -73.9097),
(478, '050409', 'Canayre', 'Huanta', 'Ayacucho', 3091, 244.69, -12.2822, -74.0228),
(479, '050410', 'Uchuraccay', 'Huanta', 'Ayacucho', 5759, 300.28, -12.7622, -74.1464),
(480, '050411', 'Pucacolpa', 'Huanta', 'Ayacucho', 8654, 562.06, -15.255, -73.4136),
(481, '050412', 'Chaca', 'Huanta', 'Ayacucho', 2580, 124.46, -12.7836, -74.2069),
(482, '050501', 'San Miguel', 'La Mar', 'Ayacucho', 9248, 457.88, -13.0117, -73.9789),
(483, '050502', 'Anco', 'La Mar', 'Ayacucho', 11144, 802.86, -13.0592, -73.7072),
(484, '050503', 'Ayna', 'La Mar', 'Ayacucho', 10559, 290.51, -12.6244, -73.79),
(485, '050504', 'Chilcas', 'La Mar', 'Ayacucho', 3081, 156.58, -13.1722, -73.9083),
(486, '050505', 'Chungui', 'La Mar', 'Ayacucho', 5478, 1093.05, -13.2222, -73.6242),
(487, '050506', 'Luis Carranza', 'La Mar', 'Ayacucho', 1041, 135.84, -13.2283, -73.8925),
(488, '050507', 'Santa Rosa', 'La Mar', 'Ayacucho', 11233, 396.58, -12.6894, -73.735),
(489, '050508', 'Tambo', 'La Mar', 'Ayacucho', 20429, 313.82, -12.9506, -74.0233),
(490, '050509', 'Samugari', 'La Mar', 'Ayacucho', 10772, 387.45, -12.7908, -73.6414),
(491, '050510', 'Anchihuay', 'La Mar', 'Ayacucho', 5640, 272.07, -12.8633, -73.5817),
(492, '050511', 'Oronccoy', 'La Mar', 'Ayacucho', 1853, 553.74, -13.3808, -73.4358),
(493, '050601', 'Puquio', 'Lucanas', 'Ayacucho', 14166, 866.43, -14.6914, -74.1283),
(494, '050602', 'Aucara', 'Lucanas', 'Ayacucho', 5640, 903.51, -14.2681, -73.9703),
(495, '050603', 'Cabana', 'Lucanas', 'Ayacucho', 4727, 402.62, -14.2897, -73.9667),
(496, '050604', 'Carmen Salcedo', 'Lucanas', 'Ayacucho', 4159, 473.66, -14.3875, -73.9625),
(497, '050605', 'Chaviña', 'Lucanas', 'Ayacucho', 2025, 399.09, -14.9778, -73.8364),
(498, '050606', 'Chipao', 'Lucanas', 'Ayacucho', 3825, 1166.91, -14.3661, -73.8786),
(499, '050607', 'Huac-Huas', 'Lucanas', 'Ayacucho', 2865, 309.48, -14.1308, -74.9419),
(500, '050608', 'Laramate', 'Lucanas', 'Ayacucho', 1367, 785.89, -14.2858, -74.8425),
(501, '050609', 'Leoncio Prado', 'Lucanas', 'Ayacucho', 1364, 1053.6, -14.7278, -74.67),
(502, '050610', 'Llauta', 'Lucanas', 'Ayacucho', 1126, 482.07, -14.2439, -74.9192),
(503, '050611', 'Lucanas', 'Lucanas', 'Ayacucho', 4240, 1205.78, -14.6222, -74.2328),
(504, '050612', 'Ocaña', 'Lucanas', 'Ayacucho', 2932, 848.36, -14.3983, -74.8219),
(505, '050613', 'Otoca', 'Lucanas', 'Ayacucho', 3149, 720.2, -14.4894, -74.6892),
(506, '050614', 'Saisa', 'Lucanas', 'Ayacucho', 933, 585.4, -14.9383, -74.4183);
INSERT INTO `ubigeo` (`id_ubigeo`, `cod_ubigeo`, `dto_ubigeo`, `prov_ubigeo`, `dpto_ubigeo`, `pob_ubigeo`, `sup_ubigeo`, `x_ubigeo`, `y_ubigeo`) VALUES
(507, '050615', 'San Cristobal', 'Lucanas', 'Ayacucho', 2182, 391.83, -14.7425, -74.2217),
(508, '050616', 'San Juan', 'Lucanas', 'Ayacucho', 1636, 44.59, -14.66, -74.2011),
(509, '050617', 'San Pedro', 'Lucanas', 'Ayacucho', 3019, 733.03, -14.7708, -74.0972),
(510, '050618', 'San Pedro de Palco', 'Lucanas', 'Ayacucho', 1371, 531.55, -14.4139, -74.65),
(511, '050619', 'Sancos', 'Lucanas', 'Ayacucho', 7510, 1520.87, -15.0619, -73.9511),
(512, '050620', 'Santa Ana de Huaycahuacho', 'Lucanas', 'Ayacucho', 669, 50.63, -14.2281, -73.955),
(513, '050621', 'Santa Lucia', 'Lucanas', 'Ayacucho', 889, 1019.14, -14.9786, -74.5233),
(514, '050701', 'Coracora', 'Parinacochas', 'Ayacucho', 15679, 1399.41, -15.0161, -73.7819),
(515, '050702', 'Chumpi', 'Parinacochas', 'Ayacucho', 2680, 366.3, -15.0944, -73.7478),
(516, '050703', 'Coronel Castañeda', 'Parinacochas', 'Ayacucho', 1926, 1108.04, -14.81, -73.2886),
(517, '050704', 'Pacapausa', 'Parinacochas', 'Ayacucho', 2955, 144.3, -14.9492, -73.3678),
(518, '050705', 'Pullo', 'Parinacochas', 'Ayacucho', 5003, 1562.34, -15.2092, -73.8294),
(519, '050706', 'Puyusca', 'Parinacochas', 'Ayacucho', 2091, 700.75, -15.2492, -73.5703),
(520, '050707', 'San Francisco de Ravacayco', 'Parinacochas', 'Ayacucho', 770, 99.83, -14.9975, -73.3556),
(521, '050708', 'Upahuacho', 'Parinacochas', 'Ayacucho', 2817, 587.35, -14.9075, -73.3972),
(522, '050801', 'Pausa', 'Paucar del Sara Sara', 'Ayacucho', 2845, 242.78, -15.2806, -73.3433),
(523, '050802', 'Colta', 'Paucar del Sara Sara', 'Ayacucho', 1179, 277.29, -15.1631, -73.2939),
(524, '050803', 'Corculla', 'Paucar del Sara Sara', 'Ayacucho', 445, 97.05, -15.2617, -73.2),
(525, '050804', 'Lampa', 'Paucar del Sara Sara', 'Ayacucho', 2590, 289.45, -15.1847, -73.3472),
(526, '050805', 'Marcabamba', 'Paucar del Sara Sara', 'Ayacucho', 786, 122.53, -15.1492, -73.3436),
(527, '050806', 'Oyolo', 'Paucar del Sara Sara', 'Ayacucho', 1226, 820.13, -15.1797, -73.1881),
(528, '050807', 'Pararca', 'Paucar del Sara Sara', 'Ayacucho', 669, 57.91, -15.2169, -73.4653),
(529, '050808', 'San Javier de Alpabamba', 'Paucar del Sara Sara', 'Ayacucho', 551, 92.87, -15.0539, -73.3103),
(530, '050809', 'San Jose de Ushua', 'Paucar del Sara Sara', 'Ayacucho', 179, 17.33, -15.2242, -73.2258),
(531, '050810', 'Sara Sara', 'Paucar del Sara Sara', 'Ayacucho', 735, 79.58, -15.2458, -73.4514),
(532, '050901', 'Querobamba', 'Sucre', 'Ayacucho', 2792, 275.65, -14.0136, -73.8408),
(533, '050902', 'Belen', 'Sucre', 'Ayacucho', 772, 41.46, -13.8094, -73.7578),
(534, '050903', 'Chalcos', 'Sucre', 'Ayacucho', 635, 58.43, -13.8478, -73.7533),
(535, '050904', 'Chilcayoc', 'Sucre', 'Ayacucho', 568, 33.06, -13.8825, -73.7275),
(536, '050905', 'Huacaña', 'Sucre', 'Ayacucho', 694, 132.73, -14.1728, -73.8864),
(537, '050906', 'Morcolla', 'Sucre', 'Ayacucho', 1035, 289.34, -14.1097, -73.8736),
(538, '050907', 'Paico', 'Sucre', 'Ayacucho', 837, 79.65, -14.0386, -73.6433),
(539, '050908', 'San Pedro de Larcay', 'Sucre', 'Ayacucho', 1053, 310.07, -14.1697, -73.5758),
(540, '050909', 'San Salvador de Quije', 'Sucre', 'Ayacucho', 1679, 144.63, -13.9703, -73.7314),
(541, '050910', 'Santiago de Paucaray', 'Sucre', 'Ayacucho', 724, 62.65, -14.0444, -73.6372),
(542, '050911', 'Soras', 'Sucre', 'Ayacucho', 1331, 357.97, -14.1153, -73.6056),
(543, '051001', 'Huancapi', 'Victor Fajardo', 'Ayacucho', 2049, 223.35, -13.7528, -74.0669),
(544, '051002', 'Alcamenca', 'Victor Fajardo', 'Ayacucho', 2428, 125.11, -13.6578, -74.1467),
(545, '051003', 'Apongo', 'Victor Fajardo', 'Ayacucho', 1420, 171.58, -14.0147, -73.9342),
(546, '051004', 'Asquipata', 'Victor Fajardo', 'Ayacucho', 444, 70.72, -14.0536, -73.9094),
(547, '051005', 'Canaria', 'Victor Fajardo', 'Ayacucho', 4057, 263.88, -13.9231, -73.9053),
(548, '051006', 'Cayara', 'Victor Fajardo', 'Ayacucho', 1204, 69.25, -13.7953, -73.9906),
(549, '051007', 'Colca', 'Victor Fajardo', 'Ayacucho', 1078, 69.57, -13.7125, -74.0342),
(550, '051008', 'Huamanquiquia', 'Victor Fajardo', 'Ayacucho', 1248, 67.33, -13.7283, -74.2731),
(551, '051009', 'Huancaraylla', 'Victor Fajardo', 'Ayacucho', 1207, 165.49, -13.7175, -74.1028),
(552, '051010', 'Huaya', 'Victor Fajardo', 'Ayacucho', 3284, 162.23, -13.8492, -73.9536),
(553, '051011', 'Sarhua', 'Victor Fajardo', 'Ayacucho', 2778, 373.14, -13.6714, -74.3208),
(554, '051012', 'Vilcanchos', 'Victor Fajardo', 'Ayacucho', 2733, 498.54, -13.6122, -74.5339),
(555, '051101', 'Vilcas Huaman', 'Vilcas Huaman', 'Ayacucho', 8545, 216.89, -13.6533, -73.9528),
(556, '051102', 'Accomarca', 'Vilcas Huaman', 'Ayacucho', 939, 82.43, -13.8003, -73.9033),
(557, '051103', 'Carhuanca', 'Vilcas Huaman', 'Ayacucho', 1018, 56.91, -13.7425, -73.7892),
(558, '051104', 'Concepcion', 'Vilcas Huaman', 'Ayacucho', 3193, 215.03, -13.5322, -73.875),
(559, '051105', 'Huambalpa', 'Vilcas Huaman', 'Ayacucho', 2206, 150.76, -13.7494, -73.9339),
(560, '051106', 'Independencia', 'Vilcas Huaman', 'Ayacucho', 1583, 85.28, -13.8581, -73.8878),
(561, '051107', 'Saurama', 'Vilcas Huaman', 'Ayacucho', 1297, 95.15, -13.695, -73.7622),
(562, '051108', 'Vischongo', 'Vilcas Huaman', 'Ayacucho', 4828, 268.87, -13.5881, -73.9983),
(563, '060101', 'Cajamarca', 'Cajamarca', 'Cajamarca', 251097, 382.74, -7.1564, -78.5153),
(564, '060102', 'Asuncion', 'Cajamarca', 'Cajamarca', 13508, 210.18, -7.3233, -78.5203),
(565, '060103', 'Chetilla', 'Cajamarca', 'Cajamarca', 4319, 73.94, -7.1461, -78.6714),
(566, '060104', 'Cospan', 'Cajamarca', 'Cajamarca', 7882, 558.79, -7.4264, -78.5433),
(567, '060105', 'Encañada', 'Cajamarca', 'Cajamarca', 24290, 635.06, -7.0864, -78.3447),
(568, '060106', 'Jesus', 'Cajamarca', 'Cajamarca', 14742, 267.78, -7.2456, -78.3778),
(569, '060107', 'Llacanora', 'Cajamarca', 'Cajamarca', 5404, 49.42, -7.1928, -78.4269),
(570, '060108', 'Los Baños del Inca', 'Cajamarca', 'Cajamarca', 43401, 276.4, -7.1617, -78.4633),
(571, '060109', 'Magdalena', 'Cajamarca', 'Cajamarca', 9689, 215.38, -7.2508, -78.6564),
(572, '060110', 'Matara', 'Cajamarca', 'Cajamarca', 3542, 59.74, -7.2564, -78.2636),
(573, '060111', 'Namora', 'Cajamarca', 'Cajamarca', 10740, 180.69, -7.2017, -78.3247),
(574, '060112', 'San Juan', 'Cajamarca', 'Cajamarca', 5232, 69.66, -7.2903, -78.4992),
(575, '060201', 'Cajabamba', 'Cajabamba', 'Cajamarca', 30798, 192.29, -7.6222, -78.0472),
(576, '060202', 'Cachachi', 'Cajabamba', 'Cajamarca', 26990, 820.81, -7.4494, -78.2703),
(577, '060203', 'Condebamba', 'Cajabamba', 'Cajamarca', 14006, 204.6, -7.5736, -78.07),
(578, '060204', 'Sitacocha', 'Cajabamba', 'Cajamarca', 8910, 589.94, -7.5211, -77.9714),
(579, '060301', 'Celendin', 'Celendin', 'Cajamarca', 28319, 409, -6.8681, -78.1489),
(580, '060302', 'Chumuch', 'Celendin', 'Cajamarca', 3198, 196.3, -6.6033, -78.2033),
(581, '060303', 'Cortegana', 'Celendin', 'Cajamarca', 8878, 233.31, -6.4906, -78.3036),
(582, '060304', 'Huasmin', 'Celendin', 'Cajamarca', 13621, 437.5, -6.8386, -78.2431),
(583, '060305', 'Jorge Chavez', 'Celendin', 'Cajamarca', 593, 53.34, -6.9414, -78.0914),
(584, '060306', 'Jose Galvez', 'Celendin', 'Cajamarca', 2497, 58.01, -6.9253, -78.1328),
(585, '060307', 'Miguel Iglesias', 'Celendin', 'Cajamarca', 5613, 235.73, -6.6439, -78.2381),
(586, '060308', 'Oxamarca', 'Celendin', 'Cajamarca', 6977, 292.52, -7.0397, -78.0725),
(587, '060309', 'Sorochuco', 'Celendin', 'Cajamarca', 9881, 170.02, -6.9103, -78.2553),
(588, '060310', 'Sucre', 'Celendin', 'Cajamarca', 6085, 270.98, -6.9408, -78.1369),
(589, '060311', 'Utco', 'Celendin', 'Cajamarca', 1417, 100.79, -6.8964, -78.0639),
(590, '060312', 'La Libertad de Pallan', 'Celendin', 'Cajamarca', 9101, 184.09, -6.7269, -78.2908),
(591, '060401', 'Chota', 'Chota', 'Cajamarca', 48903, 261.75, -6.5631, -78.6508),
(592, '060402', 'Anguia', 'Chota', 'Cajamarca', 4296, 123.01, -6.3422, -78.605),
(593, '060403', 'Chadin', 'Chota', 'Cajamarca', 4104, 66.53, -6.4731, -78.4197),
(594, '060404', 'Chiguirip', 'Chota', 'Cajamarca', 4663, 51.44, -6.4286, -78.7192),
(595, '060405', 'Chimban', 'Chota', 'Cajamarca', 3684, 198.99, -6.2567, -78.4786),
(596, '060406', 'Choropampa', 'Chota', 'Cajamarca', 2553, 171.59, -6.4372, -78.3503),
(597, '060407', 'Cochabamba', 'Chota', 'Cajamarca', 6401, 130.01, -6.4731, -78.8878),
(598, '060408', 'Conchan', 'Chota', 'Cajamarca', 7060, 180.23, -6.4444, -78.6572),
(599, '060409', 'Huambos', 'Chota', 'Cajamarca', 9490, 240.72, -6.4522, -78.9639),
(600, '060410', 'Lajas', 'Chota', 'Cajamarca', 12505, 120.73, -6.5617, -78.7389),
(601, '060411', 'Llama', 'Chota', 'Cajamarca', 8037, 494.94, -6.5144, -79.1197),
(602, '060412', 'Miracosta', 'Chota', 'Cajamarca', 3924, 415.69, -6.4053, -79.2831),
(603, '060413', 'Paccha', 'Chota', 'Cajamarca', 5335, 93.97, -6.5022, -78.4211),
(604, '060414', 'Pion', 'Chota', 'Cajamarca', 1566, 141.05, -6.1783, -78.4817),
(605, '060415', 'Querocoto', 'Chota', 'Cajamarca', 8918, 301.07, -6.3586, -79.0356),
(606, '060416', 'San Juan de Licupis', 'Chota', 'Cajamarca', 969, 205.01, -6.4244, -79.2414),
(607, '060417', 'Tacabamba', 'Chota', 'Cajamarca', 20132, 196.25, -6.3931, -78.6125),
(608, '060418', 'Tocmoche', 'Chota', 'Cajamarca', 993, 222.38, -6.4125, -79.3606),
(609, '060419', 'Chalamarca', 'Chota', 'Cajamarca', 11274, 179.74, -6.4889, -78.4689),
(610, '060501', 'Contumaza', 'Contumaza', 'Cajamarca', 8461, 358.28, -7.3653, -78.8064),
(611, '060502', 'Chilete', 'Contumaza', 'Cajamarca', 2733, 133.94, -7.2222, -78.8406),
(612, '060503', 'Cupisnique', 'Contumaza', 'Cajamarca', 1457, 280.2, -7.3492, -79.0297),
(613, '060504', 'Guzmango', 'Contumaza', 'Cajamarca', 3146, 49.88, -7.3842, -78.8981),
(614, '060505', 'San Benito', 'Contumaza', 'Cajamarca', 3845, 486.55, -7.4247, -78.9292),
(615, '060506', 'Santa Cruz de Toled', 'Contumaza', 'Cajamarca', 1044, 64.53, -7.3436, -78.8403),
(616, '060507', 'Tantarica', 'Contumaza', 'Cajamarca', 3303, 149.7, -7.3006, -78.9353),
(617, '060508', 'Yonan', 'Contumaza', 'Cajamarca', 7907, 547.25, -7.2536, -79.13),
(618, '060601', 'Cutervo', 'Cutervo', 'Cajamarca', 56382, 422.27, -6.3794, -78.8206),
(619, '060602', 'Callayuc', 'Cutervo', 'Cajamarca', 10280, 316.05, -6.1764, -78.9047),
(620, '060603', 'Choros', 'Cutervo', 'Cajamarca', 3595, 276.96, -5.9008, -78.6967),
(621, '060604', 'Cujillo', 'Cutervo', 'Cajamarca', 3040, 108.93, -6.1072, -78.5725),
(622, '060605', 'La Ramada', 'Cutervo', 'Cajamarca', 4862, 30.27, -6.2172, -78.5547),
(623, '060606', 'Pimpingos', 'Cutervo', 'Cajamarca', 5697, 186.04, -6.0622, -78.7575),
(624, '060607', 'Querocotillo', 'Cutervo', 'Cajamarca', 17001, 697.1, -6.2747, -79.0369),
(625, '060608', 'San Andres de Cutervo', 'Cutervo', 'Cajamarca', 5240, 133.4, -6.2364, -78.7111),
(626, '060609', 'San Juan de Cutervo', 'Cutervo', 'Cajamarca', 1981, 60.87, -6.1747, -78.6011),
(627, '060610', 'San Luis de Lucma', 'Cutervo', 'Cajamarca', 4042, 109.74, -6.2956, -78.6056),
(628, '060611', 'Santa Cruz', 'Cutervo', 'Cajamarca', 2889, 128, -6.0964, -78.8547),
(629, '060612', 'Santo Domingo de La Capilla', 'Cutervo', 'Cajamarca', 5649, 103.74, -6.245, -78.8578),
(630, '060613', 'Santo Tomas', 'Cutervo', 'Cajamarca', 7931, 279.61, -6.1544, -78.6908),
(631, '060614', 'Socota', 'Cutervo', 'Cajamarca', 10720, 134.83, -6.3158, -78.7014),
(632, '060615', 'Toribio Casanova', 'Cutervo', 'Cajamarca', 1262, 40.65, -6.0069, -78.6997),
(633, '060701', 'Bambamarca', 'Hualgayoc', 'Cajamarca', 82744, 451.38, -6.6786, -78.5242),
(634, '060702', 'Chugur', 'Hualgayoc', 'Cajamarca', 3601, 99.6, -6.6711, -78.7397),
(635, '060703', 'Hualgayoc', 'Hualgayoc', 'Cajamarca', 16979, 226.17, -6.7656, -78.6119),
(636, '060801', 'Jaen', 'Jaen', 'Cajamarca', 101726, 537.25, -5.7106, -78.8117),
(637, '060802', 'Bellavista', 'Jaen', 'Cajamarca', 15310, 870.55, -5.6664, -78.6786),
(638, '060803', 'Chontali', 'Jaen', 'Cajamarca', 10232, 428.55, -5.6458, -79.0878),
(639, '060804', 'Colasay', 'Jaen', 'Cajamarca', 10447, 735.73, -5.9786, -79.0689),
(640, '060805', 'Huabal', 'Jaen', 'Cajamarca', 6956, 80.69, -5.6133, -78.9122),
(641, '060806', 'Las Pirias', 'Jaen', 'Cajamarca', 4009, 60.41, -5.6269, -78.8533),
(642, '060807', 'Pomahuaca', 'Jaen', 'Cajamarca', 10190, 732.8, -5.9322, -79.2289),
(643, '060808', 'Pucara', 'Jaen', 'Cajamarca', 7703, 240.3, -6.0414, -79.1283),
(644, '060809', 'Sallique', 'Jaen', 'Cajamarca', 8730, 373.89, -5.6569, -79.315),
(645, '060810', 'San Felipe', 'Jaen', 'Cajamarca', 6266, 255.49, -5.7697, -79.3136),
(646, '060811', 'San Jose del Alto', 'Jaen', 'Cajamarca', 7209, 634.11, -5.3908, -79.0539),
(647, '060812', 'Santa Rosa', 'Jaen', 'Cajamarca', 11363, 282.8, -5.4358, -78.5644),
(648, '060901', 'San Ignacio', 'San Ignacio', 'Cajamarca', 37862, 381.88, -5.1403, -79.0003),
(649, '060902', 'Chirinos', 'San Ignacio', 'Cajamarca', 14355, 351.91, -5.3028, -78.8983),
(650, '060903', 'Huarango', 'San Ignacio', 'Cajamarca', 20589, 922.35, -5.2706, -78.7753),
(651, '060904', 'La Coipa', 'San Ignacio', 'Cajamarca', 21056, 376.09, -5.3933, -78.9044),
(652, '060905', 'Namballe', 'San Ignacio', 'Cajamarca', 11717, 663.51, -5.0089, -79.0856),
(653, '060906', 'San Jose de Lourdes', 'San Ignacio', 'Cajamarca', 22147, 1482.75, -5.1025, -78.9139),
(654, '060907', 'Tabaconas', 'San Ignacio', 'Cajamarca', 22002, 798.59, -5.3164, -79.2833),
(655, '061001', 'Pedro Galvez', 'San Marcos', 'Cajamarca', 21549, 238.74, -7.3361, -78.1728),
(656, '061002', 'Chancay', 'San Marcos', 'Cajamarca', 3337, 61.8, -7.3858, -78.1264),
(657, '061003', 'Eduardo Villanueva', 'San Marcos', 'Cajamarca', 2288, 63.13, -7.4636, -78.1297),
(658, '061004', 'Gregorio Pita', 'San Marcos', 'Cajamarca', 6666, 212.81, -7.2725, -78.1594),
(659, '061005', 'Ichocan', 'San Marcos', 'Cajamarca', 1624, 76.11, -7.3669, -78.1283),
(660, '061006', 'Jose Manuel Quiroz', 'San Marcos', 'Cajamarca', 3961, 115.42, -7.3472, -78.0467),
(661, '061007', 'Jose Sabogal', 'San Marcos', 'Cajamarca', 15303, 594.31, -7.2833, -78.0167),
(662, '061101', 'San Miguel', 'San Miguel', 'Cajamarca', 15894, 368.26, -6.9997, -78.8536),
(663, '061102', 'Bolivar', 'San Miguel', 'Cajamarca', 1462, 78.97, -6.9772, -79.1789),
(664, '061103', 'Calquis', 'San Miguel', 'Cajamarca', 4425, 339, -6.9797, -78.8522),
(665, '061104', 'Catilluc', 'San Miguel', 'Cajamarca', 3495, 197.31, -6.7994, -78.7906),
(666, '061105', 'El Prado', 'San Miguel', 'Cajamarca', 1300, 71.44, -7.0339, -79.0111),
(667, '061106', 'La Florida', 'San Miguel', 'Cajamarca', 2157, 61.33, -6.8683, -79.1231),
(668, '061107', 'Llapa', 'San Miguel', 'Cajamarca', 6086, 132.68, -6.9786, -78.8072),
(669, '061108', 'Nanchoc', 'San Miguel', 'Cajamarca', 1550, 358.94, -6.9583, -79.2419),
(670, '061109', 'Niepos', 'San Miguel', 'Cajamarca', 4001, 158.88, -6.9272, -79.1283),
(671, '061110', 'San Gregorio', 'San Miguel', 'Cajamarca', 2263, 308.05, -7.0575, -79.0956),
(672, '061111', 'San Silvestre de Cochan', 'San Miguel', 'Cajamarca', 4449, 131.62, -6.9778, -78.775),
(673, '061112', 'Tongod', 'San Miguel', 'Cajamarca', 4900, 163.89, -6.7631, -78.8236),
(674, '061113', 'Union Agua Blanca', 'San Miguel', 'Cajamarca', 3577, 171.71, -7.0447, -79.06),
(675, '061201', 'San Pablo', 'San Pablo', 'Cajamarca', 13586, 197.92, -7.1181, -78.8231),
(676, '061202', 'San Bernardino', 'San Pablo', 'Cajamarca', 4830, 167.12, -7.1681, -78.8311),
(677, '061203', 'San Luis', 'San Pablo', 'Cajamarca', 1255, 42.88, -7.1583, -78.87),
(678, '061204', 'Tumbaden', 'San Pablo', 'Cajamarca', 3590, 264.37, -7.0203, -78.7403),
(679, '061301', 'Santa Cruz', 'Santa Cruz', 'Cajamarca', 12431, 102.51, -6.6267, -78.9464),
(680, '061302', 'Andabamba', 'Santa Cruz', 'Cajamarca', 1494, 7.61, -6.6628, -78.8194),
(681, '061303', 'Catache', 'Santa Cruz', 'Cajamarca', 10048, 609.16, -6.6753, -79.0325),
(682, '061304', 'Chancaybaños', 'Santa Cruz', 'Cajamarca', 3899, 120.04, -6.5764, -78.8681),
(683, '061305', 'La Esperanza', 'Santa Cruz', 'Cajamarca', 2560, 59.7, -6.5931, -78.895),
(684, '061306', 'Ninabamba', 'Santa Cruz', 'Cajamarca', 2759, 60.04, -6.6497, -78.7894),
(685, '061307', 'Pulan', 'Santa Cruz', 'Cajamarca', 4438, 155.67, -6.7397, -78.9231),
(686, '061308', 'Saucepampa', 'Santa Cruz', 'Cajamarca', 1848, 31.58, -6.6928, -78.9183),
(687, '061309', 'Sexi', 'Santa Cruz', 'Cajamarca', 571, 192.87, -6.5636, -79.0514),
(688, '061310', 'Uticyacu', 'Santa Cruz', 'Cajamarca', 1606, 43.38, -6.6064, -78.7972),
(689, '061311', 'Yauyucan', 'Santa Cruz', 'Cajamarca', 3610, 35.37, -6.6783, -78.82),
(690, '070101', 'Callao', 'Callao', 'Callao', 410795, 45.65, -12.0603, -77.1492),
(691, '070102', 'Bellavista', 'Callao', 'Callao', 72625, 4.56, -12.0625, -77.1317),
(692, '070103', 'Carmen de La Legua', 'Callao', 'Callao', 40833, 2.12, -12.0461, -77.0969),
(693, '070104', 'La Perla', 'Callao', 'Callao', 60011, 2.75, -12.0711, -77.1211),
(694, '070105', 'La Punta', 'Callao', 'Callao', 3184, 18.38, -12.0717, -77.1692),
(695, '070106', 'Ventanilla', 'Callao', 'Callao', 402038, 69.93, -11.8989, -77.1422),
(696, '070107', 'Mi Peru', 'Callao', 'Callao', 63542, 2.52, -11.855, -77.125),
(697, '080101', 'Cusco', 'Cusco', 'Cusco', 121667, 116.22, -13.5153, -71.98),
(698, '080102', 'Ccorca', 'Cusco', 'Cusco', 2483, 188.56, -13.5842, -72.0594),
(699, '080103', 'Poroy', 'Cusco', 'Cusco', 8020, 14.96, -13.4969, -72.0425),
(700, '080104', 'San Jeronimo', 'Cusco', 'Cusco', 48224, 103.34, -13.5439, -71.8872),
(701, '080105', 'San Sebastian', 'Cusco', 'Cusco', 118312, 89.44, -13.5311, -71.9333),
(702, '080106', 'Santiago', 'Cusco', 'Cusco', 91838, 69.72, -13.5272, -71.9842),
(703, '080107', 'Saylla', 'Cusco', 'Cusco', 5599, 28.38, -13.5703, -71.8264),
(704, '080108', 'Wanchaq', 'Cusco', 'Cusco', 65188, 6.38, -13.5253, -71.9656),
(705, '080201', 'Acomayo', 'Acomayo', 'Cusco', 5627, 141.27, -13.9189, -71.685),
(706, '080202', 'Acopia', 'Acomayo', 'Cusco', 2336, 91.72, -14.0581, -71.4931),
(707, '080203', 'Acos', 'Acomayo', 'Cusco', 2286, 137.55, -13.9506, -71.7383),
(708, '080204', 'Mosoc Llacta', 'Acomayo', 'Cusco', 2321, 43.61, -14.1203, -71.4733),
(709, '080205', 'Pomacanchi', 'Acomayo', 'Cusco', 9092, 275.56, -14.035, -71.5714),
(710, '080206', 'Rondocan', 'Acomayo', 'Cusco', 2281, 180.22, -13.7786, -71.7822),
(711, '080207', 'Sangarara', 'Acomayo', 'Cusco', 3733, 78.29, -13.9475, -71.6031),
(712, '080301', 'Anta', 'Anta', 'Cusco', 16833, 202.58, -13.4636, -72.1469),
(713, '080302', 'Ancahuasi', 'Anta', 'Cusco', 7015, 123.58, -13.4575, -72.2944),
(714, '080303', 'Cachimayo', 'Anta', 'Cusco', 2274, 43.28, -13.4775, -72.0728),
(715, '080304', 'Chinchaypujio', 'Anta', 'Cusco', 4434, 390.58, -13.6294, -72.2339),
(716, '080305', 'Huarocondo', 'Anta', 'Cusco', 5875, 228.62, -13.4131, -72.2086),
(717, '080306', 'Limatambo', 'Anta', 'Cusco', 9813, 512.92, -13.4808, -72.4458),
(718, '080307', 'Mollepata', 'Anta', 'Cusco', 2674, 284.48, -13.5078, -72.5353),
(719, '080308', 'Pucyura', 'Anta', 'Cusco', 4242, 37.75, -13.4803, -72.1119),
(720, '080309', 'Zurite', 'Anta', 'Cusco', 3714, 52.33, -13.4556, -72.2558),
(721, '080401', 'Calca', 'Calca', 'Cusco', 23824, 311.01, -13.3231, -71.9578),
(722, '080402', 'Coya', 'Calca', 'Cusco', 4034, 71.43, -13.3867, -71.9011),
(723, '080403', 'Lamay', 'Calca', 'Cusco', 5821, 94.22, -13.3642, -71.9228),
(724, '080404', 'Lares', 'Calca', 'Cusco', 7227, 527.26, -13.1058, -72.0472),
(725, '080405', 'Pisac', 'Calca', 'Cusco', 10285, 148.25, -13.4217, -71.85),
(726, '080406', 'San Salvador', 'Calca', 'Cusco', 5674, 128.07, -13.4936, -71.78),
(727, '080407', 'Taray', 'Calca', 'Cusco', 4745, 53.78, -13.4278, -71.8689),
(728, '080408', 'Yanatile', 'Calca', 'Cusco', 13588, 3080.47, -12.7008, -72.2322),
(729, '080501', 'Yanaoca', 'Canas', 'Cusco', 10178, 292.97, -14.22, -71.4317),
(730, '080502', 'Checca', 'Canas', 'Cusco', 6315, 503.76, -14.4733, -71.3964),
(731, '080503', 'Kunturkanki', 'Canas', 'Cusco', 5781, 376.19, -14.5331, -71.3064),
(732, '080504', 'Langui', 'Canas', 'Cusco', 2567, 187.1, -14.4317, -71.2744),
(733, '080505', 'Layo', 'Canas', 'Cusco', 6447, 452.56, -14.4942, -71.1556),
(734, '080506', 'Pampamarca', 'Canas', 'Cusco', 2075, 29.91, -14.1453, -71.4603),
(735, '080507', 'Quehue', 'Canas', 'Cusco', 3578, 143.46, -14.38, -71.455),
(736, '080508', 'Tupac Amaru', 'Canas', 'Cusco', 2961, 117.81, -14.165, -71.4794),
(737, '080601', 'Sicuani', 'Canchis', 'Cusco', 60903, 645.88, -14.2711, -71.2289),
(738, '080602', 'Checacupe', 'Canchis', 'Cusco', 4984, 962.34, -14.0267, -71.4533),
(739, '080603', 'Combapata', 'Canchis', 'Cusco', 5432, 182.5, -14.1008, -71.4308),
(740, '080604', 'Marangani', 'Canchis', 'Cusco', 11287, 432.65, -14.3564, -71.1683),
(741, '080605', 'Pitumarca', 'Canchis', 'Cusco', 7616, 1117.54, -13.9778, -71.4147),
(742, '080606', 'San Pablo', 'Canchis', 'Cusco', 4557, 524.06, -14.2033, -71.3178),
(743, '080607', 'San Pedro', 'Canchis', 'Cusco', 2773, 54.91, -14.1867, -71.3422),
(744, '080608', 'Tinta', 'Canchis', 'Cusco', 5642, 79.39, -14.1447, -71.4067),
(745, '080701', 'Santo Tomas', 'Chumbivilcas', 'Cusco', 26992, 1924.08, -14.4503, -72.0833),
(746, '080702', 'Capacmarca', 'Chumbivilcas', 'Cusco', 4620, 271.81, -14.0078, -72.0008),
(747, '080703', 'Chamaca', 'Chumbivilcas', 'Cusco', 8971, 674.19, -14.3028, -71.855),
(748, '080704', 'Colquemarca', 'Chumbivilcas', 'Cusco', 8630, 449.49, -14.2839, -72.0411),
(749, '080705', 'Livitaca', 'Chumbivilcas', 'Cusco', 13526, 758.2, -14.3131, -71.6892),
(750, '080706', 'Llusco', 'Chumbivilcas', 'Cusco', 7173, 315.42, -14.3383, -72.1144),
(751, '080707', 'Quiñota', 'Chumbivilcas', 'Cusco', 4990, 221.05, -14.3114, -72.1389),
(752, '080708', 'Velille', 'Chumbivilcas', 'Cusco', 8580, 756.84, -14.5106, -71.8864),
(753, '080801', 'Espinar', 'Espinar', 'Cusco', 33970, 747.78, -14.7931, -71.4133),
(754, '080802', 'Condoroma', 'Espinar', 'Cusco', 1431, 513.36, -15.3075, -71.1319),
(755, '080803', 'Coporaque', 'Espinar', 'Cusco', 18004, 1564.46, -14.7972, -71.5311),
(756, '080804', 'Ocoruro', 'Espinar', 'Cusco', 1588, 353.15, -15.0522, -71.1292),
(757, '080805', 'Pallpata', 'Espinar', 'Cusco', 5593, 815.56, -14.8894, -71.2103),
(758, '080806', 'Pichigua', 'Espinar', 'Cusco', 3629, 288.76, -14.6786, -71.41),
(759, '080807', 'Suyckutambo', 'Espinar', 'Cusco', 2781, 652.13, -15.0025, -71.6397),
(760, '080808', 'Alto Pichigua', 'Espinar', 'Cusco', 3171, 375.89, -14.7789, -71.2542),
(761, '080901', 'Santa Ana', 'La Convencion', 'Cusco', 35206, 359.4, -12.865, -72.6936),
(762, '080902', 'Echarate', 'La Convencion', 'Cusco', 37130, 19135.5, -12.7675, -72.5936),
(763, '080903', 'Huayopata', 'La Convencion', 'Cusco', 4539, 524.02, -13.0075, -72.5569),
(764, '080904', 'Maranura', 'La Convencion', 'Cusco', 5949, 150.3, -12.9619, -72.6653),
(765, '080905', 'Ocobamba', 'La Convencion', 'Cusco', 6852, 840.93, -12.8706, -72.4489),
(766, '080906', 'Quellouno', 'La Convencion', 'Cusco', 18320, 799.68, -12.6325, -72.5517),
(767, '080907', 'Kimbiri', 'La Convencion', 'Cusco', 14893, 905.69, -12.6097, -73.7811),
(768, '080908', 'Santa Teresa', 'La Convencion', 'Cusco', 6418, 1340.38, -13.1297, -72.5986),
(769, '080909', 'Vilcabamba', 'La Convencion', 'Cusco', 13869, 3318.86, -13.0514, -72.9436),
(770, '080910', 'Pichari', 'La Convencion', 'Cusco', 20538, 730.45, -12.5158, -73.8269),
(771, '080911', 'Inkawasi', 'La Convencion', 'Cusco', 5109, 1101.65, -13.0035, -72.5182),
(772, '080912', 'Villa Virgen', 'La Convencion', 'Cusco', 2414, 625.96, -13.0031, -73.5167),
(773, '080913', 'Villa Kintiarina', 'La Convencion', 'Cusco', 2151, 229, -12.9186, -73.5306),
(774, '080914', 'Megantoni', 'La Convencion', 'Cusco', 8441, 10708.2, -11.8047, -72.8594),
(775, '081001', 'Paruro', 'Paruro', 'Cusco', 3400, 153.42, -13.7617, -71.8478),
(776, '081002', 'Accha', 'Paruro', 'Cusco', 3839, 244.75, -13.9681, -71.8322),
(777, '081003', 'Ccapi', 'Paruro', 'Cusco', 3749, 334.85, -13.8533, -72.0803),
(778, '081004', 'Colcha', 'Paruro', 'Cusco', 1189, 139.98, -13.8511, -71.8028),
(779, '081005', 'Huanoquite', 'Paruro', 'Cusco', 5700, 362.67, -13.6828, -72.0147),
(780, '081006', 'Omacha', 'Paruro', 'Cusco', 7205, 436.21, -14.0706, -71.7386),
(781, '081007', 'Paccaritambo', 'Paruro', 'Cusco', 2076, 142.61, -13.7558, -71.9564),
(782, '081008', 'Pillpinto', 'Paruro', 'Cusco', 1254, 79.13, -13.9531, -71.7619),
(783, '081009', 'Yaurisque', 'Paruro', 'Cusco', 2522, 90.8, -13.6639, -71.9214),
(784, '081101', 'Paucartambo', 'Paucartambo', 'Cusco', 13491, 1079.23, -13.3189, -71.5997),
(785, '081102', 'Caicay', 'Paucartambo', 'Cusco', 2768, 110.72, -13.5969, -71.6961),
(786, '081103', 'Challabamba', 'Paucartambo', 'Cusco', 11389, 746.56, -13.2114, -71.6531),
(787, '081104', 'Colquepata', 'Paucartambo', 'Cusco', 10767, 467.68, -13.3594, -71.6731),
(788, '081105', 'Huancarani', 'Paucartambo', 'Cusco', 7774, 145.14, -13.5033, -71.6539),
(789, '081106', 'Kosñipata', 'Paucartambo', 'Cusco', 5692, 3745.68, -13.0025, -71.4225),
(790, '081201', 'Urcos', 'Quispicanchi', 'Cusco', 9412, 134.65, -13.6883, -71.6258),
(791, '081202', 'Andahuaylillas', 'Quispicanchi', 'Cusco', 5558, 84.6, -13.6733, -71.6767),
(792, '081203', 'Camanti', 'Quispicanchi', 'Cusco', 2094, 3174.93, -13.1936, -70.7478),
(793, '081204', 'Ccarhuayo', 'Quispicanchi', 'Cusco', 3173, 313.89, -13.5947, -71.3994),
(794, '081205', 'Ccatca', 'Quispicanchi', 'Cusco', 18128, 307.72, -13.6053, -71.5619),
(795, '081206', 'Cusipata', 'Quispicanchi', 'Cusco', 4795, 248.03, -13.9083, -71.5),
(796, '081207', 'Huaro', 'Quispicanchi', 'Cusco', 4508, 106.28, -13.6903, -71.6406),
(797, '081208', 'Lucre', 'Quispicanchi', 'Cusco', 4051, 118.78, -13.6356, -71.7378),
(798, '081209', 'Marcapata', 'Quispicanchi', 'Cusco', 4533, 1687.91, -13.515, -70.9458),
(799, '081210', 'Ocongate', 'Quispicanchi', 'Cusco', 15889, 952.66, -13.6286, -71.3864),
(800, '081211', 'Oropesa', 'Quispicanchi', 'Cusco', 7428, 74.44, -13.5958, -71.7642),
(801, '081212', 'Quiquijana', 'Quispicanchi', 'Cusco', 11100, 360.9, -13.8222, -71.5317),
(802, '081301', 'Urubamba', 'Urubamba', 'Cusco', 21424, 128.28, -13.3061, -72.1161),
(803, '081302', 'Chinchero', 'Urubamba', 'Cusco', 9896, 94.57, -13.3933, -72.0472),
(804, '081303', 'Huayllabamba', 'Urubamba', 'Cusco', 5332, 102.47, -13.3386, -72.0644),
(805, '081304', 'Machupicchu', 'Urubamba', 'Cusco', 8471, 271.44, -13.1533, -72.5242),
(806, '081305', 'Maras', 'Urubamba', 'Cusco', 5900, 131.85, -13.3367, -72.1572),
(807, '081306', 'Ollantaytambo', 'Urubamba', 'Cusco', 11347, 640.25, -13.2581, -72.2631),
(808, '081307', 'Yucay', 'Urubamba', 'Cusco', 3390, 70.57, -13.3194, -72.0861),
(809, '090101', 'Huancavelica', 'Huancavelica', 'Huancavelica', 41284, 514.1, -12.7869, -74.9756),
(810, '090102', 'Acobambilla', 'Huancavelica', 'Huancavelica', 4730, 758.32, -12.6675, -75.3239),
(811, '090103', 'Acoria', 'Huancavelica', 'Huancavelica', 37509, 535.1, -12.6433, -74.8664),
(812, '090104', 'Conayca', 'Huancavelica', 'Huancavelica', 1212, 37.79, -12.5194, -75.0078),
(813, '090105', 'Cuenca', 'Huancavelica', 'Huancavelica', 1942, 50.25, -12.4344, -75.0394),
(814, '090106', 'Huachocolpa', 'Huancavelica', 'Huancavelica', 2886, 336.28, -13.0319, -74.9497),
(815, '090107', 'Huayllahuara', 'Huancavelica', 'Huancavelica', 724, 38.8, -12.4072, -75.1797),
(816, '090108', 'Izcuchaca', 'Huancavelica', 'Huancavelica', 868, 12.19, -12.5011, -74.9961),
(817, '090109', 'Laria', 'Huancavelica', 'Huancavelica', 1453, 78.45, -12.5611, -75.0372),
(818, '090110', 'Manta', 'Huancavelica', 'Huancavelica', 1876, 154.14, -12.6217, -75.2122),
(819, '090111', 'Mariscal Caceres', 'Huancavelica', 'Huancavelica', 1058, 5.63, -12.5356, -74.9336),
(820, '090112', 'Moya', 'Huancavelica', 'Huancavelica', 2539, 94.08, -12.4231, -75.1539),
(821, '090113', 'Nuevo Occoro', 'Huancavelica', 'Huancavelica', 2728, 211.56, -12.595, -75.02),
(822, '090114', 'Palca', 'Huancavelica', 'Huancavelica', 3214, 82.08, -12.6589, -74.9833),
(823, '090115', 'Pilchaca', 'Huancavelica', 'Huancavelica', 487, 42.97, -12.4019, -75.0839),
(824, '090116', 'Vilca', 'Huancavelica', 'Huancavelica', 3060, 317.76, -12.4786, -75.1867),
(825, '090117', 'Yauli', 'Huancavelica', 'Huancavelica', 34557, 319.92, -12.7731, -74.8506),
(826, '090118', 'Ascension', 'Huancavelica', 'Huancavelica', 12711, 432.24, -12.7842, -74.9806),
(827, '090119', 'Huando', 'Huancavelica', 'Huancavelica', 7695, 193.9, -12.5653, -74.9469),
(828, '090201', 'Acobamba', 'Acobamba', 'Huancavelica', 10258, 123.02, -12.8406, -74.5692),
(829, '090202', 'Andabamba', 'Acobamba', 'Huancavelica', 5758, 81.85, -12.6953, -74.6242),
(830, '090203', 'Anta', 'Acobamba', 'Huancavelica', 9711, 91.36, -12.8139, -74.6364),
(831, '090204', 'Caja', 'Acobamba', 'Huancavelica', 2837, 82.39, -12.9183, -74.465),
(832, '090205', 'Marcas', 'Acobamba', 'Huancavelica', 2402, 155.87, -12.8894, -74.3994),
(833, '090206', 'Paucara', 'Acobamba', 'Huancavelica', 38507, 225.6, -12.7303, -74.6694),
(834, '090207', 'Pomacocha', 'Acobamba', 'Huancavelica', 3941, 53.66, -12.8733, -74.5306),
(835, '090208', 'Rosario', 'Acobamba', 'Huancavelica', 7985, 97.07, -12.7214, -74.5811),
(836, '090301', 'Lircay', 'Angaraes', 'Huancavelica', 25333, 818.84, -12.9842, -74.7203),
(837, '090302', 'Anchonga', 'Angaraes', 'Huancavelica', 8216, 72.4, -12.9122, -74.6922),
(838, '090303', 'Callanmarca', 'Angaraes', 'Huancavelica', 757, 26.02, -12.8678, -74.6228),
(839, '090304', 'Ccochaccasa', 'Angaraes', 'Huancavelica', 2665, 116.6, -12.9311, -74.7697),
(840, '090305', 'Chincho', 'Angaraes', 'Huancavelica', 3578, 182.7, -12.9783, -74.3689),
(841, '090306', 'Congalla', 'Angaraes', 'Huancavelica', 4165, 215.64, -12.9564, -74.4928),
(842, '090307', 'Huanca-Huanca', 'Angaraes', 'Huancavelica', 1773, 109.96, -12.9172, -74.6106),
(843, '090308', 'Huayllay Grande', 'Angaraes', 'Huancavelica', 2240, 33.28, -12.9417, -74.7011),
(844, '090309', 'Julcamarca', 'Angaraes', 'Huancavelica', 1801, 48.61, -13.015, -74.4453),
(845, '090310', 'San Antonio de Antaparco', 'Angaraes', 'Huancavelica', 7834, 33.42, -13.0775, -74.4119),
(846, '090311', 'Santo Tomas de Pata', 'Angaraes', 'Huancavelica', 2735, 133.57, -13.1136, -74.4233),
(847, '090312', 'Secclla', 'Angaraes', 'Huancavelica', 3885, 167.99, -13.0533, -74.4833),
(848, '090401', 'Castrovirreyna', 'Castrovirreyna', 'Huancavelica', 3265, 937.94, -13.2825, -75.3175),
(849, '090402', 'Arma', 'Castrovirreyna', 'Huancavelica', 1439, 304.85, -13.1256, -75.5419),
(850, '090403', 'Aurahua', 'Castrovirreyna', 'Huancavelica', 2275, 360.97, -13.035, -75.5708),
(851, '090404', 'Capillas', 'Castrovirreyna', 'Huancavelica', 1452, 397.95, -13.2931, -75.5425),
(852, '090405', 'Chupamarca', 'Castrovirreyna', 'Huancavelica', 1233, 373.78, -13.0383, -75.6097),
(853, '090406', 'Cocas', 'Castrovirreyna', 'Huancavelica', 916, 87.95, -13.2758, -75.3733),
(854, '090407', 'Huachos', 'Castrovirreyna', 'Huancavelica', 1676, 172.01, -13.22, -75.5328),
(855, '090408', 'Huamatambo', 'Castrovirreyna', 'Huancavelica', 379, 54.16, -13.0961, -75.6806),
(856, '090409', 'Mollepampa', 'Castrovirreyna', 'Huancavelica', 1695, 165.65, -13.31, -75.4092),
(857, '090410', 'San Juan', 'Castrovirreyna', 'Huancavelica', 440, 207.25, -13.2039, -75.6342),
(858, '090411', 'Santa Ana', 'Castrovirreyna', 'Huancavelica', 2195, 622.1, -13.0719, -75.1403),
(859, '090412', 'Tantara', 'Castrovirreyna', 'Huancavelica', 717, 113.01, -13.0756, -75.6475),
(860, '090413', 'Ticrapo', 'Castrovirreyna', 'Huancavelica', 1598, 187, -13.3844, -75.4319),
(861, '090501', 'Churcampa', 'Churcampa', 'Huancavelica', 5961, 135.48, -12.7403, -74.3869),
(862, '090502', 'Anco', 'Churcampa', 'Huancavelica', 6609, 150.18, -12.6864, -74.5872),
(863, '090503', 'Chinchihuasi', 'Churcampa', 'Huancavelica', 3410, 162.21, -12.5172, -74.5458),
(864, '090504', 'El Carmen', 'Churcampa', 'Huancavelica', 3050, 77.07, -12.7347, -74.4792),
(865, '090505', 'La Merced', 'Churcampa', 'Huancavelica', 1639, 73.32, -12.79, -74.3633),
(866, '090506', 'Locroja', 'Churcampa', 'Huancavelica', 4179, 92.48, -12.7389, -74.4419),
(867, '090507', 'Paucarbamba', 'Churcampa', 'Huancavelica', 7336, 97.72, -12.5542, -74.5314),
(868, '090508', 'San Miguel de Mayocc', 'Churcampa', 'Huancavelica', 1239, 38.43, -12.805, -74.3922),
(869, '090509', 'San Pedro de Coris', 'Churcampa', 'Huancavelica', 4451, 128.9, -12.5786, -74.4103),
(870, '090510', 'Pachamarca', 'Churcampa', 'Huancavelica', 2917, 156.29, -12.5161, -74.5261),
(871, '090511', 'Cosme', 'Churcampa', 'Huancavelica', 4141, 106.34, -12.5731, -74.6581),
(872, '090601', 'Huaytara', 'Huaytara', 'Huancavelica', 2108, 401.25, -13.605, -75.3525),
(873, '090602', 'Ayavi', 'Huaytara', 'Huancavelica', 597, 201.26, -13.7031, -75.3539),
(874, '090603', 'Cordova', 'Huaytara', 'Huancavelica', 2898, 104.59, -14.04, -75.1833),
(875, '090604', 'Huayacundo Arma', 'Huaytara', 'Huancavelica', 469, 12.81, -13.5339, -75.3111),
(876, '090605', 'Laramarca', 'Huaytara', 'Huancavelica', 823, 205.05, -13.9494, -75.0375),
(877, '090606', 'Ocoyo', 'Huaytara', 'Huancavelica', 2488, 154.71, -14.0086, -75.0225),
(878, '090607', 'Pilpichaca', 'Huaytara', 'Huancavelica', 3765, 2162.92, -13.3278, -75.0017),
(879, '090608', 'Querco', 'Huaytara', 'Huancavelica', 1044, 697.31, -13.9803, -74.9764),
(880, '090609', 'Quito-Arma', 'Huaytara', 'Huancavelica', 767, 222.32, -13.5289, -75.3294),
(881, '090610', 'San Antonio de Cusicancha', 'Huaytara', 'Huancavelica', 1676, 255.86, -13.5003, -75.2944),
(882, '090611', 'San Francisco de Sangayaico', 'Huaytara', 'Huancavelica', 557, 70.7, -13.7956, -75.25),
(883, '090612', 'San Isidro', 'Huaytara', 'Huancavelica', 1194, 174.95, -13.9569, -75.24),
(884, '090613', 'Santiago de Chocorvos', 'Huaytara', 'Huancavelica', 2842, 1150.2, -13.8272, -75.2578),
(885, '090614', 'Santiago de Quirahuara', 'Huaytara', 'Huancavelica', 658, 169.32, -14.0547, -74.9783),
(886, '090615', 'Santo Domingo de Capillas', 'Huaytara', 'Huancavelica', 982, 248.56, -13.7356, -75.245),
(887, '090616', 'Tambo', 'Huaytara', 'Huancavelica', 313, 226.58, -13.6894, -75.2758),
(888, '090701', 'Pampas', 'Tayacaja', 'Huancavelica', 9335, 109.07, -12.3956, -74.8672),
(889, '090702', 'Acostambo', 'Tayacaja', 'Huancavelica', 4110, 168.06, -12.3653, -75.0572),
(890, '090703', 'Acraquia', 'Tayacaja', 'Huancavelica', 5014, 110.27, -12.4097, -74.9031),
(891, '090704', 'Ahuaycha', 'Tayacaja', 'Huancavelica', 5619, 90.96, -12.4081, -74.8919),
(892, '090705', 'Colcabamba', 'Tayacaja', 'Huancavelica', 12376, 312.18, -12.4114, -74.6814),
(893, '090706', 'Daniel Hernandez', 'Tayacaja', 'Huancavelica', 10381, 106.92, -12.3936, -74.8625),
(894, '090707', 'Huachocolpa', 'Tayacaja', 'Huancavelica', 6534, 292, -12.0486, -74.5953),
(895, '090709', 'Huaribamba', 'Tayacaja', 'Huancavelica', 4472, 150.69, -12.2794, -74.9406),
(896, '090710', 'Ñahuimpuquio', 'Tayacaja', 'Huancavelica', 1876, 67.39, -12.3322, -75.0708),
(897, '090711', 'Pazos', 'Tayacaja', 'Huancavelica', 7281, 227.86, -12.2589, -75.07),
(898, '090713', 'Quishuar', 'Tayacaja', 'Huancavelica', 904, 31.54, -12.2408, -74.7792),
(899, '090714', 'Salcabamba', 'Tayacaja', 'Huancavelica', 4584, 192.52, -12.2011, -74.7825),
(900, '090715', 'Salcahuasi', 'Tayacaja', 'Huancavelica', 3294, 117.98, -12.1031, -74.7508),
(901, '090716', 'San Marcos de Rocchac', 'Tayacaja', 'Huancavelica', 2856, 281.71, -12.0939, -74.8656),
(902, '090717', 'Surcubamba', 'Tayacaja', 'Huancavelica', 4926, 271.75, -12.1169, -74.63),
(903, '090718', 'Tintay Puncu', 'Tayacaja', 'Huancavelica', 9140, 257.73, -12.1531, -74.5456),
(904, '090719', 'Quichuas', 'Tayacaja', 'Huancavelica', 4145, 114.16, -12.4681, -74.7847),
(905, '090720', 'Andaymarca', 'Tayacaja', 'Huancavelica', 2283, 144.94, -12.3147, -74.6364),
(906, '090721', 'Roble', 'Tayacaja', 'Huancavelica', 4440, 186.03, -12.2169, -74.49),
(907, '090722', 'Pichos', 'Tayacaja', 'Huancavelica', 3501, 144.6, -12.2347, -74.9444),
(908, '090723', 'Santiago de Túcuma', 'Tayacaja', 'Huancavelica', 2117, 34.02, -12.3122, -74.9169),
(909, '100101', 'Huanuco', 'Huanuco', 'Huanuco', 88542, 126.23, -9.9269, -76.2403),
(910, '100102', 'Amarilis', 'Huanuco', 'Huanuco', 79545, 131.68, -9.9456, -76.2417),
(911, '100103', 'Chinchao', 'Huanuco', 'Huanuco', 14099, 795.78, -9.8019, -76.0689),
(912, '100104', 'Churubamba', 'Huanuco', 'Huanuco', 28908, 507.31, -9.8258, -76.1375),
(913, '100105', 'Margos', 'Huanuco', 'Huanuco', 10021, 206.57, -10.0061, -76.5214),
(914, '100106', 'Quisqui', 'Huanuco', 'Huanuco', 8392, 172.74, -9.9231, -76.3561),
(915, '100107', 'San Francisco de Cayran', 'Huanuco', 'Huanuco', 5575, 146.24, -9.9822, -76.2847),
(916, '100108', 'San Pedro de Chaulan', 'Huanuco', 'Huanuco', 8121, 266.36, -10.0581, -76.4822),
(917, '100109', 'Santa Maria del Valle', 'Huanuco', 'Huanuco', 20984, 446.63, -9.8628, -76.1703),
(918, '100110', 'Yarumayo', 'Huanuco', 'Huanuco', 3139, 60.94, -10.0022, -76.4683),
(919, '100111', 'Pillco Marca', 'Huanuco', 'Huanuco', 28110, 76.61, -9.9578, -76.2492),
(920, '100112', 'Yacus', 'Huanuco', 'Huanuco', 7390, 69.9, -9.9858, -76.5044),
(921, '100113', 'San Pablo de Pillao', 'Huanuco', 'Huanuco', 12223, 584.6, -9.7894, -75.9986),
(922, '100201', 'Ambo', 'Ambo', 'Huanuco', 17328, 288.8, -10.1294, -76.2047),
(923, '100202', 'Cayna', 'Ambo', 'Huanuco', 3377, 166.05, -10.2717, -76.3872),
(924, '100203', 'Colpas', 'Ambo', 'Huanuco', 2388, 174.34, -10.2672, -76.4144),
(925, '100204', 'Conchamarca', 'Ambo', 'Huanuco', 6938, 104.81, -10.0367, -76.2156),
(926, '100205', 'Huacar', 'Ambo', 'Huanuco', 7642, 234.23, -10.1614, -76.2356),
(927, '100206', 'San Francisco', 'Ambo', 'Huanuco', 3233, 121.21, -10.3419, -76.2914),
(928, '100207', 'San Rafael', 'Ambo', 'Huanuco', 12278, 443.63, -10.3403, -76.1828),
(929, '100208', 'Tomay Kichwa', 'Ambo', 'Huanuco', 3857, 42.11, -10.0789, -76.2131),
(930, '100301', 'La Union', 'Dos de Mayo', 'Huanuco', 6302, 167.1, -9.8278, -76.8003),
(931, '100307', 'Chuquis', 'Dos de Mayo', 'Huanuco', 6030, 151.25, -9.6775, -76.7033),
(932, '100311', 'Marias', 'Dos de Mayo', 'Huanuco', 9957, 637.24, -9.6061, -76.705),
(933, '100313', 'Pachas', 'Dos de Mayo', 'Huanuco', 13450, 264.74, -9.7061, -76.7722),
(934, '100316', 'Quivilla', 'Dos de Mayo', 'Huanuco', 3296, 33.6, -9.5967, -76.7253),
(935, '100317', 'Ripan', 'Dos de Mayo', 'Huanuco', 7150, 75.04, -9.8261, -76.8033),
(936, '100321', 'Shunqui', 'Dos de Mayo', 'Huanuco', 2478, 32.26, -9.7311, -76.7833),
(937, '100322', 'Sillapata', 'Dos de Mayo', 'Huanuco', 2430, 70.53, -9.7581, -76.7742),
(938, '100323', 'Yanas', 'Dos de Mayo', 'Huanuco', 3339, 36.31, -9.7144, -76.7489),
(939, '100401', 'Huacaybamba', 'Huacaybamba', 'Huanuco', 7290, 586.21, -9.0372, -76.9519),
(940, '100402', 'Canchabamba', 'Huacaybamba', 'Huanuco', 3324, 186.83, -8.8836, -77.1228),
(941, '100403', 'Cochabamba', 'Huacaybamba', 'Huanuco', 3650, 684.87, -9.0922, -76.835),
(942, '100404', 'Pinra', 'Huacaybamba', 'Huanuco', 8974, 283.71, -8.9239, -77.0125),
(943, '100501', 'Llata', 'Huamalies', 'Huanuco', 15299, 411.35, -9.5506, -76.8156),
(944, '100502', 'Arancay', 'Huamalies', 'Huanuco', 1603, 158.33, -9.1708, -76.7483),
(945, '100503', 'Chavin de Pariarca', 'Huamalies', 'Huanuco', 3721, 89.25, -9.4231, -76.7692),
(946, '100504', 'Jacas Grande', 'Huamalies', 'Huanuco', 5998, 236.99, -9.5397, -76.7358),
(947, '100505', 'Jircan', 'Huamalies', 'Huanuco', 3739, 84.81, -9.2472, -76.7161),
(948, '100506', 'Miraflores', 'Huamalies', 'Huanuco', 3592, 96.74, -9.4928, -76.8189),
(949, '100507', 'Monzon', 'Huamalies', 'Huanuco', 29863, 1521.39, -9.2842, -76.3978),
(950, '100508', 'Punchao', 'Huamalies', 'Huanuco', 2599, 42.24, -9.4614, -76.8192),
(951, '100509', 'Puños', 'Huamalies', 'Huanuco', 4316, 101.75, -9.5, -76.885),
(952, '100510', 'Singa', 'Huamalies', 'Huanuco', 3342, 151.7, -9.3881, -76.8125),
(953, '100511', 'Tantamayo', 'Huamalies', 'Huanuco', 3035, 249.95, -9.3928, -76.7183),
(954, '100601', 'Rupa-Rupa', 'Leoncio Prado', 'Huanuco', 51713, 266.52, -9.2944, -75.9969),
(955, '100602', 'Daniel Alomias Robles', 'Leoncio Prado', 'Huanuco', 8011, 702.46, -9.1839, -75.9406),
(956, '100603', 'Hermilio Valdizan', 'Leoncio Prado', 'Huanuco', 4065, 112.2, -9.1525, -75.8261),
(957, '100604', 'Jose Crespo y Castillo', 'Leoncio Prado', 'Huanuco', 25403, 2120.66, -8.9319, -76.1147),
(958, '100605', 'Luyando', 'Leoncio Prado', 'Huanuco', 10078, 100.32, -9.2469, -75.9919),
(959, '100606', 'Mariano Damaso Beraun', 'Leoncio Prado', 'Huanuco', 9433, 766.27, -9.4164, -75.9661),
(960, '100607', 'Pucayacu', 'Leoncio Prado', 'Huanuco', 4790, 768.35, -8.7492, -76.1253),
(961, '100608', 'Castillo Grande', 'Leoncio Prado', 'Huanuco', 13409, 106.11, -9.2792, -76.0117),
(962, '100609', 'Pueblo Nuevo', 'Leoncio Prado', 'Huanuco', 5745, 320.38, -9.0089, -76.0714),
(963, '100610', 'Santo Domingo de Anda', 'Leoncio Prado', 'Huanuco', 3767, 283.54, -9.0089, -76.0714),
(964, '100701', 'Huacrachuco', 'Marañon', 'Huanuco', 15942, 704.63, -8.6044, -77.1489),
(965, '100702', 'Cholon', 'Marañon', 'Huanuco', 10428, 2125.19, -8.6594, -76.8481),
(966, '100703', 'San Buenaventura', 'Marañon', 'Huanuco', 2744, 86.54, -8.7681, -77.1867),
(967, '100704', 'La Morada', 'Marañon', 'Huanuco', 1863, 878.94, -8.7933, -76.2497),
(968, '100705', 'Santa Rosa de Alto Yanajanca', 'Marañon', 'Huanuco', 2337, 1005.96, -8.6364, -76.3439),
(969, '100801', 'Panao', 'Pachitea', 'Huanuco', 25270, 1580.86, -9.8956, -75.9769),
(970, '100802', 'Chaglla', 'Pachitea', 'Huanuco', 14914, 1103.58, -9.8281, -75.9064),
(971, '100803', 'Molino', 'Pachitea', 'Huanuco', 15486, 235.5, -9.9119, -76.0175),
(972, '100804', 'Umari', 'Pachitea', 'Huanuco', 22098, 149.08, -9.8614, -76.0422),
(973, '100901', 'Puerto Inca', 'Puerto Inca', 'Huanuco', 7538, 2147.18, -9.3775, -74.9733),
(974, '100902', 'Codo del Pozuzo', 'Puerto Inca', 'Huanuco', 6630, 3322.04, -9.6758, -75.4533),
(975, '100903', 'Honoria', 'Puerto Inca', 'Huanuco', 6330, 798.05, -8.7694, -74.7089),
(976, '100904', 'Tournavista', 'Puerto Inca', 'Huanuco', 4559, 2228.46, -8.9289, -74.7053),
(977, '100905', 'Yuyapichis', 'Puerto Inca', 'Huanuco', 6616, 1845.62, -9.6297, -74.9744),
(978, '101001', 'Jesus', 'Lauricocha', 'Huanuco', 5712, 449.9, -10.0803, -76.6303),
(979, '101002', 'Baños', 'Lauricocha', 'Huanuco', 7184, 152.66, -10.0769, -76.7356),
(980, '101003', 'Jivia', 'Lauricocha', 'Huanuco', 2925, 61.31, -10.0236, -76.6811),
(981, '101004', 'Queropalca', 'Lauricocha', 'Huanuco', 3090, 131.15, -10.1811, -76.8042),
(982, '101005', 'Rondos', 'Lauricocha', 'Huanuco', 7687, 169.42, -9.9836, -76.6889),
(983, '101006', 'San Francisco de Asis', 'Lauricocha', 'Huanuco', 2126, 84.3, -9.9772, -76.6758),
(984, '101007', 'San Miguel de Cauri', 'Lauricocha', 'Huanuco', 10381, 811.75, -10.1431, -76.625),
(985, '101101', 'Chavinillo', 'Yarowilca', 'Huanuco', 5943, 205.16, -9.8447, -76.6236),
(986, '101102', 'Cahuac', 'Yarowilca', 'Huanuco', 4687, 29.5, -9.8494, -76.6319),
(987, '101103', 'Chacabamba', 'Yarowilca', 'Huanuco', 3760, 16.53, -9.9014, -76.6097),
(988, '101104', 'Aparicio Pomares', 'Yarowilca', 'Huanuco', 5488, 183.14, -9.7486, -76.6478),
(989, '101105', 'Jacas Chico', 'Yarowilca', 'Huanuco', 2038, 36.16, -9.8872, -76.5017),
(990, '101106', 'Obas', 'Yarowilca', 'Huanuco', 5435, 123.16, -9.7953, -76.6658),
(991, '101107', 'Pampamarca', 'Yarowilca', 'Huanuco', 2039, 72.68, -9.7061, -76.7028),
(992, '101108', 'Choras', 'Yarowilca', 'Huanuco', 3665, 61.14, -9.9108, -76.6036),
(993, '110101', 'Ica', 'Ica', 'Ica', 134249, 887.51, -14.0678, -75.7319),
(994, '110102', 'La Tinguiña', 'Ica', 'Ica', 36909, 98.34, -14.035, -75.7092),
(995, '110103', 'Los Aquijes', 'Ica', 'Ica', 19987, 90.92, -14.0978, -75.6911),
(996, '110104', 'Ocucaje', 'Ica', 'Ica', 3816, 1417.12, -14.3433, -75.6608),
(997, '110105', 'Pachacutec', 'Ica', 'Ica', 6949, 34.47, -14.1528, -75.6925),
(998, '110106', 'Parcona', 'Ica', 'Ica', 56336, 17.39, -14.0453, -75.7058),
(999, '110107', 'Pueblo Nuevo', 'Ica', 'Ica', 4843, 33.12, -14.1275, -75.7031),
(1000, '110108', 'Salas', 'Ica', 'Ica', 24557, 651.72, -13.9861, -75.7733),
(1001, '110109', 'San Jose de los Molinos', 'Ica', 'Ica', 6360, 363.2, -13.9283, -75.6669),
(1002, '110110', 'San Juan Bautista', 'Ica', 'Ica', 15214, 26.39, -14.0114, -75.7372),
(1003, '110111', 'Santiago', 'Ica', 'Ica', 30313, 2783.73, -14.1922, -75.7142),
(1004, '110112', 'Subtanjalla', 'Ica', 'Ica', 29063, 193.97, -14.0194, -75.7597),
(1005, '110113', 'Tate', 'Ica', 'Ica', 4719, 7.07, -14.1528, -75.7092),
(1006, '110114', 'Yauca del Rosario', 'Ica', 'Ica', 972, 1289.1, -14.1014, -75.4783),
(1007, '110201', 'Chincha Alta', 'Chincha', 'Ica', 65322, 238.34, -13.42, -76.1356),
(1008, '110202', 'Alto Laran', 'Chincha', 'Ica', 7663, 298.83, -13.4444, -76.1067),
(1009, '110203', 'Chavin', 'Chincha', 'Ica', 1470, 426.17, -13.0789, -75.9119),
(1010, '110204', 'Chincha Baja', 'Chincha', 'Ica', 12536, 72.52, -13.4597, -76.1647),
(1011, '110205', 'El Carmen', 'Chincha', 'Ica', 13734, 789.9, -13.5019, -76.0536),
(1012, '110206', 'Grocio Prado', 'Chincha', 'Ica', 24910, 190.53, -13.3986, -76.1592),
(1013, '110207', 'Pueblo Nuevo', 'Chincha', 'Ica', 63297, 209.45, -13.4019, -76.1269),
(1014, '110208', 'San Juan de Yanac', 'Chincha', 'Ica', 269, 500.4, -13.2108, -75.7861),
(1015, '110209', 'San Pedro de Huacarpana', 'Chincha', 'Ica', 1700, 222.45, -13.0492, -75.6483),
(1016, '110210', 'Sunampe', 'Chincha', 'Ica', 28435, 16.76, -13.4269, -76.1647),
(1017, '110211', 'Tambo de Mora', 'Chincha', 'Ica', 5110, 22, -13.4592, -76.1839),
(1018, '110301', 'Nazca', 'Nazca', 'Ica', 27249, 1252.25, -14.8328, -74.9361),
(1019, '110302', 'Changuillo', 'Nazca', 'Ica', 1457, 946.94, -14.6653, -75.2253),
(1020, '110303', 'El Ingenio', 'Nazca', 'Ica', 2697, 552.39, -14.6464, -75.06),
(1021, '110304', 'Marcona', 'Nazca', 'Ica', 12510, 1955.2, -15.3619, -75.1681),
(1022, '110305', 'Vista Alegre', 'Nazca', 'Ica', 15935, 527.3, -14.8453, -74.9469),
(1023, '110401', 'Palpa', 'Palpa', 'Ica', 7279, 147.44, -14.5339, -75.1839),
(1024, '110402', 'Llipata', 'Palpa', 'Ica', 1516, 186.18, -14.5636, -75.2078),
(1025, '110403', 'Rio Grande', 'Palpa', 'Ica', 2236, 315.52, -14.5194, -75.2006),
(1026, '110404', 'Santa Cruz', 'Palpa', 'Ica', 987, 255.7, -14.4914, -75.2639),
(1027, '110405', 'Tibillo', 'Palpa', 'Ica', 316, 328.04, -14.0931, -75.1728),
(1028, '110501', 'Pisco', 'Pisco', 'Ica', 54716, 24.56, -13.7086, -76.2075),
(1029, '110502', 'Huancano', 'Pisco', 'Ica', 1577, 905.14, -13.5992, -75.6203),
(1030, '110503', 'Humay', 'Pisco', 'Ica', 6041, 1112.96, -13.7222, -75.885),
(1031, '110504', 'Independencia', 'Pisco', 'Ica', 14928, 272.34, -13.6939, -76.0256),
(1032, '110505', 'Paracas', 'Pisco', 'Ica', 7390, 1420, -13.8428, -76.2503),
(1033, '110506', 'San Andres', 'Pisco', 'Ica', 13733, 39.45, -13.7311, -76.2211),
(1034, '110507', 'San Clemente', 'Pisco', 'Ica', 22548, 127.22, -13.6839, -76.1592),
(1035, '110508', 'Tupac Amaru Inca', 'Pisco', 'Ica', 18366, 55.48, -13.7119, -76.1492),
(1036, '120101', 'Huancayo', 'Huancayo', 'Junin', 119025, 237.55, -12.0703, -75.2139),
(1037, '120104', 'Carhuacallanga', 'Huancayo', 'Junin', 1398, 13.78, -12.3544, -75.2033),
(1038, '120105', 'Chacapampa', 'Huancayo', 'Junin', 810, 120.72, -12.3444, -75.2472),
(1039, '120106', 'Chicche', 'Huancayo', 'Junin', 901, 45.92, -12.2961, -75.2964),
(1040, '120107', 'Chilca', 'Huancayo', 'Junin', 87993, 8.3, -12.0817, -75.2028),
(1041, '120108', 'Chongos Alto', 'Huancayo', 'Junin', 1339, 701.75, -12.3128, -75.2925),
(1042, '120111', 'Chupuro', 'Huancayo', 'Junin', 1752, 13.56, -12.1561, -75.245),
(1043, '120112', 'Colca', 'Huancayo', 'Junin', 2068, 113.25, -12.3169, -75.2258),
(1044, '120113', 'Cullhuas', 'Huancayo', 'Junin', 2204, 108.01, -12.2233, -75.1747),
(1045, '120114', 'El Tambo', 'Huancayo', 'Junin', 166163, 73.56, -12.055, -75.2206),
(1046, '120116', 'Huacrapuquio', 'Huancayo', 'Junin', 1274, 24.1, -12.1725, -75.2236),
(1047, '120117', 'Hualhuas', 'Huancayo', 'Junin', 4630, 24.82, -11.9692, -75.2536),
(1048, '120119', 'Huancan', 'Huancayo', 'Junin', 21744, 12, -12.1064, -75.2186),
(1049, '120120', 'Huasicancha', 'Huancayo', 'Junin', 842, 47.61, -12.3331, -75.2844),
(1050, '120121', 'Huayucachi', 'Huancayo', 'Junin', 8665, 13.13, -12.1367, -75.2247),
(1051, '120122', 'Ingenio', 'Huancayo', 'Junin', 2507, 53.29, -11.8903, -75.2686),
(1052, '120124', 'Pariahuanca', 'Huancayo', 'Junin', 5767, 617.5, -11.9792, -74.8967),
(1053, '120125', 'Pilcomayo', 'Huancayo', 'Junin', 17062, 20.18, -12.0497, -75.2528),
(1054, '120126', 'Pucara', 'Huancayo', 'Junin', 5008, 110.49, -12.1719, -75.1475),
(1055, '120127', 'Quichuay', 'Huancayo', 'Junin', 1745, 34.79, -11.8875, -75.2872),
(1056, '120128', 'Quilcas', 'Huancayo', 'Junin', 4268, 167.98, -11.9383, -75.2611),
(1057, '120129', 'San Agustin', 'Huancayo', 'Junin', 11955, 23.09, -11.9914, -75.2481),
(1058, '120130', 'San Jeronimo de Tunan', 'Huancayo', 'Junin', 10420, 20.99, -11.9483, -75.2856),
(1059, '120132', 'Saño', 'Huancayo', 'Junin', 4082, 11.59, -11.955, -75.2606),
(1060, '120133', 'Sapallanga', 'Huancayo', 'Junin', 12879, 119.02, -12.1403, -75.1597),
(1061, '120134', 'Sicaya', 'Huancayo', 'Junin', 8166, 42.73, -12.0125, -75.2833),
(1062, '120135', 'Santo Domingo de Acobamba', 'Huancayo', 'Junin', 7776, 778.02, -11.7689, -74.7953),
(1063, '120136', 'Viques', 'Huancayo', 'Junin', 2247, 3.57, -12.1603, -75.2342),
(1064, '120201', 'Concepcion', 'Concepcion', 'Junin', 15010, 18.29, -11.9181, -75.3161),
(1065, '120202', 'Aco', 'Concepcion', 'Junin', 1592, 37.8, -11.9594, -75.3636),
(1066, '120203', 'Andamarca', 'Concepcion', 'Junin', 4536, 694.9, -11.7319, -74.8058),
(1067, '120204', 'Chambara', 'Concepcion', 'Junin', 2882, 113.21, -12.0286, -75.3783),
(1068, '120205', 'Cochas', 'Concepcion', 'Junin', 1757, 165.05, -11.6597, -75.1033),
(1069, '120206', 'Comas', 'Concepcion', 'Junin', 6073, 825.29, -11.7183, -75.0839),
(1070, '120207', 'Heroinas Toledo', 'Concepcion', 'Junin', 1193, 25.83, -11.8353, -75.2911),
(1071, '120208', 'Manzanares', 'Concepcion', 'Junin', 1391, 20.58, -12.0217, -75.3489),
(1072, '120209', 'Mariscal Castilla', 'Concepcion', 'Junin', 1652, 743.84, -11.6158, -75.0942),
(1073, '120210', 'Matahuasi', 'Concepcion', 'Junin', 5171, 24.74, -11.8917, -75.3539),
(1074, '120211', 'Mito', 'Concepcion', 'Junin', 1369, 25.21, -11.9375, -75.3417),
(1075, '120212', 'Nueve de Julio', 'Concepcion', 'Junin', 1485, 7.28, -11.9019, -75.3217),
(1076, '120213', 'Orcotuna', 'Concepcion', 'Junin', 4168, 44.61, -11.9681, -75.3131),
(1077, '120214', 'San Jose de Quero', 'Concepcion', 'Junin', 6106, 314.8, -12.0856, -75.5383),
(1078, '120215', 'Santa Rosa de Ocopa', 'Concepcion', 'Junin', 2030, 13.91, -11.8769, -75.2944),
(1079, '120301', 'Chanchamayo', 'Chanchamayo', 'Junin', 24866, 919.72, -11.0558, -75.3292),
(1080, '120302', 'Perene', 'Chanchamayo', 'Junin', 77635, 1191.16, -10.9522, -75.2244),
(1081, '120303', 'Pichanaqui', 'Chanchamayo', 'Junin', 71598, 1496.59, -10.9303, -74.8728),
(1082, '120304', 'San Luis de Shuaro', 'Chanchamayo', 'Junin', 7395, 212.49, -10.8894, -75.2911),
(1083, '120305', 'San Ramon', 'Chanchamayo', 'Junin', 27630, 591.67, -11.1214, -75.3528),
(1084, '120306', 'Vitoc', 'Chanchamayo', 'Junin', 1734, 313.85, -11.2083, -75.3372);
INSERT INTO `ubigeo` (`id_ubigeo`, `cod_ubigeo`, `dto_ubigeo`, `prov_ubigeo`, `dpto_ubigeo`, `pob_ubigeo`, `sup_ubigeo`, `x_ubigeo`, `y_ubigeo`) VALUES
(1085, '120401', 'Jauja', 'Jauja', 'Junin', 14536, 10.1, -11.7761, -75.4992),
(1086, '120402', 'Acolla', 'Jauja', 'Junin', 7215, 122.4, -11.7317, -75.5489),
(1087, '120403', 'Apata', 'Jauja', 'Junin', 4084, 421.62, -11.8558, -75.3569),
(1088, '120404', 'Ataura', 'Jauja', 'Junin', 1155, 5.9, -11.8022, -75.4411),
(1089, '120405', 'Canchayllo', 'Jauja', 'Junin', 1658, 974.69, -11.8011, -75.72),
(1090, '120406', 'Curicaca', 'Jauja', 'Junin', 1645, 64.68, -11.7842, -75.6781),
(1091, '120407', 'El Mantaro', 'Jauja', 'Junin', 2562, 17.76, -11.8222, -75.3942),
(1092, '120408', 'Huamali', 'Jauja', 'Junin', 1809, 20.19, -11.8083, -75.4269),
(1093, '120409', 'Huaripampa', 'Jauja', 'Junin', 836, 14.19, -11.8086, -75.4739),
(1094, '120410', 'Huertas', 'Jauja', 'Junin', 1644, 11.82, -11.7686, -75.4769),
(1095, '120411', 'Janjaillo', 'Jauja', 'Junin', 681, 31.57, -11.7658, -75.6275),
(1096, '120412', 'Julcan', 'Jauja', 'Junin', 671, 24.78, -11.7608, -75.4392),
(1097, '120413', 'Leonor Ordoñez', 'Jauja', 'Junin', 1480, 20.34, -11.8633, -75.4169),
(1098, '120414', 'Llocllapampa', 'Jauja', 'Junin', 1001, 110.6, -11.8189, -75.6261),
(1099, '120415', 'Marco', 'Jauja', 'Junin', 1590, 28.8, -11.7419, -75.5639),
(1100, '120416', 'Masma', 'Jauja', 'Junin', 2065, 14.26, -11.7867, -75.4289),
(1101, '120417', 'Masma Chicche', 'Jauja', 'Junin', 757, 29.86, -11.7864, -75.38),
(1102, '120418', 'Molinos', 'Jauja', 'Junin', 1522, 312.17, -11.7378, -75.4467),
(1103, '120419', 'Monobamba', 'Jauja', 'Junin', 1055, 295.83, -11.3606, -75.3278),
(1104, '120420', 'Muqui', 'Jauja', 'Junin', 960, 11.74, -11.8342, -75.4369),
(1105, '120421', 'Muquiyauyo', 'Jauja', 'Junin', 2210, 19.86, -11.8147, -75.4581),
(1106, '120422', 'Paca', 'Jauja', 'Junin', 988, 34.22, -11.7117, -75.5189),
(1107, '120423', 'Paccha', 'Jauja', 'Junin', 1805, 90.86, -11.8553, -75.5111),
(1108, '120424', 'Pancan', 'Jauja', 'Junin', 1280, 10.89, -11.7503, -75.4883),
(1109, '120425', 'Parco', 'Jauja', 'Junin', 1152, 32.82, -11.8022, -75.5469),
(1110, '120426', 'Pomacancha', 'Jauja', 'Junin', 1975, 281.61, -11.7381, -75.6264),
(1111, '120427', 'Ricran', 'Jauja', 'Junin', 1567, 319.95, -11.5411, -75.5289),
(1112, '120428', 'San Lorenzo', 'Jauja', 'Junin', 2509, 22.15, -11.8472, -75.3842),
(1113, '120429', 'San Pedro de Chunan', 'Jauja', 'Junin', 839, 8.44, -11.7247, -75.4894),
(1114, '120430', 'Sausa', 'Jauja', 'Junin', 3081, 4.5, -11.7939, -75.4872),
(1115, '120431', 'Sincos', 'Jauja', 'Junin', 4912, 236.74, -11.8917, -75.3903),
(1116, '120432', 'Tunan Marca', 'Jauja', 'Junin', 1165, 30.07, -11.7269, -75.5731),
(1117, '120433', 'Yauli', 'Jauja', 'Junin', 1304, 93.15, -11.7117, -75.4725),
(1118, '120434', 'Yauyos', 'Jauja', 'Junin', 9360, 20.54, -11.7822, -75.4989),
(1119, '120501', 'Junin', 'Junin', 'Junin', 9492, 883.8, -11.1597, -75.9956),
(1120, '120502', 'Carhuamayo', 'Junin', 'Junin', 7768, 219.68, -10.9233, -76.0569),
(1121, '120503', 'Ondores', 'Junin', 'Junin', 1828, 254.46, -11.0878, -76.1486),
(1122, '120504', 'Ulcumayo', 'Junin', 'Junin', 5783, 1129.37, -10.9689, -75.8778),
(1123, '120601', 'Satipo', 'Satipo', 'Junin', 43554, 732.02, -11.2531, -74.6372),
(1124, '120602', 'Coviriali', 'Satipo', 'Junin', 6332, 145.13, -11.2906, -74.6283),
(1125, '120603', 'Llaylla', 'Satipo', 'Junin', 6417, 180.39, -11.3808, -74.5906),
(1126, '120604', 'Mazamari', 'Satipo', 'Junin', 65014, 2219.63, -11.4056, -74.7519),
(1127, '120605', 'Pampa Hermosa', 'Satipo', 'Junin', 10899, 566.82, -11.4056, -74.7519),
(1128, '120606', 'Pangoa', 'Satipo', 'Junin', 60587, 3679.4, -11.2086, -74.6597),
(1129, '120607', 'Rio Negro', 'Satipo', 'Junin', 29250, 714.98, -11.1469, -74.31),
(1130, '120608', 'Rio Tambo', 'Satipo', 'Junin', 61259, 10349.9, -11.2531, -74.6372),
(1131, '120609', 'Vizcatán del Ene', 'Satipo', 'Junin', 3573, 631.21, -12.2153, -74.0158),
(1132, '120701', 'Tarma', 'Tarma', 'Junin', 46130, 459.95, -11.4206, -75.6908),
(1133, '120702', 'Acobamba', 'Tarma', 'Junin', 13586, 97.84, -11.3528, -75.6592),
(1134, '120703', 'Huaricolca', 'Tarma', 'Junin', 3251, 162.31, -11.5089, -75.6514),
(1135, '120704', 'Huasahuasi', 'Tarma', 'Junin', 15398, 652.15, -11.2667, -75.6522),
(1136, '120705', 'La Union', 'Tarma', 'Junin', 3124, 140.4, -11.3756, -75.7547),
(1137, '120706', 'Palca', 'Tarma', 'Junin', 5585, 378.08, -11.3469, -75.5681),
(1138, '120707', 'Palcamayo', 'Tarma', 'Junin', 9573, 169.24, -11.2956, -75.7731),
(1139, '120708', 'San Pedro de Cajas', 'Tarma', 'Junin', 5669, 537.31, -11.2503, -75.8647),
(1140, '120709', 'Tapo', 'Tarma', 'Junin', 6073, 151.88, -11.3903, -75.5636),
(1141, '120801', 'La Oroya', 'Yauli', 'Junin', 12577, 388.42, -11.5206, -75.9014),
(1142, '120802', 'Chacapalpa', 'Yauli', 'Junin', 704, 183.06, -11.7328, -75.7556),
(1143, '120803', 'Huay-Huay', 'Yauli', 'Junin', 1474, 179.94, -11.7219, -75.9042),
(1144, '120804', 'Marcapomacocha', 'Yauli', 'Junin', 1297, 888.56, -11.4056, -76.3364),
(1145, '120805', 'Morococha', 'Yauli', 'Junin', 4262, 265.67, -11.5972, -76.14),
(1146, '120806', 'Paccha', 'Yauli', 'Junin', 1649, 323.69, -11.4794, -75.9669),
(1147, '120807', 'Santa Barbara de Carhuacayan', 'Yauli', 'Junin', 2374, 646.29, -11.2008, -76.2883),
(1148, '120808', 'Santa Rosa de Sacco', 'Yauli', 'Junin', 10413, 101.09, -11.5617, -75.95),
(1149, '120809', 'Suitucancha', 'Yauli', 'Junin', 1014, 216.47, -11.7875, -75.9358),
(1150, '120810', 'Yauli', 'Yauli', 'Junin', 5113, 424.16, -11.6672, -76.0883),
(1151, '120901', 'Chupaca', 'Chupaca', 'Junin', 22407, 21.7, -12.0625, -75.2897),
(1152, '120902', 'Ahuac', 'Chupaca', 'Junin', 5932, 70.44, -12.0789, -75.3197),
(1153, '120903', 'Chongos Bajo', 'Chupaca', 'Junin', 4006, 100.95, -12.1361, -75.2681),
(1154, '120904', 'Huachac', 'Chupaca', 'Junin', 4027, 22.01, -12.0225, -75.3436),
(1155, '120905', 'Huamancaca Chico', 'Chupaca', 'Junin', 6126, 9.4, -12.0797, -75.245),
(1156, '120906', 'San Juan de Yscos', 'Chupaca', 'Junin', 2123, 24.7, -12.1014, -75.2922),
(1157, '120907', 'San Juan de Jarpa', 'Chupaca', 'Junin', 3597, 137.02, -12.1239, -75.44),
(1158, '120908', 'Tres de Diciembre', 'Chupaca', 'Junin', 2111, 14.66, -12.1108, -75.2547),
(1159, '120909', 'Yanacancha', 'Chupaca', 'Junin', 3547, 743.4, -12.2008, -75.3864),
(1160, '130101', 'Trujillo', 'Trujillo', 'La Libertad', 329127, 39.36, -8.1094, -79.0333),
(1161, '130102', 'El Porvenir', 'Trujillo', 'La Libertad', 196333, 36.7, -8.0819, -79.0025),
(1162, '130103', 'Florencia de Mora', 'Trujillo', 'La Libertad', 42978, 1.99, -8.0808, -79.0236),
(1163, '130104', 'Huanchaco', 'Trujillo', 'La Libertad', 72237, 332.14, -8.0814, -79.1214),
(1164, '130105', 'La Esperanza', 'Trujillo', 'La Libertad', 190881, 15.55, -8.0781, -79.0453),
(1165, '130106', 'Laredo', 'Trujillo', 'La Libertad', 36353, 335.44, -8.0911, -78.9611),
(1166, '130107', 'Moche', 'Trujillo', 'La Libertad', 35945, 25.25, -8.1722, -79.0111),
(1167, '130108', 'Poroto', 'Trujillo', 'La Libertad', 3127, 276.01, -8.0114, -78.7697),
(1168, '130109', 'Salaverry', 'Trujillo', 'La Libertad', 19095, 295.88, -8.2231, -78.9781),
(1169, '130110', 'Simbal', 'Trujillo', 'La Libertad', 4433, 390.55, -7.9767, -78.8147),
(1170, '130111', 'Victor Larco Herrera', 'Trujillo', 'La Libertad', 66607, 18.02, -8.1439, -79.0558),
(1171, '130201', 'Ascope', 'Ascope', 'La Libertad', 6676, 290.18, -7.7131, -79.1156),
(1172, '130202', 'Chicama', 'Ascope', 'La Libertad', 15796, 870.58, -7.8442, -79.1461),
(1173, '130203', 'Chocope', 'Ascope', 'La Libertad', 9342, 95.73, -7.7914, -79.2225),
(1174, '130204', 'Magdalena de Cao', 'Ascope', 'La Libertad', 3347, 163.01, -7.8767, -79.2947),
(1175, '130205', 'Paijan', 'Ascope', 'La Libertad', 26433, 79.69, -7.7319, -79.3019),
(1176, '130206', 'Razuri', 'Ascope', 'La Libertad', 9358, 317.3, -7.7025, -79.4406),
(1177, '130207', 'Santiago de Cao', 'Ascope', 'La Libertad', 19896, 154.55, -7.9608, -79.2392),
(1178, '130208', 'Casa Grande', 'Ascope', 'La Libertad', 31875, 687.6, -7.7442, -79.1869),
(1179, '130301', 'Bolivar', 'Bolivar', 'La Libertad', 4921, 740.58, -7.1547, -77.7044),
(1180, '130302', 'Bambamarca', 'Bolivar', 'La Libertad', 3992, 165.2, -7.4414, -77.6947),
(1181, '130303', 'Condormarca', 'Bolivar', 'La Libertad', 2047, 331.26, -7.5556, -77.5981),
(1182, '130304', 'Longotea', 'Bolivar', 'La Libertad', 2242, 192.88, -7.0428, -77.8744),
(1183, '130305', 'Uchumarca', 'Bolivar', 'La Libertad', 2762, 190.53, -7.0481, -77.8078),
(1184, '130306', 'Ucuncha', 'Bolivar', 'La Libertad', 787, 98.41, -7.1656, -77.8617),
(1185, '130401', 'Chepen', 'Chepen', 'La Libertad', 49927, 287.34, -7.2267, -79.4292),
(1186, '130402', 'Pacanga', 'Chepen', 'La Libertad', 24913, 583.93, -7.1731, -79.4867),
(1187, '130403', 'Pueblo Nuevo', 'Chepen', 'La Libertad', 15458, 271.16, -7.1883, -79.5142),
(1188, '130501', 'Julcan', 'Julcan', 'La Libertad', 11630, 208.49, -8.0439, -78.4881),
(1189, '130502', 'Calamarca', 'Julcan', 'La Libertad', 5604, 207.57, -8.1644, -78.4153),
(1190, '130503', 'Carabamba', 'Julcan', 'La Libertad', 6418, 254.28, -8.1108, -78.6092),
(1191, '130504', 'Huaso', 'Julcan', 'La Libertad', 7304, 431.05, -8.2233, -78.4158),
(1192, '130601', 'Otuzco', 'Otuzco', 'La Libertad', 28048, 444.13, -7.9022, -78.5669),
(1193, '130602', 'Agallpampa', 'Otuzco', 'La Libertad', 9997, 258.56, -7.9853, -78.5481),
(1194, '130604', 'Charat', 'Otuzco', 'La Libertad', 2814, 68.89, -7.8247, -78.4506),
(1195, '130605', 'Huaranchal', 'Otuzco', 'La Libertad', 5138, 149.65, -7.6908, -78.4444),
(1196, '130606', 'La Cuesta', 'Otuzco', 'La Libertad', 690, 39.25, -7.9189, -78.7081),
(1197, '130608', 'Mache', 'Otuzco', 'La Libertad', 3129, 37.32, -8.0303, -78.5367),
(1198, '130610', 'Paranday', 'Otuzco', 'La Libertad', 746, 21.46, -7.8847, -78.7119),
(1199, '130611', 'Salpo', 'Otuzco', 'La Libertad', 6142, 192.74, -8.0053, -78.6064),
(1200, '130613', 'Sinsicap', 'Otuzco', 'La Libertad', 8808, 452.95, -7.8517, -78.7561),
(1201, '130614', 'Usquil', 'Otuzco', 'La Libertad', 27986, 445.82, -7.8156, -78.4192),
(1202, '130701', 'San Pedro de Lloc', 'Pacasmayo', 'La Libertad', 17017, 697.01, -7.4278, -79.5036),
(1203, '130702', 'Guadalupe', 'Pacasmayo', 'La Libertad', 45031, 165.37, -7.2428, -79.4717),
(1204, '130703', 'Jequetepeque', 'Pacasmayo', 'La Libertad', 3997, 50.98, -7.3369, -79.5628),
(1205, '130704', 'Pacasmayo', 'Pacasmayo', 'La Libertad', 28458, 30.84, -7.4006, -79.5686),
(1206, '130705', 'San Jose', 'Pacasmayo', 'La Libertad', 12790, 181.06, -7.3494, -79.4569),
(1207, '130801', 'Tayabamba', 'Pataz', 'La Libertad', 15100, 339.13, -8.2769, -77.2986),
(1208, '130802', 'Buldibuyo', 'Pataz', 'La Libertad', 3823, 227.39, -8.1281, -77.3981),
(1209, '130803', 'Chillia', 'Pataz', 'La Libertad', 14060, 300.04, -8.1258, -77.5169),
(1210, '130804', 'Huancaspata', 'Pataz', 'La Libertad', 6532, 247.48, -8.4575, -77.3011),
(1211, '130805', 'Huaylillas', 'Pataz', 'La Libertad', 3691, 89.73, -8.1867, -77.3447),
(1212, '130806', 'Huayo', 'Pataz', 'La Libertad', 4527, 124.63, -8.0053, -77.5936),
(1213, '130807', 'Ongon', 'Pataz', 'La Libertad', 1817, 1394.89, -8.1689, -76.9664),
(1214, '130808', 'Parcoy', 'Pataz', 'La Libertad', 22442, 304.99, -8.035, -77.4817),
(1215, '130809', 'Pataz', 'Pataz', 'La Libertad', 9408, 467.44, -7.7856, -77.5942),
(1216, '130810', 'Pias', 'Pataz', 'La Libertad', 1293, 371.67, -7.8728, -77.5494),
(1217, '130811', 'Santiago de Challas', 'Pataz', 'La Libertad', 2520, 129.44, -8.4389, -77.3239),
(1218, '130812', 'Taurija', 'Pataz', 'La Libertad', 3067, 130.09, -8.3083, -77.425),
(1219, '130813', 'Urpay', 'Pataz', 'La Libertad', 2809, 99.61, -8.3478, -77.3917),
(1220, '130901', 'Huamachuco', 'Sanchez Carrion', 'La Libertad', 65142, 424.13, -7.8153, -78.0525),
(1221, '130902', 'Chugay', 'Sanchez Carrion', 'La Libertad', 19316, 416.31, -7.7825, -77.8694),
(1222, '130903', 'Cochorco', 'Sanchez Carrion', 'La Libertad', 9588, 258.04, -7.8058, -77.72),
(1223, '130904', 'Curgos', 'Sanchez Carrion', 'La Libertad', 8712, 99.5, -7.8592, -77.9431),
(1224, '130905', 'Marcabal', 'Sanchez Carrion', 'La Libertad', 17296, 229.57, -7.7053, -78.0306),
(1225, '130906', 'Sanagoran', 'Sanchez Carrion', 'La Libertad', 15424, 324.38, -7.7856, -78.1411),
(1226, '130907', 'Sarin', 'Sanchez Carrion', 'La Libertad', 10241, 340.08, -7.9122, -77.9044),
(1227, '130908', 'Sartimbamba', 'Sanchez Carrion', 'La Libertad', 14090, 394.37, -7.6994, -77.7411),
(1228, '131001', 'Santiago de Chuco', 'Santiago de Chuco', 'La Libertad', 20781, 1073.63, -8.1456, -78.1753),
(1229, '131002', 'Angasmarca', 'Santiago de Chuco', 'La Libertad', 7592, 153.45, -8.1331, -78.0547),
(1230, '131003', 'Cachicadan', 'Santiago de Chuco', 'La Libertad', 8320, 266.5, -8.0917, -78.1467),
(1231, '131004', 'Mollebamba', 'Santiago de Chuco', 'La Libertad', 2411, 69.69, -8.1706, -77.9764),
(1232, '131005', 'Mollepata', 'Santiago de Chuco', 'La Libertad', 2682, 71.2, -8.1908, -77.9558),
(1233, '131006', 'Quiruvilca', 'Santiago de Chuco', 'La Libertad', 14549, 549.14, -8.0025, -78.3108),
(1234, '131007', 'Santa Cruz de Chuca', 'Santiago de Chuco', 'La Libertad', 3222, 165.12, -8.1194, -78.1411),
(1235, '131008', 'Sitabamba', 'Santiago de Chuco', 'La Libertad', 3367, 310.23, -8.0231, -77.7314),
(1236, '131101', 'Cascas', 'Gran Chimu', 'La Libertad', 14386, 465.67, -7.4803, -78.8167),
(1237, '131102', 'Lucma', 'Gran Chimu', 'La Libertad', 7210, 280.38, -7.6406, -78.5511),
(1238, '131103', 'Compin', 'Gran Chimu', 'La Libertad', 2054, 300.25, -7.6981, -78.6256),
(1239, '131104', 'Sayapullo', 'Gran Chimu', 'La Libertad', 7994, 238.47, -7.5964, -78.4681),
(1240, '131201', 'Viru', 'Viru', 'La Libertad', 71152, 1072.95, -8.4156, -78.7511),
(1241, '131202', 'Chao', 'Viru', 'La Libertad', 42779, 1736.87, -8.5394, -78.6825),
(1242, '131203', 'Guadalupito', 'Viru', 'La Libertad', 10166, 404.72, -8.9519, -78.6258),
(1243, '140101', 'Chiclayo', 'Chiclayo', 'Lambayeque', 298467, 50.35, -6.7736, -79.8397),
(1244, '140102', 'Chongoyape', 'Chiclayo', 'Lambayeque', 18101, 712, -6.6428, -79.3842),
(1245, '140103', 'Eten', 'Chiclayo', 'Lambayeque', 10599, 84.78, -6.9072, -79.8644),
(1246, '140104', 'Eten Puerto', 'Chiclayo', 'Lambayeque', 2160, 14.48, -6.9269, -79.8664),
(1247, '140105', 'Jose Leonardo Ortiz', 'Chiclayo', 'Lambayeque', 199144, 28.22, -6.7592, -79.8408),
(1248, '140106', 'La Victoria', 'Chiclayo', 'Lambayeque', 93069, 29.36, -6.7883, -79.8367),
(1249, '140107', 'Lagunas', 'Chiclayo', 'Lambayeque', 10436, 429.27, -6.9911, -79.6244),
(1250, '140108', 'Monsefu', 'Chiclayo', 'Lambayeque', 32314, 44.94, -6.8786, -79.8714),
(1251, '140109', 'Nueva Arica', 'Chiclayo', 'Lambayeque', 2331, 208.63, -6.8731, -79.3386),
(1252, '140110', 'Oyotun', 'Chiclayo', 'Lambayeque', 9879, 455.4, -6.8458, -79.2981),
(1253, '140111', 'Picsi', 'Chiclayo', 'Lambayeque', 9965, 56.92, -6.7186, -79.7708),
(1254, '140112', 'Pimentel', 'Chiclayo', 'Lambayeque', 46075, 66.53, -6.8369, -79.9361),
(1255, '140113', 'Reque', 'Chiclayo', 'Lambayeque', 15386, 47.03, -6.8644, -79.8181),
(1256, '140114', 'Santa Rosa', 'Chiclayo', 'Lambayeque', 13030, 14.09, -6.88, -79.9231),
(1257, '140115', 'Saña', 'Chiclayo', 'Lambayeque', 12397, 313.9, -6.9233, -79.5839),
(1258, '140116', 'Cayalti', 'Chiclayo', 'Lambayeque', 15915, 162.86, -6.8917, -79.5617),
(1259, '140117', 'Patapo', 'Chiclayo', 'Lambayeque', 22843, 182.81, -6.7386, -79.6406),
(1260, '140118', 'Pomalca', 'Chiclayo', 'Lambayeque', 25831, 80.35, -6.7667, -79.7728),
(1261, '140119', 'Pucala', 'Chiclayo', 'Lambayeque', 8958, 175.81, -6.78, -79.6122),
(1262, '140120', 'Tuman', 'Chiclayo', 'Lambayeque', 30713, 130.34, -6.7478, -79.7017),
(1263, '140201', 'Ferreñafe', 'Ferreñafe', 'Lambayeque', 35919, 62.18, -6.6394, -79.7911),
(1264, '140202', 'Cañaris', 'Ferreñafe', 'Lambayeque', 14787, 284.88, -6.0447, -79.2647),
(1265, '140203', 'Incahuasi', 'Ferreñafe', 'Lambayeque', 15733, 443.91, -6.2372, -79.315),
(1266, '140204', 'Manuel Antonio Mesones Muro', 'Ferreñafe', 'Lambayeque', 4254, 200.57, -6.6456, -79.7361),
(1267, '140205', 'Pitipo', 'Ferreñafe', 'Lambayeque', 24214, 558.18, -6.5664, -79.7808),
(1268, '140206', 'Pueblo Nuevo', 'Ferreñafe', 'Lambayeque', 13619, 28.88, -6.6367, -79.7947),
(1269, '140301', 'Lambayeque', 'Lambayeque', 'Lambayeque', 79914, 330.73, -6.7006, -79.9072),
(1270, '140302', 'Chochope', 'Lambayeque', 'Lambayeque', 1122, 79.27, -6.1586, -79.6469),
(1271, '140303', 'Illimo', 'Lambayeque', 'Lambayeque', 9415, 24.37, -6.4733, -79.8531),
(1272, '140304', 'Jayanca', 'Lambayeque', 'Lambayeque', 18039, 680.96, -6.3881, -79.8211),
(1273, '140305', 'Mochumi', 'Lambayeque', 'Lambayeque', 19467, 103.7, -6.5467, -79.8647),
(1274, '140306', 'Morrope', 'Lambayeque', 'Lambayeque', 47455, 1041.66, -6.54, -80.0128),
(1275, '140307', 'Motupe', 'Lambayeque', 'Lambayeque', 26985, 557.37, -6.1536, -79.7153),
(1276, '140308', 'Olmos', 'Lambayeque', 'Lambayeque', 41587, 5583.47, -5.9883, -79.75),
(1277, '140309', 'Pacora', 'Lambayeque', 'Lambayeque', 7299, 87.79, -6.4275, -79.84),
(1278, '140310', 'Salas', 'Lambayeque', 'Lambayeque', 13056, 991.8, -6.2736, -79.6044),
(1279, '140311', 'San Jose', 'Lambayeque', 'Lambayeque', 16851, 46.73, -6.7703, -79.9686),
(1280, '140312', 'Tucume', 'Lambayeque', 'Lambayeque', 23288, 67, -6.5097, -79.8594),
(1281, '150101', 'Lima', 'Lima', 'Lima', 269858, 21.98, -12.0467, -77.0322),
(1282, '150102', 'Ancon', 'Lima', 'Lima', 42124, 285.45, -11.7764, -77.1703),
(1283, '150103', 'Ate', 'Lima', 'Lima', 672160, 77.72, -12.0256, -76.9242),
(1284, '150104', 'Barranco', 'Lima', 'Lima', 29424, 3.33, -12.1494, -77.0247),
(1285, '150105', 'Breña', 'Lima', 'Lima', 75882, 3.22, -12.0567, -77.0536),
(1286, '150106', 'Carabayllo', 'Lima', 'Lima', 322936, 303.31, -11.8583, -77.0419),
(1287, '150107', 'Chaclacayo', 'Lima', 'Lima', 44890, 39.5, -11.9783, -76.7642),
(1288, '150108', 'Chorrillos', 'Lima', 'Lima', 341322, 38.94, -12.1742, -77.0247),
(1289, '150109', 'Cieneguilla', 'Lima', 'Lima', 50486, 240.33, -12.1178, -76.8125),
(1290, '150110', 'Comas', 'Lima', 'Lima', 545685, 48.75, -11.95, -77.05),
(1291, '150111', 'El Agustino', 'Lima', 'Lima', 198366, 12.54, -12.0433, -76.9986),
(1292, '150112', 'Independencia', 'Lima', 'Lima', 223827, 14.56, -12.0008, -77.0522),
(1293, '150113', 'Jesus Maria', 'Lima', 'Lima', 72804, 4.57, -12.0697, -77.045),
(1294, '150114', 'La Molina', 'Lima', 'Lima', 182603, 65.75, -12.0875, -76.9339),
(1295, '150115', 'La Victoria', 'Lima', 'Lima', 169270, 8.74, -12.0653, -77.0308),
(1296, '150116', 'Lince', 'Lima', 'Lima', 49833, 3.03, -12.0811, -77.0306),
(1297, '150117', 'Los Olivos', 'Lima', 'Lima', 390742, 18.25, -11.9828, -77.0694),
(1298, '150118', 'Lurigancho', 'Lima', 'Lima', 232902, 236.47, -11.9372, -76.7036),
(1299, '150119', 'Lurin', 'Lima', 'Lima', 90818, 180.26, -12.2686, -76.8847),
(1300, '150120', 'Magdalena del Mar', 'Lima', 'Lima', 55786, 3.61, -12.0967, -77.0747),
(1301, '150121', 'Pueblo Libre', 'Lima', 'Lima', 77322, 4.38, -12.0733, -77.0631),
(1302, '150122', 'Miraflores', 'Lima', 'Lima', 82898, 9.62, -12.1175, -77.0453),
(1303, '150123', 'Pachacamac', 'Lima', 'Lima', 139067, 160.23, -12.2286, -76.8597),
(1304, '150124', 'Pucusana', 'Lima', 'Lima', 18284, 37.39, -12.4825, -76.7964),
(1305, '150125', 'Puente Piedra', 'Lima', 'Lima', 378910, 72.81, -11.8464, -77.1058),
(1306, '150126', 'Punta Hermosa', 'Lima', 'Lima', 8104, 119.5, -12.3375, -76.8258),
(1307, '150127', 'Punta Negra', 'Lima', 'Lima', 8500, 130.5, -12.3661, -76.7947),
(1308, '150128', 'Rimac', 'Lima', 'Lima', 165451, 11.87, -12.0294, -77.0436),
(1309, '150129', 'San Bartolo', 'Lima', 'Lima', 8200, 45.01, -12.3883, -76.7806),
(1310, '150130', 'San Borja', 'Lima', 'Lima', 114479, 9.96, -12.1078, -76.9989),
(1311, '150131', 'San Isidro', 'Lima', 'Lima', 54298, 11.1, -12.0989, -77.0344),
(1312, '150132', 'San Juan de Lurigancho', 'Lima', 'Lima', 1156300, 131.25, -12.0244, -77.0025),
(1313, '150133', 'San Juan de Miraflores', 'Lima', 'Lima', 422389, 22.97, -12.1589, -76.9722),
(1314, '150134', 'San Luis', 'Lima', 'Lima', 59377, 3.49, -12.0728, -76.9975),
(1315, '150135', 'San Martin de Porres', 'Lima', 'Lima', 741417, 36.82, -12.0303, -77.0469),
(1316, '150136', 'San Miguel', 'Lima', 'Lima', 139399, 10.72, -12.09, -77.0864),
(1317, '150137', 'Santa Anita', 'Lima', 'Lima', 242026, 10.69, -12.0433, -76.985),
(1318, '150138', 'Santa Maria del Mar', 'Lima', 'Lima', 1721, 9.81, -12.4092, -76.7758),
(1319, '150139', 'Santa Rosa', 'Lima', 'Lima', 20112, 21.35, -11.7983, -77.1775),
(1320, '150140', 'Santiago de Surco', 'Lima', 'Lima', 363183, 35.89, -12.1506, -77.0078),
(1321, '150141', 'Surquillo', 'Lima', 'Lima', 92908, 3.46, -12.1136, -77.0081),
(1322, '150142', 'Villa El Salvador', 'Lima', 'Lima', 489583, 35.46, -12.2164, -76.9433),
(1323, '150143', 'Villa Maria del Triunfo', 'Lima', 'Lima', 473036, 70.57, -12.1572, -76.9528),
(1324, '150201', 'Barranca', 'Barranca', 'Lima', 73485, 158.82, -10.7564, -77.7603),
(1325, '150202', 'Paramonga', 'Barranca', 'Lima', 22373, 408.59, -10.6742, -77.8197),
(1326, '150203', 'Pativilca', 'Barranca', 'Lima', 20032, 278.64, -10.6961, -77.7792),
(1327, '150204', 'Supe', 'Barranca', 'Lima', 23345, 512.92, -10.7992, -77.7133),
(1328, '150205', 'Supe Puerto', 'Barranca', 'Lima', 11898, 11.51, -10.8003, -77.7447),
(1329, '150301', 'Cajatambo', 'Cajatambo', 'Lima', 2260, 567.96, -10.4722, -76.9939),
(1330, '150302', 'Copa', 'Cajatambo', 'Lima', 803, 212.16, -10.3856, -77.0789),
(1331, '150303', 'Gorgor', 'Cajatambo', 'Lima', 2774, 309.95, -10.6214, -77.0389),
(1332, '150304', 'Huancapon', 'Cajatambo', 'Lima', 982, 146.1, -10.5483, -77.1128),
(1333, '150305', 'Manas', 'Cajatambo', 'Lima', 982, 279.04, -10.5953, -77.1669),
(1334, '150401', 'Canta', 'Canta', 'Lima', 2900, 123.09, -11.4675, -76.6231),
(1335, '150402', 'Arahuay', 'Canta', 'Lima', 796, 134.29, -11.6222, -76.6731),
(1336, '150403', 'Huamantanga', 'Canta', 'Lima', 1349, 488.09, -11.4997, -76.7489),
(1337, '150404', 'Huaros', 'Canta', 'Lima', 785, 333.45, -11.4058, -76.5761),
(1338, '150405', 'Lachaqui', 'Canta', 'Lima', 904, 137.87, -11.5567, -76.6244),
(1339, '150406', 'San Buenaventura', 'Canta', 'Lima', 567, 106.26, -11.4897, -76.6631),
(1340, '150407', 'Santa Rosa de Quives', 'Canta', 'Lima', 8388, 408.11, -11.6928, -76.8444),
(1341, '150501', 'San Vicente de Cañete', 'Cañete', 'Lima', 58091, 513.15, -13.0825, -76.3883),
(1342, '150502', 'Asia', 'Cañete', 'Lima', 9902, 277.36, -12.7789, -76.5572),
(1343, '150503', 'Calango', 'Cañete', 'Lima', 2434, 530.89, -12.5256, -76.5433),
(1344, '150504', 'Cerro Azul', 'Cañete', 'Lima', 8489, 105.08, -13.0267, -76.4794),
(1345, '150505', 'Chilca', 'Cañete', 'Lima', 16350, 475.47, -12.5172, -76.7361),
(1346, '150506', 'Coayllo', 'Cañete', 'Lima', 1097, 590.99, -12.7258, -76.4606),
(1347, '150507', 'Imperial', 'Cañete', 'Lima', 41037, 53.16, -13.0608, -76.35),
(1348, '150508', 'Lunahuana', 'Cañete', 'Lima', 4921, 500.33, -12.9597, -76.1392),
(1349, '150509', 'Mala', 'Cañete', 'Lima', 35929, 129.31, -12.6553, -76.63),
(1350, '150510', 'Nuevo Imperial', 'Cañete', 'Lima', 24623, 329.3, -13.0742, -76.3158),
(1351, '150511', 'Pacaran', 'Cañete', 'Lima', 1842, 258.72, -12.8636, -76.0519),
(1352, '150512', 'Quilmana', 'Cañete', 'Lima', 15823, 437.4, -12.95, -76.3828),
(1353, '150513', 'San Antonio', 'Cañete', 'Lima', 4371, 37.15, -12.6431, -76.65),
(1354, '150514', 'San Luis', 'Cañete', 'Lima', 13420, 38.53, -13.0508, -76.4294),
(1355, '150515', 'Santa Cruz de Flores', 'Cañete', 'Lima', 2898, 100.06, -12.6194, -76.6397),
(1356, '150516', 'Zuñiga', 'Cañete', 'Lima', 1912, 198.01, -12.8581, -76.0225),
(1357, '150601', 'Huaral', 'Huaral', 'Lima', 104610, 640.76, -11.4914, -77.2053),
(1358, '150602', 'Atavillos Alto', 'Huaral', 'Lima', 626, 347.69, -11.2331, -76.6561),
(1359, '150603', 'Atavillos Bajo', 'Huaral', 'Lima', 1135, 164.89, -11.3533, -76.8231),
(1360, '150604', 'Aucallama', 'Huaral', 'Lima', 20446, 729.41, -11.5592, -77.1744),
(1361, '150605', 'Chancay', 'Huaral', 'Lima', 65014, 150.11, -11.5669, -77.2658),
(1362, '150606', 'Ihuari', 'Huaral', 'Lima', 2344, 467.67, -11.1889, -76.9519),
(1363, '150607', 'Lampian', 'Huaral', 'Lima', 389, 144.97, -11.2369, -76.8386),
(1364, '150608', 'Pacaraos', 'Huaral', 'Lima', 385, 294.04, -11.1833, -76.6464),
(1365, '150609', 'San Miguel de Acos', 'Huaral', 'Lima', 777, 48.16, -11.2736, -76.8214),
(1366, '150610', 'Santa Cruz de Andamarca', 'Huaral', 'Lima', 1469, 216.92, -11.1947, -76.6336),
(1367, '150611', 'Sumbilca', 'Huaral', 'Lima', 948, 259.38, -11.4072, -76.8194),
(1368, '150612', 'Veintisiete de Noviembre', 'Huaral', 'Lima', 414, 204.27, -11.1919, -76.7786),
(1369, '150701', 'Matucana', 'Huarochiri', 'Lima', 3584, 179.44, -11.8458, -76.3878),
(1370, '150702', 'Antioquia', 'Huarochiri', 'Lima', 1246, 387.98, -12.0814, -76.5133),
(1371, '150703', 'Callahuanca', 'Huarochiri', 'Lima', 4357, 57.47, -11.8275, -76.6203),
(1372, '150704', 'Carampoma', 'Huarochiri', 'Lima', 1907, 234.21, -11.6561, -76.5181),
(1373, '150705', 'Chicla', 'Huarochiri', 'Lima', 7881, 244.1, -11.7078, -76.2711),
(1374, '150706', 'Cuenca', 'Huarochiri', 'Lima', 397, 60.02, -12.1336, -76.4378),
(1375, '150707', 'Huachupampa', 'Huarochiri', 'Lima', 3003, 76.02, -11.7228, -76.59),
(1376, '150708', 'Huanza', 'Huarochiri', 'Lima', 2851, 227.01, -11.6561, -76.5069),
(1377, '150709', 'Huarochiri', 'Huarochiri', 'Lima', 1251, 249.09, -12.1381, -76.2344),
(1378, '150710', 'Lahuaytambo', 'Huarochiri', 'Lima', 651, 81.88, -12.0969, -76.3911),
(1379, '150711', 'Langa', 'Huarochiri', 'Lima', 822, 80.99, -12.1253, -76.4233),
(1380, '150712', 'Laraos', 'Huarochiri', 'Lima', 2452, 104.51, -11.6647, -76.5422),
(1381, '150713', 'Mariatana', 'Huarochiri', 'Lima', 1325, 168.63, -12.2378, -76.3261),
(1382, '150714', 'Ricardo Palma', 'Huarochiri', 'Lima', 6358, 34.59, -11.925, -76.6617),
(1383, '150715', 'San Andres de Tupicocha', 'Huarochiri', 'Lima', 1272, 83.35, -12.0008, -76.4778),
(1384, '150716', 'San Antonio', 'Huarochiri', 'Lima', 5785, 563.59, -11.7439, -76.6519),
(1385, '150717', 'San Bartolome', 'Huarochiri', 'Lima', 2409, 43.91, -11.9114, -76.5275),
(1386, '150718', 'San Damian', 'Huarochiri', 'Lima', 1137, 343.22, -12.0178, -76.3936),
(1387, '150719', 'San Juan de Iris', 'Huarochiri', 'Lima', 1891, 124.31, -11.6847, -76.5275),
(1388, '150720', 'San Juan de Tantaranche', 'Huarochiri', 'Lima', 477, 137.16, -12.1136, -76.185),
(1389, '150721', 'San Lorenzo de Quinti', 'Huarochiri', 'Lima', 1547, 467.58, -12.1453, -76.2133),
(1390, '150722', 'San Mateo', 'Huarochiri', 'Lima', 5120, 425.6, -11.7589, -76.3031),
(1391, '150723', 'San Mateo de Otao', 'Huarochiri', 'Lima', 1599, 123.91, -11.8686, -76.5475),
(1392, '150724', 'San Pedro de Casta', 'Huarochiri', 'Lima', 1325, 79.91, -11.7583, -76.5989),
(1393, '150725', 'San Pedro de Huancayre', 'Huarochiri', 'Lima', 248, 41.75, -12.1311, -76.2186),
(1394, '150726', 'Sangallaya', 'Huarochiri', 'Lima', 569, 81.92, -12.1606, -76.2297),
(1395, '150727', 'Santa Cruz de Cocachacra', 'Huarochiri', 'Lima', 2541, 41.5, -11.9108, -76.5406),
(1396, '150728', 'Santa Eulalia', 'Huarochiri', 'Lima', 12476, 111.12, -11.9106, -76.6656),
(1397, '150729', 'Santiago de Anchucaya', 'Huarochiri', 'Lima', 526, 94.01, -12.0961, -76.2325),
(1398, '150730', 'Santiago de Tuna', 'Huarochiri', 'Lima', 762, 54.25, -11.985, -76.5275),
(1399, '150731', 'Santo Domingo de los Olleros', 'Huarochiri', 'Lima', 5026, 552.32, -12.2203, -76.5161),
(1400, '150732', 'Surco', 'Huarochiri', 'Lima', 1973, 102.58, -11.885, -76.4425),
(1401, '150801', 'Huacho', 'Huaura', 'Lima', 60196, 717.02, -11.1069, -77.61),
(1402, '150802', 'Ambar', 'Huaura', 'Lima', 2761, 929.68, -10.7572, -77.2694),
(1403, '150803', 'Caleta de Carquin', 'Huaura', 'Lima', 7055, 2.04, -11.0917, -77.6278),
(1404, '150804', 'Checras', 'Huaura', 'Lima', 1864, 166.37, -10.935, -76.8336),
(1405, '150805', 'Hualmay', 'Huaura', 'Lima', 29448, 5.81, -11.1014, -77.61),
(1406, '150806', 'Huaura', 'Huaura', 'Lima', 36793, 484.43, -11.0692, -77.6003),
(1407, '150807', 'Leoncio Prado', 'Huaura', 'Lima', 2004, 300.13, -11.0586, -76.9308),
(1408, '150808', 'Paccho', 'Huaura', 'Lima', 2225, 229.25, -10.9567, -76.9336),
(1409, '150809', 'Santa Leonor', 'Huaura', 'Lima', 1462, 375.49, -10.9483, -76.7447),
(1410, '150810', 'Santa Maria', 'Huaura', 'Lima', 35132, 127.51, -11.0883, -77.5883),
(1411, '150811', 'Sayan', 'Huaura', 'Lima', 24941, 1310.77, -11.1364, -77.1917),
(1412, '150812', 'Vegueta', 'Huaura', 'Lima', 23091, 253.7, -11.0225, -77.6425),
(1413, '150901', 'Oyon', 'Oyon', 'Lima', 15066, 890.43, -10.6692, -76.7728),
(1414, '150902', 'Andajes', 'Oyon', 'Lima', 1058, 148.18, -10.7914, -76.91),
(1415, '150903', 'Caujul', 'Oyon', 'Lima', 1076, 105.5, -10.8053, -76.9786),
(1416, '150904', 'Cochamarca', 'Oyon', 'Lima', 1653, 265.55, -10.8617, -77.1278),
(1417, '150905', 'Navan', 'Oyon', 'Lima', 1235, 227.16, -10.8353, -77.0122),
(1418, '150906', 'Pachangara', 'Oyon', 'Lima', 3485, 252.05, -10.8125, -76.8744),
(1419, '151001', 'Yauyos', 'Yauyos', 'Lima', 2905, 327.17, -12.46, -75.9217),
(1420, '151002', 'Alis', 'Yauyos', 'Lima', 1233, 142.06, -12.2803, -75.7864),
(1421, '151003', 'Ayauca', 'Yauyos', 'Lima', 2293, 438.79, -12.5922, -76.0367),
(1422, '151004', 'Ayaviri', 'Yauyos', 'Lima', 675, 238.83, -12.3825, -76.1389),
(1423, '151005', 'Azangaro', 'Yauyos', 'Lima', 519, 79.84, -12.9994, -75.8367),
(1424, '151006', 'Cacra', 'Yauyos', 'Lima', 383, 213.79, -12.8119, -75.7828),
(1425, '151007', 'Carania', 'Yauyos', 'Lima', 378, 122.13, -12.3444, -75.8717),
(1426, '151008', 'Catahuasi', 'Yauyos', 'Lima', 943, 123.86, -12.8003, -75.8911),
(1427, '151009', 'Chocos', 'Yauyos', 'Lima', 1236, 213.37, -12.9133, -75.8631),
(1428, '151010', 'Cochas', 'Yauyos', 'Lima', 449, 27.73, -12.2964, -76.1589),
(1429, '151011', 'Colonia', 'Yauyos', 'Lima', 1288, 323.96, -12.6319, -75.8906),
(1430, '151012', 'Hongos', 'Yauyos', 'Lima', 388, 103.8, -12.8108, -75.7647),
(1431, '151013', 'Huampara', 'Yauyos', 'Lima', 175, 54.03, -12.3608, -76.1661),
(1432, '151014', 'Huancaya', 'Yauyos', 'Lima', 1424, 283.6, -12.2028, -75.7992),
(1433, '151015', 'Huangascar', 'Yauyos', 'Lima', 549, 50.46, -12.8997, -75.8311),
(1434, '151016', 'Huantan', 'Yauyos', 'Lima', 943, 516.35, -12.4572, -75.8106),
(1435, '151017', 'Huañec', 'Yauyos', 'Lima', 485, 37.54, -12.2939, -76.1386),
(1436, '151018', 'Laraos', 'Yauyos', 'Lima', 725, 402.85, -12.3456, -75.7856),
(1437, '151019', 'Lincha', 'Yauyos', 'Lima', 966, 221.22, -12.8, -75.6658),
(1438, '151020', 'Madean', 'Yauyos', 'Lima', 804, 220.72, -12.945, -75.7775),
(1439, '151021', 'Miraflores', 'Yauyos', 'Lima', 447, 226.24, -12.2747, -75.8536),
(1440, '151022', 'Omas', 'Yauyos', 'Lima', 562, 295.35, -12.5172, -76.2903),
(1441, '151023', 'Putinza', 'Yauyos', 'Lima', 489, 66.44, -12.6689, -75.9494),
(1442, '151024', 'Quinches', 'Yauyos', 'Lima', 961, 113.33, -12.3075, -76.1422),
(1443, '151025', 'Quinocay', 'Yauyos', 'Lima', 530, 153.13, -12.3642, -76.2264),
(1444, '151026', 'San Joaquin', 'Yauyos', 'Lima', 452, 41.24, -12.2844, -76.1464),
(1445, '151027', 'San Pedro de Pilas', 'Yauyos', 'Lima', 364, 97.39, -12.4544, -76.2267),
(1446, '151028', 'Tanta', 'Yauyos', 'Lima', 504, 347.15, -12.1214, -76.0122),
(1447, '151029', 'Tauripampa', 'Yauyos', 'Lima', 405, 530.86, -12.6156, -76.16),
(1448, '151030', 'Tomas', 'Yauyos', 'Lima', 1151, 297.93, -12.2372, -75.7461),
(1449, '151031', 'Tupe', 'Yauyos', 'Lima', 648, 321.15, -12.7403, -75.8089),
(1450, '151032', 'Viñac', 'Yauyos', 'Lima', 1906, 165.23, -12.9311, -75.7794),
(1451, '151033', 'Vitis', 'Yauyos', 'Lima', 665, 101.79, -12.2236, -75.8069),
(1452, '160101', 'Iquitos', 'Maynas', 'Loreto', 151072, 358.15, -3.7497, -73.2619),
(1453, '160102', 'Alto Nanay', 'Maynas', 'Loreto', 3064, 14290.8, -3.8869, -73.7003),
(1454, '160103', 'Fernando Lores', 'Maynas', 'Loreto', 20646, 4476.19, -4.0064, -73.1525),
(1455, '160104', 'Indiana', 'Maynas', 'Loreto', 11273, 3297.76, -3.4983, -73.0444),
(1456, '160105', 'Las Amazonas', 'Maynas', 'Loreto', 9926, 6593.64, -3.4136, -72.7689),
(1457, '160106', 'Mazan', 'Maynas', 'Loreto', 14057, 9884.28, -3.4978, -73.1142),
(1458, '160107', 'Napo', 'Maynas', 'Loreto', 16695, 24049.9, -2.4936, -73.6806),
(1459, '160108', 'Punchana', 'Maynas', 'Loreto', 94201, 1573.39, -3.7289, -73.2447),
(1460, '160110', 'Torres Causana', 'Maynas', 'Loreto', 5238, 6795.14, -0.9642, -75.1814),
(1461, '160112', 'Belen', 'Maynas', 'Loreto', 77641, 632.8, -3.7644, -73.2444),
(1462, '160113', 'San Juan Bautista', 'Maynas', 'Loreto', 161819, 3117.05, -3.7742, -73.2864),
(1463, '160201', 'Yurimaguas', 'Alto Amazonas', 'Loreto', 74047, 2187.67, -5.8944, -76.1094),
(1464, '160202', 'Balsapuerto', 'Alto Amazonas', 'Loreto', 18042, 2954.17, -5.8314, -76.5597),
(1465, '160205', 'Jeberos', 'Alto Amazonas', 'Loreto', 5453, 4253.68, -5.2939, -76.2836),
(1466, '160206', 'Lagunas', 'Alto Amazonas', 'Loreto', 14584, 5929.16, -5.23, -75.6775),
(1467, '160210', 'Santa Cruz', 'Alto Amazonas', 'Loreto', 4535, 2222.31, -5.5125, -75.8572),
(1468, '160211', 'Teniente Cesar Lopez Rojas', 'Alto Amazonas', 'Loreto', 6743, 1292.03, -6.0272, -75.8742),
(1469, '160301', 'Nauta', 'Loreto', 'Loreto', 30631, 6672.35, -4.4567, -73.5261),
(1470, '160302', 'Parinari', 'Loreto', 'Loreto', 7331, 12934.7, -4.56, -74.4844),
(1471, '160303', 'Tigre', 'Loreto', 'Loreto', 8664, 19785.7, -3.5503, -74.6903),
(1472, '160304', 'Trompeteros', 'Loreto', 'Loreto', 11196, 12246, -3.8028, -75.0597),
(1473, '160305', 'Urarinas', 'Loreto', 'Loreto', 15270, 15434.5, -4.5333, -74.7597),
(1474, '160401', 'Ramon Castilla', 'Mariscal Ramon Castilla', 'Loreto', 25020, 7163.07, -3.9078, -70.5178),
(1475, '160402', 'Pebas', 'Mariscal Ramon Castilla', 'Loreto', 17653, 11048.3, -3.3192, -71.8631),
(1476, '160403', 'Yavari', 'Mariscal Ramon Castilla', 'Loreto', 16315, 13807.5, -4.3567, -70.0408),
(1477, '160404', 'San Pablo', 'Mariscal Ramon Castilla', 'Loreto', 16675, 5045.58, -4.0164, -71.1022),
(1478, '160501', 'Requena', 'Requena', 'Loreto', 31004, 3038.56, -5.0589, -73.8525),
(1479, '160502', 'Alto Tapiche', 'Requena', 'Loreto', 2139, 9013.8, -6.0256, -74.0908),
(1480, '160503', 'Capelo', 'Requena', 'Loreto', 4564, 842.37, -5.4072, -74.1592),
(1481, '160504', 'Emilio San Martin', 'Requena', 'Loreto', 7637, 4572.56, -5.7936, -74.2864),
(1482, '160505', 'Maquia', 'Requena', 'Loreto', 8508, 4792.06, -5.7892, -74.5503),
(1483, '160506', 'Puinahua', 'Requena', 'Loreto', 6170, 6149.49, -5.2533, -74.3433),
(1484, '160507', 'Saquena', 'Requena', 'Loreto', 5025, 2081.42, -4.7261, -73.5333),
(1485, '160508', 'Soplin', 'Requena', 'Loreto', 707, 4711.38, -6.005, -73.6911),
(1486, '160509', 'Tapiche', 'Requena', 'Loreto', 1245, 2014.23, -5.6644, -74.1886),
(1487, '160510', 'Jenaro Herrera', 'Requena', 'Loreto', 5754, 1517.43, -4.9053, -73.6728),
(1488, '160511', 'Yaquerana', 'Requena', 'Loreto', 3090, 10947.2, -5.1494, -72.8761),
(1489, '160601', 'Contamana', 'Ucayali', 'Loreto', 28098, 10675.1, -7.325, -75.0414),
(1490, '160602', 'Inahuaya', 'Ucayali', 'Loreto', 2751, 646.04, -7.1164, -75.2667),
(1491, '160603', 'Padre Marquez', 'Ucayali', 'Loreto', 7901, 2475.66, -7.9444, -74.8403),
(1492, '160604', 'Pampa Hermosa', 'Ucayali', 'Loreto', 11081, 7346.98, -7.195, -75.2969),
(1493, '160605', 'Sarayacu', 'Ucayali', 'Loreto', 16913, 6303.17, -6.3958, -75.1178),
(1494, '160606', 'Vargas Guerra', 'Ucayali', 'Loreto', 9125, 1846.49, -6.9094, -75.1594),
(1495, '160701', 'Barranca', 'Datem del Marañon', 'Loreto', 14043, 7235.53, -4.8219, -76.5642),
(1496, '160702', 'Cahuapanas', 'Datem del Marañon', 'Loreto', 8639, 4685.11, -5.2711, -76.9858),
(1497, '160703', 'Manseriche', 'Datem del Marañon', 'Loreto', 10707, 3493.77, -4.565, -77.4183),
(1498, '160704', 'Morona', 'Datem del Marañon', 'Loreto', 13609, 10777, -4.3247, -77.2147),
(1499, '160705', 'Pastaza', 'Datem del Marañon', 'Loreto', 6496, 8908.91, -4.6442, -76.5981),
(1500, '160706', 'Andoas', 'Datem del Marañon', 'Loreto', 12869, 11540.7, -3.475, -76.4344),
(1501, '160801', 'Putumayo', 'Maynas', 'Loreto', 4341, 10886.4, -2.4497, -72.6556),
(1502, '160802', 'Rosa Panduro', 'Maynas', 'Loreto', 745, 7038.69, -1.7964, -73.4078),
(1503, '160803', 'Teniente Manuel Clavero', 'Maynas', 'Loreto', 5926, 9488.52, -0.3783, -74.6753),
(1504, '160804', 'Yaguas', 'Maynas', 'Loreto', 1252, 17725, -2.4114, -71.1836),
(1505, '170101', 'Tambopata', 'Tambopata', 'Madre de Dios', 84207, 22218.6, -12.5972, -69.1875),
(1506, '170102', 'Inambari', 'Tambopata', 'Madre de Dios', 10818, 4256.82, -13.1, -70.3678),
(1507, '170103', 'Las Piedras', 'Tambopata', 'Madre de Dios', 6101, 7032.21, -12.2781, -69.1536),
(1508, '170104', 'Laberinto', 'Tambopata', 'Madre de Dios', 5329, 2760.9, -12.7172, -69.59),
(1509, '170201', 'Manu', 'Manu', 'Madre de Dios', 3321, 8166.65, -12.8381, -71.3633),
(1510, '170202', 'Fitzcarrald', 'Manu', 'Madre de Dios', 1641, 10955.3, -12.2678, -70.9336),
(1511, '170203', 'Madre de Dios', 'Manu', 'Madre de Dios', 13835, 7234.81, -12.6181, -70.3936),
(1512, '170204', 'Huepetuhe', 'Manu', 'Madre de Dios', 6802, 1478.42, -12.9975, -70.5336),
(1513, '170301', 'Iñapari', 'Tahuamanu', 'Madre de Dios', 1659, 14853.7, -10.9544, -69.5814),
(1514, '170302', 'Iberia', 'Tahuamanu', 'Madre de Dios', 9486, 2549.32, -11.4072, -69.4889),
(1515, '170303', 'Tahuamanu', 'Tahuamanu', 'Madre de Dios', 3658, 3793.9, -11.455, -69.3214),
(1516, '180101', 'Moquegua', 'Mariscal Nieto', 'Moquegua', 59387, 3949.04, -17.195, -70.9369),
(1517, '180102', 'Carumas', 'Mariscal Nieto', 'Moquegua', 5805, 2256.31, -16.8106, -70.6953),
(1518, '180103', 'Cuchumbaya', 'Mariscal Nieto', 'Moquegua', 2228, 67.58, -16.7525, -70.6878),
(1519, '180104', 'Samegua', 'Mariscal Nieto', 'Moquegua', 6581, 62.55, -17.1797, -70.9008),
(1520, '180105', 'San Cristobal', 'Mariscal Nieto', 'Moquegua', 4190, 542.73, -16.7406, -70.6831),
(1521, '180106', 'Torata', 'Mariscal Nieto', 'Moquegua', 5784, 1793.37, -17.0767, -70.8442),
(1522, '180201', 'Omate', 'General Sanchez Cerr', 'Moquegua', 4661, 250.64, -16.6739, -70.9719),
(1523, '180202', 'Chojata', 'General Sanchez Cerr', 'Moquegua', 2685, 847.94, -16.3894, -70.7286),
(1524, '180203', 'Coalaque', 'General Sanchez Cerr', 'Moquegua', 1104, 247.58, -16.6486, -71.0239),
(1525, '180204', 'Ichuña', 'General Sanchez Cerr', 'Moquegua', 5048, 1017.74, -16.1411, -70.5392),
(1526, '180205', 'La Capilla', 'General Sanchez Cerr', 'Moquegua', 2326, 776.04, -16.7581, -71.1767),
(1527, '180206', 'Lloque', 'General Sanchez Cerr', 'Moquegua', 2087, 254.45, -16.3239, -70.7381),
(1528, '180207', 'Matalaque', 'General Sanchez Cerr', 'Moquegua', 1236, 557.23, -16.4819, -70.8278),
(1529, '180208', 'Puquina', 'General Sanchez Cerr', 'Moquegua', 2469, 550.99, -16.6211, -71.1842),
(1530, '180209', 'Quinistaquillas', 'General Sanchez Cerr', 'Moquegua', 1487, 193.79, -16.7486, -70.8808),
(1531, '180210', 'Ubinas', 'General Sanchez Cerr', 'Moquegua', 3714, 874.57, -16.3856, -70.8581),
(1532, '180211', 'Yunga', 'General Sanchez Cerr', 'Moquegua', 2514, 110.74, -16.1964, -70.6814),
(1533, '180301', 'Ilo', 'Ilo', 'Moquegua', 69079, 295.51, -17.6444, -71.345),
(1534, '180302', 'El Algarrobal', 'Ilo', 'Moquegua', 332, 747, -17.6228, -71.2703),
(1535, '180303', 'Pacocha', 'Ilo', 'Moquegua', 3319, 338.08, -17.6161, -71.34),
(1536, '190101', 'Chaupimarca', 'Pasco', 'Pasco', 25724, 6.66, -10.6828, -76.2556),
(1537, '190102', 'Huachon', 'Pasco', 'Pasco', 4762, 846.3, -10.6378, -75.9522),
(1538, '190103', 'Huariaca', 'Pasco', 'Pasco', 8278, 133.07, -10.4428, -76.1889),
(1539, '190104', 'Huayllay', 'Pasco', 'Pasco', 11564, 1026.87, -11.0044, -76.3681),
(1540, '190105', 'Ninacaca', 'Pasco', 'Pasco', 3297, 508.92, -10.8617, -76.1131),
(1541, '190106', 'Pallanchacra', 'Pasco', 'Pasco', 5040, 73.69, -10.4147, -76.2356),
(1542, '190107', 'Paucartambo', 'Pasco', 'Pasco', 25070, 782.19, -10.7731, -75.8128),
(1543, '190108', 'San Francisco de Asis de Yarusyacan', 'Pasco', 'Pasco', 9518, 117.7, -10.4914, -76.1964),
(1544, '190109', 'Simon Bolivar', 'Pasco', 'Pasco', 11404, 697.15, -10.6897, -76.3175),
(1545, '190110', 'Ticlacayan', 'Pasco', 'Pasco', 14863, 748.43, -10.5344, -76.1625),
(1546, '190111', 'Tinyahuarco', 'Pasco', 'Pasco', 6346, 94.49, -10.7689, -76.2733),
(1547, '190112', 'Vicco', 'Pasco', 'Pasco', 2173, 173.3, -10.8414, -76.2375),
(1548, '190113', 'Yanacancha', 'Pasco', 'Pasco', 30792, 165.11, -10.6689, -76.2556),
(1549, '190201', 'Yanahuanca', 'Daniel Alcides Carri', 'Pasco', 12963, 921.06, -10.4925, -76.5169),
(1550, '190202', 'Chacayan', 'Daniel Alcides Carri', 'Pasco', 4439, 198.58, -10.435, -76.4383),
(1551, '190203', 'Goyllarisquizga', 'Daniel Alcides Carri', 'Pasco', 4234, 23.17, -10.4733, -76.4078),
(1552, '190204', 'Paucar', 'Daniel Alcides Carri', 'Pasco', 1721, 134.18, -10.3697, -76.445),
(1553, '190205', 'San Pedro de Pillao', 'Daniel Alcides Carri', 'Pasco', 1883, 92.17, -10.4392, -76.4972),
(1554, '190206', 'Santa Ana de Tusi', 'Daniel Alcides Carri', 'Pasco', 23892, 353.11, -10.4719, -76.3547),
(1555, '190207', 'Tapuc', 'Daniel Alcides Carri', 'Pasco', 4533, 60.19, -10.4558, -76.4617),
(1556, '190208', 'Vilcabamba', 'Daniel Alcides Carri', 'Pasco', 1563, 102.35, -10.4789, -76.4492),
(1557, '190301', 'Oxapampa', 'Oxapampa', 'Pasco', 14438, 419.85, -10.5728, -75.4039),
(1558, '190302', 'Chontabamba', 'Oxapampa', 'Pasco', 3598, 457.09, -10.6044, -75.4633),
(1559, '190303', 'Huancabamba', 'Oxapampa', 'Pasco', 6628, 1182.15, -10.4261, -75.5131),
(1560, '190304', 'Palcazu', 'Oxapampa', 'Pasco', 11282, 2912.16, -10.1878, -75.1458),
(1561, '190305', 'Pozuzo', 'Oxapampa', 'Pasco', 9818, 750.87, -10.0653, -75.5569),
(1562, '190306', 'Puerto Bermudez', 'Oxapampa', 'Pasco', 18016, 8014.31, -10.2964, -74.9358),
(1563, '190307', 'Villa Rica', 'Oxapampa', 'Pasco', 20633, 859.23, -10.7364, -75.2722),
(1564, '190308', 'Constitución', 'Oxapampa', 'Pasco', 12105, 3171.49, -9.8458, -74.9986),
(1565, '200101', 'Piura', 'Piura', 'Piura', 158034, 196.15, -5.1942, -80.6289),
(1566, '200104', 'Castilla', 'Piura', 'Piura', 147546, 656.69, -5.2006, -80.6211),
(1567, '200105', 'Catacaos', 'Piura', 'Piura', 74562, 2286.97, -5.2697, -80.6764),
(1568, '200107', 'Cura Mori', 'Piura', 'Piura', 19168, 217.41, -5.325, -80.6656),
(1569, '200108', 'El Tallan', 'Piura', 'Piura', 5215, 100.98, -5.4128, -80.68),
(1570, '200109', 'La Arena', 'Piura', 'Piura', 38483, 171.24, -5.3464, -80.7108),
(1571, '200110', 'La Union', 'Piura', 'Piura', 41736, 320.9, -5.4031, -80.7433),
(1572, '200111', 'Las Lomas', 'Piura', 'Piura', 27290, 557.69, -4.6578, -80.2442),
(1573, '200114', 'Tambo Grande', 'Piura', 'Piura', 123352, 1496.75, -4.9331, -80.3414),
(1574, '200115', '26 de Octubre', 'Piura', 'Piura', 151916, 72.01, -5.1847, -80.6703),
(1575, '200201', 'Ayabaca', 'Ayabaca', 'Piura', 38963, 1549.99, -4.6392, -79.7161),
(1576, '200202', 'Frias', 'Ayabaca', 'Piura', 24461, 565.31, -4.9342, -79.9431),
(1577, '200203', 'Jilili', 'Ayabaca', 'Piura', 2768, 104.73, -4.5839, -79.7989),
(1578, '200204', 'Lagunas', 'Ayabaca', 'Piura', 7425, 190.82, -4.79, -79.8456),
(1579, '200205', 'Montero', 'Ayabaca', 'Piura', 6619, 130.57, -4.6303, -79.8275),
(1580, '200206', 'Pacaipampa', 'Ayabaca', 'Piura', 25060, 981.5, -4.9953, -79.67),
(1581, '200207', 'Paimas', 'Ayabaca', 'Piura', 10504, 319.67, -4.6269, -79.9453),
(1582, '200208', 'Sapillica', 'Ayabaca', 'Piura', 12442, 267.09, -4.7786, -79.9831),
(1583, '200209', 'Sicchez', 'Ayabaca', 'Piura', 1829, 33.1, -4.5703, -79.765),
(1584, '200210', 'Suyo', 'Ayabaca', 'Piura', 12471, 1078.61, -4.5139, -80.0031),
(1585, '200301', 'Huancabamba', 'Huancabamba', 'Piura', 30956, 446.75, -5.2394, -79.4508),
(1586, '200302', 'Canchaque', 'Huancabamba', 'Piura', 8173, 306.41, -5.3758, -79.6097),
(1587, '200303', 'El Carmen de La Frontera', 'Huancabamba', 'Piura', 14195, 702.81, -5.1481, -79.4347),
(1588, '200304', 'Huarmaca', 'Huancabamba', 'Piura', 41688, 1908.22, -5.5683, -79.5247),
(1589, '200305', 'Lalaquiz', 'Huancabamba', 'Piura', 4666, 138.95, -5.2128, -79.6783),
(1590, '200306', 'San Miguel de El Faique', 'Huancabamba', 'Piura', 9067, 201.6, -5.4022, -79.6053),
(1591, '200307', 'Sondor', 'Huancabamba', 'Piura', 8679, 336.53, -5.315, -79.4106),
(1592, '200308', 'Sondorillo', 'Huancabamba', 'Piura', 10910, 226.09, -5.3394, -79.43),
(1593, '200401', 'Chulucanas', 'Morropon', 'Piura', 76815, 842.26, -5.0969, -80.1642),
(1594, '200402', 'Buenos Aires', 'Morropon', 'Piura', 8147, 245.12, -5.2678, -79.9708),
(1595, '200403', 'Chalaco', 'Morropon', 'Piura', 9190, 151.96, -5.0417, -79.7958),
(1596, '200404', 'La Matanza', 'Morropon', 'Piura', 12912, 1043.61, -5.2114, -80.0906),
(1597, '200405', 'Morropon', 'Morropon', 'Piura', 14240, 169.96, -5.1861, -79.9717),
(1598, '200406', 'Salitral', 'Morropon', 'Piura', 8470, 614.03, -5.3419, -79.8319),
(1599, '200407', 'San Juan de Bigote', 'Morropon', 'Piura', 6747, 245.21, -5.3189, -79.7875),
(1600, '200408', 'Santa Catalina de Mossa', 'Morropon', 'Piura', 4187, 76.76, -5.1031, -79.8872),
(1601, '200409', 'Santo Domingo', 'Morropon', 'Piura', 7335, 187.32, -5.0292, -79.8756),
(1602, '200410', 'Yamango', 'Morropon', 'Piura', 9715, 216.91, -5.1814, -79.7528),
(1603, '200501', 'Paita', 'Paita', 'Piura', 96707, 706.31, -5.0883, -81.1164),
(1604, '200502', 'Amotape', 'Paita', 'Piura', 2336, 90.82, -4.8822, -81.0178),
(1605, '200503', 'Arenal', 'Paita', 'Piura', 1049, 8.19, -4.8842, -81.0269),
(1606, '200504', 'Colan', 'Paita', 'Piura', 12625, 124.93, -4.9092, -81.0572),
(1607, '200505', 'La Huaca', 'Paita', 'Piura', 11921, 599.51, -4.9117, -80.9608),
(1608, '200506', 'Tamarindo', 'Paita', 'Piura', 4632, 63.67, -4.8792, -80.9739),
(1609, '200507', 'Vichayal', 'Paita', 'Piura', 4901, 134.36, -4.8653, -81.0719),
(1610, '200601', 'Sullana', 'Sullana', 'Piura', 180896, 529.73, -4.9044, -80.7047),
(1611, '200602', 'Bellavista', 'Sullana', 'Piura', 38621, 3.09, -4.8908, -80.6808),
(1612, '200603', 'Ignacio Escudero', 'Sullana', 'Piura', 20502, 306.53, -4.8458, -80.8747),
(1613, '200604', 'Lancones', 'Sullana', 'Piura', 13525, 2152.99, -4.5767, -80.4778),
(1614, '200605', 'Marcavelica', 'Sullana', 'Piura', 29411, 1687.98, -4.8814, -80.7061),
(1615, '200606', 'Miguel Checa', 'Sullana', 'Piura', 8861, 480.26, -4.9025, -80.8169),
(1616, '200607', 'Querecotillo', 'Sullana', 'Piura', 25675, 270.08, -4.84, -80.6519),
(1617, '200608', 'Salitral', 'Sullana', 'Piura', 6834, 28.27, -4.8583, -80.6794),
(1618, '200701', 'Pariñas', 'Talara', 'Piura', 91278, 1116.99, -4.5811, -81.2747),
(1619, '200702', 'El Alto', 'Talara', 'Piura', 7114, 491.33, -4.2697, -81.2239),
(1620, '200703', 'La Brea', 'Talara', 'Piura', 11926, 692.96, -4.6564, -81.3069),
(1621, '200704', 'Lobitos', 'Talara', 'Piura', 1685, 233.01, -4.4531, -81.2783),
(1622, '200705', 'Los Organos', 'Talara', 'Piura', 9510, 165.01, -4.1789, -81.1322),
(1623, '200706', 'Mancora', 'Talara', 'Piura', 13045, 100.19, -4.1083, -81.0556),
(1624, '200801', 'Sechura', 'Sechura', 'Piura', 44407, 5710.85, -5.5567, -80.8217),
(1625, '200802', 'Bellavista de La Union', 'Sechura', 'Piura', 4498, 13.88, -5.4394, -80.7547),
(1626, '200803', 'Bernal', 'Sechura', 'Piura', 7477, 71.74, -5.4608, -80.7422),
(1627, '200804', 'Cristo Nos Valga', 'Sechura', 'Piura', 4067, 234.37, -5.4939, -80.7414),
(1628, '200805', 'Vice', 'Sechura', 'Piura', 14475, 261.01, -5.4231, -80.7767),
(1629, '200806', 'Rinconada Llicuar', 'Sechura', 'Piura', 3298, 19.44, -5.4572, -80.7614),
(1630, '210101', 'Puno', 'Puno', 'Puno', 146095, 460.63, -15.8406, -70.0278),
(1631, '210102', 'Acora', 'Puno', 'Puno', 28363, 1941.09, -15.9736, -69.7978),
(1632, '210103', 'Amantani', 'Puno', 'Puno', 4538, 15, -15.6572, -69.7194),
(1633, '210104', 'Atuncolla', 'Puno', 'Puno', 5778, 124.74, -15.6878, -70.1436),
(1634, '210105', 'Capachica', 'Puno', 'Puno', 11436, 117.06, -15.6431, -69.8303),
(1635, '210106', 'Chucuito', 'Puno', 'Puno', 6807, 121.18, -15.8947, -69.8922),
(1636, '210107', 'Coata', 'Puno', 'Puno', 8265, 104, -15.5711, -69.9503),
(1637, '210108', 'Huata', 'Puno', 'Puno', 10988, 130.37, -15.6144, -69.9722),
(1638, '210109', 'Mañazo', 'Puno', 'Puno', 5400, 410.67, -15.7992, -70.3458),
(1639, '210110', 'Paucarcolla', 'Puno', 'Puno', 5254, 170.04, -15.7461, -70.0556),
(1640, '210111', 'Pichacani', 'Puno', 'Puno', 5298, 1633.48, -16.1508, -70.0642),
(1641, '210112', 'Plateria', 'Puno', 'Puno', 7674, 238.59, -15.9475, -69.8356),
(1642, '210113', 'San Antonio', 'Puno', 'Puno', 4025, 376.75, -16.1414, -70.3458),
(1643, '210114', 'Tiquillaca', 'Puno', 'Puno', 1725, 455.71, -15.7978, -70.1872),
(1644, '210115', 'Vilque', 'Puno', 'Puno', 3163, 193.29, -15.7661, -70.2594),
(1645, '210201', 'Azangaro', 'Azangaro', 'Puno', 28809, 706.13, -14.9083, -70.1969),
(1646, '210202', 'Achaya', 'Azangaro', 'Puno', 4619, 132.23, -15.2847, -70.1608),
(1647, '210203', 'Arapa', 'Azangaro', 'Puno', 7707, 329.85, -15.1411, -70.1117),
(1648, '210204', 'Asillo', 'Azangaro', 'Puno', 17767, 392.38, -14.7864, -70.3544),
(1649, '210205', 'Caminaca', 'Azangaro', 'Puno', 3543, 146.88, -15.3239, -70.0747),
(1650, '210206', 'Chupa', 'Azangaro', 'Puno', 13200, 143.21, -15.1069, -69.9861),
(1651, '210207', 'Jose Domingo Choquehuanca', 'Azangaro', 'Puno', 5595, 69.73, -15.0336, -70.3381),
(1652, '210208', 'Muñani', 'Azangaro', 'Puno', 8367, 764.49, -14.7689, -69.9528),
(1653, '210209', 'Potoni', 'Azangaro', 'Puno', 6586, 602.95, -14.3944, -70.1136),
(1654, '210210', 'Saman', 'Azangaro', 'Puno', 14541, 188.59, -15.2917, -70.0169),
(1655, '210211', 'San Anton', 'Azangaro', 'Puno', 10186, 514.84, -14.5922, -70.3125),
(1656, '210212', 'San Jose', 'Azangaro', 'Puno', 5838, 372.73, -14.6817, -70.1606),
(1657, '210213', 'San Juan de Salinas', 'Azangaro', 'Puno', 4430, 106, -14.9911, -70.1056),
(1658, '210214', 'Santiago de Pupuja', 'Azangaro', 'Puno', 5400, 301.27, -15.0547, -70.2792),
(1659, '210215', 'Tirapata', 'Azangaro', 'Puno', 3141, 198.73, -14.9544, -70.4028),
(1660, '210301', 'Macusani', 'Carabaya', 'Puno', 13291, 1029.56, -14.0686, -70.4308),
(1661, '210302', 'Ajoyani', 'Carabaya', 'Puno', 2140, 413.11, -14.2294, -70.2264),
(1662, '210303', 'Ayapata', 'Carabaya', 'Puno', 12540, 1091.61, -13.7781, -70.325),
(1663, '210304', 'Coasa', 'Carabaya', 'Puno', 16619, 3572.92, -13.9853, -70.0197),
(1664, '210305', 'Corani', 'Carabaya', 'Puno', 4035, 852.99, -13.8686, -70.6042),
(1665, '210306', 'Crucero', 'Carabaya', 'Puno', 9497, 836.37, -14.3619, -70.025),
(1666, '210307', 'Ituata', 'Carabaya', 'Puno', 6501, 1200.79, -13.8761, -70.2178),
(1667, '210308', 'Ollachea', 'Carabaya', 'Puno', 5765, 595.79, -13.7944, -70.4756),
(1668, '210309', 'San Gaban', 'Carabaya', 'Puno', 4199, 2029.22, -13.4333, -70.3889),
(1669, '210310', 'Usicayos', 'Carabaya', 'Puno', 24668, 644.04, -14.1256, -69.9672),
(1670, '210401', 'Juli', 'Chucuito', 'Puno', 21619, 720.38, -16.215, -69.4619),
(1671, '210402', 'Desaguadero', 'Chucuito', 'Puno', 32339, 178.21, -16.5653, -69.0433),
(1672, '210403', 'Huacullani', 'Chucuito', 'Puno', 23781, 705.28, -16.6292, -69.325),
(1673, '210404', 'Kelluyo', 'Chucuito', 'Puno', 26051, 485.77, -16.7208, -69.2492);
INSERT INTO `ubigeo` (`id_ubigeo`, `cod_ubigeo`, `dto_ubigeo`, `prov_ubigeo`, `dpto_ubigeo`, `pob_ubigeo`, `sup_ubigeo`, `x_ubigeo`, `y_ubigeo`) VALUES
(1674, '210405', 'Pisacoma', 'Chucuito', 'Puno', 13871, 959.34, -16.9092, -69.3736),
(1675, '210406', 'Pomata', 'Chucuito', 'Puno', 16206, 382.58, -16.2728, -69.2933),
(1676, '210407', 'Zepita', 'Chucuito', 'Puno', 19161, 546.57, -16.4964, -69.105),
(1677, '210501', 'Ilave', 'El Collao', 'Puno', 59120, 874.57, -16.0867, -69.6386),
(1678, '210502', 'Capazo', 'El Collao', 'Puno', 2351, 1039.25, -17.1828, -69.7439),
(1679, '210503', 'Pilcuyo', 'El Collao', 'Puno', 13172, 157, -16.11, -69.5547),
(1680, '210504', 'Santa Rosa', 'El Collao', 'Puno', 7989, 2524.02, -16.7414, -69.7175),
(1681, '210505', 'Conduriri', 'El Collao', 'Puno', 4496, 1005.67, -16.6156, -69.7025),
(1682, '210601', 'Huancane', 'Huancane', 'Puno', 18727, 381.62, -15.2017, -69.7614),
(1683, '210602', 'Cojata', 'Huancane', 'Puno', 4501, 881.18, -15.0161, -69.3647),
(1684, '210603', 'Huatasani', 'Huancane', 'Puno', 5634, 106.73, -15.0589, -69.8042),
(1685, '210604', 'Inchupalla', 'Huancane', 'Puno', 3422, 289.03, -15.0089, -69.6822),
(1686, '210605', 'Pusi', 'Huancane', 'Puno', 6515, 148.42, -15.4419, -69.9294),
(1687, '210606', 'Rosaspata', 'Huancane', 'Puno', 5326, 301.47, -15.2347, -69.5303),
(1688, '210607', 'Taraco', 'Huancane', 'Puno', 14483, 198.02, -15.2978, -69.9792),
(1689, '210608', 'Vilque Chico', 'Huancane', 'Puno', 8480, 499.38, -15.2144, -69.6886),
(1690, '210701', 'Lampa', 'Lampa', 'Puno', 10351, 675.82, -15.3636, -70.3653),
(1691, '210702', 'Cabanilla', 'Lampa', 'Puno', 5383, 443.04, -15.6194, -70.3489),
(1692, '210703', 'Calapuja', 'Lampa', 'Puno', 1506, 141.3, -15.31, -70.2217),
(1693, '210704', 'Nicasio', 'Lampa', 'Puno', 2710, 134.35, -15.2361, -70.2622),
(1694, '210705', 'Ocuviri', 'Lampa', 'Puno', 3246, 878.26, -15.1128, -70.9117),
(1695, '210706', 'Palca', 'Lampa', 'Puno', 2871, 483.96, -15.235, -70.5992),
(1696, '210707', 'Paratia', 'Lampa', 'Puno', 9675, 745.08, -15.4539, -70.6008),
(1697, '210708', 'Pucara', 'Lampa', 'Puno', 5201, 537.6, -15.0419, -70.3689),
(1698, '210709', 'Santa Lucia', 'Lampa', 'Puno', 7620, 1595.67, -15.6986, -70.6061),
(1699, '210710', 'Vilavila', 'Lampa', 'Puno', 4449, 156.65, -15.1883, -70.6606),
(1700, '210801', 'Ayaviri', 'Melgar', 'Puno', 22568, 1013.14, -14.8811, -70.5897),
(1701, '210802', 'Antauta', 'Melgar', 'Puno', 4447, 636.17, -14.3, -70.295),
(1702, '210803', 'Cupi', 'Melgar', 'Puno', 3519, 214.25, -14.9058, -70.8683),
(1703, '210804', 'Llalli', 'Melgar', 'Puno', 5003, 216.36, -14.9339, -70.8792),
(1704, '210805', 'Macari', 'Melgar', 'Puno', 8772, 673.78, -14.7706, -70.9033),
(1705, '210806', 'Nuñoa', 'Melgar', 'Puno', 11106, 2200.16, -14.4767, -70.6372),
(1706, '210807', 'Orurillo', 'Melgar', 'Puno', 11009, 379.05, -14.7261, -70.5133),
(1707, '210808', 'Santa Rosa', 'Melgar', 'Puno', 7526, 790.38, -14.6072, -70.7872),
(1708, '210809', 'Umachiri', 'Melgar', 'Puno', 4504, 323.56, -14.8497, -70.7494),
(1709, '210901', 'Moho', 'Moho', 'Puno', 16058, 494.36, -15.36, -69.5),
(1710, '210902', 'Conima', 'Moho', 'Puno', 3064, 72.95, -15.4572, -69.4375),
(1711, '210903', 'Huayrapata', 'Moho', 'Puno', 4282, 388.35, -15.3211, -69.3494),
(1712, '210904', 'Tilali', 'Moho', 'Puno', 2769, 48.15, -15.5192, -69.3456),
(1713, '211001', 'Putina', 'San Antonio de Putin', 'Puno', 27607, 1021.92, -14.9003, -69.8619),
(1714, '211002', 'Ananea', 'San Antonio de Putin', 'Puno', 33728, 939.56, -14.6786, -69.5333),
(1715, '211003', 'Pedro Vilca Apaza', 'San Antonio de Putin', 'Puno', 3054, 565.81, -15.0592, -69.8897),
(1716, '211004', 'Quilcapuncu', 'San Antonio de Putin', 'Puno', 5929, 516.66, -14.8964, -69.7344),
(1717, '211005', 'Sina', 'San Antonio de Putin', 'Puno', 1761, 163.43, -14.49, -69.2817),
(1718, '211101', 'Juliaca', 'San Roman', 'Puno', 235221, 533.5, -15.4939, -70.1356),
(1719, '211102', 'Cabana', 'San Roman', 'Puno', 4224, 191.23, -15.65, -70.3211),
(1720, '211103', 'Cabanillas', 'San Roman', 'Puno', 5459, 1267.06, -15.6425, -70.3503),
(1721, '211104', 'Caracoto', 'San Roman', 'Puno', 5608, 285.87, -15.5683, -70.1022),
(1722, '211105', 'San Miguel', 'San Roman', 'Puno', 54060, 121.8, -15.4097, -70.0958),
(1723, '211201', 'Sandia', 'Sandia', 'Puno', 12478, 580.13, -14.3231, -69.4667),
(1724, '211202', 'Cuyocuyo', 'Sandia', 'Puno', 4768, 503.91, -14.4717, -69.54),
(1725, '211203', 'Limbani', 'Sandia', 'Puno', 4422, 2112.34, -14.1458, -69.6897),
(1726, '211204', 'Patambuco', 'Sandia', 'Puno', 3967, 462.72, -14.3594, -69.6222),
(1727, '211205', 'Phara', 'Sandia', 'Puno', 4905, 400.9, -14.1511, -69.6642),
(1728, '211206', 'Quiaca', 'Sandia', 'Puno', 2413, 447.9, -14.4253, -69.3417),
(1729, '211207', 'San Juan del Oro', 'Sandia', 'Puno', 14201, 197.14, -14.2211, -69.1528),
(1730, '211208', 'Yanahuaya', 'Sandia', 'Puno', 2244, 670.61, -14.2822, -69.1844),
(1731, '211209', 'Alto Inambari', 'Sandia', 'Puno', 9765, 1124.88, -14.0897, -69.2442),
(1732, '211210', 'San Pedro de Putina Punco', 'Sandia', 'Puno', 14560, 5361.88, -14.1119, -69.0467),
(1733, '211301', 'Yunguyo', 'Yunguyo', 'Puno', 27385, 170.59, -16.2469, -69.095),
(1734, '211302', 'Anapia', 'Yunguyo', 'Puno', 3376, 9.54, -16.3133, -68.8539),
(1735, '211303', 'Copani', 'Yunguyo', 'Puno', 5040, 47.37, -16.3989, -69.0439),
(1736, '211304', 'Cuturapi', 'Yunguyo', 'Puno', 1245, 21.74, -16.2706, -69.1781),
(1737, '211305', 'Ollaraya', 'Yunguyo', 'Puno', 5376, 23.67, -16.2308, -68.9981),
(1738, '211306', 'Tinicachi', 'Yunguyo', 'Puno', 1629, 6.2, -16.1967, -68.9603),
(1739, '211307', 'Unicachi', 'Yunguyo', 'Puno', 3889, 11.1, -16.2239, -68.9761),
(1740, '220101', 'Moyobamba', 'Moyobamba', 'San Martin', 87833, 2737.57, -6.0283, -76.9719),
(1741, '220102', 'Calzada', 'Moyobamba', 'San Martin', 4435, 95.38, -6.0319, -77.0675),
(1742, '220103', 'Habana', 'Moyobamba', 'San Martin', 2078, 91.25, -6.0808, -77.0928),
(1743, '220104', 'Jepelacio', 'Moyobamba', 'San Martin', 22049, 360.03, -6.1081, -76.9161),
(1744, '220105', 'Soritor', 'Moyobamba', 'San Martin', 35837, 387.76, -6.1408, -77.105),
(1745, '220106', 'Yantalo', 'Moyobamba', 'San Martin', 3536, 100.32, -5.9747, -77.0225),
(1746, '220201', 'Bellavista', 'Bellavista', 'San Martin', 13643, 287.12, -7.0653, -76.5883),
(1747, '220202', 'Alto Biavo', 'Bellavista', 'San Martin', 7368, 6117.12, -7.2936, -76.4544),
(1748, '220203', 'Bajo Biavo', 'Bellavista', 'San Martin', 20617, 975.43, -7.1011, -76.4867),
(1749, '220204', 'Huallaga', 'Bellavista', 'San Martin', 3118, 210.42, -7.1292, -76.6489),
(1750, '220205', 'San Pablo', 'Bellavista', 'San Martin', 9128, 362.49, -6.8081, -76.5731),
(1751, '220206', 'San Rafael', 'Bellavista', 'San Martin', 7706, 98.32, -7.0308, -76.4764),
(1752, '220301', 'San Jose de Sisa', 'El Dorado', 'San Martin', 11954, 299.9, -6.6136, -76.6931),
(1753, '220302', 'Agua Blanca', 'El Dorado', 'San Martin', 2385, 168.19, -6.7289, -76.6975),
(1754, '220303', 'San Martin', 'El Dorado', 'San Martin', 13834, 562.57, -6.5147, -76.7425),
(1755, '220304', 'Santa Rosa', 'El Dorado', 'San Martin', 10704, 243.41, -6.7456, -76.6264),
(1756, '220305', 'Shatoja', 'El Dorado', 'San Martin', 3281, 24.07, -6.5283, -76.7211),
(1757, '220401', 'Saposoa', 'Huallaga', 'San Martin', 11436, 545.43, -6.9339, -76.7733),
(1758, '220402', 'Alto Saposoa', 'Huallaga', 'San Martin', 3296, 1347.34, -6.7658, -76.8139),
(1759, '220403', 'El Eslabon', 'Huallaga', 'San Martin', 3965, 122.77, -7.0031, -76.7436),
(1760, '220404', 'Piscoyacu', 'Huallaga', 'San Martin', 3958, 184.87, -6.9831, -76.7647),
(1761, '220405', 'Sacanche', 'Huallaga', 'San Martin', 2602, 143.15, -7.07, -76.7136),
(1762, '220406', 'Tingo de Saposoa', 'Huallaga', 'San Martin', 661, 37.29, -7.0936, -76.6417),
(1763, '220501', 'Lamas', 'Lamas', 'San Martin', 12528, 79.82, -6.4217, -76.5211),
(1764, '220502', 'Alonso de Alvarado', 'Lamas', 'San Martin', 19886, 294.2, -6.35, -76.77),
(1765, '220503', 'Barranquita', 'Lamas', 'San Martin', 5140, 1065.12, -6.2517, -76.0331),
(1766, '220504', 'Caynarachi', 'Lamas', 'San Martin', 8040, 1678.69, -6.3306, -76.2836),
(1767, '220505', 'Cuñumbuqui', 'Lamas', 'San Martin', 4815, 191.46, -6.5089, -76.4803),
(1768, '220506', 'Pinto Recodo', 'Lamas', 'San Martin', 11115, 524.07, -6.3794, -76.6033),
(1769, '220507', 'Rumisapa', 'Lamas', 'San Martin', 2514, 39.19, -6.4486, -76.4722),
(1770, '220508', 'San Roque de Cumbaza', 'Lamas', 'San Martin', 1466, 525.15, -6.3864, -76.4419),
(1771, '220509', 'Shanao', 'Lamas', 'San Martin', 3659, 24.59, -6.41, -76.5939),
(1772, '220510', 'Tabalosos', 'Lamas', 'San Martin', 13492, 485.25, -6.3856, -76.6333),
(1773, '220511', 'Zapatero', 'Lamas', 'San Martin', 4823, 175, -6.5308, -76.4911),
(1774, '220601', 'Juanjui', 'Mariscal Caceres', 'San Martin', 26662, 335.19, -7.1819, -76.7317),
(1775, '220602', 'Campanilla', 'Mariscal Caceres', 'San Martin', 7672, 2249.83, -7.4814, -76.6528),
(1776, '220603', 'Huicungo', 'Mariscal Caceres', 'San Martin', 6630, 9830.17, -7.3272, -76.7783),
(1777, '220604', 'Pachiza', 'Mariscal Caceres', 'San Martin', 4205, 1839.51, -7.2975, -76.7739),
(1778, '220605', 'Pajarillo', 'Mariscal Caceres', 'San Martin', 6192, 244.03, -7.1789, -76.6881),
(1779, '220701', 'Picota', 'Picota', 'San Martin', 8314, 218.72, -6.9194, -76.3317),
(1780, '220702', 'Buenos Aires', 'Picota', 'San Martin', 3287, 272.97, -6.7939, -76.3269),
(1781, '220703', 'Caspisapa', 'Picota', 'San Martin', 2130, 81.44, -6.9589, -76.4189),
(1782, '220704', 'Pilluana', 'Picota', 'San Martin', 683, 239.27, -6.7781, -76.2931),
(1783, '220705', 'Pucacaca', 'Picota', 'San Martin', 2431, 230.72, -6.8506, -76.3417),
(1784, '220706', 'San Cristobal', 'Picota', 'San Martin', 1427, 29.63, -6.9925, -76.4186),
(1785, '220707', 'San Hilarion', 'Picota', 'San Martin', 5756, 96.55, -7.0022, -76.4428),
(1786, '220708', 'Shamboyacu', 'Picota', 'San Martin', 12188, 415.58, -7.0425, -76.1119),
(1787, '220709', 'Tingo de Ponasa', 'Picota', 'San Martin', 4889, 340.01, -6.9356, -76.2511),
(1788, '220710', 'Tres Unidos', 'Picota', 'San Martin', 5349, 246.52, -6.8064, -76.2311),
(1789, '220801', 'Rioja', 'Rioja', 'San Martin', 24222, 185.69, -6.0589, -77.1669),
(1790, '220802', 'Awajun', 'Rioja', 'San Martin', 12342, 481.08, -5.8139, -77.3822),
(1791, '220803', 'Elias Soplin Vargas', 'Rioja', 'San Martin', 13897, 199.64, -5.9908, -77.2781),
(1792, '220804', 'Nueva Cajamarca', 'Rioja', 'San Martin', 47637, 330.31, -5.94, -77.3083),
(1793, '220805', 'Pardo Miguel', 'Rioja', 'San Martin', 23572, 1131.87, -5.7381, -77.5025),
(1794, '220806', 'Posic', 'Rioja', 'San Martin', 1706, 54.65, -6.0139, -77.1636),
(1795, '220807', 'San Fernando', 'Rioja', 'San Martin', 3360, 63.53, -5.9019, -77.27),
(1796, '220808', 'Yorongos', 'Rioja', 'San Martin', 3741, 74.53, -6.1356, -77.1447),
(1797, '220809', 'Yuracyacu', 'Rioja', 'San Martin', 3914, 13.74, -5.9278, -77.2269),
(1798, '220901', 'Tarapoto', 'San Martin', 'San Martin', 75656, 67.81, -6.4969, -76.3664),
(1799, '220902', 'Alberto Leveau', 'San Martin', 'San Martin', 645, 268.4, -6.6633, -76.2878),
(1800, '220903', 'Cacatachi', 'San Martin', 'San Martin', 3466, 75.36, -6.4619, -76.4514),
(1801, '220904', 'Chazuta', 'San Martin', 'San Martin', 8206, 966.38, -6.5739, -76.0931),
(1802, '220905', 'Chipurana', 'San Martin', 'San Martin', 1818, 500.44, -6.3539, -75.7411),
(1803, '220906', 'El Porvenir', 'San Martin', 'San Martin', 2841, 483.21, -6.215, -75.7867),
(1804, '220907', 'Huimbayoc', 'San Martin', 'San Martin', 3262, 1609.07, -6.4167, -75.7658),
(1805, '220908', 'Juan Guerra', 'San Martin', 'San Martin', 3167, 196.5, -6.5833, -76.3336),
(1806, '220909', 'La Banda de Shilcayo', 'San Martin', 'San Martin', 43596, 286.68, -6.5033, -76.3514),
(1807, '220910', 'Morales', 'San Martin', 'San Martin', 30844, 43.91, -6.4797, -76.3828),
(1808, '220911', 'Papaplaya', 'San Martin', 'San Martin', 1975, 686.19, -6.245, -75.7903),
(1809, '220912', 'San Antonio', 'San Martin', 'San Martin', 1345, 93.03, -6.42, -76.4044),
(1810, '220913', 'Sauce', 'San Martin', 'San Martin', 16808, 103, -6.6914, -76.2183),
(1811, '220914', 'Shapaja', 'San Martin', 'San Martin', 1472, 270.44, -6.58, -76.2653),
(1812, '221001', 'Tocache', 'Tocache', 'San Martin', 25393, 1142.04, -8.1883, -76.5153),
(1813, '221002', 'Nuevo Progreso', 'Tocache', 'San Martin', 12370, 860.98, -8.45, -76.3253),
(1814, '221003', 'Polvora', 'Tocache', 'San Martin', 14439, 2174.48, -7.9075, -76.6706),
(1815, '221004', 'Shunte', 'Tocache', 'San Martin', 983, 964.21, -8.35, -76.7231),
(1816, '221005', 'Uchiza', 'Tocache', 'San Martin', 20197, 723.73, -8.4558, -76.46),
(1817, '230101', 'Tacna', 'Tacna', 'Tacna', 80845, 1877.78, -18.01, -70.2478),
(1818, '230102', 'Alto de La Alianza', 'Tacna', 'Tacna', 40652, 371.4, -17.9908, -70.2475),
(1819, '230103', 'Calana', 'Tacna', 'Tacna', 3338, 108.38, -17.9406, -70.1825),
(1820, '230104', 'Ciudad Nueva', 'Tacna', 'Tacna', 39060, 173.42, -17.985, -70.2378),
(1821, '230105', 'Inclan', 'Tacna', 'Tacna', 8125, 1414.82, -17.795, -70.4919),
(1822, '230106', 'Pachia', 'Tacna', 'Tacna', 1971, 603.68, -17.8972, -70.1528),
(1823, '230107', 'Palca', 'Tacna', 'Tacna', 1728, 1417.86, -17.7733, -69.9583),
(1824, '230108', 'Pocollay', 'Tacna', 'Tacna', 22319, 265.65, -17.9964, -70.2197),
(1825, '230109', 'Sama', 'Tacna', 'Tacna', 2679, 1115.98, -17.8586, -70.5731),
(1826, '230110', 'Coronel Gregorio Albarracin Lanchipa', 'Tacna', 'Tacna', 123662, 187.74, -18.0408, -70.2542),
(1827, '230111', 'La Yarada-Los Palos', 'Tacna', 'Tacna', 5043, 529.4, -18.2292, -70.4769),
(1828, '230201', 'Candarave', 'Candarave', 'Tacna', 3008, 1111.03, -17.2669, -70.2497),
(1829, '230202', 'Cairani', 'Candarave', 'Tacna', 1299, 371.17, -17.2861, -70.3628),
(1830, '230203', 'Camilaca', 'Candarave', 'Tacna', 1468, 518.65, -17.2669, -70.3833),
(1831, '230204', 'Curibaya', 'Candarave', 'Tacna', 174, 126.98, -17.3822, -70.3353),
(1832, '230205', 'Huanuara', 'Candarave', 'Tacna', 909, 95.61, -17.3133, -70.3217),
(1833, '230206', 'Quilahuani', 'Candarave', 'Tacna', 1229, 37.66, -17.3175, -70.2583),
(1834, '230301', 'Locumba', 'Jorge Basadre', 'Tacna', 2641, 968.99, -17.6133, -70.7611),
(1835, '230302', 'Ilabaya', 'Jorge Basadre', 'Tacna', 2806, 1111.39, -17.4214, -70.5122),
(1836, '230303', 'Ite', 'Jorge Basadre', 'Tacna', 3415, 848.18, -17.8617, -70.965),
(1837, '230401', 'Tarata', 'Tarata', 'Tacna', 3233, 864.31, -17.4772, -70.0306),
(1838, '230402', 'Heroes Albarracin', 'Tarata', 'Tacna', 676, 372.41, -17.4817, -70.1211),
(1839, '230403', 'Estique', 'Tarata', 'Tacna', 741, 312.85, -17.5428, -70.0206),
(1840, '230404', 'Estique-Pampa', 'Tarata', 'Tacna', 703, 185.61, -17.5372, -70.0344),
(1841, '230405', 'Sitajara', 'Tarata', 'Tacna', 728, 251.24, -17.3747, -70.1342),
(1842, '230406', 'Susapaya', 'Tarata', 'Tacna', 746, 373.21, -17.3528, -70.1311),
(1843, '230407', 'Tarucachi', 'Tarata', 'Tacna', 412, 113.27, -17.5253, -70.0292),
(1844, '230408', 'Ticaco', 'Tarata', 'Tacna', 547, 347.06, -17.4506, -70.0456),
(1845, '240101', 'Tumbes', 'Tumbes', 'Tumbes', 115562, 158.14, -3.5647, -80.4536),
(1846, '240102', 'Corrales', 'Tumbes', 'Tumbes', 24561, 131.6, -3.6022, -80.4797),
(1847, '240103', 'La Cruz', 'Tumbes', 'Tumbes', 9444, 65.23, -3.6378, -80.5925),
(1848, '240104', 'Pampas de Hospital', 'Tumbes', 'Tumbes', 7239, 727.75, -3.6956, -80.4358),
(1849, '240105', 'San Jacinto', 'Tumbes', 'Tumbes', 8704, 598.72, -3.6431, -80.4511),
(1850, '240106', 'San Juan de La Virgen', 'Tumbes', 'Tumbes', 4160, 118.71, -3.6275, -80.4336),
(1851, '240201', 'Zorritos', 'Contralmirante Villa', 'Tumbes', 12785, 644.52, -3.6806, -80.6783),
(1852, '240202', 'Casitas', 'Contralmirante Villa', 'Tumbes', 2088, 855.36, -3.9406, -80.6519),
(1853, '240203', 'Canoas de Punta Sal', 'Contralmirante Villa', 'Tumbes', 5700, 623.34, -3.9467, -80.9428),
(1854, '240301', 'Zarumilla', 'Zarumilla', 'Tumbes', 23148, 113.25, -3.5011, -80.275),
(1855, '240302', 'Aguas Verdes', 'Zarumilla', 'Tumbes', 24781, 46.06, -3.4814, -80.2461),
(1856, '240303', 'Matapalo', 'Zarumilla', 'Tumbes', 2529, 392.29, -3.6839, -80.1997),
(1857, '240304', 'Papayal', 'Zarumilla', 'Tumbes', 5348, 193.53, -3.5736, -80.2333),
(1858, '250101', 'Calleria', 'Coronel Portillo', 'Ucayali', 159364, 10485.4, -8.3828, -74.5322),
(1859, '250102', 'Campoverde', 'Coronel Portillo', 'Ucayali', 16324, 1194.1, -8.4761, -74.8072),
(1860, '250103', 'Iparia', 'Coronel Portillo', 'Ucayali', 12193, 8029.12, -9.3064, -74.4378),
(1861, '250104', 'Masisea', 'Coronel Portillo', 'Ucayali', 13150, 14102.2, -8.6025, -74.3097),
(1862, '250105', 'Yarinacocha', 'Coronel Portillo', 'Ucayali', 101126, 596.2, -8.355, -74.5769),
(1863, '250106', 'Nueva Requena', 'Coronel Portillo', 'Ucayali', 5699, 1857.82, -8.3061, -74.8653),
(1864, '250107', 'Manantay', 'Coronel Portillo', 'Ucayali', 83040, 579.91, -8.3981, -74.5378),
(1865, '250201', 'Raymondi', 'Atalaya', 'Ucayali', 35109, 14505, -10.7278, -73.7592),
(1866, '250202', 'Sepahua', 'Atalaya', 'Ucayali', 9193, 8223.63, -11.1464, -73.0475),
(1867, '250203', 'Tahuania', 'Atalaya', 'Ucayali', 8284, 7010.09, -10.1033, -73.9808),
(1868, '250204', 'Yurua', 'Atalaya', 'Ucayali', 2716, 9175.58, -9.5281, -72.7622),
(1869, '250301', 'Padre Abad', 'Padre Abad', 'Ucayali', 26614, 4689.2, -9.0375, -75.5128),
(1870, '250302', 'Irazola', 'Padre Abad', 'Ucayali', 10830, 998.93, -8.8289, -75.2139),
(1871, '250303', 'Curimana', 'Padre Abad', 'Ucayali', 8956, 2134.04, -8.4353, -75.1597),
(1872, '250304', 'Neshuya', 'Padre Abad', 'Ucayali', 8445, 579.51, -8.6392, -74.9644),
(1873, '250305', 'Alexander von Humboldt', 'Padre Abad', 'Ucayali', 6678, 190.8, -8.8264, -75.0522),
(1874, '250401', 'Purus', 'Purus', 'Ucayali', 4657, 17847.8, -9.7703, -70.7122);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniejecutora`
--

CREATE TABLE `uniejecutora` (
  `idUniEjecutora` int(11) NOT NULL,
  `codUniEjecutora` varchar(4) DEFAULT NULL,
  `nomUniEjecutora` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uniejecutora`
--

INSERT INTO `uniejecutora` (`idUniEjecutora`, `codUniEjecutora`, `nomUniEjecutora`) VALUES
(1, 'Unid', 'Unidad Ejecutora act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  `idEdoRegistro` int(11) DEFAULT NULL,
  `cuentaUsuario` varchar(64) DEFAULT NULL,
  `contrasenaUsuario` varchar(64) DEFAULT NULL,
  `fecCreacion` date DEFAULT NULL,
  `pregSecreta` varchar(64) DEFAULT NULL,
  `respPregSecreta` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `via`
--

CREATE TABLE `via` (
  `idVia` int(11) NOT NULL,
  `nomVia` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `via`
--

INSERT INTO `via` (`idVia`, `nomVia`) VALUES
(1, 'V?a 1 act');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `idZona` int(11) NOT NULL,
  `nomZona` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`idZona`, `nomZona`) VALUES
(1, 'Zona 1 act Josue Alejandro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afp`
--
ALTER TABLE `afp`
  ADD PRIMARY KEY (`idAfp`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`idBeneficiario`),
  ADD KEY `FK_REFERENCE_25` (`idPersona`),
  ADD KEY `FK_REFERENCE_26` (`idTipoCalcJud`),
  ADD KEY `FK_REFERENCE_27` (`idModoPago`),
  ADD KEY `FK_REFERENCE_28` (`idParentesco`);

--
-- Indices de la tabla `beneficiarioempleado`
--
ALTER TABLE `beneficiarioempleado`
  ADD PRIMARY KEY (`idBeneficiarioEmpleado`),
  ADD KEY `FK_REFERENCE_24` (`idEmpleado`),
  ADD KEY `FK_REFERENCE_29` (`idBeneficiario`);

--
-- Indices de la tabla `cargoorigen`
--
ALTER TABLE `cargoorigen`
  ADD PRIMARY KEY (`idCargoOrigen`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `coddescuento`
--
ALTER TABLE `coddescuento`
  ADD PRIMARY KEY (`idCodDescuento`);

--
-- Indices de la tabla `codfiscal`
--
ALTER TABLE `codfiscal`
  ADD PRIMARY KEY (`idCodFiscal`);

--
-- Indices de la tabla `codregional`
--
ALTER TABLE `codregional`
  ADD PRIMARY KEY (`idCodRegional`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `FK_REFERENCE_3` (`idPais`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`idDescuento`),
  ADD KEY `FK_REFERENCE_20` (`idRegionCargo`),
  ADD KEY `FK_REFERENCE_21` (`idCodDescuento`),
  ADD KEY `FK_REFERENCE_22` (`idEmpleado`);

--
-- Indices de la tabla `direncargo`
--
ALTER TABLE `direncargo`
  ADD PRIMARY KEY (`idDirEncargo`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`idDistrito`),
  ADD KEY `FK_REFERENCE_5` (`idProvincia`);

--
-- Indices de la tabla `edocivil`
--
ALTER TABLE `edocivil`
  ADD PRIMARY KEY (`idEdoCivil`);

--
-- Indices de la tabla `edoregistro`
--
ALTER TABLE `edoregistro`
  ADD PRIMARY KEY (`idEdoRegistro`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `FK_REFERENCE_15` (`idPersona`),
  ADD KEY `FK_REFERENCE_16` (`idSituacion`),
  ADD KEY `FK_REFERENCE_17` (`idTipRegistro`),
  ADD KEY `FK_REFERENCE_18` (`idSegSalud`),
  ADD KEY `FK_REFERENCE_19` (`idTipoPlanilla`),
  ADD KEY `FK_REFERENCE_31` (`idCodFiscal`),
  ADD KEY `FK_REFERENCE_32` (`idAfp`),
  ADD KEY `FK_REFERENCE_33` (`idCodRegional`),
  ADD KEY `FK_REFERENCE_34` (`idUniEjecutora`),
  ADD KEY `FK_REFERENCE_35` (`idNEC`),
  ADD KEY `FK_REFERENCE_36` (`idNivel`),
  ADD KEY `FK_REFERENCE_37` (`idEstablecimiento`),
  ADD KEY `FK_REFERENCE_38` (`idRegLaboral`),
  ADD KEY `FK_REFERENCE_39` (`idTipServidor`),
  ADD KEY `FK_REFERENCE_40` (`idNumMagist`),
  ADD KEY `FK_REFERENCE_41` (`idGpoRemunerativo`),
  ADD KEY `FK_REFERENCE_42` (`idhatEmb`),
  ADD KEY `FK_REFERENCE_43` (`idCargoOrigen`),
  ADD KEY `FK_REFERENCE_44` (`idNivelOrigen`),
  ADD KEY `FK_REFERENCE_45` (`idDirEncargo`),
  ADD KEY `FK_REFERENCE_46` (`idPalMagist`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`idEstablecimiento`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `gporemunerativo`
--
ALTER TABLE `gporemunerativo`
  ADD PRIMARY KEY (`idGpoRemunerativo`);

--
-- Indices de la tabla `hatemb`
--
ALTER TABLE `hatemb`
  ADD PRIMARY KEY (`idhatEmb`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idIdioma`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`),
  ADD KEY `INDEX_LOG` (`idlog`),
  ADD KEY `FK_REFERENCE_23` (`idUsuario`);

--
-- Indices de la tabla `modopago`
--
ALTER TABLE `modopago`
  ADD PRIMARY KEY (`idModoPago`);

--
-- Indices de la tabla `nec`
--
ALTER TABLE `nec`
  ADD PRIMARY KEY (`idNEC`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `nivelorigen`
--
ALTER TABLE `nivelorigen`
  ADD PRIMARY KEY (`idNivelOrigen`);

--
-- Indices de la tabla `nummagist`
--
ALTER TABLE `nummagist`
  ADD PRIMARY KEY (`idNumMagist`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `palmagist`
--
ALTER TABLE `palmagist`
  ADD PRIMARY KEY (`idPalMagist`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`idParentesco`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `FK_REFERENCE_10` (`idDistritoDir`),
  ADD KEY `FK_REFERENCE_12` (`idTipoDoc`),
  ADD KEY `FK_REFERENCE_13` (`idZona`),
  ADD KEY `FK_REFERENCE_14` (`idVia`),
  ADD KEY `FK_REFERENCE_6` (`idGenero`),
  ADD KEY `FK_REFERENCE_7` (`idEdoCivil`),
  ADD KEY `FK_REFERENCE_8` (`idIdioma`),
  ADD KEY `FK_REFERENCE_9` (`idDistritoNac`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idProvincia`),
  ADD KEY `FK_REFERENCE_4` (`idDepartamento`);

--
-- Indices de la tabla `regioncargo`
--
ALTER TABLE `regioncargo`
  ADD PRIMARY KEY (`idRegionCargo`);

--
-- Indices de la tabla `reglaboral`
--
ALTER TABLE `reglaboral`
  ADD PRIMARY KEY (`idRegLaboral`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`),
  ADD KEY `IND_ROL` (`idRol`,`nomRol`);

--
-- Indices de la tabla `segsalud`
--
ALTER TABLE `segsalud`
  ADD PRIMARY KEY (`idSegSalud`);

--
-- Indices de la tabla `situacion`
--
ALTER TABLE `situacion`
  ADD PRIMARY KEY (`idSituacion`);

--
-- Indices de la tabla `tipocalcjud`
--
ALTER TABLE `tipocalcjud`
  ADD PRIMARY KEY (`idTipoCalcJud`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `tipoplanilla`
--
ALTER TABLE `tipoplanilla`
  ADD PRIMARY KEY (`idTipoPlanilla`);

--
-- Indices de la tabla `tipregistro`
--
ALTER TABLE `tipregistro`
  ADD PRIMARY KEY (`idTipRegistro`);

--
-- Indices de la tabla `tipservidor`
--
ALTER TABLE `tipservidor`
  ADD PRIMARY KEY (`idTipServidor`);

--
-- Indices de la tabla `uniejecutora`
--
ALTER TABLE `uniejecutora`
  ADD PRIMARY KEY (`idUniEjecutora`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `IND_USUARIO` (`idUsuario`,`cuentaUsuario`),
  ADD KEY `FK_REFERENCE_1` (`idRol`),
  ADD KEY `FK_REFERENCE_11` (`idPersona`);

--
-- Indices de la tabla `via`
--
ALTER TABLE `via`
  ADD PRIMARY KEY (`idVia`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`idZona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afp`
--
ALTER TABLE `afp`
  MODIFY `idAfp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `idBeneficiario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `beneficiarioempleado`
--
ALTER TABLE `beneficiarioempleado`
  MODIFY `idBeneficiarioEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cargoorigen`
--
ALTER TABLE `cargoorigen`
  MODIFY `idCargoOrigen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coddescuento`
--
ALTER TABLE `coddescuento`
  MODIFY `idCodDescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codfiscal`
--
ALTER TABLE `codfiscal`
  MODIFY `idCodFiscal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `codregional`
--
ALTER TABLE `codregional`
  MODIFY `idCodRegional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `idDescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direncargo`
--
ALTER TABLE `direncargo`
  MODIFY `idDirEncargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `idDistrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `edocivil`
--
ALTER TABLE `edocivil`
  MODIFY `idEdoCivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `edoregistro`
--
ALTER TABLE `edoregistro`
  MODIFY `idEdoRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `idEstablecimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gporemunerativo`
--
ALTER TABLE `gporemunerativo`
  MODIFY `idGpoRemunerativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hatemb`
--
ALTER TABLE `hatemb`
  MODIFY `idhatEmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modopago`
--
ALTER TABLE `modopago`
  MODIFY `idModoPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nec`
--
ALTER TABLE `nec`
  MODIFY `idNEC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivelorigen`
--
ALTER TABLE `nivelorigen`
  MODIFY `idNivelOrigen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nummagist`
--
ALTER TABLE `nummagist`
  MODIFY `idNumMagist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `palmagist`
--
ALTER TABLE `palmagist`
  MODIFY `idPalMagist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `idParentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `regioncargo`
--
ALTER TABLE `regioncargo`
  MODIFY `idRegionCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reglaboral`
--
ALTER TABLE `reglaboral`
  MODIFY `idRegLaboral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `segsalud`
--
ALTER TABLE `segsalud`
  MODIFY `idSegSalud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `situacion`
--
ALTER TABLE `situacion`
  MODIFY `idSituacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipocalcjud`
--
ALTER TABLE `tipocalcjud`
  MODIFY `idTipoCalcJud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoplanilla`
--
ALTER TABLE `tipoplanilla`
  MODIFY `idTipoPlanilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipregistro`
--
ALTER TABLE `tipregistro`
  MODIFY `idTipRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipservidor`
--
ALTER TABLE `tipservidor`
  MODIFY `idTipServidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `uniejecutora`
--
ALTER TABLE `uniejecutora`
  MODIFY `idUniEjecutora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `via`
--
ALTER TABLE `via`
  MODIFY `idVia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `idZona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`);

--
-- Filtros para la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`idRegionCargo`) REFERENCES `regioncargo` (`idRegionCargo`),
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`idCodDescuento`) REFERENCES `coddescuento` (`idCodDescuento`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`idProvincia`) REFERENCES `provincia` (`idProvincia`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`idSituacion`) REFERENCES `situacion` (`idSituacion`),
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`idTipRegistro`) REFERENCES `tipregistro` (`idTipRegistro`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`idSegSalud`) REFERENCES `segsalud` (`idSegSalud`),
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`idTipoPlanilla`) REFERENCES `tipoplanilla` (`idTipoPlanilla`),
  ADD CONSTRAINT `FK_REFERENCE_31` FOREIGN KEY (`idCodFiscal`) REFERENCES `codfiscal` (`idCodFiscal`),
  ADD CONSTRAINT `FK_REFERENCE_32` FOREIGN KEY (`idAfp`) REFERENCES `afp` (`idAfp`),
  ADD CONSTRAINT `FK_REFERENCE_33` FOREIGN KEY (`idCodRegional`) REFERENCES `codregional` (`idCodRegional`),
  ADD CONSTRAINT `FK_REFERENCE_34` FOREIGN KEY (`idUniEjecutora`) REFERENCES `uniejecutora` (`idUniEjecutora`),
  ADD CONSTRAINT `FK_REFERENCE_35` FOREIGN KEY (`idNEC`) REFERENCES `nec` (`idNEC`),
  ADD CONSTRAINT `FK_REFERENCE_36` FOREIGN KEY (`idNivel`) REFERENCES `nivel` (`idNivel`),
  ADD CONSTRAINT `FK_REFERENCE_37` FOREIGN KEY (`idEstablecimiento`) REFERENCES `establecimiento` (`idEstablecimiento`),
  ADD CONSTRAINT `FK_REFERENCE_38` FOREIGN KEY (`idRegLaboral`) REFERENCES `reglaboral` (`idRegLaboral`),
  ADD CONSTRAINT `FK_REFERENCE_39` FOREIGN KEY (`idTipServidor`) REFERENCES `tipservidor` (`idTipServidor`),
  ADD CONSTRAINT `FK_REFERENCE_40` FOREIGN KEY (`idNumMagist`) REFERENCES `nummagist` (`idNumMagist`),
  ADD CONSTRAINT `FK_REFERENCE_41` FOREIGN KEY (`idGpoRemunerativo`) REFERENCES `gporemunerativo` (`idGpoRemunerativo`),
  ADD CONSTRAINT `FK_REFERENCE_42` FOREIGN KEY (`idhatEmb`) REFERENCES `hatemb` (`idhatEmb`),
  ADD CONSTRAINT `FK_REFERENCE_43` FOREIGN KEY (`idCargoOrigen`) REFERENCES `cargoorigen` (`idCargoOrigen`),
  ADD CONSTRAINT `FK_REFERENCE_44` FOREIGN KEY (`idNivelOrigen`) REFERENCES `nivelorigen` (`idNivelOrigen`),
  ADD CONSTRAINT `FK_REFERENCE_45` FOREIGN KEY (`idDirEncargo`) REFERENCES `direncargo` (`idDirEncargo`),
  ADD CONSTRAINT `FK_REFERENCE_46` FOREIGN KEY (`idPalMagist`) REFERENCES `palmagist` (`idPalMagist`);

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`idDistritoDir`) REFERENCES `distrito` (`idDistrito`),
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodoc` (`idTipoDoc`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`idZona`) REFERENCES `zona` (`idZona`),
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`idVia`) REFERENCES `via` (`idVia`),
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`),
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`idEdoCivil`) REFERENCES `edocivil` (`idEdoCivil`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`idIdioma`) REFERENCES `idioma` (`idIdioma`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`idDistritoNac`) REFERENCES `distrito` (`idDistrito`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
