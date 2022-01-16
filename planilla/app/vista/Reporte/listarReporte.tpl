<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}PlanPens.js'></script>-->
{include file="../../../app/comun/libGrid.tpl"}
<div class='pagina' style="width:95%">
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
			<br>
<div class="row contenidoVer" style="width:100%">
	<div class="form-group col-lg-12" style="position:fixed;z-index: 2000;top: 100px;left: 500px;">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#Pensionistas">Pensionistas</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Viudez">Viudez</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Orfandad">Orfandad</a>
		  </li>
		</ul>
	</div>


	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Año</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaAnio selected=$idAnio}
		</select>
		</div>
	</div>
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Mes</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaMes selected=$idMes}
		</select>
		</div>
	</div>
	
<!-- Expandiendo tabs -->
	<div class="form-group col-lg-12">
		<!-- Tab panes -->
		<div class="tab-content">
		  	<div class="tab-pane container active row" id="Pensionistas">
			  	<div class="row">
					<div class="form-group col-lg-12">
						<fieldset>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/pensConsolidado')" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Pensionados <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>		
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
										<img onCLick="enviar('reporte/reporte1')" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="enviar('reporte/reporte1Excel')" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Pensionados</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/listadoBoletas')" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas Pensionados</label>
									</label>
								</div>
						</fieldset>
					</div>	
				</div>	
			</div>	
		  	<div class="tab-pane container row" id="Viudez">
			  	<div class="row">
					<div class="form-group col-lg-12">
						<fieldset>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/pensConsolidadoCon')" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Viudez <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>		
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
										<img onCLick="enviar('reporte/reporte1Con')" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="enviar('reporte/reporte1ExcelCon')" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Viudez</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/listadoBoletasCon')" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas Viudez</label>
									</label>
								</div>
						</fieldset>
					</div>	
				</div>	
			</div>	
		  	<div class="tab-pane container row" id="Orfandad">
			  	<div class="row">
					<div class="form-group col-lg-3">
						<label class="control-label">Año </label>
						Orfandad
					</div>	
				</div>	
			</div>	
		</div>	
	</div>	
</div>			
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='PlanPensid' name='PlanPensid' value='{$PlanPensid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
{literal}
<script>
function enviar(valor){
	anio = jQuery("#idAnio option:selected").val()
	mes = jQuery("#idMes option:selected").val()
	url = valor+'/'+anio+":"+mes
	window.open(url, '_blank');
	//alert(anio+' - '+mes+' - '+valor+' - '+url)
	//jQuery(location).attr('href',valor+"?anio/"+anio+"&mes/"+mes);
	//jQuery(location).attr('href',valor+"/anio/"+anio+"/mes/"+mes);
	//jQuery(location).attr('href',valor+"/"+anio+"/"+mes).attr('target','_blank');
	//vntConsultar(valor+"/"+anio+"/"+mes, 'Consultar Usuario');
	//vntConsultar(url, 'Reporte');
}
</script>
{/literal}