<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo Servicio Maquina</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/crear" method="post">


    <div class="form-group" class="modificar">
      <label for="serDescripcion">servicio descripcion</label>
      <input type="text" class="form-control" id="id" name="servicioMaquina[serDescripcion]" placeholder="descripcion">
    </div>
    <div class="form-group" class="modificar">
      <label for="serEstado">servicio estado</label>
      <input type="text" class="form-control" id="id" name="servicioMaquina[serEstado]" placeholder="estado">
    </div>
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>