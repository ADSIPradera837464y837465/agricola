<div class="modal fade" id="myModal<?php echo $tercero->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <a href="javascript:eliminar(<?php echo $tercero->id ?>,'<?php echo $fsConfig->getUrl() ?>index.php/tercero/eliminar')" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>