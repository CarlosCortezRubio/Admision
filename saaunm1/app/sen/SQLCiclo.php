<?php 
/** 
 * @file SQLCiclo.php 
 *  
 * Consultas SQL de la Tabla Ciclo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLCiclo 
{ 
  const AGREGAR_CICLO = "INSERT INTO Ciclo (idCiclo, IDEDOREGISTRO, nomCiclo, codCiclo) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_CICLO = "UPDATE Ciclo SET idCiclo = ?, IDEDOREGISTRO = ?, nomCiclo = ?, codCiclo = ? WHERE idCiclo = ?";

  const ELIMINAR_CICLO = "DELETE FROM Ciclo WHERE idCiclo = ?";

  const CONSULTAR_CICLO = "SELECT * FROM Ciclo ORDER BY idCiclo";

  const CONSULTAR_CICLO_POR_IDCICLO = "SELECT * FROM Ciclo WHERE idCiclo = ?";

  const CONSULTAR_CICLO_POR_IDEDOREGISTRO = "SELECT * FROM Ciclo WHERE IDEDOREGISTROCiclo = ?";

  const CONSULTAR_CICLO_POR_NOM = "SELECT * FROM Ciclo WHERE UPPER(nomCiclo) = UPPER(?)";

  const CONSULTAR_CICLO_POR_NOM_APROX = "SELECT * FROM Ciclo WHERE UPPER(nomCiclo) LIKE UPPER(?) ORDER BY nomCiclo";

  const CONSULTAR_CICLO_POR_COD = "SELECT * FROM Ciclo WHERE UPPER(codCiclo) = UPPER(?)";

  const CONSULTAR_CICLO_POR_COD_APROX = "SELECT * FROM Ciclo WHERE UPPER(codCiclo) LIKE UPPER(?) ORDER BY codCiclo";

}
?>