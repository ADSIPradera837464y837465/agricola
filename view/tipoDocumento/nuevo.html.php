<?php

use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo tipoDocumento</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/crear" method="post">

     <div class="form-group" class="modificar">
     <label for="descripcion">tipoDocumento</label>
      <input type="text" class="form-control" id="id" name="tipoDocumento[descripcion]" placeholder="descripcion ">
    </div>  
    
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>


