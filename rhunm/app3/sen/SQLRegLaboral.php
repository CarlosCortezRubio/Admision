<?php 
/** 
 * @file SQLRegLaboral.php 
 *  
 * Consultas SQL de la Tabla RegLaboral 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLRegLaboral 
{ 
  const AGREGAR_REGLABORAL = "INSERT INTO reglaboral (idRegLaboral, codRegLaboral, nomRegLaboral) VALUES (?, ?, ?) ";

  const ACTUALIZAR_REGLABORAL = "UPDATE reglaboral SET idRegLaboral = ?, codRegLaboral = ?, nomRegLaboral = ? WHERE idRegLaboral = ?";

  const ELIMINAR_REGLABORAL = "DELETE FROM reglaboral WHERE idRegLaboral = ?";

  const CONSULTAR_REGLABORAL = "SELECT * FROM reglaboral ORDER BY idRegLaboral";

  const CONSULTAR_REGLABORAL_POR_IDREGLABORAL = "SELECT * FROM reglaboral WHERE idRegLaboral = ?";

  const CONSULTAR_REGLABORAL_POR_COD = "SELECT * FROM reglaboral WHERE UPPER(codRegLaboral) = UPPER(?)";

  const CONSULTAR_REGLABORAL_POR_COD_APROX = "SELECT * FROM reglaboral WHERE UPPER(codRegLaboral) LIKE UPPER(?) ORDER BY codRegLaboral";

  const CONSULTAR_REGLABORAL_POR_NOM = "SELECT * FROM reglaboral WHERE UPPER(nomRegLaboral) = UPPER(?)";

  const CONSULTAR_REGLABORAL_POR_NOM_APROX = "SELECT * FROM reglaboral WHERE UPPER(nomRegLaboral) LIKE UPPER(?) ORDER BY nomRegLaboral";

}
?>