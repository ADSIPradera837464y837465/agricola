<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Crear nuevo registro para cargo</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl()?>index.php/cargo/crear" method="POST" >
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" name="cargo[descripcion]" placeholder="Descripcion" required="" autofocus>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/cargo/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Crear</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
