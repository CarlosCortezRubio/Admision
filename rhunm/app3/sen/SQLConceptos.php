<?php 
/** 
 * @file SQLConceptos.php 
 *  
 * Consultas SQL de la Tabla conceptos 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 17/10/2021
 *  
*/ 
class SQLConceptos 
{ 
  const AGREGAR_CONCEPTOS = "INSERT INTO conceptos (idConceptos, idTipoConcepto, idEdoRegistro, codConceptos, nomConceptos, etiConceptos, mntConceptos, formConceptos, ordConceptos, afecta_afp, afecta_snp, afecta_ipss, es_remunera, grpConceptos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

  const ACTUALIZAR_CONCEPTOS = "UPDATE conceptos SET idConceptos = ?, idTipoConcepto = ?, idEdoRegistro = ?, codConceptos = ?, nomConceptos = ?, etiConceptos = ?, mntConceptos = ?, formConceptos = ?, ordConceptos = ?, afecta_afp = ?, afecta_snp = ?, afecta_ipss = ?, es_remunera = ?, grpConceptos = ? WHERE idConceptos = ?";

  const ELIMINAR_CONCEPTOS = "DELETE FROM conceptos WHERE idConceptos = ?";

  const CONSULTAR_CONCEPTOS = "SELECT * FROM conceptos c INNER JOIN
        tipoconcepto tc USING(idTipoConcepto) INNER JOIN   
        edoregistro r 
        WHERE r.idEdoRegistro = c.idEdoRegistro ORDER BY idConceptos";

  const CONSULTAR_CONCEPTOS_POR_IDCONCEPTOS = "SELECT * 
        FROM conceptos c INNER JOIN
        tipoconcepto tc USING(idTipoConcepto) INNER JOIN   
        edoregistro r 
        WHERE idConceptos = ? AND r.idEdoRegistro = c.idEdoRegistro";

  const CONSULTAR_CONCEPTOS_POR_IDTIPOCONCEPTO = "SELECT * FROM conceptos WHERE idTipoConceptoConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO = "SELECT * FROM conceptos WHERE idEdoRegistro = ?";

  const CONSULTAR_CONCEPTOS_POR_IDEDOREGISTRO_Y_TIPO_CONCEPTO = "SELECT * FROM conceptos WHERE idEdoRegistro = ? AND idTipoConcepto = ?";

  const CONSULTAR_CONCEPTOS_POR_CODCONCEPTOS = "SELECT * FROM conceptos WHERE UPPER(codConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_COD_APROX = "SELECT * FROM conceptos WHERE UPPER(codConceptos) LIKE UPPER(?) ORDER BY codConceptos";

  const CONSULTAR_CONCEPTOS_POR_NOM = "SELECT * FROM conceptos WHERE UPPER(nomConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_NOM_APROX = "SELECT * FROM conceptos WHERE UPPER(nomConceptos) LIKE UPPER(?) ORDER BY nomConceptos";

  const CONSULTAR_CONCEPTOS_POR_ETI = "SELECT * FROM conceptos WHERE UPPER(etiConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_ETI_APROX = "SELECT * FROM conceptos WHERE UPPER(etiConceptos) LIKE UPPER(?) ORDER BY etiConceptos";

  const CONSULTAR_CONCEPTOS_POR_MNT = "SELECT * FROM conceptos WHERE UPPER(mntConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_MNT_APROX = "SELECT * FROM conceptos WHERE UPPER(mntConceptos) LIKE UPPER(?) ORDER BY mntConceptos";

  const CONSULTAR_CONCEPTOS_POR_FORM = "SELECT * FROM conceptos WHERE UPPER(formConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_FORM_APROX = "SELECT * FROM conceptos WHERE UPPER(formConceptos) LIKE UPPER(?) ORDER BY formConceptos";

  const CONSULTAR_CONCEPTOS_POR_ORD = "SELECT * FROM conceptos WHERE ordConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_AFP = "SELECT * FROM conceptos WHERE afecta_afpConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_SNP = "SELECT * FROM conceptos WHERE afecta_snpConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_AFECTA_IPSS = "SELECT * FROM conceptos WHERE afecta_ipssConceptos = ?";

  const CONSULTAR_CONCEPTOS_POR_ES_REMUNERA = "SELECT * FROM conceptos WHERE UPPER(es_remuneraConceptos) = UPPER(?)";

  const CONSULTAR_CONCEPTOS_POR_ES_REMUNERA_APROX = "SELECT * FROM conceptos WHERE UPPER(es_remuneraConceptos) LIKE UPPER(?) ORDER BY es_remuneraConceptos";

  const CONSULTAR_CONCEPTOS_POR_GRP = "SELECT * FROM conceptos WHERE grpConceptos = ?";

  const CONSULTAR_DICCIONARIO_POR_GRPCONCEPTOS = "SELECT cjtovalores FROM diccionario WHERE diccionarioid = ?";

}
?>