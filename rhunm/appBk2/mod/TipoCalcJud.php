<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoCalcJud.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoCalcJud.php');

class TipoCalcJud extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud, $id_TipoCalcJud);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud, $id_TipoCalcJud);
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
	function agregarTipoCalcJud($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud) {
$idTipoCalcJud = parent::prepareParam($idTipoCalcJud, Query::DATATYPE_INTEGER);
$codTipoCalcJud = parent::prepareParam($codTipoCalcJud, Query::DATATYPE_STRING, 0);
$nomTipoCalcJud = parent::prepareParam($nomTipoCalcJud, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud);
		return parent::execute(SQLTipoCalcJud::AGREGAR_TIPOCALCJUD, $params);
	}

	function actualizarTipoCalcJud($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud, $id_TipoCalcJud){
		
$idTipoCalcJud = parent::prepareParam($idTipoCalcJud, Query::DATATYPE_INTEGER);
$codTipoCalcJud = parent::prepareParam($codTipoCalcJud, Query::DATATYPE_STRING, 0);
$nomTipoCalcJud = parent::prepareParam($nomTipoCalcJud, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoCalcJud, $codTipoCalcJud, $nomTipoCalcJud, $id_TipoCalcJud);
		return parent::execute(SQLTipoCalcJud::ACTUALIZAR_TIPOCALCJUD, $params);		
	}
	
	
	function consultarTipoCalcJud(){	
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD);
	}	
	
	function eliminarTipoCalcJud($id_TipoCalcJud){
		$params = array($id_TipoCalcJud);
		return parent::execute(SQLTipoCalcJud::ELIMINAR_TIPOCALCJUD, $params);		
	}
	
//------------------------------	
	function consultarTipoCalcJudXidTipoCalcJud($idTipoCalcJud){	
		$params = array($idTipoCalcJud);
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_IDTIPOCALCJUD, $params);
	}	
	
	function existeTipoCalcJudXidTipoCalcJud($idTipoCalcJud){
		$params = array($idTipoCalcJud);
		$tabla = parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_IDTIPOCALCJUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoCalcJudXcodTipoCalcJud($codTipoCalcJud){	
		$params = array("%$codTipoCalcJud%");
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_CODTIPOCALCJUD, $params);
	}	
	
	function consultarTipoCalcJudXcodTipoCalcJudAprox($codTipoCalcJud){	
		$params = array("%$codTipoCalcJud%");
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_CODTIPOCALCJUD_APROX, $params);
	}	
	
	function existeTipoCalcJudXcodTipoCalcJud($codTipoCalcJud){
		$params = array($codTipoCalcJud);
		$tabla = parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_CODTIPOCALCJUD, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoCalcJudXnomTipoCalcJud($nomTipoCalcJud){	
		$params = array("%$nomTipoCalcJud%");
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_NOMTIPOCALCJUD, $params);
	}	
	
	function consultarTipoCalcJudXnomTipoCalcJudAprox($nomTipoCalcJud){	
		$params = array("%$nomTipoCalcJud%");
		return parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_NOMTIPOCALCJUD_APROX, $params);
	}	
	
	function existeTipoCalcJudXnomTipoCalcJud($nomTipoCalcJud){
		$params = array($nomTipoCalcJud);
		$tabla = parent::executeQuery(SQLTipoCalcJud::CONSULTAR_TIPOCALCJUD_POR_NOMTIPOCALCJUD, $params);
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