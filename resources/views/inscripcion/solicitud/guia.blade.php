
<div class="card card-primary card-outline elevation-2">
   <div class="card-header">
      {{-- <strong>Gu&iacute;a e instructivo</strong> --}}
      <strong>Instructivos</strong>
   </div>
   <div class="card-body">
      {{-- <p>Seg&uacute;n la secci&oacute;n a la que deseas postular, podr&aacute;s visualizar a continuaci&oacute;n una gu&iacute;a que te ayudar&aacute; a conocer c&oacute;mo realizar el pago e inscripci&oacute;n al proceso de admisi&oacute;n:</p> --}}
      <p>Seg&uacute;n la secci&oacute;n a la que deseas postular, podr&aacute;s descargar a continuaci&oacute;n un instructivo que te ayudar&aacute; a conocer c&oacute;mo realizar el pago e inscripci&oacute;n al proceso de admisi&oacute;n:</p>
      <div class="form-group">
         {{-- <select id="guiaSeccion" class="custom-select"> --}}
            @foreach ($secciones as $sec)
               {{-- <option value="{{ $sec->codi_secc_sec }}">{{ $sec->desc_secc_sec }}</option> --}}
               @if ($sec->codi_secc_sec == '05003')
                  <br>
                  <a href="{{ config('app.url_guia.escolar.pdf') }}" target="_blank">
                     <i class="fas fa-download pr-2"></i>{{ $sec->desc_secc_sec }}
                  </a>

               @elseif ($sec->codi_secc_sec == '05002')
                  <br><br>
                  <a href="{{ config('app.url_guia.post_escolar.pdf') }}" target="_blank">
                     <i class="fas fa-download pr-2"></i>{{ $sec->desc_secc_sec }}
                  </a>

               @elseif ($sec->codi_secc_sec == '05001')
                  <br><br>
                  <a href="{{ config('app.url_guia.superior.pdf') }}" target="_blank">
                     <i class="fas fa-download pr-2"></i>{{ $sec->desc_secc_sec }}
                  </a>
               @endif
            @endforeach
         {{-- </select> --}}
      </div>

      {{-- <div class="embed-responsive embed-responsive-16by9">
         <iframe id="guiaVideo" class="embed-responsive-item" src="{{ config('app.url_guia.superior.video') }}" allowfullscreen></iframe>
      </div>
      <hr>
      <a href="{{ config('app.url_guia.superior.pdf') }}" id="guiaPDF">
         <i class="far fa-file-pdf pr-2"></i>Descargar instructivo en formato PDF
      </a> --}}

   </div>
</div>