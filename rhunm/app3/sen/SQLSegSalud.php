<?php 
/** 
 * @file SQLSegSalud.php 
 *  
 * Consultas SQL de la Tabla SegSalud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLSegSalud 
{ 
  const AGREGAR_SEGSALUD = "INSERT INTO segsalud (idSegSalud, nomSegSalud) VALUES (?, ?) ";

  const ACTUALIZAR_SEGSALUD = "UPDATE segsalud SET idSegSalud = ?, nomSegSalud = ? WHERE idSegSalud = ?";

  const ELIMINAR_SEGSALUD = "DELETE FROM segsalud WHERE idSegSalud = ?";

  const CONSULTAR_SEGSALUD = "SELECT * FROM segsalud ORDER BY idSegSalud";

  const CONSULTAR_SEGSALUD_POR_IDSEGSALUD = "SELECT * FROM segsalud WHERE idSegSalud = ?";

  const CONSULTAR_SEGSALUD_POR_NOM = "SELECT * FROM segsalud WHERE UPPER(nomSegSalud) = UPPER(?)";

  const CONSULTAR_SEGSALUD_POR_NOM_APROX = "SELECT * FROM segsalud WHERE UPPER(nomSegSalud) LIKE UPPER(?) ORDER BY nomSegSalud";

}
?>