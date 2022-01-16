<?php 
/** 
 * @file SQLBanco.php 
 *  
 * Consultas SQL de la Tabla Banco 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
*/ 
class SQLBanco 
{ 
  const AGREGAR_BANCO = "INSERT INTO banco (idBanco, idEdoRegistro, nomBanco, etiBanco) VALUES (?, ?, ?, ?) ";

  const ACTUALIZAR_BANCO = "UPDATE banco SET idBanco = ?, idEdoRegistro = ?, nomBanco = ?, etiBanco = ? WHERE idBanco = ?";

  const ELIMINAR_BANCO = "DELETE FROM banco WHERE idBanco = ?";

  const CONSULTAR_BANCO = "SELECT * FROM banco INNER JOIN edoregistro USING(idEdoRegistro) ORDER BY idBanco";

  const CONSULTAR_BANCO_POR_IDBANCO = "SELECT * FROM banco WHERE idBanco = ?";

  const CONSULTAR_BANCO_POR_IDEDOREGISTRO = "SELECT * FROM banco WHERE idEdoRegistroBanco = ?";

  const CONSULTAR_BANCO_POR_NOM = "SELECT * FROM banco WHERE UPPER(nomBanco) = UPPER(?)";

  const CONSULTAR_BANCO_POR_NOM_APROX = "SELECT * FROM banco WHERE UPPER(nomBanco) LIKE UPPER(?) ORDER BY nomBanco";

  const CONSULTAR_BANCO_POR_ETI = "SELECT * FROM banco WHERE UPPER(etiBanco) = UPPER(?)";

  const CONSULTAR_BANCO_POR_ETI_APROX = "SELECT * FROM banco WHERE UPPER(etiBanco) LIKE UPPER(?) ORDER BY etiBanco";

}
?>