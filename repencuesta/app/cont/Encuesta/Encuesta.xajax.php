<?php
/** 
 * @file planpens.xajax.php 
 *  
 * Xajax de la Tabla Encuesta 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 07/04/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Encuesta.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridEncuesta",
    "llenarGridEncuestaNom",
    "clickEncuesta",
    "vntActClave"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridEncuesta($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Encuesta'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
//     $objResponse->call("ventanaAlerta('$campoBusqueda','Alerta')");
//     return $objResponse;
    try {
        $objEncuesta = new Encuesta();
        if ($campoBusqueda != '') {
            $resultado = $objEncuesta->consultarEncuestaXparam($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objEncuesta->consultarEncuesta(); // EDITABLE
        }
        $objEncuesta->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridEncuesta', $campoBusqueda, $paginas, $resultado);
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
        $etiquetas = array('','Boletas','Pensiones','Editar','Año','Mes','Dni','Apellidos y nombres','Planilla','Tipo de regimen','Res. de pension');
        if ($resultado != null) {
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickEncuesta(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
// 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idEncuesta','dniEncuesta','apellidos_y_nombresEncuesta','fecha_de_nacimientoEncuesta','sexoEncuesta','codigo_modularEncuesta','planillaEncuesta','tipo_de_regimenEncuesta','resolucion_de_pension_definitivaEncuesta','a_partir_deEncuesta','bancoEncuesta','cuenta_bancariaEncuesta','fuente_de_financiamientoEncuesta','planilla2Encuesta','total_imponibleEncuesta','total_haberEncuesta','total_descuentosEncuesta','total_liquidoEncuesta','aguinaldoEncuesta','basicaEncuesta','bonif_personalEncuesta','ael25671Encuesta','aeds081Encuesta','tphEncuesta','bonif_familiarEncuesta','du080_04Encuesta','refrig_y_moviEncuesta','du90_96Encuesta','ds19_94_pcmEncuesta','ds21_92_pcmEncuesta','bon_especialEncuesta','reunificadaEncuesta','igvEncuesta','cargsimulEncuesta','ds003_2014Encuesta','ds002_2015Encuesta','ds005_2016Encuesta','ds020_2017Encuesta','ds011_2018Encuesta','ds009_2019Encuesta','ds006_2020Encuesta','ipssEncuesta','cafaeEncuesta','prderrmaEncuesta','escolaridadEncuesta',
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'anio','mes','dniEncuesta','apellidos_y_nombresEncuesta','planillaEncuesta','tipo_de_regimenEncuesta','resolucion_de_pension_definitivaEncuesta');
            llenar_grid($objResponse, 'gridEncuesta', $etiquetas, $resultado, $campos, 'idEncuesta', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridEncuesta', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}
function llenarGridEncuestaNom($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Encuesta'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objEncuesta = new Encuesta();
        if ($campoBusqueda != '') {
            $resultado = $objEncuesta->consultarEncuestaXapellidos_y_nombresEncuestaAprox($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objEncuesta->consultarEncuesta(); // EDITABLE
        }
        $objEncuesta->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridEncuestaNom', $campoBusqueda, $paginas, $resultado);
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
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickEncuesta(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='".URLSIST."base/$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $img4 = "<a href='".URLSIST."base/$nomPagina/imprimir2/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
// 'obj_' . $chk,'obj_' . $img3,'obj_' . $img,'obj_' . $img1,'idEncuesta','dniEncuesta','apellidos_y_nombresEncuesta','fecha_de_nacimientoEncuesta','sexoEncuesta','codigo_modularEncuesta','planillaEncuesta','tipo_de_regimenEncuesta','resolucion_de_pension_definitivaEncuesta','a_partir_deEncuesta','bancoEncuesta','cuenta_bancariaEncuesta','fuente_de_financiamientoEncuesta','planilla2Encuesta','total_imponibleEncuesta','total_haberEncuesta','total_descuentosEncuesta','total_liquidoEncuesta','aguinaldoEncuesta','basicaEncuesta','bonif_personalEncuesta','ael25671Encuesta','aeds081Encuesta','tphEncuesta','bonif_familiarEncuesta','du080_04Encuesta','refrig_y_moviEncuesta','du90_96Encuesta','ds19_94_pcmEncuesta','ds21_92_pcmEncuesta','bon_especialEncuesta','reunificadaEncuesta','igvEncuesta','cargsimulEncuesta','ds003_2014Encuesta','ds002_2015Encuesta','ds005_2016Encuesta','ds020_2017Encuesta','ds011_2018Encuesta','ds009_2019Encuesta','ds006_2020Encuesta','ipssEncuesta','cafaeEncuesta','prderrmaEncuesta','escolaridadEncuesta',
//             $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img1,'idEncuesta','dniEncuesta','apellidos_y_nombresEncuesta','planillaEncuesta','tipo_de_regimenEncuesta','resolucion_de_pension_definitivaEncuesta','a_partir_deEncuesta'
            $campos = array('obj_' . $chk,'obj_' . $img3,'obj_' . $img4,'obj_' . $img1,'idEncuesta','dniEncuesta','apellidos_y_nombresEncuesta','planillaEncuesta','tipo_de_regimenEncuesta','resolucion_de_pension_definitivaEncuesta','a_partir_deEncuesta'
            );
            llenar_grid($objResponse, 'gridEncuesta', $etiquetas, $resultado, $campos, 'idEncuesta', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridEncuesta', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickEncuesta($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('Encuesta/consultar/$id', 'Consultar Encuesta');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>