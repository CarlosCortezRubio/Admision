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
  const AGREGAR_PARENTESCO = "INSERT INTO parentesco (idParentesco, codParentesco, nomParentesco) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PARENTESCO = "UPDATE parentesco SET idParentesco = ?, codParentesco = ?, nomParentesco = ? WHERE idParentesco = ?";

  const ELIMINAR_PARENTESCO = "DELETE FROM parentesco WHERE idParentesco = ?";

  const CONSULTAR_PARENTESCO = "SELECT * FROM parentesco ORDER BY idParentesco";

  const CONSULTAR_PARENTESCO_POR_IDPARENTESCO = "SELECT * FROM parentesco WHERE idParentesco = ?";

  const CONSULTAR_PARENTESCO_POR_COD = "SELECT * FROM parentesco WHERE UPPER(codParentesco) = UPPER(?)";

  const CONSULTAR_PARENTESCO_POR_COD_APROX = "SELECT * FROM parentesco WHERE UPPER(codParentesco) LIKE UPPER(?) ORDER BY codParentesco";

  const CONSULTAR_PARENTESCO_POR_NOM = "SELECT * FROM parentesco WHERE UPPER(nomParentesco) = UPPER(?)";

  const CONSULTAR_PARENTESCO_POR_NOM_APROX = "SELECT * FROM parentesco WHERE UPPER(nomParentesco) LIKE UPPER(?) ORDER BY nomParentesco";

}
?>