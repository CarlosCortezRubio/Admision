<?php 
/** 
 * @file SQLPersona2.php 
 *  
 * Consultas SQL de la Tabla Persona2 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
class SQLPersona2 
{ 
  const AGREGAR_PERSONA2 = "INSERT INTO Persona2 (idPersona, Edo_IDEDOCIVIL, IDBANCO, idEdoRegistro, idGenero, idEdoCivil, idIdioma, idDistritoNac, idDistritoDir, idTipoDoc, idZona, idVia, dniPersona, nom1Persona, nom2Persona, ape1Persona, ape2Persona, numDepPersona, fecNacPersona, zonaDomPersona, desViaDomPersona, numViaDomPersona, intDomPersona, tel1DomPersona, tel2DomPersona, refDomPersona, emaDomPersona) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERSONA2 = "UPDATE Persona2 SET idPersona = ?, Edo_IDEDOCIVIL = ?, IDBANCO = ?, idEdoRegistro = ?, idGenero = ?, idEdoCivil = ?, idIdioma = ?, idDistritoNac = ?, idDistritoDir = ?, idTipoDoc = ?, idZona = ?, idVia = ?, dniPersona = ?, nom1Persona = ?, nom2Persona = ?, ape1Persona = ?, ape2Persona = ?, numDepPersona = ?, fecNacPersona = ?, zonaDomPersona = ?, desViaDomPersona = ?, numViaDomPersona = ?, intDomPersona = ?, tel1DomPersona = ?, tel2DomPersona = ?, refDomPersona = ?, emaDomPersona = ? WHERE idPersona2 = ?";

  const ELIMINAR_PERSONA2 = "DELETE FROM Persona2 WHERE idPersona2 = ?";

  const CONSULTAR_PERSONA2 = "SELECT * FROM Persona2 ORDER BY idPersona";

  const CONSULTAR_PERSONA2_POR_IDPERSONAPERSONA2 = "SELECT * FROM Persona2 WHERE idPersonaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_EDO_IDEDOCIVIL = "SELECT * FROM Persona2 WHERE Edo_IDEDOCIVILPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDBANCO = "SELECT * FROM Persona2 WHERE IDBANCOPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDEDOREGISTRO = "SELECT * FROM Persona2 WHERE idEdoRegistroPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDGENERO = "SELECT * FROM Persona2 WHERE idGeneroPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDEDOCIVIL = "SELECT * FROM Persona2 WHERE idEdoCivilPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDIDIOMA = "SELECT * FROM Persona2 WHERE idIdiomaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDDISTRITONAC = "SELECT * FROM Persona2 WHERE idDistritoNacPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDDISTRITODIR = "SELECT * FROM Persona2 WHERE idDistritoDirPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDTIPODOC = "SELECT * FROM Persona2 WHERE idTipoDocPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDZONA = "SELECT * FROM Persona2 WHERE idZonaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_IDVIA = "SELECT * FROM Persona2 WHERE idViaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_DNIPERSONA = "SELECT * FROM Persona2 WHERE UPPER(dniPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_DNIPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(dniPersonaPersona2) LIKE UPPER(?) ORDER BY dniPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_NOM1PERSONA = "SELECT * FROM Persona2 WHERE UPPER(nom1PersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_NOM1PERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(nom1PersonaPersona2) LIKE UPPER(?) ORDER BY nom1PersonaPersona2";

  const CONSULTAR_PERSONA2_POR_NOM2PERSONA = "SELECT * FROM Persona2 WHERE UPPER(nom2PersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_NOM2PERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(nom2PersonaPersona2) LIKE UPPER(?) ORDER BY nom2PersonaPersona2";

  const CONSULTAR_PERSONA2_POR_APE1PERSONA = "SELECT * FROM Persona2 WHERE UPPER(ape1PersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_APE1PERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(ape1PersonaPersona2) LIKE UPPER(?) ORDER BY ape1PersonaPersona2";

  const CONSULTAR_PERSONA2_POR_APE2PERSONA = "SELECT * FROM Persona2 WHERE UPPER(ape2PersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_APE2PERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(ape2PersonaPersona2) LIKE UPPER(?) ORDER BY ape2PersonaPersona2";

  const CONSULTAR_PERSONA2_POR_NUMDEPPERSONA = "SELECT * FROM Persona2 WHERE numDepPersonaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_FECNACPERSONA = "SELECT * FROM Persona2 WHERE fecNacPersonaPersona2 = ?";

  const CONSULTAR_PERSONA2_POR_ZONADOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(zonaDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_ZONADOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(zonaDomPersonaPersona2) LIKE UPPER(?) ORDER BY zonaDomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_DESVIADOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(desViaDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_DESVIADOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(desViaDomPersonaPersona2) LIKE UPPER(?) ORDER BY desViaDomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_NUMVIADOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(numViaDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_NUMVIADOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(numViaDomPersonaPersona2) LIKE UPPER(?) ORDER BY numViaDomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_INTDOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(intDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_INTDOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(intDomPersonaPersona2) LIKE UPPER(?) ORDER BY intDomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_TEL1DOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(tel1DomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_TEL1DOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(tel1DomPersonaPersona2) LIKE UPPER(?) ORDER BY tel1DomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_TEL2DOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(tel2DomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_TEL2DOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(tel2DomPersonaPersona2) LIKE UPPER(?) ORDER BY tel2DomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_REFDOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(refDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_REFDOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(refDomPersonaPersona2) LIKE UPPER(?) ORDER BY refDomPersonaPersona2";

  const CONSULTAR_PERSONA2_POR_EMADOMPERSONA = "SELECT * FROM Persona2 WHERE UPPER(emaDomPersonaPersona2) = UPPER(?)";

  const CONSULTAR_PERSONA2_POR_EMADOMPERSONA_APROX = "SELECT * FROM Persona2 WHERE UPPER(emaDomPersonaPersona2) LIKE UPPER(?) ORDER BY emaDomPersonaPersona2";

}
?>