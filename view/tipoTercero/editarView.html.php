<?php use azucar\myConfig\myConfig as config ?>
<?php include_once config::getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar persona</h1>
  <form class="form-horizontal" action="<?php echo config::getUrl()?>index.php/persona/actualizar" method="POST" >
        <input value="<?php echo $objPersona[0]->id?>" type="hidden" name="persona[id]">
    <div class="form-group">
      <label for="usuario" class="col-sm-2 control-label">Usuario</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->usuario?>" type="text" class="form-control" id="usuario" name="persona[usuario]" placeholder="Nick Name">
      </div>
    </div>
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->nombre?>" type="text" class="form-control" id="nombre" name="persona[nombre]" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-sm-2 control-label">Apellido</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->apellido?>" type="text" class="form-control" id="apellido" name="persona[apellido]" placeholder="Apellidos">
      </div>
    </div>
    <div class="form-group">
      <label for="nacimiento" class="col-sm-2 control-label">Nacimiento</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->fecha_nacimiento?>" type="date" class="form-control" id="nacimiento" name="persona[nacimiento]" placeholder="Nacimiento">
      </div>
    </div>
    <div class="form-group">
      <label for="direccion" class="col-sm-2 control-label">Direccion</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->direccion?>" type="text" class="form-control" id="direccion" name="persona[direccion]" placeholder="Direccion">
      </div>
    </div>
    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">Telefono</label>
      <div class="col-sm-10">
        <input value="<?php echo $objPersona[0]->telefono?>" type="text" class="form-control" id="telefono" name="persona[telefono]" placeholder="Telefono">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Crear</button>
      </div>
    </div>
  </form>
</div>
<?php include_once config::getPath() . 'view/partial/foot.php' ?>