<?php 
/** 
 * @file SQLEmpleado.php 
 *  
 * Consultas SQL de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLEmpleado 
{ 
  const AGREGAR_EMPLEADO = "INSERT INTO Empleado (idEmpleado, idPersona, idSituacion, idTipRegistro, idSegSalud, idTipoPlanilla, idCodFiscal, idAfp, idCodRegional, idUniEjecutora, idNEC, idNivel, idEstablecimiento, idRegLaboral, idTipServidor, idNumMagist, idGpoRemunerativo, idhatEmb, idCargoOrigen, idNivelOrigen, idPalMagist, idDirEncargo, codModular, fecIngAdmPubEmpleado, fecIngMedEmpleado, fecCeseEmpleado, infCompEmpleado, fecHabEmpleado, fecDesEmpleado, fecFallEmpleado, valPorEmpleado, fecValEmpleado, docRefEmpleado, numSegSaludEmpleado, eVidaEmpleado, CUSPPEmpleado, fecAfiPenEmpleado, fecDevPenEmpleado, plazaEmpleado, tipPlazaEmpleado, asigInserEmpleado, diasTrabEmpleado, numDepEmpleado, numDecEmpleado, licDiasEmpleado, tipServEmpleado, fecIniLicEmpleado, insasitEmpleado, permisosEmpleado, huelgasEmpleado, leyMenEmpleado, leyPerEmpleado, cadPresupEmpleado, ctaEmpleado,preG) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?) ";

  const ACTUALIZAR_EMPLEADO = "UPDATE Empleado SET idEmpleado = ?, idPersona = ?, idSituacion = ?, idTipRegistro = ?, idSegSalud = ?, idTipoPlanilla = ?, idCodFiscal = ?, idAfp = ?, idCodRegional = ?, idUniEjecutora = ?, idNEC = ?, idNivel = ?, idEstablecimiento = ?, idRegLaboral = ?, idTipServidor = ?, idNumMagist = ?, idGpoRemunerativo = ?, idhatEmb = ?, idCargoOrigen = ?, idNivelOrigen = ?, idPalMagist = ?, idDirEncargo = ?, codModular = ?, fecIngAdmPubEmpleado = ?, fecIngMedEmpleado = ?, fecCeseEmpleado = ?, infCompEmpleado = ?, fecHabEmpleado = ?, fecDesEmpleado = ?, fecFallEmpleado = ?, valPorEmpleado = ?, fecValEmpleado = ?, docRefEmpleado = ?, numSegSaludEmpleado = ?, eVidaEmpleado = ?, CUSPPEmpleado = ?, fecAfiPenEmpleado = ?, fecDevPenEmpleado = ?, plazaEmpleado = ?, tipPlazaEmpleado = ?, asigInserEmpleado = ?, diasTrabEmpleado = ?, numDepEmpleado = ?, numDecEmpleado = ?, licDiasEmpleado = ?, tipServEmpleado = ?, fecIniLicEmpleado = ?, insasitEmpleado = ?, permisosEmpleado = ?, huelgasEmpleado = ?, leyMenEmpleado = ?, leyPerEmpleado = ?, cadPresupEmpleado = ?, ctaEmpleado = ? ,preG =? WHERE idEmpleado = ?";

  const ELIMINAR_EMPLEADO = "DELETE FROM Empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO = "SELECT * FROM Empleado ORDER BY idEmpleado";

  const CONSULTAR_EMPLEADO_POR_IDEMPLEADO = "SELECT * FROM Empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDPERSONA = "SELECT * FROM Empleado WHERE idPersonaEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDSITUACION = "SELECT * FROM Empleado WHERE idSituacionEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPREGISTRO = "SELECT * FROM Empleado WHERE idTipRegistroEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDSEGSALUD = "SELECT * FROM Empleado WHERE idSegSaludEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPOPLANILLA = "SELECT * FROM Empleado WHERE idTipoPlanillaEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCODFISCAL = "SELECT * FROM Empleado WHERE idCodFiscalEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDAFP = "SELECT * FROM Empleado WHERE idAfpEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCODREGIONAL = "SELECT * FROM Empleado WHERE idCodRegionalEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDUNIEJECUTORA = "SELECT * FROM Empleado WHERE idUniEjecutoraEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNEC = "SELECT * FROM Empleado WHERE idNECEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNIVEL = "SELECT * FROM Empleado WHERE idNivelEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDESTABLECIMIENTO = "SELECT * FROM Empleado WHERE idEstablecimientoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDREGLABORAL = "SELECT * FROM Empleado WHERE idRegLaboralEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPSERVIDOR = "SELECT * FROM Empleado WHERE idTipServidorEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNUMMAGIST = "SELECT * FROM Empleado WHERE idNumMagistEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDGPOREMUNERATIVO = "SELECT * FROM Empleado WHERE idGpoRemunerativoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDHATEMB = "SELECT * FROM Empleado WHERE idhatEmbEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCARGOORIGEN = "SELECT * FROM Empleado WHERE idCargoOrigenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNIVELORIGEN = "SELECT * FROM Empleado WHERE idNivelOrigenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDPALMAGIST = "SELECT * FROM Empleado WHERE idPalMagistEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDDIRENCARGO = "SELECT * FROM Empleado WHERE idDirEncargoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_CODMODULAR = "SELECT * FROM Empleado WHERE UPPER(codModularEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CODMODULAR_APROX = "SELECT * FROM Empleado WHERE UPPER(codModularEmpleado) LIKE UPPER(?) ORDER BY codModularEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECINGADMPUB = "SELECT * FROM Empleado WHERE fecIngAdmPubEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECINGMED = "SELECT * FROM Empleado WHERE fecIngMedEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECCESE = "SELECT * FROM Empleado WHERE fecCeseEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_INFCOMP = "SELECT * FROM Empleado WHERE UPPER(infCompEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_INFCOMP_APROX = "SELECT * FROM Empleado WHERE UPPER(infCompEmpleado) LIKE UPPER(?) ORDER BY infCompEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECHAB = "SELECT * FROM Empleado WHERE fecHabEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECDES = "SELECT * FROM Empleado WHERE fecDesEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECFALL = "SELECT * FROM Empleado WHERE fecFallEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_VALPOR = "SELECT * FROM Empleado WHERE valPorEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECVAL = "SELECT * FROM Empleado WHERE fecValEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_DOCREF = "SELECT * FROM Empleado WHERE UPPER(docRefEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_DOCREF_APROX = "SELECT * FROM Empleado WHERE UPPER(docRefEmpleado) LIKE UPPER(?) ORDER BY docRefEmpleado";

  const CONSULTAR_EMPLEADO_POR_NUMSEGSALUD = "SELECT * FROM Empleado WHERE UPPER(numSegSaludEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_NUMSEGSALUD_APROX = "SELECT * FROM Empleado WHERE UPPER(numSegSaludEmpleado) LIKE UPPER(?) ORDER BY numSegSaludEmpleado";

  const CONSULTAR_EMPLEADO_POR_EVIDA = "SELECT * FROM Empleado WHERE UPPER(eVidaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_EVIDA_APROX = "SELECT * FROM Empleado WHERE UPPER(eVidaEmpleado) LIKE UPPER(?) ORDER BY eVidaEmpleado";

  const CONSULTAR_EMPLEADO_POR_CUSPP = "SELECT * FROM Empleado WHERE UPPER(CUSPPEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CUSPP_APROX = "SELECT * FROM Empleado WHERE UPPER(CUSPPEmpleado) LIKE UPPER(?) ORDER BY CUSPPEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECAFIPEN = "SELECT * FROM Empleado WHERE fecAfiPenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECDEVPEN = "SELECT * FROM Empleado WHERE fecDevPenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_PLAZA = "SELECT * FROM Empleado WHERE UPPER(plazaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_PLAZA_APROX = "SELECT * FROM Empleado WHERE UPPER(plazaEmpleado) LIKE UPPER(?) ORDER BY plazaEmpleado";

  const CONSULTAR_EMPLEADO_POR_TIPPLAZA = "SELECT * FROM Empleado WHERE UPPER(tipPlazaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_TIPPLAZA_APROX = "SELECT * FROM Empleado WHERE UPPER(tipPlazaEmpleado) LIKE UPPER(?) ORDER BY tipPlazaEmpleado";

  const CONSULTAR_EMPLEADO_POR_ASIGINSER = "SELECT * FROM Empleado WHERE asigInserEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_DIASTRAB = "SELECT * FROM Empleado WHERE diasTrabEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_NUMDEP = "SELECT * FROM Empleado WHERE numDepEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_NUMDEC = "SELECT * FROM Empleado WHERE numDecEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_LICDIAS = "SELECT * FROM Empleado WHERE licDiasEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_TIPSERV = "SELECT * FROM Empleado WHERE tipServEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECINILIC = "SELECT * FROM Empleado WHERE fecIniLicEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_INSASIT = "SELECT * FROM Empleado WHERE UPPER(insasitEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_INSASIT_APROX = "SELECT * FROM Empleado WHERE UPPER(insasitEmpleado) LIKE UPPER(?) ORDER BY insasitEmpleado";

  const CONSULTAR_EMPLEADO_POR_PERMISOS = "SELECT * FROM Empleado WHERE UPPER(permisosEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_PERMISOS_APROX = "SELECT * FROM Empleado WHERE UPPER(permisosEmpleado) LIKE UPPER(?) ORDER BY permisosEmpleado";

  const CONSULTAR_EMPLEADO_POR_HUELGAS = "SELECT * FROM Empleado WHERE huelgasEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_LEYMEN = "SELECT * FROM Empleado WHERE UPPER(leyMenEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_LEYMEN_APROX = "SELECT * FROM Empleado WHERE UPPER(leyMenEmpleado) LIKE UPPER(?) ORDER BY leyMenEmpleado";

  const CONSULTAR_EMPLEADO_POR_LEYPER = "SELECT * FROM Empleado WHERE UPPER(leyPerEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_LEYPER_APROX = "SELECT * FROM Empleado WHERE UPPER(leyPerEmpleado) LIKE UPPER(?) ORDER BY leyPerEmpleado";

  const CONSULTAR_EMPLEADO_POR_CADPRESUP = "SELECT * FROM Empleado WHERE UPPER(cadPresupEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CADPRESUP_APROX = "SELECT * FROM Empleado WHERE UPPER(cadPresupEmpleado) LIKE UPPER(?) ORDER BY cadPresupEmpleado";

  const CONSULTAR_EMPLEADO_POR_CTA = "SELECT * FROM Empleado WHERE UPPER(ctaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CTA_APROX = "SELECT * FROM Empleado WHERE UPPER(ctaEmpleado) LIKE UPPER(?) ORDER BY ctaEmpleado";
  const CONSULTAR_EMPLEADO_POR_DNI = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona where p.dniPersona = ?  limit 1";
  const CONSULTAR_EMPLEADO_GRID = "SELECT * from empleado e INNER JOIN persona p GROUP by e.idEmpleado";
  const CONSULTAR_EMPLEADO_GRID_X_ID = "SELECT * FROM empleado e inner join persona p   WHERE e.idEmpleado=?  group by e.idEmpleado";
  
  const CONSULTAR_EMPLEADO_GRID_DNI = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona inner join situacion s on e.idSituacion=s.idSituacion where UPPER(p.dniPersona) like UPPER(?)";
  const CONSULTAR_EMPLEADO_GRID_NOMBRE = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona inner join situacion s on e.idSituacion=s.idSituacion where UPPER(p.nom1Persona) like UPPER(?) or UPPER(p.nom2Persona) like UPPER(?) or UPPER(p.ape1Persona) like UPPER(?) or UPPER (p.ape2Persona) like UPPER(?) ";
  const CONSULTAR_EMPLEADO_GRID_SITUACION = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona inner join situacion s on e.idSituacion=s.idSituacion where e.idSituacion=?";
  const CONSULTAR_EMPLEADO_GRID_X_ID_TOP = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona inner join situacion s on e.idSituacion=s.idSituacion WHERE order by e.idEmpleado=?  desc";
  const ACTUALIZAR_EMPLEADO_CODMODULAR= "UPDATE empleado set codModular=? where idEmpleado";
}
?>