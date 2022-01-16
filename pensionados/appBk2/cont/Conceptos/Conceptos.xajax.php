<?php
/** 
 * @file conceptos.xajax.php 
 *  
 * Xajax de la Tabla Conceptos 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 17/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Conceptos.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridConceptos",
    "llenarGridPcodConceptos",
    "clickConceptos",
    "vntActClave"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridConceptos($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Conceptos'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    
    $matCampoBusqueda = explode(':',$campoBusqueda);
    $opcion = $matCampoBusqueda[0];
    $campoBusqueda1 = $matCampoBusqueda[1];
//     dump($matCampoBusqueda);
    try {
        $objConceptos = new Conceptos();
        switch ($opcion) {
            case '1':
                $resultado = $objConceptos->consultarConceptosXidTipoConcepto($campoBusqueda1);
                break;
            case '2':
                $resultado = $objConceptos->consultarConceptosXidEdoRegistro($campoBusqueda1);
                break;
            case '3':
                $resultado = $objConceptos->consultarConceptosXgrp($campoBusqueda1);
                break;
            case 4:
                $resultado = $objConceptos->consultarConceptosXcodConceptos($campoBusqueda1);
                break;
            case '5':
                $resultado = $objConceptos->consultarConceptosXnomConceptosAprox($campoBusqueda1);
                break;
            case '':
                $resultado = $objConceptos->consultarConceptos();
                break;
        }
        $objConceptos->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridConceptos', $campoBusqueda, $paginas, $resultado);
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
        $etiquetas = array(
            '',
            'Imp',
            'Ver',
            'Editar',
            'Tipo',
            'Edo',
            'Cod',
            'Concepto',
            'Nom Corto',
            'Afp',
            'Snp',
            'Ipss',
            'Remu.',
            'Grupo'
        );
        if ($resultado != null) {
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickConceptos(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $imgEdo = 'obj_img_idEdoRegistro';
            $campos = array(
                'obj_' . $chk,
                'obj_' . $img3,
                'obj_' . $img,
                'obj_' . $img1,
                'idTipoConcepto',
                $imgEdo,
                'codConceptos',
                'nomConceptos',
                'etiConceptos',
                'afecta_afp',
                'afecta_snp',
                'afecta_ipss',
                'es_remunera',
                'grpConceptos'
            );
            llenar_grid($objResponse, 'gridConceptos', $etiquetas, $resultado, $campos, 'idConceptos', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridConceptos', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickConceptos($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('Conceptos/consultar/$id', 'Consultar Conceptos');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>
