<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
    <h1>Avance agua surco <small> actualizar </small></h1>
  <hr>
  <p>Formulario para la actualización de datos de un registro de avance agua surco</p>
  <?php foreach ($objAvance as $avance) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/avanceAguaSurco/editar">         
    <label>Número de documento</label>    
    <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $avance->control_administrativo_riego_id ?>"><br>        
    <label>Id del surco</label>    
    <input type="text" class="form-control" name="surco" id="surco" value="<?php echo $avance->surco_id ?>"><br>    
    <input type="text" class="hidden" name="id" id="id" value="<?php echo $avance->id ?>"><br>    
    <?php endforeach; ?>
    <button class="btn btn-default" type="submit">Actualizar</button>
  </form>    
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>