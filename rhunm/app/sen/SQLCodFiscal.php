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
class SQLCodFiscal 
{ 
  

  const CONSULTAR_CODIGO_FISCAL = "SELECT * FROM codfiscal ORDER BY idCodFiscal";
  const CONSULTAR_CODIGO_FISCAL_X_ID = "SELECT * FROM codfiscal WHERE  idCodFiscal=?";
  const AGREGAR_COD_FISCAL="INSERT INTO codfiscal (idCodFiscal, codCodFiscal, nomCodFiscal) VALUES (?, ?, ?)";
  const ACTUALIZAR_COD_FISCAL="UPDATE codfiscal set idCodFiscal=?,codCodFiscal=?,nomCodFiscal=? where idCodFiscal=?";
  const ELIMINAR_COD_FISCAL="DELETE FROM codfiscal where idCodFiscal=?";
}
?>