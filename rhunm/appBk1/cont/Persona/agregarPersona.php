<?php
require_once ('../../../config/config.php');
require_once (MOD . 'Beneficiario.php');
require_once (MOD . 'Persona.php');
require_once (MOD . 'Enumerado.php');
require_once (MOD . 'Genero.php');
require_once (MOD . 'EdoCivil.php');
require_once (MOD . 'Idioma.php');
require_once (MOD . 'Distrito.php');
require_once (MOD . 'Distrito.php');
require_once (MOD . 'TipoDoc.php');
require_once (MOD . 'Zona.php');
require_once (MOD . 'Via.php');
class agregarPersona extends Action {
  function agregarPersona() {
    parent::__construct ();
    $this->campos = 'idPersona,idGenero,idEdoCivil,idIdioma,idDistritoNac,idDistritoDir,idTipoDoc,idZona,idVia,dniPersona,nom1Persona,nom2Persona,ape1Persona,ape2Persona,numDepPersona,fecNacPersona,zonaDomPersona,desViaDomPersona,numViaDomPersona,intDomPersona,tel1DomPersona,tel2DomPersona,refDomPersona,emaDomPersona';
        $this->modelo = 'Persona';
        $this->modulo = 'Persona';
        $this->setTemplateDir(TEMPLATE);
        $this->asignarConstantes();
        $this->setParameter('MOD', $this->modelo);
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
  
   
  function registrar() {

    $this->llamadoXajax ( 'Persona' );
    $this-> inicializarCombos();
    $this->setParameter('btnPreG', '1');
    $this->ver ( 'Persona.tpl' );
  }
  function ver($pagina) {
    $this->setTemplateDir ( VISTA . 'Persona/' );
    $this->goForward ( $pagina );
  }
}
$action = new agregarPersona ();
$action->registrar ();

?>