<?php /* Smarty version 2.6.30, created on 2021-06-11 13:52:05
         compiled from C:%5Claragon%5Cwww%5Crepencuesta/app/vista/Encuesta/Encuesta.tpl */ ?>
<?php echo '
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<script src="'; ?>
<?php echo $this->_tpl_vars['PATH_JS']; ?>
<?php echo 'datatables/jquery.dataTables.min.js"></script>
   	<script src="'; ?>
<?php echo $this->_tpl_vars['PATH_JS']; ?>
<?php echo 'datatables/jquery.dataTables.js"></script>

<script>
    jQuery(document).ready(function (){
      jQuery(\'#campoBusqueda\').keyup(function (){
        this.value = (this.value + \'\').replace(/[^0-9]/g, \'\');
      });
    });
	function activar(){
		jQuery("#registrar").css("display", "initial");
		jQuery("#registrar").css("display", "initial");
// 		$("#parrafo").css("color", "#000000");
	}
	function validar(valor){
	alert(valor)
//         valor = document.getElementById("campo").value;
        if( isNaN(valor) ) {
          return false;
        }	
	}
	function buscarRegistro(op,valor1,valor2){
		//alert(\'op = \'+op)
					if(op==3){
						ventanaAlerta(\'Buscando...\',\'Evaluación\');
					}else{
						jQuery(".upload-msg").text(\'Buscando...\');
					}
				
				jQuery("#registrar").css("display", "none");

				var data = new FormData();
				data.append(\'op\',op);
				data.append(\'idp\',valor1);
				data.append(\'idc\',valor2);
				
				jQuery.ajax({
					url: dominioJS+"app/cont/encuesta/consultar.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					if(data!=\'\'){
						mensaje = \'<div class="" role="alert">\'+
							\'\'+data+
						  	\'</div>\';
					}else{
						mensaje = \'<div class="alert alert-danger alert-dismissible" role="alert">\'+
							\'<p>El profesor <strong>\'+valor+
						  	\'</strong> no se encuentra registrado, por favor verifique la información suministrada</p>\'+ 
						  	\'</div>\';					
					}
					if(op==3){
						ventanaAlerta(mensaje,\'Resultados de la Evaluación\');
					}else{
						jQuery(".upload-msg").html(mensaje);
						
			            //$("#respuesta").html(mensaje);
			            jQuery(\'#tabla_contenido\').DataTable({
			            	"order": [[ 1, "asc" ]],
			                "paging": true,
			                "dom": \'<f>B<t>lp\',
			                "language": {
			                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
			                },
			                "lengthMenu": [
			                    [10, 25, 50, -1],
			                    [10, 25, 50, "All"]
			                ],
			                "info": false
			
			            });							
					}
											
						
// 						jQuery("#captureMovimiento").val(data);

					}
				});				
			}
function mostrarDiv(opt){
 	alert(opt);
	jQuery(\'#div1\').hide();
	jQuery(\'#div2\').hide();
	jQuery(\'#div3\').hide();
	jQuery(\'#divRes\').hide();
	
	jQuery(\'#div\'+opt).show();
	/*
	switch(opt){
	case 1:
    	jQuery(\'#div1\').show();
    	jQuery(\'#div1\').hide();		
	return;
	case 2:
	return
	}
	*/
}			
</script>
'; ?>

<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
<!-- 			<h4><?php if ($this->_tpl_vars['opt'] == 'g'): ?> Agregar <?php elseif ($this->_tpl_vars['opt'] == 'm' || $this->_tpl_vars['opt'] == 'mr'): ?> Modificar <?php endif; ?> </h4>		 -->
 				<div class="form-group col-lg-12" style="position:fixed;z-index: 4000;top: 100px;">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#home" onclick="buscarRegistro(2,0,0)">Total Encuestas</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu1" onclick="buscarRegistro(1,0,0)">Resultados por Profesor</a>
					  </li>
<!-- 					  <li class="nav-item"> -->
<!-- 					    <a class="nav-link" data-toggle="tab" href="#menu2">Total Aprobados / Reprobados</a> -->
<!-- 					  </li> -->
<!-- 					  <li class="nav-item"> -->
<!-- 					    <a class="nav-link" data-toggle="tab" href="#menu3">G3</a> -->
<!-- 					  </li> -->
					</ul>
				</div>
		</div>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			<?php if ($this->_tpl_vars['error'] != ''): ?><div id='msg-error' class='msg-red'><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
			<?php if ($this->_tpl_vars['exito'] != ''): ?><div id='msg-exito' class='msg-green'><?php echo $this->_tpl_vars['exito']; ?>
</div><?php endif; ?>
			<?php if ($this->_tpl_vars['info'] != ''): ?><div id='msg-info' class='msg-blue'><?php echo $this->_tpl_vars['info']; ?>
</div><?php endif; ?>
		</div>
		<fieldset>
<!-- 		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p> -->
<!-- **************************************************************************		 -->
				<div class="form-group col-lg-12">
					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane container active row" id="home">
					  	<a href='<?php echo $this->_tpl_vars['URLSIST']; ?>
base/encuesta/imprimir1' target='_blank'>
					  		<img width="40px;" class='classHand' onclick='xajax_clickEncuesta(\$campoClave,1)' src='<?php echo $this->_tpl_vars['PUB_URL']; ?>
img/home/pdf.jpg' title='Consultar' border='0px'/>
					  	</a>
					  	<?php echo '
					  	<script>buscarRegistro(2,0,0);</script>
					  	'; ?>

					  	</div>
					  	<div class="tab-pane container row" id="menu1">
					  	</div>
					  	<div class="tab-pane container row" id="menu2">
<!-- 					  		<input type="button" value="Buscar" id="botonBuscar" class="btn btn-primary" onclick="buscarRegistro(2,0,0)"> -->
					  	</div>
					  	<div class="tab-pane container row" id="menu3">

					  	</div>
				  	</div>
				  	    					
                    <div id="divRes" name="divRes" class="form-group col-md-12">
                    	<div class="upload-msg"></div>
                    </div>
				  	
			  	</div>
<!-- **************************************************************************		 -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idPlanCrd' name='idPlanCrd' value='<?php echo $this->_tpl_vars['idPlanCrd']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>