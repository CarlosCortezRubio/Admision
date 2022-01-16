<?php
/**
 * Archivo de configuracion
 *
 */

header('Content-Type: text/html; charset=UTF-8');
error_reporting ( E_ALL ^ E_DEPRECATED );
//error_reporting ( E_ALL );
ini_set('display_errors', '1');

if (@session_id () == "" || @session_id () == null) {
	session_start ();
}
define ( 'AUTOR', 'UNM' );
define ( 'NUM_VERSION', '0.1' );
define ( 'FECHA_SISTEMA', date ( "d-m-Y" ) );
/*
define ( 'ANCHO_TABLA', 800 );
define ( 'ANCHO_TABLA_BUSCAR', 100 );
*/
define ( 'NOM_PROYECTO', "RH-UNM" );					// Nombre de la aplicación (se muestra en la pestaña del navegador)
define ( 'LOGO_PROYECTO', "tuLogo.png" );
// Encabezado de la aplicación
define ( 'LINE1_ENCABEZADO', "<br>" );
define ( 'LINE2_ENCABEZADO', "<br>" );
define ( 'LINE3_ENCABEZADO', "" );
define ( 'ALINEACIONGRID', "center" );
define ( 'PLANTILLA', "horizontal" );
define ( 'MODELO_PLANTILLA', 4 );

define ( 'timezone', "America/Lima" );
//date_default_timezone_set('America/Caracas');
define ( 'production', "Off" );
define ( 'database', "development" );
define ( 'dbdate', "YYYY-MM-DD" );
define ( 'debug', "On" );
define ( 'log_exceptions', "On" );
//define ( 'CHARSET', "windows-1252" );
//define ( 'CHARSET', "ISO-8859-1" );
define ( 'CHARSET', "utf-8" );
define ( 'CHARSET_GRID', "utf-8" );
define ( 'SEM', "2015ale28");
define ( 'CIF_URL', false );

//VARIABLES SETEADAS Y UTILIZADAS EN EL SISTEMA
define ( 'ANIO_CONFIG', 2020 );

//$_SESSION ['usuarioid'] = 1;

//define ( 'PATH', "/home/solinfco/public_html/" );		// Lugar (Fisico) donde se encuentra alojado la aplicación
//define ( 'PATH_LIB', "/home/solinfco/public_html/" );	// Lugar (Fisico) donde se encuentra alojado la libreria libDsia
//define ( 'DOMINIO', 'solinf.com.ve' );		// Lugar (URL) donde se encuentra alojado la aplicación
//define ( 'DOMINIO_LIB', 'solinf.com.ve' );		// Lugar (URL) donde se encuentra alojado la aplicación
//define ( 'NOMSIST', 'nefrosoft' );				// Nombre de la carpeta que contiene la aplicación
//define('CONSEGURA', 1);								// Establece si se va a trabajar con https (1) o no (0)

define ( 'PATH', "C:\\laragon\\www\\" );		// Lugar (Fisico) donde se encuentra alojado la aplicación
define ( 'PATH_LIB', "C:\\laragon\\www\\" );	// Lugar (Fisico) donde se encuentra alojado la libreria libDsia
define ( 'DOMINIO', 'admision.unm.edu.pe' );		// Lugar (URL) donde se encuentra alojado la aplicación
define ( 'DOMINIO_LIB', 'admision.unm.edu.pe' );		// Lugar (URL) donde se encuentra alojado Lib DSIA
define ( 'NOMSIST', 'rhunm' );				// Nombre de la carpeta que contiene la aplicación
define('CONSEGURA', 1);								// Establece si se va a trabajar con https (1) o no (0)


/********* Inicio Configuración de las variables utilizadas en la elaboración de PDF **********/
//define ( 'PDF_LOGO_CABECERA', "home/bannerImpPredet.gif" );
define ('K_PATH_IMAGES', '../../../public/img/');
define ( 'PDF_HEADER_LOGO', "tuLogo1.png" );
define ( 'PDF_HEADER_LOGO_EDO', "tuLogo1.png" );
//define ( 'PDF_LOGO_CABECERA', "home/bannerSelloAzul.gif" );
// define ( 'PDF_HEADER_TITLE', "BOLETA DE PAGO" );
// define ( 'PDF_HEADER_STRING', "BOLETA DE PAGO" );
define ( 'COPYRIGHT', "Copyright © 2021 - Universidad Nacional de Música. Todos los derechos reservados. " );

//define ( 'PIE_PAGINA1', "Documento generado por ".NOM_PROYECTO.". (Emisión ". date('d/m/Y') . " a las ". date('h:m:s') .")" );
define ( 'OPCION_PIE', 1 );
define ( 'FECHA_REPORTE', "Emisión ". date('d/m/Y') . " a las ". date('h:m:s')  );
define ( 'TAMANO_FECHA_REPORTE', 7 );
define ( 'PIE_PAGINA1', "Documento generado por ".NOM_PROYECTO .' '. FECHA_REPORTE );
//define ( 'PIE_PAGINA1', "
//Avenida Tulio Febres Cordero, Edificio Administrativo, piso 6<br>
//Teléfonos: 0274 - 2402586, 2587. Telefax: 0274- 2402553<br>
//Mérida 5101, Venezuela @ e-mail:personal@ula.ve
//Municipio Libertador Mérida Edo. Mérida
//" );
//define ( 'PIE_PAGINA1', "" );
define ( 'PIE_PAGINA2', "123" );
//define ( 'L1_REPORTE', 'TU CONDOMINIO');
//define ( 'L2_REPORTE', "CONDOMINIO" );
define ( 'L1_REPORTE', 'BOLETA DE PAGO');
define ( 'L2_REPORTE', "" );

/********* Fin Configuración de las variables utilizadas en la elaboración de PDF **********/
require_once ('boot.ini.php');

define ( 'TAM_PAG', 10); // Tamano de pagina pequeño
define ( 'TAM_PAG_MED', 50); // Tamano de pagina mediano
define ( 'TAM_PAG_GRA', 100); // Tamano de pagina grande

//error_reporting ( E_ALL ^ E_STRICT ^ E_DEPRECATED );
//error_reporting ( E_ALL ^ E_DEPRECATED );
//error_reporting ( E_ALL );
//error_reporting ( 0 );
//set_time_limit ( 120 );
?>