<?php 
require_once('../../../config/config.php');
require_once(MOD.'PenAsig.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLPenAsig.php');

class PenAsig extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig, $id_PenAsig);
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
	function compActualizarcambiarTabla1cambiarTabla2($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig, $id_PenAsig);
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
	function agregarPenAsig($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig) {
$idPenAsig = parent::prepareParam($idPenAsig, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$creditoPenAsig = parent::prepareParam($creditoPenAsig, Query::DATATYPE_INTEGER);
$ihSemPenAsig = parent::prepareParam($ihSemPenAsig, Query::DATATYPE_INTEGER);
$ihTotPenAsig = parent::prepareParam($ihTotPenAsig, Query::DATATYPE_INTEGER);
$evalParaCerrarPenAsig = parent::prepareParam($evalParaCerrarPenAsig, Query::DATATYPE_INTEGER);
		
		$params = array($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig);
		return parent::execute(SQLPenAsig::AGREGAR_PENASIG, $params);
	}

	function actualizarPenAsig($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig, $id_PenAsig){
		
$idPenAsig = parent::prepareParam($idPenAsig, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idAsignatura = parent::prepareParam($idAsignatura, Query::DATATYPE_INTEGER);
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$creditoPenAsig = parent::prepareParam($creditoPenAsig, Query::DATATYPE_INTEGER);
$ihSemPenAsig = parent::prepareParam($ihSemPenAsig, Query::DATATYPE_INTEGER);
$ihTotPenAsig = parent::prepareParam($ihTotPenAsig, Query::DATATYPE_INTEGER);
$evalParaCerrarPenAsig = parent::prepareParam($evalParaCerrarPenAsig, Query::DATATYPE_INTEGER);

		
		$params = array($idPenAsig, $idPensum, $idAsignatura, $idCiclo, $creditoPenAsig, $ihSemPenAsig, $ihTotPenAsig, $evalParaCerrarPenAsig, $id_PenAsig);
		return parent::execute(SQLPenAsig::ACTUALIZAR_PENASIG, $params);		
	}
	
	
	function consultarPenAsig(){	
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG);
	}	
	
	function eliminarPenAsig($id_PenAsig){
		$params = array($id_PenAsig);
		return parent::execute(SQLPenAsig::ELIMINAR_PENASIG, $params);		
	}
	
//------------------------------	
	function consultarPenAsigXidPenAsig($idPenAsig){	
		$params = array($idPenAsig);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDPENASIG, $params);
	}	
	
	function existePenAsigXidPenAsig($idPenAsig){
		$params = array($idPenAsig);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDPENASIG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXidPensum($idPensum){	
		$params = array($idPensum);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDPENSUM, $params);
	}	
	
	function existePenAsigXidPensum($idPensum){
		$params = array($idPensum);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDPENSUM, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXidAsignatura($idAsignatura){	
		$params = array($idAsignatura);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDASIGNATURA, $params);
	}	
	
	function existePenAsigXidAsignatura($idAsignatura){
		$params = array($idAsignatura);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDASIGNATURA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXidCiclo($idCiclo){	
		$params = array($idCiclo);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDCICLO, $params);
	}	
	
	function existePenAsigXidCiclo($idCiclo){
		$params = array($idCiclo);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IDCICLO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXcreditoPenAsig($creditoPenAsig){	
		$params = array($creditoPenAsig);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_CREDITOPENASIG, $params);
	}	
	
	function existePenAsigXcreditoPenAsig($creditoPenAsig){
		$params = array($creditoPenAsig);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_CREDITOPENASIG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXihSemPenAsig($ihSemPenAsig){	
		$params = array($ihSemPenAsig);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IHSEMPENASIG, $params);
	}	
	
	function existePenAsigXihSemPenAsig($ihSemPenAsig){
		$params = array($ihSemPenAsig);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IHSEMPENASIG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXihTotPenAsig($ihTotPenAsig){	
		$params = array($ihTotPenAsig);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IHTOTPENASIG, $params);
	}	
	
	function existePenAsigXihTotPenAsig($ihTotPenAsig){
		$params = array($ihTotPenAsig);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_IHTOTPENASIG, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarPenAsigXevalParaCerrarPenAsig($evalParaCerrarPenAsig){	
		$params = array($evalParaCerrarPenAsig);
		return parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_EVALPARACERRARPENASIG, $params);
	}	
	
	function existePenAsigXevalParaCerrarPenAsig($evalParaCerrarPenAsig){
		$params = array($evalParaCerrarPenAsig);
		$tabla = parent::executeQuery(SQLPenAsig::CONSULTAR_PENASIG_POR_EVALPARACERRARPENASIG, $params);
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