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
  const AGREGAR_TIPREGISTRO = "INSERT INTO TipRegistro (idTipRegistro, nomTipRegistro) VALUES (?, ?) ";

  const ACTUALIZAR_TIPREGISTRO = "UPDATE TipRegistro SET idTipRegistro = ?, nomTipRegistro = ? WHERE idTipRegistro = ?";

  const ELIMINAR_TIPREGISTRO = "DELETE FROM TipRegistro WHERE idTipRegistro = ?";

  const CONSULTAR_TIPREGISTRO = "SELECT * FROM TipRegistro ORDER BY idTipRegistro";

  const CONSULTAR_TIPREGISTRO_POR_IDTIPREGISTRO = "SELECT * FROM TipRegistro WHERE idTipRegistro = ?";

  const CONSULTAR_TIPREGISTRO_POR_NOM = "SELECT * FROM TipRegistro WHERE UPPER(nomTipRegistro) = UPPER(?)";

  const CONSULTAR_TIPREGISTRO_POR_NOM_APROX = "SELECT * FROM TipRegistro WHERE UPPER(nomTipRegistro) LIKE UPPER(?) ORDER BY nomTipRegistro";

}
?>