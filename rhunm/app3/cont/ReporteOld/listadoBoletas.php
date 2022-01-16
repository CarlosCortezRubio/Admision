<?php
require_once ('../../../config/config.php');
require_once (MOD . 'PlanPens.php');
require_once (MOD . 'PlanPensCon.php');
require_once(MOD . 'ConcAct.php');
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
// $etiquetaTitulo = '---';


//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
// $aux = $_GET['opt'];
// $aux = $opt;
$aux = '';

//$n = count($res);
$n = 1;
// $objPlanPens = new PlanPens();
// $tabla = $objPlanPens->consultarPlanPens();
// $objPlanPens->cerrarConexion();

switch ($tipo) {
    case 1:
        $objPlanPens = new PlanPens();
        $tablaConceptos = $objPlanPens->consultarPlanPensXanioYmes($anio, $mes);
        $objPlanPens->cerrarConexion();
        $titulo = 'PLANILLAS DE PENSIONADOS';
        break;
    case 2:
        $objPlanPens = new PlanPensCon();
        $tablaConceptos = $objPlanPens->consultarPlanPensXanioYmes($anio, $mes);
        $objPlanPens->cerrarConexion();
        $titulo = 'PLANILLAS DE VIUDEZ';
        break;
    case 3:
        //         $objPlanPens = new PlanPens();
        //         $tabla = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
        //         $objPlanPens->cerrarConexion();
        //         $titulo = 'PLANILLAS DE ORFANDAD';
        break;
}
// $objPlanPens = new PlanPens();
// $tablaConceptos = $objPlanPens->consultarPlanPensXanioYmes($anio, $mes);
// $objPlanPens->cerrarConexion();
// dump($tabla);
//$tabla = null;
if ( is_array( $tablaConceptos ) ) {
    if (count ( $tablaConceptos ) > 0) {
        //         return true;
    }
} else {
    $tablaConceptos = array();
}
// dump($tablaConceptos);die();

$tablaDatos = $tablaConceptos;

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
//     $tablaDatos = $tablaDatos[0];
//     dump($tablaDatos);die();
    $cont = 1;
    foreach ($tablaDatos as $tabla) {
        
        $idPlanPens = $tabla['idPlanPens'];
        $dniPlanPens = $tabla['dniPlanPens'];
        $apellidos_y_nombresPlanPens = $tabla['apellidos_y_nombresPlanPens'];
        $fecha_de_nacimientoPlanPens = $tabla['fecha_de_nacimientoPlanPens'];
        $sexoPlanPens = $tabla['sexoPlanPens'];
        if ($sexoPlanPens==1) {
            $sexoPlanPens = 'Masculino';
        }else{
            $sexoPlanPens = 'Femenino';
        }
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
        
        $datosReporte = datosReporte($dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $ruc,$razonSocial,$periodo);
        
        if (count($tablaConceptos) > 0) {
//             $tablaConceptos = $tablaConceptos[0];
//             $res = detallePlanilla($tablaConceptos,$datosReporte);
            $res = detallePlanilla($tabla,$datosReporte);
            $pdf->SetFont ( 'helvetica', '', 5 );
            $pdf->writeHTML($res);
        }
        $cont++;
        if ($cont==5) {
            $cont = 1;
            $pdf->AddPage ();
        }
    }
    $pdf->SetFont ( 'helvetica', '', 5 );
    $pdf->Cell ( 0, 0, '', 0, 1, 'L' );

} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}

function datosReporte($dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $ruc,$razonSocial,$periodo){
    $fechaEmision = date('d-m-Y');
    // 	echo "aca con [$numFacturaMovimiento]";
    $dni = 'XXXXX';
    $cad = estilos();
    $cad .= '
            <table border="0" cellpadding="0">
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

            <table border="0" cellpadding="2">
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$apellidos_y_nombresPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$dniPlanPens.'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$fecha_de_nacimientoPlanPens .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$sexoPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C">
            			<span class="">'.$codigo_modularPlanPens .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$tipo_de_regimenPlanPens .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$a_partir_dePlanPens .'</span>
            		</td>
            		<td class="titulo2C">
            			<span class="">'.$resolucion_de_pension_definitivaPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$bancoPlanPens .'</span>
            		</td>
            	</tr>
            	<tr>
            		<td class="titulo2C" colspan="3">
            			<span class="">'.$cuenta_bancariaPlanPens.'</span>
            		</td>
            	</tr>
            </table>
';
    return $cad;
}
// function recibo($idPlanPens, $dniPlanPens, $apellidos_y_nombresPlanPens, $fecha_de_nacimientoPlanPens, $sexoPlanPens, $codigo_modularPlanPens, $planillaPlanPens, $tipo_de_regimenPlanPens, $resolucion_de_pension_definitivaPlanPens, $a_partir_dePlanPens, $bancoPlanPens, $cuenta_bancariaPlanPens, $fuente_de_financiamientoPlanPens, $planilla2PlanPens, $total_imponiblePlanPens, $total_haberPlanPens, $total_descuentosPlanPens, $total_liquidoPlanPens, $aguinaldoPlanPens, $basicaPlanPens, $bonif_personalPlanPens, $ael25671PlanPens, $aeds081PlanPens, $tphPlanPens, $bonif_familiarPlanPens, $du080_04PlanPens, $refrig_y_moviPlanPens, $du90_96PlanPens, $ds19_94_pcmPlanPens, $ds21_92_pcmPlanPens, $bon_especialPlanPens, $reunificadaPlanPens, $igvPlanPens, $cargsimulPlanPens, $art18_dl_20530PlanPens, $du073_97PlanPens, $du011_99PlanPens, $du037_94PlanPens, $ds016PlanPens, $ds017PlanPens, $ds110_2006PlanPens, $ds039_2007PlanPens, $ds120_2008PlanPens, $ds014_2009PlanPens, $ds077_2010PlanPens, $ds031_2011PlanPens, $ds024_2012PlanPens, $ds004_2013PlanPens, $ds003_2014PlanPens, $ds002_2015PlanPens, $ds005_2016PlanPens, $ds020_2017PlanPens, $ds011_2018PlanPens, $ds009_2019PlanPens, $ds006_2020PlanPens, $ipssPlanPens, $cafaePlanPens, $prderrmaPlanPens, $escolaridadPlanPens, $decreto_supermo_20_21PlanPens,$ruc,$razonSocial,$periodo){

function detallePlanilla($detalleConceptos,$datosReporte){
//     dump($detalleConceptos);
//     $detalleConceptos = $detalleConceptos[0];
    $edocuentaHTML = '';
    // DETALLE DE CONCEPTOS
    $edocuentaHTML.=estilos();
    $edocuentaHTML.='<table border="1" cellpadding="0" width="450">';
        $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="120" class="titulo2" align="center" colspan="0"><b>Datos personales</b></td>';
            $edocuentaHTML.='<td width="170" class="titulo2" align="center" colspan="2"><b>Ingresos</b></td>';
            $edocuentaHTML.='<td width="85" class="titulo2" align="center"><b>Egresos</b></td>';
            $edocuentaHTML.='<td width="135" class="titulo2" align="center"><b>Totales</b></td>';
//             $edocuentaHTML.='<td width="255" class="titulo2" align="center"><b>Egresos</b></td>';
        $edocuentaHTML.='</tr>';
        $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="120" cellpadding="0">'.$datosReporte;
//             $edocuentaHTML.='<td width="120">*******************************';
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td width="85">';
                $edocuentaHTML.='<table border="1" cellpadding="2">';
                
                    $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct,p_del20530ConcAct,decreto_supermo_20_21ConcAct';
                    $matCampoIng = explode(',', $camposIng);
                    $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
                    $matCampoDed = explode(',', $camposDed);
                    $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
                    $matCampoTot = explode(',', $camposTot);
                    
                    $objConcAct = new ConcAct();
                    $resultado = $objConcAct->consultarConcAct (); // EDITABLE
                    $objConcAct->cerrarConexion (); // EDITABLE
                    $res = $resultado[0];
                    $n = count($res)/2;
                    $nIng = count($matCampoIng);
                    $nDed = count($matCampoDed);
                    $cont = 1;
                    for ($i = 0; $i < 20; $i++) {
                        if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])]>0) {
                            $edocuentaHTML.='<tr>';
                            $edocuentaHTML.='<td class="texto3" width="55">'.str_replace('ConcAct', '', $matCampoIng[$i]).'</td>';
                            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
                            $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])];
                            $edocuentaHTML.='</td>';
                            $edocuentaHTML.='</tr>';
                            $cont++;
                        }
                    }    
                $edocuentaHTML.='</table>';
    
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td width="85">';
    
                $edocuentaHTML.='<table border="1" cellpadding="2">';       
                    $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct,p_del20530ConcAct,decreto_supermo_20_21ConcAct';
                    $matCampoIng = explode(',', $camposIng);
                    $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
                    $matCampoDed = explode(',', $camposDed);
                    $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
                    $matCampoTot = explode(',', $camposTot);
                    
                    $objConcAct = new ConcAct();
                    $resultado = $objConcAct->consultarConcAct (); // EDITABLE
                    $objConcAct->cerrarConexion (); // EDITABLE
                    $res = $resultado[0];
                    $n = count($res)/2;
                    $nIng = count($matCampoIng);
                    $nDed = count($matCampoDed);
                    $cont = 1;
                    for ($i = 20; $i < $nIng; $i++) {
                        if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])]>0) {
                            $edocuentaHTML.='<tr>';
                            $edocuentaHTML.='<td class="texto3" width="55">'.str_replace('ConcAct', '', $matCampoIng[$i]).'</td>';
                            $edocuentaHTML.='<td class="texto3" align="right" width="30">';
                            $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoIng[$i])];
                            $edocuentaHTML.='</td>';
                            $edocuentaHTML.='</tr>';
                            $cont++;
                        }
                    }    
                $edocuentaHTML.='</table>';
        
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td  width="85">';

        $edocuentaHTML.='<table border="1" cellpadding="2">';
            for ($i = 0; $i < $nDed; $i++) {
                if ($res[$matCampoDed[$i]]==1 AND $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoDed[$i])]>0) {
                    $edocuentaHTML.='<tr>';
                    $edocuentaHTML.='<td width="55" class="texto3R">'.str_replace('ConcAct', '', $matCampoDed[$i]).'</td>';
                    $edocuentaHTML.='<td align="right" width="30" class="texto3R">';
                    $edocuentaHTML.= $detalleConceptos[str_replace('ConcAct', 'PlanPens', $matCampoDed[$i])];
                    $edocuentaHTML.='</td>';
                    $edocuentaHTML.='</tr>';
                    $cont++;
                }else{
                    //             echo '---Para '.$matCampoIng[$i]." Inact <br>";
                }
            }
        $edocuentaHTML.='</table>';
            
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='<td width="135">';

    $edocuentaHTML.='<table border="1" cellpadding="2">';
            $edocuentaHTML.='<tr>';
                $edocuentaHTML.='<td width="100" class="texto3">Monto Bruto:</td>';
                $edocuentaHTML.='<td align="right" width="35" class="texto3">';
                $edocuentaHTML.= $detalleConceptos['total_haberPlanPens'];
                $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $edocuentaHTML.='<tr>';
                $edocuentaHTML.='<td width="100" class="texto3">Total Descuentos:</td>';
                $edocuentaHTML.='<td align="right" width="35" class="texto3">';
                $edocuentaHTML.= $detalleConceptos['total_descuentosPlanPens'];
                $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $edocuentaHTML.='<tr>';
                $edocuentaHTML.='<td width="100" class="texto3">Monto Lquidido:</td>';
                $edocuentaHTML.='<td align="right" width="35" class="texto3">';
                $edocuentaHTML.= $detalleConceptos['total_liquidoPlanPens'];
                $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $edocuentaHTML.='<tr>';$edocuentaHTML.='<td width="135" class="texto3"><br><br><br></td>';$edocuentaHTML.='</tr>';
            $edocuentaHTML.='<tr>';
                $edocuentaHTML.='<td width="135" class="texto3">CONTRIBUCIÓN DEL EMPLEADOR:</td>';
            $edocuentaHTML.='</tr>';
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td width="100" class="texto3">Essalud</td>';
            $edocuentaHTML.='<td align="right" width="35" class="texto3">';
            $edocuentaHTML.= number_format($detalleConceptos['total_imponiblePlanPens']*4/100,2,",",".");
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
            
    $edocuentaHTML.='</td>';
    $edocuentaHTML.='</tr>';
    $edocuentaHTML.='</table>';
    
    
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
        font-size:4.5px;
        padding-left:15px;
        padding-top:5px;
        padding-bottom:5px;
        text-align:left;
    }
    .texto3R{
        font-size:4.5px;
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