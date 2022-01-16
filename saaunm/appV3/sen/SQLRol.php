<?php 
/** 
 * @file SQLRol.php 
 *  
 * Consultas SQL de la Tabla Rol 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLRol 
{ 
  const AGREGAR_ROL = "INSERT INTO Rol (IDROL, Edo_idEdoRegistro, NOMROL, DESCROL) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_ROL = "UPDATE Rol SET IDROL = ?, Edo_idEdoRegistro = ?, NOMROL = ?, DESCROL = ? WHERE idRol = ?";

  const ELIMINAR_ROL = "DELETE FROM Rol WHERE idRol = ?";

  const CONSULTAR_ROL = "SELECT * FROM Rol ORDER BY IDROL";

  const CONSULTAR_ROL_POR_IDROLROL = "SELECT * FROM Rol WHERE IDROLRol = ?";

  const CONSULTAR_ROL_POR_EDO_IDEDOREGISTRO = "SELECT * FROM Rol WHERE Edo_idEdoRegistroRol = ?";

  const CONSULTAR_ROL_POR_NOMROL = "SELECT * FROM Rol WHERE UPPER(NOMROLRol) = UPPER(?)";

  const CONSULTAR_ROL_POR_NOMROL_APROX = "SELECT * FROM Rol WHERE UPPER(NOMROLRol) LIKE UPPER(?) ORDER BY NOMROLRol";

  const CONSULTAR_ROL_POR_DESCROL = "SELECT * FROM Rol WHERE UPPER(DESCROLRol) = UPPER(?)";

  const CONSULTAR_ROL_POR_DESCROL_APROX = "SELECT * FROM Rol WHERE UPPER(DESCROLRol) LIKE UPPER(?) ORDER BY DESCROLRol";

}
?>