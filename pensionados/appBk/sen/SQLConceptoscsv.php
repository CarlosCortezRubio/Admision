<?php 
/** 
 * @file SQLConceptoscsv.php 
 *  
 * Consultas SQL de la Tabla Conceptoscsv 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLConceptoscsv 
{ 
  const AGREGAR_CONCEPTOSCSV = "INSERT INTO conceptoscsv (tipo_concepto, concepto, nombre, des_corta, afecta_afp, afecta_snp, afecta_ipss, es_remunera, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_CONCEPTOSCSV = "UPDATE conceptoscsv SET tipo_concepto = ?, concepto = ?, nombre = ?, des_corta = ?, afecta_afp = ?, afecta_snp = ?, afecta_ipss = ?, es_remunera = ?, estado = ? WHERE idconceptoscsv = ?";

  const ELIMINAR_CONCEPTOSCSV = "DELETE FROM conceptoscsv WHERE idconceptoscsv = ?";

  const CONSULTAR_CONCEPTOSCSV = "SELECT * FROM conceptoscsv ORDER BY idconceptoscsv";

}
?>