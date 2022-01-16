<?php 
/** 
 * @file SQLRol.php 
 *  
 * Consultas SQL de la Tabla Rol 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
*/ 
class SQLRol 
{ 
  const AGREGAR_ROL = "INSERT INTO Rol (idRol, nomRol, descRol) VALUES (?, ?, ?) ";

  const ACTUALIZAR_ROL = "UPDATE Rol SET idRol = ?, nomRol = ?, descRol = ? WHERE idRol = ?";

  const ELIMINAR_ROL = "DELETE FROM Rol WHERE idRol = ?";

  const CONSULTAR_ROL = "SELECT * FROM Rol ORDER BY idRol";

  const CONSULTAR_ROL_POR_IDROL = "SELECT * FROM Rol WHERE idRol = ?";

  const CONSULTAR_ROL_POR_NOM = "SELECT * FROM Rol WHERE UPPER(nomRol) = UPPER(?)";

  const CONSULTAR_ROL_POR_NOM_APROX = "SELECT * FROM Rol WHERE UPPER(nomRol) LIKE UPPER(?) ORDER BY nomRol";

  const CONSULTAR_ROL_POR_DESC = "SELECT * FROM Rol WHERE UPPER(descRol) = UPPER(?)";

  const CONSULTAR_ROL_POR_DESC_APROX = "SELECT * FROM Rol WHERE UPPER(descRol) LIKE UPPER(?) ORDER BY descRol";

}
?>