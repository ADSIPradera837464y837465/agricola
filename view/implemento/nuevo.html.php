<?php use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo Tipo documento</h1>
<div class="container container-fluid"> 
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/implemento/crear" method="post">

     <div class="form-group" class="modificar">
     <label for="descripcion">implemento</label>
      <input type="text" class="form-control" id="id" name="implemento[descripcion]" placeholder="descripcion ">
    </div>  
    
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/implemento/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>


