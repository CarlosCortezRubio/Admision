<?php
class SQLSesion {
	const CONSULTAR_USUARIO_POR_LOGIN_CLAVE_Y_ESTATUS = "SELECT 
			usu.idusuario, usu.idrol,	usu.idprofesor,	usu.idedoregistro, cuentausuario, contrasenausuario,	
			feccreacion, pregsecreta, resppregsecreta, per.*
			from public.usuario usu 
			inner join public.profesor per on per.idprofesor = usu.idprofesor
			inner join public.rol r on r.idrol = usu.idrol
			inner join public.edoregistro er on er.idedoregistro = usu.idedoregistro
            where upper(cuentausuario) = upper(?) and contrasenausuario = ? and usu.idedoregistro = ?";

	const ACTUALIZAR_PASSWORD_USUARIO = "update usuario set contrasenausuario = ? where idusuario=?";

}
?>