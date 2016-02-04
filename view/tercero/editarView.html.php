<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar Tercero</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/tercero/actualizar" method="POST" >
    <input value="<?php echo $objtercero[0]->id ?>" type="hidden" name="tercero[id]">
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->nombre ?>" type="text" class="form-control" id="nombre" name="tercero[nombre]" placeholder="Nombre" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-sm-2 control-label">apellido</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->apellido ?>" type="text" class="form-control" id="apellido" name="tercero[apellido]" placeholder="apellido" required>
      </div>
    </div>
    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">telefono</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->telefono ?>" type="number" class="form-control" id="telefono" name="tercero[telefono]" placeholder="telefono" required>
      </div>
    </div>
    <div class="form-group">
      <label for="direccion" class="col-sm-2 control-label">direccion</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->direccion ?>" type="text" class="form-control" id="direccion" name="tercero[direccion]" placeholder="direccion" required>
      </div>
    </div>
    <div class="form-group">
      <label for="correo" class="col-sm-2 control-label">correo</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->correo ?>" type="email" class="form-control" id="correo" name="tercero[correo]" placeholder="correo" required>
      </div>
    </div>
    <div class="form-group">
      <label for="cargoId" class="col-sm-2 control-label">cargoId</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->cargo_id ?>" type="number" class="form-control" id="cargoId" name="tercero[cargoId]" placeholder="cargoId" required>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoId" class="col-sm-2 control-label">tipoId</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->tipo_id ?>" type="number" class="form-control" id="tipoId" name="tercero[tipoId]" placeholder="tipoId" required>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoTerceroId" class="col-sm-2 control-label">tipoTerceroId</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->tipo_tercero_id ?>" type="number" class="form-control" id="tipoTerceroId" name="tercero[tipoTerceroId]" placeholder="tipoTerceroId" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/tercero/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>