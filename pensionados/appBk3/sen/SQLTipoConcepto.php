<?php 
/** 
 * @file SQLTipoConcepto.php 
 *  
 * Consultas SQL de la Tabla TipoConcepto 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLTipoConcepto 
{ 
  const AGREGAR_TIPOCONCEPTO = "INSERT INTO TipoConcepto (idTipoConcepto, idEdoRegistro, nomTipoConcepto, descTipoConcepto) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_TIPOCONCEPTO = "UPDATE TipoConcepto SET idTipoConcepto = ?, idEdoRegistro = ?, nomTipoConcepto = ?, descTipoConcepto = ? WHERE idTipoConcepto = ?";

  const ELIMINAR_TIPOCONCEPTO = "DELETE FROM TipoConcepto WHERE idTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO = "SELECT * FROM TipoConcepto ORDER BY idTipoConcepto";

  const CONSULTAR_TIPOCONCEPTO_POR_IDTIPOCONCEPTO = "SELECT * FROM TipoConcepto WHERE idTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO_POR_IDEDOREGISTRO = "SELECT * FROM TipoConcepto WHERE idEdoRegistroTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO_POR_NOM = "SELECT * FROM TipoConcepto WHERE UPPER(nomTipoConcepto) = UPPER(?)";

  const CONSULTAR_TIPOCONCEPTO_POR_NOM_APROX = "SELECT * FROM TipoConcepto WHERE UPPER(nomTipoConcepto) LIKE UPPER(?) ORDER BY nomTipoConcepto";

  const CONSULTAR_TIPOCONCEPTO_POR_DESC = "SELECT * FROM TipoConcepto WHERE UPPER(descTipoConcepto) = UPPER(?)";

  const CONSULTAR_TIPOCONCEPTO_POR_DESC_APROX = "SELECT * FROM TipoConcepto WHERE UPPER(descTipoConcepto) LIKE UPPER(?) ORDER BY descTipoConcepto";

}
?>