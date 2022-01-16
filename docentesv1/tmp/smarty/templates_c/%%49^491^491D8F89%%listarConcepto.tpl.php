<?php /* Smarty version 2.6.30, created on 2021-04-07 04:05:35
         compiled from C:%5Cxampp%5Chtdocs%5CnominaGob/app/vista/Concepto/listarConcepto.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
Concepto.js'></script>-->
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
		<fieldset>
        <script>xajax_llenarGridConcepto('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConcepto' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConcepto = new dhtmlXGridObject('boxConcepto');
                gridConcepto.setDelimiter('|');
                gridConcepto.setHeader('|Imp|Ver|Editar|Id|IdTipo|IdEdoRegistro|IdNomina|IdActividad|IdUniFuncional|IdCodPresup|Cod|Nom|NomImp|Desc|Val|Form');
                gridConcepto.enableColumnAutoSize(true);
                gridConcepto.setInitWidths('25|60|60|60|92|96|103|98|101|104|101|93|93|96|94|93|94');
                gridConcepto.setColAlign('center|center|center|center|right|right|right|right|right|right|right|left|left|left|left|left|left');
//              gridConcepto.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConcepto.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridConcepto.setColSorting('str|str|str|str|int|int|int|int|int|int|int|str|str|str|str|str|str');
                gridConcepto.setImagePath('../../rec/img/grid/');
                gridConcepto.enableMultiselect(false);
                gridConcepto.enableLightMouseNavigation(true);
                gridConcepto.init();
//			   gridConcepto.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='Conceptoid' name='Conceptoid' value='<?php echo $this->_tpl_vars['Conceptoid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>