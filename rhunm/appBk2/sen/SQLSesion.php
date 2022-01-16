<?php
class SQLSesion {
//	const CONSULTAR_USUARIO_POR_LOGIN_CLAVE_Y_ESTATUS = "SELECT * FROM v_usuario usu
//            WHERE upper(CUENTA) = upper(?) AND CONTRASENA = ? AND ESTADOUSUARIO = ?";
	const CONSULTAR_USUARIO_POR_LOGIN_CLAVE_Y_ESTATUS = "SELECT 
			usu.idUsuario, usu.idRol,	usu.idPersona,	usu.idEdoRegistro, cuentaUsuario, contrasenaUsuario,	
			fecCreacion, pregSecreta, respPregSecreta, per.*
			from usuario usu 
			inner join persona per on per.idPersona = usu.idPersona
			inner join rol r on r.idRol = usu.idRol
			inner join edoregistro er on er.idEdoRegistro = usu.idEdoRegistro
            where upper(cuentaUsuario) = upper(?) and contrasenaUsuario = ? and usu.idEdoRegistro = ?";
//	const CONSULTAR_USUARIO_POR_LOGIN_CLAVE_Y_ESTATUS = "SELECT *
//			from usuario usu 
//            where upper(cuentaUsuario) = upper(?) and contrasenaUsuario = ? and edoUsuario = ?";

//	const CONSULTAR_USUARIO_POR_LOGIN_Y_PASSWORD = "SELECT * FROM usuario INNER JOIN rol USING(rolid)
//	WHERE UPPER(CUENTA)=UPPER(?) AND CONTRASENA=?";
	const ACTUALIZAR_PASSWORD_USUARIO = "update usuario set contrasenaUsuario = ? where idUsuario=?";
//	const CONSULTAR_USUARIO_POR_CEDULA_Y_CORREO = "select idusuariocertificado,cedula,cuenta,estadousuario,correoelectronico 
//			from usuario where upper(cedula) = upper(?) and correoelectronico = ?";
}
?>