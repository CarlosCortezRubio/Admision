<div class="card card-primary card-outline elevation-2">
   <div class="card-header">
      <strong>Trabajos</strong>
   </div>
   <div class="card-body">
      <button type="button" class="btn btn-primary" id="btnItemJobAdd" style="position:absolute; top:1.75rem; right:1.25rem;">
         <i class="fas fa-plus"></i><span class="d-none d-lg-inline-block pl-2">Agregar trabajo</span>
      </button>
      <div class="table-responsive mt-2">
         <table class="table table-sm table-bordered table-hover" id="table-jobs">
            <thead>
               <tr class="bg-light">
                  <th>Obra o trabajo</th>
                  <th>Instrumentación</th>
                  <th>Comentarios</th>
                  <th>Opciones</th>
               </tr>
            </thead>
            <tbody>
               @foreach($trabajos as $index => $trabajo)
                  <tr data-codi_trab_tra="{{ $trabajo->codi_trab_tra }}"
                      data-obra_trab_tra="{{ $trabajo->obra_trab_tra }}"
                      data-inst_trab_tra="{{ $trabajo->inst_trab_tra }}"
                      data-comn_trab_tra="{{ $trabajo->comn_trab_tra }}">
                     <td>{{ $trabajo->obra_trab_tra }}</td>
                     <td>{{ $trabajo->inst_trab_tra }}</td>
                     <td>{{ $trabajo->comn_trab_tra }}</td>
                     <td style="width:20%;">
                        <button type="button" class="btn btn-info btn-sm btnItemJobEdit">
                           <i class="far fa-edit"></i><span class="d-none d-lg-inline-block pl-2">Editar</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btnRemoveItem">
                           <i class="far fa-trash-alt"></i><span class="d-none d-lg-inline-block pl-2">Quitar</span>
                        </button>
                     </td>
                  </tr>

                  <div class="div-jobs">
                     <input type="hidden" name="obra_trab_tra[]" value="{{ $trabajo->obra_trab_tra }}">
                     <input type="hidden" name="inst_trab_tra[]" value="{{ $trabajo->inst_trab_tra }}">
                     <input type="hidden" name="comn_trab_tra[]" value="{{ $trabajo->comn_trab_tra }}">
                  </div>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-jobs">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-primary">
            <strong><i class="fas fa-plus pr-2"></i>Agregar Trabajos</strong>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body pb-0">
            <input type="hidden" id="codi_trab_tra">
            <div class="form-group row">
               <label for="obra_trab_tra" class="text-md-right col-md-4">Obra o trabajo:</label>
               <div class="col-md-8">
                  <input type="text" id="obra_trab_tra" class="form-control" maxlength="100" autocomplete="nope">
               </div>
            </div>
            <div class="form-group row">
               <label for="inst_trab_tra" class="text-md-right col-md-4">
                  Instrumentaci&oacute;n:<br><small>(solo para composici&oacute;n)</small>
               </label>
               <div class="col-md-8">
                  <input type="text" id="inst_trab_tra" class="form-control" maxlength="100" autocomplete="nope">
               </div>
            </div>
            <div class="form-group row">
               <label for="comn_trab_tra" class="text-md-right col-md-4">
                  Comentarios:<br><small>(opcional)</small>
               </label>
               <div class="col-md-8">
                  <input type="text" id="comn_trab_tra" class="form-control" maxlength="100" autocomplete="nope">
               </div>
            </div>
         </div>
         <div class="modal-footer p-3">
            <button type="button" class="btn btn-primary" id="btnItemJobOK">
               <i class="fas fa-save pr-2"></i>Aceptar
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
               <i class="fas fa-undo-alt pr-2"></i>Cancelar
            </button>
         </div>
      </div>
   </div>
</div>