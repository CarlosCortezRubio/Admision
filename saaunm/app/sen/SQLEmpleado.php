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
  const AGREGAR_EMPLEADO = "INSERT INTO empleado (idEmpleado, idPersona, idSituacion, idTipRegistro, idSegSalud, idTipoPlanilla, idCodFiscal, idAfp, idCodRegional, idUniEjecutora, idNEC, idNivel, idEstablecimiento, idRegLaboral, idTipServidor, idNumMagist, idGpoRemunerativo, idhatEmb, idCargoOrigen, idNivelOrigen, idPalMagist, idDirEncargo, codModular, fecIngAdmPubEmpleado, fecIngMedEmpleado, fecCeseEmpleado, infCompEmpleado, fecHabEmpleado, fecDesEmpleado, fecFallEmpleado, valPorEmpleado, fecValEmpleado, docRefEmpleado, numSegSaludEmpleado, eVidaEmpleado, CUSPPEmpleado, fecAfiPenEmpleado, fecDevPenEmpleado, plazaEmpleado, tipPlazaEmpleado, asigInserEmpleado, diasTrabEmpleado, numDepEmpleado, numDecEmpleado, licDiasEmpleado, tipServEmpleado, fecIniLicEmpleado, insasitEmpleado, permisosEmpleado, huelgasEmpleado, leyMenEmpleado, leyPerEmpleado, cadPresupEmpleado, ctaEmpleado, sueldo, preG) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?) ";

  const ACTUALIZAR_EMPLEADO = "UPDATE empleado 
  SET idEmpleado = ?, idPersona = ?, idSituacion = ?, idTipRegistro = ?, idSegSalud = ?, idTipoPlanilla = ?, idCodFiscal = ?, idAfp = ?, idCodRegional = ?, idUniEjecutora = ?, idNEC = ?, idNivel = ?, idEstablecimiento = ?, idRegLaboral = ?, idTipServidor = ?, idNumMagist = ?, idGpoRemunerativo = ?, idhatEmb = ?, idCargoOrigen = ?, idNivelOrigen = ?, idPalMagist = ?, idDirEncargo = ?, codModular = ?, fecIngAdmPubEmpleado = ?, fecIngMedEmpleado = ?, fecCeseEmpleado = ?, infCompEmpleado = ?, fecHabEmpleado = ?, fecDesEmpleado = ?, fecFallEmpleado = ?, valPorEmpleado = ?, fecValEmpleado = ?, docRefEmpleado = ?, numSegSaludEmpleado = ?, eVidaEmpleado = ?, CUSPPEmpleado = ?, fecAfiPenEmpleado = ?, fecDevPenEmpleado = ?, plazaEmpleado = ?, tipPlazaEmpleado = ?, asigInserEmpleado = ?, diasTrabEmpleado = ?, numDepEmpleado = ?, numDecEmpleado = ?, licDiasEmpleado = ?, tipServEmpleado = ?, fecIniLicEmpleado = ?, insasitEmpleado = ?, permisosEmpleado = ?, huelgasEmpleado = ?, leyMenEmpleado = ?, leyPerEmpleado = ?, cadPresupEmpleado = ?, ctaEmpleado = ?, sueldo = ?, preG =? WHERE idEmpleado = ?";
  
  const ACTUALIZAR_LICDIAS = "UPDATE empleado SET licDiasEmpleado = ? WHERE idEmpleado = ?";

  const ELIMINAR_EMPLEADO = "DELETE FROM empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO = "SELECT * FROM empleado ORDER BY idEmpleado";

  const CONSULTAR_EMPLEADO_POR_IDEMPLEADO = "SELECT * FROM empleado WHERE idEmpleado = ?";

  const CONSULTAR_DIAS_LICENCIA = "SELECT idEmpleado, licDiasEmpleado FROM empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDPERSONA = "SELECT * FROM empleado WHERE idPersonaEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDSITUACION = "SELECT * FROM empleado WHERE idSituacionEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPREGISTRO = "SELECT * FROM empleado WHERE idTipRegistroEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDSEGSALUD = "SELECT * FROM empleado WHERE idSegSaludEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPOPLANILLA = "SELECT * FROM empleado WHERE idTipoPlanillaEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCODFISCAL = "SELECT * FROM empleado WHERE idCodFiscalEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDAFP = "SELECT * FROM empleado WHERE idAfpEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCODREGIONAL = "SELECT * FROM empleado WHERE idCodRegionalEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDUNIEJECUTORA = "SELECT * FROM empleado WHERE idUniEjecutoraEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNEC = "SELECT * FROM empleado WHERE idNECEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNIVEL = "SELECT * FROM empleado WHERE idNivelEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDESTABLECIMIENTO = "SELECT * FROM empleado WHERE idEstablecimientoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDREGLABORAL = "SELECT * FROM empleado WHERE idRegLaboralEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDTIPSERVIDOR = "SELECT * FROM empleado WHERE idTipServidorEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNUMMAGIST = "SELECT * FROM empleado WHERE idNumMagistEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDGPOREMUNERATIVO = "SELECT * FROM empleado WHERE idGpoRemunerativoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDHATEMB = "SELECT * FROM empleado WHERE idhatEmbEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDCARGOORIGEN = "SELECT * FROM empleado WHERE idCargoOrigenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDNIVELORIGEN = "SELECT * FROM empleado WHERE idNivelOrigenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDPALMAGIST = "SELECT * FROM empleado WHERE idPalMagistEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDDIRENCARGO = "SELECT * FROM empleado WHERE idDirEncargoEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_CODMODULAR = "SELECT * FROM empleado WHERE UPPER(codModularEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CODMODULAR_APROX = "SELECT * FROM empleado WHERE UPPER(codModularEmpleado) LIKE UPPER(?) ORDER BY codModularEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECINGADMPUB = "SELECT * FROM empleado WHERE fecIngAdmPubEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECINGMED = "SELECT * FROM empleado WHERE fecIngMedEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECCESE = "SELECT * FROM empleado WHERE fecCeseEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_INFCOMP = "SELECT * FROM empleado WHERE UPPER(infCompEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_INFCOMP_APROX = "SELECT * FROM empleado WHERE UPPER(infCompEmpleado) LIKE UPPER(?) ORDER BY infCompEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECHAB = "SELECT * FROM empleado WHERE fecHabEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECDES = "SELECT * FROM empleado WHERE fecDesEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECFALL = "SELECT * FROM empleado WHERE fecFallEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_VALPOR = "SELECT * FROM empleado WHERE valPorEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECVAL = "SELECT * FROM empleado WHERE fecValEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_DOCREF = "SELECT * FROM empleado WHERE UPPER(docRefEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_DOCREF_APROX = "SELECT * FROM empleado WHERE UPPER(docRefEmpleado) LIKE UPPER(?) ORDER BY docRefEmpleado";

  const CONSULTAR_EMPLEADO_POR_NUMSEGSALUD = "SELECT * FROM empleado WHERE UPPER(numSegSaludEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_NUMSEGSALUD_APROX = "SELECT * FROM empleado WHERE UPPER(numSegSaludEmpleado) LIKE UPPER(?) ORDER BY numSegSaludEmpleado";

  const CONSULTAR_EMPLEADO_POR_EVIDA = "SELECT * FROM empleado WHERE UPPER(eVidaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_EVIDA_APROX = "SELECT * FROM empleado WHERE UPPER(eVidaEmpleado) LIKE UPPER(?) ORDER BY eVidaEmpleado";

  const CONSULTAR_EMPLEADO_POR_CUSPP = "SELECT * FROM empleado WHERE UPPER(CUSPPEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CUSPP_APROX = "SELECT * FROM empleado WHERE UPPER(CUSPPEmpleado) LIKE UPPER(?) ORDER BY CUSPPEmpleado";

  const CONSULTAR_EMPLEADO_POR_FECAFIPEN = "SELECT * FROM empleado WHERE fecAfiPenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECDEVPEN = "SELECT * FROM empleado WHERE fecDevPenEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_PLAZA = "SELECT * FROM empleado WHERE UPPER(plazaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_PLAZA_APROX = "SELECT * FROM empleado WHERE UPPER(plazaEmpleado) LIKE UPPER(?) ORDER BY plazaEmpleado";

  const CONSULTAR_EMPLEADO_POR_TIPPLAZA = "SELECT * FROM empleado WHERE UPPER(tipPlazaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_TIPPLAZA_APROX = "SELECT * FROM empleado WHERE UPPER(tipPlazaEmpleado) LIKE UPPER(?) ORDER BY tipPlazaEmpleado";

  const CONSULTAR_EMPLEADO_POR_ASIGINSER = "SELECT * FROM empleado WHERE asigInserEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_DIASTRAB = "SELECT * FROM empleado WHERE diasTrabEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_NUMDEP = "SELECT * FROM empleado WHERE numDepEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_NUMDEC = "SELECT * FROM empleado WHERE numDecEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_LICDIAS = "SELECT * FROM empleado WHERE licDiasEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_TIPSERV = "SELECT * FROM empleado WHERE tipServEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_FECINILIC = "SELECT * FROM empleado WHERE fecIniLicEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_INSASIT = "SELECT * FROM empleado WHERE UPPER(insasitEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_INSASIT_APROX = "SELECT * FROM empleado WHERE UPPER(insasitEmpleado) LIKE UPPER(?) ORDER BY insasitEmpleado";

  const CONSULTAR_EMPLEADO_POR_PERMISOS = "SELECT * FROM empleado WHERE UPPER(permisosEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_PERMISOS_APROX = "SELECT * FROM empleado WHERE UPPER(permisosEmpleado) LIKE UPPER(?) ORDER BY permisosEmpleado";

  const CONSULTAR_EMPLEADO_POR_HUELGAS = "SELECT * FROM empleado WHERE huelgasEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_LEYMEN = "SELECT * FROM empleado WHERE UPPER(leyMenEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_LEYMEN_APROX = "SELECT * FROM empleado WHERE UPPER(leyMenEmpleado) LIKE UPPER(?) ORDER BY leyMenEmpleado";

  const CONSULTAR_EMPLEADO_POR_LEYPER = "SELECT * FROM empleado WHERE UPPER(leyPerEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_LEYPER_APROX = "SELECT * FROM empleado WHERE UPPER(leyPerEmpleado) LIKE UPPER(?) ORDER BY leyPerEmpleado";

  const CONSULTAR_EMPLEADO_POR_CADPRESUP = "SELECT * FROM empleado WHERE UPPER(cadPresupEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CADPRESUP_APROX = "SELECT * FROM empleado WHERE UPPER(cadPresupEmpleado) LIKE UPPER(?) ORDER BY cadPresupEmpleado";

  const CONSULTAR_EMPLEADO_POR_CTA = "SELECT * FROM empleado WHERE UPPER(ctaEmpleado) = UPPER(?)";

  const CONSULTAR_EMPLEADO_POR_CTA_APROX = "SELECT * FROM empleado WHERE UPPER(ctaEmpleado) LIKE UPPER(?) ORDER BY ctaEmpleado";
  const CONSULTAR_EMPLEADO_POR_DNI = "SELECT * FROM empleado e inner join persona p on e.idPersona=p.idPersona where p.dniPersona = ?  limit 1";
  const CONSULTAR_EMPLEADO_GRID = "SELECT * from empleado e 
    INNER JOIN persona p on e.idPersona=p.idPersona 
    GROUP by e.idEmpleado";

  // const CONSULTAR_EMPLEADO_GRID = "SELECT * from empleado e INNER JOIN persona p GROUP by e.idEmpleado";

  const CONSULTAR_EMPLEADO_GRID_X_ID = "SELECT * FROM empleado e 
    inner join persona p USING(idPersona)
    -- inner join persona p on e.idPersona=p.idPersona  
    WHERE e.idEmpleado=?  
    group by e.idEmpleado";
  
  const CONSULTAR_EMPLEADO_GRID_DNI = "SELECT * FROM empleado e 
    inner join persona p on e.idPersona=p.idPersona 
    inner join situacion s on e.idSituacion=s.idSituacion 
    where UPPER(p.dniPersona) like UPPER(?)";

  const CONSULTAR_EMPLEADO_GRID_NOMBRE = "SELECT * FROM empleado e 
    inner join persona p on e.idPersona=p.idPersona 
    inner join situacion s on e.idSituacion=s.idSituacion 
    where UPPER(p.nom1Persona) 
      like UPPER(?) or UPPER(p.nom2Persona) 
      like UPPER(?) or UPPER(p.ape1Persona) 
      like UPPER(?) or UPPER (p.ape2Persona) 
      like UPPER(?) ";

  const CONSULTAR_EMPLEADO_GRID_SITUACION = "SELECT * FROM empleado e 
    inner join persona p on e.idPersona=p.idPersona 
    inner join situacion s on e.idSituacion=s.idSituacion 
    where e.idSituacion=?";

  const CONSULTAR_EMPLEADO_GRID_X_ID_TOP = "SELECT * FROM empleado e 
    inner join persona p on e.idPersona=p.idPersona 
    inner join situacion s on e.idSituacion=s.idSituacion 
    WHERE order by e.idEmpleado=?  desc";
    
  const ACTUALIZAR_EMPLEADO_CODMODULAR= "UPDATE empleado set codModular=? where idEmpleado";
}
?>