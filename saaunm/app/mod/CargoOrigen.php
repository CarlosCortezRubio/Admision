<?php 
require_once('../../../config/config.php');
require_once(MOD.'CargoOrigen.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLCargoOrigen.php');

class CargoOrigen extends Query{
    function __construct(){
        // 		parent::abrirConexion();
        parent::abrirConexionConParam(SERVER_RH,USER_RH,PASSWORDBD_RH,DATABASE_RH);
}


	
	function consultarCargoOrigen(){	
		return parent::executeQuery(SQLCargoOrigen::CONSULTAR_CODIGO_CARGO_ORIGEN);
	}	
	

	
	
	
}
?>