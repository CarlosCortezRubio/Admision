<?php 
/** 
 * @file SQLTipoCalcJud.php 
 *  
 * Consultas SQL de la Tabla TipoCalcJud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLTipoCalcJud 
{ 
  const AGREGAR_TIPOCALCJUD = "INSERT INTO tipocalcjud (idTipoCalcJud, codTipoCalcJud, nomTipoCalcJud) VALUES (?, ?, ?) ";

  const ACTUALIZAR_TIPOCALCJUD = "UPDATE tipocalcjud SET idTipoCalcJud = ?, codTipoCalcJud = ?, nomTipoCalcJud = ? WHERE idTipoCalcJud = ?";

  const ELIMINAR_TIPOCALCJUD = "DELETE FROM tipocalcjud WHERE idTipoCalcJud = ?";

  const CONSULTAR_TIPOCALCJUD = "SELECT * FROM tipocalcjud ORDER BY idTipoCalcJud";

  const CONSULTAR_TIPOCALCJUD_POR_IDTIPOCALCJUD = "SELECT * FROM tipocalcjud WHERE idTipoCalcJud = ?";

  const CONSULTAR_TIPOCALCJUD_POR_COD = "SELECT * FROM tipocalcjud WHERE UPPER(codTipoCalcJud) = UPPER(?)";

  const CONSULTAR_TIPOCALCJUD_POR_COD_APROX = "SELECT * FROM tipocalcjud WHERE UPPER(codTipoCalcJud) LIKE UPPER(?) ORDER BY codTipoCalcJud";

  const CONSULTAR_TIPOCALCJUD_POR_NOM = "SELECT * FROM tipocalcjud WHERE UPPER(nomTipoCalcJud) = UPPER(?)";

  const CONSULTAR_TIPOCALCJUD_POR_NOM_APROX = "SELECT * FROM tipocalcjud WHERE UPPER(nomTipoCalcJud) LIKE UPPER(?) ORDER BY nomTipoCalcJud";

}
?>