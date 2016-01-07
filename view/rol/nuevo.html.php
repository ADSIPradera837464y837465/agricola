<?php

use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo rol</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/rol/crear" method="post">

     <div class="form-group" class="modificar">
     <label for="descripcion">rol</label>
      <input type="text" class="form-control" id="id" name="rol[nombre]" placeholder="nombre ">
    </div>  
    
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/rol/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>


<!--w-->