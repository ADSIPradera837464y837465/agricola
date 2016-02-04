<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">
  <h1> Dato Usuario </h1>  
  <hr>
 
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/datoUsuario/crear" method="POST">
    
    <label>Nombre</label>
    <input type="text" class="form-control" name="datoUsuario[dus_nombre]" id="dus_nombre"placeholder="Nombre de usuario"><br>
    <label>Apellido</label>
    <input type="text" class="form-control" name="datoUsuario[dus_apellidos]" id="dus_apellidos"placeholder="apellido de usuario"><br>
    <label>Cedula</label>
    <input type="text" class="form-control" name="datoUsuario[dus_cedula]" id="dus_cedula"placeholder="cedula de usuario"><br>
    <label>telefono</label>
    <input type="text" class="form-control" name="datoUsuario[dus_movil]" id="dus_movil"placeholder="movil de usuario"><br>
    <label>correo</label>
    <input type="text" class="form-control" name="datoUsuario[dus_correo]" id="dus_correo"placeholder="correo de usuario"><br>
    <label>imagen</label>
    <input type="text" class="form-control" name="datoUsuario[dus_imagen]" id="dus_imagen"placeholder="imagen de usuario"><br>
    <label>sexo</label>
    <input type="text" class="form-control" name="datoUsuario[dus_sexo]" id="dus_sexo"placeholder="sexo de usuario"><br>
    
    
    <button type="submit" class="btn btn-info">Registrar</button>
    
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>