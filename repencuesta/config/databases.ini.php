<?php
/**
 * Archivo de configuracion para establecer conexion con la base de datos
 * 
 * @param String SERVER Nombre del servido en que se encuentra la BD
 * @param String USER Nombre del usuario de conexion
 * @param String PASSWORDBD Clave de conexion
 * @param String DATABASE Nombre de la base de datos
 * 
 * @return Boolean 0: Conexion fallida; 1: Conexion exitosa
 */

// define("SERVER","localhost");
// define("DRIVER","mysqli");
// define("USER","root");
// define("PASSWORDBD",'');
// define('DATABASE','docentes');
// define('PUERTO','5000');

define("SERVER","172.31.121.219:5444");
define("DRIVER","postgres");
define("USER","usr_bdsigunm");
define("PASSWORDBD",'PASSWORD');
define('DATABASE','bdencuestanov');
define('PUERTO','5444');
?>