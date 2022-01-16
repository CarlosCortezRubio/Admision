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
	function compAgregarcambiarTabla1cambiarTabla2($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio, $id_ProgEstudio);
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
	function compActualizarcambiarTabla1cambiarTabla2($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio, $id_ProgEstudio);
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
	function agregarProgEstudio($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio) {
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$codProgEstudio = parent::prepareParam($codProgEstudio, Query::DATATYPE_STRING, 0);
$nomProgEstudio = parent::prepareParam($nomProgEstudio, Query::DATATYPE_STRING, 0);
$nomCortoProgEstudio = parent::prepareParam($nomCortoProgEstudio, Query::DATATYPE_STRING, 0);
$numResAutoProgEstudio = parent::prepareParam($numResAutoProgEstudio, Query::DATATYPE_STRING, 0);
$preInscProgEstudio = parent::prepareParam($preInscProgEstudio, Query::DATATYPE_INTEGER);
$gpoProgEstudio = parent::prepareParam($gpoProgEstudio, Query::DATATYPE_INTEGER);
$numResRevaProgEstudio = parent::prepareParam($numResRevaProgEstudio, Query::DATATYPE_STRING, 0);
		
		$params = array($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio);
		return parent::execute(SQLProgEstudio::AGREGAR_PROGESTUDIO, $params);
	}

	function actualizarProgEstudio($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio, $id_ProgEstudio){
		
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$codProgEstudio = parent::prepareParam($codProgEstudio, Query::DATATYPE_STRING, 0);
$nomProgEstudio = parent::prepareParam($nomProgEstudio, Query::DATATYPE_STRING, 0);
$nomCortoProgEstudio = parent::prepareParam($nomCortoProgEstudio, Query::DATATYPE_STRING, 0);
$numResAutoProgEstudio = parent::prepareParam($numResAutoProgEstudio, Query::DATATYPE_STRING, 0);
$preInscProgEstudio = parent::prepareParam($preInscProgEstudio, Query::DATATYPE_INTEGER);
$gpoProgEstudio = parent::prepareParam($gpoProgEstudio, Query::DATATYPE_INTEGER);
$numResRevaProgEstudio = parent::prepareParam($numResRevaProgEstudio, Query::DATATYPE_STRING, 0);

		
		$params = array($idProgEstudio, $codProgEstudio, $nomProgEstudio, $nomCortoProgEstudio, $numResAutoProgEstudio, $fecResAutoProgEstudio, $preInscProgEstudio, $gpoProgEstudio, $numResRevaProgEstudio, $fecResRevaProgEstudio, $id_ProgEstudio);
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

	function consultarProgEstudioXnomCortoProgEstudio($nomCortoProgEstudio){	
		$params = array("%$nomCortoProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMCORTOPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnomCortoProgEstudioAprox($nomCortoProgEstudio){	
		$params = array("%$nomCortoProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMCORTOPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnomCortoProgEstudio($nomCortoProgEstudio){
		$params = array($nomCortoProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NOMCORTOPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXnumResAutoProgEstudio($numResAutoProgEstudio){	
		$params = array("%$numResAutoProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESAUTOPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnumResAutoProgEstudioAprox($numResAutoProgEstudio){	
		$params = array("%$numResAutoProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESAUTOPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnumResAutoProgEstudio($numResAutoProgEstudio){
		$params = array($numResAutoProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESAUTOPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXfecResAutoProgEstudio($fecResAutoProgEstudio){	
		$params = array($fecResAutoProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESAUTOPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXfecResAutoProgEstudio($fecResAutoProgEstudio){
		$params = array($fecResAutoProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESAUTOPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXpreInscProgEstudio($preInscProgEstudio){	
		$params = array($preInscProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_PREINSCPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXpreInscProgEstudio($preInscProgEstudio){
		$params = array($preInscProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_PREINSCPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXgpoProgEstudio($gpoProgEstudio){	
		$params = array($gpoProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_GPOPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXgpoProgEstudio($gpoProgEstudio){
		$params = array($gpoProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_GPOPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXnumResRevaProgEstudio($numResRevaProgEstudio){	
		$params = array("%$numResRevaProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVAPROGESTUDIO, $params);
	}	
	
	function consultarProgEstudioXnumResRevaProgEstudioAprox($numResRevaProgEstudio){	
		$params = array("%$numResRevaProgEstudio%");
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVAPROGESTUDIO_APROX, $params);
	}	
	
	function existeProgEstudioXnumResRevaProgEstudio($numResRevaProgEstudio){
		$params = array($numResRevaProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_NUMRESREVAPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarProgEstudioXfecResRevaProgEstudio($fecResRevaProgEstudio){	
		$params = array($fecResRevaProgEstudio);
		return parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESREVAPROGESTUDIO, $params);
	}	
	
	function existeProgEstudioXfecResRevaProgEstudio($fecResRevaProgEstudio){
		$params = array($fecResRevaProgEstudio);
		$tabla = parent::executeQuery(SQLProgEstudio::CONSULTAR_PROGESTUDIO_POR_FECRESREVAPROGESTUDIO, $params);
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