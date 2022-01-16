<?php
require_once ('../../../config/config.php');
require_once (SENT . 'Query.php');
require_once (SENT . 'SQLEncuesta.php');

class Encuesta extends Query{
    function __construct(){
        parent::abrirConexion();
    }
    
    function totalProfesores(){
        $sqlSelect = "SELECT * FROM public.profesor WHERE idprofesor !=0 Order by idprofesor";
        $result = parent::executeQuery($sqlSelect);
        return $result;
    }
    function totalProfesoresAsignaturas(){
        $sqlSelect = "SELECT * FROM public.profesor pro INNER JOIN 
        public.prof_cur pcur USING(idprofesor) INNER JOIN
        public.asignatura asig USING(idasignatura)
        WHERE idprofesor !=0
        Order by idprofesor,idasignatura";
        $result = parent::executeQuery($sqlSelect);
        return $result;
    }
    function encuestasXprofesorYasignatura($idProfesor,$idAsignatura){
        $sqlSelect = "SELECT * FROM public.encuesta where idprofesor = $idProfesor and idasignatura = $idAsignatura";
        $result = parent::executeQuery($sqlSelect);
        return $result;
    }
    function cantEncXidProfesor($idprofesor){
        //     include('dbconect.php');
        
        $sql = "SELECT idprofesor FROM public.prof_cur
    INNER JOIN public.est_cur USING(idprof_cur)
    WHERE idprofesor = $idprofesor";
        $result = parent::executeQuery($sql);
//         return count($result);
        if (is_array($result)) {
            return count($result);
        }else{
            return 0;
        }
//         $result = pg_query($con, $sql);
//         return pg_num_rows($result);
    }
    function cantEncRealizadasXidProfesor($idprofesor){
        //     include('dbconect.php');
        
        $sql = "SELECT idprofesor FROM public.encuesta
    WHERE idprofesor = $idprofesor";
        $result = parent::executeQuery($sql);
        if (is_array($result)) {
            return count($result);
        }else{
            return 0;
        }
        
//         $result = pg_query($con, $sql);
//         return pg_num_rows($result);
    }
    function consultarEncuesta()
    {
        return parent::executeQuery(SQLEncuesta::CONSULTAR_PLANPENS);
    }

    function consultarEncuestaXidEncuesta($idEncuesta)
    {
        $params = array(
            $idEncuesta
        );
        return parent::executeQuery(SQLEncuesta::CONSULTAR_PLANPENS_POR_IDPLANPENS, $params);
    }
}
?>