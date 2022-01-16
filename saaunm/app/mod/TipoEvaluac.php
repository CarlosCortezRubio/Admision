<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoEvaluac.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoEvaluac.php');

class TipoEvaluac extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoEvaluac, $nomTipoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoEvaluac, $nomTipoEvaluac, $id_TipoEvaluac);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoEvaluac, $nomTipoEvaluac) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoEvaluac, $nomTipoEvaluac, $id_TipoEvaluac);
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
	function agregarTipoEvaluac($idTipoEvaluac, $nomTipoEvaluac) {
$idTipoEvaluac = parent::prepareParam($idTipoEvaluac, Query::DATATYPE_INTEGER);
$nomTipoEvaluac = parent::prepareParam($nomTipoEvaluac, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoEvaluac, $nomTipoEvaluac);
		return parent::execute(SQLTipoEvaluac::AGREGAR_TIPOEVALUAC, $params);
	}

	function actualizarTipoEvaluac($idTipoEvaluac, $nomTipoEvaluac, $id_TipoEvaluac){
		
$idTipoEvaluac = parent::prepareParam($idTipoEvaluac, Query::DATATYPE_INTEGER);
$nomTipoEvaluac = parent::prepareParam($nomTipoEvaluac, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoEvaluac, $nomTipoEvaluac, $id_TipoEvaluac);
		return parent::execute(SQLTipoEvaluac::ACTUALIZAR_TIPOEVALUAC, $params);		
	}
	
	
	function consultarTipoEvaluac(){	
		return parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC);
	}	
	
	function eliminarTipoEvaluac($id_TipoEvaluac){
		$params = array($id_TipoEvaluac);
		return parent::execute(SQLTipoEvaluac::ELIMINAR_TIPOEVALUAC, $params);		
	}
	
//------------------------------	
	function consultarTipoEvaluacXidTipoEvaluac($idTipoEvaluac){	
		$params = array($idTipoEvaluac);
		return parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC_POR_IDTIPOEVALUAC, $params);
	}	
	
	function existeTipoEvaluacXidTipoEvaluac($idTipoEvaluac){
		$params = array($idTipoEvaluac);
		$tabla = parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC_POR_IDTIPOEVALUAC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoEvaluacXnomTipoEvaluac($nomTipoEvaluac){	
		$params = array("%$nomTipoEvaluac%");
		return parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC_POR_NOMTIPOEVALUAC, $params);
	}	
	
	function consultarTipoEvaluacXnomTipoEvaluacAprox($nomTipoEvaluac){	
		$params = array("%$nomTipoEvaluac%");
		return parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC_POR_NOMTIPOEVALUAC_APROX, $params);
	}	
	
	function existeTipoEvaluacXnomTipoEvaluac($nomTipoEvaluac){
		$params = array($nomTipoEvaluac);
		$tabla = parent::executeQuery(SQLTipoEvaluac::CONSULTAR_TIPOEVALUAC_POR_NOMTIPOEVALUAC, $params);
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