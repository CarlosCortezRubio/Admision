<?php 
/** 
 * @file SQLEdoCivil.php 
 *  
 * Consultas SQL de la Tabla EdoCivil 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLEdoCivil 
{ 
  const AGREGAR_EDOCIVIL = "INSERT INTO edocivil (idEdoCivil, nomEdoCivil) VALUES (?, ?) ";

  const ACTUALIZAR_EDOCIVIL = "UPDATE edocivil SET idEdoCivil = ?, nomEdoCivil = ? WHERE idEdoCivil = ?";

  const ELIMINAR_EDOCIVIL = "DELETE FROM edocivil WHERE idEdoCivil = ?";

  const CONSULTAR_EDOCIVIL = "SELECT * FROM edocivil ORDER BY idEdoCivil";

  const CONSULTAR_EDOCIVIL_POR_IDEDOCIVIL = "SELECT * FROM edocivil WHERE idEdoCivil = ?";

  const CONSULTAR_EDOCIVIL_POR_NOM = "SELECT * FROM edocivil WHERE UPPER(nomEdoCivil) = UPPER(?)";

  const CONSULTAR_EDOCIVIL_POR_NOM_APROX = "SELECT * FROM edocivil WHERE UPPER(nomEdoCivil) LIKE UPPER(?) ORDER BY nomEdoCivil";

}
?>