<?php 
/** 
 * @file SQLPersona.php 
 *  
 * Consultas SQL de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
*/ 
class SQLPersona 
{ 
  const AGREGAR_PERSONA = "INSERT INTO Persona (idPersona, idGenero, idEdoCivil, idBanco, idTipoPersona, idEdoRegistro, tipDocPersona, docPersona, nom1Persona, nom2Persona, ape1Persona, ape2Persona, fecNacPersona, tel1DomPersona, tel2DomPersona, emaDomPersona, codModularPersona, planillaPersona, tipRegPersona, resPenDefPersona, fecRes, ctaBancoPersona, fntFinancPersona, planilla2Persona, idBenefactorPersona) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERSONA = "UPDATE Persona SET idPersona = ?, idGenero = ?, idEdoCivil = ?, idBanco = ?, idTipoPersona = ?, idEdoRegistro = ?, tipDocPersona = ?, docPersona = ?, nom1Persona = ?, nom2Persona = ?, ape1Persona = ?, ape2Persona = ?, fecNacPersona = ?, tel1DomPersona = ?, tel2DomPersona = ?, emaDomPersona = ?, codModularPersona = ?, planillaPersona = ?, tipRegPersona = ?, resPenDefPersona = ?, fecRes = ?, ctaBancoPersona = ?, fntFinancPersona = ?, planilla2Persona = ?, idBenefactorPersona = ? WHERE idPersona = ?";

  const ELIMINAR_PERSONA = "DELETE FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA = "SELECT * FROM Persona ORDER BY idPersona";

  const CONSULTAR_PERSONA_POR_IDPERSONA = "SELECT * FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA_POR_IDGENERO = "SELECT * FROM Persona WHERE idGeneroPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOCIVIL = "SELECT * FROM Persona WHERE idEdoCivilPersona = ?";

  const CONSULTAR_PERSONA_POR_IDBANCO = "SELECT * FROM Persona WHERE idBancoPersona = ?";

  const CONSULTAR_PERSONA_POR_IDTIPO = "SELECT * FROM Persona WHERE idTipoPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOREGISTRO = "SELECT * FROM Persona WHERE idEdoRegistroPersona = ?";

  const CONSULTAR_PERSONA_POR_TIPDOC = "SELECT * FROM Persona WHERE tipDocPersona = ?";

  const CONSULTAR_PERSONA_POR_DOC = "SELECT * FROM Persona WHERE UPPER(docPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_DOC_APROX = "SELECT * FROM Persona WHERE UPPER(docPersona) LIKE UPPER(?) ORDER BY docPersona";

  const CONSULTAR_PERSONA_POR_NOM1 = "SELECT * FROM Persona WHERE UPPER(nom1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM1_APROX = "SELECT * FROM Persona WHERE UPPER(nom1Persona) LIKE UPPER(?) ORDER BY nom1Persona";

  const CONSULTAR_PERSONA_POR_NOM2 = "SELECT * FROM Persona WHERE UPPER(nom2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM2_APROX = "SELECT * FROM Persona WHERE UPPER(nom2Persona) LIKE UPPER(?) ORDER BY nom2Persona";

  const CONSULTAR_PERSONA_POR_APE1 = "SELECT * FROM Persona WHERE UPPER(ape1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE1_APROX = "SELECT * FROM Persona WHERE UPPER(ape1Persona) LIKE UPPER(?) ORDER BY ape1Persona";

  const CONSULTAR_PERSONA_POR_APE2 = "SELECT * FROM Persona WHERE UPPER(ape2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE2_APROX = "SELECT * FROM Persona WHERE UPPER(ape2Persona) LIKE UPPER(?) ORDER BY ape2Persona";

  const CONSULTAR_PERSONA_POR_FECNAC = "SELECT * FROM Persona WHERE fecNacPersona = ?";

  const CONSULTAR_PERSONA_POR_TEL1DOM = "SELECT * FROM Persona WHERE UPPER(tel1DomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TEL1DOM_APROX = "SELECT * FROM Persona WHERE UPPER(tel1DomPersona) LIKE UPPER(?) ORDER BY tel1DomPersona";

  const CONSULTAR_PERSONA_POR_TEL2DOM = "SELECT * FROM Persona WHERE UPPER(tel2DomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TEL2DOM_APROX = "SELECT * FROM Persona WHERE UPPER(tel2DomPersona) LIKE UPPER(?) ORDER BY tel2DomPersona";

  const CONSULTAR_PERSONA_POR_EMADOM = "SELECT * FROM Persona WHERE UPPER(emaDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_EMADOM_APROX = "SELECT * FROM Persona WHERE UPPER(emaDomPersona) LIKE UPPER(?) ORDER BY emaDomPersona";

  const CONSULTAR_PERSONA_POR_CODMODULAR = "SELECT * FROM Persona WHERE UPPER(codModularPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_CODMODULAR_APROX = "SELECT * FROM Persona WHERE UPPER(codModularPersona) LIKE UPPER(?) ORDER BY codModularPersona";

  const CONSULTAR_PERSONA_POR_PLANILLA = "SELECT * FROM Persona WHERE UPPER(planillaPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_PLANILLA_APROX = "SELECT * FROM Persona WHERE UPPER(planillaPersona) LIKE UPPER(?) ORDER BY planillaPersona";

  const CONSULTAR_PERSONA_POR_TIPREG = "SELECT * FROM Persona WHERE UPPER(tipRegPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TIPREG_APROX = "SELECT * FROM Persona WHERE UPPER(tipRegPersona) LIKE UPPER(?) ORDER BY tipRegPersona";

  const CONSULTAR_PERSONA_POR_RESPENDEF = "SELECT * FROM Persona WHERE UPPER(resPenDefPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_RESPENDEF_APROX = "SELECT * FROM Persona WHERE UPPER(resPenDefPersona) LIKE UPPER(?) ORDER BY resPenDefPersona";

  const CONSULTAR_PERSONA_POR_FECRES = "SELECT * FROM Persona WHERE fecResPersona = ?";

  const CONSULTAR_PERSONA_POR_CTABANCO = "SELECT * FROM Persona WHERE ctaBancoPersona = ?";

  const CONSULTAR_PERSONA_POR_FNTFINANC = "SELECT * FROM Persona WHERE UPPER(fntFinancPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_FNTFINANC_APROX = "SELECT * FROM Persona WHERE UPPER(fntFinancPersona) LIKE UPPER(?) ORDER BY fntFinancPersona";

  const CONSULTAR_PERSONA_POR_PLANILLA2 = "SELECT * FROM Persona WHERE UPPER(planilla2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_PLANILLA2_APROX = "SELECT * FROM Persona WHERE UPPER(planilla2Persona) LIKE UPPER(?) ORDER BY planilla2Persona";

  const CONSULTAR_PERSONA_POR_IDBENEFACTOR = "SELECT * FROM Persona WHERE idBenefactorPersona = ?";

  const CONSULTAR_DICCIONARIO_POR_TIPDOCPERSONA = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

}
?>