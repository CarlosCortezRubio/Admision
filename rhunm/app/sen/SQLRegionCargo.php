<?php 
/** 
 * @file SQLRegionCargo.php 
 *  
 * Consultas SQL de la Tabla RegionCargo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
class SQLRegionCargo 
{ 
  const AGREGAR_REGIONCARGO = "INSERT INTO regioncargo (idRegionCargo, codRegionCargo, nomRegionCargo) VALUES (?, ?, ?) ";

  const ACTUALIZAR_REGIONCARGO = "UPDATE regioncargo SET idRegionCargo = ?, codRegionCargo = ?, nomRegionCargo = ? WHERE idRegionCargo = ?";

  const ELIMINAR_REGIONCARGO = "DELETE FROM regioncargo WHERE idRegionCargo = ?";

  const CONSULTAR_REGIONCARGO = "SELECT * FROM regioncargo ORDER BY idRegionCargo";

  const CONSULTAR_REGIONCARGO_POR_IDREGIONCARGO = "SELECT * FROM regioncargo WHERE idRegionCargo = ?";

  const CONSULTAR_REGIONCARGO_POR_COD = "SELECT * FROM regioncargo WHERE UPPER(codRegionCargo) = UPPER(?)";

  const CONSULTAR_REGIONCARGO_POR_COD_APROX = "SELECT * FROM regioncargo WHERE UPPER(codRegionCargo) LIKE UPPER(?) ORDER BY codRegionCargo";

  const CONSULTAR_REGIONCARGO_POR_NOM = "SELECT * FROM regioncargo WHERE UPPER(nomRegionCargo) = UPPER(?)";

  const CONSULTAR_REGIONCARGO_POR_NOM_APROX = "SELECT * FROM regioncargo WHERE UPPER(nomRegionCargo) LIKE UPPER(?) ORDER BY nomRegionCargo";

}
?>