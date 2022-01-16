<?php 
require_once('../../../config/config.php');
require_once(MOD.'CargoOrigen.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCargoOrigen.php');

class CargoOrigen extends Query{
function __construct(){
		parent::abrirConexion();
}


	
	function consultarCargoOrigen(){	
		return parent::executeQuery(SQLCargoOrigen::CONSULTAR_CODIGO_CARGO_ORIGEN);
	}	
	

	
	
	
}
?>