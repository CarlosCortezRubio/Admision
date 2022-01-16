<?php /* Smarty version 2.6.30, created on 2021-06-22 06:33:18
         compiled from template.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $this->_tpl_vars['CHARSET']; ?>
" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $this->_tpl_vars['NOM_PROYECTO']; ?>
</title>
	<link type="text/css" href="<?php echo $this->_tpl_vars['PATH_CSS']; ?>
styleV2.css" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
css/estilopag.css" rel="stylesheet">

	<link type="text/css" href="<?php echo $this->_tpl_vars['PUB_URL']; ?>
bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">    
	
<!--<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
<!--<script src="js/bootstrap-datetimepicker.min.js"></script>	-->
    <!-- Librerias propias del sistema -->

<!--    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
css/cssSist.css" type="text/css" media="screen" charset="<?php echo $this->_tpl_vars['CHARSET']; ?>
">-->
	<!--<link rel="stylesheet" href="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
css/nuevo.css" type="text/css" media="screen" charset="<?php echo $this->_tpl_vars['CHARSET']; ?>
">   --> 
</head>
<body style="background-color: #e7f1f9;">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecera.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="contenedor" class="marco-centro">
		<div id="barraMenuOpciones" class="menuOpciones">
			<?php if ($this->_tpl_vars['desactivarOpciones'] != true): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../../../app/comun/botoneraH.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
			<?php endif; ?>		
		</div>	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pagina']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<footer class="text-center text-white fixed-bottom">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pie.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</footer>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../app/comun/tplModal.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
active.js"></script>
	<!--Inicio Librerias js-->	
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['PATH_JS_SIST']; ?>
funciones.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['PATH_JS']; ?>
xajax05/xajax_js/xajax_core_uncompressed.js"></script>	
	<script type='text/javascript' src="<?php echo $this->_tpl_vars['PATH_JS']; ?>
validar.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['PATH_JS']; ?>
sha1.js"></script>
<!--Fin Librerias js-->

<!--     Bootstrap Calendar-->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['PUB_URL']; ?>
bootstrap4-datetimepicker/build/js/Moment.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['PUB_URL']; ?>
bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>