<?php $color = 'primary' ?>

<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-confirm">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-{{ $color }}">
            <h4 class="modal-title">Confirmar envío</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body modal-icon">
            <p>&#191;Est&aacute;s seguro que deseas enviar la ficha&#63;</p>
            <p>Despu&eacute;s del env&iacute;o, no podr&aacute;s realizar ninguna modificaci&oacute;n.</p>
            <i class="far fa-question-circle text-{{ $color }}"></i>
         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-{{ $color }}" style="width:100px;" name="submit" id="btnConfirm" value="E">S&iacute;</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;">No</button>
         </div>
      </div>
   </div>
</div>