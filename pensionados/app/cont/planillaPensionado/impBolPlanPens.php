<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once(MOD . 'ConcPlanilla.php');
require_once (MOD . 'Pdf.php');

// $alinHoja = 'L';
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
//$pdf->Encabezado();
$pdf->encabezado_def(60);
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
$etiquetaTitulo = '---';

$aux = $opt;
$n = 1;

$objPlanillaPensionado = new PlanillaPensionado();
$tablaDatos = $objPlanillaPensionado->consultarPlanillaPensionadoYconceptosXidplanillaPensionado($opt);
$objPlanillaPensionado->cerrarConexion();

// dump($tablaDatos);die();
//$tabla = null;
if ( is_array( $tablaDatos ) ) {
    if (count ( $tablaDatos ) > 0) {
        //         return true;
    }
} else {
    $tablaDatos = array();
}
if (count($tablaDatos) > 0) {
    //     echo "---".count($tabla)."<br>";
    $tabla = $tablaDatos[0];
    
    $idPlanillaPensionado = $tabla['idplanillaPensionado'];
    $dniPlanillaPensionado = $tabla['docPersona'];
    $apellidos_y_nombresPlanillaPensionado = $tabla['nom1Persona'].' '.$tabla['nom2Persona'].' '.$tabla['ape1Persona'].' '.$tabla['ape2Persona'];
    $fecha_de_nacimientoPlanillaPensionado = $tabla['fecNacPersona'];
    $sexoPlanillaPensionado = $tabla['idGenero'];
    if ($sexoPlanillaPensionado==1) {
        $sexoPlanillaPensionado = 'Masculino';
    }else{
        $sexoPlanillaPensionado = 'Femenino';
    }
    $codigo_modularPlanillaPensionado = $tabla['codModularPersona'];
    $planillaPlanillaPensionado = $tabla['planillaPersona'];
    $tipo_de_regimenPlanillaPensionado = $tabla['tipRegPersona'];
    $resolucion_de_pension_definitivaPlanillaPensionado = $tabla['resPenDefPersona'];
    $a_partir_dePlanillaPensionado = $tabla['fecRes'];
    $bancoPlanillaPensionado = $tabla['nomBanco'];
    $cuenta_bancariaPlanillaPensionado = $tabla['ctaBancoPersona'];
    $fuente_de_financiamientoPlanillaPensionado = $tabla['fntFinancPersona'];
    $planilla2PlanillaPensionado = $tabla['planilla2Persona'];
    $total_imponiblePlanillaPensionado = $tabla['totImpplanillaPensionado'];
    $total_haberPlanillaPensionado = $tabla['totHabplanillaPensionado'];
    $total_descuentosPlanillaPensionado = $tabla['totDescplanillaPensionado'];
    $total_liquidoPlanillaPensionado = $tabla['totLiqplanillaPensionado'];
    
    $ruc = $tabla['docPersona'];
    $razonSocial = $tabla['docPersona'];
    $periodo = $tabla['docPersona'];
    
    
    $datosReporte = datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado,
        $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado,
        $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo);
    
    $pdf->SetFont ( 'helvetica', '', 6 );
    $pdf->writeHTML($datosReporte);
    
    
    $res = detallePlanilla($tablaDatos);
    $pdf->writeHTML($res);
    
    $pdf->SetFont ( 'helvetica', '', 6 );
    
    $pdf->Cell ( 0, 0, '', 0, 1, 'L' );
    
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}
// function recibo($fecEdoMovimiento,$propietario,$monto,$concepto,$numCasaPersona,$nomBanco,$refMovimiento){
function datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo){
    $fechaEmision = date('d-m-Y');
    $dni = 'XXXXX';
    $cad = '
            <table border="1" cellpadding="4">
            	<tr>
            		<td colspan="3" class="titulo1">
            			<span><b>DATOS DE LA EMPRESA</b>.</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2">
            			<span class=""><b>RUC</b></span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>RAZON SOCIAL</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>PERIODO</b>.</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto1C">
            			<span class=""><b>'.$ruc.'</b></span>
            		</td>
            		<td class="texto1C">
            			<span class=""><b>'.$razonSocial.'</b></span>
            		</td>
            		<td class="texto1C">
            			<span class=""><b>'.$periodo.'</b></span>
            		</td>
            	</tr>
            </table>
            			    
            <table border="1" cellpadding="2">
            	<tr>
            		<td class="titulo2">
            			<span class=""><b>APELLIDOS Y NOMBRES:</b></span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>DNI:</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>FECHA DE NACIMIENTO:</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>SEXO:</b>.</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$apellidos_y_nombresPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$dniPlanillaPensionado.'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$fecha_de_nacimientoPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$sexoPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2">
            			<span class=""><b>CODIGO MODULAR:</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>TIPO DE REGIMEN:</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>FECHA DE INGRESO:</b>.</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>RESOLUCION DE PENSION DEFINITIVA:</b>.</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$codigo_modularPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$tipo_de_regimenPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$a_partir_dePlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$resolucion_de_pension_definitivaPlanillaPensionado .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2">
            			<span class=""><b>BANCO:</b>.</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$bancoPlanillaPensionado .'</span>
            		</td>
            		<td class="titulo2">
            			<span class=""><b>CUENTA:</b>.</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$cuenta_bancariaPlanillaPensionado.'</span>
            		</td>
            	</tr>
            </table>
<style>
.logo{
	height:100px;
	width:150px;
	text-align:left;
}
.logo1{
	width:40px;
}
.dosCol1{
	width:330px;
}
.dosCol2{
	width:180px;
}
.encabezado{
	width:355px;
	padding:20px;
	text-align:center;
}
.firma{
	width:50%;
	text-align:center;
}
.pie{
	font-size:8px;
	text-align:center;
}
.textoNota{
	text-align:center;
	font-size:10px;
}
.titulo1{
	font-size:8px;
	padding-left:10px;
	padding-top:10px;
    background-color:#f8f9fa;
	text-align:center;
}
.titulo2{
	font-size:6px;
	padding-left:10px;
	padding-top:10px;
    background-color:#f8f9fa;
	text-align:center;
}
.titulo3{
	/*font-size:8px;
	padding-left:10px;
	padding-top:10px;
    background-color:#f8f9fa;*/
	text-align:center;
}
.texto1{
	font-size:7px;
	padding-left:10px;
	padding-top:5px;
    padding-bottom:5px;
}
.texto1C{
	font-size:7px;
	padding-left:10px;
	padding-top:5px;
    padding-bottom:5px;
    text-align:center;
}
.texto3{
	font-size:6.5px;
	padding-left:5px;
	padding-top:5px;
    padding-bottom:5px;
    font-weight: bold;
    text-align:left;
}
</style>
';
    return $cad;
}

function detallePlanilla($detalleConceptos){
    //     dump($detalleConceptos);
    $n = count($detalleConceptos);
    
    $edocuentaHTML = '';
    // DETALLE DE CONCEPTOS
    $edocuentaHTML.=estilos();
    $edocuentaHTML.='<table border="1" cellpadding="0" width="450">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="240" class="titulo2" align="center" colspan="2"><b>Ingresos</b></td>';
    $edocuentaHTML.='<td width="120" class="titulo2" align="center"><b>Descuentos</b></td>';
    $edocuentaHTML.='<td width="150" class="titulo2" align="center"><b>Totales</b></td>';
    //             $edocuentaHTML.='<td width="255" class="titulo2" align="center"><b>Egresos</b></td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td>';
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    $cont = 1;
    for ($i = 0; $i < $n/2; $i++) {
        if ($detalleConceptos[$i]['idTipoConcepto']==1) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3" width="90">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    for ($i = $n/2; $i < $n; $i++) {
        //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
        if ($detalleConceptos[$i]['idTipoConcepto']==1) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3" width="90">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    for ($i = 0; $i < $n; $i++) {
        //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
        if ($detalleConceptos[$i]['idTipoConcepto']==2) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3R" width="90">'.str_replace('ConcAct', '', utf8_encode($detalleConceptos[$i]['etiConceptos'])).'</td>';
            $edocuentaHTML.='<td class="texto3R" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Monto Bruto:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totHabplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Total Descuentos:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totDescplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Monto Lquidido:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totLiqplanillaPensionado'];
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';$edocuentaHTML.='<td width="150" class="texto3"><br><br><br></td>';$edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="150" class="texto3">CONTRIBUCIÓN DEL EMPLEADOR:</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Essalud</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= number_format($detalleConceptos[0]['totImpplanillaPensionado']*4/100,2,",",".");
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    
    return $edocuentaHTML;
    
    $pdf->writeHTMLCell(0,0,60,25, $cabeceraHTML, 0, 1, 0, true, '', true);
    $pdf->writeHTML($edocuentaHTML);
    $pdf->writeHTMLCell(14,1,10,235, $pieHTML, 0, 1, 0, true, '', true);
    
}
function centrarContenido($contenido){
    $cad = '<table border="0" width="225">
<tr>
<td style="width:18%"></td>
<td style="width:50%">'.$contenido.'</td>
<td style="width:15%"></td>
</tr>
</table>';
    return $cad;
}
function estilos(){
    $cad = '
    <style>
    .logo{
        height:100px;
        width:150px;
        text-align:left;
    }
    .logo1{
        width:40px;
    }
    .dosCol1{
        width:330px;
    }
    .dosCol2{
        width:180px;
    }
    .encabezado{
        width:355px;
        padding:20px;
        text-align:center;
    }
    .firma{
        width:50%;
        text-align:center;
    }
    .pie{
        font-size:8px;
        text-align:center;
    }
    .textoNota{
        text-align:center;
        font-size:10px;
    }
    .titulo1{
        font-size:10px;
        padding-left:10px;
        padding-top:10px;
        background-color:#f8f9fa;
        text-align:center;
    }
    .titulo2{
        font-size:8px;
        padding-left:10px;
        padding-top:10px;
        background-color:#f8f9fa;
        text-align:center;
    }
    .titulo3{
        /*font-size:8px;
         padding-left:10px;
         padding-top:10px;
         background-color:#f8f9fa;*/
        text-align:center;
    }
    .titulo5{
        font-size:6px;
        padding-left:5px;
        padding-top:10px;
        text-align:left;
    }
    .texto1{
        font-size:7px;
        padding-left:10px;
        padding-top:5px;
        padding-bottom:5px;
    }
    .texto1C{
        font-size:7px;
        padding-left:10px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:center;
    }
    .texto3{
        font-size:6.5px;
        padding-left:15px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:left;
    }
    .texto3R{
        font-size:6.5px;
        padding-left:15px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:left;
        color:red;
    }
    </style>
    ';
    return $cad;
}
//&nbsp;&nbsp;&nbsp;
//Cerrando e imprimiendo documento
$pdf->Output ( "UNM.pdf", 'I' );
?>