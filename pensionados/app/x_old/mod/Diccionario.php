<?php 
require_once('../../../config/config.php');
require_once(MOD.'Diccionario.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLDiccionario.php');

class Diccionario extends Query{
function __construct(){
		parent::abrirConexion();
}
/**
	function compAgregarcambiarTabla1cambiarTabla2($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::agregarcambiarTabla1('aqui van los campos de tabla1');
		$idcambiarTabla1 = $objcambiarTabla1->consultarcambiarTabla1UltimoId();
		$resultado2 = cambiarTabla2::agregarcambiarTabla2($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo, $id_diccionario);
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
	function compActualizarcambiarTabla1cambiarTabla2($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo) {
		$objcambiarTabla1 = new cambiarTabla1();
		$objcambiarTabla1->beginTransaction();
		$resultado1 = cambiarTabla1::actualizarcambiarTabla1('aqui van los campos de tabla1');
		$resultado2 = cambiarTabla2::actualizarcambiarTabla2($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo, $id_diccionario);
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
	function agregarDiccionario($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo) {
$diccionarioid = parent::prepareParam($diccionarioid, Query::DATATYPE_INTEGER);
$nombretabla = parent::prepareParam($nombretabla, Query::DATATYPE_STRING, 0);
$nombremsgtabla = parent::prepareParam($nombremsgtabla, Query::DATATYPE_STRING, 0);
$generotabla = parent::prepareParam($generotabla, Query::DATATYPE_INTEGER);
$nombrecampo = parent::prepareParam($nombrecampo, Query::DATATYPE_STRING, 0);
$nombrecortocampo = parent::prepareParam($nombrecortocampo, Query::DATATYPE_STRING, 0);
$descripcioncampo = parent::prepareParam($descripcioncampo, Query::DATATYPE_STRING, 0);
$tipocampo = parent::prepareParam($tipocampo, Query::DATATYPE_STRING, 0);
$tamcampo = parent::prepareParam($tamcampo, Query::DATATYPE_INTEGER);
$ordencampo = parent::prepareParam($ordencampo, Query::DATATYPE_INTEGER);
$precisioncampo = parent::prepareParam($precisioncampo, Query::DATATYPE_INTEGER);
$dominio = parent::prepareParam($dominio, Query::DATATYPE_STRING, 0);
$cjtovalores = parent::prepareParam($cjtovalores, Query::DATATYPE_STRING, 0);
$archivosec = parent::prepareParam($archivosec, Query::DATATYPE_STRING, 0);
$ncolumnas = parent::prepareParam($ncolumnas, Query::DATATYPE_INTEGER);
$colenlace = parent::prepareParam($colenlace, Query::DATATYPE_STRING, 0);
$campoact = parent::prepareParam($campoact, Query::DATATYPE_INTEGER);
$sqlgrid = parent::prepareParam($sqlgrid, Query::DATATYPE_STRING, 0);
$camposbusqueda = parent::prepareParam($camposbusqueda, Query::DATATYPE_STRING, 0);
$campoconsulta = parent::prepareParam($campoconsulta, Query::DATATYPE_INTEGER);
$campovalido = parent::prepareParam($campovalido, Query::DATATYPE_INTEGER);
$crearmetodo = parent::prepareParam($crearmetodo, Query::DATATYPE_INTEGER);
		
		$params = array($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo);
		return parent::execute(SQLDiccionario::AGREGAR_DICCIONARIO, $params);
	}

	function actualizarDiccionario($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo, $id_diccionario){
		
$diccionarioid = parent::prepareParam($diccionarioid, Query::DATATYPE_INTEGER);
$nombretabla = parent::prepareParam($nombretabla, Query::DATATYPE_STRING, 0);
$nombremsgtabla = parent::prepareParam($nombremsgtabla, Query::DATATYPE_STRING, 0);
$generotabla = parent::prepareParam($generotabla, Query::DATATYPE_INTEGER);
$nombrecampo = parent::prepareParam($nombrecampo, Query::DATATYPE_STRING, 0);
$nombrecortocampo = parent::prepareParam($nombrecortocampo, Query::DATATYPE_STRING, 0);
$descripcioncampo = parent::prepareParam($descripcioncampo, Query::DATATYPE_STRING, 0);
$tipocampo = parent::prepareParam($tipocampo, Query::DATATYPE_STRING, 0);
$tamcampo = parent::prepareParam($tamcampo, Query::DATATYPE_INTEGER);
$ordencampo = parent::prepareParam($ordencampo, Query::DATATYPE_INTEGER);
$precisioncampo = parent::prepareParam($precisioncampo, Query::DATATYPE_INTEGER);
$dominio = parent::prepareParam($dominio, Query::DATATYPE_STRING, 0);
$cjtovalores = parent::prepareParam($cjtovalores, Query::DATATYPE_STRING, 0);
$archivosec = parent::prepareParam($archivosec, Query::DATATYPE_STRING, 0);
$ncolumnas = parent::prepareParam($ncolumnas, Query::DATATYPE_INTEGER);
$colenlace = parent::prepareParam($colenlace, Query::DATATYPE_STRING, 0);
$campoact = parent::prepareParam($campoact, Query::DATATYPE_INTEGER);
$sqlgrid = parent::prepareParam($sqlgrid, Query::DATATYPE_STRING, 0);
$camposbusqueda = parent::prepareParam($camposbusqueda, Query::DATATYPE_STRING, 0);
$campoconsulta = parent::prepareParam($campoconsulta, Query::DATATYPE_INTEGER);
$campovalido = parent::prepareParam($campovalido, Query::DATATYPE_INTEGER);
$crearmetodo = parent::prepareParam($crearmetodo, Query::DATATYPE_INTEGER);

		
		$params = array($diccionarioid, $nombretabla, $nombremsgtabla, $generotabla, $nombrecampo, $nombrecortocampo, $descripcioncampo, $tipocampo, $tamcampo, $ordencampo, $precisioncampo, $dominio, $cjtovalores, $archivosec, $ncolumnas, $colenlace, $campoact, $sqlgrid, $camposbusqueda, $campoconsulta, $campovalido, $crearmetodo, $id_diccionario);
		return parent::execute(SQLDiccionario::ACTUALIZAR_DICCIONARIO, $params);		
	}
	
	
	function consultarDiccionario(){	
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO);
	}	
	
	function eliminarDiccionario($id_diccionario){
		$params = array($id_diccionario);
		return parent::execute(SQLDiccionario::ELIMINAR_DICCIONARIO, $params);		
	}
	
//------------------------------	
	function consultarDiccionarioXdiccionarioid($diccionarioid){	
		$params = array($diccionarioid);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DICCIONARIOID, $params);
	}	
	
	function existeDiccionarioXdiccionarioid($diccionarioid){
		$params = array($diccionarioid);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DICCIONARIOID, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXnombretabla($nombretabla){	
		$params = array("%$nombretabla%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRETABLA, $params);
	}	
	
	function consultarDiccionarioXnombretablaAprox($nombretabla){	
		$params = array("%$nombretabla%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRETABLA_APROX, $params);
	}	
	
	function existeDiccionarioXnombretabla($nombretabla){
		$params = array($nombretabla);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRETABLA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXnombremsgtabla($nombremsgtabla){	
		$params = array("%$nombremsgtabla%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBREMSGTABLA, $params);
	}	
	
	function consultarDiccionarioXnombremsgtablaAprox($nombremsgtabla){	
		$params = array("%$nombremsgtabla%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBREMSGTABLA_APROX, $params);
	}	
	
	function existeDiccionarioXnombremsgtabla($nombremsgtabla){
		$params = array($nombremsgtabla);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBREMSGTABLA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXgenerotabla($generotabla){	
		$params = array($generotabla);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_GENEROTABLA, $params);
	}	
	
	function existeDiccionarioXgenerotabla($generotabla){
		$params = array($generotabla);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_GENEROTABLA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXnombrecampo($nombrecampo){	
		$params = array("%$nombrecampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECAMPO, $params);
	}	
	
	function consultarDiccionarioXnombrecampoAprox($nombrecampo){	
		$params = array("%$nombrecampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECAMPO_APROX, $params);
	}	
	
	function existeDiccionarioXnombrecampo($nombrecampo){
		$params = array($nombrecampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXnombrecortocampo($nombrecortocampo){	
		$params = array("%$nombrecortocampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECORTOCAMPO, $params);
	}	
	
	function consultarDiccionarioXnombrecortocampoAprox($nombrecortocampo){	
		$params = array("%$nombrecortocampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECORTOCAMPO_APROX, $params);
	}	
	
	function existeDiccionarioXnombrecortocampo($nombrecortocampo){
		$params = array($nombrecortocampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NOMBRECORTOCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXdescripcioncampo($descripcioncampo){	
		$params = array("%$descripcioncampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DESCRIPCIONCAMPO, $params);
	}	
	
	function consultarDiccionarioXdescripcioncampoAprox($descripcioncampo){	
		$params = array("%$descripcioncampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DESCRIPCIONCAMPO_APROX, $params);
	}	
	
	function existeDiccionarioXdescripcioncampo($descripcioncampo){
		$params = array($descripcioncampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DESCRIPCIONCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXtipocampo($tipocampo){	
		$params = array("%$tipocampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_TIPOCAMPO, $params);
	}	
	
	function consultarDiccionarioXtipocampoAprox($tipocampo){	
		$params = array("%$tipocampo%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_TIPOCAMPO_APROX, $params);
	}	
	
	function existeDiccionarioXtipocampo($tipocampo){
		$params = array($tipocampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_TIPOCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXtamcampo($tamcampo){	
		$params = array($tamcampo);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_TAMCAMPO, $params);
	}	
	
	function existeDiccionarioXtamcampo($tamcampo){
		$params = array($tamcampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_TAMCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXordencampo($ordencampo){	
		$params = array($ordencampo);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ORDENCAMPO, $params);
	}	
	
	function existeDiccionarioXordencampo($ordencampo){
		$params = array($ordencampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ORDENCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXprecisioncampo($precisioncampo){	
		$params = array($precisioncampo);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_PRECISIONCAMPO, $params);
	}	
	
	function existeDiccionarioXprecisioncampo($precisioncampo){
		$params = array($precisioncampo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_PRECISIONCAMPO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXdominio($dominio){	
		$params = array("%$dominio%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DOMINIO, $params);
	}	
	
	function consultarDiccionarioXdominioAprox($dominio){	
		$params = array("%$dominio%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DOMINIO_APROX, $params);
	}	
	
	function existeDiccionarioXdominio($dominio){
		$params = array($dominio);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_DOMINIO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcjtovalores($cjtovalores){	
		$params = array("%$cjtovalores%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CJTOVALORES, $params);
	}	
	
	function consultarDiccionarioXcjtovaloresAprox($cjtovalores){	
		$params = array("%$cjtovalores%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CJTOVALORES_APROX, $params);
	}	
	
	function existeDiccionarioXcjtovalores($cjtovalores){
		$params = array($cjtovalores);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CJTOVALORES, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXarchivosec($archivosec){	
		$params = array("%$archivosec%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ARCHIVOSEC, $params);
	}	
	
	function consultarDiccionarioXarchivosecAprox($archivosec){	
		$params = array("%$archivosec%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ARCHIVOSEC_APROX, $params);
	}	
	
	function existeDiccionarioXarchivosec($archivosec){
		$params = array($archivosec);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_ARCHIVOSEC, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXncolumnas($ncolumnas){	
		$params = array($ncolumnas);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NCOLUMNAS, $params);
	}	
	
	function existeDiccionarioXncolumnas($ncolumnas){
		$params = array($ncolumnas);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_NCOLUMNAS, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcolenlace($colenlace){	
		$params = array("%$colenlace%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_COLENLACE, $params);
	}	
	
	function consultarDiccionarioXcolenlaceAprox($colenlace){	
		$params = array("%$colenlace%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_COLENLACE_APROX, $params);
	}	
	
	function existeDiccionarioXcolenlace($colenlace){
		$params = array($colenlace);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_COLENLACE, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcampoact($campoact){	
		$params = array($campoact);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOACT, $params);
	}	
	
	function existeDiccionarioXcampoact($campoact){
		$params = array($campoact);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOACT, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXsqlgrid($sqlgrid){	
		$params = array("%$sqlgrid%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_SQLGRID, $params);
	}	
	
	function consultarDiccionarioXsqlgridAprox($sqlgrid){	
		$params = array("%$sqlgrid%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_SQLGRID_APROX, $params);
	}	
	
	function existeDiccionarioXsqlgrid($sqlgrid){
		$params = array($sqlgrid);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_SQLGRID, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcamposbusqueda($camposbusqueda){	
		$params = array("%$camposbusqueda%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOSBUSQUEDA, $params);
	}	
	
	function consultarDiccionarioXcamposbusquedaAprox($camposbusqueda){	
		$params = array("%$camposbusqueda%");
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOSBUSQUEDA_APROX, $params);
	}	
	
	function existeDiccionarioXcamposbusqueda($camposbusqueda){
		$params = array($camposbusqueda);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOSBUSQUEDA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcampoconsulta($campoconsulta){	
		$params = array($campoconsulta);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOCONSULTA, $params);
	}	
	
	function existeDiccionarioXcampoconsulta($campoconsulta){
		$params = array($campoconsulta);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOCONSULTA, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcampovalido($campovalido){	
		$params = array($campovalido);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOVALIDO, $params);
	}	
	
	function existeDiccionarioXcampovalido($campovalido){
		$params = array($campovalido);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CAMPOVALIDO, $params);
		if (count($tabla)>0) {
			return true;			
		}
		return false;
	}	

	function consultarDiccionarioXcrearmetodo($crearmetodo){	
		$params = array($crearmetodo);
		return parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CREARMETODO, $params);
	}	
	
	function existeDiccionarioXcrearmetodo($crearmetodo){
		$params = array($crearmetodo);
		$tabla = parent::executeQuery(SQLDiccionario::CONSULTAR_DICCIONARIO_POR_CREARMETODO, $params);
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