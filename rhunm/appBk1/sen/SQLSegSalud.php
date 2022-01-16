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
  const AGREGAR_SEGSALUD = "INSERT INTO SegSalud (idSegSalud, nomSegSalud) VALUES (?, ?) ";

  const ACTUALIZAR_SEGSALUD = "UPDATE SegSalud SET idSegSalud = ?, nomSegSalud = ? WHERE idSegSalud = ?";

  const ELIMINAR_SEGSALUD = "DELETE FROM SegSalud WHERE idSegSalud = ?";

  const CONSULTAR_SEGSALUD = "SELECT * FROM SegSalud ORDER BY idSegSalud";

  const CONSULTAR_SEGSALUD_POR_IDSEGSALUD = "SELECT * FROM SegSalud WHERE idSegSalud = ?";

  const CONSULTAR_SEGSALUD_POR_NOM = "SELECT * FROM SegSalud WHERE UPPER(nomSegSalud) = UPPER(?)";

  const CONSULTAR_SEGSALUD_POR_NOM_APROX = "SELECT * FROM SegSalud WHERE UPPER(nomSegSalud) LIKE UPPER(?) ORDER BY nomSegSalud";

}
?>