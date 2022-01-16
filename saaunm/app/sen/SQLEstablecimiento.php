<?php 
/** 
 * @file SQLEstablecimiento.php 
 *  
 * Consultas SQL de la Tabla Establecimiento 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLEstablecimiento 
{ 
  const AGREGAR_ESTABLECIMIENTO = "INSERT INTO establecimiento (idEstablecimiento, codEstablecimiento, nomEstablecimiento) VALUES (?, ?, ?) ";

  const ACTUALIZAR_ESTABLECIMIENTO = "UPDATE establecimiento SET idEstablecimiento = ?, codEstablecimiento = ?, nomEstablecimiento = ? WHERE idEstablecimiento = ?";

  const ELIMINAR_ESTABLECIMIENTO = "DELETE FROM establecimiento WHERE idEstablecimiento = ?";

  const CONSULTAR_ESTABLECIMIENTO = "SELECT * FROM establecimiento ORDER BY idEstablecimiento";

  const CONSULTAR_ESTABLECIMIENTO_POR_IDESTABLECIMIENTO = "SELECT * FROM establecimiento WHERE idEstablecimiento = ?";

  const CONSULTAR_ESTABLECIMIENTO_POR_COD = "SELECT * FROM establecimiento WHERE UPPER(codEstablecimiento) = UPPER(?)";

  const CONSULTAR_ESTABLECIMIENTO_POR_COD_APROX = "SELECT * FROM establecimiento WHERE UPPER(codEstablecimiento) LIKE UPPER(?) ORDER BY codEstablecimiento";

  const CONSULTAR_ESTABLECIMIENTO_POR_NOM = "SELECT * FROM establecimiento WHERE UPPER(nomEstablecimiento) = UPPER(?)";

  const CONSULTAR_ESTABLECIMIENTO_POR_NOM_APROX = "SELECT * FROM establecimiento WHERE UPPER(nomEstablecimiento) LIKE UPPER(?) ORDER BY nomEstablecimiento";

}
?>