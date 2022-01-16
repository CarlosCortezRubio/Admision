<?php 
require_once('../../../config/config.php');
require_once(MOD.'Parentesco.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLParentesco.php');

class Parentesco extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idParentesco, $codParentesco, $nomParentesco) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idParentesco, $codParentesco, $nomParentesco, $id_Parentesco);
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
	function compActualizarcambiarTabla1cambiarTabla2($idParentesco, $codParentesco, $nomParentesco) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idParentesco, $codParentesco, $nomParentesco, $id_Parentesco);
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
	function agregarParentesco($idParentesco, $codParentesco, $nomParentesco) {
$idParentesco = parent::prepareParam($idParentesco, Query::DATATYPE_INTEGER);
$codParentesco = parent::prepareParam($codParentesco, Query::DATATYPE_STRING, 0);
$nomParentesco = parent::prepareParam($nomParentesco, Query::DATATYPE_STRING, 0);
		
		$params = array($idParentesco, $codParentesco, $nomParentesco);
		return parent::execute(SQLParentesco::AGREGAR_PARENTESCO, $params);
	}

	function actualizarParentesco($idParentesco, $codParentesco, $nomParentesco, $id_Parentesco){
		
$idParentesco = parent::prepareParam($idParentesco, Query::DATATYPE_INTEGER);
$codParentesco = parent::prepareParam($codParentesco, Query::DATATYPE_STRING, 0);
$nomParentesco = parent::prepareParam($nomParentesco, Query::DATATYPE_STRING, 0);

		
		$params = array($idParentesco, $codParentesco, $nomParentesco, $id_Parentesco);
		return parent::execute(SQLParentesco::ACTUALIZAR_PARENTESCO, $params);		
	}
	
	
	function consultarParentesco(){	
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO);
	}	
	
	function eliminarParentesco($id_Parentesco){
		$params = array($id_Parentesco);
		return parent::execute(SQLParentesco::ELIMINAR_PARENTESCO, $params);		
	}
	
//------------------------------	
	function consultarParentescoXidParentesco($idParentesco){	
		$params = array($idParentesco);
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_IDPARENTESCO, $params);
	}	
	
	function existeParentescoXidParentesco($idParentesco){
		$params = array($idParentesco);
		$tabla = parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_IDPARENTESCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarParentescoXcodParentesco($codParentesco){	
		$params = array("%$codParentesco%");
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_CODPARENTESCO, $params);
	}	
	
	function consultarParentescoXcodParentescoAprox($codParentesco){	
		$params = array("%$codParentesco%");
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_CODPARENTESCO_APROX, $params);
	}	
	
	function existeParentescoXcodParentesco($codParentesco){
		$params = array($codParentesco);
		$tabla = parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_CODPARENTESCO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarParentescoXnomParentesco($nomParentesco){	
		$params = array("%$nomParentesco%");
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_NOMPARENTESCO, $params);
	}	
	
	function consultarParentescoXnomParentescoAprox($nomParentesco){	
		$params = array("%$nomParentesco%");
		return parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_NOMPARENTESCO_APROX, $params);
	}	
	
	function existeParentescoXnomParentesco($nomParentesco){
		$params = array($nomParentesco);
		$tabla = parent::executeQuery(SQLParentesco::CONSULTAR_PARENTESCO_POR_NOMPARENTESCO, $params);
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