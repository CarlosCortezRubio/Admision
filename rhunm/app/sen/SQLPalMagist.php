<?php 
/** 
 * @file SQLPalMagist.php 
 *  
 * Consultas SQL de la Tabla PalMagist 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLPalMagist 
{ 
  const AGREGAR_PALMAGIST = "INSERT INTO palmagist (idPalMagist, codPalMagist, nomPalMagist) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PALMAGIST = "UPDATE palmagist SET idPalMagist = ?, codPalMagist = ?, nomPalMagist = ? WHERE idPalMagist = ?";

  const ELIMINAR_PALMAGIST = "DELETE FROM palmagist WHERE idPalMagist = ?";

  const CONSULTAR_PALMAGIST = "SELECT * FROM palmagist ORDER BY idPalMagist";

  const CONSULTAR_PALMAGIST_POR_IDPALMAGIST = "SELECT * FROM palmagist WHERE idPalMagist = ?";

  const CONSULTAR_PALMAGIST_POR_COD = "SELECT * FROM palmagist WHERE UPPER(codPalMagist) = UPPER(?)";

  const CONSULTAR_PALMAGIST_POR_COD_APROX = "SELECT * FROM palmagist WHERE UPPER(codPalMagist) LIKE UPPER(?) ORDER BY codPalMagist";

  const CONSULTAR_PALMAGIST_POR_NOM = "SELECT * FROM palmagist WHERE UPPER(nomPalMagist) = UPPER(?)";

  const CONSULTAR_PALMAGIST_POR_NOM_APROX = "SELECT * FROM palmagist WHERE UPPER(nomPalMagist) LIKE UPPER(?) ORDER BY nomPalMagist";

}
?>