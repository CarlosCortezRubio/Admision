<?php 
require_once('../../../config/config.php');
require_once(MOD.'DirEncargo.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLDirEncargo.php');

class DirEncargo extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}


	
	function consultarDirEncargo(){	
		return parent::executeQuery(SQLDirEncargo::CONSULTAR_DIRENCARGO);
	}	



	
	function consultarCodigoXIdDirEncargo($idDirEncargo){
		$params = array($idDirEncargo);
		return parent::executeQuery(SQLDirEncargo::CONSULTAR_DIRENCARGO_X_DNI,$params);
	}	

	function agregarDirEncargo($idDirEncargo, $codDirEncargo, $nomDirEncargo) {
		$idDirEncargo = parent::prepareParam($idDirEncargo, Query::DATATYPE_INTEGER);
		$codDirEncargo = parent::prepareParam($codDirEncargo, Query::DATATYPE_STRING,0);
		$nomDirEncargo = parent::prepareParam($nomDirEncargo, Query::DATATYPE_STRING,0);
		$params = array($idDirEncargo, $codDirEncargo, $nomDirEncargo);
		return parent::execute(SQLDirEncargo::REGISTRAR_DIR_ENCARGO, $params);
	}
	
	function actualizarDirEncargo($idDirEncargo, $codDirEncargo, $nomDirEncargo,$id_DirEncargo) {
		$idDirEncargo = parent::prepareParam($idDirEncargo, Query::DATATYPE_INTEGER);
		$codDirEncargo = parent::prepareParam($codDirEncargo, Query::DATATYPE_STRING,0);
		$nomDirEncargo = parent::prepareParam($nomDirEncargo, Query::DATATYPE_STRING,0);
		$id_DirEncargo = parent::prepareParam($id_DirEncargo, Query::DATATYPE_INTEGER);
		
		$params = array($id_DirEncargo, $codDirEncargo, $nomDirEncargo, $id_DirEncargo);
		return parent::execute(SQLDirEncargo::ACTUALIZAR_DIR_ENCARGO, $params);
	}
	function eliminarDirEncargo($idDirEncargo){
		$params = array($idDirEncargo);
		return parent::execute(SQLDirEncargo::ELIMINAR_DIR_ENCARGO, $params);		
	}
	
	
}
?>