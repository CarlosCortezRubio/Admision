<?php 
/** 
 * @file SQLGenero.php 
 *  
 * Consultas SQL de la Tabla Genero 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLGenero 
{ 
  const AGREGAR_GENERO = "INSERT INTO Genero (IDGENERO, idPersona, NOMGENERO) VALUES (?, ?, ?) ";

  const ACTUALIZAR_GENERO = "UPDATE Genero SET IDGENERO = ?, idPersona = ?, NOMGENERO = ? WHERE idGenero = ?";

  const ELIMINAR_GENERO = "DELETE FROM Genero WHERE idGenero = ?";

  const CONSULTAR_GENERO = "SELECT * FROM Genero ORDER BY IDGENERO";

  const CONSULTAR_GENERO_POR_IDGENEROGENERO = "SELECT * FROM Genero WHERE IDGENEROGenero = ?";

  const CONSULTAR_GENERO_POR_IDPERSONA = "SELECT * FROM Genero WHERE idPersonaGenero = ?";

  const CONSULTAR_GENERO_POR_NOMGENERO = "SELECT * FROM Genero WHERE UPPER(NOMGENEROGenero) = UPPER(?)";

  const CONSULTAR_GENERO_POR_NOMGENERO_APROX = "SELECT * FROM Genero WHERE UPPER(NOMGENEROGenero) LIKE UPPER(?) ORDER BY NOMGENEROGenero";

}
?>