<?php 
require_once('../../../config/config.php');
require_once(MOD.'Dia.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLDia.php');

class Dia extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idDia, $nomDia, $nomCortoDia, $letraDia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idDia, $nomDia, $nomCortoDia, $letraDia, $id_Dia);
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
	function compActualizarcambiarTabla1cambiarTabla2($idDia, $nomDia, $nomCortoDia, $letraDia) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idDia, $nomDia, $nomCortoDia, $letraDia, $id_Dia);
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
	function agregarDia($idDia, $nomDia, $nomCortoDia, $letraDia) {
$idDia = parent::prepareParam($idDia, Query::DATATYPE_INTEGER);
$nomDia = parent::prepareParam($nomDia, Query::DATATYPE_STRING, 0);
$nomCortoDia = parent::prepareParam($nomCortoDia, Query::DATATYPE_STRING, 0);
$letraDia = parent::prepareParam($letraDia, Query::DATATYPE_STRING, 0);
		
		$params = array($idDia, $nomDia, $nomCortoDia, $letraDia);
		return parent::execute(SQLDia::AGREGAR_DIA, $params);
	}

	function actualizarDia($idDia, $nomDia, $nomCortoDia, $letraDia, $id_Dia){
		
$idDia = parent::prepareParam($idDia, Query::DATATYPE_INTEGER);
$nomDia = parent::prepareParam($nomDia, Query::DATATYPE_STRING, 0);
$nomCortoDia = parent::prepareParam($nomCortoDia, Query::DATATYPE_STRING, 0);
$letraDia = parent::prepareParam($letraDia, Query::DATATYPE_STRING, 0);

		
		$params = array($idDia, $nomDia, $nomCortoDia, $letraDia, $id_Dia);
		return parent::execute(SQLDia::ACTUALIZAR_DIA, $params);		
	}
	
	
	function consultarDia(){	
		return parent::executeQuery(SQLDia::CONSULTAR_DIA);
	}	
	
	function eliminarDia($id_Dia){
		$params = array($id_Dia);
		return parent::execute(SQLDia::ELIMINAR_DIA, $params);		
	}
	
//------------------------------	
	function consultarDiaXidDia($idDia){	
		$params = array($idDia);
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_IDDIA, $params);
	}	
	
	function existeDiaXidDia($idDia){
		$params = array($idDia);
		$tabla = parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_IDDIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiaXnomDia($nomDia){	
		$params = array("%$nomDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMDIA, $params);
	}	
	
	function consultarDiaXnomDiaAprox($nomDia){	
		$params = array("%$nomDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMDIA_APROX, $params);
	}	
	
	function existeDiaXnomDia($nomDia){
		$params = array($nomDia);
		$tabla = parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMDIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiaXnomCortoDia($nomCortoDia){	
		$params = array("%$nomCortoDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMCORTODIA, $params);
	}	
	
	function consultarDiaXnomCortoDiaAprox($nomCortoDia){	
		$params = array("%$nomCortoDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMCORTODIA_APROX, $params);
	}	
	
	function existeDiaXnomCortoDia($nomCortoDia){
		$params = array($nomCortoDia);
		$tabla = parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_NOMCORTODIA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiaXletraDia($letraDia){	
		$params = array("%$letraDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_LETRADIA, $params);
	}	
	
	function consultarDiaXletraDiaAprox($letraDia){	
		$params = array("%$letraDia%");
		return parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_LETRADIA_APROX, $params);
	}	
	
	function existeDiaXletraDia($letraDia){
		$params = array($letraDia);
		$tabla = parent::executeQuery(SQLDia::CONSULTAR_DIA_POR_LETRADIA, $params);
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