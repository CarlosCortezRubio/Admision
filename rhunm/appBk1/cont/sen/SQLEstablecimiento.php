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
  const AGREGAR_ESTABLECIMIENTO = "INSERT INTO Establecimiento (idEstablecimiento, codEstablecimiento, nomEstablecimiento) VALUES (?, ?, ?) ";

  const ACTUALIZAR_ESTABLECIMIENTO = "UPDATE Establecimiento SET idEstablecimiento = ?, codEstablecimiento = ?, nomEstablecimiento = ? WHERE idEstablecimiento = ?";

  const ELIMINAR_ESTABLECIMIENTO = "DELETE FROM Establecimiento WHERE idEstablecimiento = ?";

  const CONSULTAR_ESTABLECIMIENTO = "SELECT * FROM Establecimiento ORDER BY idEstablecimiento";

  const CONSULTAR_ESTABLECIMIENTO_POR_IDESTABLECIMIENTO = "SELECT * FROM Establecimiento WHERE idEstablecimiento = ?";

  const CONSULTAR_ESTABLECIMIENTO_POR_COD = "SELECT * FROM Establecimiento WHERE UPPER(codEstablecimiento) = UPPER(?)";

  const CONSULTAR_ESTABLECIMIENTO_POR_COD_APROX = "SELECT * FROM Establecimiento WHERE UPPER(codEstablecimiento) LIKE UPPER(?) ORDER BY codEstablecimiento";

  const CONSULTAR_ESTABLECIMIENTO_POR_NOM = "SELECT * FROM Establecimiento WHERE UPPER(nomEstablecimiento) = UPPER(?)";

  const CONSULTAR_ESTABLECIMIENTO_POR_NOM_APROX = "SELECT * FROM Establecimiento WHERE UPPER(nomEstablecimiento) LIKE UPPER(?) ORDER BY nomEstablecimiento";

}
?>