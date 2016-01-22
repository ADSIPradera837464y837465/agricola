<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
     <h1>Hacienda <small>insertar</small></h1>  
  <hr>
  <p>Formulario para registrar una nueva hacienda</p>
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/hacienda/insertar" method="POST">
    <label>Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion"placeholder="Hacienda"><br>
    <label>Ubicación</label>
    <input type="text" class="form-control" name="ubicacion" id="ubicacion"placeholder="Hacienda"><br>
    <label>Representante legal</label>
    <input type="text" class="form-control" name="RepLegal" id="RepLegal"placeholder="Hacienda"><br>
    <button type="submit" class="btn btn-default">Registrar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>