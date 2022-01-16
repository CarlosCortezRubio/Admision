<?php 
require_once('../../../config/config.php');
require_once(MOD.'Ciclo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCiclo.php');

class Ciclo extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo, $id_Ciclo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo, $id_Ciclo);
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
	function agregarCiclo($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo) {
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$nomCiclo = parent::prepareParam($nomCiclo, Query::DATATYPE_STRING, 0);
$codCiclo = parent::prepareParam($codCiclo, Query::DATATYPE_STRING, 0);
		
		$params = array($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo);
		return parent::execute(SQLCiclo::AGREGAR_CICLO, $params);
	}

	function actualizarCiclo($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo, $id_Ciclo){
		
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$IDEDOREGISTRO = parent::prepareParam($IDEDOREGISTRO, Query::DATATYPE_INTEGER);
$nomCiclo = parent::prepareParam($nomCiclo, Query::DATATYPE_STRING, 0);
$codCiclo = parent::prepareParam($codCiclo, Query::DATATYPE_STRING, 0);

		
		$params = array($idCiclo, $IDEDOREGISTRO, $nomCiclo, $codCiclo, $id_Ciclo);
		return parent::execute(SQLCiclo::ACTUALIZAR_CICLO, $params);		
	}
	
	
	function consultarCiclo(){	
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO);
	}	
	
	function eliminarCiclo($id_Ciclo){
		$params = array($id_Ciclo);
		return parent::execute(SQLCiclo::ELIMINAR_CICLO, $params);		
	}
	
//------------------------------	
	function consultarCicloXidCiclo($idCiclo){	
		$params = array($idCiclo);
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_IDCICLO, $params);
	}	
	
	function existeCicloXidCiclo($idCiclo){
		$params = array($idCiclo);
		$tabla = parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_IDCICLO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCicloXIDEDOREGISTRO($IDEDOREGISTRO){	
		$params = array($IDEDOREGISTRO);
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_IDEDOREGISTRO, $params);
	}	
	
	function existeCicloXIDEDOREGISTRO($IDEDOREGISTRO){
		$params = array($IDEDOREGISTRO);
		$tabla = parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_IDEDOREGISTRO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCicloXnomCiclo($nomCiclo){	
		$params = array("%$nomCiclo%");
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_NOMCICLO, $params);
	}	
	
	function consultarCicloXnomCicloAprox($nomCiclo){	
		$params = array("%$nomCiclo%");
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_NOMCICLO_APROX, $params);
	}	
	
	function existeCicloXnomCiclo($nomCiclo){
		$params = array($nomCiclo);
		$tabla = parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_NOMCICLO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarCicloXcodCiclo($codCiclo){	
		$params = array("%$codCiclo%");
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_CODCICLO, $params);
	}	
	
	function consultarCicloXcodCicloAprox($codCiclo){	
		$params = array("%$codCiclo%");
		return parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_CODCICLO_APROX, $params);
	}	
	
	function existeCicloXcodCiclo($codCiclo){
		$params = array($codCiclo);
		$tabla = parent::executeQuery(SQLCiclo::CONSULTAR_CICLO_POR_CODCICLO, $params);
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