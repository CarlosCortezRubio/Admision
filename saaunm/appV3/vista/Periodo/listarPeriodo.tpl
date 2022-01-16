{literal}
<!-- <script type='text/javascript' src='{$PATH_JS_XAJAX}Periodo.js'></script>-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="{/literal}{$PATH_JS}{literal}datatables/jquery.dataTables.min.js"></script>
<script src="{/literal}{$PATH_JS}{literal}datatables/jquery.dataTables.js"></script>
<script>
function buscarRegistro(){
    //alert("op = "+op)
    jQuery(".upload-msg").text("Buscando...");
    jQuery("#registrar").css("display", "none");
    var data = new FormData();
    
    jQuery.ajax({
        url: dominioJS+"base/Periodo/datosTabla",        // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,        // To send DOMDocument or non processed data file it is set to false
        success: function(data)   // A function to be called if request succeeds
        {
            if(data!=""){
                mensaje = '<div class="" role="alert">'+''+data+'</div>';
            }else{
                mensaje = '<div class="alert alert-danger alert-dismissible" role="alert">'+
                "<p>El valor <strong>"+valor+
                "</strong> no se encuentra registrado, por favor verifique la información suministrada</p>"+
                "</div>";
            }
            jQuery(".upload-msg").html(mensaje);
            jQuery("#tabla_contenido").DataTable({
                "order": [[ 1, "asc" ]],
                "paging": true,
                "dom": "<f>B<t>lp",
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"},
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "info": false
            });
        }
    });
}
</script>
{/literal}
<div class="pagina">
	<form name="form" id="form" method="post" action="{$valorForm}">
		<div class="line-title">
			<h4>Listar Periodo</h4>
		</div>
		<a id="ancla" href="#"></a>
		<input type="hidden" id="opcion" name="opcion"  value="" readonly>
		<div id="errores">
			{if $error != ""}<div id="msg-error" class="msg-red">{$error}</div>{/if}
			{if $exito != ""}<div id="msg-exito" class="msg-green">{$exito}</div>{/if}
			{if $info  != ""}<div id="msg-info" class="msg-blue">{$info}</div>{/if}
		</div>
		<fieldset>
<!-- 		<p class="p-black">Los campos marcados con <span class="label-red">*</span> son obligatorios</p> -->
<!-- **************************************************************************		 -->
				<div class="form-group col-lg-12">
					<!-- Tab panes -->
					<div class="">
					  	{literal}
					  	<script>buscarRegistro();</script>
					  	{/literal}
				  	</div>
                    <div id="divRes" name="divRes" class="form-group col-md-12">
                    	<div class="upload-msg"></div>
                    </div>
			  	</div>
<!-- **************************************************************************		 -->
		</fieldset>
	<br />
		<input type="hidden" id="opt" name="opt" value="{$opt}" readonly/>
		<input type="hidden" id="idPlanCrd" name="idPlanCrd" value="{$idPlanCrd}" readonly/>
		<input id="ids" name="ids" type="hidden" value="" readonly/>
	</form>
</div>
		</fieldset>
	<br />
		<input type='hidden' id='opt' name='opt' value='{$opt}' readonly/>
		<input type='hidden' id='Periodoid' name='Periodoid' value='{$Periodoid}' readonly/>
		<input id='ids' name='ids' type='hidden' value='' readonly/>

</div>
