<?php 
require_once('../../../config/config.php');
require_once(MOD.'CodRegional.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCodRegional.php');

class CodRegional extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}


	
	function consultarCodigoRegional(){	
		return parent::executeQuery(SQLCodRegional::CONSULTAR_CODIGO_REGIONAL);
	}	
	
	function consultarCodigoXIdRegional($idCodRegional){
		$params = array($idCodRegional);
		return parent::executeQuery(SQLCodRegional::CONSULTAR_CODIGO_REGIONAL_X_ID,$params);
	}	

	function agregarCodRegional($idCodRegional, $codCodRegional, $nomCodRegional) {
		$idCodRegional = parent::prepareParam($idCodRegional, Query::DATATYPE_INTEGER);
		$codCodRegional = parent::prepareParam($codCodRegional, Query::DATATYPE_STRING,0);
		$nomCodRegional = parent::prepareParam($nomCodRegional, Query::DATATYPE_STRING,0);
		$params = array($idCodRegional, $codCodRegional, $nomCodRegional);
		return parent::execute(SQLCodRegional::AGREGAR_COD_REGIONAL, $params);
	}
	
	function actualizarCodRegional($idCodRegional, $codCodRegional, $nomCodRegional,$id_CodRegional) {
		$idCodRegional = parent::prepareParam($idCodRegional, Query::DATATYPE_INTEGER);
		$codCodRegional = parent::prepareParam($codCodRegional, Query::DATATYPE_STRING,0);
		$nomCodRegional = parent::prepareParam($nomCodRegional, Query::DATATYPE_STRING,0);
		$id_CodRegional = parent::prepareParam($id_CodRegional, Query::DATATYPE_INTEGER);
		
		$params = array($idCodRegional, $codCodRegional, $nomCodRegional, $id_CodRegional);
		return parent::execute(SQLCodRegional::ACTUALIZAR_COD_REGIONAL, $params);
	}
	function eliminarCodRegional($idCodRegional){
		$params = array($idCodRegional);
		return parent::execute(SQLCodRegional::ELIMINAR_COD_REGIONAL, $params);		
	}
	
}
?>