<?php 
/** 
 * @file SQLUsuario.php 
 *  
 * Consultas SQL de la Tabla Usuario 
 * 
 * @author SOLINF 
 * @version V 0.1 
 * @date 12/03/2021
 *  
*/ 
class SQLUsuario 
{ 
  const AGREGAR_USUARIO = "INSERT INTO Usuario (idUsuario, idRol, idPersona, idEdoRegistro, cuentaUsuario, contrasenaUsuario, fecCreacion, pregSecreta, respPregSecreta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_USUARIO = "UPDATE Usuario SET idUsuario = ?, idRol = ?, idPersona = ?, idEdoRegistro = ?, cuentaUsuario = ?, contrasenaUsuario = ?, fecCreacion = ?, pregSecreta = ?, respPregSecreta = ? WHERE idUsuario = ?";

  const ELIMINAR_USUARIO = "DELETE FROM Usuario WHERE idUsuario = ?";

  const CONSULTAR_USUARIO = "SELECT * FROM Usuario ORDER BY idUsuario";

  const CONSULTAR_USUARIO_POR_IDUSUARIO = "SELECT * FROM Usuario WHERE idUsuario = ?";

  const CONSULTAR_USUARIO_POR_IDROL = "SELECT * FROM Usuario WHERE idRolUsuario = ?";

  const CONSULTAR_USUARIO_POR_IDPERSONA = "SELECT * FROM Usuario WHERE idPersonaUsuario = ?";

  const CONSULTAR_USUARIO_POR_IDEDOREGISTRO = "SELECT * FROM Usuario WHERE idEdoRegistroUsuario = ?";

  const CONSULTAR_USUARIO_POR_CUENTA = "SELECT * FROM Usuario WHERE UPPER(cuentaUsuario) = UPPER(?)";

  const CONSULTAR_USUARIO_POR_CUENTA_APROX = "SELECT * FROM Usuario WHERE UPPER(cuentaUsuario) LIKE UPPER(?) ORDER BY cuentaUsuario";

  const CONSULTAR_USUARIO_POR_CONTRASENA = "SELECT * FROM Usuario WHERE UPPER(contrasenaUsuario) = UPPER(?)";

  const CONSULTAR_USUARIO_POR_CONTRASENA_APROX = "SELECT * FROM Usuario WHERE UPPER(contrasenaUsuario) LIKE UPPER(?) ORDER BY contrasenaUsuario";

  const CONSULTAR_USUARIO_POR_FECCREACION = "SELECT * FROM Usuario WHERE fecCreacionUsuario = ?";

  const CONSULTAR_USUARIO_POR_PREGSECRETA = "SELECT * FROM Usuario WHERE UPPER(pregSecretaUsuario) = UPPER(?)";

  const CONSULTAR_USUARIO_POR_PREGSECRETA_APROX = "SELECT * FROM Usuario WHERE UPPER(pregSecretaUsuario) LIKE UPPER(?) ORDER BY pregSecretaUsuario";

  const CONSULTAR_USUARIO_POR_RESPPREGSECRETA = "SELECT * FROM Usuario WHERE UPPER(respPregSecretaUsuario) = UPPER(?)";

  const CONSULTAR_USUARIO_POR_RESPPREGSECRETA_APROX = "SELECT * FROM Usuario WHERE UPPER(respPregSecretaUsuario) LIKE UPPER(?) ORDER BY respPregSecretaUsuario";

}
?>