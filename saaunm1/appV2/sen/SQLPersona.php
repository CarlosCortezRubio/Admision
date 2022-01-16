<?php 
/** 
 * @file SQLPersona.php 
 *  
 * Consultas SQL de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLPersona 
{ 
  const AGREGAR_PERSONA = "INSERT INTO Persona (IDPERSONA, IDGENERO, IDEDOCIVIL, IDEDOREGISTRO) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_PERSONA = "UPDATE Persona SET IDPERSONA = ?, IDGENERO = ?, IDEDOCIVIL = ?, IDEDOREGISTRO = ? WHERE idPersona = ?";

  const ELIMINAR_PERSONA = "DELETE FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA = "SELECT * FROM Persona ORDER BY IDPERSONA";

  const CONSULTAR_PERSONA_POR_IDPERSONAPERSONA = "SELECT * FROM Persona WHERE IDPERSONAPersona = ?";

  const CONSULTAR_PERSONA_POR_IDGENERO = "SELECT * FROM Persona WHERE IDGENEROPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOCIVIL = "SELECT * FROM Persona WHERE IDEDOCIVILPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOREGISTRO = "SELECT * FROM Persona WHERE IDEDOREGISTROPersona = ?";

}
?>