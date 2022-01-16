<?php 
/** 
 * @file SQLConceptos.php 
 *  
 * Consultas SQL de la Tabla Conceptos 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 17/10/2021
 *  
*/ 
class SQLConceptos 
{ 
  const AGREGAR_CONCEPTOS = "INSERT INTO Conceptos (idConceptos, idTipoConcepto, idEdoRegistro, codConceptos, nomConceptos, etiConceptos, mntConceptos, formConceptos, ordConceptos, afecta_afp, afecta_snp, afecta_ipss, es_remunera, grpConceptos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_CONCEPTOS = "UPDATE Conceptos SET idConceptos = ?, idTipoConcepto = ?, idEdoRegistro = ?, codConceptos = ?, nomConceptos = ?, etiConceptos = ?, mntConceptos = ?, formConceptos = ?, ordConceptos = ?, afecta_afp = ?, afecta_snp = ?, afecta_ipss = ?, es_remunera = ?, grpConceptos = ? WHERE idConceptos = ?";

  const ELIMINAR_CONCEPTOS = "DELETE FROM Conceptos WHERE idConceptos = ?";

  const CONSULTAR_CONCEPTOS = "SELECT * FROM Conceptos c INNER JOIN
        TipoConcepto tc USING(idTipoConcepto) INNER JOIN   
        EdoRegistro r 
        WHERE r.idEdoRegistro = c.idEdoRegistro ORDER BY idConceptos";

  const CONSULTAR_CONCEPTOS_POR_IDCONCEPTOS = "SELECT * 
        FROM Conceptos c INNER JOIN
        TipoConcepto tc USING(idTipoConcepto) INNER JOIN   
        EdoRegistro r 
        WHERE idConceptos = ? AND r.idEdoRegistro = c.idEdoRegistro";

  const CONSULTAR_CONCEPTOS_POR_IDTIPOCONCEPTO = "SELECT * FROM Conceptos WHERE idTipoConceptoConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO = "SELECT * FROM Conceptos WHERE idEdoRegistro = ?";

  const CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO_Y_TIPO_CONCEPTO = "SELECT * FROM Conceptos WHERE idEdoRegistro = ? AND idTipoConcepto = ?";
  
  const CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO_Y_TIPO_CONCEPTO_NEG = "SELECT * FROM Conceptos WHERE idEdoRegistro = ? AND idTipoConcepto <> ?";

  const CONSULTAR_CONCEPTOS_POR_CODCONCEPTOS = "SELECT * FROM Conceptos WHERE UPPER(codConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_COD_APROX = "SELECT * FROM Conceptos WHERE UPPER(codConceptos) LIKE UPPER(?) ORDER BY codConceptos";

  const CONSULTAR_CONCEPTOS_POR_NOM = "SELECT * FROM Conceptos WHERE UPPER(nomConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_NOM_APROX = "SELECT * FROM Conceptos WHERE UPPER(nomConceptos) LIKE UPPER(?) ORDER BY nomConceptos";

  const CONSULTAR_CONCEPTOS_POR_ETI = "SELECT * FROM Conceptos WHERE UPPER(etiConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_ETI_APROX = "SELECT * FROM Conceptos WHERE UPPER(etiConceptos) LIKE UPPER(?) ORDER BY etiConceptos";

  const CONSULTAR_CONCEPTOS_POR_MNT = "SELECT * FROM Conceptos WHERE UPPER(mntConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_MNT_APROX = "SELECT * FROM Conceptos WHERE UPPER(mntConceptos) LIKE UPPER(?) ORDER BY mntConceptos";

  const CONSULTAR_CONCEPTOS_POR_FORM = "SELECT * FROM Conceptos WHERE UPPER(formConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_FORM_APROX = "SELECT * FROM Conceptos WHERE UPPER(formConceptos) LIKE UPPER(?) ORDER BY formConceptos";

  const CONSULTAR_CONCEPTOS_POR_ORD = "SELECT * FROM Conceptos WHERE ordConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_AFP = "SELECT * FROM Conceptos WHERE afecta_afpConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_SNP = "SELECT * FROM Conceptos WHERE afecta_snpConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_IPSS = "SELECT * FROM Conceptos WHERE afecta_ipssConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_ES_REMUNERA = "SELECT * FROM Conceptos WHERE UPPER(es_remuneraConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_ES_REMUNERA_APROX = "SELECT * FROM Conceptos WHERE UPPER(es_remuneraConceptos) LIKE UPPER(?) ORDER BY es_remuneraConceptos";

  const CONSULTAR_CONCEPTOS_POR_GRP = "SELECT * FROM Conceptos WHERE grpConceptos = ?";

  const CONSULTAR_DICCIONARIO_POR_GRPCONCEPTOS = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

}
?>