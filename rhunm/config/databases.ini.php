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

define("SERVER","localhost");
define("DRIVER","mysqli");
define("USER","root");
define("PASSWORDBD",'mysql2021');
//define('DATABASE','planillas');
define('DATABASE','rrhh_unmv3');
define('PUERTO','3305');
?>