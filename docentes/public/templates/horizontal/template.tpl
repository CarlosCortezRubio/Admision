<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html;charset={$CHARSET}" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>{$NOM_PROYECTO}</title>
	<link type="text/css" href="{$PATH_CSS}styleV2.css" rel="stylesheet">
	<link type="text/css" href="{$PUB_URLSIST}css/estilopag.css" rel="stylesheet">

	<link type="text/css" href="{$PUB_URL}bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">    
	
<!--<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
<!--<script src="js/bootstrap-datetimepicker.min.js"></script>	-->
    <!-- Librerias propias del sistema -->

<!--    <link rel="stylesheet" href="{$PUB_URLSIST}css/cssSist.css" type="text/css" media="screen" charset="{$CHARSET}">-->
	<!--<link rel="stylesheet" href="{$PUB_URLSIST}css/nuevo.css" type="text/css" media="screen" charset="{$CHARSET}">   --> 
</head>
<body style="background-color: #e7f1f9;">
	{include file="cabecera.tpl"}
	<div id="contenedor" class="marco-centro">
		<div id="barraMenuOpciones" class="menuOpciones">
			{if $desactivarOpciones != true}
				{include file='../../../app/comun/botoneraH.tpl'}	
			{/if}		
		</div>	
		{include file="$pagina"}
	</div>
	<footer class="text-center text-white fixed-bottom">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			{include file="pie.tpl"}
		</div>
	</footer>	
	{include file="../../../app/comun/tplModal.tpl"}

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{$PATH_JS_SIST}jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{$PATH_JS_SIST}popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{$PATH_JS_SIST}bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="{$PATH_JS_SIST}plugins.js"></script>
    <!-- Active js -->
    <script src="{$PATH_JS_SIST}active.js"></script>
	<!--Inicio Librerias js-->	
	<script type="text/javascript" src="{$PATH_JS_SIST}funciones.js"></script>
	<script type="text/javascript" src="{$PATH_JS}xajax05/xajax_js/xajax_core_uncompressed.js"></script>	
	<script type='text/javascript' src="{$PATH_JS}validar.js"></script>
    <script type="text/javascript" src="{$PATH_JS}sha1.js"></script>
<!--Fin Librerias js-->

<!--     Bootstrap Calendar-->
    <script type="text/javascript" src="{$PUB_URL}bootstrap4-datetimepicker/build/js/Moment.js"></script>
    <script type="text/javascript" src="{$PUB_URL}bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>