<?php /* Smarty version 2.6.30, created on 2021-10-29 00:32:19
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Beneficiario/listarBeneficiario.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Empleado.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
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
				
				<div class="form-group col-md-3">
					<label class="control-label"><span class='label-red'>*</span> DNI del Beneficiario</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='dniPersona' name='opt' value=''/>
					  	<div class="input-group-append">
					    	<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiario(1+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label"><span class='label-red'>*</span> Nombres del Beneficiario</label>
					<div class="input-group mb-3">
						<input type='text' class="form-control input-sm" id='nomPersona' name='opt' value=''/>
					  	<div class="input-group-append">
						<button type="button" class="btn btn-primary" onclick="xajax_llenarGridBeneficiario(2+':'+xajax.$('dniPersona').value+':'+xajax.$('nomPersona').value,0);">Buscar</button>
					  	</div>
					</div>
				</div>
			</div>		
		<fieldset>
        <script>xajax_llenarGridBeneficiario('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxBeneficiario' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridBeneficiario= new dhtmlXGridObject('boxBeneficiario');
                gridBeneficiario.setDelimiter('|');
                gridBeneficiario.setHeader('|Imp|Ver|Editar|ID|Parentesco|Nombre Completo|Fecha Inicio|Fecha Fin');
                gridBeneficiario.enableColumnAutoSize(true);
                gridBeneficiario.setInitWidths('30|80|80|80|80|100|*|100|100');
                gridBeneficiario.setColAlign('center|center|center|center|center|center|left|center|center|');
//              gridBeneficiario.attachEvent('onRowDblClicked',eliminarCondicion);
                gridBeneficiario.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|');
                gridBeneficiario.setColSorting('str|str|str|str|int|int|str|str|str|');
                gridBeneficiario.setImagePath('../../rec/img/grid/');
                gridBeneficiario.enableMultiselect(false);
                gridBeneficiario.enableLightMouseNavigation(true);
                gridBeneficiario.init();
//	        gridBeneficiario.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='idBeneficiario' name='idBeneficiario' value='<?php echo $this->_tpl_vars['idBeneficiario']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>