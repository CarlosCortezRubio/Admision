<?php 
/** 
 * @file SQLModoPago.php 
 *  
 * Consultas SQL de la Tabla ModoPago 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLModoPago 
{ 
  const AGREGAR_MODOPAGO = "INSERT INTO modopago (idModoPago, codModoPago, nomModoPago) VALUES (?, ?, ?) ";

  const ACTUALIZAR_MODOPAGO = "UPDATE modopago SET idModoPago = ?, codModoPago = ?, nomModoPago = ? WHERE idModoPago = ?";

  const ELIMINAR_MODOPAGO = "DELETE FROM modopago WHERE idModoPago = ?";

  const CONSULTAR_MODOPAGO = "SELECT * FROM modopago ORDER BY idModoPago";

  const CONSULTAR_MODOPAGO_POR_IDMODOPAGO = "SELECT * FROM modopago WHERE idModoPago = ?";

  const CONSULTAR_MODOPAGO_POR_COD = "SELECT * FROM modopago WHERE UPPER(codModoPago) = UPPER(?)";

  const CONSULTAR_MODOPAGO_POR_COD_APROX = "SELECT * FROM modopago WHERE UPPER(codModoPago) LIKE UPPER(?) ORDER BY codModoPago";

  const CONSULTAR_MODOPAGO_POR_NOM = "SELECT * FROM modopago WHERE UPPER(nomModoPago) = UPPER(?)";

  const CONSULTAR_MODOPAGO_POR_NOM_APROX = "SELECT * FROM modopago WHERE UPPER(nomModoPago) LIKE UPPER(?) ORDER BY nomModoPago";

}
?>