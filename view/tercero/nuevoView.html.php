<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Crear nuevo registro para tercero</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl()?>index.php/tercero/crear" method="POST" >
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="tercero[nombre]" placeholder="Nombre" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-sm-2 control-label">apellido</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="apellido" name="tercero[apellido]" placeholder="apellido" required>
      </div>
    </div>
    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">telefono</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="telefono" name="tercero[telefono]" placeholder="telefono" required>
      </div>
    </div>
    <div class="form-group">
      <label for="direccion" class="col-sm-2 control-label">direccion</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="direccion" name="tercero[direccion]" placeholder="direccion" required>
      </div>
    </div>
    <div class="form-group">
      <label for="correo" class="col-sm-2 control-label">correo</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="correo" name="tercero[correo]" placeholder="correo" required>
      </div>
    </div>
    <div class="form-group">
      <label for="cargoId" class="col-sm-2 control-label">cargoId</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="cargoId" name="tercero[cargoId]" placeholder="cargoId" required>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoId" class="col-sm-2 control-label">tipoId</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tipoId" name="tercero[tipoId]" placeholder="tipoId" required>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoTerceroId" class="col-sm-2 control-label">tipoTerceroId</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tipoTerceroId" name="tercero[tipoTerceroId]" placeholder="tipoTerceroId" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/tipoTercero/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Crear</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
