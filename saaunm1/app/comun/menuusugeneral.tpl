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
          Académico
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<a class="dropdown-item" href="{$URLSIST}base/progEstudio">Programa de Estudio</a>
        	<a class="dropdown-item" href="{$URLSIST}base/Asignatura">Asignatura</a>
        	<a class="dropdown-item" href="{$URLSIST}base/Curso">Curso</a>
		 	<a class="dropdown-item" href="{$URLSIST}base/Periodo">Periodo</a>
		 	<a class="dropdown-item" href="{$URLSIST}base/Ciclo">Ciclo</a>
		 	<a class="dropdown-item" href="{$URLSIST}base/Inscripcion">Inscripción</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Docentes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<a class="dropdown-item" href="{$URLSIST}base/progEstudio">Ingresar notas</a>
        	<a class="dropdown-item" href="{$URLSIST}base/Asignatura">Ingresar observaciones</a>
        	<a class="dropdown-item" href="{$URLSIST}base/Curso">Ver sus horarios</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estudiantes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		 	<a class="dropdown-item" href="{$URLSIST}base/Curso/MisCursos">Ver Cursos</a>
		 	<a class="dropdown-item" href="{$URLSIST}base/Curso/MiHorario">Ver horario</a>
        	<a class="dropdown-item" href="{$URLSIST}base/Curso/PreInscripcion">Pre-inscripcion</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/reporte">Reportes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ajustes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          	<a class="dropdown-item" href="{$URLSIST}base/TipoEvaluac">Tipo Evaluación</a>
          	<a class="dropdown-item" href="{$URLSIST}base/TipoAsignatura">Tipo Asignatura</a>
			<a class="dropdown-item" href="{$URLSIST}base/EdoRegistro">Estados de los Registros</a>
			<a class="dropdown-item" href="{$URLSIST}base/Sede">Sede</a>
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