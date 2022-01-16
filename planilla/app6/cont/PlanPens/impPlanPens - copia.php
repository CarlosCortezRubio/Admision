<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once(MOD . 'ConcAct.php');
require_once (MOD . 'Pdf.php');

//echo "toy";
// $alinHoja = 'L';
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
//$pdf->Encabezado();
$pdf->encabezado_def(60,null,'PLANILLA DE PENSIONES MARZO 2021','PERIODO: MARZO 2021');
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
$etiquetaTitulo = '---';


//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
// $aux = $_GET['opt'];
$aux = $opt;
// $aux = '';

//$n = count($res);
$n = 1;
//$comunicacionid = 25;
//$tabla = Comunicacion::consultarComunicacionXid ( $comunicacionid );
$objPlanPens = new PlanPens();
$tabla = $objPlanPens->consultarPlanPensXidPlanPens($opt);
$objPlanPens->cerrarConexion();
// dump($tabla);
//$tabla = null;
if ( is_array( $tabla ) ) {
    if (count ( $tabla ) > 0) {
        //         return true;
    }
} else {
    $tabla = array();
}
if (count($tabla) > 0) {
    $tabla = $tabla[0];
    $idPlanPens = $tabla['idPlanPens'];
    $dniPlanPens = $tabla['dniPlanPens'];
    $apellidos_y_nombresPlanPens = $tabla['apellidos_y_nombresPlanPens'];
    $fecha_de_nacimientoPlanPens = $tabla['fecha_de_nacimientoPlanPens'];
    $sexoPlanPens = $tabla['sexoPlanPens'];
    $codigo_modularPlanPens = $tabla['codigo_modularPlanPens'];
    $planillaPlanPens = $tabla['planillaPlanPens'];
    $tipo_de_regimenPlanPens = $tabla['tipo_de_regimenPlanPens'];
    $resolucion_de_pension_definitivaPlanPens = $tabla['resolucion_de_pension_definitivaPlanPens'];
    $a_partir_dePlanPens = $tabla['a_partir_dePlanPens'];
    $bancoPlanPens = $tabla['bancoPlanPens'];
    $cuenta_bancariaPlanPens = $tabla['cuenta_bancariaPlanPens'];
    $fuente_de_financiamientoPlanPens = $tabla['fuente_de_financiamientoPlanPens'];
    $planilla2PlanPens = $tabla['planilla2PlanPens'];
    
    $res = detallePlanilla($tabla);
    
    
    $tablaStructura = '';
    $tablaStructura.='<table border="0">';
    $tablaStructura.='<tr>';
    $tablaStructura.='<td width="90"  align="left"><b>DNI: </b></td><td width="150"  align="left">'.$dniPlanPens.'</td>';
    $tablaStructura.='<td width="100"  align="left"><b>Apellidos y nombres:</b></td><td width="300" align="left">'. $apellidos_y_nombresPlanPens .'</td>';
    $tablaStructura.='</tr>';
    $tablaStructura.='<tr>';
    $tablaStructura.='<td width="90"  align="left"><b>Fecha de nacimiento: </b></td><td width="150"  align="left">'.$fecha_de_nacimientoPlanPens.'</td>';
    $tablaStructura.='<td width="100"  align="left"><b>Sexo: </b></td><td width="300" align="left">'.$sexoPlanPens.'</td>';
    $tablaStructura.='</tr>';
    $tablaStructura.='<tr>';
    $tablaStructura.='<td width="90"  align="left"><b>Código Modular: </b></td><td width="150"  align="left">'.$codigo_modularPlanPens.'</td>';
    $tablaStructura.='<td width="100"  align="left"><b>Tipo de Regimen:</b></td><td width="300" align="left">'. $tipo_de_regimenPlanPens .'</td>';
    $tablaStructura.='</tr>';
    $tablaStructura.='<tr>';
    $tablaStructura.='<td width="90"  align="left"><b>Fecha de Ingreso: </b></td><td width="150"  align="left">'.$a_partir_dePlanPens.'</td>';
    $tablaStructura.='<td width="100"  align="left"><b>R. de Pensión Definitiva: </b></td><td width="300" align="left">'.$resolucion_de_pension_definitivaPlanPens.'</td>';
    $tablaStructura.='</tr>';
    $tablaStructura.='<tr>';
    $tablaStructura.='<td width="90"  align="left"><b>Banco: </b></td><td width="150"  align="left">'. $bancoPlanPens.'</td>';
    $tablaStructura.='<td width="100"  align="left"><b>Cuenta: </b></td><td width="300" align="left">'.$cuenta_bancariaPlanPens.'</td>';
    $tablaStructura.='</tr>';
    $tablaStructura.='</table>';
    $tablaStructura.=estilos();
    
    $tablaFirma = '<br><br><br><br><br>';
    $tablaFirma.='<table border="0">';
    $tablaFirma.='<tr>';
    $tablaFirma.='<td width="175"  align="center"></td>';
    $tablaFirma.='<td width="175"  align="center">_______________________________________<br>FIRMA<br>DNI / FECHA:</td>';
    $tablaFirma.='<td width="175"  align="center"></td>';
    $tablaFirma.='</tr>';
    $tablaFirma.='</table>';
    $pdf->SetFont ( 'helvetica', '', 8 );
//     $pdf->writeHTML(estilos());
    $pdf->writeHTML('<br><br>');
    $pdf->writeHTML($tablaStructura);
    $pdf->writeHTML(centrarContenido($res));
    $pdf->writeHTML(totales($tabla));
    $pdf->writeHTML($tablaFirma);
    
    $ruc = $tabla['dniPlanPens'];    
    $razonSocial = $tabla['dniPlanPens'];    
    $periodo = $tabla['dniPlanPens'];
    
//     $cuerpoComprobante = recibo($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens,$ruc,$razonSocial,$periodo);
        
        $pdf->Cell ( 0, 0, '', 0, 1, 'L' );
//         /public/img/home/tuLogo15.png" width="100px;
        $pdf->SetFont ( 'helvetica', '', 7 );
//         $pdf->writeHTML($cuerpoComprobante);
         
    // 	$pdf->Cell ( 0, 0, '', 0, 1, 'L' );
    // 	$pdf->writeHTML($cuerpoComprobante);
    
    //	$pieHTML = "Documento generado el día ".date('d-m-Y');
    //	$pdf->writeHTMLCell(14,1,10,235, $pieHTML, 0, 1, 0, true, '', true);
    
    //	$pdf->Footer();
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}


function detallePlanilla($detalleConceptos){
    $edocuentaHTML = '';
    // DETALLE DE CONCEPTOS
    $edocuentaHTML.=estilos();
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="25" class="titulo2" align="center"><b>N°</b></td>';
    $edocuentaHTML.='<td width="250" class="titulo2" align="center"><b>Descripción</b></td>';
    $edocuentaHTML.='<td width="70" class="titulo2" align="center"><b>Ingresos</b></td>';
    $edocuentaHTML.='<td width="70" class="titulo2" align="center"><b>Deducciones</b></td>';
//     $edocuentaHTML.='<td width="70"  align="center"><b>Aportes Inst.</b></td>';
    $edocuentaHTML.='</tr>';
    
    $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct';
    $matCampoIng = explode(',', $camposIng);
    $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
    $matCampoDed = explode(',', $camposDed);
    $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
    $matCampoTot = explode(',', $camposTot);
    
//     dump($detalleConceptos);
    
    $objConcAct = new ConcAct();
        $resultado = $objConcAct->consultarConcAct (); // EDITABLE
    $objConcAct->cerrarConexion (); // EDITABLE
//     $resultado = $resultado[0];
    $res = $resultado[0];
//     dump($resultado);
    $n = count($res)/2;
    $nIng = count($matCampoIng);
    $nDed = count($matCampoDed);
//     echo "aca con nIng = [$nIng]";
    $cont = 1;
    for ($i = 0; $i < $nIng; $i++) {
        if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])]>0) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td align="center" class="texto3" width="25">'.$cont.'</td>';
//             echo 'Para '.$matCampoIng[$i]." Act [".$detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])]."] <br>";
            $edocuentaHTML.='<td class="texto3" width="250">'.str_replace('ConcAct', '', $matCampoIng[$i]).'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="70">';
            $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td class="texto3" width="70">'.'&nbsp;'.'</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }else{
            //             echo '---Para '.$matCampoIng[$i]." Inact <br>";
        }
    }
    for ($i = 0; $i < $nDed; $i++) {
        if ($res[$matCampoDed[$i]]==1 AND $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoDed[$i])]>0) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="25" class="texto3R">'.$cont.'</td>';
//             echo 'Para '.$matCampoIng[$i]." Act [".$detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])]."] <br>";
            $edocuentaHTML.='<td width="250" class="texto3R">'.str_replace('ConcAct', '', $matCampoDed[$i]).'</td>';
            $edocuentaHTML.='<td width="70" class="texto3R">'.'&nbsp;'.'</td>';
            $edocuentaHTML.='<td align="right" width="70" class="texto3R">';
            $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoDed[$i])];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }else{
            //             echo '---Para '.$matCampoIng[$i]." Inact <br>";
        }
    }
    
    
//     echo "$edocuentaHTML";
//     echo "aca";
//     die();
   
    
//     $edocuentaHTML.='<tr><td colspan="5">&nbsp;</td></tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td colspan="2" align="right" width="275"><b>Totales:</b></td>';
    $edocuentaHTML.='<td align="right" width="70"><b>S/. '.number_format($detalleConceptos['total_haberPlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='<td align="right" width="70"><b>S/. '.number_format($detalleConceptos['total_descuentosPlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='</tr>';
    
    $edocuentaHTML.='</table>';
//     $edocuentaHTML.='<p>&nbsp;</p>';    
//     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_imponiblePlanPens'],2,",",".").'</b></td>';
//     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_liquidoPlanPens'],2,",",".").'</b></td>';
    // PIE DE PAGINA
//     $pieHTML=piepagina_edo_cuenta($reg["neto_1_quin"],$reg["neto_2_quin"],$reg["ing_acumulado"],$reg["imp_acumulado"],$reg["mensaje"],$reg["finanzas"],$reg["rif_agente"]);
   
    
    return $edocuentaHTML;
    
    $pdf->writeHTMLCell(0,0,60,25, $cabeceraHTML, 0, 1, 0, true, '', true);
    $pdf->writeHTML($edocuentaHTML);
    $pdf->writeHTMLCell(14,1,10,235, $pieHTML, 0, 1, 0, true, '', true);
	
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
function totales($detalleConceptos){
    $edocuentaHTML ='<br><table border="1">';
    //     $edocuentaHTML.='<tr><td colspan="5">&nbsp;</td></tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td align="center" class="titulo2" width="131"><b>TOTAL IMPONIBLE:</b></td>';
    $edocuentaHTML.='<td align="center" class="titulo2" width="131"><b>TOTAL HABERE:</b></td>';
    $edocuentaHTML.='<td align="center" class="titulo2" width="131"><b>TOTAL DESCUENTOS:</b></td>';
    $edocuentaHTML.='<td align="center" class="titulo2" width="132"><b>TOTAL LIQUIDO:</b></td>';
    $edocuentaHTML.='</tr><tr>';
    $edocuentaHTML.='<td align="center" width="131"><b>S/. '.number_format($detalleConceptos['total_imponiblePlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='<td align="center" width="131"><b>S/. '.number_format($detalleConceptos['total_haberPlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='<td align="center" width="131"><b>S/. '.number_format($detalleConceptos['total_descuentosPlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='<td align="center" width="132"><b>S/. '.number_format($detalleConceptos['total_liquidoPlanPens'],2,",",".").'</b></td>';
    $edocuentaHTML.='</tr>';
    
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td align="center" colspan="2" class="titulo2" width="262"><b>ESSALUD SEGURO REGULAR PENSIONISTA:</b></td>';
    $edocuentaHTML.='<td align="center" width="131"><b>S/. '.number_format($detalleConceptos['total_imponiblePlanPens']*4/100,2,",",".").'</b></td>';
    $edocuentaHTML.='</tr>';
    
    $edocuentaHTML.='</table>';
    $edocuentaHTML.=estilos();
    //     $edocuentaHTML.='<p>&nbsp;</p>';
    return $edocuentaHTML;
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
//&nbsp;&nbsp;&nbsp;
//Cerrando e imprimiendo documento
$pdf->Output ( "pais.pdf", 'I' );
?>