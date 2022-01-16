<?php /* Smarty version 2.6.30, created on 2021-12-09 23:15:32
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Persona/listarPersona.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Persona.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Persona</h4>
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
			<br>

		<div class="row contenidoVer" style="width:100%">
			
				<div class="col-md-4">
					<label class="control-label"><span class='label-red'>*</span> DNI la Persona</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPersona(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombre de Persona</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridPersona(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="col-md-4"></div>
				
			<fieldset>
			<script>xajax_llenarGridPersona('','');</script>
			<center>
			<div id='cantReg' name='cantReg'></div>
			<div id='paginacion'></div>
			<div id='boxPersona' class='div-grid-consulta'></div>
			<div id='paginacion1'></div>
			</center>
			<!-- Grid -->
			<script>
                gridPersona = new dhtmlXGridObject('boxPersona');
                gridPersona.setDelimiter('|');
                gridPersona.setHeader('|Imp|Ver|Editar|Id|Género|Tipo Documento|Dni|Nombres  Completos|Fecha Nacimiento');
                gridPersona.enableColumnAutoSize(true);
                gridPersona.setInitWidths('25|50|50|50|50|98|90|90|*|*');
                gridPersona.setColAlign('center|center|center|center|center|left|left|left|left|left');
			//              gridPersona.attachEvent('onRowDblClicked',eliminarCondicion);
                gridPersona.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridPersona.setColSorting('str|str|str|str|int|int|int|int|str|str');
                gridPersona.setImagePath('../../rec/img/grid/');
                gridPersona.enableMultiselect(false);
                gridPersona.enableLightMouseNavigation(true);
                gridPersona.init();
			//			   gridPersona.attachHeader('A,B,C');
			</script>
			<!-- Fin de Grid -->
			</fieldset>
			<br />
			<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
			<input type='hidden' id='Personaid' name='Personaid' value='<?php echo $this->_tpl_vars['Personaid']; ?>
' readonly/>
			<input id='ids' name='ids' type='hidden' value='' readonly/>
		</div>

	</form>
</div>