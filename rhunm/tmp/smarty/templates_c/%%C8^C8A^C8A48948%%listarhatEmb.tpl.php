<?php /* Smarty version 2.6.30, created on 2021-11-01 17:10:45
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/hatEmb/listarhatEmb.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
hatEmb.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina'>
	<form name='form' id='form' method='post' action='<?php echo $this->_tpl_vars['valorForm']; ?>
'>
		<div class='line-title'>
			<h4>Listar Hat Emb</h4>
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
		<fieldset>
        <script>xajax_llenarGridHatEmb('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxHatEmb' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridHatEmb = new dhtmlXGridObject('boxHatEmb');
                gridHatEmb.setDelimiter('|');
                gridHatEmb.setHeader('|Imp|Ver|Editar|Id|Cod|Nombre');
                gridHatEmb.enableColumnAutoSize(true);
                gridHatEmb.setInitWidths('25|60|60|60|92|93|*');
                gridHatEmb.setColAlign('center|center|center|center|right|left|left');
//              gridHatEmb.attachEvent('onRowDblClicked',eliminarCondicion);
                gridHatEmb.setColTypes('ro|ro|ro|ro|ro|ro|ro');
                gridHatEmb.setColSorting('str|str|str|str|int|str|str');
                gridHatEmb.setImagePath('../../rec/img/grid/');
                gridHatEmb.enableMultiselect(false);
                gridHatEmb.enableLightMouseNavigation(true);
                gridHatEmb.init();
//			   gridHatEmb.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='hatEmbid' name='hatEmbid' value='<?php echo $this->_tpl_vars['hatEmbid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>