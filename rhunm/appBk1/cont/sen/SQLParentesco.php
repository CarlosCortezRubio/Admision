<?php 
/** 
 * @file SQLParentesco.php 
 *  
 * Consultas SQL de la Tabla Parentesco 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLParentesco 
{ 
  const AGREGAR_PARENTESCO = "INSERT INTO Parentesco (idParentesco, codParentesco, nomParentesco) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PARENTESCO = "UPDATE Parentesco SET idParentesco = ?, codParentesco = ?, nomParentesco = ? WHERE idParentesco = ?";

  const ELIMINAR_PARENTESCO = "DELETE FROM Parentesco WHERE idParentesco = ?";

  const CONSULTAR_PARENTESCO = "SELECT * FROM Parentesco ORDER BY idParentesco";

  const CONSULTAR_PARENTESCO_POR_IDPARENTESCO = "SELECT * FROM Parentesco WHERE idParentesco = ?";

  const CONSULTAR_PARENTESCO_POR_COD = "SELECT * FROM Parentesco WHERE UPPER(codParentesco) = UPPER(?)";

  const CONSULTAR_PARENTESCO_POR_COD_APROX = "SELECT * FROM Parentesco WHERE UPPER(codParentesco) LIKE UPPER(?) ORDER BY codParentesco";

  const CONSULTAR_PARENTESCO_POR_NOM = "SELECT * FROM Parentesco WHERE UPPER(nomParentesco) = UPPER(?)";

  const CONSULTAR_PARENTESCO_POR_NOM_APROX = "SELECT * FROM Parentesco WHERE UPPER(nomParentesco) LIKE UPPER(?) ORDER BY nomParentesco";

}
?>