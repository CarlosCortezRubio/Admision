<?php 
/** 
 * @file SQLPensum.php 
 *  
 * Consultas SQL de la Tabla Pensum 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLPensum 
{ 
  const AGREGAR_PENSUM = "INSERT INTO Pensum (idPensum, idEdoRegistro, nomPensum) VALUES (?, ?, ?) ";

  const ACTUALIZAR_PENSUM = "UPDATE Pensum SET idPensum = ?, idEdoRegistro = ?, nomPensum = ? WHERE idPensum = ?";

  const ELIMINAR_PENSUM = "DELETE FROM Pensum WHERE idPensum = ?";

  const CONSULTAR_PENSUM = "SELECT * FROM Pensum ORDER BY idPensum";

  const CONSULTAR_PENSUM_POR_IDPENSUM = "SELECT * FROM Pensum WHERE idPensum = ?";

  const CONSULTAR_PENSUM_POR_IDEDOREGISTRO = "SELECT * FROM Pensum WHERE idEdoRegistroPensum = ?";

  const CONSULTAR_PENSUM_POR_NOM = "SELECT * FROM Pensum WHERE UPPER(nomPensum) = UPPER(?)";

  const CONSULTAR_PENSUM_POR_NOM_APROX = "SELECT * FROM Pensum WHERE UPPER(nomPensum) LIKE UPPER(?) ORDER BY nomPensum";

}
?>