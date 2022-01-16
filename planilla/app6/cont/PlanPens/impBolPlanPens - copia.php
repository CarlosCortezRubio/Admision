<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'Pdf.php');

//echo "toy";
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
    $total_imponiblePlanPens = $tabla['total_imponiblePlanPens'];
    $total_haberPlanPens = $tabla['total_haberPlanPens'];
    $total_descuentosPlanPens = $tabla['total_descuentosPlanPens'];
    $total_liquidoPlanPens = $tabla['total_liquidoPlanPens'];
    $aguinaldoPlanPens = $tabla['aguinaldoPlanPens'];
    $basicaPlanPens = $tabla['basicaPlanPens'];
    $bonif_personalPlanPens = $tabla['bonif_personalPlanPens'];
    $ael25671PlanPens = $tabla['ael25671PlanPens'];
    $aeds081PlanPens = $tabla['aeds081PlanPens'];
    $tphPlanPens = $tabla['tphPlanPens'];
    $bonif_familiarPlanPens = $tabla['bonif_familiarPlanPens'];
    $du080_04PlanPens = $tabla['du080_04PlanPens'];
    $refrig_y_moviPlanPens = $tabla['refrig_y_moviPlanPens'];
    $du90_96PlanPens = $tabla['du90_96PlanPens'];
    $ds19_94_pcmPlanPens = $tabla['ds19_94_pcmPlanPens'];
    $ds21_92_pcmPlanPens = $tabla['ds21_92_pcmPlanPens'];
    $bon_especialPlanPens = $tabla['bon_especialPlanPens'];
    $reunificadaPlanPens = $tabla['reunificadaPlanPens'];
    $igvPlanPens = $tabla['igvPlanPens'];
    $cargsimulPlanPens = $tabla['cargsimulPlanPens'];
    $art18_dl_20530PlanPens = $tabla['art18_dl_20530PlanPens'];
    $du073_97PlanPens = $tabla['du073_97PlanPens'];
    $du011_99PlanPens = $tabla['du011_99PlanPens'];
    $du037_94PlanPens = $tabla['du037_94PlanPens'];
    $ds016PlanPens = $tabla['ds016PlanPens'];
    $ds017PlanPens = $tabla['ds017PlanPens'];
    $ds110_2006PlanPens = $tabla['ds110_2006PlanPens'];
    $ds039_2007PlanPens = $tabla['ds039_2007PlanPens'];
    $ds120_2008PlanPens = $tabla['ds120_2008PlanPens'];
    $ds014_2009PlanPens = $tabla['ds014_2009PlanPens'];
    $ds077_2010PlanPens = $tabla['ds077_2010PlanPens'];
    $ds031_2011PlanPens = $tabla['ds031_2011PlanPens'];
    $ds024_2012PlanPens = $tabla['ds024_2012PlanPens'];
    $ds004_2013PlanPens = $tabla['ds004_2013PlanPens'];
    $ds003_2014PlanPens = $tabla['ds003_2014PlanPens'];
    $ds002_2015PlanPens = $tabla['ds002_2015PlanPens'];
    $ds005_2016PlanPens = $tabla['ds005_2016PlanPens'];
    $ds020_2017PlanPens = $tabla['ds020_2017PlanPens'];
    $ds011_2018PlanPens = $tabla['ds011_2018PlanPens'];
    $ds009_2019PlanPens = $tabla['ds009_2019PlanPens'];
    $ds006_2020PlanPens = $tabla['ds006_2020PlanPens'];
    $ipssPlanPens = $tabla['ipssPlanPens'];
    $cafaePlanPens = $tabla['cafaePlanPens'];
    $prderrmaPlanPens = $tabla['prderrmaPlanPens'];
    $escolaridadPlanPens = $tabla['escolaridadPlanPens'];
    $decreto_supermo_20_21PlanPens = $tabla['decreto_supermo_20_21PlanPens']; 
    
    
    
    
    $ruc = $tabla['dniPlanPens'];    
    $razonSocial = $tabla['dniPlanPens'];    
    $periodo = $tabla['dniPlanPens'];
    
    
    // 	$nomMotivo = $tabla['nomMotivo'];
    // 	$nomMotivo = $nomMotivo .' '.$tabla['obsMovimiento'];
//     $nomMotivo = $tabla['obsMovimiento'];
//     $numCasaPersona = $tabla['numCasaPersona'];
//     $nomBanco = $tabla['nomBanco'];
//     $refMovimiento = $tabla['refMovimiento'];
//     $idEdoMovimiento = $tabla['idEdoMovimiento'];
//     $idFormaPago = $tabla['idFormaPago'];
//     $formaPago = $tabla['nomFormaPago'];
//     $numFacturaMovimiento = $tabla['numFactMovimiento'];
    
    // 	echo "[$numFacturaMovimiento]";
    
    //	echo "[$idEdoMovimiento]";
//     if ($idFormaPago==2) {
//         $nomBanco = "-- Pago realizado en Efectivo --";
//     }
    
    $cuerpoComprobante = recibo($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens,$ruc,$razonSocial,$periodo);
    
//     echo $cuerpoComprobante;
        
        $pdf->Cell ( 0, 0, '', 0, 1, 'L' );
//         /public/img/home/tuLogo15.png" width="100px;
        $pdf->SetFont ( 'helvetica', '', 8 );
        $pdf->writeHTML($cuerpoComprobante);
        
        
//         $varFirmaMedGen = '<img height="50px;" src="' . PUB_URLSIST. 'img/home/tuLogo1.png"/>';
        //         $pdf->writeHTMLCell(50,5,20,40,$varFirmaMedGen,0,0,false,true,'L');  // Vertical
//         $pdf->writeHTMLCell(50,5,20,5,$varFirmaMedGen,0,0,false,true,'L');     // Horizontal
//         $sello_usuario = 'firmaSelloDemo.png';
//         $varFirmaMedGen = '<img height="50px;" src="' . PUB_URLSIST. 'firm/'.$sello_usuario.'"/>';
//         $pdf->writeHTMLCell(50,5,130,126,$varFirmaMedGen,0,0,false,true,'L');
        
        
//         $autorizado = "Por la Administración";
//         $pdf->writeHTMLCell(50,5,125,137, $autorizado, 0, 0, 0, true, 'C', true);
        // 	    $pdf->SetFont ( 'helvetica', '', 6 );
   
    // 	$cuerpoComprobante = recibo($fecEdoMovimiento,$nomPersona,$montoMovimiento,$nomMotivo,$numCasaPersona,$nomBanco,$refMovimiento);
    
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
// function recibo($fecEdoMovimiento,$propietario,$monto,$concepto,$numCasaPersona,$nomBanco,$refMovimiento){
function recibo($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens,$ruc,$razonSocial,$periodo){
    $fechaEmision = date('d-m-Y');
    // 	echo "aca con [$numFacturaMovimiento]";
    $dni = 'XXXXX';
    $cad = '
<table border="0">
	<tr>
        <td>
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
            <br><br>
            <table border="0" cellpadding="4">
            	<tr>
            		<td class="">
            			<span class=""><b>APELLIDOS Y NOMBRES:</b></span>
            		</td>
            		<td class="">
            			<span class="">'.$apellidos_y_nombresPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="">
            			<span class=""><b>DNI:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$dniPlanPens.'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>FECHA DE NACIMIENTO:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$fecha_de_nacimientoPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>SEXO:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$sexoPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>CODIGO MODULAR:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$codigo_modularPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>TIPO DE REGIMEN:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$tipo_de_regimenPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>FECHA DE INGRESO:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$a_partir_dePlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>RESOLUCION DE PENSION DEFINITIVA:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$resolucion_de_pension_definitivaPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>BANCO:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$bancoPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<span class=""><b>CUENTA:</b>.</span>
            		</td>
            		<td class="">
            			<span class="">'.$cuenta_bancariaPlanPens .'</span>
            		</td>
            	</tr>
            </table>
            <br><br>
            <table border="1" cellpadding="4">
            	<tr>
            		<td class="titulo2" colspan="4">
            			<span class=""><b>INGRESOS</b></span>
            		</td>
            		<td class="titulo2" colspan="2">
            			<span class=""><b>DESCUENTOS</b>.</span>
            		</td>
            		<td class="titulo2" colspan="2">
            			<span class="" colspan="2"><b>TOTALES</b>.</span>
            		</td>
            	</tr>
            </table>

            <table border="0" cellpadding="4">
            	<tr>
            		<td class="texto3">
            			<span class="">Básica</span>
            		</td>
            		<td class="">
            			<span class="">'.$basicaPlanPens .'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Du011</span>
            		</td>
            		<td class="">
            			<span class="">'.$du011_99PlanPens .'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ipss</span>
            		</td>
            		<td class="">
            			<span class="">'.$ipssPlanPens .'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Monto Bruto:</span>
            		</td>
            		<td class="">
            			<span class="">S/ 1,869.74</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Personal</span>
            		</td>
            		<td class="">
            			<span class="">'.$bonif_personalPlanPens .'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Du037</span>
            		</td>
            		<td class="">
            			<span class="">'.$du037_94PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Cafae</span>
            		</td>
            		<td class="">
            			<span class="">'.$cafaePlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Total Descuentos:</span>
            		</td>
            		<td class="">
            			<span class="">S/ 1,869.74</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Ael25671</span>
            		</td>
            		<td class="">
            			<span class="">'.$ael25671PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds016</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds016PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Prderrma</span>
            		</td>
            		<td class="">
            			<span class="">'.$prderrmaPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Monto Liquidido:</span>
            		</td>
            		<td class="">
            			<span class="">S/ 1,869.74</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Aeds081</span>
            		</td>
            		<td class="">
            			<span class="">'.$aeds081PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds017</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds017PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class="">Monto Imponible:</span>
            		</td>
            		<td class="">
            			<span class="">S/ 1,869.74</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Tph</span>
            		</td>
            		<td class="">
            			<span class="">'.$tphPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds110</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds110_2006PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Bon. Familiar</span>
            		</td>
            		<td class="">
            			<span class="">'.$bonif_familiarPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds039</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds039_2007PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Du080</span>
            		</td>
            		<td class="">
            			<span class="">'.$du080_04PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds120</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds120_2008PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>

            	<tr>
            		<td class="texto3">
            			<span class="">Refmov</span>
            		</td>
            		<td class="">
            			<span class="">'.$refrig_y_moviPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds014</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds014_2009PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="titulo3" colspan="2" rowspan="2">
            			<span class="">CONTRIBUCIÓN DEL EMPLEADOR</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Du90</span>
            		</td>
            		<td class="">
            			<span class="">'.$du90_96PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds077</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds077_2010PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Ds19</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds19_94_pcmPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds031-11</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds031_2011PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class="">Essalud</span>
            		</td>
            		<td class="">
            			<span class="">S/ 72.90</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Ds21</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds21_92_pcmPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds024-12</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds024_2012PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Aguinaldo</span>
            		</td>
            		<td class="">
            			<span class="">'.$aguinaldoPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds004-13</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds004_2013PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Escolaridad</span>
            		</td>
            		<td class="">
            			<span class="">'.$escolaridadPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds003-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds003_2014PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Bono esp</span>
            		</td>
            		<td class="">
            			<span class="">'.$bon_especialPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds002-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds002_2015PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Reunifica</span>
            		</td>
            		<td class="">
            			<span class="">'.$reunificadaPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds005-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds005_2016PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Igv</span>
            		</td>
            		<td class="">
            			<span class="">'.$igvPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds020-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds020_2017PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Art18</span>
            		</td>
            		<td class="">
            			<span class="">'.$art18_dl_20530PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds011-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds011_2018PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Cgo.Simultaneo</span>
            		</td>
            		<td class="">
            			<span class="">'.$cargsimulPlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds009-201</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds009_2019PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            	<tr>
            		<td class="texto3">
            			<span class="">Du073</span>
            		</td>
            		<td class="">
            			<span class="">'.$du037_94PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class="">Ds006-202</span>
            		</td>
            		<td class="">
            			<span class="">'.$ds006_2020PlanPens.'</span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            		<td class="texto3">
            			<span class=""></span>
            		</td>
            		<td class="">
            			<span class=""></span>
            		</td>
            	</tr>
            </table>
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
//&nbsp;&nbsp;&nbsp;
//Cerrando e imprimiendo documento
$pdf->Output ( "pais.pdf", 'I' );
?>