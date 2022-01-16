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
// $pdf->encabezado_def(60);
$pdf->encabezado_def(60,null,'PLANILLAS DE PENSIONADOS','( CONSOLIDADO )');
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();
$etiquetaTitulo = '---';


//$comunicacionid = $_REQUEST['id'];
//$aux = $_REQUEST['opt'];
// $aux = $_GET['opt'];
// $aux = $opt;
// $aux = '';

//$n = count($res);
$n = 1;


// echo "aca";
$anio = 2021;
$mes = 8;
$objPlanPens = new PlanPens();
$tabla = $objPlanPens->consultarPlanPensConsolidadoXmes($anio,$mes);
$objPlanPens->cerrarConexion();
// dump($tablaResultado);


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
//     dump($tabla);die();
$n = 0;
// foreach ( $tabla as $ite ) {
//     echo "$n) ite = " .$ite[$n] . ' - ' . $valor. '<br>';
//     echo "$n) ite = " .$ite[$n] .  '<br>';
//     echo "$n) ite = " . $ite .  '<br>';
//     $n++;
// }
$cad = detallePlanilla($tabla);
$pdf->writeHTML($cad);
    
    
//     $etiquetas = array('Monto','Frecuencia');
//     $campos = array('sum_basicaPlanPens','cant_basicaPlanPens','sum_bonif_personalPlanPens','cant_bonif_personalPlanPens');
//     $datos = $pdf->procesandoDatos($tabla,$campos);
//     $anchoColumnas = array(20,70,20,70);
//     $alineacion = array('L','L','L','L');
    
//     $pdf->Cell ( 0, 10, '', 0, 1, 'L' );
//     $pdf->llenarTabla($etiquetas,$datos,$campos,$alineacion,$anchoColumnas,true);
    
//     $header = array('Monto','Frecuencia');
//     $data = $tabla;
//     $campos = array('sum_basicaPlanPens','cant_basicaPlanPens');
//     $alineacion = array('C','C');
//     $anchoColumnas = array('50','50');
//     $pdf->llenarTabla($header, $data, $campos, $alineacion, $anchoColumnas);
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}
// function recibo($fecEdoMovimiento,$propietario,$monto,$concepto,$numCasaPersona,$nomBanco,$refMovimiento){

//&nbsp;&nbsp;&nbsp;
//Cerrando e imprimiendo documento
$pdf->Output ( "pais.pdf", 'I' );

function detallePlanilla($detalleConceptos){
    $edocuentaHTML = '';
    // DETALLE DE CONCEPTOS
    $edocuentaHTML.=estilos();

    $edocuentaHTML.='<br><br><table border="1" cellpadding="2">';
    $edocuentaHTML.='<tr>';
    $edocuentaHTML.='<td width="120" class="titulo2" align="center" colspan="2"><b>Concepto</b></td>';
    $edocuentaHTML.='<td width="120" class="titulo2" align="center" colspan="2"><b>Monto</b></td>';
    $edocuentaHTML.='<td width="120" class="titulo2" align="center"><b>Frecuencia</b></td>';
    $edocuentaHTML.='</tr>';
//     $camposIng = 'aguinaldoConcAct,basicaConcAct,bonif_personalConcAct,ael25671ConcAct,aeds081ConcAct,tphConcAct,bonif_familiarConcAct,du080_04ConcAct,refrig_y_moviConcAct,du90_96ConcAct,ds19_94_pcmConcAct,ds21_92_pcmConcAct,bon_especialConcAct,reunificadaConcAct,igvConcAct,cargsimulConcAct,art18_dl_20530ConcAct,du073_97ConcAct,du011_99ConcAct,du037_94ConcAct,ds016ConcAct,ds017ConcAct,ds110_2006ConcAct,ds039_2007ConcAct,ds120_2008ConcAct,ds014_2009ConcAct,ds077_2010ConcAct,ds031_2011ConcAct,ds024_2012ConcAct,ds004_2013ConcAct,ds003_2014ConcAct,ds002_2015ConcAct,ds005_2016ConcAct,ds020_2017ConcAct,ds011_2018ConcAct,ds009_2019ConcAct,ds006_2020ConcAct';
    $camposIng = 'aguinaldoPlanPens,basicaPlanPens,bonif_personalPlanPens,ael25671PlanPens,aeds081PlanPens,tphPlanPens,bonif_familiarPlanPens,du080_04PlanPens,refrig_y_moviPlanPens,du90_96PlanPens,ds19_94_pcmPlanPens,ds21_92_pcmPlanPens,bon_especialPlanPens,reunificadaPlanPens,igvPlanPens,cargsimulPlanPens,art18_dl_20530PlanPens,du073_97PlanPens,du011_99PlanPens,du037_94PlanPens,ds016PlanPens,ds017PlanPens,ds110_2006PlanPens,ds039_2007PlanPens,ds120_2008PlanPens,ds014_2009PlanPens,ds077_2010PlanPens,ds031_2011PlanPens,ds024_2012PlanPens,ds004_2013PlanPens,ds003_2014PlanPens,ds002_2015PlanPens,ds005_2016PlanPens,ds020_2017PlanPens,ds011_2018PlanPens,ds009_2019PlanPens,ds006_2020PlanPens';
    $matCampoIng = explode(',', $camposIng);
    $camposDed = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
    $matCampoDed = explode(',', $camposDed);
    $camposTot = 'ipssConcAct,cafaeConcAct,prderrmaConcAct';
    $matCampoTot = explode(',', $camposTot);
    
    $n = count($matCampoIng);
    
//     $objConcAct = new ConcAct();
//     $resultado = $objConcAct->consultarConcAct (); // EDITABLE
//     $objConcAct->cerrarConexion (); // EDITABLE
//     $res = $resultado[0];
//     $n = count($res)/2;
//     $nIng = count($matCampoIng);
//     $nDed = count($matCampoDed);
    $cont = 1;
    for ($i = 0; $i < $n; $i++) {
//         if ($res[$matCampoIng[$i]]==1 and $detalleConceptos[str_replace('ConcAct', 'PlanPens','sum_'. $matCampoIng[$i])]>0) {
//         if ($res[$matCampoIng[$i]]==1) 
        {
            $cadConcepto = str_replace('PlanPens', '', $matCampoIng[$i]);
            $cadConcepto = str_replace('_', ' ', $cadConcepto);
            $cadConcepto = strtoupper($cadConcepto);
            $edocuentaHTML.='<tr>';
            $edocuentaHTML.='<td class="texto3" width="120">'.$cadConcepto.'</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="120">';
            $edocuentaHTML.= $detalleConceptos['sum_'.$matCampoIng[$i]];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='<td class="texto3" align="right" width="120">';
            $edocuentaHTML.= $detalleConceptos['cant_'.$matCampoIng[$i]];
            $edocuentaHTML.='</td>';
            $edocuentaHTML.='</tr>';
            $cont++;
        }
    }
    $edocuentaHTML.='</table>';
    
    //     $edocuentaHTML.='<p>&nbsp;</p>';
    //     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_imponiblePlanPens'],2,",",".").'</b></td>';
    //     $edocuentaHTML.='<td align="right" width="70"><b>'.number_format($detalleConceptos['total_liquidoPlanPens'],2,",",".").'</b></td>';
    // PIE DE PAGINA
    //     $pieHTML=piepagina_edo_cuenta($reg["neto_1_quin"],$reg["neto_2_quin"],$reg["ing_acumulado"],$reg["imp_acumulado"],$reg["mensaje"],$reg["finanzas"],$reg["rif_agente"]);
    
    
    return $edocuentaHTML;
    
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
?>