<?php 
/** 
 * @file tiposolicitud.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla TipoSolicitud 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'TipoSolicitud.php');
require_once(MOD.'Enumerado.php');
class principalTipoSolicitud extends Controller {
	private $opt;
	// Atributos de 
// private $idTipoSolicitud;
// private $solTipoSolicitud;
// private $fecIniTipoSolicitud;
// private $segTipoSolicitud;
	function principalTipoSolicitud(){
		parent::__construct ();		
		$this->campos = 'idTipoSolicitud,solTipoSolicitud,fecIniTipoSolicitud,segTipoSolicitud';
		$this->modelo = 'TipoSolicitud';
		$this->modulo = 'TipoSolicitud';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'TipoSolicitud' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/TipoSolicitud/imprimir' );
		$this->ver('listarTipoSolicitud.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objTipoSolicitud = new TipoSolicitud ();
		$tablaResultado = $objTipoSolicitud->agregarTipoSolicitud($this->idTipoSolicitud,$this->solTipoSolicitud,$this->fecIniTipoSolicitud,$this->segTipoSolicitud);
		$objTipoSolicitud->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('TipoSolicitud.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'TipoSolicitud' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('TipoSolicitud.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objTipoSolicitud = new TipoSolicitud ();
		$tablaResultado = $objTipoSolicitud->actualizarTipoSolicitud($this->idTipoSolicitud,$this->solTipoSolicitud,$this->fecIniTipoSolicitud,$this->segTipoSolicitud,$this->idTipoSolicitud);
		$objTipoSolicitud->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'TipoSolicitud.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'TipoSolicitud' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objTipoSolicitud = new TipoSolicitud ();
		$tablaResultado = $objTipoSolicitud->consultarTipoSolicitudXidTipoSolicitud($this->id);
		$objTipoSolicitud->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoSolicitud.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('TipoSolicitud.tpl');
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
		$objTipoSolicitud = new TipoSolicitud ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idTipoSolicitud) {
			$tablaResultado = $objTipoSolicitud->eliminarTipoSolicitud($idTipoSolicitud);
		}
		$objTipoSolicitud->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'TipoSolicitud/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('TipoSolicitud/'.$pagina);
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
		$objTipoSolicitud = new TipoSolicitud ();
		$tablaResultado = $objTipoSolicitud->consultarTipoSolicitudXid($this->id);
		$objTipoSolicitud->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verTipoSolicitud.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "TipoSolicitud";
        $titModulo = "TipoSolicitud";
        $campoClave = "idTipoSolicitud";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id TipoSolicitud","Sol TipoSolicitud","FecIni TipoSolicitud","Seg TipoSolicitud"
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
            "obj_" . $imgEdi,"idTipoSolicitud","solTipoSolicitud","fecIniTipoSolicitud","segTipoSolicitud"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objTipoSolicitud = new TipoSolicitud();
        $tablaResultado = $objTipoSolicitud->consultarTipoSolicitud(); // EDITABLE
        $objTipoSolicitud->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>