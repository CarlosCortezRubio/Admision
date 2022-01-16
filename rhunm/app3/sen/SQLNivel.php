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
  const AGREGAR_NIVEL = "INSERT INTO nivel (idNivel, codNivel, nomNivel) VALUES (?, ?, ?) ";

  const ACTUALIZAR_NIVEL = "UPDATE nivel SET idNivel = ?, codNivel = ?, nomNivel = ? WHERE idNivel = ?";

  const ELIMINAR_NIVEL = "DELETE FROM nivel WHERE idNivel = ?";

  const CONSULTAR_NIVEL = "SELECT * FROM nivel ORDER BY idNivel";

  const CONSULTAR_NIVEL_POR_IDNIVEL = "SELECT * FROM nivel WHERE idNivel = ?";

  const CONSULTAR_NIVEL_POR_COD = "SELECT * FROM nivel WHERE UPPER(codNivel) = UPPER(?)";

  const CONSULTAR_NIVEL_POR_COD_APROX = "SELECT * FROM nivel WHERE UPPER(codNivel) LIKE UPPER(?) ORDER BY codNivel";

  const CONSULTAR_NIVEL_POR_NOM = "SELECT * FROM nivel WHERE UPPER(nomNivel) = UPPER(?)";

  const CONSULTAR_NIVEL_POR_NOM_APROX = "SELECT * FROM nivel WHERE UPPER(nomNivel) LIKE UPPER(?) ORDER BY nomNivel";

}
?>