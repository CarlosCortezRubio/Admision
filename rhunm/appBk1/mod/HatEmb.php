<?php 
require_once('../../../config/config.php');
require_once(MOD.'HatEmb.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLHatEmb.php');

class HatEmb extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idhatEmb, $codhatEmb, $nomhatEmb) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idhatEmb, $codhatEmb, $nomhatEmb, $id_hatEmb);
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
	function compActualizarcambiarTabla1cambiarTabla2($idhatEmb, $codhatEmb, $nomhatEmb) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idhatEmb, $codhatEmb, $nomhatEmb, $id_hatEmb);
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
	function agregarHatEmb($idhatEmb, $codhatEmb, $nomhatEmb) {
$idhatEmb = parent::prepareParam($idhatEmb, Query::DATATYPE_INTEGER);
$codhatEmb = parent::prepareParam($codhatEmb, Query::DATATYPE_STRING, 0);
$nomhatEmb = parent::prepareParam($nomhatEmb, Query::DATATYPE_STRING, 0);
		
		$params = array($idhatEmb, $codhatEmb, $nomhatEmb);
		return parent::execute(SQLHatEmb::AGREGAR_HATEMB, $params);
	}

	function actualizarHatEmb($idhatEmb, $codhatEmb, $nomhatEmb, $id_hatEmb){
		
$idhatEmb = parent::prepareParam($idhatEmb, Query::DATATYPE_INTEGER);
$codhatEmb = parent::prepareParam($codhatEmb, Query::DATATYPE_STRING, 0);
$nomhatEmb = parent::prepareParam($nomhatEmb, Query::DATATYPE_STRING, 0);

		
		$params = array($idhatEmb, $codhatEmb, $nomhatEmb, $id_hatEmb);
		return parent::execute(SQLHatEmb::ACTUALIZAR_HATEMB, $params);		
	}
	
	
	function consultarHatEmb(){	
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB);
	}	
	
	function eliminarHatEmb($id_hatEmb){
		$params = array($id_hatEmb);
		return parent::execute(SQLHatEmb::ELIMINAR_HATEMB, $params);		
	}
	
//------------------------------	
	function consultarHatEmbXidhatEmb($idhatEmb){	
		$params = array($idhatEmb);
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_IDHATEMB, $params);
	}	
	
	function existeHatEmbXidhatEmb($idhatEmb){
		$params = array($idhatEmb);
		$tabla = parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_IDHATEMB, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHatEmbXcodhatEmb($codhatEmb){	
		$params = array("%$codhatEmb%");
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_CODHATEMB, $params);
	}	
	
	function consultarHatEmbXcodhatEmbAprox($codhatEmb){	
		$params = array("%$codhatEmb%");
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_CODHATEMB_APROX, $params);
	}	
	
	function existeHatEmbXcodhatEmb($codhatEmb){
		$params = array($codhatEmb);
		$tabla = parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_CODHATEMB, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarHatEmbXnomhatEmb($nomhatEmb){	
		$params = array("%$nomhatEmb%");
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_NOMHATEMB, $params);
	}	
	
	function consultarHatEmbXnomhatEmbAprox($nomhatEmb){	
		$params = array("%$nomhatEmb%");
		return parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_NOMHATEMB_APROX, $params);
	}	
	
	function existeHatEmbXnomhatEmb($nomhatEmb){
		$params = array($nomhatEmb);
		$tabla = parent::executeQuery(SQLHatEmb::CONSULTAR_HATEMB_POR_NOMHATEMB, $params);
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