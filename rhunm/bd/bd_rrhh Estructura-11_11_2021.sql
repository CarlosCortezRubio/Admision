-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 00:02:07
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `idBanco` int(11) NOT NULL,
  `idEdoRegistro` int(11) NOT NULL,
  `nomBanco` varchar(50) NOT NULL,
  `etiBanco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoorigen`
--

CREATE TABLE `cargoorigen` (
  `idCargoOrigen` int(11) NOT NULL,
  `codCargoOrigen` varchar(4) DEFAULT NULL,
  `nomCargoOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codregional`
--

CREATE TABLE `codregional` (
  `idCodRegional` int(11) NOT NULL,
  `codCodRegional` varchar(4) DEFAULT NULL,
  `nomCodRegional` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE `conceptos` (
  `idConceptos` int(11) NOT NULL,
  `idTipoConcepto` int(11) DEFAULT NULL,
  `idEdoRegistro` int(11) DEFAULT NULL,
  `codConceptos` varchar(8) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concplanilla`
--

CREATE TABLE `concplanilla` (
  `idConcPlanilla` int(11) NOT NULL,
  `idConceptos` int(11) DEFAULT NULL,
  `idplanillaPensionado` int(11) DEFAULT NULL,
  `mntConcPlanilla` decimal(22,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Conceptos - Planilla';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `idPais` int(11) DEFAULT NULL,
  `nomDepartamento` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `idDistrito` int(11) NOT NULL,
  `idProvincia` int(11) DEFAULT NULL,
  `nomDistrito` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edocivil`
--

CREATE TABLE `edocivil` (
  `idEdoCivil` int(11) NOT NULL,
  `nomEdoCivil` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `idEstablecimiento` int(11) NOT NULL,
  `codEstablecimiento` varchar(4) DEFAULT NULL,
  `nomEstablecimiento` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nomGenero` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gporemunerativo`
--

CREATE TABLE `gporemunerativo` (
  `idGpoRemunerativo` int(11) NOT NULL,
  `codGpoRemunerativo` varchar(4) DEFAULT NULL,
  `nomGpoRemunerativo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hatemb`
--

CREATE TABLE `hatemb` (
  `idhatEmb` int(11) NOT NULL,
  `codhatEmb` varchar(8) DEFAULT NULL,
  `nomhatEmb` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idIdioma` int(11) NOT NULL,
  `nomIdioma` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nec`
--

CREATE TABLE `nec` (
  `idNEC` int(11) NOT NULL,
  `codNEC` varchar(4) DEFAULT NULL,
  `nomNEC` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `idNivel` int(11) NOT NULL,
  `codNivel` varchar(4) DEFAULT NULL,
  `nomNivel` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelorigen`
--

CREATE TABLE `nivelorigen` (
  `idNivelOrigen` int(11) NOT NULL,
  `codNivelOrigen` varchar(4) DEFAULT NULL,
  `nomNivelOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nummagist`
--

CREATE TABLE `nummagist` (
  `idNumMagist` int(11) NOT NULL,
  `codNumMagist` varchar(4) DEFAULT NULL,
  `nomNumMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nomPais` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palmagist`
--

CREATE TABLE `palmagist` (
  `idPalMagist` int(11) NOT NULL,
  `codPalMagist` varchar(4) DEFAULT NULL,
  `nomPalMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `idParentesco` int(11) NOT NULL,
  `codParentesco` varchar(8) DEFAULT NULL,
  `nomParentesco` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `idPeriodo` int(11) NOT NULL,
  `idEdoRegistro` int(11) DEFAULT NULL,
  `anioPeriodo` int(11) DEFAULT NULL,
  `mesPeriodo` int(11) DEFAULT NULL,
  `nomPeriodo` varchar(64) DEFAULT NULL,
  `obsPeriodo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `emaDomPersona` varchar(64) DEFAULT NULL,
  `tipoRegimenPesona` int(11) DEFAULT NULL,
  `fntFinancPersona` int(11) DEFAULT NULL,
  `planilla2Persona` int(11) DEFAULT NULL,
  `resPenDefPersona` int(11) DEFAULT NULL,
  `planillaPersona` int(11) DEFAULT NULL,
  `idBanco` int(11) DEFAULT NULL,
  `fecRes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planillapensionado`
--

CREATE TABLE `planillapensionado` (
  `idplanillaPensionado` int(11) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `idPeriodo` int(11) DEFAULT NULL,
  `idTipoPlanilla` int(11) NOT NULL,
  `fecplanillaPensionado` date DEFAULT NULL,
  `totImpplanillaPensionado` decimal(22,2) DEFAULT NULL,
  `totHabplanillaPensionado` decimal(22,2) DEFAULT NULL,
  `totDescplanillaPensionado` decimal(22,2) DEFAULT NULL,
  `totLiqplanillaPensionado` decimal(22,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idProvincia` int(11) NOT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  `nomProvincia` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regioncargo`
--

CREATE TABLE `regioncargo` (
  `idRegionCargo` int(11) NOT NULL,
  `codRegionCargo` varchar(16) DEFAULT NULL,
  `nomRegionCargo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reglaboral`
--

CREATE TABLE `reglaboral` (
  `idRegLaboral` int(11) NOT NULL,
  `codRegLaboral` varchar(4) DEFAULT NULL,
  `nomRegLaboral` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(64) DEFAULT NULL,
  `descRol` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segsalud`
--

CREATE TABLE `segsalud` (
  `idSegSalud` int(11) NOT NULL,
  `nomSegSalud` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion`
--

CREATE TABLE `situacion` (
  `idSituacion` int(11) NOT NULL,
  `codSituacion` varchar(4) DEFAULT NULL,
  `nomSituacion` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocalcjud`
--

CREATE TABLE `tipocalcjud` (
  `idTipoCalcJud` int(11) NOT NULL,
  `codTipoCalcJud` varchar(8) DEFAULT NULL,
  `nomTipoCalcJud` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Calculo Judicial';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoconcepto`
--

CREATE TABLE `tipoconcepto` (
  `idTipoConcepto` int(11) NOT NULL,
  `idEdoRegistro` int(11) DEFAULT NULL,
  `nomTipoConcepto` varchar(32) DEFAULT NULL,
  `descTipoConcepto` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `idTipoDoc` int(11) NOT NULL,
  `nomTipoDoc` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Documento (DNI)';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoplanilla`
--

CREATE TABLE `tipoplanilla` (
  `idTipoPlanilla` int(11) NOT NULL,
  `nomTipoPlanilla` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipregistro`
--

CREATE TABLE `tipregistro` (
  `idTipRegistro` int(11) NOT NULL,
  `nomTipRegistro` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipservidor`
--

CREATE TABLE `tipservidor` (
  `idTipServidor` int(11) NOT NULL,
  `codTipServidor` varchar(4) DEFAULT NULL,
  `nomTipServidor` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniejecutora`
--

CREATE TABLE `uniejecutora` (
  `idUniEjecutora` int(11) NOT NULL,
  `codUniEjecutora` varchar(4) DEFAULT NULL,
  `nomUniEjecutora` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `idZona` int(11) NOT NULL,
  `nomZona` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afp`
--
ALTER TABLE `afp`
  ADD PRIMARY KEY (`idAfp`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`idBanco`),
  ADD KEY `FK_REFERENCE_297` (`idEdoRegistro`);

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
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  ADD PRIMARY KEY (`idConceptos`),
  ADD KEY `FK_REFERENCE_120` (`idTipoConcepto`),
  ADD KEY `FK_REFERENCE_191` (`idEdoRegistro`);

--
-- Indices de la tabla `concplanilla`
--
ALTER TABLE `concplanilla`
  ADD PRIMARY KEY (`idConcPlanilla`),
  ADD KEY `FK_REFERENCE_83` (`idConceptos`),
  ADD KEY `FK_REFERENCE_94` (`idplanillaPensionado`);

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
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`idPeriodo`),
  ADD KEY `FK_REFERENCE_181` (`idEdoRegistro`);

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
-- Indices de la tabla `planillapensionado`
--
ALTER TABLE `planillapensionado`
  ADD PRIMARY KEY (`idplanillaPensionado`),
  ADD KEY `FK_REFERENCE_181` (`idPeriodo`),
  ADD KEY `FK_REFERENCE_501` (`idEmpleado`);

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
-- Indices de la tabla `tipoconcepto`
--
ALTER TABLE `tipoconcepto`
  ADD PRIMARY KEY (`idTipoConcepto`),
  ADD KEY `FK_REFERENCE_200` (`idEdoRegistro`);

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
  MODIFY `idAfp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `idBanco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `idBeneficiario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `beneficiarioempleado`
--
ALTER TABLE `beneficiarioempleado`
  MODIFY `idBeneficiarioEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargoorigen`
--
ALTER TABLE `cargoorigen`
  MODIFY `idCargoOrigen` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idCodFiscal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codregional`
--
ALTER TABLE `codregional`
  MODIFY `idCodRegional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  MODIFY `idConceptos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `concplanilla`
--
ALTER TABLE `concplanilla`
  MODIFY `idConcPlanilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `idDescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direncargo`
--
ALTER TABLE `direncargo`
  MODIFY `idDirEncargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `idDistrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `edocivil`
--
ALTER TABLE `edocivil`
  MODIFY `idEdoCivil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `edoregistro`
--
ALTER TABLE `edoregistro`
  MODIFY `idEdoRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `idEstablecimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gporemunerativo`
--
ALTER TABLE `gporemunerativo`
  MODIFY `idGpoRemunerativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hatemb`
--
ALTER TABLE `hatemb`
  MODIFY `idhatEmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modopago`
--
ALTER TABLE `modopago`
  MODIFY `idModoPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nec`
--
ALTER TABLE `nec`
  MODIFY `idNEC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivelorigen`
--
ALTER TABLE `nivelorigen`
  MODIFY `idNivelOrigen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nummagist`
--
ALTER TABLE `nummagist`
  MODIFY `idNumMagist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `palmagist`
--
ALTER TABLE `palmagist`
  MODIFY `idPalMagist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `idParentesco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idPeriodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planillapensionado`
--
ALTER TABLE `planillapensionado`
  MODIFY `idplanillaPensionado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regioncargo`
--
ALTER TABLE `regioncargo`
  MODIFY `idRegionCargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reglaboral`
--
ALTER TABLE `reglaboral`
  MODIFY `idRegLaboral` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `segsalud`
--
ALTER TABLE `segsalud`
  MODIFY `idSegSalud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `situacion`
--
ALTER TABLE `situacion`
  MODIFY `idSituacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipocalcjud`
--
ALTER TABLE `tipocalcjud`
  MODIFY `idTipoCalcJud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoconcepto`
--
ALTER TABLE `tipoconcepto`
  MODIFY `idTipoConcepto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoplanilla`
--
ALTER TABLE `tipoplanilla`
  MODIFY `idTipoPlanilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipregistro`
--
ALTER TABLE `tipregistro`
  MODIFY `idTipRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipservidor`
--
ALTER TABLE `tipservidor`
  MODIFY `idTipServidor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uniejecutora`
--
ALTER TABLE `uniejecutora`
  MODIFY `idUniEjecutora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `via`
--
ALTER TABLE `via`
  MODIFY `idVia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `idZona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banco`
--
ALTER TABLE `banco`
  ADD CONSTRAINT `FK_REFERENCE_297` FOREIGN KEY (`idEdoRegistro`) REFERENCES `edoregistro` (`idEdoRegistro`);

--
-- Filtros para la tabla `conceptos`
--
ALTER TABLE `conceptos`
  ADD CONSTRAINT `FK_REFERENCE_1202` FOREIGN KEY (`idTipoConcepto`) REFERENCES `tipoconcepto` (`idTipoConcepto`),
  ADD CONSTRAINT `FK_REFERENCE_191` FOREIGN KEY (`idEdoRegistro`) REFERENCES `edoregistro` (`idEdoRegistro`);

--
-- Filtros para la tabla `concplanilla`
--
ALTER TABLE `concplanilla`
  ADD CONSTRAINT `FK_REFERENCE_83` FOREIGN KEY (`idConceptos`) REFERENCES `conceptos` (`idConceptos`),
  ADD CONSTRAINT `FK_REFERENCE_94` FOREIGN KEY (`idplanillaPensionado`) REFERENCES `planillapensionado` (`idplanillaPensionado`);

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
-- Filtros para la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD CONSTRAINT `FK_REFERENCE_181` FOREIGN KEY (`idEdoRegistro`) REFERENCES `edoregistro` (`idEdoRegistro`);

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
-- Filtros para la tabla `planillapensionado`
--
ALTER TABLE `planillapensionado`
  ADD CONSTRAINT `FK_REFERENCE_1311` FOREIGN KEY (`idPeriodo`) REFERENCES `periodo` (`idPeriodo`),
  ADD CONSTRAINT `FK_REFERENCE_3921` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  ADD CONSTRAINT `FK_REFERENCE_5311` FOREIGN KEY (`idPeriodo`) REFERENCES `periodo` (`idPeriodo`),
  ADD CONSTRAINT `FK_REFERENCE_5921` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`);

--
-- Filtros para la tabla `tipoconcepto`
--
ALTER TABLE `tipoconcepto`
  ADD CONSTRAINT `FK_REFERENCE_200` FOREIGN KEY (`idEdoRegistro`) REFERENCES `edoregistro` (`idEdoRegistro`),
  ADD CONSTRAINT `FK_REFERENCE_287` FOREIGN KEY (`idEdoRegistro`) REFERENCES `edoregistro` (`idEdoRegistro`);

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
