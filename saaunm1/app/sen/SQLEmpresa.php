<?php 
/** 
 * @file SQLEmpresa.php 
 *  
 * Consultas SQL de la Tabla Empresa 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/11/2021
 *  
*/ 
class SQLEmpresa 
{ 
  const AGREGAR_EMPRESA = "INSERT INTO Empresa (idEmpresa, rucEmpresa, telEmpresa, dirEmpresa, correoEmpresa) VALUES (?, ?, ?, ?, ?) ";

  const ACTUALIZAR_EMPRESA = "UPDATE Empresa SET idEmpresa = ?, rucEmpresa = ?, telEmpresa = ?, dirEmpresa = ?, correoEmpresa = ? WHERE idEmpresa = ?";

  const ELIMINAR_EMPRESA = "DELETE FROM Empresa WHERE idEmpresa = ?";

  const CONSULTAR_EMPRESA = "SELECT * FROM Empresa ORDER BY idEmpresa";

  const CONSULTAR_EMPRESA_POR_IDEMPRESA = "SELECT * FROM Empresa WHERE idEmpresa = ?";

  const CONSULTAR_EMPRESA_POR_RUC = "SELECT * FROM Empresa WHERE UPPER(rucEmpresa) = UPPER(?)";

  const CONSULTAR_EMPRESA_POR_RUC_APROX = "SELECT * FROM Empresa WHERE UPPER(rucEmpresa) LIKE UPPER(?) ORDER BY rucEmpresa";

  const CONSULTAR_EMPRESA_POR_TEL = "SELECT * FROM Empresa WHERE UPPER(telEmpresa) = UPPER(?)";

  const CONSULTAR_EMPRESA_POR_TEL_APROX = "SELECT * FROM Empresa WHERE UPPER(telEmpresa) LIKE UPPER(?) ORDER BY telEmpresa";

  const CONSULTAR_EMPRESA_POR_DIR = "SELECT * FROM Empresa WHERE UPPER(dirEmpresa) = UPPER(?)";

  const CONSULTAR_EMPRESA_POR_DIR_APROX = "SELECT * FROM Empresa WHERE UPPER(dirEmpresa) LIKE UPPER(?) ORDER BY dirEmpresa";

  const CONSULTAR_EMPRESA_POR_CORREO = "SELECT * FROM Empresa WHERE UPPER(correoEmpresa) = UPPER(?)";

  const CONSULTAR_EMPRESA_POR_CORREO_APROX = "SELECT * FROM Empresa WHERE UPPER(correoEmpresa) LIKE UPPER(?) ORDER BY correoEmpresa";

}
?>