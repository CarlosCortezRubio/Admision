<?php
/** 
 * @file planpens.xajax.php 
 *  
 * Xajax de la Tabla PlanPens 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridPlanPens",
    "llenarGridPlanPensNom",
    "clickPlanPens",
    "vntActClave",
    "buscarDocente"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridPlanPens($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'PlanPens'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
//     $objResponse->call("ventanaAlerta('$campoBusqueda','Alerta')");
//     return $objResponse;
    try {
        $objPlanPens = new PlanPens();
        if ($campoBusqueda != '') {
            $resultado = $objPlanPens->consultarPlanPensXparam($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPlanPens->consultarPlanPens(); // EDITABLE
        }
        $objPlanPens->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($resultado != null) {
        $cantReg = count($resultado);
        }else{
            $cantReg = 0;
        }
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPlanPens', $campoBusqueda, $paginas, $resultado);
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
        //('|Imp|Ver|Editar|Id|Dni|Apellidos y nombres|Planilla|Tipo de regimen|Resolución de pensioón definitiva|A partir de')
//         $etiquetas = array('','Boletas','Pensiones','Editar','Año','Mes','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','A partir de'
        $etiquetas = array('','Boletas','Planillas','Editar','Año','Mes','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','T imp','T haber','T desc.','T liquido');
        if ($resultado != null) {
            $objResponse->call("document.getElementById('cantReg').innerHTML='$cantReg'");
            $objResponse->assign('cantReg', 'innerHTML', "Cantidad de registros: $cantReg", '');
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPlanPens(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
// 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','fecha_de_nacimientoPlanPens','sexoPlanPens','codigo_modularPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens','bancoPlanPens','cuenta_bancariaPlanPens','fuente_de_financiamientoPlanPens','planilla2PlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens','aguinaldoPlanPens','basicaPlanPens','bonif_personalPlanPens','ael25671PlanPens','aeds081PlanPens','tphPlanPens','bonif_familiarPlanPens','du080_04PlanPens','refrig_y_moviPlanPens','du90_96PlanPens','ds19_94_pcmPlanPens','ds21_92_pcmPlanPens','bon_especialPlanPens','reunificadaPlanPens','igvPlanPens','cargsimulPlanPens','ds003_2014PlanPens','ds002_2015PlanPens','ds005_2016PlanPens','ds020_2017PlanPens','ds011_2018PlanPens','ds009_2019PlanPens','ds006_2020PlanPens','ipssPlanPens','cafaePlanPens','prderrmaPlanPens','escolaridadPlanPens',
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'anio','mes','dniPlanPens','apellidos_y_nombresPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens');
            llenar_grid($objResponse, 'gridPlanPens', $etiquetas, $resultado, $campos, 'idPlanPens', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPlanPens', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}
function llenarGridPlanPensNom($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'PlanPens'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPlanPens = new PlanPens();
        if ($campoBusqueda != '') {
            $resultado = $objPlanPens->consultarPlanPensXapellidos_y_nombresPlanPensAprox($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPlanPens->consultarPlanPens(); // EDITABLE
        }
        $objPlanPens->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPlanPensNom', $campoBusqueda, $paginas, $resultado);
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
        //('|Imp|Ver|Editar|Id|Dni|Apellidos y nombres|Planilla|Tipo de regimen|Resolución de pensioón definitiva|A partir de')
//         $etiquetas = array('','Imp','Ver','Editar','Id','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','A partir de'
//         $etiquetas = array('','Imp','Editar','Id','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','A partir de'
        $etiquetas = array('','Boletas','Pensiones','Editar','Id','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','A partir de'
        );
        if ($resultado != null) {
            $cantReg = count($resultado);
            $objResponse->call("jQuery('#cantReg').val('$cantReg')");
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPlanPens(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
// 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','fecha_de_nacimientoPlanPens','sexoPlanPens','codigo_modularPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens','bancoPlanPens','cuenta_bancariaPlanPens','fuente_de_financiamientoPlanPens','planilla2PlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens','aguinaldoPlanPens','basicaPlanPens','bonif_personalPlanPens','ael25671PlanPens','aeds081PlanPens','tphPlanPens','bonif_familiarPlanPens','du080_04PlanPens','refrig_y_moviPlanPens','du90_96PlanPens','ds19_94_pcmPlanPens','ds21_92_pcmPlanPens','bon_especialPlanPens','reunificadaPlanPens','igvPlanPens','cargsimulPlanPens','ds003_2014PlanPens','ds002_2015PlanPens','ds005_2016PlanPens','ds020_2017PlanPens','ds011_2018PlanPens','ds009_2019PlanPens','ds006_2020PlanPens','ipssPlanPens','cafaePlanPens','prderrmaPlanPens','escolaridadPlanPens',
//             $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens'
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens'
            );
            llenar_grid($objResponse, 'gridPlanPens', $etiquetas, $resultado, $campos, 'idPlanPens', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPlanPens', $etiquetas);
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
    $nomPagina = 'PlanPens'; // EDITABLE
    $resultado = null;
    try {
        $objPlanPens = new PlanPens();
        if ($campoBusqueda != '') {
            $resultado = $objPlanPens->consultarPlanPensXdniPlanPens($campoBusqueda); // EDITABLE
        }
        if ($resultado != null) {
            $resultado = $resultado[0];
//             dump($resultado);
            $ape = $resultado['apellidos_y_nombresPlanPens'];
            $fecNac = $resultado['fecha_de_nacimientoPlanPens'];
            $genero = $resultado['sexoPlanPens'];
            $planilla = $resultado['planillaPlanPens'];
            $tipoReg = $resultado['tipo_de_regimenPlanPens'];
            $resPen = $resultado['resolucion_de_pension_definitivaPlanPens'];
            $aPartir = $resultado['a_partir_dePlanPens'];
            $banco = $resultado['bancoPlanPens'];
            $ctaBancaria = $resultado['cuenta_bancariaPlanPens'];
            $fuente = $resultado['fuente_de_financiamientoPlanPens'];
            $planilla2 = $resultado['planilla2PlanPens'];
            
            $objResponse->call("jQuery('#apellidos_y_nombresPlanPens').val('$ape')");
            $objResponse->call("jQuery('#fecha_de_nacimientoPlanPens').val('$fecNac')");
            $objResponse->call("jQuery('#sexoPlanPens').val('$genero')");
            $objResponse->call("jQuery('#planillaPlanPens').val('$planilla')");
            $objResponse->call("jQuery('#tipo_de_regimenPlanPens').val('$tipoReg')");
            $objResponse->call("jQuery('#resolucion_de_pension_definitivaPlanPens').val('$resPen')");
            $objResponse->call("jQuery('#a_partir_dePlanPens').val('$aPartir')");
            $objResponse->call("jQuery('#bancoPlanPens').val('$banco')");
            $objResponse->call("jQuery('#cuenta_bancariaPlanPens').val('$ctaBancaria')");
            $objResponse->call("jQuery('#fuente_de_financiamientoPlanPens').val('$fuente')");
            $objResponse->call("jQuery('#planilla2PlanPens').val('$planilla2')");
        } else {
            $objResponse->call("jQuery('#apellidos_y_nombresPlanPens').val('')");
            $objResponse->call("jQuery('#fecha_de_nacimientoPlanPens').val('')");
            $objResponse->call("jQuery('#sexoPlanPens').val('')");
            $objResponse->call("jQuery('#planillaPlanPens').val('')");
            $objResponse->call("jQuery('#tipo_de_regimenPlanPens').val('')");
            $objResponse->call("jQuery('#resolucion_de_pension_definitivaPlanPens').val('')");
            $objResponse->call("jQuery('#a_partir_dePlanPens').val('')");
            $objResponse->call("jQuery('#bancoPlanPens').val('')");
            $objResponse->call("jQuery('#cuenta_bancariaPlanPens').val('')");
            $objResponse->call("jQuery('#fuente_de_financiamientoPlanPens').val('')");
            $objResponse->call("jQuery('#planilla2PlanPens').val('')");
            $msg = 'No se encontró información asociada a ese DNI';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickPlanPens($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('PlanPens/consultar/$id', 'Consultar PlanPens');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>