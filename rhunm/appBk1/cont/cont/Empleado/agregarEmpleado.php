<?php
require_once ('../../../config/config.php');
require_once (MOD . 'Beneficiario.php');
require_once (MOD . 'Empleado.php');
require_once (MOD . 'Persona.php');
class agregarEmpleado extends Action {
  function agregarEmpleado() {
    parent::__construct ();
  }
   
  function addEmpleado($request, $session) {

    $this->llamadoXajax ( 'Empleado' );
    $this->setParameter('btnPreG', '1');
    $this->ver ( 'Empleado.tpl' );
  }
  function ver($pagina) {
    $this->setTemplateDir ( VISTA . 'Empleado/' );
    $this->goForward ( $pagina );
  }
}
$action = new agregarEmpleado ();
$action->addEmpleado(  $_REQUEST, $_SESSION );

?>