<?php

class SQLBeneficiarioEmpleado{


const AGREGAR_BENEFICIARIO_EMPLEADO= "INSERT INTO beneficiarioempleado(idBeneficiarioEmpleado, idEmpleado, idBeneficiario, estado) VALUES (?,?,?,?) ";

const LISTAR_BENEFICIARIO_EMPLEADO = "SELECT * FROM beneficiarioempleado order by idBeneficiarioEmpleado";


const LISTAR_BENEFICIARIO_EMPLEADO_MULTI="SELECT 
    be.idBeneficiarioEmpleado,b.idPersona as idBenefiario,
    per.idPersona as idEmpleado,per.dniPersona as dniBeneficiario,
    per.nom1Persona as nomBeneficiario,per.nom2Persona as nom2Beneficiario,
    per.ape1Persona as apeBeneficiario,per.ape2Persona as ape2Beneficiario,
    pers.dniPersona as dniEmpleado,pers.nom1Persona as nomEmpleado,pers.nom2Persona as nom2Empleado,
    pers.ape1Persona as apeEmpleado,pers.ape2Persona as ape2Empleado,be.estado 
    FROM beneficiarioempleado be 
        INNER JOIN beneficiario b  
        INNER JOIN empleado e on be.idEmpleado=e.idEmpleado 
        INNER JOIN persona per on b.idPersona= per.idPersona 
        inner join persona pers on e.idPersona=pers.idPersona  
        group  by be.idBeneficiarioEmpleado";

const LISTAR_BENEFICIARIO_EMPLEADO_MULTI_X_ID="SELECT 
    be.idBeneficiarioEmpleado,
    e.idEmpleado,
    b.idBeneficiario,per.dniPersona as dniBeneficiario,per.nom1Persona as nomBeneficiario,
    per.nom2Persona as nom2Beneficiario,
    per.ape1Persona as apeBeneficiario,
    per.ape2Persona as ape2Beneficiario,
    pers.dniPersona as dniEmpleado,pers.nom1Persona as nomEmpleado,pers.nom2Persona as nom2Empleado,pers.ape1Persona as apeEmpleado,pers.ape2Persona as ape2Empleado,be.estado FROM beneficiarioempleado be INNER JOIN beneficiario b ON be.idBeneficiario= b.idBeneficiario INNER JOIN empleado e on be.idEmpleado=e.idEmpleado INNER JOIN persona per on b.idPersona= per.idPersona inner join persona pers on e.idPersona=pers.idPersona ORDER by be.idBeneficiarioEmpleado";
const LISTAR_BENEFICIARIO_EMPLEADO_MULTI_DNI="SELECT 
    be.idBeneficiarioEmpleado,
    per.dniPersona as dniBeneficiario,
    per.nom1Persona as nomBeneficiario,
    per.nom2Persona as nom2Beneficiario,
    per.ape1Persona as apeBeneficiario,
    per.ape2Persona as ape2Beneficiario,
    pers.dniPersona as dniEmpleado,
    pers.nom1Persona as nomEmpleado,
    pers.nom2Persona as nom2Empleado,
    pers.ape1Persona as apeEmpleado,
    pers.ape2Persona as ape2Empleado,
    be.estado 
    FROM beneficiarioempleado be 
        INNER JOIN beneficiario b ON be.idBeneficiario= b.idBeneficiario 
        INNER JOIN empleado e on be.idEmpleado=e.idEmpleado 
        INNER JOIN persona per on b.idPersona= per.idPersona 
        inner join persona pers on e.idPersona=pers.idPersona 
    where UPPER(pers.dniPersona) like UPPER(?) ORDER by be.idBeneficiarioEmpleado";

const LISTAR_BENEFICIARIO_EMPLEADO_MULTI_NOMBRE="SELECT 
    be.idBeneficiarioEmpleado,
    per.dniPersona as dniBeneficiario,
    per.nom1Persona as nomBeneficiario,
    per.nom2Persona as nom2Beneficiario,
    per.ape1Persona as apeBeneficiario,
    per.ape2Persona as ape2Beneficiario,
    pers.dniPersona as dniEmpleado,
    pers.nom1Persona as nomEmpleado,
    pers.nom2Persona as nom2Empleado,
    pers.ape1Persona as apeEmpleado,
    pers.ape2Persona as ape2Empleado,
    be.estado 
    FROM beneficiarioempleado be 
        INNER JOIN beneficiario b ON be.idBeneficiario= b.idBeneficiario 
        INNER JOIN empleado e on be.idEmpleado=e.idEmpleado 
        INNER JOIN persona per on b.idPersona= per.idPersona 
        inner join persona pers on e.idPersona=pers.idPersona 
    where UPPER(pers.nom1Persona) 
        like UPPER(?) or UPPER(pers.nom2Persona) 
        LIKE UPPER(?) or UPPER(pers.ape1Persona) 
        LIKE UPPER(?) or UPPER(pers.ape2Persona) 
        like UPPER(?) ORDER by be.idBeneficiarioEmpleado";

const BUSCAR_BENEFICIARIO_EMPLEADO_X_ID="SELECT 
    be.idBeneficiarioEmpleado,
    b.idPersona as idBeneficiario,
    per.idPersona as idEmpleado,
    per.dniPersona as dniBeneficiario,
    per.nom1Persona as nomBeneficiario,
    per.nom2Persona as nom2Beneficiario,
    per.ape1Persona as apeBeneficiario,
    per.ape2Persona as ape2Beneficiario,
    pers.dniPersona as dniEmpleado,
    pers.nom1Persona as nomEmpleado,
    pers.nom2Persona as nom2Empleado,
    pers.ape1Persona as apeEmpleado,
    pers.ape2Persona as ape2Empleado,
    be.estado 
    FROM beneficiarioempleado be 
        INNER JOIN beneficiario b  
        INNER JOIN empleado e on be.idEmpleado=e.idEmpleado 
        INNER JOIN persona per on b.idPersona= per.idPersona 
        inner join persona pers on e.idPersona=pers.idPersona 
    where be.idBeneficiarioEmpleado=? group  by be.idBeneficiarioEmpleado";

const ACTUALIZAR_BENEFICIARIO_EMPLEADO="UPDATE beneficiarioempleado 
    SET idBeneficiarioEmpleado = ?,idEmpleado = ?, idBeneficiario = ?, estado = ? 
    WHERE idBeneficiarioEmpleado = ?";
const ELIMINAR_BENEFICIARIO_EMPLEADO="DELETE from  beneficiarioempleado where idBeneficiarioEmpleado = ?";

const ELIMINAR_BENEFICIARIO_EMPLEADO_2="UPDATE beneficiarioempleado SET estado=0 where idBeneficiarioEmpleado = ?";

}

?>