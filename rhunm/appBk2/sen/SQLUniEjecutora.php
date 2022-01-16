<?php 
/** 
 * @file SQLUniEjecutora.php 
 *  
 * Consultas SQL de la Tabla UniEjecutora 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLUniEjecutora 
{ 
  const AGREGAR_UNIEJECUTORA = "INSERT INTO uniejecutora (idUniEjecutora, codUniEjecutora, nomUniEjecutora) VALUES (?, ?, ?) ";

  const ACTUALIZAR_UNIEJECUTORA = "UPDATE uniejecutora SET idUniEjecutora = ?, codUniEjecutora = ?, nomUniEjecutora = ? WHERE idUniEjecutora = ?";

  const ELIMINAR_UNIEJECUTORA = "DELETE FROM uniejecutora WHERE idUniEjecutora = ?";

  const CONSULTAR_UNIEJECUTORA = "SELECT * FROM uniejecutora ORDER BY idUniEjecutora";

  const CONSULTAR_UNIEJECUTORA_POR_IDUNIEJECUTORA = "SELECT * FROM uniejecutora WHERE idUniEjecutora = ?";

  const CONSULTAR_UNIEJECUTORA_POR_COD = "SELECT * FROM uniejecutora WHERE UPPER(codUniEjecutora) = UPPER(?)";

  const CONSULTAR_UNIEJECUTORA_POR_COD_APROX = "SELECT * FROM uniejecutora WHERE UPPER(codUniEjecutora) LIKE UPPER(?) ORDER BY codUniEjecutora";

  const CONSULTAR_UNIEJECUTORA_POR_NOM = "SELECT * FROM uniejecutora WHERE UPPER(nomUniEjecutora) = UPPER(?)";

  const CONSULTAR_UNIEJECUTORA_POR_NOM_APROX = "SELECT * FROM uniejecutora WHERE UPPER(nomUniEjecutora) LIKE UPPER(?) ORDER BY nomUniEjecutora";

}
?>