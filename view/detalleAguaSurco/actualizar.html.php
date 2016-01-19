<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
      <h1>Detalle agua surco <small> actualizar </small></h1>
  <hr>
  <p>Formulario para la actualización de datos de un registro de detalle agua surco</p>
  <?php foreach ($objDetalle as $detalle) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/detalleAguaSurco/editar"> 
    <label>Item</label>    
    <input type="text" class="form-control" name="item" id="item" value="<?php echo $detalle->item ?>"><br>        
    <label>Cantidad de surcos</label>    
    <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo $detalle->cantidad_surco ?>"><br>    
    <label>Número de documento</label>    
    <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $detalle->control_administrativo_riego_id ?>"><br>        
    <input type="text" class="hidden" name="id" id="id" value="<?php echo $detalle->id ?>"><br>    
    <?php endforeach; ?>
    <button class="btn btn-default" type="submit">Actualizar</button>
  </form>    
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>