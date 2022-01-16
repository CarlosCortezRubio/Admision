<div class='pagina'>
<div class="btn-group" role="group" aria-label="...">
<div style="margin-top: 5px;" id='cancelar' onclick="cerrarvntPequena();" type="button" class="btn btn-default glyphicon glyphicon-circle-arrow-left btn-verde"></div>
<div class='line-title-con'>
		
	</div>
</div>
	<form name='form' id='form' method='post' action='{$valorForm}'>
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
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
<div class="form-group col-lg-4">
	<label class="control-label">Aguinaldo ConcAct</label>
	<div class="">
		{$aguinaldoConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Basica ConcAct</label>
	<div class="">
		{$basicaConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif_personal ConcAct</label>
	<div class="">
		{$bonif_personalConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ael25671 ConcAct</label>
	<div class="">
		{$ael25671ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Aeds081 ConcAct</label>
	<div class="">
		{$aeds081ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Tph ConcAct</label>
	<div class="">
		{$tphConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bonif_familiar ConcAct</label>
	<div class="">
		{$bonif_familiarConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du080_04 ConcAct</label>
	<div class="">
		{$du080_04ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Refrig_y_movi ConcAct</label>
	<div class="">
		{$refrig_y_moviConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du90_96 ConcAct</label>
	<div class="">
		{$du90_96ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds19_94_pcm ConcAct</label>
	<div class="">
		{$ds19_94_pcmConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds21_92_pcm ConcAct</label>
	<div class="">
		{$ds21_92_pcmConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Bon_especial ConcAct</label>
	<div class="">
		{$bon_especialConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Reunificada ConcAct</label>
	<div class="">
		{$reunificadaConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Igv ConcAct</label>
	<div class="">
		{$igvConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cargsimul ConcAct</label>
	<div class="">
		{$cargsimulConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Art18_dl_20530 ConcAct</label>
	<div class="">
		{$art18_dl_20530ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du073_97 ConcAct</label>
	<div class="">
		{$du073_97ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du011_99 ConcAct</label>
	<div class="">
		{$du011_99ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Du037_94 ConcAct</label>
	<div class="">
		{$du037_94ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds016 ConcAct</label>
	<div class="">
		{$ds016ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds017 ConcAct</label>
	<div class="">
		{$ds017ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds110_2006 ConcAct</label>
	<div class="">
		{$ds110_2006ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds039_2007 ConcAct</label>
	<div class="">
		{$ds039_2007ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds120_2008 ConcAct</label>
	<div class="">
		{$ds120_2008ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds014_2009 ConcAct</label>
	<div class="">
		{$ds014_2009ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds077_2010 ConcAct</label>
	<div class="">
		{$ds077_2010ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds031_2011 ConcAct</label>
	<div class="">
		{$ds031_2011ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds024_2012 ConcAct</label>
	<div class="">
		{$ds024_2012ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds004_2013 ConcAct</label>
	<div class="">
		{$ds004_2013ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds003_2014 ConcAct</label>
	<div class="">
		{$ds003_2014ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds002_2015 ConcAct</label>
	<div class="">
		{$ds002_2015ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds005_2016 ConcAct</label>
	<div class="">
		{$ds005_2016ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds020_2017 ConcAct</label>
	<div class="">
		{$ds020_2017ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds011_2018 ConcAct</label>
	<div class="">
		{$ds011_2018ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds009_2019 ConcAct</label>
	<div class="">
		{$ds009_2019ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ds006_2020 ConcAct</label>
	<div class="">
		{$ds006_2020ConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Ipss ConcAct</label>
	<div class="">
		{$ipssConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Cafae ConcAct</label>
	<div class="">
		{$cafaeConcAct}	</div>
</div>
<div class="form-group col-lg-4">
	<label class="control-label">Prderrma ConcAct</label>
	<div class="">
		{$prderrmaConcAct}	</div>
</div>
		</div>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='idConcAct' name='idConcAct' value='{$idConcAct}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

	</form>
</div>
