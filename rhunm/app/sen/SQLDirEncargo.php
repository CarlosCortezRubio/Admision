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
class SQLDirEncargo 
{ 
  

  const CONSULTAR_DIRENCARGO = "SELECT * FROM direncargo ORDER BY idDirEncargo";
  const CONSULTAR_DIRENCARGO_X_DNI="SELECT * FROM direncargo where idDirEncargo=?";
  const REGISTRAR_DIR_ENCARGO="INSERT INTO direncargo (idDirEncargo, codDirEncargo, nomDirEncargo) VALUES (?, ?, ?)";
  const ACTUALIZAR_DIR_ENCARGO="UPDATE direncargo SET idDirEncargo=?,codDirEncargo = ?, nomDirEncargo = ? WHERE direncargo.idDirEncargo = ?";
  const ELIMINAR_DIR_ENCARGO="DELETE FROM direncargo where idDirEncargo=?";


}
?>