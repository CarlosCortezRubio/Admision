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
  const AGREGAR_HATEMB = "INSERT INTO hatEmb (idhatEmb, codhatEmb, nomhatEmb) VALUES (?, ?, ?) ";

  const ACTUALIZAR_HATEMB = "UPDATE hatEmb SET idhatEmb = ?, codhatEmb = ?, nomhatEmb = ? WHERE idhatEmb = ?";

  const ELIMINAR_HATEMB = "DELETE FROM hatEmb WHERE idhatEmb = ?";

  const CONSULTAR_HATEMB = "SELECT * FROM hatEmb ORDER BY idhatEmb";

  const CONSULTAR_HATEMB_POR_IDHATEMB = "SELECT * FROM hatEmb WHERE idhatEmb = ?";

  const CONSULTAR_HATEMB_POR_COD = "SELECT * FROM hatEmb WHERE UPPER(codhatEmb) = UPPER(?)";

  const CONSULTAR_HATEMB_POR_COD_APROX = "SELECT * FROM hatEmb WHERE UPPER(codhatEmb) LIKE UPPER(?) ORDER BY codhatEmb";

  const CONSULTAR_HATEMB_POR_NOM = "SELECT * FROM hatEmb WHERE UPPER(nomhatEmb) = UPPER(?)";

  const CONSULTAR_HATEMB_POR_NOM_APROX = "SELECT * FROM hatEmb WHERE UPPER(nomhatEmb) LIKE UPPER(?) ORDER BY nomhatEmb";

}
?>