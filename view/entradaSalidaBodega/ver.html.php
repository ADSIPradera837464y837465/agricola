<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
  <h2>entrada salida bodega numero: <?php echo $objEntradaSalidaBodega[0]->id ?></h2>
<!--//-->
  <div class="list-group">
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">Id entrada salida bodega</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->id ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tercero elabora</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->tercero_id_elabora ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tercero solicita</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->tercero_id_solicita ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">id tipo documento</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->tipo_documento_id ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">fecha</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->fecha ?></p>
    </div>
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">observacion</h4>
      <p class="list-group-item-text"><?php echo $objEntradaSalidaBodega[0]->observacion ?></p>
    </div>
  </div>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/index" class="btn btn-default">Volver</a>
  </div>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>