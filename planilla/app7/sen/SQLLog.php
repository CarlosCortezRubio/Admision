<?php 
/** 
 * @file SQLLog.php 
 *  
 * Consultas SQL de la Tabla Log 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
*/ 
class SQLLog 
{ 
  const AGREGAR_LOG = "INSERT INTO log (idlog, idUsuario, fechalog, iplog, accionlog) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_LOG = "UPDATE log SET idlog = ?, idUsuario = ?, fechalog = ?, iplog = ?, accionlog = ? WHERE idlog = ?";

  const ELIMINAR_LOG = "DELETE FROM log WHERE idlog = ?";

  const CONSULTAR_LOG = "SELECT * FROM log ORDER BY idlog";

  const CONSULTAR_LOG_POR_IDLOG = "SELECT * FROM log WHERE idlog = ?";

  const CONSULTAR_LOG_POR_IDUSUARIO = "SELECT * FROM log WHERE idUsuariolog = ?";

  const CONSULTAR_LOG_POR_FECHA = "SELECT * FROM log WHERE fechalog = ?";

  const CONSULTAR_LOG_POR_IP = "SELECT * FROM log WHERE UPPER(iplog) = UPPER(?)";

  const CONSULTAR_LOG_POR_IP_APROX = "SELECT * FROM log WHERE UPPER(iplog) LIKE UPPER(?) ORDER BY iplog";

  const CONSULTAR_LOG_POR_ACCION = "SELECT * FROM log WHERE UPPER(accionlog) = UPPER(?)";

  const CONSULTAR_LOG_POR_ACCION_APROX = "SELECT * FROM log WHERE UPPER(accionlog) LIKE UPPER(?) ORDER BY accionlog";

}
?>