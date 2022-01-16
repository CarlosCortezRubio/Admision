<?php 
/** 
 * @file SQLEdoCivil.php 
 *  
 * Consultas SQL de la Tabla EdoCivil 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLEdoCivil 
{ 
  const AGREGAR_EDOCIVIL = "INSERT INTO EdoCivil (IDEDOCIVIL, NOMEDOCIVIL) VALUES (?, ?) ";

  const ACTUALIZAR_EDOCIVIL = "UPDATE EdoCivil SET IDEDOCIVIL = ?, NOMEDOCIVIL = ? WHERE idEdoCivil = ?";

  const ELIMINAR_EDOCIVIL = "DELETE FROM EdoCivil WHERE idEdoCivil = ?";

  const CONSULTAR_EDOCIVIL = "SELECT * FROM EdoCivil ORDER BY IDEDOCIVIL";

  const CONSULTAR_EDOCIVIL_POR_IDEDOCIVILEDOCIVIL = "SELECT * FROM EdoCivil WHERE IDEDOCIVILEdoCivil = ?";

  const CONSULTAR_EDOCIVIL_POR_NOMEDOCIVIL = "SELECT * FROM EdoCivil WHERE UPPER(NOMEDOCIVILEdoCivil) = UPPER(?)";

  const CONSULTAR_EDOCIVIL_POR_NOMEDOCIVIL_APROX = "SELECT * FROM EdoCivil WHERE UPPER(NOMEDOCIVILEdoCivil) LIKE UPPER(?) ORDER BY NOMEDOCIVILEdoCivil";

}
?>