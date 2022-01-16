<?php 
/** 
 * @file SQLTipoConcepto.php 
 *  
 * Consultas SQL de la Tabla tipoconcepto 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLTipoConcepto 
{ 
  const AGREGAR_TIPOCONCEPTO = "INSERT INTO tipoconcepto (idTipoConcepto, idEdoRegistro, nomTipoConcepto, descTipoConcepto) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_TIPOCONCEPTO = "UPDATE tipoconcepto SET idTipoConcepto = ?, idEdoRegistro = ?, nomTipoConcepto = ?, descTipoConcepto = ? WHERE idTipoConcepto = ?";

  const ELIMINAR_TIPOCONCEPTO = "DELETE FROM tipoconcepto WHERE idTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO = "SELECT * FROM tipoconcepto ORDER BY idTipoConcepto";

  const CONSULTAR_TIPOCONCEPTO_POR_IDTIPOCONCEPTO = "SELECT * FROM tipoconcepto WHERE idTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO_POR_IDEDOREGISTRO = "SELECT * FROM tipoconcepto WHERE idEdoRegistroTipoConcepto = ?";

  const CONSULTAR_TIPOCONCEPTO_POR_NOM = "SELECT * FROM tipoconcepto WHERE UPPER(nomTipoConcepto) = UPPER(?)";

  const CONSULTAR_TIPOCONCEPTO_POR_NOM_APROX = "SELECT * FROM tipoconcepto WHERE UPPER(nomTipoConcepto) LIKE UPPER(?) ORDER BY nomTipoConcepto";

  const CONSULTAR_TIPOCONCEPTO_POR_DESC = "SELECT * FROM tipoconcepto WHERE UPPER(descTipoConcepto) = UPPER(?)";

  const CONSULTAR_TIPOCONCEPTO_POR_DESC_APROX = "SELECT * FROM tipoconcepto WHERE UPPER(descTipoConcepto) LIKE UPPER(?) ORDER BY descTipoConcepto";

}
?>