<?php
/** 
 * @file persona.php 
 *  
 * Controlador Ingresar/Actualizar de la Tabla Persona 
 * 
 * @author UNM 
 * @version V 0.1 
 * @date 11/08/2021
 *  
 */
require_once ('../../../config/config.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'EdoCivil.php');
require_once (MOD . 'Idioma.php');
require_once (MOD . 'Distrito.php');
require_once (MOD . 'Departamento.php');
require_once (MOD . 'TipoDoc.php');
require_once (MOD . 'Zona.php');
require_once (MOD . 'Via.php');

class principalPersona extends Controller
{

    private $opt;

    // Atributos de
    // private $idPersona;
    // private $idGenero;
    // private $idEdoCivil;
    // private $idIdioma;
    // private $idDistritoNac;
    // private $idDistritoDir;
    // private $idTipoDoc;
    // private $idZona;
    // private $idVia;
    // private $dniPersona;
    // private $nom1Persona;
    // private $nom2Persona;
    // private $ape1Persona;
    // private $ape2Persona;
    // private $numDepPersona;
    // private $fecNacPersona;
    // private $zonaDomPersona;
    // private $desViaDomPersona;
    // private $numViaDomPersona;
    // private $intDomPersona;
    // private $tel1DomPersona;
    // private $tel2DomPersona;
    // private $refDomPersona;
    // private $emaDomPersona;
    function principalPersona()
    {
        parent::__construct();
        $this->campos = 'idPersona,idGenero,idEdoCivil,idIdioma,idDistritoNac,idDistritoDir,idTipoDoc,idZona,idVia,dniPersona,nom1Persona,nom2Persona,ape1Persona,ape2Persona,numDepPersona,fecNacPersona,zonaDomPersona,desViaDomPersona,numViaDomPersona,intDomPersona,tel1DomPersona,tel2DomPersona,refDomPersona,emaDomPersona';
        $this->modelo = 'Persona';
        $this->modulo = 'Persona';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
    }
    

    function listar($request, $session)
    {
        $this->llamadoXajax('Persona');
        $this->setParameter('etiquetaModulo', 'Listar' . ' ' . $this->modulo);
        $this->setParameterPath('urlImp', 'base/Persona/imprimir');
        $this->ver('listarPersona.tpl');
    }

    function guardar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, $this->campos);
        $objPersona = new Persona();
        $tablaResultado = $objPersona->agregarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idIdioma, $this->idDistritoNac, $this->idDistritoDir, $this->idTipoDoc, $this->idZona, $this->idVia, $this->dniPersona, $this->nom1Persona, $this->nom2Persona, $this->ape1Persona, $this->ape2Persona, $this->numDepPersona, $this->fecNacPersona, $this->zonaDomPersona, $this->desViaDomPersona, $this->numViaDomPersona, $this->intDomPersona, $this->tel1DomPersona, $this->tel2DomPersona, $this->refDomPersona, $this->emaDomPersona);
        $objPersona->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_INGRESAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_INGRESAR;
            $this->setParameter('error', $error);
            $this->asignarParametrosError($request, 'g', $this->modelo, 'guardar', '', $this->campos);
            $this->ver('Persona.tpl');
        }
    }

    function ingresar($request, $session)
    {
        $this->llamadoXajax('Persona');
        $opcion = $request['opcion'];
        $this->inicializarCombos();
        $this->asignarParametros($request, 'g', $this->modelo, $opcion, null, null, null);
        
        $this->setParameterPath('urlImp', '');
        $this->setParameter('etiquetaModulo', 'Ingresar' . ' ' . $this->modulo);
        $this->ver('Persona.tpl');
    }


    function agregarPersona() {
        //    dump($request);die();
            //    $this->llamadoXajax();
            $this->llamadoXajax ( 'Persona' );
            $this->ver ( 'Persona.tpl' );
          }
   
    function actualizar($request, $session)
    {
        $this->inicializarAtributos($request, $this->campos);
        $objPersona = new Persona();
        $tablaResultado = $objPersona->actualizarPersona($this->idPersona, $this->idGenero, $this->idEdoCivil, $this->idIdioma, $this->idDistritoNac, $this->idDistritoDir, $this->idTipoDoc, $this->idZona, $this->idVia, $this->dniPersona, $this->nom1Persona, $this->nom2Persona, $this->ape1Persona, $this->ape2Persona, $this->numDepPersona, $this->fecNacPersona, $this->zonaDomPersona, $this->desViaDomPersona, $this->numViaDomPersona, $this->intDomPersona, $this->tel1DomPersona, $this->tel2DomPersona, $this->refDomPersona, $this->emaDomPersona, $this->idPersona);
        $objPersona->cerrarConexion();
        if ($tablaResultado > 0) {
            $exito = Messages::EXITO_ACTUALIZAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ACTUALIZAR;
            $this->asignarParametrosError($request, 'm', $this->modelo, 'actualizar', '', $this->campos);
            $this->setParameter('opt', 'mr');
            $this->ver('Persona.tpl');
        }
    }

    function verEditar($request, $session, $opcionMod = false)
    {
        $this->llamadoXajax('Persona');
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $this->inicializarCombos();
        $objPersona = new Persona();
        $tablaResultado = $objPersona->consultarPersonaXidPersona($this->id);
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $tablaResultado = $tablaResultado[0];
            if ($opcionMod) {
                $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
                $this->ver('verPersona.tpl', true);
            } else {
                $this->asignarParametros($request, 'mr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
                $this->setParameter('etiquetaModulo', 'Editar' . ' ' . $this->modulo);
                $this->ver('Persona.tpl');
            }
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function consultar($request, $session)
    {
        $this->verEditar($request, $session, true);
    }

    function eliminar($request, $session)
    {
        $tablaResultado = false;
        $ids = $request['ids'];
        if ($ids == null || $ids == '') {
            return 0;
        }
        $objPersona = new Persona();
        $arreglo_ids = split(',', $ids);
        foreach ($arreglo_ids as $idPersona) {
            $tablaResultado = $objPersona->eliminarPersona($idPersona);
        }
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $exito = Messages::EXITO_ELIMINAR;
            $this->setParameter('exito', $exito);
            $this->setParameter('opt', '');
            $this->listar($request, $session);
        } else {
            $error = Messages::ERROR_ELIMINAR;
            $this->setParameter('error', $error);
            $this->listar($request, $session);
        }
    }

    function cancelar($request, $session)
    {
        $this->listar($request, $session);
    }

    function home($request, $session)
    {
        $this->verEditar('../principal/principal.php');
    }

    function ver($pagina, $formatoImpresion = false)
    {
        if ($formatoImpresion) {
            $this->setTemplateDir(VISTA . 'Persona/');
            $this->goForward($pagina);
        } else {
            $this->visualizar('Persona/' . $pagina);
        }
    }

    function imprimir($request, $session)
    {
        $mod = ucfirst(@$request['sec']);
        $opt = '';
        if (isset($request['id'])) {
            $opt = $request['id'];
        }
        $cad = trim('imp' . $mod . '.php');
        include $cad;
    }

    function ventanaConsultar($request, $session)
    {
        $opcion = $request['opcion'];
        $this->inicializarAtributos($request, 'id');
        $objPersona = new Persona();
        $tablaResultado = $objPersona->consultarPersonaXid($this->id);
        $objPersona->cerrarConexion();
        if ($tablaResultado) {
            $this->asignarParametros($request, 'vr', $this->modelo, $opcion, null, $tablaResultado, $this->campos);
            $this->setParameter('etiquetaModulo', 'Consultar' . ' ' . $this->modulo);
            $this->ver('verPersona.tpl', TRUE);
        } else {
            // $this->visualizar('principal/error.tpl');
        }
    }

    function inicializarCombos()
    {
        $objGenero = new Genero();
        $tablaGenero = Enumerado::tabla2enumerado($objGenero->consultarGenero(), '1', 0);
        $this->setParameter('tablaGenero', $tablaGenero);
        $objGenero->cerrarConexion();
        
        $objEdoCivil = new EdoCivil();
        $tablaEdoCivil = Enumerado::tabla2enumerado($objEdoCivil->consultarEdoCivil(), '1', 0);
        $this->setParameter('tablaEdoCivil', $tablaEdoCivil);
        $objEdoCivil->cerrarConexion();
        
        $objIdioma = new Idioma();
        $tablaIdioma = Enumerado::tabla2enumerado($objIdioma->consultarIdioma(), '1', 0);
        $this->setParameter('tablaIdioma', $tablaIdioma);
        $objIdioma->cerrarConexion();
        

        $objDistrito = new Distrito();
        $tablaDistrito = Enumerado::tabla2enumerado($objDistrito->consultarDistrito(), '2', 0);
        $this->setParameter('tablaDistrito', $tablaDistrito);
        $objDistrito->cerrarConexion();

        $objDepartamento= new Departamento();
        $tablaDepar= Enumerado::tabla2enumerado($objDepartamento->consultarDepartamento(), '2', 0);
        $this->setParameter('tablaDepartNac', $tablaDepar);
        $this->setParameter('tablaDepDir', $tablaDepar);
        
        
        $objDistrito->cerrarConexion();
        
        $objTipoDoc = new TipoDoc();
        $tablaTipoDoc = Enumerado::tabla2enumerado($objTipoDoc->consultarTipoDoc(), '1', 0);
        $this->setParameter('tablaTipoDoc', $tablaTipoDoc);
        $objTipoDoc->cerrarConexion();
        
        $objZona = new Zona();
        $tablaZona = Enumerado::tabla2enumerado($objZona->consultarZona(), '1', 0);
        $this->setParameter('tablaZona', $tablaZona);
        $objZona->cerrarConexion();
        
        $objVia = new Via();
        $tablaVia = Enumerado::tabla2enumerado($objVia->consultarVia(), '1', 0);
        $this->setParameter('tablaVia', $tablaVia);
        $objVia->cerrarConexion();
    }

    function addPersona($request, $session) {
//         dump($request);
//         echo "aca";die();
      
        $this->setParameter('valorbtn','1');
        $this->setParameter('valorvalidate','1');
        $this->setParameter('desactivar','1');
        
        $this->setParameterPath ( 'desactivarOpciones', true );
        //$opcion = 'g';
        $this->inicializarCombos();
        $this->asignarParametros($request,'g',$this->modelo,'g',null,null,null);
//         $this->llamadoXajax ( 'Persona' );
        //$this->setParameter('btnPreG', '1');
        $this->ver('Persona.tpl', true );
    }
    
}
?>