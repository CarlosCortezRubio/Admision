<?php 
/** 
 * @file penasig.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla PenAsig 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'PenAsig.php');
require_once(MOD.'Enumerado.php');
class principalPenAsig extends Controller {
	private $opt;
	// Atributos de 
// private $idPenAsig;
// private $idPensum;
// private $idAsignatura;
// private $idCiclo;
// private $creditoPenAsig;
// private $ihSemPenAsig;
// private $ihTotPenAsig;
// private $evalParaCerrarPenAsig;
	function principalPenAsig(){
		parent::__construct ();		
		$this->campos = 'idPenAsig,idPensum,idAsignatura,idCiclo,creditoPenAsig,ihSemPenAsig,ihTotPenAsig,evalParaCerrarPenAsig';
		$this->modelo = 'PenAsig';
		$this->modulo = 'PenAsig';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'PenAsig' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/PenAsig/imprimir' );
		$this->ver('listarPenAsig.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objPenAsig = new PenAsig ();
		$tablaResultado = $objPenAsig->agregarPenAsig($this->idPenAsig,$this->idPensum,$this->idAsignatura,$this->idCiclo,$this->creditoPenAsig,$this->ihSemPenAsig,$this->ihTotPenAsig,$this->evalParaCerrarPenAsig);
		$objPenAsig->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('PenAsig.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'PenAsig' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('PenAsig.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objPenAsig = new PenAsig ();
		$tablaResultado = $objPenAsig->actualizarPenAsig($this->idPenAsig,$this->idPensum,$this->idAsignatura,$this->idCiclo,$this->creditoPenAsig,$this->ihSemPenAsig,$this->ihTotPenAsig,$this->evalParaCerrarPenAsig,$this->idPenAsig);
		$objPenAsig->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'PenAsig.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'PenAsig' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objPenAsig = new PenAsig ();
		$tablaResultado = $objPenAsig->consultarPenAsigXidPenAsig($this->id);
		$objPenAsig->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPenAsig.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('PenAsig.tpl');
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
		$objPenAsig = new PenAsig ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idPenAsig) {
			$tablaResultado = $objPenAsig->eliminarPenAsig($idPenAsig);
		}
		$objPenAsig->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'PenAsig/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('PenAsig/'.$pagina);
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
		$objPenAsig = new PenAsig ();
		$tablaResultado = $objPenAsig->consultarPenAsigXid($this->id);
		$objPenAsig->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verPenAsig.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "PenAsig";
        $titModulo = "PenAsig";
        $campoClave = "idPenAsig";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id PenAsig","IdPensum PenAsig","IdAsignatura PenAsig","IdCiclo PenAsig","Credito PenAsig","IhSem PenAsig","IhTot PenAsig","EvalParaCerrar PenAsig"
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
            "obj_" . $imgEdi,"idPenAsig","idPensum","idAsignatura","idCiclo","creditoPenAsig","ihSemPenAsig","ihTotPenAsig","evalParaCerrarPenAsig"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objPenAsig = new PenAsig();
        $tablaResultado = $objPenAsig->consultarPenAsig(); // EDITABLE
        $objPenAsig->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>