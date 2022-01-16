<?php 
/** 
 * @file SQLEdoCivil.php 
 *  
 * Consultas SQL de la Tabla EdoCivil 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLEdoCivil 
{ 
  const AGREGAR_EDOCIVIL = "INSERT INTO EdoCivil (idEdoCivil, nomEdoCivil) VALUES (?, ?) ";

  const ACTUALIZAR_EDOCIVIL = "UPDATE EdoCivil SET idEdoCivil = ?, nomEdoCivil = ? WHERE idEdoCivil = ?";

  const ELIMINAR_EDOCIVIL = "DELETE FROM EdoCivil WHERE idEdoCivil = ?";

  const CONSULTAR_EDOCIVIL = "SELECT * FROM EdoCivil ORDER BY idEdoCivil";

  const CONSULTAR_EDOCIVIL_POR_IDEDOCIVIL = "SELECT * FROM EdoCivil WHERE idEdoCivil = ?";

  const CONSULTAR_EDOCIVIL_POR_NOM = "SELECT * FROM EdoCivil WHERE UPPER(nomEdoCivil) = UPPER(?)";

  const CONSULTAR_EDOCIVIL_POR_NOM_APROX = "SELECT * FROM EdoCivil WHERE UPPER(nomEdoCivil) LIKE UPPER(?) ORDER BY nomEdoCivil";

}
?>