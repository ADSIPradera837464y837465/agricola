<?php use FStudio\fsController as controller; ?>
<?php include_once config::getPath() . 'view/partial/head.php'; ?>
<br>
<div class="container container-fluid"> 
    <h2>detalle entrada salida bodega numero: <?php echo $objDetalleEntradaSalidaBodega[0]->des_id  ?></h2>
    
<div class="list-group">
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Id</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->des_id   ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Nombre</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->esb_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Apellidos</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->pro_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Telefono</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->unm_id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Cargo</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->des_cantidad  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">EXtencion</h4>
    <p class="list-group-item-text"><?php echo $objDetalleEntradaSalidaBodega[0]->des_precio  ?></p>
  </div>
</div>
    <div class="text-right">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/detalleEntradaSalidaBodega/index" class="btn btn-default">Volver</a>
    </div>

</div>
<?php include_once config::getPath() . 'view/partial/foot.php'; ?>