<?php 
require_once('../../../config/config.php');
require_once(MOD.'Afp.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLAfp.php');

class Afp extends Query{
function __construct(){
		parent::abrirConexion();
}


	
	function consultarAfp(){	
		return parent::executeQuery(SQLAfp::CONSULTAR_AFP);
	}	
	
	function consultarCodigoXIdAfp($idAfp){
		$params = array($idAfp);
		return parent::executeQuery(SQLAfp::CONSULTAR_AFP_X_ID,$params);
	}	

	function agregarAfp($idAfp, $codAfp, $nomAfp) {
		$idAfp = parent::prepareParam($idAfp, Query::DATATYPE_INTEGER);
		$codAfp = parent::prepareParam($codAfp, Query::DATATYPE_STRING,0);
		$nomAfp = parent::prepareParam($nomAfp, Query::DATATYPE_STRING,0);
		$params = array($idAfp, $codAfp, $nomAfp);
		return parent::execute(SQLAfp::AGREGAR_AFP, $params);
	}
	
	function actualizarAfp($idAfp, $codAfp, $nomAfp,$id_Afp) {
		$idAfp = parent::prepareParam($idAfp, Query::DATATYPE_INTEGER);
		$codAfp = parent::prepareParam($codAfp, Query::DATATYPE_STRING,0);
		$nomAfp = parent::prepareParam($nomAfp, Query::DATATYPE_STRING,0);
		$id_Afp = parent::prepareParam($id_Afp, Query::DATATYPE_INTEGER);
		
		$params = array($id_Afp, $codAfp, $nomAfp, $id_Afp);
		return parent::execute(SQLAfp::ACTUALIZAR_AFP, $params);
	}
	function eliminarAfp($idAfp){
		$params = array($idAfp);
		return parent::execute(SQLAfp::ELIMINAR_AFP, $params);		
	}
	
	
	
}
?>