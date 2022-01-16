<?php 
require_once('../../../config/config.php');
require_once(MOD.'Nivel.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLNivel.php');

class Nivel extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idNivel, $codNivel, $nomNivel) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idNivel, $codNivel, $nomNivel, $id_Nivel);
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
	function compActualizarcambiarTabla1cambiarTabla2($idNivel, $codNivel, $nomNivel) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idNivel, $codNivel, $nomNivel, $id_Nivel);
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
	function agregarNivel($idNivel, $codNivel, $nomNivel) {
$idNivel = parent::prepareParam($idNivel, Query::DATATYPE_INTEGER);
$codNivel = parent::prepareParam($codNivel, Query::DATATYPE_STRING, 0);
$nomNivel = parent::prepareParam($nomNivel, Query::DATATYPE_STRING, 0);
		
		$params = array($idNivel, $codNivel, $nomNivel);
		return parent::execute(SQLNivel::AGREGAR_NIVEL, $params);
	}

	function actualizarNivel($idNivel, $codNivel, $nomNivel, $id_Nivel){
		
$idNivel = parent::prepareParam($idNivel, Query::DATATYPE_INTEGER);
$codNivel = parent::prepareParam($codNivel, Query::DATATYPE_STRING, 0);
$nomNivel = parent::prepareParam($nomNivel, Query::DATATYPE_STRING, 0);

		
		$params = array($idNivel, $codNivel, $nomNivel, $id_Nivel);
		return parent::execute(SQLNivel::ACTUALIZAR_NIVEL, $params);		
	}
	
	
	function consultarNivel(){	
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL);
	}	
	
	function eliminarNivel($id_Nivel){
		$params = array($id_Nivel);
		return parent::execute(SQLNivel::ELIMINAR_NIVEL, $params);		
	}
	
//------------------------------	
	function consultarNivelXidNivel($idNivel){	
		$params = array($idNivel);
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_IDNIVEL, $params);
	}	
	
	function existeNivelXidNivel($idNivel){
		$params = array($idNivel);
		$tabla = parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_IDNIVEL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNivelXcodNivel($codNivel){	
		$params = array("%$codNivel%");
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_CODNIVEL, $params);
	}	
	
	function consultarNivelXcodNivelAprox($codNivel){	
		$params = array("%$codNivel%");
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_CODNIVEL_APROX, $params);
	}	
	
	function existeNivelXcodNivel($codNivel){
		$params = array($codNivel);
		$tabla = parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_CODNIVEL, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarNivelXnomNivel($nomNivel){	
		$params = array("%$nomNivel%");
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_NOMNIVEL, $params);
	}	
	
	function consultarNivelXnomNivelAprox($nomNivel){	
		$params = array("%$nomNivel%");
		return parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_NOMNIVEL_APROX, $params);
	}	
	
	function existeNivelXnomNivel($nomNivel){
		$params = array($nomNivel);
		$tabla = parent::executeQuery(SQLNivel::CONSULTAR_NIVEL_POR_NOMNIVEL, $params);
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