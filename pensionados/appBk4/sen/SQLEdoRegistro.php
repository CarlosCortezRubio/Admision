<?php 
/** 
 * @file SQLEdoRegistro.php 
 *  
 * Consultas SQL de la Tabla EdoRegistro 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLEdoRegistro 
{ 
  const AGREGAR_EDOREGISTRO = "INSERT INTO EdoRegistro (idEdoRegistro, nomEdoRegistro, descEdoRegistro, gpoEdoRegistro) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_EDOREGISTRO = "UPDATE EdoRegistro SET idEdoRegistro = ?, nomEdoRegistro = ?, descEdoRegistro = ?, gpoEdoRegistro = ? WHERE idEdoRegistro = ?";

  const ELIMINAR_EDOREGISTRO = "DELETE FROM EdoRegistro WHERE idEdoRegistro = ?";

  const CONSULTAR_EDOREGISTRO = "SELECT * FROM EdoRegistro ORDER BY idEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO = "SELECT * FROM EdoRegistro WHERE idEdoRegistro = ?";

  const CONSULTAR_EDOREGISTRO_POR_NOM = "SELECT * FROM EdoRegistro WHERE UPPER(nomEdoRegistro) = UPPER(?)";

  const CONSULTAR_EDOREGISTRO_POR_NOM_APROX = "SELECT * FROM EdoRegistro WHERE UPPER(nomEdoRegistro) LIKE UPPER(?) ORDER BY nomEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_DESC = "SELECT * FROM EdoRegistro WHERE UPPER(descEdoRegistro) = UPPER(?)";

  const CONSULTAR_EDOREGISTRO_POR_DESC_APROX = "SELECT * FROM EdoRegistro WHERE UPPER(descEdoRegistro) LIKE UPPER(?) ORDER BY descEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_GPO = "SELECT * FROM EdoRegistro WHERE gpoEdoRegistro = ?";

}
?>