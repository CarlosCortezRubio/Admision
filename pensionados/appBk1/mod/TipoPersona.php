<?php 
require_once('../../../config/config.php');
require_once(MOD.'TipoPersona.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLTipoPersona.php');

class TipoPersona extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona, $id_TipoPersona);
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
	function compActualizarcambiarTabla1cambiarTabla2($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona, $id_TipoPersona);
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
	function agregarTipoPersona($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona) {
$idTipoPersona = parent::prepareParam($idTipoPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomTipoPersona = parent::prepareParam($nomTipoPersona, Query::DATATYPE_STRING, 0);
$descTipoPersona = parent::prepareParam($descTipoPersona, Query::DATATYPE_STRING, 0);
		
		$params = array($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona);
		return parent::execute(SQLTipoPersona::AGREGAR_TIPOPERSONA, $params);
	}

	function actualizarTipoPersona($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona, $id_TipoPersona){
		
$idTipoPersona = parent::prepareParam($idTipoPersona, Query::DATATYPE_INTEGER);
$idEdoRegistro = parent::prepareParam($idEdoRegistro, Query::DATATYPE_INTEGER);
$nomTipoPersona = parent::prepareParam($nomTipoPersona, Query::DATATYPE_STRING, 0);
$descTipoPersona = parent::prepareParam($descTipoPersona, Query::DATATYPE_STRING, 0);

		
		$params = array($idTipoPersona, $idEdoRegistro, $nomTipoPersona, $descTipoPersona, $id_TipoPersona);
		return parent::execute(SQLTipoPersona::ACTUALIZAR_TIPOPERSONA, $params);		
	}
	
	
	function consultarTipoPersona(){	
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA);
	}	
	
	function eliminarTipoPersona($id_TipoPersona){
		$params = array($id_TipoPersona);
		return parent::execute(SQLTipoPersona::ELIMINAR_TIPOPERSONA, $params);		
	}
	
//------------------------------	
	function consultarTipoPersonaXidTipoPersona($idTipoPersona){	
		$params = array($idTipoPersona);
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_IDTIPOPERSONA, $params);
	}	
	
	function existeTipoPersonaXidTipoPersona($idTipoPersona){
		$params = array($idTipoPersona);
		$tabla = parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_IDTIPOPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoPersonaXidEdoRegistro($idEdoRegistro){	
		$params = array($idEdoRegistro);
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeTipoPersonaXidEdoRegistro($idEdoRegistro){
		$params = array($idEdoRegistro);
		$tabla = parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoPersonaXnomTipoPersona($nomTipoPersona){	
		$params = array("%$nomTipoPersona%");
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_NOMTIPOPERSONA, $params);
	}	
	
	function consultarTipoPersonaXnomTipoPersonaAprox($nomTipoPersona){	
		$params = array("%$nomTipoPersona%");
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_NOMTIPOPERSONA_APROX, $params);
	}	
	
	function existeTipoPersonaXnomTipoPersona($nomTipoPersona){
		$params = array($nomTipoPersona);
		$tabla = parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_NOMTIPOPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarTipoPersonaXdescTipoPersona($descTipoPersona){	
		$params = array("%$descTipoPersona%");
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_DESCTIPOPERSONA, $params);
	}	
	
	function consultarTipoPersonaXdescTipoPersonaAprox($descTipoPersona){	
		$params = array("%$descTipoPersona%");
		return parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_DESCTIPOPERSONA_APROX, $params);
	}	
	
	function existeTipoPersonaXdescTipoPersona($descTipoPersona){
		$params = array($descTipoPersona);
		$tabla = parent::executeQuery(SQLTipoPersona::CONSULTAR_TIPOPERSONA_POR_DESCTIPOPERSONA, $params);
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