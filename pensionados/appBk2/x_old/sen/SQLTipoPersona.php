<?php 
/** 
 * @file SQLTipoPersona.php 
 *  
 * Consultas SQL de la Tabla TipoPersona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLTipoPersona 
{ 
  const AGREGAR_TIPOPERSONA = "INSERT INTO TipoPersona (idTipoPersona, idEdoRegistro, nomTipoPersona, descTipoPersona) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_TIPOPERSONA = "UPDATE TipoPersona SET idTipoPersona = ?, idEdoRegistro = ?, nomTipoPersona = ?, descTipoPersona = ? WHERE idTipoPersona = ?";

  const ELIMINAR_TIPOPERSONA = "DELETE FROM TipoPersona WHERE idTipoPersona = ?";

  const CONSULTAR_TIPOPERSONA = "SELECT * FROM TipoPersona ORDER BY idTipoPersona";

  const CONSULTAR_TIPOPERSONA_POR_IDTIPOPERSONA = "SELECT * FROM TipoPersona WHERE idTipoPersona = ?";

  const CONSULTAR_TIPOPERSONA_POR_IDEDOREGISTRO = "SELECT * FROM TipoPersona WHERE idEdoRegistroTipoPersona = ?";

  const CONSULTAR_TIPOPERSONA_POR_NOM = "SELECT * FROM TipoPersona WHERE UPPER(nomTipoPersona) = UPPER(?)";

  const CONSULTAR_TIPOPERSONA_POR_NOM_APROX = "SELECT * FROM TipoPersona WHERE UPPER(nomTipoPersona) LIKE UPPER(?) ORDER BY nomTipoPersona";

  const CONSULTAR_TIPOPERSONA_POR_DESC = "SELECT * FROM TipoPersona WHERE UPPER(descTipoPersona) = UPPER(?)";

  const CONSULTAR_TIPOPERSONA_POR_DESC_APROX = "SELECT * FROM TipoPersona WHERE UPPER(descTipoPersona) LIKE UPPER(?) ORDER BY descTipoPersona";

}
?>