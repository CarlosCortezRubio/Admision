<div class="card card-primary card-outline elevation-2">
   <div class="card-header">
      <strong>Repertorio</strong>
   </div>
   <div class="card-body">
      <button type="button" class="btn btn-primary" id="btnItemRepertoryAdd" style="position:absolute; top:1.75rem; right:1.25rem;">
         <i class="fas fa-plus"></i><span class="d-none d-lg-inline-block pl-2">Agregar repertorio</span>
      </button>
      <div class="table-responsive mt-2">
         <table class="table table-sm table-bordered table-hover" id="table-repertory">
            <thead>
               <tr class="bg-light">
                  <th>Compositor</th>
                  <th>Obra</th>
                  <th>Duración</th>
                  <th>Opciones</th>
               </tr>
            </thead>
            <tbody>
               @foreach($repertorio as $index => $rep)
                  <tr data-codi_repe_rep="{{ $rep->codi_repe_rep }}"
                      data-auto_repe_rep="{{ $rep->auto_repe_rep }}"
                      data-obra_repe_rep="{{ $rep->obra_repe_rep }}"
                      data-dura_repe_rep="{{ $rep->dura_repe_rep }}">
                     <td>{{ $rep->auto_repe_rep }}</td>
                     <td>{{ $rep->obra_repe_rep }}</td>
                     <td style="width:15%;">{{ $rep->dura_repe_rep.' min.' }}</td>
                     <td style="width:20%;">
                        <button type="button" class="btn btn-info btn-sm btnItemRepertoryEdit">
                           <i class="far fa-edit"></i><span class="d-none d-lg-inline-block pl-2">Editar</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btnRemoveItem">
                           <i class="far fa-trash-alt"></i><span class="d-none d-lg-inline-block pl-2">Quitar</span>
                        </button>
                     </td>
                  </tr>

                  <div class="div-repertory">
                     <input type="hidden" name="auto_repe_rep[]" value="{{ $rep->auto_repe_rep }}">
                     <input type="hidden" name="obra_repe_rep[]" value="{{ $rep->obra_repe_rep }}">
                     <input type="hidden" name="dura_repe_rep[]" value="{{ $rep->dura_repe_rep }}">
                  </div>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-repertory">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-primary">
            <strong><i class="fas fa-plus pr-2"></i>Agregar Repertorio</strong>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body pb-0">
            <input type="hidden" id="codi_repe_rep">
            <div class="form-group row">
               <label for="auto_repe_rep" class="text-md-right col-md-3">Compositor:</label>
               <div class="col-md-9">
                  <input onkeypress="return event.charCode != 34" type="text" id="auto_repe_rep" class="form-control" maxlength="100" autocomplete="nope">
               </div>
            </div>
            <div class="form-group row">
               <label for="obra_repe_rep" class="text-md-right col-md-3">Obra:</label>
               <div class="col-md-9">
                  <input onkeypress="return event.charCode != 34" type="text" id="obra_repe_rep" class="form-control" maxlength="100" autocomplete="nope">
               </div>
            </div>
            <div class="form-group row">
               <label for="dura_repe_rep" class="text-md-right col-md-3">Duraci&oacute;n:</label>
               <div class="col-md-5">
                  <div class="input-group">
                     <input onkeypress="return event.charCode != 34" type="text" id="dura_repe_rep" class="form-control text-right" maxlength="2" autocomplete="nope">
                     <div class="input-group-append">
                        <span class="input-group-text">minutos.</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer p-3">
            <button type="button" class="btn btn-primary" id="btnItemRepertoryOK">
               <i class="fas fa-save pr-2"></i>Aceptar
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
               <i class="fas fa-undo-alt pr-2"></i>Cancelar
            </button>
         </div>
      </div>
   </div>
</div>