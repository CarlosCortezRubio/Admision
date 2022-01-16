<?php
// simple conexion a la base de datos
function connect(){
// 	return new mysqli("localhost","root","","encuesta");
//     return new pg_connect("localhost:5432","postgres","postgres","EncuestaUNM");
    return pg_connect("host=172.31.121.219 port=5444 dbname=bdencuesta user=usr_bdsigunm password=PASSWORD");
//     return pg_connect("host=localhost port=5432 dbname=tthh user=postgres password=postgres");
}
$con = connect();
// if (!$con->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
//        die("Error cargando el conjunto de caracteres utf8");
// }
?>