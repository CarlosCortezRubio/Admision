<?php 
/** 
 * @file SQLHatEmb.php 
 *  
 * Consultas SQL de la Tabla HatEmb 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLHatEmb 
{ 
  const AGREGAR_HATEMB = "INSERT INTO hatemb (idhatEmb, codhatEmb, nomhatEmb) VALUES (?, ?, ?) ";

  const ACTUALIZAR_HATEMB = "UPDATE hatemb SET idhatEmb = ?, codhatEmb = ?, nomhatEmb = ? WHERE idhatEmb = ?";

  const ELIMINAR_HATEMB = "DELETE FROM hatemb WHERE idhatEmb = ?";

  const CONSULTAR_HATEMB = "SELECT * FROM hatemb ORDER BY idhatEmb";

  const CONSULTAR_HATEMB_POR_IDHATEMB = "SELECT * FROM hatemb WHERE idhatEmb = ?";

  const CONSULTAR_HATEMB_POR_COD = "SELECT * FROM hatemb WHERE UPPER(codhatEmb) = UPPER(?)";

  const CONSULTAR_HATEMB_POR_COD_APROX = "SELECT * FROM hatemb WHERE UPPER(codhatEmb) LIKE UPPER(?) ORDER BY codhatEmb";

  const CONSULTAR_HATEMB_POR_NOM = "SELECT * FROM hatemb WHERE UPPER(nomhatEmb) = UPPER(?)";

  const CONSULTAR_HATEMB_POR_NOM_APROX = "SELECT * FROM hatemb WHERE UPPER(nomhatEmb) LIKE UPPER(?) ORDER BY nomhatEmb";

}
?>