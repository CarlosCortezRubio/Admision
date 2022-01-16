var dominioJS = "https://admision.unm.edu.pe/docentesv1/";
var dominioJS_LIB = "https://admision.unm.edu.pe/libComunP7/";

function ventanaAlerta(mensaje,nomTitulo){
	divDestino = "modalAlertas";
//	nomTitulo = "Alerta!";
	jQuery('#tituloAlerta').html(nomTitulo);
	jQuery('#contenidoAlerta').html(mensaje);
	jQuery('#modalAlertas').modal({show:true});
}

function showAlert(divDestino,nomTitulo,mensaje,tipoAlert){
//	mensaje = mensaje + tipoAlert;
	if(tipoAlert=='error'){
		tipoAlert='alert-danger';
	}else{
		tipoAlert='alert-success';
	}
	jQuery("#"+divDestino).html("");
//	mensaje = mensaje + tipoAlert;
	if(jQuery("#"+divDestino).find("div#myAlert2").length==0){
		jQuery("#"+divDestino).append("<div class='alert "+tipoAlert+" alert-dismissable' id='myAlert2'>"+ 
			"<button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button>"+
			mensaje+"</div>");
	}
//	jQuery("#contAlert").html(mensaje);
	jQuery("#"+divDestino).css("display", "");
}

function ventanaEmergente(divDestino,nomTitulo,mensaje){
	jQuery('#tituloAlerta').html(nomTitulo);
	jQuery('#contenidoAlerta').html(mensaje);
	jQuery('#modalAlertas').modal({show:true});
}
function vntConsultar(ruta,titulo){
//	alert(ruta+'-'+titulo);
	jQuery('.modal-body').load(dominioJS+'base/'+ruta,function(){
        jQuery('#tituloModalC').html(titulo);
        jQuery('#modalEmergentesC').modal({show:true});
    });	
}