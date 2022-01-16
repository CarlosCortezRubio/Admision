<?php /* Smarty version 2.6.30, created on 2021-06-15 03:10:28
         compiled from C:%5Claragon%5Cwww%5Cdocentesv1/app/vista/sesion/sesion.tpl */ ?>
<script type='text/javascript' src='<?php echo $this->_tpl_vars['PATH_JS_XAJAX']; ?>
sesion.js'></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['PATH_JS']; ?>
combo.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="es">
<!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Condominio | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Condominio" name="description" />
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <body class="bodyLogin">
        <!-- BEGIN LOGO -->
        <div class="logo">
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" role="form" name="form" id="form" style="position: relative;top: 150px; left: auto;">
				<div class="container">
					<div class="d-flex justify-content-center h-100">
						<div class="card card-boder">
							<div class="card-header">
								<img  src="<?php echo $this->_tpl_vars['PUB_URLSIST']; ?>
img/home/logo.png">
							</div>
							<div class="card-body">
				                <div class="" role="alert">
				                    <input type="hidden" id="ancla" name="ancla">
					                <div id="errores">
					                    <?php if ($this->_tpl_vars['error'] != ''): ?>
					                        <div id='msg-error' class='msg-red'><?php echo $this->_tpl_vars['error']; ?>
</div>
					                    <?php endif; ?> <?php if ($this->_tpl_vars['exito'] != ''): ?>
					                        <div id='msg-exito' class='msg-green'><?php echo $this->_tpl_vars['exito']; ?>
</div>
					                    <?php endif; ?> <?php if ($this->_tpl_vars['info'] != ''): ?>
					                        <div id='msg-info' class='msg-blue'><?php echo $this->_tpl_vars['info']; ?>
</div>
					                    <?php endif; ?>
					                </div>
				                </div>
								<form>
									<div class="input-group form-group">
									<span>Iniciar Sesión</span>
									</div>
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text" style="background: #b0a6ec;"><i class="fas fa-user"></i></span>
										</div>
										<input name="login" id="login" type="text" class="form-control" placeholder="Usuario">
										
									</div>
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text" style="background: #b0a6ec;"><i class="fas fa-key"></i></span>
										</div>
										<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña">
									</div>
<!--									<div class="row align-items-center remember">-->
<!--										<input type="checkbox">Remember Me-->
<!--									</div>-->
									<div class="form-group">
										<input type="button" onclick="iniciarSesion();" value="Ingresar" class="btn btn-primary">
									</div>
								</form>
							</div>
							<div class="card-footer">
						        <!-- BEGIN COPYRIGHT -->
						        <div class="copyright">Universidad Nacional de Música © Copyright 2021.</div>
						        <!-- END COPYRIGHT -->
							</div>
						</div>
					</div>
				</div>
            </form>
            <!-- END LOGIN FORM -->
        

<!--     Bootstrap core JavaScript-->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['PUB_URL']; ?>
bootstrap441/js/bootstrap.min.js"></script>
	<link type="text/css" href="<?php echo $this->_tpl_vars['PUB_URL']; ?>
bootstrap441/css/bootstrap.min.css" rel="stylesheet">          
        <?php echo '
        <script>
            jQuery(\'#imgCorreo\').click(function(){
//                alert(\'Opción correo\');
            	if(jQuery(\'#divOpCorreo\').hasClass(\'visible\')){
            		jQuery(\'#divOpCorreo\').attr(\'class\', \'invisible\');
            	}else{
            		jQuery(\'#divOpCorreo\').attr(\'class\', \'visible\');
            	}
            });
        </script>
		'; ?>

</body>
</html>