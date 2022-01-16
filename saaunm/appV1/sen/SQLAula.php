<?php 
/** 
 * @file SQLAula.php 
 *  
 * Consultas SQL de la Tabla Aula 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 27/11/2021
 *  
*/ 
class SQLAula 
{ 
  const AGREGAR_AULA = "INSERT INTO Aula (idAula, idSede, codAula, nomAula, descAula) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_AULA = "UPDATE Aula SET idAula = ?, idSede = ?, codAula = ?, nomAula = ?, descAula = ? WHERE idAula = ?";

  const ELIMINAR_AULA = "DELETE FROM Aula WHERE idAula = ?";

  const CONSULTAR_AULA = "SELECT * FROM Aula ORDER BY idAula";

  const CONSULTAR_AULA_POR_IDAULA = "SELECT * FROM Aula WHERE idAula = ?";

  const CONSULTAR_AULA_POR_IDSEDE = "SELECT * FROM Aula WHERE idSedeAula = ?";

  const CONSULTAR_AULA_POR_COD = "SELECT * FROM Aula WHERE UPPER(codAula) = UPPER(?)";

  const CONSULTAR_AULA_POR_COD_APROX = "SELECT * FROM Aula WHERE UPPER(codAula) LIKE UPPER(?) ORDER BY codAula";

  const CONSULTAR_AULA_POR_NOM = "SELECT * FROM Aula WHERE UPPER(nomAula) = UPPER(?)";

  const CONSULTAR_AULA_POR_NOM_APROX = "SELECT * FROM Aula WHERE UPPER(nomAula) LIKE UPPER(?) ORDER BY nomAula";

  const CONSULTAR_AULA_POR_DESC = "SELECT * FROM Aula WHERE UPPER(descAula) = UPPER(?)";

  const CONSULTAR_AULA_POR_DESC_APROX = "SELECT * FROM Aula WHERE UPPER(descAula) LIKE UPPER(?) ORDER BY descAula";

}
?>