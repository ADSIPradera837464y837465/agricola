<?php

use FStudio\fsController as controller; ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<br>
<div class="container container-fluid"> 
  <h2>servicio maquina</h2>
</div> 
<div class="list-group">
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Id</h4>
    <p class="list-group-item-text"><?php echo $objServicioMaquina[0]->id ?></p>
  </div>
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Nombre</h4>
    <p class="list-group-item-text"><?php echo $objServicioMaquina[0]->id ?></p>
  </div>
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Apellidos</h4>
    <p class="list-group-item-text"><?php echo $objServicioMaquina[0]->servicio_id ?></p>
  </div>
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Telefono</h4>
    <p class="list-group-item-text"><?php echo $objServicioMaquina[0]->estado_id ?></p>
  </div>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/index" class="btn btn-default">Volver</a>
  </div>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>