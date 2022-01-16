<?php 
/** 
 * @file SQLPeriodo.php 
 *  
 * Consultas SQL de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLPeriodo 
{ 
  const AGREGAR_PERIODO = "INSERT INTO Periodo (idPeriodo, idEdoRegistro, nomPeriodo, fecIniPeriodo, fecFinPeriodo, OrdPeriodo) VALUES (?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERIODO = "UPDATE Periodo SET idPeriodo = ?, idEdoRegistro = ?, nomPeriodo = ?, fecIniPeriodo = ?, fecFinPeriodo = ?, OrdPeriodo = ? WHERE idPeriodo = ?";

  const ELIMINAR_PERIODO = "DELETE FROM Periodo WHERE idPeriodo = ?";

  const CONSULTAR_PERIODO = "SELECT * FROM Periodo ORDER BY idPeriodo";

  const CONSULTAR_PERIODO_POR_IDPERIODO = "SELECT * FROM Periodo WHERE idPeriodo = ?";

  const CONSULTAR_PERIODO_POR_IDEDOREGISTRO = "SELECT * FROM Periodo WHERE idEdoRegistroPeriodo = ?";

  const CONSULTAR_PERIODO_POR_NOM = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) = UPPER(?)";

  const CONSULTAR_PERIODO_POR_NOM_APROX = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) LIKE UPPER(?) ORDER BY nomPeriodo";

  const CONSULTAR_PERIODO_POR_FECINI = "SELECT * FROM Periodo WHERE fecIniPeriodo = ?";

  const CONSULTAR_PERIODO_POR_FECFIN = "SELECT * FROM Periodo WHERE fecFinPeriodo = ?";

  const CONSULTAR_PERIODO_POR_ORD = "SELECT * FROM Periodo WHERE OrdPeriodo = ?";

}
?>