<div class="encabezado">
	<div class='container'>
		<div class="row">			
			<div class="col-md-2 col-xs-2">
				<img src="{$PUB_URLSIST}img/home/{$LOGO_PROYECTO}" class="imgLogo">
			</div>
			<div class="col-md-8 col-xs-2 nomCondominio">
				{$NOM_PROYECTO}
			</div>
			<div class="col-md-2 col-xs-12">
				<div class="divInfoUsuario">{if $NOMBRE_USUARIO != ''}{$NOMBRE_USUARIO}{/if}<br>{$FECHA_SISTEMA}</div>
			</div>
		</div>
	</div>
</div>
<!--
<div class="encabezado">
	<div class="col-md-2 encabezado-left">
		<img src="{$PUB_URLSIST}img/home/logo.jpeg" width="100px;">
	</div>
	<div class="col-md-8 encabezado-center">
		centro
	</div>
	<div class="col-md-2 encabezado-right">
		<div class="divInfoUsuario">{if $NOMBRE_USUARIO != ''}{$NOMBRE_USUARIO}{/if}<br>{$FECHA_SISTEMA}</div>
		{$LINE1_ENCABEZADO} {$LINE2_ENCABEZADO} {$LINE3_ENCABEZADO}
	</div>
</div>
-->