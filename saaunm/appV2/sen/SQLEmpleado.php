<?php 
/** 
 * @file SQLEmpleado.php 
 *  
 * Consultas SQL de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLEmpleado 
{ 
  const AGREGAR_EMPLEADO = "INSERT INTO Empleado (idEmpleado, idPersona) VALUES (?, ?) ";

  const ACTUALIZAR_EMPLEADO = "UPDATE Empleado SET idEmpleado = ?, idPersona = ? WHERE idEmpleado = ?";

  const ELIMINAR_EMPLEADO = "DELETE FROM Empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO = "SELECT * FROM Empleado ORDER BY idEmpleado";

  const CONSULTAR_EMPLEADO_POR_IDEMPLEADO = "SELECT * FROM Empleado WHERE idEmpleado = ?";

  const CONSULTAR_EMPLEADO_POR_IDPERSONA = "SELECT * FROM Empleado WHERE idPersonaEmpleado = ?";

}
?>