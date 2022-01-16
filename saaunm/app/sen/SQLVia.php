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
  const AGREGAR_VIA = "INSERT INTO via (idVia, nomVia) VALUES (?, ?) ";

  const ACTUALIZAR_VIA = "UPDATE via SET idVia = ?, nomVia = ? WHERE idVia = ?";

  const ELIMINAR_VIA = "DELETE FROM via WHERE idVia = ?";

  const CONSULTAR_VIA = "SELECT * FROM via ORDER BY idVia";

  const CONSULTAR_VIA_POR_IDVIA = "SELECT * FROM via WHERE idVia = ?";

  const CONSULTAR_VIA_POR_NOM = "SELECT * FROM via WHERE UPPER(nomVia) = UPPER(?)";

  const CONSULTAR_VIA_POR_NOM_APROX = "SELECT * FROM via WHERE UPPER(nomVia) LIKE UPPER(?) ORDER BY nomVia";

}
?>