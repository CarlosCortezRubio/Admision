<?php
/*
* Funciones para el manejo de grids
*/
/**
 * Permite llenar un grid
 *
 * @param objeto $objResponse
 * @param string $grid
 * @param array $etiquetas
 * @param array $datos
 * @param array $campos
 * @param integer $campoClave
 * @param boolean $banderaTamanio
 */
function llenar_grid($objResponse, $grid, $etiquetas, $datos, $campos, $campoClav, $banderaTamanio = false) {
	$datos = array_reverse ( $datos );
	$navegador = ObtenerNavegador ( $_SERVER ['HTTP_USER_AGENT'] );
	$nav = strpos ( $navegador, 'Explorer' );
	if ($nav != false) {
		$nav = 1;
	}
	$objResponse->script ( "$grid.clearAll();" );
	$valor = null;
	$cad = array ();
	$i = 0;
	$j = 0;
	$num = count ( $etiquetas );
	if (count ( $datos ) > 0) {
		foreach ( $etiquetas as $ite_etiquetas ) {
			$tam_aux = 0;
			$objResponse->script ( "$grid.setColumnLabel($i,'$ite_etiquetas');" );
			$tam = strlen ( $ite_etiquetas ) + 2;
			$cad [] = array ('tam' => $tam );
			$i ++;
		}
		if ($banderaTamanio) {
			redefinirTamanio ( $objResponse, $cad, $etiquetas, $grid, $nav );
		}
		$i = 0;
		foreach ( $datos as $ite_datos ) {
			$valor = null;
			$campoClave = null;
			//			$campoClave = $ite_datos[$campoClav];
				foreach ( $campoClav as $varCampoClave ) {
					$campoClaveTmp = $ite_datos [$varCampoClave] . ':';
					$campoClave .= $campoClaveTmp;
				}
			} else {
				$campoClave = $ite_datos [$campoClav];
			}
			//			$campoClave = "'$campoClave'";
				if ($ite_campos != "") {
					$band = tipoCampo ( $ite_campos );
					//					echo "campo = $ite_campos -> $band---";
						case 1 :
							// Tipo texto
							break;
						case 2 :
							// Tipo imagen => 'obj_img_edo_fua'
							if ($ite_datos [$ite_campos] == 1) {
								$imagen = 'ok.gif';
							} else {
								$imagen = 'delete.gif';
							}
							$valor .= "<img src='" . PUB_URL . "img/grid/$imagen' title='Editar' border='0px'/>|";
							break;
						case 3 :
							// Tipo checkbox
							break;
						case 4 :
							// Tipo radio button
							break;
						case 5 :
							// Tipo compuesto => 'obj_cmp_[APELLIDOS*NOMBRES]'
							$ite_campos = str_replace ( 'obj_cmp_', '', $ite_campos );
							$ite_campos = str_replace ( '[', '', $ite_campos );
							$ite_campos = str_replace ( ']', '', $ite_campos );
							//							echo "$ite_campos---------";
							foreach ( $matCamposAux as $iteCamposComp ) {
								$valorCmp .= "$ite_datos[$iteCamposComp] ";
								//								$objResponse->alert("$iteCamposComp -> $valorCmp");
							$valor .= $valorCmp . "|";
							break;
						case 6 :
							// Tipo libre
							eval ( "\$val_ite_campos = \"$ite_campos\";" );
							$valor .= "$val_ite_campos|";
							//							echo "$valor";	
						case 7 :
							// Tipo funcion
							$ite_campos = str_replace ( 'fun', '', $ite_campos );
							$matCamposAux7 = explode ( '**', $ite_campos );
							$var1 = $matCamposAux7 [0];
							$var2 = $matCamposAux7 [1];
							//							dump($matCamposAux7);echo count($matCamposAux7);
								//								echo "if";
								$var2 = $matCamposAux7 [2];
								//								$cadAux = "<label onclick='$var1($grid.getRowId($grid.getRowIndex($grid.getSelectedId())))'>$var2</label>";
								//,$grid.getRowId($grid.cellById($grid.getSelectedId(),$var11))
								//								echo "else";
							}
							//							echo "[$var1++++$var2]";
							$valor .= "$val_ite_campos|";
							//							echo "$valor";	
					}
					//					$objResponse->alert("ite_campos!='' = $ite_campos");
					$valor .= "|";
				}
			}
			$largo = strlen ( $valor );
			$valor = substr ( $valor, 0, $largo - 1 );
			$valor = str_replace ( 'ï¿½', '_', $valor );
			$valor = utf8_encode ( $valor );
			$valor = addslashes ( $valor );
			$aux = "{" . $grid . ".addRow('$campoClave', \"$valor\",0)};";
			//			$objResponse->alert("$aux");
		}
	}
	//	$objResponse->alert("$aux");
function tipoCampo($campo) {
	$band = strpos ( $campo, 'obj_' );
	if ($band !== 0) {
		$tipoCampo = 1;
		return $tipoCampo;
	} else {
		$var = substr ( $campo, 4, 3 );
		switch ($var) {
			case 'img' :
				// Tipo imagen
				break;
			case 'chk' :
				// Tipo checkbox
				break;
			case 'rad' :
				// Tipo radio button
				break;
			case 'cmp' :
				// Tipo compuesto
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
			default :
				// Tipo libre
		}
		//		echo "[$campo***$var+++$tipoCampo]";
	}
	foreach ( $campos as $ite_campos ) {
		if ($ite_campos != "") {
			//					$objResponse->alert("ite_campos!='' = $ite_campos");
			if ($band !== 0) {
				$valor .= "$ite_datos[$ite_campos]|";
			} else {
				$newBand = strpos ( $ite_campos, 'obj_img_' );
				if ($newBand !== 0) {
					$ite_campos = str_replace ( 'obj_', '', $ite_campos );
					eval ( "\$val_ite_campos = \"$ite_campos\";" );
					$valor .= "$val_ite_campos|";
				} else {
					$ite_campos = str_replace ( 'obj_img_', '', $ite_campos );
					if ($ite_datos [$ite_campos] == 1) {
						$imagen = 'ok.gif';
					} else {
						$imagen = 'delete.gif';
					}
					$valor .= "<img src='" . PUB_URL . "img/grid/$imagen' title='Editar' border='0px'/>|";
					//							eval("\$val_ite_campos = \"$ite_campos\";");
			}
		} else {
			$valor .= "|";
		}
	}
}
/**
 * Permite redefinir el tamaÃ±o de las columnas del grid, de acuerdoo al tamaÃ±o de las etiquetas
 *
 * @param object $objResponse
 * @param array $cad
 * @param array $etiquetas
 * @param object $grid
 */
function redefinirTamanio($objResponse, $cad, $etiquetas, $grid, $nav) {
	$n = count ( $etiquetas );
	$cadena = "";
	$i = 0;
	if ($nav == 1) {
		$m = $n - 1;
	} else {
		$m = $n;
	}
	//	$objResponse->alert("n = $n -> m = $m");
		//		$objResponse->alert("tam = ". $ite['tam']);
			$vale = $ite ['tam'];
			$cadena = $cadena . $vale . "|";
		} else {
			//			$vale = $ite['tam'];
			$cadena = $cadena . $vale;
			//			$objResponse->alert("cadena $cadena");
		$i ++;
	}
	//	$objResponse->alert("n=$n -> $cadena");
	$i = 0;
	foreach ( $etiquetas as $ite_etiquetas ) {
		$aux_ite = trim ( $ite_etiquetas );
		//		$objResponse->alert("imp etiqueta ++$ite_etiquetas--");
		//		$objResponse->script("eval($grid.setColumnLabel($i,'$aux_ite'));");
	}
	$objResponse->script ( "$grid.setSizes();" );
	//	grid.setSizes()
	foreach ( $etiquetas as $ite_etiquetas ) {
		//		$objResponse->alert("ajustando $ite_etiquetas  ---  ". $cad[$i]['tam'] . "$grid.adjustColumnSize($i);");
		$i ++;
	}
}
function limpiar_grid($objResponse, $grid, $etiquetas) {
	$objResponse->script ( "$grid.clearAll();" );
	$num = count ( $etiquetas );
	$i = 0;
	foreach ( $etiquetas as $ite_etiquetas ) {
		$objResponse->script ( "$grid.setColumnLabel($i,'$ite_etiquetas');" );
		$i ++;
	}
}
//------------------------------------------------
 * Permite llenar un grid
 *
 * @param objeto $objResponse
 * @param string $grid
 * @param array $etiquetas
 * @param array $datos
 * @param array $campos
 * @param integer $campoClave
 * @param boolean $banderaTamanio
 */
function llenar_grid_nuevo($objResponse, $grid, $etiquetas, $datos, $campos, $campoClav, $banderaTamanio = false) {
	$navegador = ObtenerNavegador ( $_SERVER ['HTTP_USER_AGENT'] );
	$nav = strpos ( $navegador, 'Explorer' );
	if ($nav != false) {
		$nav = 1;
	}
	$objResponse->script ( "$grid.clearAll();" );
	$valor = null;
	$cad = array ();
	$i = 0;
	$j = 0;
	$num = count ( $etiquetas );
	$rolId = $_SESSION ['rolid'];
	if (count ( $datos ) > 0) {
		foreach ( $etiquetas as $ite_etiquetas ) {
			$tam_aux = 0;
			//			if (!$banderaTamanio) 
				$objResponse->script ( "$grid.setColumnLabel($i,'$ite_etiquetas');" );
			}
			$tam = strlen ( $ite_etiquetas ) + 2;
			$cad [] = array ('tam' => $tam );
			$i ++;
		}
		if ($banderaTamanio) {
			redefinirTamanio ( $objResponse, $cad, $etiquetas, $grid, $nav );
		}
		$i = 0;
		foreach ( $datos as $ite_datos ) {
			$valor = null;
			$campoClave = $ite_datos [$campoClav];
			$edoSolicitudId = $ite_datos ['estadosolicitudid'];
			$matAux = Solicitud::accionXedoYrol ( $edoSolicitudId, $rolId );
			$aux0 = $matAux [0];
			$aux1 = $matAux [1];
			$i = 0;
			foreach ( $campos as $ite_campos ) {
				if ($ite_campos != "") {
					//					$objResponse->alert("ite_campos!='' = $ite_campos");
					if ($band !== 0) {
						$valor .= "$ite_datos[$ite_campos]|";
					} else {
						if ($i > 1) {
							if ($i == 2) {
								$ite_campos = str_replace ( 'obj_', '', $aux0 );
							} else {
								$ite_campos = str_replace ( 'obj_', '', $aux1 );
							}
						} else {
							$ite_campos = str_replace ( 'obj_', '', $ite_campos );
						}
						eval ( "\$val_ite_campos = \"$ite_campos\";" );
						$valor .= "$val_ite_campos|";
					}
				} else {
					$valor .= "|";
				}
				$i ++;
			}
			$largo = strlen ( $valor );
			$valor = substr ( $valor, 0, $largo - 1 );
			$aux = "{" . $grid . ".addRow('$campoClave', \"$valor\",0)};";
			$objResponse->alert ( "$aux" );
			$objResponse->script ( "$aux" );
		}
	}
	//	$objResponse->alert("$aux");
function crearObjImagen($modulo, $opcion) {
	switch ($opcion) {
		case 'con' :
			$img = 'consultar.gif';
			$title = 'Consultar';
			$metodo = 'consultar';
			break;
		case 'edi' :
			$img = 'editar.png';
			$title = 'Editar';
			$metodo = 'verEditar';
			break;
	}
	if (CIF_URL) {
		$sem = SEM;
		$par1 = encriptar ( $modulo, $sem );
		$par2 = encriptar ( $metodo, $sem );
		//		$par3 = encriptar ( $sem . 'verEditar' . $sem, $sem );		
	} else {
		//		echo "$modulo/$metodo/";
	}
	return $valImg;
}
?>