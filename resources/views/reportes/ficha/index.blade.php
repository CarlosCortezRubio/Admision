<!DOCTYPE html>
<html lang="{{ app()->getLocale()}} ">
    <head>
        <meta charset="utf-8">
        <title>Conservatorio Nacional de Música - Admisión</title>
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#367FA9;">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="#">CONSERVATORIO NACIONAL DE MÚSICA</a>
                </li>
            </ul>
            <span class="navbar-text text-light">
                Proceso de Admisión 2022
            </span>
        </div>
    </nav>
    <main class="py-4">
        <div class="container">

						<div class="alert alert-success" role="alert">
								<h4 class="alert-heading">Proceso de Admisión 2022</h4>
								<hr class="message-inner-separator">
								<p>Usted ya ha enviado su inscripción, puede visualizarla en la siguiente opción:</p>
								<form action="{{ url('reportes/fichaPDF') }}" method="post" id="formPDF" target="_blank">
										<!-- Botón -->
                              @csrf
										<div class="form-group">
											<button class="btn btn-primary" type="button" id="btnPrint"><i class="fa fa-file fa-p"></i> Visualizar ficha de inscripción</button>
										</div>
								</form>
						</div>
				</div>
		</main>
<script>
$(function () {
		$('#btnPrint').click(function() {
				generatePDF();
		});

		function generatePDF() {
				$('#formPDF').submit();
		}
});
</script>
</body>
</html>
