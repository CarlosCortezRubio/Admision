<!--<a class="nav-link" href="http://localhost/condominio/base/principal">Principal<span class="sr-only">(current)</span></a>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/principal">Principal</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planillas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{$URLSIST}base/PlanPens">Pensionistas</a>
          <a class="dropdown-item" href="{$URLSIST}base/PlanPensCon">Viudez</a>
          <!-- <a class="dropdown-item" href="{$URLSIST}base/Periodo/PlanPens">Orfandad</a> -->
        </div>
      </li>
      <!-- 
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/PlanPens">Planillas</a>
      </li>
      -->
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/reporte">Reportes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ajustes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{$URLSIST}base/ConcAct/verEditar/1">Conceptos imprimibles</a>
          <a class="dropdown-item" href="{$URLSIST}base/Periodo">Periodos</a>
          <a class="dropdown-item" href="{$URLSIST}base/Periodo/duplicar">Duplicar planilla</a>
        </div>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{$URLSIST}base/reporte/pensConsolidado">Pensiones consolidado</a>
          <a class="dropdown-item" href="{$URLSIST}base/banco">Bancos</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/ConcAct/verEditar/1">Concepto imp.</a>
      </li>
      -->
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}">Salir</a>
      </li>
    </ul>
  </div>
</nav>