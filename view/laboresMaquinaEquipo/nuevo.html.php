<?php

use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo Labores maquina equipo</h1>
<div class="container container-fluid"> 
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/crear" method="post">

     <div class="form-group" class="modificar">
     <label for="descripcion">Hacienda id</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[hacienda_id]" placeholder="Hacienda id">
    </div>  
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Tercero id</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[tercero_id]" placeholder="Tercero id ">
    </div>  
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Tipo documento id</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[tipo_documento_id]" placeholder="Tipo documento id ">
    </div> 
      
    <div class="form-group" class="modificar">
     <label for="descripcion">Implemento id</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[implemento_id]" placeholder="implemento id">
    </div> 
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Fecha</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[fecha]" placeholder="fecha">
    </div> 
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Estado</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[estado]" placeholder="Estado">
    </div> 
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Tiempo</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[tiempo]" placeholder="Tiempo">
    </div> 
    
    <div class="form-group" class="modificar">
     <label for="descripcion">Total horas trabajadas</label>
      <input type="text" class="form-control" id="id" name="laboresMaquinaEquipo[total_horas_trabajadas]" placeholder="Total horas trabajadas">
    </div> 
    
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>


