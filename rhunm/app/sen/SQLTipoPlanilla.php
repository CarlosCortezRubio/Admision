<?php 
/** 
 * @file SQLTipoPlanilla.php 
 *  
 * Consultas SQL de la Tabla TipoPlanilla 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLTipoPlanilla 
{ 
  const AGREGAR_TIPOPLANILLA = "INSERT INTO tipoplanilla (idTipoPlanilla, nomTipoPlanilla) VALUES (?, ?) ";

  const ACTUALIZAR_TIPOPLANILLA = "UPDATE tipoplanilla SET idTipoPlanilla = ?, nomTipoPlanilla = ? WHERE idTipoPlanilla = ?";

  const ELIMINAR_TIPOPLANILLA = "DELETE FROM tipoplanilla WHERE idTipoPlanilla = ?";

  const CONSULTAR_TIPOPLANILLA = "SELECT * FROM tipoplanilla ORDER BY idTipoPlanilla";

  const CONSULTAR_TIPOPLANILLA_POR_IDTIPOPLANILLA = "SELECT * FROM tipoplanilla WHERE idTipoPlanilla = ?";

  const CONSULTAR_TIPOPLANILLA_POR_NOM = "SELECT * FROM tipoplanilla WHERE UPPER(nomTipoPlanilla) = UPPER(?)";

  const CONSULTAR_TIPOPLANILLA_POR_NOM_APROX = "SELECT * FROM tipoplanilla WHERE UPPER(nomTipoPlanilla) LIKE UPPER(?) ORDER BY nomTipoPlanilla";

}
?>