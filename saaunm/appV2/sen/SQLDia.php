<?php 
/** 
 * @file SQLDia.php 
 *  
 * Consultas SQL de la Tabla Dia 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLDia 
{ 
  const AGREGAR_DIA = "INSERT INTO Dia (idDia, nomDia, nomCortoDia, letraDia) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_DIA = "UPDATE Dia SET idDia = ?, nomDia = ?, nomCortoDia = ?, letraDia = ? WHERE idDia = ?";

  const ELIMINAR_DIA = "DELETE FROM Dia WHERE idDia = ?";

  const CONSULTAR_DIA = "SELECT * FROM Dia ORDER BY idDia";

  const CONSULTAR_DIA_POR_IDDIA = "SELECT * FROM Dia WHERE idDia = ?";

  const CONSULTAR_DIA_POR_NOM = "SELECT * FROM Dia WHERE UPPER(nomDia) = UPPER(?)";

  const CONSULTAR_DIA_POR_NOM_APROX = "SELECT * FROM Dia WHERE UPPER(nomDia) LIKE UPPER(?) ORDER BY nomDia";

  const CONSULTAR_DIA_POR_NOMCORTO = "SELECT * FROM Dia WHERE UPPER(nomCortoDia) = UPPER(?)";

  const CONSULTAR_DIA_POR_NOMCORTO_APROX = "SELECT * FROM Dia WHERE UPPER(nomCortoDia) LIKE UPPER(?) ORDER BY nomCortoDia";

  const CONSULTAR_DIA_POR_LETRA = "SELECT * FROM Dia WHERE UPPER(letraDia) = UPPER(?)";

  const CONSULTAR_DIA_POR_LETRA_APROX = "SELECT * FROM Dia WHERE UPPER(letraDia) LIKE UPPER(?) ORDER BY letraDia";

}
?>