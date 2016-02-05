<div class="modal fade" id="myModal<?php echo $tipoTercero->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar eliminacion</h4>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a href="javascript:eliminar(<?php echo $tipoTercero->id ?>,'<?php echo $fsConfig->getPath() ?>index.php/persona/eliminar')" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>