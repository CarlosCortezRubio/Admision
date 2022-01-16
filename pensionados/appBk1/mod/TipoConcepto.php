<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoConcepto.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoConcepto.php');

class TipoConcepto extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto, $id_TipoConcepto);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto, $id_TipoConcepto);
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
	function agregarTipoConcepto($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto) {
$idTipoConcepto = parent::prepareParam($idTipoConcepto, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomTipoConcepto = parent::prepareParam($nomTipoConcepto, Query::DATATYPE_STRING, 0);
$descTipoConcepto = parent::prepareParam($descTipoConcepto, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto);
		return parent::execute(SQLTipoConcepto::AGREGAR_TIPOCONCEPTO, $params);
	}

	function actualizarTipoConcepto($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto, $id_TipoConcepto){
		
$idTipoConcepto = parent::prepareParam($idTipoConcepto, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomTipoConcepto = parent::prepareParam($nomTipoConcepto, Query::DATATYPE_STRING, 0);
$descTipoConcepto = parent::prepareParam($descTipoConcepto, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoConcepto, $idEdoRegistro, $nomTipoConcepto, $descTipoConcepto, $id_TipoConcepto);
		return parent::execute(SQLTipoConcepto::ACTUALIZAR_TIPOCONCEPTO, $params);		
	}
	
	
	function consultarTipoConcepto(){	
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO);
	}	
	
	function eliminarTipoConcepto($id_TipoConcepto){
		$params = array($id_TipoConcepto);
		return parent::execute(SQLTipoConcepto::ELIMINAR_TIPOCONCEPTO, $params);		
	}
	
//------------------------------	
	function consultarTipoConceptoXidTipoConcepto($idTipoConcepto){	
		$params = array($idTipoConcepto);
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_IDTIPOCONCEPTO, $params);
	}	
	
	function existeTipoConceptoXidTipoConcepto($idTipoConcepto){
		$params = array($idTipoConcepto);
		$tabla = parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_IDTIPOCONCEPTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoConceptoXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeTipoConceptoXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoConceptoXnomTipoConcepto($nomTipoConcepto){	
		$params = array("%$nomTipoConcepto%");
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_NOMTIPOCONCEPTO, $params);
	}	
	
	function consultarTipoConceptoXnomTipoConceptoAprox($nomTipoConcepto){	
		$params = array("%$nomTipoConcepto%");
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_NOMTIPOCONCEPTO_APROX, $params);
	}	
	
	function existeTipoConceptoXnomTipoConcepto($nomTipoConcepto){
		$params = array($nomTipoConcepto);
		$tabla = parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_NOMTIPOCONCEPTO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoConceptoXdescTipoConcepto($descTipoConcepto){	
		$params = array("%$descTipoConcepto%");
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_DESCTIPOCONCEPTO, $params);
	}	
	
	function consultarTipoConceptoXdescTipoConceptoAprox($descTipoConcepto){	
		$params = array("%$descTipoConcepto%");
		return parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_DESCTIPOCONCEPTO_APROX, $params);
	}	
	
	function existeTipoConceptoXdescTipoConcepto($descTipoConcepto){
		$params = array($descTipoConcepto);
		$tabla = parent::executeQuery(SQLTipoConcepto::CONSULTAR_TIPOCONCEPTO_POR_DESCTIPOCONCEPTO, $params);
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