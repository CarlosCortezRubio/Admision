<?php
require_once ('../../../config/config.php');
class Base {
}
class Controller extends Action {
	function __construct() {
		parent::__construct ();
	}
	function instanciarClase($clase, $metodo, $matParametros) {
		$this->resultado = null;
		$this->clase = new $clase ();
		return $this->clase;
	}
	function visualizar($pagina) {
		$this->setParameterPath ( 'pagina', VISTA . $pagina );
		$this->goForward ( 'template.tpl' );
	}
	function visualizarPagina($pagina) {
		//		$this->goForward ( $pagina );
		$this->goForward ( 'templateSimple.tpl' );
	}
	function main($request, $session) {
		$controller = $request ['sec'];
		//		echo "[($controller)]";
			//			$sem = date("Y-m-d");
			//			$sem = 'josue';
			@$model = desencriptar3 ( $_GET ['opcion'], $sem );
			@$pagina = @$request ['pagina'];
			//@$pagina = desencriptar3($_GET['pagina'],date("Y-m-d"));
			$controller = $request ['sec'];
			@$model = @$request ['opcion'];
			@$pagina = @$request ['pagina'];
		}
		if ($model == null) {
			$model = 'listar';
		}
		$controller = str_replace ( '/', '', $controller );
		//		echo " - [($controller) ($model) ($pagina)]";
			$pagina = 'listar' . $controller;
		}
		//		$pagina = 'listar'.$controller;
		//		echo "-$ruta-";
			require_once $ruta;
			//			$clase = $controller.'List';
// 						echo "[$clase] {$model }";die();
			$object->$model ( $_REQUEST, $_SESSION );
		} else {
			//			echo " - [($controller) ($model) ($pagina)]";
			die ();
			$_SESSION ['msgError'] = "Ruta no encontrada";
			$ruta = APP . "cont/principal/listarerror.php";
			$ruta = APP . "cont/principal/error.php";
			require_once $ruta;
			$clase = 'principalError';
			$object = new $clase ();
			$object->listar ( $_REQUEST, $_SESSION );
			//			$this->setParameterPath ( 'test', 'josue' );						
	}
}
class Model extends Controller {
	function view($name, $data) {
		extract ( $data );
		include "app/view/" . $name . ".php";
	}
}
class Vista extends Controller {
}
// ------ Router & Loader ------
$action->main ( $_REQUEST, $_SESSION );
?>