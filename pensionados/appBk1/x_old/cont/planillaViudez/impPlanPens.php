<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanillaPensionado.php');
require_once(MOD . 'ConcPlanilla.php');
require_once (MOD . 'Pdf.php');

//echo "toy";
// $alinHoja = 'L';
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
//$pdf->Encabezado();
// $pdf->encabezado_def(60);
// $pdf->encabezado_def(60,null,'PLANILLA DE PENSIONES MARZO 2021','PERIODO: MARZO 2021');
$pdf->encabezado_def(60,null,'PLANILLA DE PENSIONES','');
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
// $objPlanillaPensionado = new PlanillaPensionado();
// $tabla = $objPlanillaPensionado->consultarPlanillaPensionadoXidPlanillaPensionado($opt);
// $objPlanillaPensionado->cerrarConexion();

$objPlanillaPensionado = new PlanillaPensionado();
$tablaDatos = $objPlanillaPensionado->consultarPlanillaPensionadoYconceptosXidplanillaPensionado($opt);
$objPlanillaPensionado->cerrarConexion();


// $objPlanillaPensionado = new PlanillaPensionado();
// $tablaConceptos = $objPlanillaPensionado->consultarPlanillaPensionadoXidPlanillaPensionado($opt);
// $objPlanillaPensionado->cerrarConexion();


// dump($tabla);
//$tabla = null;
// if ( is_array( $tablaConceptos ) ) {
//     if (count ( $tablaConceptos ) > 0) {
//         //         return true;
//     }
// } else {
//     $tablaConceptos = array();
// }
// var_dump($tablaConceptos);die();

// dump($tabla);
//$tabla = null;
if ( is_array( $tablaDatos ) ) {
    if (count ( $tablaDatos ) > 0) {
        //         return true;
    }
} else {
    $tablaDatos = array();
}
if (count($tablaDatos) > 0) {
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
    
    
    $datosReporte = datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo);
    //     $cuerpoComprobante = recibo($idPlanillaPensionado, $dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $fuente_de_financiamientoPlanillaPensionado, $planilla2PlanillaPensionado, $total_imponiblePlanillaPensionado, $total_haberPlanillaPensionado, $total_descuentosPlanillaPensionado, $total_liquidoPlanillaPensionado, $aguinaldoPlanillaPensionado, $basicaPlanillaPensionado, $bonif_personalPlanillaPensionado, $ael25671PlanillaPensionado, $aeds081PlanillaPensionado, $tphPlanillaPensionado, $bonif_familiarPlanillaPensionado, $du080_04PlanillaPensionado, $refrig_y_moviPlanillaPensionado, $du90_96PlanillaPensionado, $ds19_94_pcmPlanillaPensionado, $ds21_92_pcmPlanillaPensionado, $bon_especialPlanillaPensionado, $reunificadaPlanillaPensionado, $igvPlanillaPensionado, $cargsimulPlanillaPensionado, $art18_dl_20530PlanillaPensionado, $du073_97PlanillaPensionado, $du011_99PlanillaPensionado, $du037_94PlanillaPensionado, $ds016PlanillaPensionado, $ds017PlanillaPensionado, $ds110_2006PlanillaPensionado, $ds039_2007PlanillaPensionado, $ds120_2008PlanillaPensionado, $ds014_2009PlanillaPensionado, $ds077_2010PlanillaPensionado, $ds031_2011PlanillaPensionado, $ds024_2012PlanillaPensionado, $ds004_2013PlanillaPensionado, $ds003_2014PlanillaPensionado, $ds002_2015PlanillaPensionado, $ds005_2016PlanillaPensionado, $ds020_2017PlanillaPensionado, $ds011_2018PlanillaPensionado, $ds009_2019PlanillaPensionado, $ds006_2020PlanillaPensionado, $ipssPlanillaPensionado, $cafaePlanillaPensionado, $prderrmaPlanillaPensionado, $escolaridadPlanillaPensionado, $decreto_supermo_20_21PlanillaPensionado,$ruc,$razonSocial,$periodo);
    //     $cuerpoComprobante = recibo($idPlanillaPensionado, $fuente_de_financiamientoPlanillaPensionado, $planilla2PlanillaPensionado, $total_imponiblePlanillaPensionado, $total_haberPlanillaPensionado, $total_descuentosPlanillaPensionado, $total_liquidoPlanillaPensionado, $aguinaldoPlanillaPensionado, $basicaPlanillaPensionado, $bonif_personalPlanillaPensionado, $ael25671PlanillaPensionado, $aeds081PlanillaPensionado, $tphPlanillaPensionado, $bonif_familiarPlanillaPensionado, $du080_04PlanillaPensionado, $refrig_y_moviPlanillaPensionado, $du90_96PlanillaPensionado, $ds19_94_pcmPlanillaPensionado, $ds21_92_pcmPlanillaPensionado, $bon_especialPlanillaPensionado, $reunificadaPlanillaPensionado, $igvPlanillaPensionado, $cargsimulPlanillaPensionado, $art18_dl_20530PlanillaPensionado, $du073_97PlanillaPensionado, $du011_99PlanillaPensionado, $du037_94PlanillaPensionado, $ds016PlanillaPensionado, $ds017PlanillaPensionado, $ds110_2006PlanillaPensionado, $ds039_2007PlanillaPensionado, $ds120_2008PlanillaPensionado, $ds014_2009PlanillaPensionado, $ds077_2010PlanillaPensionado, $ds031_2011PlanillaPensionado, $ds024_2012PlanillaPensionado, $ds004_2013PlanillaPensionado, $ds003_2014PlanillaPensionado, $ds002_2015PlanillaPensionado, $ds005_2016PlanillaPensionado, $ds020_2017PlanillaPensionado, $ds011_2018PlanillaPensionado, $ds009_2019PlanillaPensionado, $ds006_2020PlanillaPensionado, $ipssPlanillaPensionado, $cafaePlanillaPensionado, $prderrmaPlanillaPensionado, $escolaridadPlanillaPensionado, $decreto_supermo_20_21PlanillaPensionado,$ruc,$razonSocial,$periodo);
    
    $pdf->SetFont ( 'helvetica', '', 6 );
    $pdf->writeHTML($datosReporte);
    
//     if (count($tablaConceptos) > 0) {
//         $tablaConceptos = $tablaConceptos[0];
        $res = detallePlanilla($tablaDatos);
        $pdf->writeHTML($res);
        
        //         var_dump($tablaConceptos);
//     }
    $pdf->SetFont ( 'helvetica', '', 6 );
    //     $pdf->writeHTML($datosReporte);
    //     $pdf->writeHTML($res);
    //     echo $cuerpoComprobante;
    
    $pdf->Cell ( 0, 0, '', 0, 1, 'L' );
    //         /public/img/home/tuLogo15.png" width="100px;
    //         $pdf->SetFont ( 'helvetica', '', 8 );
    //         $pdf->writeHTML($cuerpoComprobante);
    
    
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
function datosReporte($dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $ruc,$razonSocial,$periodo){
    $fechaEmision = date('d-m-Y');
    // 	echo "aca con [$numFacturaMovimiento]";
    $dni = 'XXXXX';
    $cad = '    			    
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
// function recibo($idPlanillaPensionado, $dniPlanillaPensionado, $apellidos_y_nombresPlanillaPensionado, $fecha_de_nacimientoPlanillaPensionado, $sexoPlanillaPensionado, $codigo_modularPlanillaPensionado, $planillaPlanillaPensionado, $tipo_de_regimenPlanillaPensionado, $resolucion_de_pension_definitivaPlanillaPensionado, $a_partir_dePlanillaPensionado, $bancoPlanillaPensionado, $cuenta_bancariaPlanillaPensionado, $fuente_de_financiamientoPlanillaPensionado, $planilla2PlanillaPensionado, $total_imponiblePlanillaPensionado, $total_haberPlanillaPensionado, $total_descuentosPlanillaPensionado, $total_liquidoPlanillaPensionado, $aguinaldoPlanillaPensionado, $basicaPlanillaPensionado, $bonif_personalPlanillaPensionado, $ael25671PlanillaPensionado, $aeds081PlanillaPensionado, $tphPlanillaPensionado, $bonif_familiarPlanillaPensionado, $du080_04PlanillaPensionado, $refrig_y_moviPlanillaPensionado, $du90_96PlanillaPensionado, $ds19_94_pcmPlanillaPensionado, $ds21_92_pcmPlanillaPensionado, $bon_especialPlanillaPensionado, $reunificadaPlanillaPensionado, $igvPlanillaPensionado, $cargsimulPlanillaPensionado, $art18_dl_20530PlanillaPensionado, $du073_97PlanillaPensionado, $du011_99PlanillaPensionado, $du037_94PlanillaPensionado, $ds016PlanillaPensionado, $ds017PlanillaPensionado, $ds110_2006PlanillaPensionado, $ds039_2007PlanillaPensionado, $ds120_2008PlanillaPensionado, $ds014_2009PlanillaPensionado, $ds077_2010PlanillaPensionado, $ds031_2011PlanillaPensionado, $ds024_2012PlanillaPensionado, $ds004_2013PlanillaPensionado, $ds003_2014PlanillaPensionado, $ds002_2015PlanillaPensionado, $ds005_2016PlanillaPensionado, $ds020_2017PlanillaPensionado, $ds011_2018PlanillaPensionado, $ds009_2019PlanillaPensionado, $ds006_2020PlanillaPensionado, $ipssPlanillaPensionado, $cafaePlanillaPensionado, $prderrmaPlanillaPensionado, $escolaridadPlanillaPensionado, $decreto_supermo_20_21PlanillaPensionado,$ruc,$razonSocial,$periodo){

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
    $edocuentaHTML.='<table border="1" cellpadding="2">';;
    
//     $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct';
//     $matCampoIng = explode(',', $camposIng);
//     $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
//     $matCampoDed = explode(',', $camposDed);
//     $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
//     $matCampoTot = explode(',', $camposTot);
    
//     $objConcAct = new ConcAct();
//     $resultado = $objConcAct->consultarConcAct (); // EDITABLE
//     $objConcAct->cerrarConexion (); // EDITABLE
//     $res = $resultado[0];
//     $n = count($res)/2;
//     $nIng = count($matCampoIng);
//     $nDed = count($matCampoDed);
    
    $cont = 1;
    for ($i = 0; $i < $n/2; $i++) {
        if ($detalleConceptos[$i]['idTipoConcepto']==1) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3" width="90">'.utf8_encode($detalleConceptos[$i]['etiConceptos']).'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }    
//     $cont = 1;
//     for ($i = 0; $i < 20; $i++) {
//         if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
//             $edocuentaHTML.='<tr>';
//             $edocuentaHTML.='<td class="texto3" width="90">'.str_replace('ConcAct', '', $matCampoIng[$i]).'</td>';
//             $edocuentaHTML.='<td class="texto3" align="right" width="30">';
//             $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])];
//             $edocuentaHTML.='</td>';
//             $edocuentaHTML.='</tr>';
//             $cont++;
//         }
//     }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="1" cellpadding="2">';
//     $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct';
//     $matCampoIng = explode(',', $camposIng);
//     $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
//     $matCampoDed = explode(',', $camposDed);
//     $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
//     $matCampoTot = explode(',', $camposTot);
    
//     $objConcAct = new ConcAct();
//     $resultado = $objConcAct->consultarConcAct (); // EDITABLE
//     $objConcAct->cerrarConexion (); // EDITABLE
//     $res = $resultado[0];
//     $n = count($res)/2;
//     $nIng = count($matCampoIng);
//     $nDed = count($matCampoDed);
    for ($i = $n/2; $i < $n; $i++) {
        //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
        if ($detalleConceptos[$i]['idTipoConcepto']==1) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3" width="90">'.utf8_encode($detalleConceptos[$i]['etiConceptos']).'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }    
//     $cont = 1;
//     for ($i = 20; $i < $nIng; $i++) {
//         if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
//             $edocuentaHTML.='<tr>';
//             $edocuentaHTML.='<td class="texto3" width="90">'.str_replace('ConcAct', '', $matCampoIng[$i]).'</td>';
//             $edocuentaHTML.='<td class="texto3" align="right" width="30">';
//             $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])];
//             $edocuentaHTML.='</td>';
//             $edocuentaHTML.='</tr>';
//             $cont++;
//         }
//     }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="1" cellpadding="2">';
    for ($i = 0; $i < $n; $i++) {
        //                         if ($res[$detalleConceptos[$i]]['idTipoConcepto']==1 and $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoIng[$i])]>0) {
        if ($detalleConceptos[$i]['idTipoConcepto']==2) {
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3R" width="90">'.utf8_encode($detalleConceptos[$i]['etiConceptos']).'</td>';
            $edocuentaHTML.='<td class="texto3R" align="right" width="30">';
            $edocuentaHTML.= $detalleConceptos[$i]['mntConcPlanilla'];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }    
//     for ($i = 0; $i < $nDed; $i++) {
//         if ($res[$matCampoDed[$i]]==1 AND $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoDed[$i])]>0) {
//             $edocuentaHTML.='<tr>';
//             $edocuentaHTML.='<td width="90" class="texto3R">'.str_replace('ConcAct', '', $matCampoDed[$i]).'</td>';
//             $edocuentaHTML.='<td align="right" width="30" class="texto3R">';
//             $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanillaPensionado', $matCampoDed[$i])];
//             $edocuentaHTML.='</td>';
//             $edocuentaHTML.='</tr>';
//             $cont++;
//         }else{
//             //             echo '---Para '.$matCampoIng[$i]." Inact <br>";
//         }
//     }
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td>';
    
    $edocuentaHTML.='<table border="0" cellpadding="2">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Monto Imponible:</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= $detalleConceptos[0]['totHabplanillaPensionado'] . '<br>';
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
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
    $edocuentaHTML.='<td width="150" class="texto3">ESSALUD SEGURO REGULAR PENSIONISTA:</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3">Essalud</td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= number_format($detalleConceptos[0]['totImpplanillaPensionado']*4/100,2,",",".");
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="115" class="texto3"><br><br><br><br><br>Firma<br>DNI / Fecha
                    </td>';
    $edocuentaHTML.='<td align="right" width="35" class="texto3">';
    $edocuentaHTML.= number_format($detalleConceptos[0]['totImpplanillaPensionado']*4/100,2,",",".");
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    //     $edocuentaHTML.='<p>&nbsp;</p>';
    //     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_imponiblePlanillaPensionado'],2,",",".").'</b></td>';
    //     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_liquidoPlanillaPensionado'],2,",",".").'</b></td>';
    // PIE DE PAGINA
    //     $pieHTML=piepagina_edo_cuenta($reg["neto_1_quin"],$reg["neto_2_quin"],$reg["ing_acumulado"],$reg["imp_acumulado"],$reg["mensaje"],$reg["finanzas"],$reg["rif_agente"]);
    
    
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
$pdf->Output ( "pais.pdf", 'I' );
?>