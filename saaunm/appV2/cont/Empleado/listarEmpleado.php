<?php 
/** 
 * @file empleado.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Empleado.php');
require_once(MOD.'Enumerado.php');
class principalEmpleado extends Controller {
	private $opt;
	// Atributos de 
// private $idEmpleado;
// private $idPersona;
	function principalEmpleado(){
		parent::__construct ();		
		$this->campos = 'idEmpleado,idPersona';
		$this->modelo = 'Empleado';
		$this->modulo = 'Empleado';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Empleado' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Empleado/imprimir' );
		$this->ver('listarEmpleado.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->agregarEmpleado($this->idEmpleado,$this->idPersona);
		$objEmpleado->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Empleado.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Empleado' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Empleado.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->actualizarEmpleado($this->idEmpleado,$this->idPersona,$this->idEmpleado);
		$objEmpleado->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Empleado.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Empleado' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->consultarEmpleadoXidEmpleado($this->id);
		$objEmpleado->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEmpleado.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Empleado.tpl');
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
		$objEmpleado = new Empleado ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idEmpleado) {
			$tablaResultado = $objEmpleado->eliminarEmpleado($idEmpleado);
		}
		$objEmpleado->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Empleado/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Empleado/'.$pagina);
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
		$objEmpleado = new Empleado ();
		$tablaResultado = $objEmpleado->consultarEmpleadoXid($this->id);
		$objEmpleado->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEmpleado.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "Empleado";
        $titModulo = "Empleado";
        $campoClave = "idEmpleado";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id Empleado","IdPersona Empleado"
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
            "obj_" . $imgEdi,"idEmpleado","idPersona"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objEmpleado = new Empleado();
        $tablaResultado = $objEmpleado->consultarEmpleado(); // EDITABLE
        $objEmpleado->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>