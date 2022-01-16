<?php 
/** 
 * @file estcur.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla EstCur 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'EstCur.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'Curso.php');
require_once(MOD.'Estudiante.php');
class principalEstCur extends Controller {
	private $opt;
	// Atributos de 
// private $idEstCur;
// private $idCurso;
// private $idEstudiante;
// private $notaEstCur;
// private $inasistEstCur;
// private $obsEstCur;
	function principalEstCur(){
		parent::__construct ();		
		$this->campos = 'idEstCur,idCurso,idEstudiante,notaEstCur,inasistEstCur,obsEstCur';
		$this->modelo = 'EstCur';
		$this->modulo = 'EstCur';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'EstCur' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/EstCur/imprimir' );
		$this->ver('listarEstCur.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objEstCur = new EstCur ();
		$tablaResultado = $objEstCur->agregarEstCur($this->idEstCur,$this->idCurso,$this->idEstudiante,$this->notaEstCur,$this->inasistEstCur,$this->obsEstCur);
		$objEstCur->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('EstCur.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'EstCur' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('EstCur.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objEstCur = new EstCur ();
		$tablaResultado = $objEstCur->actualizarEstCur($this->idEstCur,$this->idCurso,$this->idEstudiante,$this->notaEstCur,$this->inasistEstCur,$this->obsEstCur,$this->idEstCur);
		$objEstCur->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'EstCur.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'EstCur' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objEstCur = new EstCur ();
		$tablaResultado = $objEstCur->consultarEstCurXidEstCur($this->id);
		$objEstCur->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstCur.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('EstCur.tpl');
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
		$objEstCur = new EstCur ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idEstCur) {
			$tablaResultado = $objEstCur->eliminarEstCur($idEstCur);
		}
		$objEstCur->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'EstCur/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('EstCur/'.$pagina);
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
		$objEstCur = new EstCur ();
		$tablaResultado = $objEstCur->consultarEstCurXid($this->id);
		$objEstCur->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verEstCur.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "EstCur";
        $titModulo = "EstCur";
        $campoClave = "idEstCur";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id EstCur","Curso","Estudiante","Calificación","Inasistencias","Obsservaciones"
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
            "obj_" . $imgEdi,"idEstCur","idCurso","idEstudiante","notaEstCur","inasistEstCur","obsEstCur"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objEstCur = new EstCur();
        $tablaResultado = $objEstCur->consultarEstCur(); // EDITABLE
        $objEstCur->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
function inicializarCombos(){
		$objCurso = new Curso;
		$tablaCurso = Enumerado::tabla2enumerado($objCurso->consultarCurso(),'1',0);
		$this->setParameter('tablaCurso', $tablaCurso);

		$objCurso->cerrarConexion();
		$objEstudiante = new Estudiante;
		$tablaEstudiante = Enumerado::tabla2enumerado($objEstudiante->consultarEstudiante(),'1',0);
		$this->setParameter('tablaEstudiante', $tablaEstudiante);

		$objEstudiante->cerrarConexion();
}
}
?>