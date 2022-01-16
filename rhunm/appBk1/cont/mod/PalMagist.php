<?php 
require_once('../../../config/config.php');
require_once(MOD.'PalMagist.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPalMagist.php');

class PalMagist extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPalMagist, $codPalMagist, $nomPalMagist) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPalMagist, $codPalMagist, $nomPalMagist, $id_PalMagist);
		if ($resultado1>0 AND $resultado2>0) {
			cambiarTabla2::commitTransaction();
			$objcambiarTabla1->commitTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return true;
		}else{
			cambiarTabla2::rollbackTransaction();
			$objcambiarTabla1->rollbackTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return false;
		}
	}
	function compActualizarcambiarTabla1cambiarTabla2($idPalMagist, $codPalMagist, $nomPalMagist) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPalMagist, $codPalMagist, $nomPalMagist, $id_PalMagist);
		if ($resultado1>0 AND $resultado2>0) {
			cambiarTabla2::commitTransaction();
			$objcambiarTabla1->commitTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return true;
		}else{
			cambiarTabla2::rollbackTransaction();
			$objcambiarTabla1->rollbackTransaction();
			cambiarTabla2::desconectar();
			$objcambiarTabla1->desconectar();
			return false;
		}
	}
	*/ 
	function agregarPalMagist($idPalMagist, $codPalMagist, $nomPalMagist) {
$idPalMagist = parent::prepareParam($idPalMagist, Query::DATATYPE_INTEGER);
$codPalMagist = parent::prepareParam($codPalMagist, Query::DATATYPE_STRING, 0);
$nomPalMagist = parent::prepareParam($nomPalMagist, Query::DATATYPE_STRING, 0);
		
		$params = array($idPalMagist, $codPalMagist, $nomPalMagist);
		return parent::execute(SQLPalMagist::AGREGAR_PALMAGIST, $params);
	}

	function actualizarPalMagist($idPalMagist, $codPalMagist, $nomPalMagist, $id_PalMagist){
		
$idPalMagist = parent::prepareParam($idPalMagist, Query::DATATYPE_INTEGER);
$codPalMagist = parent::prepareParam($codPalMagist, Query::DATATYPE_STRING, 0);
$nomPalMagist = parent::prepareParam($nomPalMagist, Query::DATATYPE_STRING, 0);

		
		$params = array($idPalMagist, $codPalMagist, $nomPalMagist, $id_PalMagist);
		return parent::execute(SQLPalMagist::ACTUALIZAR_PALMAGIST, $params);		
	}
	
	
	function consultarPalMagist(){	
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST);
	}	
	
	function eliminarPalMagist($id_PalMagist){
		$params = array($id_PalMagist);
		return parent::execute(SQLPalMagist::ELIMINAR_PALMAGIST, $params);		
	}
	
//------------------------------	
	function consultarPalMagistXidPalMagist($idPalMagist){	
		$params = array($idPalMagist);
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_IDPALMAGIST, $params);
	}	
	
	function existePalMagistXidPalMagist($idPalMagist){
		$params = array($idPalMagist);
		$tabla = parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_IDPALMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPalMagistXcodPalMagist($codPalMagist){	
		$params = array("%$codPalMagist%");
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_CODPALMAGIST, $params);
	}	
	
	function consultarPalMagistXcodPalMagistAprox($codPalMagist){	
		$params = array("%$codPalMagist%");
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_CODPALMAGIST_APROX, $params);
	}	
	
	function existePalMagistXcodPalMagist($codPalMagist){
		$params = array($codPalMagist);
		$tabla = parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_CODPALMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPalMagistXnomPalMagist($nomPalMagist){	
		$params = array("%$nomPalMagist%");
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_NOMPALMAGIST, $params);
	}	
	
	function consultarPalMagistXnomPalMagistAprox($nomPalMagist){	
		$params = array("%$nomPalMagist%");
		return parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_NOMPALMAGIST_APROX, $params);
	}	
	
	function existePalMagistXnomPalMagist($nomPalMagist){
		$params = array($nomPalMagist);
		$tabla = parent::executeQuery(SQLPalMagist::CONSULTAR_PALMAGIST_POR_NOMPALMAGIST, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

//------------------------------	

 //INICIO COMBOS 

 //FIN COMBOS 
}
?>