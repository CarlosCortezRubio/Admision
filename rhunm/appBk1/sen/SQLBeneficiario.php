<?php

class SQLBeneficiario{


const AGREGAR_BENEFICIARIO= "INSERT INTO beneficiario (idBeneficiario, idTipoCalcJud, idModoPago, idParentesco, idPersona, CESSaludBeneficiario, tPensBeneficiario, plazaBeneficiario, leyendaBeneficiario, ctaDepBeneficiario, regJudicialBeneficiario, fecIniBeneficiario, fecFinBeneficiario, edoBeneficiario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
const LISTAR_BENEFICIARIO= "SELECT * FROM beneficiario ORDER BY idBeneficiario";
const LISTAR_BENEFICIARIO_POR_ID= "SELECT * FROM beneficiario b INNER JOIN persona p on b.idPersona=p.idPersona where b.idBeneficiario=?  ORDER BY b.idBeneficiario";
const ACTUALIZAR_BENEFICIARIO="UPDATE  beneficiario SET idBeneficiario = ?,idTipoCalcJud = ?, idModoPago = ?, idParentesco = ?, idPersona = ?, CESSaludBeneficiario = ?,tPensBeneficiario = ?, plazaBeneficiario = ?, leyendaBeneficiario = ?, ctaDepBeneficiario = ?, regJudicialBeneficiario = ?, fecIniBeneficiario = ?, fecFinBeneficiario = ?, edoBeneficiario = ? WHERE idBeneficiario = ?";
const ELIMINAR_BENEFICIARIO_ID="DELETE FROM   beneficiario WHERE idBeneficiario = ?";
const BUSCAR_BENEFICIARIO_POR_DNI="SELECT * FROM beneficiario b INNER JOIN persona p on b.idPersona=p.idPersona where p.dniPersona = ? limit 1";
const BUSCAR_ULTIMO_IDBENEFICIARIO="SELECT * FROM beneficiario ORDER BY idBeneficiario DESC";
const LISTAR_BENEFICIARIO_MULTI="SELECT * FROM beneficiario b INNER JOIN modopago mp on b.idModoPago=mp.idModoPago INNER JOIN parentesco pa on b.idParentesco=pa.idParentesco INNER JOIN persona p on b.idPersona=p.idPersona INNER JOIN tipocalcjud tcj on b.idTipoCalcJud =tcj.idTipoCalcJud ORDER by b.idBeneficiario";
const LISTAR_BENEFICIARIO_MULTI_X_ID="SELECT * FROM beneficiario b INNER JOIN modopago mp on b.idModoPago=mp.idModoPago INNER JOIN parentesco pa on b.idParentesco=pa.idParentesco INNER JOIN persona p on b.idPersona=p.idPersona INNER JOIN tipocalcjud tcj on b.idTipoCalcJud =tcj.idTipoCalcJud where b.idBeneficiario = ? ";
const BUSCAR_BENEFICIARIO_MULTI_DNI="SELECT * FROM beneficiario b INNER JOIN modopago mp on b.idModoPago=mp.idModoPago INNER JOIN parentesco pa on b.idParentesco=pa.idParentesco INNER JOIN persona p on b.idPersona=p.idPersona INNER JOIN tipocalcjud tcj on b.idTipoCalcJud =tcj.idTipoCalcJud WHERE UPPER(p.dniPersona) like UPPER(?)";
const BUSCAR_BENEFICIARIO_MULTI_NOMBRE="SELECT * FROM beneficiario b INNER JOIN modopago mp on b.idModoPago=mp.idModoPago INNER JOIN parentesco pa on b.idParentesco=pa.idParentesco INNER JOIN persona p on b.idPersona=p.idPersona INNER JOIN tipocalcjud tcj on b.idTipoCalcJud =tcj.idTipoCalcJud WHERE UPPER(p.nom1Persona) like UPPER(?) OR UPPER(p.nom2Persona) like UPPER (?) OR UPPER(P.ape1Persona) LIKE UPPER(?) OR UPPER(p.ape2Persona) LIKE UPPER(?)  ORDER by b.idBeneficiario";

}




?>