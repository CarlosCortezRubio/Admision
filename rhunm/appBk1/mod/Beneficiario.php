<?php 
require_once('../../../config/config.php');
require_once(MOD.'Beneficiario.php');
require_once(SENT .'Query.php');
require_once(SENT .'SQLBeneficiario.php');

class Beneficiario extends Query{
function __construct(){
		parent::abrirConexion();
}

function agregarBeneficiario($idBeneficiario,$idTipoCalcJud,$idModoPago,$idParentesco,$idPersona,$CESSaludBeneficiario,$tPensBeneficiario,$plazaBeneficiario,$leyendaBeneficiario,$ctaDepBeneficiario,$regJudicialBeneficiario,$fecIniBeneficiario,$fecFinBeneficiario,$edoBeneficiario){

    $idBeneficiario = parent::prepareParam($idBeneficiario, Query::DATATYPE_INTEGER);
    $idTipoCalcJud = parent::prepareParam($idTipoCalcJud, Query::DATATYPE_INTEGER);
    $idModoPago = parent::prepareParam($idModoPago, Query::DATATYPE_INTEGER);
    $idParentesco = parent::prepareParam($idParentesco, Query::DATATYPE_INTEGER);
    $idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
    $CESSaludBeneficiario = parent::prepareParam($CESSaludBeneficiario, Query::DATATYPE_STRING, 0);
    $tPensBeneficiario = parent::prepareParam($tPensBeneficiario, Query::DATATYPE_STRING, 0);
    $plazaBeneficiario = parent::prepareParam($plazaBeneficiario, Query::DATATYPE_STRING, 0);
    $leyendaBeneficiario = parent::prepareParam($leyendaBeneficiario, Query::DATATYPE_STRING, 0);
    $ctaDepBeneficiario = parent::prepareParam($ctaDepBeneficiario, Query::DATATYPE_STRING, 0);
    $regJudicialBeneficiario = parent::prepareParam($regJudicialBeneficiario, Query::DATATYPE_INTEGER);
    $edoBeneficiario = parent::prepareParam($edoBeneficiario, Query::DATATYPE_INTEGER);
            $params = array($idBeneficiario,$idTipoCalcJud,$idModoPago,$idParentesco,$idPersona,$CESSaludBeneficiario,$tPensBeneficiario,$plazaBeneficiario,$leyendaBeneficiario,$ctaDepBeneficiario,$regJudicialBeneficiario,$fecIniBeneficiario,$fecFinBeneficiario,$edoBeneficiario);
            return parent::execute(SQLBeneficiario::AGREGAR_BENEFICIARIO, $params);
        }

        function actualizarBeneficiario($idBeneficiario,$idTipoCalcJud,$idModoPago,$idParentesco,$idPersona,$CESSaludBeneficiario,$tPensBeneficiario,$plazaBeneficiario,$leyendaBeneficiario,$ctaDepBeneficiario,$regJudicialBeneficiario,$fecIniBeneficiario,$fecFinBeneficiario,$edoBeneficiario,$id_Beneficiario){

            $idBeneficiario = parent::prepareParam($idBeneficiario, Query::DATATYPE_INTEGER);
            $idTipoCalcJud = parent::prepareParam($idTipoCalcJud, Query::DATATYPE_INTEGER);
            $idModoPago = parent::prepareParam($idModoPago, Query::DATATYPE_INTEGER);
            $idParentesco = parent::prepareParam($idParentesco, Query::DATATYPE_INTEGER);
            $idPersona = parent::prepareParam($idPersona, Query::DATATYPE_INTEGER);
            $CESSaludBeneficiario = parent::prepareParam($CESSaludBeneficiario, Query::DATATYPE_STRING, 0);
            $tPensBeneficiario = parent::prepareParam($tPensBeneficiario, Query::DATATYPE_STRING, 0);
            $plazaBeneficiario = parent::prepareParam($plazaBeneficiario, Query::DATATYPE_STRING, 0);
            $leyendaBeneficiario = parent::prepareParam($leyendaBeneficiario, Query::DATATYPE_STRING, 0);
            $ctaDepBeneficiario = parent::prepareParam($ctaDepBeneficiario, Query::DATATYPE_STRING, 0);
            $regJudicialBeneficiario = parent::prepareParam($regJudicialBeneficiario, Query::DATATYPE_INTEGER);
            $edoBeneficiario = parent::prepareParam($edoBeneficiario, Query::DATATYPE_INTEGER);
            $id_Beneficiario = parent::prepareParam($id_Beneficiario, Query::DATATYPE_INTEGER);     
            $params = array($idBeneficiario,$idTipoCalcJud,$idModoPago,$idParentesco,$idPersona,$CESSaludBeneficiario,$tPensBeneficiario,$plazaBeneficiario,$leyendaBeneficiario,$ctaDepBeneficiario,$regJudicialBeneficiario,$fecIniBeneficiario,$fecFinBeneficiario,$edoBeneficiario,$id_Beneficiario);
            return parent::execute(SQLBeneficiario::ACTUALIZAR_BENEFICIARIO, $params);		
                }
                


        function consultarBeneficiario(){	
            return parent::executeQuery(SQLBeneficiario::LISTAR_BENEFICIARIO);
        }	

        function consultarBeneficiarioXMulti(){
            return parent::executeQuery(SQLBeneficiario::LISTAR_BENEFICIARIO_MULTI);
        }	
        function consultarBeneficiarioXMultiXid($idPersona){
            $params=array($idPersona);
            return parent::executeQuery(SQLBeneficiario::LISTAR_BENEFICIARIO_MULTI_X_ID,$params);
        }	
        function consultarBeneficiarioXDni($dniPersona){	
            $params=array($dniPersona);
            return parent::executeQuery(SQLBeneficiario::BUSCAR_BENEFICIARIO_POR_DNI,$params);
        }

        function consultarBeneficiarioXid($idBeneficiario){	
            $params = array($idBeneficiario);
            return parent::executeQuery(SQLBeneficiario::LISTAR_BENEFICIARIO_POR_ID,$params);
        }	

        
	function eliminarBeneficiario($idBeneficiario){
		$params = array($idBeneficiario);
		return parent::execute(SQLBeneficiario::ELIMINAR_BENEFICIARIO_ID, $params);		
	}
	function consultarUltimoIDsBeneficiario(){	
        $ultimoID=parent::executeQuery(SQLBeneficiario::BUSCAR_ULTIMO_IDBENEFICIARIO);
        return $ultimoID[0]['idBeneficiario'];
    }	

    function consultarBeneficiarioXparam($campBusq)
    {
        //         echo "[$campBusq]";
        $matCampBusq = explode(':', $campBusq);
         
        if ($matCampBusq[0]==1) {
            $params = array(
               '%'.$matCampBusq[1].'%'
            );
           
            return parent::executeQuery(SQLBeneficiario::BUSCAR_BENEFICIARIO_MULTI_DNI, $params);
        }

		if($matCampBusq[0]==2){
			$params = array(
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%',
				'%'.$matCampBusq[2].'%'

			 );
			return parent::executeQuery(SQLBeneficiario::BUSCAR_BENEFICIARIO_MULTI_NOMBRE, $params);

		}

    }
}
?>