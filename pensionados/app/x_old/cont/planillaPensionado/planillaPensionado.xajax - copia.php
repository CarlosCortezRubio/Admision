<?php
/** 
 * @file planillapensionado.xajax.php 
 *  
 * Xajax de la Tabla PlanillaPensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridPlanillaPensionado",
    "clickPlanillaPensionado",
    "vntActClave",
    "buscarDocente"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridPlanillaPensionado($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'planillaPensionado'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPlanillaPensionado = new PlanillaPensionado();
        if ($campoBusqueda != '') {
            $resultado = $objPlanillaPensionado->consultarPlanillaPensionadoX_ESPECIFICAR_METODO($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPlanillaPensionado->consultarPlanillaPensionado(); // EDITABLE
        }
        $objPlanillaPensionado->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPlanillaPensionado', $campoBusqueda, $paginas, $resultado);
            $paginas = $matRes[0];
            $cad1 = $matRes[1];
            $cad2 = $matRes[2];
            $cad3 = $matRes[3];
            $resultado = $action->getPage($resultado, $indice);
            if ($indice == 0) {
                $indice = 1;
            }
            $paginas = "$cad1 $paginas $cad2  $cad3";
            $objResponse->assign('paginacion', 'innerHTML', $paginas, '');
            $objResponse->assign('paginacion1', 'innerHTML', $paginas, '');
        } else {
            $objResponse->assign('paginacion', 'innerHTML', '', '');
            $objResponse->assign('paginacion1', 'innerHTML', '', '');
        }
        /* FIN PAGINACION */
//         $etiquetas = array(
//             '',
//             'Imp',
//             'Ver',
//             'Editar',
//             'Id',
//             'IdPersona',
//             'IdPeriodo',
//             'Fec'
//         );
        $etiquetas = array('','Boletas','Planillas','Editar','Año','Mes','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','T imp','T haber','T desc.','T liquido');
        if ($resultado != null) {
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPlanillaPensionado(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $campos = array(
                'obj_' . $chk,
                'obj_' . $img3,
                'obj_' . $img,
                'obj_' . $img1,
                'idplanillaPensionado',
                'idPersona',
                'idPeriodo',
                'fecplanillaPensionado'
            );
            llenar_grid($objResponse, 'gridPlanillaPensionado', $etiquetas, $resultado, $campos, 'idPlanillaPensionado', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPlanillaPensionado', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}
function buscarDocente($campoBusqueda)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Persona'; // EDITABLE
    $resultado = null;
    try {
        $objPersona = new Persona();
        if ($campoBusqueda != '') {
            $resultado = $objPersona->consultarPersonaXdocPersona($campoBusqueda); // EDITABLE
        }
        if ($resultado != null) {
            $resultado = $resultado[0];
//                         dump($resultado);
            $ape = $resultado['nom1Persona'];
            $fecNac = $resultado['fecNacPersona'];
            $genero = $resultado['idGenero'];
            $planilla = $resultado['planillaPersona'];
            $tipoReg = $resultado['tipRegPersona'];
            $resPen = $resultado['resPenDefPersona'];
            $aPartir = $resultado['fecRes'];
            $banco = $resultado['idBanco'];
            $ctaBancaria = $resultado['ctaBancoPersona'];
            $fuente = $resultado['fntFinancPersona'];
            $planilla2 = $resultado['planilla2Persona'];
            
            $objResponse->call("jQuery('#apellidos_y_nombresPersona').val('$ape')");
            $objResponse->call("jQuery('#fecha_de_nacimientoPersona').val('$fecNac')");
            $objResponse->call("jQuery('#sexoPersona').val('$genero')");
            $objResponse->call("jQuery('#planillaPersona').val('$planilla')");
            $objResponse->call("jQuery('#tipo_de_regimenPersona').val('$tipoReg')");
            $objResponse->call("jQuery('#resolucion_de_pension_definitivaPersona').val('$resPen')");
            $objResponse->call("jQuery('#a_partir_dePersona').val('$aPartir')");
            $objResponse->call("jQuery('#bancoPersona').val('$banco')");
            $objResponse->call("jQuery('#cuenta_bancariaPersona').val('$ctaBancaria')");
            $objResponse->call("jQuery('#fuente_de_financiamientoPersona').val('$fuente')");
            $objResponse->call("jQuery('#planilla2Persona').val('$planilla2')");
        } else {
            $objResponse->call("jQuery('#apellidos_y_nombresPersona').val('')");
            $objResponse->call("jQuery('#fecha_de_nacimientoPersona').val('')");
            $objResponse->call("jQuery('#sexoPersona').val('')");
            $objResponse->call("jQuery('#planillaPersona').val('')");
            $objResponse->call("jQuery('#tipo_de_regimenPersona').val('')");
            $objResponse->call("jQuery('#resolucion_de_pension_definitivaPersona').val('')");
            $objResponse->call("jQuery('#a_partir_dePersona').val('')");
            $objResponse->call("jQuery('#bancoPersona').val('')");
            $objResponse->call("jQuery('#cuenta_bancariaPersona').val('')");
            $objResponse->call("jQuery('#fuente_de_financiamientoPersona').val('')");
            $objResponse->call("jQuery('#planilla2Persona').val('')");
            $msg = 'No se encontró información asociada a ese DNI';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickPlanillaPensionado($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('planillaPensionado/consultar/$id', 'Consultar PlanillaPensionado');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>
