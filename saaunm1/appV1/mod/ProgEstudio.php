<?php 
require_once('../../../config/config.php');
require_once(MOD.'ProgEstudio.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLProgEstudio.php');

class ProgEstudio extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio, $id_ProgEstudio);
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
	function compActualizarcambiarTabla1cambiarTabla2($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio, $id_ProgEstudio);
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
	function agregarProgEstudio($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio) {
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$codProgEstudio = parent::prepareParam($codProgEstudio, Query::DATATYPE_STRING, 0);
$nomProgEstudio = parent::prepareParam($nomProgEstudio, Query::DATATYPE_STRING, 0);
$numResProgEstudio = parent::prepareParam($numResProgEstudio, Query::DATATYPE_STRING, 0);
$aplPreinscProgEstudio = parent::prepareParam($aplPreinscProgEstudio, Query::DATATYPE_INTEGER);
$aplGrupoProgEstudio = parent::prepareParam($aplGrupoProgEstudio, Query::DATATYPE_INTEGER);
$numResRevProgEstudio = parent::prepareParam($numResRevProgEstudio, Query::DATATYPE_STRING, 0);
		
		$params = array($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio);
		return parent::execute(SQLProgEstudio::AGREGAR_PROGESTUDIO, $params);
	}

	function actualizarProgEstudio($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio, $id_ProgEstudio){
		
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$codProgEstudio = parent::prepareParam($codProgEstudio, Query::DATATYPE_STRING, 0);
$nomProgEstudio = parent::prepareParam($nomProgEstudio, Query::DATATYPE_STRING, 0);
$numResProgEstudio = parent::prepareParam($numResProgEstudio, Query::DATATYPE_STRING, 0);
$aplPreinscProgEstudio = parent::prepareParam($aplPreinscProgEstudio, Query::DATATYPE_INTEGER);
$aplGrupoProgEstudio = parent::prepareParam($aplGrupoProgEstudio, Query::DATATYPE_INTEGER);
$numResRevProgEstudio = parent::prepareParam($numResRevProgEstudio, Query::DATATYPE_STRING, 0);

		
		$params = array($idProgEstudio, $idEmpleado, $codProgEstudio, $nomProgEstudio, $numResProgEstudio, $fecResProgEstudio, $aplPreinscProgEstudio, $aplGrupoProgEstudio, $numResRevProgEstudio, $fecResRevProgEstudio, $id_ProgEstudio);
		return parent::execute(SQLProgEstudio::ACTUALIZAR_PROGESTUDIO, $params);		
	}
	
	
	function consultarProgEstudio(){	
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO);
	}	
	
	function eliminarProgEstudio($id_ProgEstudio){
		$params = array($id_ProgEstudio);
		return parent::execute(SQLProgEstudio::ELIMINAR_PROGESTUDIO, $params);		
	}
	
//------------------------------	
	function consultarProgEstudioXidProgEstudio($idProgEstudio){	
		$params = array($idProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_IDPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXidProgEstudio($idProgEstudio){
		$params = array($idProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_IDPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXidEmpleado($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_IDEMPLEADO, $params);
	}	
	
	function existeProgEstudioXidEmpleado($idEmpleado){
		$params = array($idEmpleado);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_IDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXcodProgEstudio($codProgEstudio){	
		$params = array("%$codProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_CODPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXcodProgEstudioAprox($codProgEstudio){	
		$params = array("%$codProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_CODPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXcodProgEstudio($codProgEstudio){
		$params = array($codProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_CODPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXnomProgEstudio($nomProgEstudio){	
		$params = array("%$nomProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnomProgEstudioAprox($nomProgEstudio){	
		$params = array("%$nomProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnomProgEstudio($nomProgEstudio){
		$params = array($nomProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXnumResProgEstudio($numResProgEstudio){	
		$params = array("%$numResProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnumResProgEstudioAprox($numResProgEstudio){	
		$params = array("%$numResProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnumResProgEstudio($numResProgEstudio){
		$params = array($numResProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXfecResProgEstudio($fecResProgEstudio){	
		$params = array($fecResProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXfecResProgEstudio($fecResProgEstudio){
		$params = array($fecResProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXaplPreinscProgEstudio($aplPreinscProgEstudio){	
		$params = array($aplPreinscProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_APLPREINSCPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXaplPreinscProgEstudio($aplPreinscProgEstudio){
		$params = array($aplPreinscProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_APLPREINSCPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXaplGrupoProgEstudio($aplGrupoProgEstudio){	
		$params = array($aplGrupoProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_APLGRUPOPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXaplGrupoProgEstudio($aplGrupoProgEstudio){
		$params = array($aplGrupoProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_APLGRUPOPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXnumResRevProgEstudio($numResRevProgEstudio){	
		$params = array("%$numResRevProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnumResRevProgEstudioAprox($numResRevProgEstudio){	
		$params = array("%$numResRevProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnumResRevProgEstudio($numResRevProgEstudio){
		$params = array($numResRevProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXfecResRevProgEstudio($fecResRevProgEstudio){	
		$params = array($fecResRevProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESREVPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXfecResRevProgEstudio($fecResRevProgEstudio){
		$params = array($fecResRevProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESREVPROGESTUDIO, $params);
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