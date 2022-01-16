-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 17:21:14
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
-- Base de datos: `rrhh_unm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Afp`
--

CREATE TABLE `Afp` (
  `idAfp` int(11) NOT NULL,
  `codAfp` varchar(8) DEFAULT NULL,
  `nomAfp` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Beneficiario`
--

CREATE TABLE `Beneficiario` (
  `idBeneficiario` int(11) NOT NULL ,
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

-- Estructura de tabla para la tabla `CargoOrigen`
--

CREATE TABLE `CargoOrigen` (
  `idCargoOrigen` int(11) NOT NULL,
  `codCargoOrigen` varchar(4) DEFAULT NULL,
  `nomCargoOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `idCategoria` int(11) NOT NULL,
  `codCategoria` varchar(4) DEFAULT NULL,
  `nomCategoria` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CodDescuento`
--

CREATE TABLE `CodDescuento` (
  `idCodDescuento` int(11) NOT NULL,
  `codCodDescuento` varchar(16) DEFAULT NULL,
  `nomCodDescuento` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CodFiscal`
--

CREATE TABLE `CodFiscal` (
  `idCodFiscal` int(11) NOT NULL,
  `codCodFiscal` varchar(8) DEFAULT NULL,
  `nomCodFiscal` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CodRegional`
--

CREATE TABLE `CodRegional` (
  `idCodRegional` int(11) NOT NULL,
  `codCodRegional` varchar(4) DEFAULT NULL,
  `nomCodRegional` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

CREATE TABLE `Departamento` (
  `idDepartamento` int(11) NOT NULL,
  `idPais` int(11) DEFAULT NULL,
  `nomDepartamento` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Descuento`
--

CREATE TABLE `Descuento` (
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
-- Estructura de tabla para la tabla `DirEncargo`
--

CREATE TABLE `DirEncargo` (
  `idDirEncargo` int(11) NOT NULL,
  `codDirEncargo` varchar(4) DEFAULT NULL,
  `nomDirEncargo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Distrito`
--

CREATE TABLE `Distrito` (
  `idDistrito` int(11) NOT NULL,
  `idProvincia` int(11) DEFAULT NULL,
  `nomDistrito` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EdoCivil`
--

CREATE TABLE `EdoCivil` (
  `idEdoCivil` int(11) NOT NULL,
  `nomEdoCivil` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EdoRegistro`
--

CREATE TABLE `EdoRegistro` (
  `idEdoRegistro` int(11) NOT NULL,
  `nomEdoRegistro` varchar(64) DEFAULT NULL,
  `descEdoRegistro` varchar(128) DEFAULT NULL,
  `grupoEdoRegistro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleado`
--

CREATE TABLE `Empleado` (
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
  `ctaEmpleado` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Establecimiento`
--

CREATE TABLE `Establecimiento` (
  `idEstablecimiento` int(11) NOT NULL,
  `codEstablecimiento` varchar(4) DEFAULT NULL,
  `nomEstablecimiento` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Genero`
--

CREATE TABLE `Genero` (
  `idGenero` int(11) NOT NULL,
  `nomGenero` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GpoRemunerativo`
--

CREATE TABLE `GpoRemunerativo` (
  `idGpoRemunerativo` int(11) NOT NULL,
  `codGpoRemunerativo` varchar(4) DEFAULT NULL,
  `nomGpoRemunerativo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hatEmb`
--

CREATE TABLE `hatEmb` (
  `idhatEmb` int(11) NOT NULL,
  `codhatEmb` varchar(8) DEFAULT NULL,
  `nomhatEmb` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Idioma`
--

CREATE TABLE `Idioma` (
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
-- Estructura de tabla para la tabla `ModoPago`
--

CREATE TABLE `ModoPago` (
  `idModoPago` int(11) NOT NULL,
  `codModoPago` varchar(8) DEFAULT NULL,
  `nomModoPago` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NEC`
--

CREATE TABLE `NEC` (
  `idNEC` int(11) NOT NULL,
  `codNEC` varchar(4) DEFAULT NULL,
  `nomNEC` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Nivel`
--

CREATE TABLE `Nivel` (
  `idNivel` int(11) NOT NULL,
  `codNivel` varchar(4) DEFAULT NULL,
  `nomNivel` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NivelOrigen`
--

CREATE TABLE `NivelOrigen` (
  `idNivelOrigen` int(11) NOT NULL,
  `codNivelOrigen` varchar(4) DEFAULT NULL,
  `nomNivelOrigen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NumMagist`
--

CREATE TABLE `NumMagist` (
  `idNumMagist` int(11) NOT NULL,
  `codNumMagist` varchar(4) DEFAULT NULL,
  `nomNumMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pais`
--

CREATE TABLE `Pais` (
  `idPais` int(11) NOT NULL,
  `nomPais` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PalMagist`
--

CREATE TABLE `PalMagist` (
  `idPalMagist` int(11) NOT NULL,
  `codPalMagist` varchar(4) DEFAULT NULL,
  `nomPalMagist` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Parentesco`
--

CREATE TABLE `Parentesco` (
  `idParentesco` int(11) NOT NULL,
  `codParentesco` varchar(8) DEFAULT NULL,
  `nomParentesco` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Persona`
--

CREATE TABLE `Persona` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Provincia`
--

CREATE TABLE `Provincia` (
  `idProvincia` int(11) NOT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  `nomProvincia` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegionCargo`
--

CREATE TABLE `RegionCargo` (
  `idRegionCargo` int(11) NOT NULL,
  `codRegionCargo` varchar(16) DEFAULT NULL,
  `nomRegionCargo` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegLaboral`
--

CREATE TABLE `RegLaboral` (
  `idRegLaboral` int(11) NOT NULL,
  `codRegLaboral` varchar(4) DEFAULT NULL,
  `nomRegLaboral` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(64) DEFAULT NULL,
  `descRol` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SegSalud`
--

CREATE TABLE `SegSalud` (
  `idSegSalud` int(11) NOT NULL,
  `nomSegSalud` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Situacion`
--

CREATE TABLE `Situacion` (
  `idSituacion` int(11) NOT NULL,
  `codSituacion` varchar(4) DEFAULT NULL,
  `nomSituacion` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoCalcJud`
--

CREATE TABLE `TipoCalcJud` (
  `idTipoCalcJud` int(11) NOT NULL,
  `codTipoCalcJud` varchar(8) DEFAULT NULL,
  `nomTipoCalcJud` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Calculo Judicial';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoDoc`
--

CREATE TABLE `TipoDoc` (
  `idTipoDoc` int(11) NOT NULL,
  `nomTipoDoc` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipo Documento (DNI)';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoPlanilla`
--

CREATE TABLE `TipoPlanilla` (
  `idTipoPlanilla` int(11) NOT NULL,
  `nomTipoPlanilla` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipRegistro`
--

CREATE TABLE `TipRegistro` (
  `idTipRegistro` int(11) NOT NULL,
  `nomTipRegistro` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipServidor`
--

CREATE TABLE `TipServidor` (
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
-- Estructura de tabla para la tabla `UniEjecutora`
--

CREATE TABLE `UniEjecutora` (
  `idUniEjecutora` int(11) NOT NULL,
  `codUniEjecutora` varchar(4) DEFAULT NULL,
  `nomUniEjecutora` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
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
-- Estructura de tabla para la tabla `Via`
--

CREATE TABLE `Via` (
  `idVia` int(11) NOT NULL,
  `nomVia` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Zona`
--

CREATE TABLE `Zona` (
  `idZona` int(11) NOT NULL,
  `nomZona` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Afp`
--
ALTER TABLE `Afp`
  ADD PRIMARY KEY (`idAfp`);

--
-- Indices de la tabla `Beneficiario`
--
ALTER TABLE `Beneficiario`
  ADD PRIMARY KEY (`idBeneficiario`),
  ADD KEY `FK_REFERENCE_25` (`idPersona`),
  ADD KEY `FK_REFERENCE_26` (`idTipoCalcJud`),
  ADD KEY `FK_REFERENCE_27` (`idModoPago`),
  ADD KEY `FK_REFERENCE_28` (`idParentesco`);

--
-- Indices de la tabla `CargoOrigen`
--
ALTER TABLE `CargoOrigen`
  ADD PRIMARY KEY (`idCargoOrigen`);

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `CodDescuento`
--
ALTER TABLE `CodDescuento`
  ADD PRIMARY KEY (`idCodDescuento`);

--
-- Indices de la tabla `CodFiscal`
--
ALTER TABLE `CodFiscal`
  ADD PRIMARY KEY (`idCodFiscal`);

--
-- Indices de la tabla `CodRegional`
--
ALTER TABLE `CodRegional`
  ADD PRIMARY KEY (`idCodRegional`);

--
-- Indices de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `FK_REFERENCE_3` (`idPais`);

--
-- Indices de la tabla `Descuento`
--
ALTER TABLE `Descuento`
  ADD PRIMARY KEY (`idDescuento`),
  ADD KEY `FK_REFERENCE_20` (`idRegionCargo`),
  ADD KEY `FK_REFERENCE_21` (`idCodDescuento`),
  ADD KEY `FK_REFERENCE_22` (`idEmpleado`);

--
-- Indices de la tabla `DirEncargo`
--
ALTER TABLE `DirEncargo`
  ADD PRIMARY KEY (`idDirEncargo`);

--
-- Indices de la tabla `Distrito`
--
ALTER TABLE `Distrito`
  ADD PRIMARY KEY (`idDistrito`),
  ADD KEY `FK_REFERENCE_5` (`idProvincia`);

--
-- Indices de la tabla `EdoCivil`
--
ALTER TABLE `EdoCivil`
  ADD PRIMARY KEY (`idEdoCivil`);

--
-- Indices de la tabla `EdoRegistro`
--
ALTER TABLE `EdoRegistro`
  ADD PRIMARY KEY (`idEdoRegistro`);

--
-- Indices de la tabla `Empleado`
--
ALTER TABLE `Empleado`
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
-- Indices de la tabla `Establecimiento`
--
ALTER TABLE `Establecimiento`
  ADD PRIMARY KEY (`idEstablecimiento`);

--
-- Indices de la tabla `Genero`
--
ALTER TABLE `Genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `GpoRemunerativo`
--
ALTER TABLE `GpoRemunerativo`
  ADD PRIMARY KEY (`idGpoRemunerativo`);

--
-- Indices de la tabla `hatEmb`
--
ALTER TABLE `hatEmb`
  ADD PRIMARY KEY (`idhatEmb`);

--
-- Indices de la tabla `Idioma`
--
ALTER TABLE `Idioma`
  ADD PRIMARY KEY (`idIdioma`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`),
  ADD KEY `INDEX_LOG` (`idlog`),
  ADD KEY `FK_REFERENCE_23` (`idUsuario`);

--
-- Indices de la tabla `ModoPago`
--
ALTER TABLE `ModoPago`
  ADD PRIMARY KEY (`idModoPago`);

--
-- Indices de la tabla `NEC`
--
ALTER TABLE `NEC`
  ADD PRIMARY KEY (`idNEC`);

--
-- Indices de la tabla `Nivel`
--
ALTER TABLE `Nivel`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `NivelOrigen`
--
ALTER TABLE `NivelOrigen`
  ADD PRIMARY KEY (`idNivelOrigen`);

--
-- Indices de la tabla `NumMagist`
--
ALTER TABLE `NumMagist`
  ADD PRIMARY KEY (`idNumMagist`);

--
-- Indices de la tabla `Pais`
--
ALTER TABLE `Pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `PalMagist`
--
ALTER TABLE `PalMagist`
  ADD PRIMARY KEY (`idPalMagist`);

--
-- Indices de la tabla `Parentesco`
--
ALTER TABLE `Parentesco`
  ADD PRIMARY KEY (`idParentesco`);

--
-- Indices de la tabla `Persona`
--
ALTER TABLE `Persona`
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
-- Indices de la tabla `Provincia`
--
ALTER TABLE `Provincia`
  ADD PRIMARY KEY (`idProvincia`),
  ADD KEY `FK_REFERENCE_4` (`idDepartamento`);

--
-- Indices de la tabla `RegionCargo`
--
ALTER TABLE `RegionCargo`
  ADD PRIMARY KEY (`idRegionCargo`);

--
-- Indices de la tabla `RegLaboral`
--
ALTER TABLE `RegLaboral`
  ADD PRIMARY KEY (`idRegLaboral`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`idRol`),
  ADD KEY `IND_ROL` (`idRol`,`nomRol`);

--
-- Indices de la tabla `SegSalud`
--
ALTER TABLE `SegSalud`
  ADD PRIMARY KEY (`idSegSalud`);

--
-- Indices de la tabla `Situacion`
--
ALTER TABLE `Situacion`
  ADD PRIMARY KEY (`idSituacion`);

--
-- Indices de la tabla `TipoCalcJud`
--
ALTER TABLE `TipoCalcJud`
  ADD PRIMARY KEY (`idTipoCalcJud`);

--
-- Indices de la tabla `TipoDoc`
--
ALTER TABLE `TipoDoc`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `TipoPlanilla`
--
ALTER TABLE `TipoPlanilla`
  ADD PRIMARY KEY (`idTipoPlanilla`);

--
-- Indices de la tabla `TipRegistro`
--
ALTER TABLE `TipRegistro`
  ADD PRIMARY KEY (`idTipRegistro`);

--
-- Indices de la tabla `TipServidor`
--
ALTER TABLE `TipServidor`
  ADD PRIMARY KEY (`idTipServidor`);

--
-- Indices de la tabla `UniEjecutora`
--
ALTER TABLE `UniEjecutora`
  ADD PRIMARY KEY (`idUniEjecutora`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `IND_USUARIO` (`idUsuario`,`cuentaUsuario`),
  ADD KEY `FK_REFERENCE_1` (`idRol`),
  ADD KEY `FK_REFERENCE_11` (`idPersona`);

--
-- Indices de la tabla `Via`
--
ALTER TABLE `Via`
  ADD PRIMARY KEY (`idVia`);

--
-- Indices de la tabla `Zona`
--
ALTER TABLE `Zona`
  ADD PRIMARY KEY (`idZona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Afp`
--
ALTER TABLE `Afp`
  MODIFY `idAfp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Beneficiario`
--
ALTER TABLE `Beneficiario`
  MODIFY `idBeneficiario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CargoOrigen`
--
ALTER TABLE `CargoOrigen`
  MODIFY `idCargoOrigen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CodDescuento`
--
ALTER TABLE `CodDescuento`
  MODIFY `idCodDescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CodFiscal`
--
ALTER TABLE `CodFiscal`
  MODIFY `idCodFiscal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CodRegional`
--
ALTER TABLE `CodRegional`
  MODIFY `idCodRegional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Descuento`
--
ALTER TABLE `Descuento`
  MODIFY `idDescuento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `DirEncargo`
--
ALTER TABLE `DirEncargo`
  MODIFY `idDirEncargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Distrito`
--
ALTER TABLE `Distrito`
  MODIFY `idDistrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EdoCivil`
--
ALTER TABLE `EdoCivil`
  MODIFY `idEdoCivil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EdoRegistro`
--
ALTER TABLE `EdoRegistro`
  MODIFY `idEdoRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
--INGRESAR CAMPO PREG , EMPLEADO
ALTER TABLE empleado ADD preG INT NULL DEFAULT NULL ;


-- AUTO_INCREMENT de la tabla `Establecimiento`
--
ALTER TABLE `Establecimiento`
  MODIFY `idEstablecimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Genero`
--
ALTER TABLE `Genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `GpoRemunerativo`
--
ALTER TABLE `GpoRemunerativo`
  MODIFY `idGpoRemunerativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hatEmb`
--
ALTER TABLE `hatEmb`
  MODIFY `idhatEmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Idioma`
--
ALTER TABLE `Idioma`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ModoPago`
--
ALTER TABLE `ModoPago`
  MODIFY `idModoPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `NEC`
--
ALTER TABLE `NEC`
  MODIFY `idNEC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Nivel`
--
ALTER TABLE `Nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `NivelOrigen`
--
ALTER TABLE `NivelOrigen`
  MODIFY `idNivelOrigen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `NumMagist`
--
ALTER TABLE `NumMagist`
  MODIFY `idNumMagist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Pais`
--
ALTER TABLE `Pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PalMagist`
--
ALTER TABLE `PalMagist`
  MODIFY `idPalMagist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Parentesco`
--
ALTER TABLE `Parentesco`
  MODIFY `idParentesco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Persona`
--
ALTER TABLE `Persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Provincia`
--
ALTER TABLE `Provincia`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RegionCargo`
--
ALTER TABLE `RegionCargo`
  MODIFY `idRegionCargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RegLaboral`
--
ALTER TABLE `RegLaboral`
  MODIFY `idRegLaboral` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Rol`
--
ALTER TABLE `Rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `SegSalud`
--
ALTER TABLE `SegSalud`
  MODIFY `idSegSalud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Situacion`
--
ALTER TABLE `Situacion`
  MODIFY `idSituacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipoCalcJud`
--
ALTER TABLE `TipoCalcJud`
  MODIFY `idTipoCalcJud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipoDoc`
--
ALTER TABLE `TipoDoc`
  MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipoPlanilla`
--
ALTER TABLE `TipoPlanilla`
  MODIFY `idTipoPlanilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipRegistro`
--
ALTER TABLE `TipRegistro`
  MODIFY `idTipRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipServidor`
--
ALTER TABLE `TipServidor`
  MODIFY `idTipServidor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `UniEjecutora`
--
ALTER TABLE `UniEjecutora`
  MODIFY `idUniEjecutora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Via`
--
ALTER TABLE `Via`
  MODIFY `idVia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Zona`
--
ALTER TABLE `Zona`
  MODIFY `idZona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Beneficiario`
--
ALTER TABLE `Beneficiario`
 ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`idPersona`) REFERENCES `Persona` (`idPersona`),
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`idTipoCalcJud`) REFERENCES `TipoCalcJud` (`idTipoCalcJud`),
  ADD CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`idModoPago`) REFERENCES `ModoPago` (`idModoPago`),
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`idParentesco`) REFERENCES `Parentesco` (`idParentesco`),
  
--
-- Filtros para la tabla `Departamento`
--
ALTER TABLE `Departamento`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`idPais`) REFERENCES `Pais` (`idPais`);

--
-- Filtros para la tabla `Descuento`
--
ALTER TABLE `Descuento`
  ADD CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`idRegionCargo`) REFERENCES `RegionCargo` (`idRegionCargo`),
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`idCodDescuento`) REFERENCES `CodDescuento` (`idCodDescuento`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`idEmpleado`) REFERENCES `Empleado` (`idEmpleado`);

--
-- Filtros para la tabla `Distrito`
--
ALTER TABLE `Distrito`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`idProvincia`) REFERENCES `Provincia` (`idProvincia`);

--
-- Filtros para la tabla `Empleado`
--
ALTER TABLE `Empleado`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`idPersona`) REFERENCES `Persona` (`idPersona`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`idSituacion`) REFERENCES `Situacion` (`idSituacion`),
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`idTipRegistro`) REFERENCES `TipRegistro` (`idTipRegistro`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`idSegSalud`) REFERENCES `SegSalud` (`idSegSalud`),
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`idTipoPlanilla`) REFERENCES `TipoPlanilla` (`idTipoPlanilla`),
  ADD CONSTRAINT `FK_REFERENCE_31` FOREIGN KEY (`idCodFiscal`) REFERENCES `CodFiscal` (`idCodFiscal`),
  ADD CONSTRAINT `FK_REFERENCE_32` FOREIGN KEY (`idAfp`) REFERENCES `Afp` (`idAfp`),
  ADD CONSTRAINT `FK_REFERENCE_33` FOREIGN KEY (`idCodRegional`) REFERENCES `CodRegional` (`idCodRegional`),
  ADD CONSTRAINT `FK_REFERENCE_34` FOREIGN KEY (`idUniEjecutora`) REFERENCES `UniEjecutora` (`idUniEjecutora`),
  ADD CONSTRAINT `FK_REFERENCE_35` FOREIGN KEY (`idNEC`) REFERENCES `NEC` (`idNEC`),
  ADD CONSTRAINT `FK_REFERENCE_36` FOREIGN KEY (`idNivel`) REFERENCES `Nivel` (`idNivel`),
  ADD CONSTRAINT `FK_REFERENCE_37` FOREIGN KEY (`idEstablecimiento`) REFERENCES `Establecimiento` (`idEstablecimiento`),
  ADD CONSTRAINT `FK_REFERENCE_38` FOREIGN KEY (`idRegLaboral`) REFERENCES `RegLaboral` (`idRegLaboral`),
  ADD CONSTRAINT `FK_REFERENCE_39` FOREIGN KEY (`idTipServidor`) REFERENCES `TipServidor` (`idTipServidor`),
  ADD CONSTRAINT `FK_REFERENCE_40` FOREIGN KEY (`idNumMagist`) REFERENCES `NumMagist` (`idNumMagist`),
  ADD CONSTRAINT `FK_REFERENCE_41` FOREIGN KEY (`idGpoRemunerativo`) REFERENCES `GpoRemunerativo` (`idGpoRemunerativo`),
  ADD CONSTRAINT `FK_REFERENCE_42` FOREIGN KEY (`idhatEmb`) REFERENCES `hatEmb` (`idhatEmb`),
  ADD CONSTRAINT `FK_REFERENCE_43` FOREIGN KEY (`idCargoOrigen`) REFERENCES `CargoOrigen` (`idCargoOrigen`),
  ADD CONSTRAINT `FK_REFERENCE_44` FOREIGN KEY (`idNivelOrigen`) REFERENCES `NivelOrigen` (`idNivelOrigen`),
  ADD CONSTRAINT `FK_REFERENCE_45` FOREIGN KEY (`idDirEncargo`) REFERENCES `DirEncargo` (`idDirEncargo`),
  ADD CONSTRAINT `FK_REFERENCE_46` FOREIGN KEY (`idPalMagist`) REFERENCES `PalMagist` (`idPalMagist`);

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`);

--
-- Filtros para la tabla `Persona`
--
ALTER TABLE `Persona`
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`idDistritoDir`) REFERENCES `Distrito` (`idDistrito`),
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`idTipoDoc`) REFERENCES `TipoDoc` (`idTipoDoc`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`idZona`) REFERENCES `Zona` (`idZona`),
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`idVia`) REFERENCES `Via` (`idVia`),
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`idGenero`) REFERENCES `Genero` (`idGenero`),
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`idEdoCivil`) REFERENCES `EdoCivil` (`idEdoCivil`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`idIdioma`) REFERENCES `Idioma` (`idIdioma`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`idDistritoNac`) REFERENCES `Distrito` (`idDistrito`);

--
-- Filtros para la tabla `Provincia`
--
ALTER TABLE `Provincia`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`idDepartamento`) REFERENCES `Departamento` (`idDepartamento`);

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`idRol`) REFERENCES `Rol` (`idRol`),
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`idPersona`) REFERENCES `Persona` (`idPersona`);
COMMIT;

--===============================
--Crer tabla BeneficiarioEmpleado
CREATE TABLE `BeneficiarioEmpleado` (
  `idBeneficiarioEmpleado` int(11) NOT NULL ,
  `idEmpleado` int(11) DEFAULT NULL,
  `idBeneficiario` int(11) DEFAULT NULL,
  `estado` tinyint default 1
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

--agregar Rferenciasa la Tabla Beneficiario Empleado
ALTER TABLE `BeneficiarioEmpleado`
  ADD PRIMARY KEY (`idBeneficiarioEmpleado`),
  ADD KEY `FK_REFERENCE_24` (`idEmpleado`),
  ADD KEY `FK_REFERENCE_29` (`idBeneficiario`);



-- AUTO_INCREMENT de la tabla `BeneficiarioEmpleado`
--
ALTER TABLE `BeneficiarioEmpleado`
  MODIFY `idBeneficiarioEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
