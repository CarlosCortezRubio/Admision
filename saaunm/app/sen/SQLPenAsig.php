<?php 
/** 
 * @file SQLPenAsig.php 
 *  
 * Consultas SQL de la Tabla PenAsig 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLPenAsig 
{ 
  const AGREGAR_PENASIG = "INSERT INTO PenAsig (idPenAsig, idPensum, idAsignatura, idCiclo, creditoPenAsig, ihSemPenAsig, ihTotPenAsig, evalParaCerrarPenAsig) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PENASIG = "UPDATE PenAsig SET idPenAsig = ?, idPensum = ?, idAsignatura = ?, idCiclo = ?, creditoPenAsig = ?, ihSemPenAsig = ?, ihTotPenAsig = ?, evalParaCerrarPenAsig = ? WHERE idPenAsig = ?";

  const ELIMINAR_PENASIG = "DELETE FROM PenAsig WHERE idPenAsig = ?";

  const CONSULTAR_PENASIG = "SELECT * FROM PenAsig ORDER BY idPenAsig";

  const CONSULTAR_PENASIG_POR_IDPENASIG = "SELECT * FROM PenAsig WHERE idPenAsig = ?";

  const CONSULTAR_PENASIG_POR_IDPENSUM = "SELECT * FROM PenAsig WHERE idPensumPenAsig = ?";

  const CONSULTAR_PENASIG_POR_IDASIGNATURA = "SELECT * FROM PenAsig WHERE idAsignaturaPenAsig = ?";

  const CONSULTAR_PENASIG_POR_IDCICLO = "SELECT * FROM PenAsig WHERE idCicloPenAsig = ?";

  const CONSULTAR_PENASIG_POR_CREDITO = "SELECT * FROM PenAsig WHERE creditoPenAsig = ?";

  const CONSULTAR_PENASIG_POR_IHSEM = "SELECT * FROM PenAsig WHERE ihSemPenAsig = ?";

  const CONSULTAR_PENASIG_POR_IHTOT = "SELECT * FROM PenAsig WHERE ihTotPenAsig = ?";

  const CONSULTAR_PENASIG_POR_EVALPARACERRAR = "SELECT * FROM PenAsig WHERE evalParaCerrarPenAsig = ?";

}
?>