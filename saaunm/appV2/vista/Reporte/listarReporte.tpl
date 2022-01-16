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
	
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Programa de Estudio</label>
		<div class="input-group mb-3">
		<select id='idAnio' name='idAnio' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
		</select>
		</div>
	</div>
	<div class="form-group col-md-2">
		<label class="control-label"><span class='label-red'>*</span> Período</label>
		<div class="input-group mb-3">
		<select id='idMes' name='idMes' class='form-control input-sm'>
			<option value=''>-Seleccione-</option>
		</select>
		</div>
	</div>
	
<!-- Expandiendo tabs -->
	<div class="form-group col-lg-12">
		<!-- Tab panes -->
		<div class="tab-content">
		  	<div class="tab-pane container active row" id="Pensionistas">
			  	<div class="row">
								<div class="form-group col-md-3 divIconosCent">
									<label target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Estudiantes por Curso</label>
									</label>
								</div>		
								<div class="form-group col-md-3 divIconosCent">
									<label target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Estudiantes Matriculados</label>
									</label>
								</div>
								<div class="form-group col-md-3 divIconosCent">
									<label target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado de Cursos</label>
									</label>
								</div>
								<div class="form-group col-md-3 divIconosCent">
									<label target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado de Docentes</label>
									</label>
								</div>
				</div>	
			</div>	
		  	<div class="tab-pane container row" id="Viudez">
			  	<div class="row">
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/pensConsolidado',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Viudez <br>( CONSOLIDADO POR CONCEPTOS )</label>
									</label>
								</div>		
								<div class="form-group col-md-4 divIconosCent">
									<label target="_blank">
										<img onCLick="enviar('reporte/reporte1',2)" src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;">
										<img onCLick="enviar('reporte/reporte1ExcelCon',2)" src="{$PUB_URL}img/home/excel.gif" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Planillas Viudez</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/listadoBoletas',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:50px;"><br>
										<label class="control-label">Listado Boletas Viudez</label>
									</label>
								</div>
								<div class="form-group col-md-4 divIconosCent">
									<label onCLick="enviar('reporte/pensTxt1',2)" target="_blank">
										<img src="{$PUB_URLSIST}img/home/imgTxt.png" class="iconoDesktop" style="max-width:50px;"><br>
										Archivo TXT INTERMEF
									</label>
								</div>
				</div>	
			</div>	
		  	<div class="tab-pane container row" id="Orfandad">
			  	<div class="row">
					<div class="form-group col-lg-3">
						<label class="control-label">A�o </label>
						Orfandad
					</div>	
				</div>	
			</div>	
		  	<div class="tab-pane container row" id="Txt">
			  	<div class="row">
					<div class="form-group col-lg-3">
						<label onCLick="enviar('reporte/txt1')" target="_blank">
						Archivo TXT INTERMEF</label>
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