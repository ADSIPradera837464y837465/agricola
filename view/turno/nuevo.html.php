<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>turno <small>insertar</small></h1>  
  <hr>
  <p>Formulario para registrar un nuevo turno</p>
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/insertar" method="POST">
    <label>Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion"placeholder="turno"><br>
    <button type="submit" class="btn btn-default">Registrar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>