<div class='pagina'>
		{include file="../../../app/comun/tplError.tpl"}
	<form name='form' id='form' method='post' action='{$valorForm}'>
		<h3>Bienvenido {$NOMBRE_USUARIO}</h3>
		<br>
 		<div class='container-fluid'>
 			<div class="row contenidoVer" style="width:100%">
				<div class="form-group col-md-3 divIconosCent">
					<a href="{$URLSIST}base/encuesta/reporte">
						<img src="{$PUB_URLSIST}img/home/misPagos.png" class="iconoDesktop"><br>
						<label class="control-label">Reportes</label>
					</a>
				</div>
				<div class="form-group col-md-3 divIconosCent">
					<a href="{$URLSIST}base/persona/misDatos">
						<img src="{$PUB_URLSIST}img/home/misDatos.png" class="iconoDesktop"><br>
						<label class="control-label">Mis Datos</label>
					</a>
				</div>
<!-- 				<div class="form-group col-md-3 divIconosCent" onclick="vntConsultar('principal/infoPago', 'Informaci�n para las Transferencias');"> -->
<!-- 						<img src="{$PUB_URLSIST}img/home/Banco.png" class="iconoDesktop"><br> -->
<!-- 						<label class="control-label">Informaci�n para las Transferencias</label> -->
<!-- 				</div> -->
<!-- 				<div class="form-group col-md-3 divIconosCent"> -->
<!-- 						<a href="{$PUB_URLSIST}pdf/DocVillasVeronica.pdf" download="Reglamento Interno"> -->
<!-- 							<img src="{$PUB_URLSIST}img/home/pdf.jpg" class="iconoDesktop" style="max-width:200px;"><br> -->
<!-- 							<label class="control-label">Reglamento Interno</label> -->
<!-- 						</a> -->
<!-- 				</div> -->
			</div>
		</div>	
	</form>
</div>