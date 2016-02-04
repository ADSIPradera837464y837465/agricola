<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Detalle agua surco <small>insertar</small></h1>  
  <hr>
  <p>Formulario para registrar un nuevo registro de detalle agua surco</p>
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/detalleAguaSurco/insertar" method="POST">
    <label>Item</label>
    <input type="text" class="form-control" name="item" id="item" placeholder="detalle"><br>
    <label>Cantidad de surcos</label>    
    <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad de surcos"><br>    
    <label>Número de documento</label>    
    <input type="text" class="form-control" name="numero" id="numero" placeholder="número del documento"><br> 
    <button type="submit" class="btn btn-default">Registrar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>