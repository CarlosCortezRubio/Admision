<?php 
/** 
 * @file asignatura.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Asignatura 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD.'Asignatura.php');
require_once(MOD.'Enumerado.php');
require_once(MOD.'TipoEvaluac.php');
require_once(MOD.'TipoAsignatura.php');
require_once(MOD.'EdoRegistro.php');
class principalAsignatura extends Controller {
	private $opt;
	// Atributos de 
// private $idAsignatura;
// private $idTipoEvaluac;
// private $idTipoAsignatura;
// private $idEdoRegistro;
// private $codAsignatura;
// private $nomAsignatura;
// private $nomCortoAsignatura;
// private $pracLabAsignatura;
	function principalAsignatura(){
		parent::__construct ();		
		$this->campos = 'idAsignatura,idTipoEvaluac,idTipoAsignatura,idEdoRegistro,codAsignatura,nomAsignatura,nomCortoAsignatura,pracLabAsignatura';
		$this->modelo = 'Asignatura';
		$this->modulo = 'Asignatura';
		$this->setTemplateDir(TEMPLATE);
		$this->asignarConstantes();
		$this->setParameter( 'MOD', $this->modelo );
	}
	function listar($request,$session){
		$this->llamadoXajax ( 'Asignatura' );
		$this->setParameter ( 'etiquetaModulo', 'Listar' .' '. $this->modulo);
		$this->setParameterPath ( 'urlImp', 'base/Asignatura/imprimir' );
		$this->ver('listarAsignatura.tpl');
	}
	function guardar($request,$session){
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,$this->campos);
		$objAsignatura = new Asignatura ();
		$tablaResultado = $objAsignatura->agregarAsignatura($this->idAsignatura,$this->idTipoEvaluac,$this->idTipoAsignatura,$this->idEdoRegistro,$this->codAsignatura,$this->nomAsignatura,$this->nomCortoAsignatura,$this->pracLabAsignatura);
		$objAsignatura->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_INGRESAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_INGRESAR;
			$this->setParameter ( 'error', $error );
			$this->asignarParametrosError($request,'g',$this->modelo, 'guardar', '', $this->campos);
			$this->ver('Asignatura.tpl');
		}
	}
	function ingresar($request,$session ){
		$this->llamadoXajax ( 'Asignatura' );
		$opcion = $request ['opcion'];
		$this->inicializarCombos();		$this->asignarParametros($request,'g',$this->modelo,$opcion,null,null,null);
		$this->setParameterPath( 'urlImp', '' );
		$this->setParameter ( 'etiquetaModulo', 'Ingresar'. ' ' .$this->modulo);
		$this->ver('Asignatura.tpl');
	}
	function actualizar($request,$session){
		$this->inicializarAtributos($request,$this->campos);
		$objAsignatura = new Asignatura ();
		$tablaResultado = $objAsignatura->actualizarAsignatura($this->idAsignatura,$this->idTipoEvaluac,$this->idTipoAsignatura,$this->idEdoRegistro,$this->codAsignatura,$this->nomAsignatura,$this->nomCortoAsignatura,$this->pracLabAsignatura,$this->idAsignatura);
		$objAsignatura->cerrarConexion();
		if ($tablaResultado > 0) {
			$exito = Messages::EXITO_ACTUALIZAR;
			$this->setParameter ( 'exito', $exito );
			$this->setParameter ( 'opt', '' );
			$this->listar($request,$session);
		}else{
			$error = Messages::ERROR_ACTUALIZAR;
			$this->asignarParametrosError($request,'m',$this->modelo,'actualizar','',$this->campos);
			$this->setParameter( 'opt', 'mr' );
			$this->ver ( 'Asignatura.tpl' );
		}
	}
	function verEditar($request,$session,$opcionMod=false){
		$this->llamadoXajax ( 'Asignatura' );
		$opcion = $request ['opcion'];
		$this->inicializarAtributos($request,'id');
$this->inicializarCombos();		$objAsignatura = new Asignatura ();
		$tablaResultado = $objAsignatura->consultarAsignaturaXidAsignatura($this->id);
		$objAsignatura->cerrarConexion();
		if ($tablaResultado) {
		    $tablaResultado = $tablaResultado[0]; 
			if ($opcionMod) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verAsignatura.tpl', true );
			}else{
				$this->asignarParametros($request,'mr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Editar'. ' ' .$this->modulo);
				$this->ver('Asignatura.tpl');
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
		$objAsignatura = new Asignatura ();
		$arreglo_ids = explode(',', $ids);
		foreach ($arreglo_ids as $idAsignatura) {
			$tablaResultado = $objAsignatura->eliminarAsignatura($idAsignatura);
		}
		$objAsignatura->cerrarConexion();
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
			$this->setTemplateDir ( VISTA . 'Asignatura/' );
			$this->goForward ( $pagina );
		}else {
			$this->visualizar('Asignatura/'.$pagina);
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
		$objAsignatura = new Asignatura ();
		$tablaResultado = $objAsignatura->consultarAsignaturaXid($this->id);
		$objAsignatura->cerrarConexion();
		if ($tablaResultado) {
				$this->asignarParametros($request,'vr',$this->modelo,$opcion,null,$tablaResultado,$this->campos);
				$this->setParameter ( 'etiquetaModulo', 'Consultar'. ' ' .$this->modulo);
				$this->ver('verAsignatura.tpl',TRUE);
		}else{
//		$this->visualizar('principal/error.tpl');
		}
	}
	function datosTabla($request,$session){
        $encabezado = "<center><h1>Reporte de Total EdoRegistro / encuestas</h1></center>";
        $modulo = "Asignatura";
        $titModulo = "Asignatura";
        $campoClave = "idAsignatura";
        $etiquetas = array(
            "#",
            "Imp",
            "Ver",
            "Editar","Id Asignatura","Tipo Evaluación","Tipo Asignatura","Estado","Código","Nombre","Nombre Corto","Práctica Laboral"
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
            "obj_" . $imgEdi,"idAsignatura","idTipoEvaluac","idTipoAsignatura","idEdoRegistro","codAsignatura","nomAsignatura","nomCortoAsignatura","pracLabAsignatura"
        );
//         echo "$encabezado"; // Permite imprimir un titulo al grid
        // Imprime la cabecera de la tabla
        echo cabeceraDataTable($etiquetas);

        $objAsignatura = new Asignatura();
        $tablaResultado = $objAsignatura->consultarAsignatura(); // EDITABLE
        $objAsignatura->cerrarConexion();
        
        // Imprime el contenido de la tabla
        echo contenidoDataTable($campos, $tablaResultado, $campoClave);
	}
function inicializarCombos(){
		$objTipoEvaluac = new TipoEvaluac;
		$tablaTipoEvaluac = Enumerado::tabla2enumerado($objTipoEvaluac->consultarTipoEvaluac(),'1',0);
		$this->setParameter('tablaTipoEvaluac', $tablaTipoEvaluac);

		$objTipoEvaluac->cerrarConexion();
		$objTipoAsignatura = new TipoAsignatura;
		$tablaTipoAsignatura = Enumerado::tabla2enumerado($objTipoAsignatura->consultarTipoAsignatura(),'1',0);
		$this->setParameter('tablaTipoAsignatura', $tablaTipoAsignatura);

		$objTipoAsignatura->cerrarConexion();
		$objEdoRegistro = new EdoRegistro;
		$tablaEdoRegistro = Enumerado::tabla2enumerado($objEdoRegistro->consultarEdoRegistro(),'1',0);
		$this->setParameter('tablaEdoRegistro', $tablaEdoRegistro);

		$objEdoRegistro->cerrarConexion();
$tablaPracLabAsignatura = array(1=>"aaa",2=>"Subsuelo",3=>"Subsuelo"); 
$this->setParameter('tablaPracLabAsignatura', $tablaPracLabAsignatura);

}
}
?>