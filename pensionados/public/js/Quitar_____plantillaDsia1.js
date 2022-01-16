var dominioJS = "http://localhost/condominio/";
var dominioJS_LIB = "http://localhost/libComunP7/";
//var dominioJS = "https://solinf.com.ve/nefrosoft/";
//var dominioJS_LIB = "https://solinf.com.ve/libDsiaV3/";

function configuracion(){
	new Jx.Layout('contenedor');
    new Jx.Layout('encabezado', {
        top: 0,
        bottom: 0,
        width: null,
        height: 60,
        right: 30,
        left: 10
    });   	
    new Jx.Layout('barras', {
        top: 100,
        bottom: 35,
        width: null,
        height: 35,
        right: 10,
        left: 10
    });
    new Jx.Layout('barra1', {
    	top:0,
    	height:30
    });
    new Jx.Layout('barra2', {
    	top:0,
    	bottom:0,
        width: 0,
        height: 0,
        right: 0,
        left: null
    });
    new Jx.Layout('barra3', {
    	top:135,
    	bottom:0,
    	width: 200,
    	height: 40,
    	right: null,
    	left: 10
    });
    new Jx.Layout('contenido', {
        top: 125,
        bottom: 10,
        width: null,
        height: null,
        right: 0,
        left: 0
    }); 
    new Jx.Layout('piePagina', {
        top:null,
        height: 20,
        width: null,
        right: 10,
        left: 10
    });
	var splitter1 = new Jx.Splitter('barras', {
		elements: ['barra1','barra2'],
		containerOptions: [{},{width: 400}]
	});
	$('contenedor').resize({forceResize: true});
	$('contenedor').style.visibility = 'visible';
};
function abrirEnlace(enlace,pagina,opcion){
//	alert("entre "+ enlace +' - '+pagina+' - '+ opcion);
	if(opcion==null){
		enlace1 = ucfirst(enlace);
		pag = 'listar'+enlace;
		window.location = 	dominioJS+'base/'+enlace;
	}else{
		// alert('else');
			// pag = enlace + '&pagina=' + opcion + '&opcion=ingresar';
		// pag = enlace + '&pagina=' + pagina + '&opcion=' + opcion;
			// alert('else' + '../principal/base.php?sec='+pag);
		// window.location = '../principal/base.php?sec='+pag;
		pag = enlace + '&pagina=' + pagina + '&opcion=' + opcion;
		pag = dominioJS+'base/'+enlace + '/' + pagina + '/' +opcion;
		// alert(pag)
		window.location = 	''+pag;		
		// pag = enlace + '&pagina=' + opcion;
		// alert('else' + '../principal/base.php?sec='+pag);
		// window.location = '../principal/base.php?sec='+pag;
		// window.location = '../principal/base.php?sec='+opcion;
	}
}
function salir(){
	window.location = dominioJS;
}
function ventanaLogin(){
//	boton = (boton) ? boton : false;
//	if(boton==false){boton='Cerrar';}
//	jQuery('#alertModal').modal({keyboard: false});
	jQuery('#myModal').modal({keyboard: false,backdrop: "static"});
//	jQuery('#alertModalContenido').html(msg);
//	jQuery('#alertModalBoton').html(boton);
}
function ventanaAlerta(msg,tituloPagina,boton){
	boton = (boton) ? boton : false;
	if(boton==false){boton='Cerrar';}
	jQuery('#alertModal').modal({keyboard: false,backdrop: "static"});
	jQuery('#alertModalContenido').html(msg);
	jQuery('#alertModalBoton').html(boton);
}
function ventanaAlertaConRedirect(msg,tituloPagina,boton,url){
	boton = (boton) ? boton : false;
	if(boton==false){boton='Cerrar';}
	jQuery('#alertModal').modal({keyboard: false,backdrop: "static"});
	jQuery('#alertModalContenido').html(msg);
	jQuery('#alertModalBoton').hide();
	var boton1 = '<button type="button" class="btn btn-default" id="alertModalBoton" onClick="window.location.href ='+"'"+url+"'"+'">'+boton+'</button>';
	jQuery('#contenedorBoton').append(boton1);
}
function ventanaConfirmacion(msg,tituloPagina,boton,url,boton2){
	document.getElementById('contenedorBoton').innerHTML = '';
	boton = (boton) ? boton : false;
	boton2 = (boton2) ? boton2 : false;
	if(boton2==false){boton2='Cancelar';}
	if(url==false || url==null ){url=dominioJS+'base/principal';}
	jQuery('#alertModal').modal({keyboard: false,backdrop: "static"});
	jQuery('#alertModalContenido').html(msg);
	jQuery('#alertModalBoton').hide();
	var boton1 = '<button type="button" class="btn btn-default" id="alertModalBoton" onClick="window.location.href ='+"'"+url+"'"+'">'+boton+'</button>';
	var boton2 = '<button type="button" class="btn btn-default" data-dismiss="modal">'+boton2+'</button>';
	jQuery('#contenedorBoton').append(boton1);
	jQuery('#contenedorBoton').append(boton2);
}
function OLDventanaAlerta(msg,tituloPagina){
	msg = "<br><center>" + "<br><p>"+ msg +"</p></center>"
	if(tituloPagina=="" || tituloPagina==null){
		tituloPagina = 'Alerta';
	}
	var toolbar = new Jx.Toolbar({position:'bottom'});
	ventana1 = new Jx.Dialog({
		label: tituloPagina, 
		image: dominioJS+'libDsiaV3/public/imgDsia/warning.gif',
		modal: true,
		horizontal: 'center center',
		vertical: 'center center',
		width: 400,
		height: 180,
		content: msg,
        toolbars: [toolbar],
        id: 'ventanaAlerta'
	})
	ventana1.show();	
    toolbar.add(
            new Jx.Button({
                label: 'Continuar', 
                onClick: function() {
            		ventana1.close();
                }
            })
        );
}
function ventanaInformacion(msg,tituloPagina){
	msg = "<br><center><h3>Información</h3></center>" + "<br><p>"+ msg +"</p>"
	if(tituloPagina=="" || tituloPagina==null){
		tituloPagina = 'Alerta';
	}
	var toolbar = new Jx.Toolbar({position:'bottom'});
	
	ventana1 = new Jx.Dialog({
		label: tituloPagina,
		image: dominioJS+'libDsiaV3/public/imgDsia/info.png',
		modal: true,
		horizontal: 'center center',
		vertical: 'center center',
		width: 400,
		height: 180,
		content: msg,
		toolbars: [toolbar]
	})
	ventana1.show();	
	toolbar.add(
			new Jx.Button({
				label: 'Continuar', 
				onClick: function() {
					ventana1.close();
				}
			})
	);	
}
function vntPequena(pagina,tituloPagina){
	var toolbar = new Jx.Toolbar({position:'bottom'});
	document.getElementById('idVentanaEmergente').innerHTML = '';
	ventana1 = new Jx.Dialog({
		parent:'idVentanaEmergente',
		label: tituloPagina,
		image: 'images/page_white_world.png',
		modal: true,
		horizontal: 'center center',
		vertical: 'center center',
		width: 650,
		height: 350,
// content: "Cargando.......",
		contentURL: pagina,
	})
	ventana1.show();
}
function vntConsultar(pagina,tituloPagina){
	//alert('pagina = '+pagina);
    var toolbar = new Jx.Toolbar({position:'bottom'});
    document.getElementById('idVentanaEmergente').innerHTML = '';
	ventana1 = new Jx.Dialog({
		parent:'idVentanaEmergente',
		label: tituloPagina,
		image: 'images/page_white_world.png',
		modal: true,
		horizontal: 'center center',
		vertical: 'center center',
		width: 650,
		height: 350,
// content: "Cargando.......",
		contentURL: pagina,
	})
	ventana1.show();
}
function vntImprimir(pagina,tituloPagina,band,funcion){	
	// if((band != NaN && funcion != NaN) || (band != 'undefined' && funcion !=
	// 'undefined' )){
//	if((band != undefined && funcion != undefined)){
	if((band != 'undefined' && funcion != 'undefined')){
		eval(funcion+"()");
	}else{
//		alert('vntImprimir= ' + pagina);
		num = Math.random();
//		window.open('../'+pagina+'?opt=idk='+num,'titulo Pagina','titlebar=yes, name=test, target=_blank, location=1,status=1,toolbar=1,menubar=1,scrollbars=yes');
//		window.open('../base/pais/imprimir?opt=&height=460&width=1050&idk='+num,'tituloPagina','target=_blank, location=1,status=1,toolbar=1,menubar=1,scrollbars=yes');
		window.open('../'+pagina+'?opt=&height=460&width=1050&idk='+num,'tituloPagina','target=_blank, location=1,status=1,toolbar=1,menubar=1,scrollbars=yes');
	}
}
function cerrarvntPequena(){
	document.getElementById('idVentanaEmergente').innerHTML = '';
	ventana1.close();
}
function asignarValorCombo(idCombo,valorAsignar){
	i = 0;
	lista = document.getElementById(idCombo);
	tam = lista.length;
    for (var i=1; i<tam; i++) {
    	valor = lista.options[i].value;
    	if(valor==valorAsignar){ 
    		break;
    	}
	}
    document.getElementById(idCombo).selectedIndex = i; 
} 
function ucfirst(str) {
	  str += '';
	  var f = str.charAt(0)
	    .toUpperCase();
	  return f + str.substr(1);
}
function cifrar(elemento){
	password = elemento.value;
	password = CryptoJS.SHA1(password);
	document.getElementById(elemento.id).value = password;
	alert(password)
}