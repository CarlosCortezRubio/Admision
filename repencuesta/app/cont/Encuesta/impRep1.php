<?php
require_once ('../../../config/config.php');
require_once (MOD . 'Encuesta.php');
require_once (MOD . 'Pdf.php');

// $alinHoja = 'L';
$alinHoja = 'P';
// Instanciando la clase PDF
$pdf = MYPDF::crearPdf ( $alinHoja );
// Encabezado predeterminado
//$pdf->Encabezado();
$pdf->encabezado_def(60,'','Reporte de Total profesor / encuestas');
// set font
$pdf->SetFont ( 'helvetica', '', 10 );
// add a page
$pdf->AddPage ();

$aux = $opt;

//     echo "Reporte de Total profesor / encuestas";
$objEncuesta = new Encuesta();
$tabla = $objEncuesta->totalProfesores();
$objEncuesta->cerrarConexion();
// dump($tabla);

if ( is_array( $tabla ) ) {
    if (count ( $tabla ) > 0) {

    }
} else {
    $tabla = array();
}
if (count($tabla) > 0) {
    $pdf->SetFont ( 'helvetica', '', 7 );
    $pdf->Cell ( 0, 0, '', 0, 1, 'L' );
    $contenido = crearCuerpo($tabla);
    $pdf->writeHTML($contenido);
} else {
    $mns = "Actualmente no se puede presentar el reporte, por favor intentelo nuevamente";
    // 	$mns = 'test';
    $pdf->Cell ( 0, 10, $mns, 0, 1, 'C' );
}
$pdf->Output ( "UNM.pdf", 'I' );

function crearCuerpo($tablaResultado){
    $cont = 1;
    $objEncuesta = new Encuesta();
$cad = '
<table id="tabla_contenido" cellpadding="2" border="1">
<thead>
<tr>
<th class="titulo2" width="20">#</th>
<th class="titulo2" width="150">Profesor</th>
<th class="titulo2" width="100">Total Encuestas</th>
<th class="titulo2" width="100">Encuestas Realizadas</th>
<th class="titulo2" width="100">Encuestas Pendientes</th>
<th class="titulo2" width="50">Porcentaje</th>
</tr>
</thead>
<tbody>';
    foreach ($tablaResultado as $ite) {
        $idProfesor = $ite["idprofesor"];
        $nomProfesor = $ite["nom1profesor"] .' '. $ite["ape1profesor"];        
        $res1 = $objEncuesta->cantEncXidProfesor($idProfesor);
        $res2 = $objEncuesta->cantEncRealizadasXidProfesor($idProfesor);
        $res0 = $res1 - $res2;
        $porc = 0;
        if ($res2 > 0) {
            $porc = $res2 * 100 / $res1;
        }
        $porc = number_format($porc,2);
            $cad.='<tr>';
            $cad.='<td class="texto texto3C" width="20">'.$cont .'</td>';
			$cad.='<td class="texto texto3" width="150">'.$nomProfesor .'</td>';
            $cad.='<td class="texto texto3C" width="100">'.$res1 .'</td>';
            $cad.='<td class="texto texto3C" width="100">'.$res2 .'</td>';
            $cad.='<td class="texto texto3C" width="100">'.$res0 .'</td>';
            $cad.='<td class="texto texto3C" width="50">'.$porc.'%' .'</td>';
            $cad.='</tr>';
        $cont++;
    }
    $cad.='</tbody>';
    $cad.='</table>';
    $cad.=estilos();
    $objEncuesta->cerrarConexion();
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
    .texto{
        padding-left:15px;
        padding-top:15px;
        padding-bottom:15px;
    }
    .texto3{
        text-align:left;
    }
    .texto3R{
        text-align:right;
    }
    .texto3C{
        text-align:center;
    }
    </style>
    ';
    return $cad;
}
?>