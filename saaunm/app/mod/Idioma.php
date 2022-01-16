<?php 
require_once('../../../config/config.php');
require_once(MOD.'Idioma.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLIdioma.php');

class Idioma extends Query{
function __construct(){
// 		parent::abrirConexion();
		parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($idIdioma, $nomIdioma) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($idIdioma, $nomIdioma, $id_Idioma);
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
	function compActualizarcambiarTabla1cambiarTabla2($idIdioma, $nomIdioma) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($idIdioma, $nomIdioma, $id_Idioma);
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
	function agregarIdioma($idIdioma, $nomIdioma) {
$idIdioma = parent::prepareParam($idIdioma, Query::DATATYPE_INTEGER);
$nomIdioma = parent::prepareParam($nomIdioma, Query::DATATYPE_STRING, 0);
		
		$params = array($idIdioma, $nomIdioma);
		return parent::execute(SQLIdioma::AGREGAR_IDIOMA, $params);
	}

	function actualizarIdioma($idIdioma, $nomIdioma, $id_Idioma){
		
$idIdioma = parent::prepareParam($idIdioma, Query::DATATYPE_INTEGER);
$nomIdioma = parent::prepareParam($nomIdioma, Query::DATATYPE_STRING, 0);

		
		$params = array($idIdioma, $nomIdioma, $id_Idioma);
		return parent::execute(SQLIdioma::ACTUALIZAR_IDIOMA, $params);		
	}
	
	
	function consultarIdioma(){	
		return parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA);
	}	
	
	function eliminarIdioma($id_Idioma){
		$params = array($id_Idioma);
		return parent::execute(SQLIdioma::ELIMINAR_IDIOMA, $params);		
	}
	
//------------------------------	
	function consultarIdiomaXidIdioma($idIdioma){	
		$params = array($idIdioma);
		return parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA_POR_IDIDIOMA, $params);
	}	
	
	function existeIdiomaXidIdioma($idIdioma){
		$params = array($idIdioma);
		$tabla = parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA_POR_IDIDIOMA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarIdiomaXnomIdioma($nomIdioma){	
		$params = array("%$nomIdioma%");
		return parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA_POR_NOMIDIOMA, $params);
	}	
	
	function consultarIdiomaXnomIdiomaAprox($nomIdioma){	
		$params = array("%$nomIdioma%");
		return parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA_POR_NOMIDIOMA_APROX, $params);
	}	
	
	function existeIdiomaXnomIdioma($nomIdioma){
		$params = array($nomIdioma);
		$tabla = parent::executeQuery(SQLIdioma::CONSULTAR_IDIOMA_POR_NOMIDIOMA, $params);
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