<?php
/** 
 * @file persona.xajax.php 
 *  
 * Xajax de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 18/10/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Pdf.php');
require_once (APP . 'comun/grid.php');
$action = new Action();
$arrayFunciones = Array(
    "llenarGridPersona",
    "clickPersona",
    "vntActClave"
);
if (! isset($xajax)) {
    $action->iniciarXajax($arrayFunciones);
} else {
    $action->cargarFunciones($arrayFunciones, $xajax);
}

function llenarGridPersona($campoBusqueda, $indice)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    $nomPagina = 'Persona'; // EDITABLE
    $resultado = null;
    $numPag = 0;
    $paginas = '';
//     dump($campoBusqueda);
    $matCampoBusqueda = explode(':', $campoBusqueda);
    $tipoBusqueda = $matCampoBusqueda[0];
    try {
        $objPersona = new Persona();
//         switch ($tipoBusqueda) {
//             case 1:
//                 $valBusqueda = $matCampoBusqueda[1];
//                 $resultado = $objPersona->consultarPersonaXdocPersona($valBusqueda); // EDITABLE
//             break;
//             case 2:
//                 $valBusqueda = $matCampoBusqueda[1];
//             break;
            
//             default:
//                 $resultado = $objPersona->consultarPersona(); // EDITABLE
//             break;
//         }
        if ($campoBusqueda != '') {
            $resultado = $objPersona->consultarPersonaXparam($campoBusqueda); // EDITABLE
        } else {
            $resultado = $objPersona->consultarPersona(); // EDITABLE
        }
        $objPersona->cerrarConexion(); // EDITABLE
        /* INICIO PAGINACION */
        $action = new Action();
        $numPag = $action->getPageNumbers($resultado);
        if ($resultado != null) {
            $cantReg = count($resultado);
        }else{
            $cantReg = 0;
        }
        if ($numPag > 1) {
            $matRes = $action->paginado($objResponse, $numPag, $indice, 'xajax_llenarGridPersona', $campoBusqueda, $paginas, $resultado);
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
            'Ver',
            'Editar',
            'Documento',
            'Nombres y Apellidos',
            'Fecha Nacimiento',
            'Estado'
        );
        if ($resultado != null) {
//             $cantReg = count($resultado);
//             $objResponse->call("jQuery('#cantReg').val('$cantReg')");
//             $objResponse->call("document.getElementById('cantReg').innerHTML='$cantReg'");
            $objResponse->assign('cantReg', 'innerHTML', "Cantidad de registros: $cantReg", '');
            $chk = "<input type='checkbox' name='chkdel' id='\$campoClave' value='\$campoClave'/>";
            $img = "<img class='classHand' onclick='xajax_clickPersona(\$campoClave,1)' src='" . PUB_URL . "img/grid/consultar.gif' title='Consultar' border='0px'/>";
            $img1 = crearObjImagen($nomPagina, 'edi');
            $img3 = "<a href='$nomPagina/imprimir/\$campoClave' target='_blank'><img src='" . PUB_URL . "img/iconos/imprimir.png' title='Imprimir' border='0px'/></a>";
            $campos = array(
                'obj_' . $chk,
                'obj_' . $img,
                'obj_' . $img1,
                'docPersona',
                'obj_cmp_[nom1Persona*nom2Persona*ape1Persona*ape2Persona]',
                'fecNacPersona',
                'idEdoRegistro'
            );
            llenar_grid($objResponse, 'gridPersona', $etiquetas, $resultado, $campos, 'idPersona', false);
            $msg = '';
        } else {
            limpiar_grid($objResponse, 'gridPersona', $etiquetas);
            $msg = 'No se encontraron registros, con las caracteristicas definidas por el usuario';
            $objResponse->call("ventanaAlerta('$msg','Alerta')");
        }
    } catch (exception $e) {
        $objResponse->call("ventanaAlerta('Error de conexion','Alerta')");
        return $objResponse;
    }
    return $objResponse;
}

function clickPersona($id, $ind)
{
    global $objResponse;
    $objResponse = new xajaxResponse();
    switch ($ind) {
        case 1:
            $objResponse->script("vntConsultar('Persona/consultar/$id', 'Consultar Persona');");
            break;
        case 2:
            ;
            break;
    }
    return $objResponse;
}
?>
