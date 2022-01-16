<?php 
/** 
 * @file SQLDiccionario.php 
 *  
 * Consultas SQL de la Tabla Diccionario 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 08/12/2021
 *  
*/ 
class SQLDiccionario 
{ 
  const AGREGAR_DICCIONARIO = "INSERT INTO diccionario (diccionarioid, nombretabla, nombremsgtabla, generotabla, nombrecampo, nombrecortocampo, descripcioncampo, tipocampo, tamcampo, ordencampo, precisioncampo, dominio, cjtovalores, archivosec, ncolumnas, colenlace, campoact, sqlgrid, camposbusqueda, campoconsulta, campovalido, crearmetodo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_DICCIONARIO = "UPDATE diccionario SET diccionarioid = ?, nombretabla = ?, nombremsgtabla = ?, generotabla = ?, nombrecampo = ?, nombrecortocampo = ?, descripcioncampo = ?, tipocampo = ?, tamcampo = ?, ordencampo = ?, precisioncampo = ?, dominio = ?, cjtovalores = ?, archivosec = ?, ncolumnas = ?, colenlace = ?, campoact = ?, sqlgrid = ?, camposbusqueda = ?, campoconsulta = ?, campovalido = ?, crearmetodo = ? WHERE iddiccionario = ?";

  const ELIMINAR_DICCIONARIO = "DELETE FROM diccionario WHERE iddiccionario = ?";

  const CONSULTAR_DICCIONARIO = "SELECT * FROM diccionario ORDER BY diccionarioid";

  const CONSULTAR_DICCIONARIO_POR_IDDICCIONARIO = "SELECT * FROM diccionario WHERE iddiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_NOMBRETABLA = "SELECT * FROM diccionario WHERE UPPER(nombretabladiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_NOMBRETABLA_APROX = "SELECT * FROM diccionario WHERE UPPER(nombretabladiccionario) LIKE UPPER(?) ORDER BY nombretabladiccionario";

  const CONSULTAR_DICCIONARIO_POR_NOMBREMSGTABLA = "SELECT * FROM diccionario WHERE UPPER(nombremsgtabladiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_NOMBREMSGTABLA_APROX = "SELECT * FROM diccionario WHERE UPPER(nombremsgtabladiccionario) LIKE UPPER(?) ORDER BY nombremsgtabladiccionario";

  const CONSULTAR_DICCIONARIO_POR_GENEROTABLA = "SELECT * FROM diccionario WHERE generotabladiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_NOMBRECAMPO = "SELECT * FROM diccionario WHERE UPPER(nombrecampodiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_NOMBRECAMPO_APROX = "SELECT * FROM diccionario WHERE UPPER(nombrecampodiccionario) LIKE UPPER(?) ORDER BY nombrecampodiccionario";

  const CONSULTAR_DICCIONARIO_POR_NOMBRECORTOCAMPO = "SELECT * FROM diccionario WHERE UPPER(nombrecortocampodiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_NOMBRECORTOCAMPO_APROX = "SELECT * FROM diccionario WHERE UPPER(nombrecortocampodiccionario) LIKE UPPER(?) ORDER BY nombrecortocampodiccionario";

  const CONSULTAR_DICCIONARIO_POR_DESCRIPCIONCAMPO = "SELECT * FROM diccionario WHERE UPPER(descripcioncampodiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_DESCRIPCIONCAMPO_APROX = "SELECT * FROM diccionario WHERE UPPER(descripcioncampodiccionario) LIKE UPPER(?) ORDER BY descripcioncampodiccionario";

  const CONSULTAR_DICCIONARIO_POR_TIPOCAMPO = "SELECT * FROM diccionario WHERE UPPER(tipocampodiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_TIPOCAMPO_APROX = "SELECT * FROM diccionario WHERE UPPER(tipocampodiccionario) LIKE UPPER(?) ORDER BY tipocampodiccionario";

  const CONSULTAR_DICCIONARIO_POR_TAMCAMPO = "SELECT * FROM diccionario WHERE tamcampodiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_ORDENCAMPO = "SELECT * FROM diccionario WHERE ordencampodiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_PRECISIONCAMPO = "SELECT * FROM diccionario WHERE precisioncampodiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_DOMINIO = "SELECT * FROM diccionario WHERE UPPER(dominiodiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_DOMINIO_APROX = "SELECT * FROM diccionario WHERE UPPER(dominiodiccionario) LIKE UPPER(?) ORDER BY dominiodiccionario";

  const CONSULTAR_DICCIONARIO_POR_CJTOVALORES = "SELECT * FROM diccionario WHERE UPPER(cjtovaloresdiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_CJTOVALORES_APROX = "SELECT * FROM diccionario WHERE UPPER(cjtovaloresdiccionario) LIKE UPPER(?) ORDER BY cjtovaloresdiccionario";

  const CONSULTAR_DICCIONARIO_POR_ARCHIVOSEC = "SELECT * FROM diccionario WHERE UPPER(archivosecdiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_ARCHIVOSEC_APROX = "SELECT * FROM diccionario WHERE UPPER(archivosecdiccionario) LIKE UPPER(?) ORDER BY archivosecdiccionario";

  const CONSULTAR_DICCIONARIO_POR_NCOLUMNAS = "SELECT * FROM diccionario WHERE ncolumnasdiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_COLENLACE = "SELECT * FROM diccionario WHERE UPPER(colenlacediccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_COLENLACE_APROX = "SELECT * FROM diccionario WHERE UPPER(colenlacediccionario) LIKE UPPER(?) ORDER BY colenlacediccionario";

  const CONSULTAR_DICCIONARIO_POR_CAMPOACT = "SELECT * FROM diccionario WHERE campoactdiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_SQLGRID = "SELECT * FROM diccionario WHERE UPPER(sqlgriddiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_SQLGRID_APROX = "SELECT * FROM diccionario WHERE UPPER(sqlgriddiccionario) LIKE UPPER(?) ORDER BY sqlgriddiccionario";

  const CONSULTAR_DICCIONARIO_POR_CAMPOSBUSQUEDA = "SELECT * FROM diccionario WHERE UPPER(camposbusquedadiccionario) = UPPER(?)";

  const CONSULTAR_DICCIONARIO_POR_CAMPOSBUSQUEDA_APROX = "SELECT * FROM diccionario WHERE UPPER(camposbusquedadiccionario) LIKE UPPER(?) ORDER BY camposbusquedadiccionario";

  const CONSULTAR_DICCIONARIO_POR_CAMPOCONSULTA = "SELECT * FROM diccionario WHERE campoconsultadiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_CAMPOVALIDO = "SELECT * FROM diccionario WHERE campovalidodiccionario = ?";

  const CONSULTAR_DICCIONARIO_POR_CREARMETODO = "SELECT * FROM diccionario WHERE crearmetododiccionario = ?";

}
?>