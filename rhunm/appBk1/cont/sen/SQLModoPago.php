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
  const AGREGAR_MODOPAGO = "INSERT INTO ModoPago (idModoPago, codModoPago, nomModoPago) VALUES (?, ?, ?) ";

  const ACTUALIZAR_MODOPAGO = "UPDATE ModoPago SET idModoPago = ?, codModoPago = ?, nomModoPago = ? WHERE idModoPago = ?";

  const ELIMINAR_MODOPAGO = "DELETE FROM ModoPago WHERE idModoPago = ?";

  const CONSULTAR_MODOPAGO = "SELECT * FROM ModoPago ORDER BY idModoPago";

  const CONSULTAR_MODOPAGO_POR_IDMODOPAGO = "SELECT * FROM ModoPago WHERE idModoPago = ?";

  const CONSULTAR_MODOPAGO_POR_COD = "SELECT * FROM ModoPago WHERE UPPER(codModoPago) = UPPER(?)";

  const CONSULTAR_MODOPAGO_POR_COD_APROX = "SELECT * FROM ModoPago WHERE UPPER(codModoPago) LIKE UPPER(?) ORDER BY codModoPago";

  const CONSULTAR_MODOPAGO_POR_NOM = "SELECT * FROM ModoPago WHERE UPPER(nomModoPago) = UPPER(?)";

  const CONSULTAR_MODOPAGO_POR_NOM_APROX = "SELECT * FROM ModoPago WHERE UPPER(nomModoPago) LIKE UPPER(?) ORDER BY nomModoPago";

}
?>