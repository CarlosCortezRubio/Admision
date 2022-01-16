<?php 
require_once('../../../config/config.php');
require_once(MOD.'CodFiscal.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCodFiscal.php');

class CodFiscal extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}


	
	function consultarCodigoFiscal(){	
		return parent::executeQuery(SQLCodFiscal::CONSULTAR_CODIGO_FISCAL);
	}	
	
	function consultarCodigoXIdFiscal($idCodFiscal){
		$params = array($idCodFiscal);
		return parent::executeQuery(SQLCodFiscal::CONSULTAR_CODIGO_FISCAL_X_ID,$params);
	}	

	function agregarCodFiscal($idCodFiscal, $codCodFiscal, $nomCodFiscal) {
		$idCodFiscal = parent::prepareParam($idCodFiscal, Query::DATATYPE_INTEGER);
		$codCodFiscal = parent::prepareParam($codCodFiscal, Query::DATATYPE_STRING,0);
		$nomCodFiscal = parent::prepareParam($nomCodFiscal, Query::DATATYPE_STRING,0);
		$params = array($idCodFiscal, $codCodFiscal, $nomCodFiscal);
		return parent::execute(SQLCodFiscal::AGREGAR_COD_FISCAL, $params);
	}
	
	function actualizarCodFiscal($idCodFiscal, $codCodFiscal, $nomCodFiscal,$id_CodFiscal) {
		$idCodFiscal = parent::prepareParam($idCodFiscal, Query::DATATYPE_INTEGER);
		$codCodFiscal = parent::prepareParam($codCodFiscal, Query::DATATYPE_STRING,0);
		$nomCodFiscal = parent::prepareParam($nomCodFiscal, Query::DATATYPE_STRING,0);
		$id_CodFiscal = parent::prepareParam($id_CodFiscal, Query::DATATYPE_INTEGER);
		
		$params = array($id_CodFiscal, $codCodFiscal, $nomCodFiscal, $id_CodFiscal);
		return parent::execute(SQLCodFiscal::ACTUALIZAR_COD_FISCAL, $params);
	}
	function eliminarCodFiscal($idCodFiscal){
		$params = array($idCodFiscal);
		return parent::execute(SQLCodFiscal::ELIMINAR_COD_FISCAL, $params);		
	}
	
}
?>