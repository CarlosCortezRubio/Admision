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
	function compAgregarcambiarTabla1cambiarTabla2($IDGENERO, $idPersona, $NOMGENERO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($IDGENERO, $idPersona, $NOMGENERO, $id_Genero);
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
	function compActualizarcambiarTabla1cambiarTabla2($IDGENERO, $idPersona, $NOMGENERO) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($IDGENERO, $idPersona, $NOMGENERO, $id_Genero);
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
	function agregarGenero($IDGENERO, $idPersona, $NOMGENERO) {
$IDGENERO = parent::prepareParam($IDGENERO, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$NOMGENERO = parent::prepareParam($NOMGENERO, Query::DATATYPE_STRING, 0);
		
		$params = array($IDGENERO, $idPersona, $NOMGENERO);
		return parent::execute(SQLGenero::AGREGAR_GENERO, $params);
	}

	function actualizarGenero($IDGENERO, $idPersona, $NOMGENERO, $id_Genero){
		
$IDGENERO = parent::prepareParam($IDGENERO, Query::DATATYPE_INTEGER);
$idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
$NOMGENERO = parent::prepareParam($NOMGENERO, Query::DATATYPE_STRING, 0);

		
		$params = array($IDGENERO, $idPersona, $NOMGENERO, $id_Genero);
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
	function consultarGeneroXIDGENERO($IDGENERO){	
		$params = array($IDGENERO);
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDGENERO, $params);
	}	
	
	function existeGeneroXIDGENERO($IDGENERO){
		$params = array($IDGENERO);
		$tabla = parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDGENERO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGeneroXidPersona($idPersona){	
		$params = array($idPersona);
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDPERSONA, $params);
	}	
	
	function existeGeneroXidPersona($idPersona){
		$params = array($idPersona);
		$tabla = parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_IDPERSONA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGeneroXNOMGENERO($NOMGENERO){	
		$params = array("%$NOMGENERO%");
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_NOMGENERO, $params);
	}	
	
	function consultarGeneroXNOMGENEROAprox($NOMGENERO){	
		$params = array("%$NOMGENERO%");
		return parent::executeQuery(SQLGenero::CONSULTAR_GENERO_POR_NOMGENERO_APROX, $params);
	}	
	
	function existeGeneroXNOMGENERO($NOMGENERO){
		$params = array($NOMGENERO);
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