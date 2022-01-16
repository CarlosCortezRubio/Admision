<?php 
/** 
 * @file SQLTipoAsignatura.php 
 *  
 * Consultas SQL de la Tabla TipoAsignatura 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 20/12/2021
 *  
*/ 
class SQLTipoAsignatura 
{ 
  const AGREGAR_TIPOASIGNATURA = "INSERT INTO TipoAsignatura (idTipoAsignatura, nomTipoAsignatura) VALUES (?, ?) ";

  const ACTUALIZAR_TIPOASIGNATURA = "UPDATE TipoAsignatura SET idTipoAsignatura = ?, nomTipoAsignatura = ? WHERE idTipoAsignatura = ?";

  const ELIMINAR_TIPOASIGNATURA = "DELETE FROM TipoAsignatura WHERE idTipoAsignatura = ?";

  const CONSULTAR_TIPOASIGNATURA = "SELECT * FROM TipoAsignatura ORDER BY idTipoAsignatura";

  const CONSULTAR_TIPOASIGNATURA_POR_IDTIPOASIGNATURA = "SELECT * FROM TipoAsignatura WHERE idTipoAsignatura = ?";

  const CONSULTAR_TIPOASIGNATURA_POR_NOM = "SELECT * FROM TipoAsignatura WHERE UPPER(nomTipoAsignatura) = UPPER(?)";

  const CONSULTAR_TIPOASIGNATURA_POR_NOM_APROX = "SELECT * FROM TipoAsignatura WHERE UPPER(nomTipoAsignatura) LIKE UPPER(?) ORDER BY nomTipoAsignatura";

}
?>