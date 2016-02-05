<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
  <h2>entrada salida bodega numero: <?php echo $objMaquina[0]->id ?></h2>

  <div class="list-group">
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">Id entrada salida bodega</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->id ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tercero elabora</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->estado ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tercero solicita</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->valor ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tipo documento</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->fecha_compra ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">fecha</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->numero_chasis ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">observacion</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->tipo_accesorio ?></p>
    </div>
      
    
       <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tercero solicita</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->horas_trabajadas ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tipo documento</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->tiempo_mantenimiento_hora ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">fecha</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->numero_serie ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">observacion</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->modelo ?></p>
    </div>
        <div class="list-group-item ">
      <h4 class="list-group-item-heading">observacion</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->horas_actividad ?></p>
    </div>
    
            <div class="list-group-item ">
      <h4 class="list-group-item-heading">observacion</h4>
      <p class="list-group-item-text"><?php echo $objMaquina[0]->valor_hora ?></p>
    </div>
    
  </div>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/index" class="btn btn-default">Volver</a>
  </div>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>