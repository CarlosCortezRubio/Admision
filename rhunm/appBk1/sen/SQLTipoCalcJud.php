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
  const AGREGAR_TIPOCALCJUD = "INSERT INTO TipoCalcJud (idTipoCalcJud, codTipoCalcJud, nomTipoCalcJud) VALUES (?, ?, ?) ";

  const ACTUALIZAR_TIPOCALCJUD = "UPDATE TipoCalcJud SET idTipoCalcJud = ?, codTipoCalcJud = ?, nomTipoCalcJud = ? WHERE idTipoCalcJud = ?";

  const ELIMINAR_TIPOCALCJUD = "DELETE FROM TipoCalcJud WHERE idTipoCalcJud = ?";

  const CONSULTAR_TIPOCALCJUD = "SELECT * FROM TipoCalcJud ORDER BY idTipoCalcJud";

  const CONSULTAR_TIPOCALCJUD_POR_IDTIPOCALCJUD = "SELECT * FROM TipoCalcJud WHERE idTipoCalcJud = ?";

  const CONSULTAR_TIPOCALCJUD_POR_COD = "SELECT * FROM TipoCalcJud WHERE UPPER(codTipoCalcJud) = UPPER(?)";

  const CONSULTAR_TIPOCALCJUD_POR_COD_APROX = "SELECT * FROM TipoCalcJud WHERE UPPER(codTipoCalcJud) LIKE UPPER(?) ORDER BY codTipoCalcJud";

  const CONSULTAR_TIPOCALCJUD_POR_NOM = "SELECT * FROM TipoCalcJud WHERE UPPER(nomTipoCalcJud) = UPPER(?)";

  const CONSULTAR_TIPOCALCJUD_POR_NOM_APROX = "SELECT * FROM TipoCalcJud WHERE UPPER(nomTipoCalcJud) LIKE UPPER(?) ORDER BY nomTipoCalcJud";

}
?>