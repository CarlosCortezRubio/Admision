<?php 
require_once('../../../config/config.php');
require_once(MOD.'BeneficiarioEmpleado.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLBeneficiarioEmpleado.php');

class BeneficiarioEmpleado extends Query{
function __construct(){
		parent::abrirConexion();
}


        function agregarBeneficiarioEmpleado($idBeneficiarioEmpleado ,$idEmpleado,$idBeneficiario ,$estado){

            $idBeneficiarioEmpleado = parent::prepareParam($idBeneficiarioEmpleado, Query::DATATYPE_INTEGER);
            $idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
            $idBeneficiario = parent::prepareParam($idBeneficiario, Query::DATATYPE_INTEGER);
            $estado = parent::prepareParam($estado, Query::DATATYPE_INTEGER);
            $params = array($idBeneficiarioEmpleado,$idEmpleado,$idBeneficiario,$estado);
            return parent::execute(SQLBeneficiarioEmpleado::AGREGAR_BENEFICIARIO_EMPLEADO, $params);		
                }


                function actualizarBeneficiarioEmpleado($idBeneficiarioEmpleado ,$idEmpleado,$idBeneficiario ,$estado,$id_BeneficiarioEmpleado ){

                    $idBeneficiarioEmpleado = parent::prepareParam($idBeneficiarioEmpleado, Query::DATATYPE_INTEGER);
                    $idEmpleado = parent::prepareParam($idEmpleado, Query::DATATYPE_INTEGER);
                    $idBeneficiario = parent::prepareParam($idBeneficiario, Query::DATATYPE_INTEGER);
                    $estado = parent::prepareParam($estado, Query::DATATYPE_INTEGER);
                    $params = array($idBeneficiarioEmpleado,$idEmpleado,$idBeneficiario,$estado,$idBeneficiarioEmpleado);
                    $id_BeneficiarioEmpleado = parent::prepareParam($id_BeneficiarioEmpleado, Query::DATATYPE_INTEGER);
                   
                    return parent::execute(SQLBeneficiarioEmpleado::ACTUALIZAR_BENEFICIARIO_EMPLEADO, $params);		
                       
                }

                function consultarBeneficiarioEmpleado(){	
                    return parent::executeQuery(SQLBeneficiarioEmpleado::LISTAR_BENEFICIARIO_EMPLEADO);
                }	
        
                function consultarBeneficiarioEmpleadoMulti(){	
                    return parent::executeQuery(SQLBeneficiarioEmpleado::LISTAR_BENEFICIARIO_EMPLEADO_MULTI);
                }	
                function consultarBeneficiarioEmpleadoMultixId($idBeneficiarioEmpleado){	
                    
                    $params = array($idBeneficiarioEmpleado);
                    return parent::executeQuery(SQLBeneficiarioEmpleado::LISTAR_BENEFICIARIO_EMPLEADO_MULTI_X_ID,$params);
                }	

                function buscarBeneficiarioEmpleadoMultixId($idBeneficiarioEmpleado){	
                    
                    $params = array($idBeneficiarioEmpleado);
                    return parent::executeQuery(SQLBeneficiarioEmpleado::BUSCAR_BENEFICIARIO_EMPLEADO_X_ID,$params);
                }

                function consultarBeneficiarioEmpleadoXparam($campBusq)
    {
        //         echo "[$campBusq]";
        $matCampBusq = explode(':', $campBusq);
         
        if ($matCampBusq[0]==1) {
            $params = array(
               '%'.$matCampBusq[1].'%'
            );
           
            return parent::executeQuery(SQLBeneficiarioEmpleado::LISTAR_BENEFICIARIO_EMPLEADO_MULTI_DNI, $params);
        }

		if($matCampBusq[0]==2){
			$params = array(
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%'

			 );
			return parent::executeQuery(SQLBeneficiarioEmpleado::LISTAR_BENEFICIARIO_EMPLEADO_MULTI_NOMBRE, $params);

		}

    }

        }

            ?>