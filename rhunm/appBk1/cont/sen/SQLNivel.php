<?php 
/** 
 * @file SQLNivel.php 
 *  
 * Consultas SQL de la Tabla Nivel 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLNivel 
{ 
  const AGREGAR_NIVEL = "INSERT INTO Nivel (idNivel, codNivel, nomNivel) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NIVEL = "UPDATE Nivel SET idNivel = ?, codNivel = ?, nomNivel = ? WHERE idNivel = ?";

  const ELIMINAR_NIVEL = "DELETE FROM Nivel WHERE idNivel = ?";

  const CONSULTAR_NIVEL = "SELECT * FROM Nivel ORDER BY idNivel";

  const CONSULTAR_NIVEL_POR_IDNIVEL = "SELECT * FROM Nivel WHERE idNivel = ?";

  const CONSULTAR_NIVEL_POR_COD = "SELECT * FROM Nivel WHERE UPPER(codNivel) = UPPER(?)";

  const CONSULTAR_NIVEL_POR_COD_APROX = "SELECT * FROM Nivel WHERE UPPER(codNivel) LIKE UPPER(?) ORDER BY codNivel";

  const CONSULTAR_NIVEL_POR_NOM = "SELECT * FROM Nivel WHERE UPPER(nomNivel) = UPPER(?)";

  const CONSULTAR_NIVEL_POR_NOM_APROX = "SELECT * FROM Nivel WHERE UPPER(nomNivel) LIKE UPPER(?) ORDER BY nomNivel";

}
?>