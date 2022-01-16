<?php /* Smarty version 2.6.30, created on 2021-05-31 04:35:49
         compiled from C:%5Cxampp%5Chtdocs%5Cplanilla/app/vista/ConcAct/listarConcAct.tpl */ ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
ConcAct.js'></script>-->
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
        <script>xajax_llenarGridConcAct('','');</script>
<center>
<div id='paginacion'></div>
<div id='boxConcAct' class='div-grid-consulta'></div>
<div id='paginacion1'></div>
</center>
        <!-- Grid -->
        <script>
                gridConcAct = new dhtmlXGridObject('boxConcAct');
                gridConcAct.setDelimiter('|');
                gridConcAct.setHeader('|Imp|Ver|Editar|Id|Aguinaldo|Basica|Bonif_personal|Ael25671|Aeds081|Tph|Bonif_familiar|Du080_04|Refrig_y_movi|Du90_96|Ds19_94_pcm|Ds21_92_pcm|Bon_especial|Reunificada|Igv|Cargsimul|Art18_dl_20530|Du073_97|Du011_99|Du037_94|Ds016|Ds017|Ds110_2006|Ds039_2007|Ds120_2008|Ds014_2009|Ds077_2010|Ds031_2011|Ds024_2012|Ds004_2013|Ds003_2014|Ds002_2015|Ds005_2016|Ds020_2017|Ds011_2018|Ds009_2019|Ds006_2020|Ipss|Cafae|Prderrma');
                gridConcAct.enableColumnAutoSize(true);
                gridConcAct.setInitWidths('25|60|60|60|92|99|96|104|98|97|93|104|98|103|97|101|101|102|101|93|99|104|98|98|98|95|95|100|100|100|100|100|100|100|100|100|100|100|100|100|100|100|94|95|98');
                gridConcAct.setColAlign('center|center|center|center|right|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left|left');
//              gridConcAct.attachEvent('onRowDblClicked',eliminarCondicion);
                gridConcAct.setColTypes('ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro|ro');
                gridConcAct.setColSorting('str|str|str|str|int|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str|str');
                gridConcAct.setImagePath('../../rec/img/grid/');
                gridConcAct.enableMultiselect(false);
                gridConcAct.enableLightMouseNavigation(true);
                gridConcAct.init();
//			   gridConcAct.attachHeader('A,B,C');
        </script>
        <!-- Fin de Grid -->
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='ConcActid' name='ConcActid' value='<?php echo $this->_tpl_vars['ConcActid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>