<?php /* Smarty version 2.6.30, created on 2021-12-09 23:15:39
         compiled from C:%5Claragon%5Cwww%5Crhunm/app/vista/Reporte/listarReporte.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:\\laragon\\www\\rhunm/app/vista/Reporte/listarReporte.tpl', 40, false),)), $this); ?>
<!-- <script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
PlanPens.js'></script>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/libGrid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class='pagina' style="width:95%">
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
	<div class="form-group col-lg-12" style="position:fixed;z-index: 2000;top: 140px;left: 50px;">
		<!-- Nav tabs -->
				  		<!--
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Txt">Txt</a>
		  </li>
		-->
			</div>


	<div class="form-group col-md-2 mt-2">
		<label class="control-label"><span class='label-red'>*</span> Año</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaAnio'],'selected' => $this->_tpl_vars['idAnio']), $this);?>

		</select>
		</div>
			<label class="control-label"><span class='label-red'>*</span> Mes</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tablaMes'],'selected' => $this->_tpl_vars['idMes']), $this);?>

		</select>
		</div>
	</div>

<!-- Expandiendo tabs -->
	<div class="form-group col-lg-10">
		<!-- Tab panes -->
		<div class="tab-content mt-2">
		  				  	<div class="row">
								<div class="form-group col-md-4 divIconosCent">
																		<label onCLick="xajax_clickVerPdf('Reporte/pensConsolidado',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" target="_blank">
										<img src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas  <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
																				<img onCLick="xajax_clickVerPdf('Reporte/reporte1',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="xajax_clickVerPdf('Reporte/reporte1Excel',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" src="<?php echo $this->_tpl_vars['PUB_URL']; ?>
img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas </label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
																		<label onCLick="xajax_clickVerPdf('Reporte/listadoBoletas',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" target="_blank">
										<img src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas </label>
									</label>
								</div>

								

												</div>
			
		  			</div>
	</div>
</div>
	<br />
		<input type='hidden' id='opt' name='opt' value='<?php echo $this->_tpl_vars['opt']; ?>
' readonly/>
		<input type='hidden' id='PlanPensid' name='PlanPensid' value='<?php echo $this->_tpl_vars['PlanPensid']; ?>
' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
<?php echo '
<script>
function enviar(valor,tipo){
	anio = jQuery("#idAnio option:selected").val()
	mes = jQuery("#idMes option:selected").val()
	url = valor+\'/\'+anio+":"+mes+":"+tipo
	window.open(url, \'_blank\');
	//alert(anio+\' - \'+mes+\' - \'+valor+\' - \'+url)
	//jQuery(location).attr(\'href\',valor+"?anio/"+anio+"&mes/"+mes);
	//jQuery(location).attr(\'href\',valor+"/anio/"+anio+"/mes/"+mes);
	//jQuery(location).attr(\'href\',valor+"/"+anio+"/"+mes).attr(\'target\',\'_blank\');
	//vntConsultar(valor+"/"+anio+"/"+mes, \'Consultar Usuario\');
	//vntConsultar(url, \'Reporte\');
}
</script>
'; ?>