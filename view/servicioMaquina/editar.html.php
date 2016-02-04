<?php

use FStudio\fsController as controller; ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<h1>Modificar Informacion</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsconfig->getUrl() ?>index.php/servicioMaquina/actualizar" method="post">
    <input type="hidden" name="servicioMaquina[serId]" value="<?php echo $objServicioMaquina[0]->id ?>">
    <div class="form-group" class="modificar">
      <label for="serId">Id </label>
      <input value="<?php echo $objServicioMaquina[0]->id ?>" type="text" class="form-control" id="serId" name="servicioMaquina[serId]" placeholder="id">
    </div>
    <div class="form-group" class="modificar">
      <label for="serDescripcion">servicio de descripcion</label>
      <input value="<?php echo $objServicioMaquina[0]->servicio_descripcion ?>" type="text" class="form-control" id="serDescripcion" name="servicioMaquina[serDescripcion]" placeholder="descripcion">
    </div>
    <div class="form-group" class="modificar">
      <label for="serEstado">servicio de estado </label>
      <input value="<?php echo $objServicioMaquina[0]->servicio_estado ?>" type="text" class="form-control" id="serEstado" name="ServicioMaquina[serEstado]" placeholder="estado">
    </div>
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">Actualizar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>
