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
class SQLAfp
{ 
  

  const CONSULTAR_AFP = "SELECT * FROM afp ORDER BY idAfp";
  const AGREGAR_AFP="INSERT INTO afp (idAfp, codAfp, nomAfp) VALUES (?, ?, ?)";
  const ACTUALIZAR_AFP="UPDATE afp SET idAfp=?,codAfp=?,nomAfp=? where idAfp=?";
  const ELIMINAR_AFP="DELETE from afp where idAfp=?";
  const CONSULTAR_AFP_X_ID="SELECT * from afp where idAfp=?";
}
?>