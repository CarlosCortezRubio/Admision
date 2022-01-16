<?php 
/** 
 * @file SQLPersona.php 
 *  
 * Consultas SQL de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
*/ 
class SQLPersona 
{ 
  const AGREGAR_PERSONA = "INSERT INTO Persona (idPersona, idGenero, idEdoCivil, idIdioma, idDistritoNac, idDistritoDir, idTipoDoc, idZona, idVia, dniPersona, nom1Persona, nom2Persona, ape1Persona, ape2Persona, numDepPersona, fecNacPersona, zonaDomPersona, desViaDomPersona, numViaDomPersona, intDomPersona, tel1DomPersona, tel2DomPersona, refDomPersona, emaDomPersona) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_PERSONA = "UPDATE Persona SET idPersona = ?, idGenero = ?, idEdoCivil = ?, idIdioma = ?, idDistritoNac = ?, idDistritoDir = ?, idTipoDoc = ?, idZona = ?, idVia = ?, dniPersona = ?, nom1Persona = ?, nom2Persona = ?, ape1Persona = ?, ape2Persona = ?, numDepPersona = ?, fecNacPersona = ?, zonaDomPersona = ?, desViaDomPersona = ?, numViaDomPersona = ?, intDomPersona = ?, tel1DomPersona = ?, tel2DomPersona = ?, refDomPersona = ?, emaDomPersona = ? WHERE idPersona = ?";

  const ELIMINAR_PERSONA = "DELETE FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA = "SELECT * FROM Persona ORDER BY idPersona";

  const CONSULTAR_PERSONA_POR_IDPERSONA = "SELECT * FROM Persona WHERE idPersona = ?";

  const CONSULTAR_PERSONA_POR_IDGENERO = "SELECT * FROM Persona WHERE idGeneroPersona = ?";

  const CONSULTAR_PERSONA_POR_IDEDOCIVIL = "SELECT * FROM Persona WHERE idEdoCivilPersona = ?";

  const CONSULTAR_PERSONA_POR_IDIDIOMA = "SELECT * FROM Persona WHERE idIdiomaPersona = ?";

  const CONSULTAR_PERSONA_POR_IDDISTRITONAC = "SELECT * FROM Persona WHERE idDistritoNacPersona = ?";

  const CONSULTAR_PERSONA_POR_IDDISTRITODIR = "SELECT * FROM Persona WHERE idDistritoDirPersona = ?";

  const CONSULTAR_PERSONA_POR_IDTIPODOC = "SELECT * FROM Persona WHERE idTipoDocPersona = ?";

  const CONSULTAR_PERSONA_POR_IDZONA = "SELECT * FROM Persona WHERE idZonaPersona = ?";

  const CONSULTAR_PERSONA_POR_IDVIA = "SELECT * FROM Persona WHERE idViaPersona = ?";

  const CONSULTAR_PERSONA_POR_DNI = "SELECT * FROM Persona WHERE UPPER(dniPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_DNI_APROX = "SELECT * FROM Persona WHERE UPPER(dniPersona) LIKE UPPER(?) ORDER BY dniPersona";

  const CONSULTAR_PERSONA_POR_NOM1 = "SELECT * FROM Persona WHERE UPPER(nom1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM1_APROX = "SELECT * FROM Persona WHERE UPPER(nom1Persona) LIKE UPPER(?) ORDER BY nom1Persona";

  const CONSULTAR_PERSONA_POR_NOM2 = "SELECT * FROM Persona WHERE UPPER(nom2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NOM2_APROX = "SELECT * FROM Persona WHERE UPPER(nom2Persona) LIKE UPPER(?) ORDER BY nom2Persona";

  const CONSULTAR_PERSONA_POR_APE1 = "SELECT * FROM Persona WHERE UPPER(ape1Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE1_APROX = "SELECT * FROM Persona WHERE UPPER(ape1Persona) LIKE UPPER(?) ORDER BY ape1Persona";

  const CONSULTAR_PERSONA_POR_APE2 = "SELECT * FROM Persona WHERE UPPER(ape2Persona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_APE2_APROX = "SELECT * FROM Persona WHERE UPPER(ape2Persona) LIKE UPPER(?) ORDER BY ape2Persona";

  const CONSULTAR_PERSONA_POR_NUMDEP = "SELECT * FROM Persona WHERE numDepPersona = ?";

  const CONSULTAR_PERSONA_POR_FECNAC = "SELECT * FROM Persona WHERE fecNacPersona = ?";

  const CONSULTAR_PERSONA_POR_ZONADOM = "SELECT * FROM Persona WHERE UPPER(zonaDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_ZONADOM_APROX = "SELECT * FROM Persona WHERE UPPER(zonaDomPersona) LIKE UPPER(?) ORDER BY zonaDomPersona";

  const CONSULTAR_PERSONA_POR_DESVIADOM = "SELECT * FROM Persona WHERE UPPER(desViaDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_DESVIADOM_APROX = "SELECT * FROM Persona WHERE UPPER(desViaDomPersona) LIKE UPPER(?) ORDER BY desViaDomPersona";

  const CONSULTAR_PERSONA_POR_NUMVIADOM = "SELECT * FROM Persona WHERE UPPER(numViaDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_NUMVIADOM_APROX = "SELECT * FROM Persona WHERE UPPER(numViaDomPersona) LIKE UPPER(?) ORDER BY numViaDomPersona";

  const CONSULTAR_PERSONA_POR_INTDOM = "SELECT * FROM Persona WHERE UPPER(intDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_INTDOM_APROX = "SELECT * FROM Persona WHERE UPPER(intDomPersona) LIKE UPPER(?) ORDER BY intDomPersona";

  const CONSULTAR_PERSONA_POR_TEL1DOM = "SELECT * FROM Persona WHERE UPPER(tel1DomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TEL1DOM_APROX = "SELECT * FROM Persona WHERE UPPER(tel1DomPersona) LIKE UPPER(?) ORDER BY tel1DomPersona";

  const CONSULTAR_PERSONA_POR_TEL2DOM = "SELECT * FROM Persona WHERE UPPER(tel2DomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_TEL2DOM_APROX = "SELECT * FROM Persona WHERE UPPER(tel2DomPersona) LIKE UPPER(?) ORDER BY tel2DomPersona";

  const CONSULTAR_PERSONA_POR_REFDOM = "SELECT * FROM Persona WHERE UPPER(refDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_REFDOM_APROX = "SELECT * FROM Persona WHERE UPPER(refDomPersona) LIKE UPPER(?) ORDER BY refDomPersona";

  const CONSULTAR_PERSONA_POR_EMADOM = "SELECT * FROM Persona WHERE UPPER(emaDomPersona) = UPPER(?)";

  const CONSULTAR_PERSONA_POR_EMADOM_APROX = "SELECT * FROM Persona WHERE UPPER(emaDomPersona) LIKE UPPER(?) ORDER BY emaDomPersona";

  const CONSULTAR_PERSONA_MULTI_X_ID="SELECT * FROM persona p INNER JOIN tipodoc td on p.idTipoDoc=td.idTipoDoc 
    INNER JOIN via v ON p.idVia=v.idVia 
    INNER JOIN zona z ON p.idZona=z.idZona 
    INNER JOIN distrito d on p.idDistritoDir=d.idDistrito 
    INNER JOIN distrito dis on p.idDistritoNac = dis.idDistrito 
    INNER JOIN edocivil ec ON p.idEdoCivil=ec.idEdoCivil 
    INNER JOIN genero ge ON p.idGenero=ge.idGenero 
    INNER JOIN idioma id ON p.idIdioma =id.idIdioma  
      where p.idPersona=? ORDER BY p.idPersona";

  const CONSULTAR_PERSONA_MULTI="SELECT * FROM persona p 
    INNER JOIN tipodoc td on p.idTipoDoc=td.idTipoDoc 
    INNER JOIN via v ON p.idVia=v.idVia 
    INNER JOIN zona z ON p.idZona=z.idZona 
    INNER JOIN distrito d on p.idDistritoDir=d.idDistrito 
    INNER JOIN distrito dis on p.idDistritoNac = dis.idDistrito 
    INNER JOIN edocivil ec ON p.idEdoCivil=ec.idEdoCivil 
    INNER JOIN genero ge ON p.idGenero=ge.idGenero 
    INNER JOIN idioma id ON p.idIdioma =id.idIdioma ORDER BY p.idPersona";

  const CONSULTAR_PERSONA_DNI_MUTI="SELECT * FROM persona p 
    INNER JOIN tipodoc td on p.idTipoDoc=td.idTipoDoc 
    INNER JOIN via v ON p.idVia=v.idVia 
    INNER JOIN zona z ON p.idZona=z.idZona 
    INNER JOIN distrito d on p.idDistritoDir=d.idDistrito 
    INNER JOIN distrito dis on p.idDistritoNac = dis.idDistrito 
    INNER JOIN edocivil ec ON p.idEdoCivil=ec.idEdoCivil 
    INNER JOIN genero ge ON p.idGenero=ge.idGenero 
    INNER JOIN idioma id ON p.idIdioma =id.idIdioma 
      where UPPER(p.dniPersona) LIKE UPPER(?) ORDER BY p.idPersona";

  const CONSULTAR_PERSONA_NOMBRE_MUTI="SELECT * FROM persona p 
    INNER JOIN tipodoc td on p.idTipoDoc=td.idTipoDoc 
    INNER JOIN via v ON p.idVia=v.idVia 
    INNER JOIN zona z ON p.idZona=z.idZona 
    INNER JOIN distrito d on p.idDistritoDir=d.idDistrito 
    INNER JOIN distrito dis on p.idDistritoNac = dis.idDistrito 
    INNER JOIN edocivil ec ON p.idEdoCivil=ec.idEdoCivil 
    INNER JOIN genero ge ON p.idGenero=ge.idGenero 
    INNER JOIN idioma id ON p.idIdioma =id.idIdioma 
      where UPPER(p.nom1Persona) 
        LIKE UPPER(?) OR UPPER(p.nom2Persona) 
        LIKE UPPER(?) OR UPPER(p.ape1Persona) 
        LIKE UPPER(?) or UPPER(p.ape2Persona) 
        LIKE UPPER(?) ORDER  BY p.idPersona";
 
}
?>