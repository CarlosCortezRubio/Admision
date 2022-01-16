<?php
/** 
 * @file plancrd.xajax.php 
 *  
 * Xajax de la Tabla PlanCrd 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 08/05/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'PlanCrd.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridPlanCrd",
    "clickPlanCrd",
    "vntActClave"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridPlanCrd($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'PlanCrd'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
    try {
        $objPlanCrd = new PlanCrd();
        if ($campoBusqueda != '') {
            $resultado = $objPlanCrd->consultarPlanCrdX_ESPECIFICAR_METODO($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPlanCrd->consultarPlanCrd(); // EDITABLE
        }
        $objPlanCrd->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPlanCrd', $campoBusqueda, $paginas, $resultado);
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
// '','Imp','Ver','Editar','IdPlanCrd','Ape1PlanCrd','Ape2PlanCrd','Nom1PlanCrd','NacPlanCrd','DniPlanCrd','FecIngPlanCrd','EraDocPlanCrd','IncDespPlanCrd','GdoAcadPlanCrd','MencPlanCrd','UnivMayGPlanCrd','PaisPlanCrd','PreGPlanCrd','MaePlanCrd','DocPlanCrd','SedesClasesPlanCrd','CatDocPlanCrd','DedDocPlanCrd','ClasesPlanCrd','OtrasActPlanCrd','TotHorSemPlanCrd','RzaInvPlanCrd','EnDinaPlanCrd','PerAcadPlanCrd','ComPlanCrd'
//         );
        $etiquetas = array('','Editar','N°',' Apellido Paterno',' Apellido Materno','Nombres','Nacionalidad','DNI','Fec Ingreso');
        if ($resultado != null) {
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPlanCrd(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $campos = array('obj_' . $chk,'obj_' . $img1,'idPlanCrd','ape1PlanCrd','ape2PlanCrd','nom1PlanCrd','nacPlanCrd','dniPlanCrd','fecIngPlanCrd'
            );
            llenar_grid($objResponse, 'gridPlanCrd', $etiquetas, $resultado, $campos, 'idPlanCrd', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPlanCrd', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickPlanCrd($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('PlanCrd/consultar/$id', 'Consultar PlanCrd');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>
