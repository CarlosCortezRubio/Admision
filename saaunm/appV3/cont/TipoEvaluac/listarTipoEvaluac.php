<?php 
/** 
 * @file tipoevaluac.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 20/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoEvaluac.php');
require_once(MOD.'Enumerado.php');
class principalTipoEvaluac extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoEvaluac;
// private $nomTipoEvaluac;
	function principalTipoEvaluac(){
		parent::__construct ();		
		$this->campos = 'idTipoEvaluac,nomTipoEvaluac';
		$this->modelo = 'TipoEvaluac';
		$this->modulo = 'TipoEvaluac';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoEvaluac' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoEvaluac/imprimir' );
		$this->ver('listarTipoEvaluac.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoEvaluac = new TipoEvaluac ();
		$tablaResultado = $objTipoEvaluac->agregarTipoEvaluac($this->idTipoEvaluac,$this->nomTipoEvaluac);
		$objTipoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoEvaluac.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoEvaluac' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoEvaluac.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoEvaluac = new TipoEvaluac ();
		$tablaResultado = $objTipoEvaluac->actualizarTipoEvaluac($this->idTipoEvaluac,$this->nomTipoEvaluac,$this->idTipoEvaluac);
		$objTipoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoEvaluac.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoEvaluac' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoEvaluac = new TipoEvaluac ();
		$tablaResultado = $objTipoEvaluac->consultarTipoEvaluacXidTipoEvaluac($this->id);
		$objTipoEvaluac->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoEvaluac.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoEvaluac.tpl');
			}
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function consultar($request,$session){
		$this->verEditar($request,$session,true);
	}
	function eliminar($request,$session){
		$tablaResultado = false;
		$ids = $request['ids'];
		if ($ids == null || $ids == '') {
			return 0;
		}
		$objTipoEvaluac = new TipoEvaluac ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idTipoEvaluac) {
			$tablaResultado = $objTipoEvaluac->eliminarTipoEvaluac($idTipoEvaluac);
		}
		$objTipoEvaluac->cerrarConexion();
		if ($tablaResultado) {
			$exito = Messages::EXITO_ELIMINAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ELIMINAR;
			$this->setParameter ( 'error', $error );
			$this->listar($request,$session);
		}
	}
	function cancelar($request,$session){
		$this->listar($request,$session);
	}
	function home($request,$session){
		$this->verEditar('../principal/principal.php');
	}
function ver($pagina, $formatoImpresion = false){
		if($formatoImpresion) {
			$this->setTemplateDir ( VISTA . 'TipoEvaluac/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoEvaluac/'.$pagina);
		}
	}
	function imprimir($request,$session){
		$mod = ucfirst ( @$request ['sec'] );
		$opt = '';
		if (isset ( $request ['id'] )) {
			$opt = $request ['id'];
		}
		$cad = trim ( 'imp' . $mod . '.php' );
		include $cad;
	}
	function ventanaConsultar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoEvaluac = new TipoEvaluac ();
		$tablaResultado = $objTipoEvaluac->consultarTipoEvaluacXid($this->id);
		$objTipoEvaluac->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoEvaluac.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "TipoEvaluac";
        $titModulo = "TipoEvaluac";
        $campoClave = "idTipoEvaluac";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id","Nombre"
        );
        $imgImp = "<a href='$modulo/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
        $vntUrl = '\"'.$modulo.'/consultar/\$campoClave\"';
        $vntTitulo = '\"Consultar '.$titModulo.'\"';
        $imgVer = "<img class='classHand' onclick='vntConsultar($vntUrl,$vntTitulo)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
        $imgEdi = "<a href='" . URLSIST . "base/" . "$modulo/verEditar/\$campoClave' target='_self'><img src='" . PUB_URL . "img/grid/editar.png' title='Editar' border='0px'/></a>";

        $campos = array(
            "obj_num",
            "obj_" . $imgImp,
            "obj_" . $imgVer,
            "obj_" . $imgEdi,"idTipoEvaluac","nomTipoEvaluac"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objTipoEvaluac = new TipoEvaluac();
        $tablaResultado = $objTipoEvaluac->consultarTipoEvaluac(); // EDITABLE
        $objTipoEvaluac->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>