<?php 
/** 
 * @file SQLSede.php 
 *  
 * Consultas SQL de la Tabla Sede 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLSede 
{ 
  const AGREGAR_SEDE = "INSERT INTO Sede (idSede, nomSede) VALUES (?, ?) ";

  const ACTUALIZAR_SEDE = "UPDATE Sede SET idSede = ?, nomSede = ? WHERE idSede = ?";

  const ELIMINAR_SEDE = "DELETE FROM Sede WHERE idSede = ?";

  const CONSULTAR_SEDE = "SELECT * FROM Sede ORDER BY idSede";

  const CONSULTAR_SEDE_POR_IDSEDE = "SELECT * FROM Sede WHERE idSede = ?";

  const CONSULTAR_SEDE_POR_NOM = "SELECT * FROM Sede WHERE UPPER(nomSede) = UPPER(?)";

  const CONSULTAR_SEDE_POR_NOM_APROX = "SELECT * FROM Sede WHERE UPPER(nomSede) LIKE UPPER(?) ORDER BY nomSede";

}
?>