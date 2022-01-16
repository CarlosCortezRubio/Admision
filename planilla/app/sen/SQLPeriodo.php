<?php 
/** 
 * @file SQLPeriodo.php 
 *  
 * Consultas SQL de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 19/09/2021
 *  
*/ 
class SQLPeriodo 
{ 
  const AGREGAR_PERIODO = "INSERT INTO Periodo (idPeriodo, anioPeriodo, mesPeriodo, nomPeriodo, edoPeriodo, obsPeriodo) VALUES (?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERIODO = "UPDATE Periodo SET idPeriodo = ?, anioPeriodo = ?, mesPeriodo = ?, nomPeriodo = ?, edoPeriodo = ?, obsPeriodo = ? WHERE idPeriodo = ?";

  const ELIMINAR_PERIODO = "DELETE FROM Periodo WHERE idPeriodo = ?";

  const CONSULTAR_PERIODO = "SELECT * FROM Periodo ORDER BY idPeriodo";

  const CONSULTAR_PERIODO_POR_IDPERIODO = "SELECT * FROM Periodo WHERE idPeriodo = ?";

  const CONSULTAR_PERIODO_POR_ANIO = "SELECT * FROM Periodo WHERE anioPeriodo = ?";

  const CONSULTAR_PERIODO_POR_MES = "SELECT * FROM Periodo WHERE mesPeriodo = ?";

  const CONSULTAR_PERIODO_POR_NOM = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) = UPPER(?)";

  const CONSULTAR_PERIODO_POR_NOM_APROX = "SELECT * FROM Periodo WHERE UPPER(nomPeriodo) LIKE UPPER(?) ORDER BY nomPeriodo";

  const CONSULTAR_PERIODO_POR_EDO = "SELECT * FROM Periodo WHERE edoPeriodo = ?";

  const CONSULTAR_PERIODO_POR_OBS = "SELECT * FROM Periodo WHERE UPPER(obsPeriodo) = UPPER(?)";

  const CONSULTAR_PERIODO_POR_OBS_APROX = "SELECT * FROM Periodo WHERE UPPER(obsPeriodo) LIKE UPPER(?) ORDER BY obsPeriodo";

  const CONSULTAR_DICCIONARIO_POR_ANIOPERIODO = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

  const CONSULTAR_DICCIONARIO_POR_MESPERIODO = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

  const CONSULTAR_DICCIONARIO_POR_EDOPERIODO = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

}
?>