<?php 
/** 
 * @file SQLVia.php 
 *  
 * Consultas SQL de la Tabla Via 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLVia 
{ 
  const AGREGAR_VIA = "INSERT INTO Via (idVia, nomVia) VALUES (?, ?) ";

  const ACTUALIZAR_VIA = "UPDATE Via SET idVia = ?, nomVia = ? WHERE idVia = ?";

  const ELIMINAR_VIA = "DELETE FROM Via WHERE idVia = ?";

  const CONSULTAR_VIA = "SELECT * FROM Via ORDER BY idVia";

  const CONSULTAR_VIA_POR_IDVIA = "SELECT * FROM Via WHERE idVia = ?";

  const CONSULTAR_VIA_POR_NOM = "SELECT * FROM Via WHERE UPPER(nomVia) = UPPER(?)";

  const CONSULTAR_VIA_POR_NOM_APROX = "SELECT * FROM Via WHERE UPPER(nomVia) LIKE UPPER(?) ORDER BY nomVia";

}
?>