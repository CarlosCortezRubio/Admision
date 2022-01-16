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
	<div class="form-group col-lg-12" style="position:fixed;z-index: 2000;top: 140px;left: 50px;">
		<!-- Nav tabs -->
		{* <ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#Pensionistas">Seccion1</a>
		  </li> *}
		  {* <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Viudez">Seccion2</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Orfandad">Seccion3</a>
		  </li> *}
		<!--
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#Txt">Txt</a>
		  </li>
		-->
		{* </ul> *}
	</div>


	<div class="form-group col-md-2 mt-2">
		<label class="control-label"><span class='label-red'>*</span> Año</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaAnio selected=$idAnio}
		</select>
		</div>
	{* </div>
	<div class="form-group col-md-2"> *}
		<label class="control-label"><span class='label-red'>*</span> Mes</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
			{html_options options=$tablaMes selected=$idMes}
		</select>
		</div>
	</div>

<!-- Expandiendo tabs -->
	<div class="form-group col-lg-10">
		<!-- Tab panes -->
		<div class="tab-content mt-2">
		  	{* <div class="tab-pane container active row" id="Pensionistas"> *}
			  	<div class="row">
								<div class="form-group col-md-4 divIconosCent">
									{* <label onCLick="enviar('Reporte/pensConsolidado',1)" target="_blank"> *}
									<label onCLick="xajax_clickVerPdf('Reporte/pensConsolidado',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas  <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
										{* <img onCLick="enviar('Reporte/reporte1',1)" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="enviar('Reporte/reporte1Excel',1)" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br> *}
										<img onCLick="xajax_clickVerPdf('Reporte/reporte1',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="xajax_clickVerPdf('Reporte/reporte1Excel',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas </label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									{* <label onCLick="enviar('Reporte/listadoBoletas',1)" target="_blank"> *}
									<label onCLick="xajax_clickVerPdf('Reporte/listadoBoletas',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas </label>
									</label>
								</div>

								{* <div class="input-group-append">
								<button type="button" class="btn btn-primary" onclick="xajax_clickVerPdf('Reporte/reporte1',1, jQuery('#idAnio option:selected').val(), jQuery('#idMes option:selected').val());">PDF</button>
								  </div> *}


								{* <div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('Reporte/pensTxt1',1)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/imgTxt.png" class="iconoDesktop" style="max-width:50px;"><br>
										Archivo TXT INTERMEF
									</label>
								</div> *}
				</div>
			{* </div> *}

		  	{* <div class="tab-pane container row" id="Viudez">
			  	<div class="row">
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('Reporte/pensConsolidado',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
										<img onCLick="enviar('Reporte/reporte1',2)" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="enviar('Reporte/reporte1ExcelCon',2)" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Viudez</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('Reporte/listadoBoletas',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas Viudez</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('Reporte/pensTxt1',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/imgTxt.png" class="iconoDesktop" style="max-width:50px;"><br>
										Archivo TXT INTERMEF
									</label>
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
		  	<div class="tab-pane container row" id="Txt">
			  	<div class="row">
					<div class="form-group col-lg-3">
						<label onCLick="enviar('Reporte/txt1')" target="_blank">
						Archivo TXT INTERMEF</label>
					</div>
				</div>
			</div>	 *}
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
function enviar(valor,tipo){
	anio = jQuery("#idAnio option:selected").val()
	mes = jQuery("#idMes option:selected").val()
	url = valor+'/'+anio+":"+mes+":"+tipo
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