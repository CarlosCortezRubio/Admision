<?php
/** 
 * @file planillapensionado.xajax.php 
 *  
 * Xajax de la Tabla PlanillaPensionado 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
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
    "buscarDocente",
    "llenarGridPlanPensNom"
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
    $nomPagina = 'planillaOrfandad'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPlanillaPensionado = new PlanillaPensionado();
        if ($campoBusqueda != '') {
//             $resultado = $objPlanillaPensionado->consultarPlanillaPensionadoX_ESPECIFICAR_METODO($campoBusqueda); // EDITABLE
            $resultado = $objPlanillaPensionado->consultarPlanillaPensionadoXparam($campoBusqueda,3); // EDITABLE
        } else {
            $resultado = $objPlanillaPensionado->consultarPlanPensConsolidadoXidTipoPlanilla(3); // EDITABLE
        }
        $objPlanillaPensionado->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($resultado != null) {
            $cantReg = count($resultado);
        }else{
            $cantReg = 0;
        }
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
//         dump($resultado);
        $etiquetas = array('','Boletas','Planillas','Editar','Año','Mes','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension','T imp','T haber','T desc.','T liquido');
        if ($resultado != null) {
//             $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
//             $img = "<img class='classHand' onclick='xajax_clickPlanillaPensionado(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
//             $img1 = crearObjImagen($nomPagina, 'edi');
//             $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
//             $campos = array(
//                 'obj_' . $chk,
//                 'obj_' . $img3,
//                 'obj_' . $img,
//                 'obj_' . $img1,
//                 'idplanillaPensionado',
//                 'idPersona',
//                 'idPeriodo',
//                 'fecplanillaPensionado',
//                 'totImpplanillaPensionado',
//                 'totHabplanillaPensionado',
//                 'totDescplanillaPensionado',
//                 'totLiqplanillaPensionado'
//             );
            $objResponse->call("document.getElementById('cantReg').innerHTML='$cantReg'");
            $objResponse->assign('cantReg', 'innerHTML', "Cantidad de registros: $cantReg", '');
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPlanPens(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            // 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','fecha_de_nacimientoPlanPens','sexoPlanPens','codigo_modularPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens','bancoPlanPens','cuenta_bancariaPlanPens','fuente_de_financiamientoPlanPens','planilla2PlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens','aguinaldoPlanPens','basicaPlanPens','bonif_personalPlanPens','ael25671PlanPens','aeds081PlanPens','tphPlanPens','bonif_familiarPlanPens','du080_04PlanPens','refrig_y_moviPlanPens','du90_96PlanPens','ds19_94_pcmPlanPens','ds21_92_pcmPlanPens','bon_especialPlanPens','reunificadaPlanPens','igvPlanPens','cargsimulPlanPens','ds003_2014PlanPens','ds002_2015PlanPens','ds005_2016PlanPens','ds020_2017PlanPens','ds011_2018PlanPens','ds009_2019PlanPens','ds006_2020PlanPens','ipssPlanPens','cafaePlanPens','prderrmaPlanPens','escolaridadPlanPens',
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'anioPeriodo','mesPeriodo','docPersona',
                'obj_cmp_[nom1Persona*nom2Persona*ape1Persona*ape2Persona]','nomPeriodo','tipRegPersona','resPenDefPersona',
                'totImpplanillaPensionado','totHabplanillaPensionado','totDescplanillaPensionado','totLiqplanillaPensionado');
            llenar_grid($objResponse, 'gridPlanillaPensionado', $etiquetas, $resultado, $campos, 'idplanillaPensionado', false);
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
function llenarGridPlanPensNom($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'PlanPens'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPlanillaPensionado = new PlanillaPensionado();
        if ($campoBusqueda != '') {
            $resultado = $objPlanillaPensionado->consultarPlanillaPensionadoXnombresAprox($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPlanillaPensionado->consultarPlanillaPensionado(); // EDITABLE
        }
        $objPlanillaPensionado->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPlanillaPensionadoNom', $campoBusqueda, $paginas, $resultado);
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
            $img = "<img class='classHand' onclick='xajax_clickPlanillaPensionado(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            // 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idPlanillaPensionado','dniPlanillaPensionado','apellidos_y_nombresPlanillaPensionado','fecha_de_nacimientoPlanPens','sexoPlanPens','codigo_modularPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens','bancoPlanPens','cuenta_bancariaPlanPens','fuente_de_financiamientoPlanPens','planilla2PlanPens','total_imponiblePlanPens','total_haberPlanPens','total_descuentosPlanPens','total_liquidoPlanPens','aguinaldoPlanPens','basicaPlanPens','bonif_personalPlanPens','ael25671PlanPens','aeds081PlanPens','tphPlanPens','bonif_familiarPlanPens','du080_04PlanPens','refrig_y_moviPlanPens','du90_96PlanPens','ds19_94_pcmPlanPens','ds21_92_pcmPlanPens','bon_especialPlanPens','reunificadaPlanPens','igvPlanPens','cargsimulPlanPens','ds003_2014PlanPens','ds002_2015PlanPens','ds005_2016PlanPens','ds020_2017PlanPens','ds011_2018PlanPens','ds009_2019PlanPens','ds006_2020PlanPens','ipssPlanPens','cafaePlanPens','prderrmaPlanPens','escolaridadPlanPens',
            //             $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img1,'idPlanPens','dniPlanPens','apellidos_y_nombresPlanPens','planillaPlanPens','tipo_de_regimenPlanPens','resolucion_de_pension_definitivaPlanPens','a_partir_dePlanPens'
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'anioPeriodo','mesPeriodo','docPersona','nom1Persona','planillaPersona','tipRegPersona','resPenDefPersona',
                'totImpplanillaPensionado','totHabplanillaPensionado','totDescplanillaPensionado','totLiqplanillaPensionado');
            llenar_grid($objResponse, 'gridPlanillaPensionado', $etiquetas, $resultado, $campos, 'idplanillaPensionado', false);
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
    $nomPagina = 'Persona'; // EDITABLE
    $resultado = null;
    try {
        $objPersona = new Persona();
        if ($campoBusqueda != '') {
            $resultado = $objPersona->consultarPersonaXdocPersona($campoBusqueda); // EDITABLE
        }
        if ($resultado != null) {
            $resultado = $resultado[0];
                                     //dump($resultado);
            $idPersona = $resultado['idPersona'];
            $ape = utf8_encode($resultado['nom1Persona']);
            $fecNac = $resultado['fecNacPersona'];
            $genero = $resultado['idGenero'];
            $planilla = $resultado['planillaPersona'];
            $tipoReg = $resultado['tipRegPersona'];
            $resPen = $resultado['resPenDefPersona'];
            $aPartir = $resultado['fecRes'];
            $banco = utf8_encode($resultado['nomBanco']);
            $ctaBancaria = $resultado['ctaBancoPersona'];
            $fuente = $resultado['fntFinancPersona'];
            $planilla2 = $resultado['planilla2Persona'];
            $codModularPersona = $resultado['codModularPersona'];
                        
            $objResponse->call("jQuery('#idPersona').val('$idPersona')");
            
            $objResponse->call("jQuery('#apellidos_y_nombresPersona').val('$ape')");
            $objResponse->call("jQuery('#fecNacPersona').val('$fecNac')");
            $objResponse->call("jQuery('#idGenero').val('$genero')");
            $objResponse->call("jQuery('#planillaPersona').val('$planilla')");
            $objResponse->call("jQuery('#tipRegPersona').val('$tipoReg')");
            $objResponse->call("jQuery('#resPenDefPersona').val('$resPen')");
            $objResponse->call("jQuery('#fecRes').val('$aPartir')");
            $objResponse->call("jQuery('#bancoPersona').val('$banco')");
            $objResponse->call("jQuery('#ctaBancoPersona').val('$ctaBancaria')");
            $objResponse->call("jQuery('#fntFinancPersona').val('$fuente')");
            $objResponse->call("jQuery('#planilla2Persona').val('$planilla2')");
            $objResponse->call("jQuery('#codModularPersona').val('$codModularPersona')");
            
        } else {
            $objResponse->call("jQuery('#idPersona').val('')");
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
            $objResponse->call("jQuery('#codModularPersona').val('')");
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
            $objResponse->script("vntConsultar('planillaOrfandad/consultar/$id', 'Consultar PlanillaPensionado');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>