<?php 
/** 
 * @file SQLEdoRegistro.php 
 *  
 * Consultas SQL de la Tabla edoregistro 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 30/07/2021
 *  
*/ 
class SQLEdoRegistro 
{ 
  const AGREGAR_EDOREGISTRO = "INSERT INTO edoregistro (idEdoRegistro, nomEdoRegistro, descEdoRegistro, grupoEdoRegistro) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_EDOREGISTRO = "UPDATE edoregistro SET idEdoRegistro = ?, nomEdoRegistro = ?, descEdoRegistro = ?, grupoEdoRegistro = ? WHERE idEdoRegistro = ?";

  const ELIMINAR_EDOREGISTRO = "DELETE FROM edoregistro WHERE idEdoRegistro = ?";

  const CONSULTAR_EDOREGISTRO = "SELECT * FROM edoregistro ORDER BY idEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_IDEDOREGISTRO = "SELECT * FROM edoregistro WHERE idEdoRegistro = ?";

  const CONSULTAR_EDOREGISTRO_POR_NOM = "SELECT * FROM edoregistro WHERE UPPER(nomEdoRegistro) = UPPER(?)";

  const CONSULTAR_EDOREGISTRO_POR_NOM_APROX = "SELECT * FROM edoregistro WHERE UPPER(nomEdoRegistro) LIKE UPPER(?) ORDER BY nomEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_DESC = "SELECT * FROM edoregistro WHERE UPPER(descEdoRegistro) = UPPER(?)";

  const CONSULTAR_EDOREGISTRO_POR_DESC_APROX = "SELECT * FROM edoregistro WHERE UPPER(descEdoRegistro) LIKE UPPER(?) ORDER BY descEdoRegistro";

  const CONSULTAR_EDOREGISTRO_POR_GRUPO = "SELECT * FROM edoregistro WHERE grupoEdoRegistro = ?";

}
?>