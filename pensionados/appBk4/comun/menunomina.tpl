<!--<a class="nav-link" href="http://localhost/condominio/base/principal">Principal<span class="sr-only">(current)</span></a>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="right: 0;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mí Nómina
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="{$URLSIST}base/Cargo">Asignación de personal</a>
          <a class="dropdown-item" href="{$URLSIST}base/Constante">Gestión de constantes</a>
          <a class="dropdown-item" href="{$URLSIST}base/Concepto">Gestión de conceptos</a>
<!--           <a class="dropdown-item" href="{$URLSIST}base/persona">Gestión de períodos</a> -->
        </div>
      </li>
      <!--      
      <li class="nav-item">
        <a class="nav-link" href="{$URLSIST}base/CargarArchivo">Estructura Presupuestaria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{$URLSIST}base/importar">Importar datos al Sistema Verde</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/persona/misDatos">Mis Datos</a>
      </li>      
      -->
      <li class="nav-item active">
        <a class="nav-link" href="{$URLSIST}base/nomina/salNomina">Deseleccionar Nómina</a>
      </li>
    </ul>
  </div>
</nav>