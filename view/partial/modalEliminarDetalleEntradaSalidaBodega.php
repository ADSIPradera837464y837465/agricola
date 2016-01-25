<?php use FStudio\fsController as controller ?>

<div class="modal fade" id="myModal<?php echo $detalleEntradaSalidaBodega->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmacion</h4>
      </div>
      <div class="modal-body">
        ¡Esta a punto de eliminar el usuario seleccionado!
        <br>
        ¿ continuar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a href="javascript:eliminar(<?php echo $detalleEntradaSalidaBodega->id ?>,'<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/eliminar')" class="btn btn-danger">Eliminar ahora</a>
      </div>
    </div>
  </div>
</div>
