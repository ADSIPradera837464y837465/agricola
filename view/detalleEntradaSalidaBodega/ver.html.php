<?php 
use FStudio\fsController as controller;
include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<br>
//
<div class="container container-fluid"> 
    <h2>detalle entrada salida bodega numero: <?php echo $objDetalleEntradaSalidaBodega[0]->id  ?></h2>
    
<div class="list-group">
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Id detalle</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->id   ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">id entrada salida bodega</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->entrada_salida_bodega_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">id producto</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->producto_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">id unidad medida</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->unidad_medida_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">cantidad</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->cantidad  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">precio</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->precio  ?></p>
  </div>
</div>
    <div class="text-right">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/detalleEntradaSalidaBodega/index" class="btn btn-default">Volver</a>
    </div>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>