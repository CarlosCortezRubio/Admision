<?php 
/** 
 * @file SQLTipRegistro.php 
 *  
 * Consultas SQL de la Tabla TipRegistro 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLTipRegistro 
{ 
  const AGREGAR_TIPREGISTRO = "INSERT INTO tipregistro (idTipRegistro, nomTipRegistro) VALUES (?, ?) ";

  const ACTUALIZAR_TIPREGISTRO = "UPDATE tipregistro SET idTipRegistro = ?, nomTipRegistro = ? WHERE idTipRegistro = ?";

  const ELIMINAR_TIPREGISTRO = "DELETE FROM tipregistro WHERE idTipRegistro = ?";

  const CONSULTAR_TIPREGISTRO = "SELECT * FROM tipregistro ORDER BY idTipRegistro";

  const CONSULTAR_TIPREGISTRO_POR_IDTIPREGISTRO = "SELECT * FROM tipregistro WHERE idTipRegistro = ?";

  const CONSULTAR_TIPREGISTRO_POR_NOM = "SELECT * FROM tipregistro WHERE UPPER(nomTipRegistro) = UPPER(?)";

  const CONSULTAR_TIPREGISTRO_POR_NOM_APROX = "SELECT * FROM tipregistro WHERE UPPER(nomTipRegistro) LIKE UPPER(?) ORDER BY nomTipRegistro";

}
?>