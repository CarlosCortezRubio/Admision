
<header class="header-area">
	<!-- Top Header Area -->
	<div class="top-header text-center" style="font-size:30px; font-family: 'helveticaneuemedium'; font-weight: 900;">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<!-- Breaking News Area -->
				<div class="col-12">
					<div class="breaking-news-area">
						<div class="title-center">{$NOM_PROYECTO}</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Logo Area -->
	<div class="logo-area text-center" style="background: #071427 url(http://cdn.middlebury.edu/middlebury.edu/2010/images/bluegradient.jpg) no-repeat center top;">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12" >
					<a class="original-logo"><img src="{$PUB_URLSIST}img/home/{$LOGO_PROYECTO}"  height="50" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Nav Area -->
	<div class="original-nav-area" id="stickyNav">
		<div class="classy-nav-container breakpoint-off">
			<div class="container">
				<!-- Classy Menu -->
				<nav class="classy-navbar justify-content-between">
					<!-- Navbar Toggler -->
					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>

					<!-- Menu -->
					<div class="classy-menu" id="originalNav">
						<!-- close btn -->
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>
						<!-- Nav Start -->
						<div class="classynav">
							<ul>
								{include file="../../../app/comun/menuadmin.tpl"}
							</ul>
						</div>
						<!-- Nav End -->
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--
<nav class="navbar navbar-expand-lg navbar-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    	<ul >
			<li><div class="title-center">{$NOM_PROYECTO}</div></li>
			<li><a class="navbar-brand" href=""><img src="{$PUB_URLSIST}img/home/{$LOGO_PROYECTO}" height="50" alt="" loading="lazy" style="margin-top: -1px;" /></a></li>
		</ul>
	</div>
	
</nav>-->
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