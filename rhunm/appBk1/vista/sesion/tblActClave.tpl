<div class='pagina'>
<!--	<form name='form' id='form' method='post' action='{$valorForm}'>-->
		<fieldset>
			 <div class="container-fluid">
			    <div class="container" style="display:none;" id="alertActualizarClave"></div>
				<div class="row">
					<div class="col-sm-4 label-black"><span class='glyphicon glyphicon-asterisk label-red'></span><label class="control-label" for="cuentaUsuario">Clave:</label></div>
					<div class="col-sm-8 label-elemento">						
						<input onBlur='this.value = CryptoJS.SHA1(this.value)' type="password" class="form-control input-sm" id="Act_Password" name="Act_Password" placeholder="Ingrese su clave" value="">					
					</div>
					<div class="col-sm-4 label-black"><span class='glyphicon glyphicon-asterisk label-red'></span><label class="control-label" for="cuentaUsuario">Confirmación:</label></div>
					<div class="col-sm-8 label-elemento">
						<input onBlur='this.value = CryptoJS.SHA1(this.value)' type=password class="form-control input-sm" id="Re_Act_Password" name="Re_Act_Password" placeholder="Confirme su clave" value="">				
					</div>
					<div class="col-sm-12">
						<br>
						<button type="button" class="btn btn-primary" onclick="xajax_modificarPassword(xajax.$('Act_Password').value,xajax.$('Re_Act_Password').value,xajax.$('idUsuario').value)">Actualizar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>			
			</div>		
		</fieldset>
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/> 
		<input type='hidden' id='opcion' name='opcion' value='' readonly>
<!--	</form>-->
</div>