<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Metodo de Riego <small> actualizar </small></h1>
  <hr>
  <p>Formulario para la actualización de datos de un metodo de riego</p>
  <?php foreach ($ObjMetodo as $metodo) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/editar"> 
    <label>Descripción</label>    
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $metodo->descripcion ?>"><br>    
    <input type="text" class="hidden" name="id" id="id" value="<?php echo $metodo->id ?>"><br>    
    <?php endforeach; ?>
    <button class="btn btn-default" type="submit">Actualizar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>