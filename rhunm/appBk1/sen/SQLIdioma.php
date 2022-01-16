<?php 
/** 
 * @file SQLIdioma.php 
 *  
 * Consultas SQL de la Tabla Idioma 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLIdioma 
{ 
  const AGREGAR_IDIOMA = "INSERT INTO Idioma (idIdioma, nomIdioma) VALUES (?, ?) ";

  const ACTUALIZAR_IDIOMA = "UPDATE Idioma SET idIdioma = ?, nomIdioma = ? WHERE idIdioma = ?";

  const ELIMINAR_IDIOMA = "DELETE FROM Idioma WHERE idIdioma = ?";

  const CONSULTAR_IDIOMA = "SELECT * FROM Idioma ORDER BY idIdioma";

  const CONSULTAR_IDIOMA_POR_IDIDIOMA = "SELECT * FROM Idioma WHERE idIdioma = ?";

  const CONSULTAR_IDIOMA_POR_NOM = "SELECT * FROM Idioma WHERE UPPER(nomIdioma) = UPPER(?)";

  const CONSULTAR_IDIOMA_POR_NOM_APROX = "SELECT * FROM Idioma WHERE UPPER(nomIdioma) LIKE UPPER(?) ORDER BY nomIdioma";

}
?>