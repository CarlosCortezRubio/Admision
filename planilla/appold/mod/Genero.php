<?php 
require_once('../../../config/config.php');
require_once(MOD.'Genero.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLGenero.php');

class Genero extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idGenero, $nomGenero) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idGenero, $nomGenero, $id_Genero);
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
	function compActualizarcambiarTabla1cambiarTabla2($idGenero, $nomGenero) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idGenero, $nomGenero, $id_Genero);
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
	function agregarGenero($idGenero, $nomGenero) {
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$nomGenero = parent::prepareParam($nomGenero, Query::DATATYPE_STRING, 0);
		
		$params = array($idGenero, $nomGenero);
		return parent::execute(SQLGenero::AGREGAR_GENERO, $params);
	}

	function actualizarGenero($idGenero, $nomGenero, $id_Genero){
		
$idGenero = parent::prepareParam($idGenero, Query::DATATYPE_INTEGER);
$nomGenero = parent::prepareParam($nomGenero, Query::DATATYPE_STRING, 0);

		
		$params = array($idGenero, $nomGenero, $id_Genero);
		return parent::execute(SQLGenero::ACTUALIZAR_GENERO, $params);		
	}
	
	
	function consultarGenero(){	
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO);
	}	
	
	function eliminarGenero($id_Genero){
		$params = array($id_Genero);
		return parent::execute(SQLGenero::ELIMINAR_GENERO, $params);		
	}
	
//------------------------------	
	function consultarGeneroXidGenero($idGenero){	
		$params = array($idGenero);
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDGENERO, $params);
	}	
	
	function existeGeneroXidGenero($idGenero){
		$params = array($idGenero);
		$tabla = parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDGENERO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGeneroXnomGenero($nomGenero){	
		$params = array("%$nomGenero%");
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_NOMGENERO, $params);
	}	
	
	function consultarGeneroXnomGeneroAprox($nomGenero){	
		$params = array("%$nomGenero%");
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_NOMGENERO_APROX, $params);
	}	
	
	function existeGeneroXnomGenero($nomGenero){
		$params = array($nomGenero);
		$tabla = parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_NOMGENERO, $params);
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