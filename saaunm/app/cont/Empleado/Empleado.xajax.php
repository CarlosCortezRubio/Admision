<?php
/** 
 * @file empleado.xajax.php 
 *  
 * Xajax de la Tabla Empleado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 28/07/2021
 *  
*/ 
require_once('../../../config/config.php');
require_once(MOD . 'Empleado.php');
require_once(MOD .'Enumerado.php');
require_once(MOD .'Pdf.php');
require_once(APP .'comun/grid.php');
$action = new Action ();
$arrayFunciones = Array ("llenarGridEmpleado", "clickEmpleado", "buscarPersona");
if (! isset ( $xajax )) {
$action->iniciarXajax ( $arrayFunciones );
} else {
	
$action->cargarFunciones ( $arrayFunciones,$xajax );
}


function llenarGridEmpleado($campoBusqueda,$indice){
	global $objResponse;
	$objResponse = new xajaxResponse ();
		$nomPagina = 'Empleado'; // EDITABLE
		$resultado = null;
		$numPag = 0;
		$paginas = '';
		try {
			$objEmpleado = new Empleado();
		if ($campoBusqueda != '') {
		$resultado = $objEmpleado->consultarEmpleadoXparam ($campoBusqueda ); // EDITABLE
		} else {
		$resultado = $objEmpleado->consultarEmpleadoGrid (); // EDITABLE
		}
			$objEmpleado->cerrarConexion (); // EDITABLE 
			/* INICIO PAGINACION */ 
			$action = new Action();			
			$numPag = $action->getPageNumbers($resultado);
			if ($resultado != null) {
				$cantReg = count($resultado);
			}else{
				$cantReg = 0;
			}
			$numPag = $action->getPageNumbers($resultado);
			if ($numPag > 1) {
				$matRes = $action->paginado ( $objResponse, $numPag, $indice, 'xajax_llenarGridEmpleado', $campoBusqueda, $paginas, $resultado );
				$paginas = $matRes [0];
				$cad1 = $matRes [1];
				$cad2 = $matRes [2];
				$cad3 = $matRes [3];
				$resultado = $action->getPage ( $resultado, $indice );
				if ($indice == 0) {
				$indice = 1;
				}
				$paginas = "$cad1 $paginas $cad2  $cad3";
			$objResponse->assign('paginacion','innerHTML',$paginas,'');
			$objResponse->assign('paginacion1','innerHTML',$paginas,'');
			} else {
				$objResponse->assign('paginacion','innerHTML','','');
				$objResponse->assign('paginacion1','innerHTML','','');
			}
			/* FIN PAGINACION */ 
			//$etiquetas = array('','Imp','Ver','Editar','Id','IdPersona','Situacion','Tipo Regitro','Seguro Salud','Tipo Planilla','Cod Fiscal','AFP','Codigo Regional','Uni. Ejecutora','N.E.C','Nivel','Establecimiento','Regimen Laboral','Tipo Servidor','Num Mag.','G. Remunerativo','IdhatEmb','Cargo de Origen','Nivel. Origen','IdPalMagist','Dir. Encargo','Cod. Modular','Fecha Ingre Adm.Publico','FecIngMed','Fecha de Cese','InfComp','FecHab','Fecha Des','FecFall','ValPor','FecVal','DocRef','Numero de Segudo de Salud','EVida','CUSPP','Fecha de Afiliacion de Pens.','FecDevPen','Plaza','Tipo Plaza','AsigInser','Dias Trabajados','Núm. Dependientes','Numero de Decimas','Licencia Días.','Tipo Servicio','Fecha Inicio Licen.','Insasitencias','Permisos','Huelgas','Leyenda Mensual','Leyenda Permanente','Cadena Presupuestal','Cuenta');
// 			$etiquetas = array('','Imp','Ver','Editar','Id','Documento','Primer Nombre','Segundo Nombre','Apellido Paterno','Apellido Materno','Fecha Nacimiento','Telefono Cel.');
			$etiquetas = array('Imp','Ver','Id','Documento','Primer Nombre','Segundo Nombre','Apellido Paterno','Apellido Materno','Fecha Nacimiento','Telefono Cel.');
		
			if ($resultado!=null) {
			$objResponse->call("document.getElementById('cantReg').innerHTML='$cantReg'");
			$objResponse->assign('cantReg', 'innerHTML', "Cantidad de registros: $cantReg", '');
			$chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
			$img = "<img class='classHand' onclick='xajax_clickEmpleado(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
			$img1 = crearObjImagen ( $nomPagina, 'edi' );
			$img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
// 			$campos = array('obj_' . $chk, 'obj_' . $img3,'obj_' . $img, 'obj_' . $img1,'idEmpleado','dniPersona','nom1Persona','nom2Persona','ape1Persona','ape2Persona','fecNacPersona');
			$campos = array('obj_' . $img3,'obj_' . $img, 'idEmpleado','dniPersona','nom1Persona','nom2Persona','ape1Persona','ape2Persona','fecNacPersona');
			llenar_grid($objResponse,'gridEmpleado',$etiquetas,$resultado,$campos,'idEmpleado',false);
			$msg='';
		}
		else
		{
			limpiar_grid ( $objResponse, 'gridEmpleado', $etiquetas );
			//$msg='No se encontraron registros, con las caracteristicas definidas por el usuario';
			//$objResponse->call ("ventanaAlerta('$msg','Alerta')");

			$objResponse->call("Swal.fire(
				'Busqueda...',
				'No se encontraron registros, con las caracteristicas definidas por el usuario',
				'error'
			)");





		}
} catch ( exception $e ) {
	$objResponse->call ( "ventanaAlerta('Error de conexion','Alerta')" );
	return $objResponse;
}
	return $objResponse;
}


function clickEmpleado($id,$ind){
	global $objResponse;
	$objResponse = new xajaxResponse ();
	switch ($ind) {
		case 1 :
			$objResponse->script ( "vntConsultar('Empleado/consultar/$id', 'Consultar Empleado');" );
			break;
		case 2 :
			
		;
		break;
	}
	return $objResponse;
}


function buscarPersona($id){
		global $objResponse;
		$objResponse = new xajaxResponse ();
		
		
		if(empty(trim($id))){
			//$msg = "Por favor ingrese Nº Dni de la Persona.";
			//$objResponse->call("ventanaAlerta('$msg','Alerta')");

			$objResponse->call("Swal.fire(
				'Busqueda...',
				'Por favor ingrese Nº Dni de la Persona.',
				'info'
			)");
			
			$objResponse->script ( "document.getElementById('dniPersona').value = '';" );
			
		}else{
			

			$rs = new Persona ();
			// $emp = new Empleado ();
			$tabla = $rs->consultarPersonaXdniPersona ($id);
			// $tabla2 = $emp->consultarEmpleadoXDni($id);

			

			$rs->cerrarConexion ();
			$objResponse->script("document.getElementById('addPersona').type = 'hidden';");
		// if ($tabla > 0 and $tabla2 > 0) {
		if ($tabla > 0) {
		
			$objResponse->script("document.getElementById('addPersona').type = 'hidden';");
			$idPersona = $tabla [0] ['idPersona'];
			$dniPersona =  $tabla [0] ['dniPersona'];
			$nom1Persona =  $tabla [0] ['nom1Persona'];
			$ape1Persona =  $tabla [0] ['ape1Persona'];
		//	$idEmpleado =  $tabla2 [0] ['idEmpleado'];//esta comente
				//$msg = "Persona Encontrada";
				// $objResponse->call ( "ventanaAlerta('$msg','Alerta')" );

				$objResponse->call(`Swal.fire(
					'Busqueda',
					'Persona Encontrada',
					'error'
				)`);
			
				$objResponse->script ( "document.getElementById('idPersona').value = '$idPersona';" );
				$objResponse->script ( "document.getElementById('dniPersona').value = '$dniPersona';" );
				$objResponse->script ( "document.getElementById('nom1Persona').value = '$nom1Persona';" );
				$objResponse->script ( "document.getElementById('ape1Persona').value = '$ape1Persona';" );
				//$objResponse->script ( "document.getElementById('codModular').value = '$idEmpleado'.concat('$dniPersona');" );//esta comente
						
			}else{
						
				//$objResponse->call ( "ventanaAlerta('Persona No Existe','Alerta')" );

				$objResponse->call(`Swal.fire(
					'Busqueda',
					'Persona No Existe',
					'error'
				)`);
				
				$objResponse->script("document.getElementById('addPersona').type = 'visible';");
				$objResponse->script ( "document.getElementById('idPersona').value = '';" );
				$objResponse->script ( "document.getElementById('dniPersona').value = '';" );
				$objResponse->script ( "document.getElementById('nom1Persona').value = '';" );
				$objResponse->script ( "document.getElementById('ape1Persona').value = '';" );
			}
		}
		
		return  $objResponse;
}

?>
