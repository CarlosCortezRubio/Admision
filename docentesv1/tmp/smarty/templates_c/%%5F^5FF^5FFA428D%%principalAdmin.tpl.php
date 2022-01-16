<?php /* Smarty version 2.6.30, created on 2021-04-07 04:05:41
         compiled from C:%5Cxampp%5Chtdocs%5CnominaGob/app/vista/principal/principalAdmin.tpl */ ?>
<div class='pagina'>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/tplError.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<h3>Bienvenido <?php echo $this->_tpl_vars['NOMBRE_USUARIO']; ?>
</h3>
		<br>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<!-- 				<div class="form-group col-md-4 divIconosCent"> -->
<!-- 					<a href="<?php echo $this->_tpl_vars['URLSIST']; ?>
base/cargararchivo"> -->
<!-- 						<img src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/descarga.jpg" class="iconoDesktop"><br> -->
<!-- 						<label class="control-label">Gestión de Archivos</label> -->
<!-- 					</a> -->
<!-- 				</div> -->
				<!--
				<div class="form-group col-md-4 divIconosCent">
					<a href="<?php echo $this->_tpl_vars['URLSIST']; ?>
base/usuario">
						<img src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/ajustes.png" class="iconoDesktop"><br>
						<label class="control-label">Usuarios</label>
					</a>
				</div>				
				-->
			</div>
		</div>	
	</form>
</div>