<?php 
/** 
 * @file ctoevaluac.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla CtoEvaluac 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'CtoEvaluac.php');
require_once(MOD.'Enumerado.php');
class principalCtoEvaluac extends Controller {
	private $opt;
	// Atributos de 
// private $idCtoEvaluac;
// private $idCurso;
// private $nomCtoEvaluac;
// private $descCtoEvaluac;
// private $numEvaCtoEvaluac;
	function principalCtoEvaluac(){
		parent::__construct ();		
		$this->campos = 'idCtoEvaluac,idCurso,nomCtoEvaluac,descCtoEvaluac,numEvaCtoEvaluac';
		$this->modelo = 'CtoEvaluac';
		$this->modulo = 'CtoEvaluac';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'CtoEvaluac' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/CtoEvaluac/imprimir' );
		$this->ver('listarCtoEvaluac.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objCtoEvaluac = new CtoEvaluac ();
		$tablaResultado = $objCtoEvaluac->agregarCtoEvaluac($this->idCtoEvaluac,$this->idCurso,$this->nomCtoEvaluac,$this->descCtoEvaluac,$this->numEvaCtoEvaluac);
		$objCtoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('CtoEvaluac.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'CtoEvaluac' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('CtoEvaluac.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objCtoEvaluac = new CtoEvaluac ();
		$tablaResultado = $objCtoEvaluac->actualizarCtoEvaluac($this->idCtoEvaluac,$this->idCurso,$this->nomCtoEvaluac,$this->descCtoEvaluac,$this->numEvaCtoEvaluac,$this->idCtoEvaluac);
		$objCtoEvaluac->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'CtoEvaluac.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'CtoEvaluac' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objCtoEvaluac = new CtoEvaluac ();
		$tablaResultado = $objCtoEvaluac->consultarCtoEvaluacXidCtoEvaluac($this->id);
		$objCtoEvaluac->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verCtoEvaluac.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('CtoEvaluac.tpl');
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
		$objCtoEvaluac = new CtoEvaluac ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idCtoEvaluac) {
			$tablaResultado = $objCtoEvaluac->eliminarCtoEvaluac($idCtoEvaluac);
		}
		$objCtoEvaluac->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'CtoEvaluac/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('CtoEvaluac/'.$pagina);
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
		$objCtoEvaluac = new CtoEvaluac ();
		$tablaResultado = $objCtoEvaluac->consultarCtoEvaluacXid($this->id);
		$objCtoEvaluac->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verCtoEvaluac.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "CtoEvaluac";
        $titModulo = "CtoEvaluac";
        $campoClave = "idCtoEvaluac";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id CtoEvaluac","IdCurso CtoEvaluac","Nom CtoEvaluac","Desc CtoEvaluac","NumEva CtoEvaluac"
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
            "obj_" . $imgEdi,"idCtoEvaluac","idCurso","nomCtoEvaluac","descCtoEvaluac","numEvaCtoEvaluac"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objCtoEvaluac = new CtoEvaluac();
        $tablaResultado = $objCtoEvaluac->consultarCtoEvaluac(); // EDITABLE
        $objCtoEvaluac->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>