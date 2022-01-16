<?php 
require_once('../../../config/config.php');
require_once(MOD.'Grupo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLGrupo.php');

class Grupo extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo, $id_Grupo);
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
	function compActualizarcambiarTabla1cambiarTabla2($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo, $id_Grupo);
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
	function agregarGrupo($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo) {
$idGrupo = parent::prepareParam($idGrupo, Query::DATATYPE_INTEGER);
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$nomGrupo = parent::prepareParam($nomGrupo, Query::DATATYPE_STRING, 0);
$codGrupo = parent::prepareParam($codGrupo, Query::DATATYPE_STRING, 0);
		
		$params = array($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo);
		return parent::execute(SQLGrupo::AGREGAR_GRUPO, $params);
	}

	function actualizarGrupo($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo, $id_Grupo){
		
$idGrupo = parent::prepareParam($idGrupo, Query::DATATYPE_INTEGER);
$idCiclo = parent::prepareParam($idCiclo, Query::DATATYPE_INTEGER);
$idPensum = parent::prepareParam($idPensum, Query::DATATYPE_INTEGER);
$idPeriodo = parent::prepareParam($idPeriodo, Query::DATATYPE_INTEGER);
$idProgEstudio = parent::prepareParam($idProgEstudio, Query::DATATYPE_INTEGER);
$idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
$idSede = parent::prepareParam($idSede, Query::DATATYPE_INTEGER);
$nomGrupo = parent::prepareParam($nomGrupo, Query::DATATYPE_STRING, 0);
$codGrupo = parent::prepareParam($codGrupo, Query::DATATYPE_STRING, 0);

		
		$params = array($idGrupo, $idCiclo, $idPensum, $idPeriodo, $idProgEstudio, $idEmpleado, $idSede, $nomGrupo, $codGrupo, $id_Grupo);
		return parent::execute(SQLGrupo::ACTUALIZAR_GRUPO, $params);		
	}
	
	
	function consultarGrupo(){	
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO);
	}	
	
	function eliminarGrupo($id_Grupo){
		$params = array($id_Grupo);
		return parent::execute(SQLGrupo::ELIMINAR_GRUPO, $params);		
	}
	
//------------------------------	
	function consultarGrupoXidGrupo($idGrupo){	
		$params = array($idGrupo);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDGRUPO, $params);
	}	
	
	function existeGrupoXidGrupo($idGrupo){
		$params = array($idGrupo);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDGRUPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidCiclo($idCiclo){	
		$params = array($idCiclo);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDCICLO, $params);
	}	
	
	function existeGrupoXidCiclo($idCiclo){
		$params = array($idCiclo);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDCICLO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidPensum($idPensum){	
		$params = array($idPensum);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPENSUM, $params);
	}	
	
	function existeGrupoXidPensum($idPensum){
		$params = array($idPensum);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPENSUM, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidPeriodo($idPeriodo){	
		$params = array($idPeriodo);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPERIODO, $params);
	}	
	
	function existeGrupoXidPeriodo($idPeriodo){
		$params = array($idPeriodo);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPERIODO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidProgEstudio($idProgEstudio){	
		$params = array($idProgEstudio);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPROGESTUDIO, $params);
	}	
	
	function existeGrupoXidProgEstudio($idProgEstudio){
		$params = array($idProgEstudio);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDPROGESTUDIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidEmpleado($idEmpleado){	
		$params = array($idEmpleado);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDEMPLEADO, $params);
	}	
	
	function existeGrupoXidEmpleado($idEmpleado){
		$params = array($idEmpleado);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDEMPLEADO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXidSede($idSede){	
		$params = array($idSede);
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDSEDE, $params);
	}	
	
	function existeGrupoXidSede($idSede){
		$params = array($idSede);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_IDSEDE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXnomGrupo($nomGrupo){	
		$params = array("%$nomGrupo%");
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_NOMGRUPO, $params);
	}	
	
	function consultarGrupoXnomGrupoAprox($nomGrupo){	
		$params = array("%$nomGrupo%");
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_NOMGRUPO_APROX, $params);
	}	
	
	function existeGrupoXnomGrupo($nomGrupo){
		$params = array($nomGrupo);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_NOMGRUPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarGrupoXcodGrupo($codGrupo){	
		$params = array("%$codGrupo%");
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_CODGRUPO, $params);
	}	
	
	function consultarGrupoXcodGrupoAprox($codGrupo){	
		$params = array("%$codGrupo%");
		return parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_CODGRUPO_APROX, $params);
	}	
	
	function existeGrupoXcodGrupo($codGrupo){
		$params = array($codGrupo);
		$tabla = parent::executeQuery(SQLGrupo::CONSULTAR_GRUPO_POR_CODGRUPO, $params);
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