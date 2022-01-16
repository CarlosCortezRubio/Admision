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
  const AGREGAR_ZONA = "INSERT INTO Zona (idZona, nomZona) VALUES (?, ?) ";

  const ACTUALIZAR_ZONA = "UPDATE Zona SET idZona = ?, nomZona = ? WHERE idZona = ?";

  const ELIMINAR_ZONA = "DELETE FROM Zona WHERE idZona = ?";

  const CONSULTAR_ZONA = "SELECT * FROM Zona ORDER BY idZona";

  const CONSULTAR_ZONA_POR_IDZONA = "SELECT * FROM Zona WHERE idZona = ?";

  const CONSULTAR_ZONA_POR_NOM = "SELECT * FROM Zona WHERE UPPER(nomZona) = UPPER(?)";

  const CONSULTAR_ZONA_POR_NOM_APROX = "SELECT * FROM Zona WHERE UPPER(nomZona) LIKE UPPER(?) ORDER BY nomZona";

}
?>