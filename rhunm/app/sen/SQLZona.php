<?php 
/** 
 * @file SQLZona.php 
 *  
 * Consultas SQL de la Tabla Zona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLZona 
{ 
  const AGREGAR_ZONA = "INSERT INTO zona (idZona, nomZona) VALUES (?, ?) ";

  const ACTUALIZAR_ZONA = "UPDATE zona SET idZona = ?, nomZona = ? WHERE idZona = ?";

  const ELIMINAR_ZONA = "DELETE FROM zona WHERE idZona = ?";

  const CONSULTAR_ZONA = "SELECT * FROM zona ORDER BY idZona";

  const CONSULTAR_ZONA_POR_IDZONA = "SELECT * FROM zona WHERE idZona = ?";

  const CONSULTAR_ZONA_POR_NOM = "SELECT * FROM zona WHERE UPPER(nomZona) = UPPER(?)";

  const CONSULTAR_ZONA_POR_NOM_APROX = "SELECT * FROM zona WHERE UPPER(nomZona) LIKE UPPER(?) ORDER BY nomZona";

}
?>