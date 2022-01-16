<?php 
require_once('../../../config/config.php');
require_once(MOD.'Conceptoscsv.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLConceptoscsv.php');

class Conceptoscsv extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2() {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2(, $id_conceptoscsv);
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
	function compActualizarcambiarTabla1cambiarTabla2() {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2(, $id_conceptoscsv);
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
	function agregarConceptoscsv() {
		
		$params = array();
		return parent::execute(SQLConceptoscsv::AGREGAR_CONCEPTOSCSV, $params);
	}

	function actualizarConceptoscsv(, $id_conceptoscsv){
		

		
		$params = array(, $id_conceptoscsv);
		return parent::execute(SQLConceptoscsv::ACTUALIZAR_CONCEPTOSCSV, $params);		
	}
	
	
	function consultarConceptoscsv(){	
		return parent::executeQuery(SQLConceptoscsv::CONSULTAR_CONCEPTOSCSV);
	}	
	
	function eliminarConceptoscsv($id_conceptoscsv){
		$params = array($id_conceptoscsv);
		return parent::execute(SQLConceptoscsv::ELIMINAR_CONCEPTOSCSV, $params);		
	}
	
//------------------------------	
//------------------------------	

 //INICIO COMBOS 

 //FIN COMBOS 
}
?>