<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="..\CSS\nav.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
		<script src="..\PLUGINS\jquery\jquery.min.js"></script>
		<script src="..\PLUGINS\jquery\jquery.js"></script> 
		<script src="..\PLUGINS\datatables\jquery.dataTables.min.js"></script>
    	<script src="..\PLUGINS\datatables\jquery.dataTables.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="..\JS\nav.js"></script>
		<title>Document</title>
	</head>
	<body>
		<nav id="navega" class="sidebar-navigation">
			<ul>
				<li  onclick="$('#Mprof').modal('show')" class="item-menu active">
					<i class="fa fa-user"></i>
					<span  class="tooltip" >Resultados por Profesor</span>
				</li>
				<li  onclick="buscarRegistro(2,0,0)" class="item-menu">
					<i class="fa fa-percent"></i>
					<span  class="tooltip">Total Aprobados / Reprobados</span>
				</li>
			</ul>
		</nav>	
		<div class="modal fade" id="Mprof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalLongTitle">Reporte de encuestas por profesor</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body">
						  <?php
							include('dbconect.php');
							$lista = array();
							$sqlrpof = "SELECT * FROM public.profesor Order by idprofesor"; 
							$sqlasig = "SELECT * FROM public.asignatura Order by idasignatura"; 
							$result = pg_query($con, $sqlrpof);
						  ?>
						<label class="control-label">Profesor</label>
						<select id='campoBusqueda1' name='campoBusqueda1' class="form-control input-sm">
    						<?php
							while ($row = pg_fetch_array($result)) {
							?>
								<option value="<?php echo $row['idprofesor']?>"><?php echo $row['nom1profesor']?></option>
							<?php	
							}
							?>
						</select>
						<br>
						<label class="control-label">Asignatura</label>
						<select id='campoBusqueda2' name='campoBusqueda2' class="form-control input-sm" >
							<?php
							$result = pg_query($con, $sqlasig);
							while ($row = pg_fetch_array($result)) {
							?>
								<option value="<?php echo $row['idasignatura']?>"><?php echo $row['nomasignatura']?></option>
							<?php	
							}
							?>
						</select>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="buscarRegistro(1,document.getElementById('campoBusqueda1').value,document.getElementById('campoBusqueda2').value)">Buscar</button>
      				</div>
    			</div>
  			</div>
		</div>
		<div id="respuesta">
			
		</div>
    	
	</body>
</html>

