<?php 
/** 
 * @file diccionario.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Diccionario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Diccionario.php');
require_once(MOD.'Enumerado.php');
class principalDiccionario extends Controller {
	private $opt;
	// Atributos de 
// private $diccionarioid;
// private $nombretabla;
// private $nombremsgtabla;
// private $generotabla;
// private $nombrecampo;
// private $nombrecortocampo;
// private $descripcioncampo;
// private $tipocampo;
// private $tamcampo;
// private $ordencampo;
// private $precisioncampo;
// private $dominio;
// private $cjtovalores;
// private $archivosec;
// private $ncolumnas;
// private $colenlace;
// private $campoact;
// private $sqlgrid;
// private $camposbusqueda;
// private $campoconsulta;
// private $campovalido;
// private $crearmetodo;
	function principalDiccionario(){
		parent::__construct ();		
		$this->campos = 'diccionarioid,nombretabla,nombremsgtabla,generotabla,nombrecampo,nombrecortocampo,descripcioncampo,tipocampo,tamcampo,ordencampo,precisioncampo,dominio,cjtovalores,archivosec,ncolumnas,colenlace,campoact,sqlgrid,camposbusqueda,campoconsulta,campovalido,crearmetodo';
		$this->modelo = 'diccionario';
		$this->modulo = 'Diccionario';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'diccionario' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/diccionario/imprimir' );
		$this->ver('listardiccionario.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objDiccionario = new Diccionario ();
		$tablaResultado = $objDiccionario->agregarDiccionario($this->diccionarioid,$this->nombretabla,$this->nombremsgtabla,$this->generotabla,$this->nombrecampo,$this->nombrecortocampo,$this->descripcioncampo,$this->tipocampo,$this->tamcampo,$this->ordencampo,$this->precisioncampo,$this->dominio,$this->cjtovalores,$this->archivosec,$this->ncolumnas,$this->colenlace,$this->campoact,$this->sqlgrid,$this->camposbusqueda,$this->campoconsulta,$this->campovalido,$this->crearmetodo);
		$objDiccionario->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('diccionario.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'diccionario' );
		$opcion = $request ['opcion'];
		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('diccionario.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objDiccionario = new Diccionario ();
		$tablaResultado = $objDiccionario->actualizarDiccionario($this->diccionarioid,$this->nombretabla,$this->nombremsgtabla,$this->generotabla,$this->nombrecampo,$this->nombrecortocampo,$this->descripcioncampo,$this->tipocampo,$this->tamcampo,$this->ordencampo,$this->precisioncampo,$this->dominio,$this->cjtovalores,$this->archivosec,$this->ncolumnas,$this->colenlace,$this->campoact,$this->sqlgrid,$this->camposbusqueda,$this->campoconsulta,$this->campovalido,$this->crearmetodo,$this->iddiccionario);
		$objDiccionario->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'diccionario.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'diccionario' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
		$objDiccionario = new Diccionario ();
		$tablaResultado = $objDiccionario->consultarDiccionarioXiddiccionario($this->id);
		$objDiccionario->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verdiccionario.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('diccionario.tpl');
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
		$objDiccionario = new Diccionario ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $iddiccionario) {
			$tablaResultado = $objDiccionario->eliminarDiccionario($iddiccionario);
		}
		$objDiccionario->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'diccionario/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('diccionario/'.$pagina);
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
		$objDiccionario = new Diccionario ();
		$tablaResultado = $objDiccionario->consultarDiccionarioXid($this->id);
		$objDiccionario->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verdiccionario.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "Diccionario";
        $titModulo = "Diccionario";
        $campoClave = "idDiccionario";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id diccionario","Nombretabla diccionario","Nombremsgtabla diccionario","Generotabla diccionario","Nombrecampo diccionario","Nombrecortocampo diccionario","Descripcioncampo diccionario","Tipocampo diccionario","Tamcampo diccionario","Ordencampo diccionario","Precisioncampo diccionario","Dominio diccionario","Cjtovalores diccionario","Archivosec diccionario","Ncolumnas diccionario","Colenlace diccionario","Campoact diccionario","Sqlgrid diccionario","Camposbusqueda diccionario","Campoconsulta diccionario","Campovalido diccionario","Crearmetodo diccionario"
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
            "obj_" . $imgEdi,"diccionarioid","nombretabla","nombremsgtabla","generotabla","nombrecampo","nombrecortocampo","descripcioncampo","tipocampo","tamcampo","ordencampo","precisioncampo","dominio","cjtovalores","archivosec","ncolumnas","colenlace","campoact","sqlgrid","camposbusqueda","campoconsulta","campovalido","crearmetodo"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objDiccionario = new Diccionario();
        $tablaResultado = $objDiccionario->consultarDiccionario(); // EDITABLE
        $objDiccionario->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
}
?>