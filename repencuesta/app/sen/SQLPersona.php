<?php 
/** 
 * @file SQLPersona.php 
 *  
 * Consultas SQL de la Tabla Persona 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
*/ 
class SQLPersona 
{ 
  const AGREGAR_PERSONA = "INSERT INTO Persona (idPersona, idGenero, idEdoCivil, idGradoInst, nomPersona1, nomPersona2, apePersona1, apePersona2, cedPersona, nacPersona, rifPersona, fecNacPersona, movPersona, telPersona, emailPersona, fotPersona, fecIngAdmPub, dirPersona, numHijosPersona, numHijosCobranPersona, numHijosEspPersona, fecFallecimientoPersona, idConyuguePersona) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERSONA = "UPDATE Persona SET idPersona = ?, idGenero = ?, idEdoCivil = ?, idGradoInst = ?, nomPersona1 = ?, nomPersona2 = ?, apePersona1 = ?, apePersona2 = ?, cedPersona = ?, nacPersona = ?, rifPersona = ?, fecNacPersona = ?, movPersona = ?, telPersona = ?, emailPersona = ?, fotPersona = ?, fecIngAdmPub = ?, dirPersona = ?, numHijosPersona = ?, numHijosCobranPersona = ?, numHijosEspPersona = ?, fecFallecimientoPersona = ?, idConyuguePersona = ? WHERE idPersona = ?";

  const ELIMINAR_PERSONA = "DELETE FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA = "SELECT * FROM Persona ORDER BY idPersona";

  const CONSULTAR_PERSONA_POR_IDPERSONA = "SELECT * FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA_POR_IDGENERO = "SELECT * FROM Persona WHERE idGeneroPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOCIVIL = "SELECT * FROM Persona WHERE idEdoCivilPersona = ?";

  const CONSULTAR_PERSONA_POR_IDGRADOINST = "SELECT * FROM Persona WHERE idGradoInstPersona = ?";

  const CONSULTAR_PERSONA_POR_NOM1 = "SELECT * FROM Persona WHERE UPPER(nom1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM1_APROX = "SELECT * FROM Persona WHERE UPPER(nom1Persona) LIKE UPPER(?) ORDER BY nom1Persona";

  const CONSULTAR_PERSONA_POR_NOM2 = "SELECT * FROM Persona WHERE UPPER(nom2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM2_APROX = "SELECT * FROM Persona WHERE UPPER(nom2Persona) LIKE UPPER(?) ORDER BY nom2Persona";

  const CONSULTAR_PERSONA_POR_APE1 = "SELECT * FROM Persona WHERE UPPER(ape1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE1_APROX = "SELECT * FROM Persona WHERE UPPER(ape1Persona) LIKE UPPER(?) ORDER BY ape1Persona";

  const CONSULTAR_PERSONA_POR_APE2 = "SELECT * FROM Persona WHERE UPPER(ape2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE2_APROX = "SELECT * FROM Persona WHERE UPPER(ape2Persona) LIKE UPPER(?) ORDER BY ape2Persona";

  const CONSULTAR_PERSONA_POR_CED = "SELECT * FROM Persona WHERE UPPER(cedPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_CED_APROX = "SELECT * FROM Persona WHERE UPPER(cedPersona) LIKE UPPER(?) ORDER BY cedPersona";

  const CONSULTAR_PERSONA_POR_NAC = "SELECT * FROM Persona WHERE UPPER(nacPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NAC_APROX = "SELECT * FROM Persona WHERE UPPER(nacPersona) LIKE UPPER(?) ORDER BY nacPersona";

  const CONSULTAR_PERSONA_POR_RIF = "SELECT * FROM Persona WHERE UPPER(rifPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_RIF_APROX = "SELECT * FROM Persona WHERE UPPER(rifPersona) LIKE UPPER(?) ORDER BY rifPersona";

  const CONSULTAR_PERSONA_POR_FECNAC = "SELECT * FROM Persona WHERE fecNacPersona = ?";

  const CONSULTAR_PERSONA_POR_MOV = "SELECT * FROM Persona WHERE UPPER(movPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_MOV_APROX = "SELECT * FROM Persona WHERE UPPER(movPersona) LIKE UPPER(?) ORDER BY movPersona";

  const CONSULTAR_PERSONA_POR_TEL = "SELECT * FROM Persona WHERE UPPER(telPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TEL_APROX = "SELECT * FROM Persona WHERE UPPER(telPersona) LIKE UPPER(?) ORDER BY telPersona";

  const CONSULTAR_PERSONA_POR_EMAIL = "SELECT * FROM Persona WHERE UPPER(emailPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_EMAIL_APROX = "SELECT * FROM Persona WHERE UPPER(emailPersona) LIKE UPPER(?) ORDER BY emailPersona";

  const CONSULTAR_PERSONA_POR_FOT = "SELECT * FROM Persona WHERE UPPER(fotPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_FOT_APROX = "SELECT * FROM Persona WHERE UPPER(fotPersona) LIKE UPPER(?) ORDER BY fotPersona";

  const CONSULTAR_PERSONA_POR_FECINGADMPUB = "SELECT * FROM Persona WHERE fecIngAdmPubPersona = ?";

  const CONSULTAR_PERSONA_POR_DIR = "SELECT * FROM Persona WHERE UPPER(dirPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_DIR_APROX = "SELECT * FROM Persona WHERE UPPER(dirPersona) LIKE UPPER(?) ORDER BY dirPersona";

  const CONSULTAR_PERSONA_POR_NUMHIJOS = "SELECT * FROM Persona WHERE numHijosPersona = ?";

  const CONSULTAR_PERSONA_POR_NUMHIJOSCOBRAN = "SELECT * FROM Persona WHERE numHijosCobranPersona = ?";

  const CONSULTAR_PERSONA_POR_NUMHIJOSESP = "SELECT * FROM Persona WHERE numHijosEspPersona = ?";

  const CONSULTAR_PERSONA_POR_FECFALLECIMIENTO = "SELECT * FROM Persona WHERE fecFallecimientoPersona = ?";

  const CONSULTAR_PERSONA_POR_IDCONYUGUE = "SELECT * FROM Persona WHERE idConyuguePersona = ?";

}
?>