<?php 
/** 
 * @file SQLTipoSolicitud.php 
 *  
 * Consultas SQL de la Tabla TipoSolicitud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLTipoSolicitud 
{ 
  const AGREGAR_TIPOSOLICITUD = "INSERT INTO TipoSolicitud (idTipoSolicitud, solTipoSolicitud, fecIniTipoSolicitud, fecFinTipoSolicitud, segTipoSolicitud) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_TIPOSOLICITUD = "UPDATE TipoSolicitud SET idTipoSolicitud = ?, solTipoSolicitud = ?, fecIniTipoSolicitud = ?, fecFinTipoSolicitud = ?, segTipoSolicitud = ? WHERE idTipoSolicitud = ?";

  const ELIMINAR_TIPOSOLICITUD = "DELETE FROM TipoSolicitud WHERE idTipoSolicitud = ?";

  const CONSULTAR_TIPOSOLICITUD = "SELECT * FROM TipoSolicitud ORDER BY idTipoSolicitud";

  const CONSULTAR_TIPOSOLICITUD_POR_IDTIPOSOLICITUD = "SELECT * FROM TipoSolicitud WHERE idTipoSolicitud = ?";

  const CONSULTAR_TIPOSOLICITUD_POR_SOL = "SELECT * FROM TipoSolicitud WHERE UPPER(solTipoSolicitud) = UPPER(?)";

  const CONSULTAR_TIPOSOLICITUD_POR_SOL_APROX = "SELECT * FROM TipoSolicitud WHERE UPPER(solTipoSolicitud) LIKE UPPER(?) ORDER BY solTipoSolicitud";

  const CONSULTAR_TIPOSOLICITUD_POR_FECINI = "SELECT * FROM TipoSolicitud WHERE fecIniTipoSolicitud = ?";

  const CONSULTAR_TIPOSOLICITUD_POR_FECFIN = "SELECT * FROM TipoSolicitud WHERE fecFinTipoSolicitud = ?";

  const CONSULTAR_TIPOSOLICITUD_POR_SEG = "SELECT * FROM TipoSolicitud WHERE segTipoSolicitud = ?";

}
?>