<?php 
/** 
 * @file SQLDepartamento.php 
 *  
 * Consultas SQL de la Tabla Departamento 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
*/ 
class SQLDepartamento 
{ 
  const AGREGAR_DEPARTAMENTO = "INSERT INTO departamento (idDepartamento, idPais, nomDepartamento) VALUES (?, ?, ?) ";

  const ACTUALIZAR_DEPARTAMENTO = "UPDATE departamento SET idDepartamento = ?, idPais = ?, nomDepartamento = ? WHERE idDepartamento = ?";

  const ELIMINAR_DEPARTAMENTO = "DELETE FROM departamento WHERE idDepartamento = ?";

  const CONSULTAR_DEPARTAMENTO = "SELECT * FROM departamento ORDER BY idDepartamento";

  const CONSULTAR_DEPARTAMENTO_POR_IDDEPARTAMENTO = "SELECT * FROM departamento WHERE idDepartamento = ?";

  const CONSULTAR_DEPARTAMENTO_POR_IDPAIS = "SELECT * FROM departamento WHERE idPaisDepartamento = ?";

  const CONSULTAR_DEPARTAMENTO_POR_NOM = "SELECT * FROM departamento WHERE UPPER(nomDepartamento) = UPPER(?)";

  const CONSULTAR_DEPARTAMENTO_POR_NOM_APROX = "SELECT * FROM departamento WHERE UPPER(nomDepartamento) LIKE UPPER(?) ORDER BY nomDepartamento";

}
?>