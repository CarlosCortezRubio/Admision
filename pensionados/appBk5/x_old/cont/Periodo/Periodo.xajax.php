<?php
/** 
 * @file periodo.xajax.php 
 *  
 * Xajax de la Tabla Periodo 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 16/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Periodo.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridPeriodo",
    "clickPeriodo",
    "vntActClave",
    "duplicar"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridPeriodo($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Periodo'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPeriodo = new Periodo();
        if ($campoBusqueda != '') {
            $resultado = $objPeriodo->consultarPeriodoX_ESPECIFICAR_METODO($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPeriodo->consultarPeriodo(); // EDITABLE
        }
        $objPeriodo->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPeriodo', $campoBusqueda, $paginas, $resultado);
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
            'Id',
            'Estado',
            'Año',
            'Mes',
            'Periodo',
            'Observación'
        );
        if ($resultado != null) {
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPeriodo(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $campos = array(
                'obj_' . $chk,
                'obj_' . $img3,
                'obj_' . $img,
                'obj_' . $img1,
                'idPeriodo',
                'nomEdoRegistro',
                'anioPeriodo',
                'mesPeriodo',
                'nomPeriodo',
                'obsPeriodo'
            );
            llenar_grid($objResponse, 'gridPeriodo', $etiquetas, $resultado, $campos, 'idPeriodo', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPeriodo', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickPeriodo($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('Periodo/consultar/$id', 'Consultar Periodo');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}

function duplicar($idTipoPlanilla, $idOrigen, $idDestino, $anioDestino, $mesDestino)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $msg = $idOrigen . ' - ' . $idDestino;
    
//     $msg = "($idTipoPlanilla, $idOrigen, $idDestino, $anioDestino, $mesDestino)";
//     $objResponse->call("ventanaAlerta('$msg','Alerta')");
//     return $objResponse;
    
    if ($idOrigen == '' or $idDestino == '') {
        $msg = "Por favor ingrese los valosres del Periodo de Origen y Destino";
        $objResponse->call("ventanaAlerta('$msg','Alerta')");
    } else {
        $objResponse->call("ventanaAlerta('$msg','Alerta')");
        $objPeriodo = new Periodo();
        $tablaResultado = $objPeriodo->duplicarPlanilla($idTipoPlanilla, $idOrigen, $idDestino, $anioDestino, $mesDestino);
        $objPeriodo->cerrarConexion();
    }
    return $objResponse;
}
?>