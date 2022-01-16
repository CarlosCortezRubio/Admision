<?php 
/** 
 * @file SQLIdioma.php 
 *  
 * Consultas SQL de la Tabla Idioma 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLCodRegional 
{ 
  

  const CONSULTAR_CODIGO_REGIONAL = "SELECT * FROM codregional ORDER BY idCodRegional";
  const CONSULTAR_CODIGO_REGIONAL_X_ID = "SELECT * FROM CodRegional WHERE  idCodRegional=?";
  const AGREGAR_COD_REGIONAL="INSERT INTO codregional (idCodRegional, codCodRegional, nomCodRegional) VALUES (?, ?, ?)";
  const ACTUALIZAR_COD_REGIONAL="UPDATE codregional SET idCodRegional=?,codCodRegional=?,nomCodRegional=? WHERE idCodRegional=?";
  const ELIMINAR_COD_REGIONAL="DELETE FROM codregional where idCodRegional=?";
}
?>