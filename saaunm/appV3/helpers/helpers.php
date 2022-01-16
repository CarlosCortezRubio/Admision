<?php 



function cabeceraDataTable($etiquetas, $nomTabla = 'tabla_contenido')
{
    $cad = '<table id="' . $nomTabla . '" class="table table-striped table-bordered"><thead><tr>';
    foreach ($etiquetas as $ite) {
        $cad .= "<th class='line'>$ite</th>";
    }
    $cad .= "</tr></thead>";
    return $cad;
}

function contenidoDataTable($campos, $datos, $campoClav)
{
    $cont = 1;
    $cad = "<tbody>";
    if ($datos=='') {
        return '';
    }
    foreach ($datos as $ite_datos) {
        $cad .= "<tr>";
        foreach ($campos as $ite_campos) {
            $band = tipoCampoDataTable($ite_campos);
            // echo "[$band]<br>";
            //                 echo "campo = $ite_campos -> $band---";
            if (is_array($campoClav)) {
                foreach ($campoClav as $varCampoClave) {
                    $campoClaveTmp = $ite_datos[$varCampoClave] . ':';
                    $campoClave .= $campoClaveTmp;
                }
            } else {
                $campoClave = $ite_datos[$campoClav];
            }
            switch ($band) {
                case 0:
                    // Tipo contador => 'obj_num'
                    $valor = $cont;
                    break;
                case 1:
                    // Tipo texto
                    // $valor .= "$ite_datos[$ite_campos]|";
//                     echo "------".$ite_datos[$ite_campos];
                    $valor = $ite_datos[$ite_campos];
					$valor = utf8_encode($valor);
                    break;
                case 2:
                    // Tipo imagen => 'obj_img_edo_fua'
                    $ite_campos = str_replace('obj_img_', '', $ite_campos);
                    if ($ite_datos[$ite_campos] == 1) {
                        $imagen = 'ok.gif';
                    } else {
                        $imagen = 'delete.gif';
                    }
                    $valor = "<img src='" . PUB_URL . "img/grid/$imagen' title='Editar' border='0px'/>|";
                    break;
                case 6:
                    // Tipo libre
                    $ite_campos = str_replace('obj_', '', $ite_campos);
//                     echo "********$ite_campos****************";
                    eval("\$val_ite_campos = \"$ite_campos\";");
                    $valor = $val_ite_campos;
                    $valor = str_replace('$campoClave', $campoClave, $valor);
                    //                         echo "$valor";
                    break;
            }
            $cad .= "<td class='line'>$valor</td>";
        }
        $cad .= "</tr>";
        $cont++;
    }
    return $cad . '</tbody></table>';
}

function tipoCampoDataTable($campo)
{
    $band = strpos($campo, 'obj_');
    if ($band !== 0) {
        $tipoCampo = 1;
        return $tipoCampo;
    } else {
        $var = substr($campo, 4, 3);
        switch ($var) {
            case 'num':
                // Tipo numeración
                $tipoCampo = 0;
                break;
            case 'img':
                // Tipo imagen
                $tipoCampo = 2;
                break;
            case 'chk':
                // Tipo checkbox
                $tipoCampo = 3;
                break;
            case 'rad':
                // Tipo radio button
                $tipoCampo = 4;
                break;
            case 'cmp':
                // Tipo compuesto
                $tipoCampo = 5;
                break;
            case 'fun':
                /*Tipo funcion
                 * Ejemplo:
                 * $img1 = "nomFunc**<img src='".PUB_URL."img/grid/con.png' title='Consultar' border='0px'/>";
                 * 'obj_fun' . $img1
                 * Donde nomFunc es el nombre de la funcion javascript a llamar
                 */
                $tipoCampo = 7;
                break;
            default:
                // Tipo libre
                $tipoCampo = 6;
        }
        // echo "[$campo***$var+++$tipoCampo]";
        return $tipoCampo;
    }
}

function construirComboOpciones($id){

	//$comboTipo='<select id='.$id.' onChange=asignarValor(this.id,this.value)>

	$comboTipo='<select name='.$id.' id=comboTipo'.$id.' onChange=xajax_asignarValor(this.name,this.value)>

				<option value=0>Seleccione</option>

				<option value=1>Constante</option>

				<option value=2>Campo BD</option>

				<option value=3>Fecha</option>

			</select>';

	return $comboTipo;

}

function construirComboOpcionesNew($id,$valor){

	$matDatos = array(0=>'Selecciones',1=>'Constante',2=>'Campo BD',3=>'Fecha');

	$i=0;

//	$comboTipo='<select name='.$id.' id=comboTipo'.$id.' onChange=asignarValor(this.name,this.value)>';// comentado por actualizacion a xajax 0.5

	$comboTipo='<select name='.$id.' id=comboTipo'.$id.' onChange=xajax_asignarValor(this.name,this.value)>';	

	foreach ($matDatos as $ite) {

//		echo "($i==$valor)";   

		if ($i==$valor) {

			$comboTipo.="<option value=".$i." selected>".$ite."</option>";

		}else{

			$comboTipo.="<option value=".$i.">".$ite."</option>";

		}

		$i++;

	}

	$comboTipo.='</select>';

	//$comboTipo='<select id='.$id.' onChange=asignarValor(this.id,this.value)>

	/*

	$comboTipo='<select name='.$id.' id=comboTipo'.$id.' onChange=asignarValor(this.name,this.value)>

				<option value=0>Seleccione</option>

				<option value=1>Constante</option>

				<option value=2>Campo BD</option>

				<option value=3>Fecha</option>

			</select>';

	*/

	return $comboTipo;

}

function comboTiposFecha($id,$valorCombo){

	$n=8;

	for ($i = 0; $i < $n; $i++) {

		eval("\$sel$i = \"\";");

	}	

	eval("\$sel$valorCombo = \"Selected\";");

	$comboTipo='<select id=comboFecha'.$id.'>

				<option value=0 '.$sel0.'>Seleccione</option>

				<option value=1 '.$sel1.'>Fecha (dd/mm/YYYY)</option>

				<option value=2 '.$sel2.'>Día (Número)</option>

				<option value=3 '.$sel3.'>Día (Letras)</option>

				<option value=4 '.$sel4.'>Mes (Número)</option>

				<option value=5 '.$sel5.'>Mes (Letras)</option>

				<option value=6 '.$sel6.'>Año (Número)</option>

				<option value=7 '.$sel7.'>Año (Letras)</option>

				

			</select>';

	//$comboTipo = utf8_encode($comboTipo);

	$comboTipo = ($comboTipo);

	return $comboTipo;

}

function comboCamposBdTradicional($id){

	/*

	 $Reporte = new Reporte();

	$resultado = $Reporte->consultarCamposTablaReporte();

	$Reporte->cerrarConexion();



	$Reporte = new Reporte();

	$resultado = $Reporte->consultarCamposTablaPersona();

	$Reporte->cerrarConexion();

	*/

	//var_dump($resultado);



	$resultado = array('CEDULA','APENOMTRAB','DESCRIPDEP','DESCRIPDPT','DENOMINACION','DEDICACION','FECHAINGRESO',

		'SUELDO',

		'SUELDOBASE',

		'SUELDONORMAL',

		'SUELDOINTEGRAL',

		'BONOVACACIONAL',

		'BONO_ASISTENCIAL',

		'AGUINALDO',

		'DIRHABITACION',

		'DESC_CONDICION',

		'DESC_ESTRUCTURA',

		'ANIO',

		'MES',

		'PRIMASSALARIALES'

	);

	$resultadoEtiquetas = array('Cédula','Nombre','Desc. Dependencia','Desc. Departamento','Denominación','Dedicación','Fecha Ingreso',

			'Sueldo',

			'Sueldo Base',

			'Sueldo Normal',

			'Sueldo Integral',

			'Bono Vacacional',

			'Bono Asistencial',

			'Aguinaldo',

			'Dir. Habitación',

			'Letra Expediente',

			'Estructura',

			'Año Nómina',

			'Mes Nómina',

			'Primas Salariales'			

	);

	

	$i=0;

	foreach ($resultado as $ite) {

		//$datos[utf8_encode($ite)] = array(utf8_encode($resultadoEtiquetas[$i])); 

		$datos[] = array('id'=>($ite),'valor'=>($resultadoEtiquetas[$i])); 

		$i++;

	}

	//var_dump($datos);

	asort($datos);

	//var_dump($datos);

	$comboTipo='<select id=comboBd'.$id.' onChange=xajax_asignarValor(this.id,this.value)>';

	$comboTipo.='<option value=0>Seleccione</option>';

	$i=0;

	foreach ($datos as $ite) {

		//$comboTipo.=utf8_encode('<option value='.$ite['id'].'>'.$ite['valor'].'</option>');

		$comboTipo.=('<option value='.$ite['id'].'>'.$ite['valor'].'</option>');

		$i++;

	}

	$comboTipo.='</select>';	

	

	/*

$comboTipo='<select id=comboBd'.$id.' onChange=asignarValor(this.id,this.value)>';

	$comboTipo.='<option value=0>Seleccione</option>';

	$i=0;

	foreach ($resultado as $ite) {

		$comboTipo.=utf8_encode('<option value='.$ite.'>'.$resultadoEtiquetas[$i].'</option>');

		$i++;

	}

	$comboTipo.='</select>';

	 */



	return $comboTipo;

}

function comboCamposBd($id,$valorBD=''){

	/*

	 $Reporte = new Reporte();

	$resultado = $Reporte->consultarCamposTablaReporte();

	$Reporte->cerrarConexion();



	$Reporte = new Reporte();

	$resultado = $Reporte->consultarCamposTablaPersona();

	$Reporte->cerrarConexion();

	*/

	//var_dump($resultado);



	$resultado = array('CEDULA','APENOMTRAB','DESCRIPDEP','DESCRIPDPT','DENOMINACION','DEDICACION','FECHAINGRESO',

		'SUELDO',

		'SUELDOBASE',

		'SUELDONORMAL',

		'SUELDOINTEGRAL',

		'BONOVACACIONAL',

		'BONO_ASISTENCIAL',

		'AGUINALDO',

		'FECHAUTLMOV',

		'FECHAPENULTMOV',

		'DIRHABITACION',

		'DESC_CONDICION',

		'DESC_ESTRUCTURA',

		'ANIO',

		'MES',

		'DESC_CONDICION',

		'PRIMASSALARIALES'

	);

	$resultadoEtiquetas = array('Cédula','Nombre','Desc. Dependencia','Desc. Departamento','Denominación','Dedicación','Fecha Ingreso',

			'Sueldo',

			'Sueldo Base',

			'Sueldo Normal',

			'Sueldo Integral',

			'Bono Vacacional',

			'Bono Asistencial',

			'Aguinaldo',

			'Fecha Ult. Mov.',

			'Fecha Pen. Mov.',

			'Dir. Habitación',

			'Letra Expediente',

			'Estructura',

			'Año Nómina',

			'Mes Nómina',

			'CONDICION',

			'Primas Salariales'				

	);

	

	$i=0;

	foreach ($resultado as $ite) {

		//$datos[utf8_encode($ite)] = array(utf8_encode($resultadoEtiquetas[$i])); 

		$datos[] = array('id'=>($ite),'valor'=>($resultadoEtiquetas[$i])); 

		$i++;

	}

	//var_dump($datos);

	asort($datos);

	//var_dump($datos);

	$comboTipo='<select id=comboBd'.$id.' onChange=xajax_asignarValor(this.id,this.value)>';

	$comboTipo.='<option value=0>Seleccione</option>';

	$i=0;

	foreach ($datos as $ite) {

		//$comboTipo.=utf8_encode('<option value='.$ite['id'].'>'.$ite['valor'].'</option>');

		if($ite['id']==$valorBD){

			$comboTipo.=('<option selected value='.$ite['id'].'>'.$ite['valor'].'</option>');

		}else{

			$comboTipo.=('<option value='.$ite['id'].'>'.$ite['valor'].'</option>');

		}

		

		$i++;

	}

	$comboTipo.='</select>';	

	

	/*

$comboTipo='<select id=comboBd'.$id.' onChange=asignarValor(this.id,this.value)>';

	$comboTipo.='<option value=0>Seleccione</option>';

	$i=0;

	foreach ($resultado as $ite) {

		$comboTipo.=utf8_encode('<option value='.$ite.'>'.$resultadoEtiquetas[$i].'</option>');

		$i++;

	}

	$comboTipo.='</select>';

	 */



	return $comboTipo;

}

?>