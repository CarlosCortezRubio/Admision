{literal}
<script type="text/javascript">
/*
validar('aguinaldoConcAct','aguinaldoConcAct',REQUERIDO);
validar('basicaConcAct','basicaConcAct',REQUERIDO);
validar('bonif_personalConcAct','bonif_personalConcAct',REQUERIDO);
validar('ael25671ConcAct','ael25671ConcAct',REQUERIDO);
validar('aeds081ConcAct','aeds081ConcAct',REQUERIDO);
validar('tphConcAct','tphConcAct',REQUERIDO);
validar('bonif_familiarConcAct','bonif_familiarConcAct',REQUERIDO);
validar('du080_04ConcAct','du080_04ConcAct',REQUERIDO);
validar('refrig_y_moviConcAct','refrig_y_moviConcAct',REQUERIDO);
validar('du90_96ConcAct','du90_96ConcAct',REQUERIDO);
validar('ds19_94_pcmConcAct','ds19_94_pcmConcAct',REQUERIDO);
validar('ds21_92_pcmConcAct','ds21_92_pcmConcAct',REQUERIDO);
validar('bon_especialConcAct','bon_especialConcAct',REQUERIDO);
validar('reunificadaConcAct','reunificadaConcAct',REQUERIDO);
validar('igvConcAct','igvConcAct',REQUERIDO);
validar('cargsimulConcAct','cargsimulConcAct',REQUERIDO);
validar('art18_dl_20530ConcAct','art18_dl_20530ConcAct',REQUERIDO);
validar('du073_97ConcAct','du073_97ConcAct',REQUERIDO);
validar('du011_99ConcAct','du011_99ConcAct',REQUERIDO);
validar('du037_94ConcAct','du037_94ConcAct',REQUERIDO);
validar('ds016ConcAct','ds016ConcAct',REQUERIDO);
validar('ds017ConcAct','ds017ConcAct',REQUERIDO);
validar('ds110_2006ConcAct','ds110_2006ConcAct',REQUERIDO);
validar('ds039_2007ConcAct','ds039_2007ConcAct',REQUERIDO);
validar('ds120_2008ConcAct','ds120_2008ConcAct',REQUERIDO);
validar('ds014_2009ConcAct','ds014_2009ConcAct',REQUERIDO);
validar('ds077_2010ConcAct','ds077_2010ConcAct',REQUERIDO);
validar('ds031_2011ConcAct','ds031_2011ConcAct',REQUERIDO);
validar('ds024_2012ConcAct','ds024_2012ConcAct',REQUERIDO);
validar('ds004_2013ConcAct','ds004_2013ConcAct',REQUERIDO);
validar('ds003_2014ConcAct','ds003_2014ConcAct',REQUERIDO);
validar('ds002_2015ConcAct','ds002_2015ConcAct',REQUERIDO);
validar('ds005_2016ConcAct','ds005_2016ConcAct',REQUERIDO);
validar('ds020_2017ConcAct','ds020_2017ConcAct',REQUERIDO);
validar('ds011_2018ConcAct','ds011_2018ConcAct',REQUERIDO);
validar('ds009_2019ConcAct','ds009_2019ConcAct',REQUERIDO);
validar('ds006_2020ConcAct','ds006_2020ConcAct',REQUERIDO);
validar('ipssConcAct','ipssConcAct',REQUERIDO);
validar('cafaeConcAct','cafaeConcAct',REQUERIDO);
validar('prderrmaConcAct','prderrmaConcAct',REQUERIDO);
*/
</script>
{/literal}
<div class='pagina'>
	<form name='form' id='form' method='POST' action='{$valorForm}'>
		<div class='line-title'>
			<h4>{if $opt == 'g'} Agregar {elseif $opt == 'm' || $opt == 'mr'} Modificar {/if} </h4>
		</div>	
		<a id='ancla' href='#'></a>
		<input type='hidden' id='opcion' name='opcion'  value='' readonly>
		<div id='errores'>
			{if $error != ''}<div id='msg-error' class='msg-red'>{$error}</div>{/if}
			{if $exito != ''}<div id='msg-exito' class='msg-green'>{$exito}</div>{/if}
			{if $info  != ''}<div id='msg-info' class='msg-blue'>{$info}</div>{/if}
		</div>
		<fieldset>
		<p class='p-black'>Los campos marcados con <span class='label-red'>*</span> son obligatorios</p>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<!-- ********************************** -->
<div class="form-check col-lg-2">
	<input type='checkbox' id='aguinaldoConcAct' name='aguinaldoConcAct' value="1" {if $aguinaldoConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Aguinaldo</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='basicaConcAct' name='basicaConcAct' value="1" {if $basicaConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Básica</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='bonif_personalConcAct' name='bonif_personalConcAct' value="1" {if $bonif_personalConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Bonif personal</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ael25671ConcAct' name='ael25671ConcAct' value="1" {if $ael25671ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ael25671</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='aeds081ConcAct' name='aeds081ConcAct' value="1" {if $aeds081ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Aeds081</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='tphConcAct' name='tphConcAct' value="1" {if $tphConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Tph</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='bonif_familiarConcAct' name='bonif_familiarConcAct' value="1" {if $bonif_familiarConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Bonif familiar</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='du080_04ConcAct' name='du080_04ConcAct' value="1" {if $du080_04ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Du080 04</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='refrig_y_moviConcAct' name='refrig_y_moviConcAct' value="1" {if $refrig_y_moviConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Refrig y movi </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='du90_96ConcAct' name='du90_96ConcAct' value="1" {if $du90_96ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Du90 96</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds19_94_pcmConcAct' name='ds19_94_pcmConcAct' value="1" {if $ds19_94_pcmConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds19 94 pcm</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds21_92_pcmConcAct' name='ds21_92_pcmConcAct' value="1" {if $ds21_92_pcmConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds21 92 pcm</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='bon_especialConcAct' name='bon_especialConcAct' value="1" {if $bon_especialConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Bon especial</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='reunificadaConcAct' name='reunificadaConcAct' value="1" {if $reunificadaConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Reunificada</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='igvConcAct' name='igvConcAct' value="1" {if $igvConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Igv</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='cargsimulConcAct' name='cargsimulConcAct' value="1" {if $cargsimulConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Cargsimul</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='art18_dl_20530ConcAct' name='art18_dl_20530ConcAct' value="1" {if $art18_dl_20530ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Art 18 dl 20530 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='du073_97ConcAct' name='du073_97ConcAct' value="1" {if $du073_97ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Du073 97 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='du011_99ConcAct' name='du011_99ConcAct' value="1" {if $du011_99ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Du011 99 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='du037_94ConcAct' name='du037_94ConcAct' value="1" {if $du037_94ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Du037 94 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds016ConcAct' name='ds016ConcAct' value="1" {if $ds016ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds016 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds017ConcAct' name='ds017ConcAct' value="1" {if $ds017ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds017 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds110_2006ConcAct' name='ds110_2006ConcAct' value="1" {if $ds110_2006ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds110 2006 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds039_2007ConcAct' name='ds039_2007ConcAct' value="1" {if $ds039_2007ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds039 2007 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds120_2008ConcAct' name='ds120_2008ConcAct' value="1" {if $ds120_2008ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds120 2008 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds014_2009ConcAct' name='ds014_2009ConcAct' value="1" {if $ds014_2009ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds014 2009 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds077_2010ConcAct' name='ds077_2010ConcAct' value="1" {if $ds077_2010ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds077 2010 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds031_2011ConcAct' name='ds031_2011ConcAct' value="1" {if $ds031_2011ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds031 2011 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds024_2012ConcAct' name='ds024_2012ConcAct' value="1" {if $ds024_2012ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds024 2012 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds004_2013ConcAct' name='ds004_2013ConcAct' value="1" {if $ds004_2013ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds004 2013 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds003_2014ConcAct' name='ds003_2014ConcAct' value="1" {if $ds003_2014ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds003 2014 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds002_2015ConcAct' name='ds002_2015ConcAct' value="1" {if $ds002_2015ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds002 2015 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds005_2016ConcAct' name='ds005_2016ConcAct' value="1" {if $ds005_2016ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds005 2016 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds020_2017ConcAct' name='ds020_2017ConcAct' value="1" {if $ds020_2017ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds020 2017 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds011_2018ConcAct' name='ds011_2018ConcAct' value="1" {if $ds011_2018ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds011 2018 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds009_2019ConcAct' name='ds009_2019ConcAct' value="1" {if $ds009_2019ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds009 2019 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ds006_2020ConcAct' name='ds006_2020ConcAct' value="1" {if $ds006_2020ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ds006 2020 </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='ipssConcAct' name='ipssConcAct' value="1" {if $ipssConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Ipss </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='cafaeConcAct' name='cafaeConcAct' value="1" {if $cafaeConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Cafae </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='prderrmaConcAct' name='prderrmaConcAct' value="1" {if $prderrmaConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">Prderrma </label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='p_del20530ConcAct' name='p_del20530ConcAct' value="1" {if $p_del20530ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">P del20530</label>
</div>
<div class="form-check col-lg-2">
	<input type='checkbox' id='decreto_supermo_20_21ConcAct' name='decreto_supermo_20_21ConcAct' value="1" {if $decreto_supermo_20_21ConcAct eq '1'}checked{/if} class='form-check-input' />
	<label class="form-check-label">DS2021</label>
</div>
<!-- ********************************** -->
			</div>
		</div>
		</fieldset>
		<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idConcAct' name='idConcAct' value='{$idConcAct}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>
	</form>
</div>