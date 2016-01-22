<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
    <h1>Hacienda <small> actualizar </small></h1>
  <hr>
  <p>Formulario para la actualización de datos de una hacienda</p>
  <?php foreach ($objHacienda as $hacienda) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/hacienda/editar"> 
    <label>Descripción</label>    
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $hacienda->descripcion ?>"><br>    
    <label>Ubicación</label>    
    <input type="text" class="form-control" name="ubicacion" id="ubicacion" value="<?php echo $hacienda->dubicacion ?>"><br>    
    <label>Representante legal</label>    
    <input type="text" class="form-control" name="repLegal" id="repLegal" value="<?php echo $hacienda->representante_legal ?>"><br>    
    <input type="text" class="hidden" name="id" id="id" value="<?php echo $hacienda->id ?>"><br>    
    <?php endforeach; ?>
    <button class="btn btn-default" type="submit">Actualizar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>