@extends('layouts.app')

@section('content')
	<!-- Modal que redirecciona hacia otro lugar -->
	@if(session()->has('xpopup'))
		<div id="msgView" class="modal fade bd-example-modal-md" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md">
			  <div class="modal-content">
				<div class="modal-header">
				  <h3 class="modal-title" id="exampleModalLabel">Mensaje</h3>
				</div>
				<div class="modal-body fs-18">
				  Estimado postulante, le recordamos ver el siguiente instructivo <a href="https://bit.ly/3p4iQX6" target="_blank" rel="noopener noreferrer">https://bit.ly/3p4iQX6</a> 
				  para poder completar los datos del formulario de inscripción de video <a href="http://bit.ly/3sH1vFK" target="_blank" rel="noopener noreferrer">http://bit.ly/3sH1vFK</a> </br> <b>(Recuerde que a este último link solo podrá ingresar con su correo de la UNM)</b>
					</br>
					Para los que postulan a la especialidad de Musicología y Composición deben ingresar a este link <a href="http://bit.ly/39oiLYR" target="_blank" rel="noopener noreferrer">http://bit.ly/39oiLYR</a> para poder completar los datos del formulario. 
					</br>
					</br>
				  Cualquier duda o consulta escríbanos a <a href="mailto:soporteadmision@unm.edu.pe">soporteadmision@unm.edu.pe</a>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			  </div>
			</div>
		 </div>
	@endif
   @if (session()->has('message'))
      @include('inscripcion.solicitud.mensaje')
         
   @else
      @if (isset($ficha))

         @if ($ficha->esta_post_pos == 'R')
           {{-- @include('inscripcion.ficha.edit',['new'=>false]) --}}

         @else
            @if ($ficha->esta_post_pos == 'V')
               @include('inscripcion.ficha.horario')
            @else
               <div class="container d-flex justify-content-center align-items-center" style="height:200px;">
                  <div class="card card-primary card-outline text-center mx-auto elevation-2">
                     <div class="card-body">
                        <h5>
                           @if (session()->has('success'))
                              Tu ficha de incripci&oacute;n ha sido enviada con éxito. Puedes visualizarla desde el siguiente enlace:
                           @else
                              Tu ficha de incripci&oacute;n ya ha sido enviada. Puedes visualizarla desde el siguiente enlace:
                           @endif
                           <br><br>
                           <form action="{{ route('fichaPDF') }}" method="POST" target="_blank">
                              @csrf
                              <input type="hidden" name="codi_post_pos" value="{{ $ficha->codi_post_pos }}">
                              <div class="form-group">
                                 <button class="btn btn-primary" type="submit">
                                    <i class="far fa-address-book pr-2"></i>Visualizar ficha de inscripci&oacute;n
                                 </button>
                              </div>
                           </form>
                        </h5>
                     </div>
                  </div>
               </div>
            @endif
         @endif
      @else
         @include('inscripcion.ficha.edit', ['new'=>true])
      @endif
   @endif   
@endsection