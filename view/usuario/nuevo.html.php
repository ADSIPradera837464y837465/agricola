<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">
  <h1>Usuario </h1>  
  <hr>
  <p>Formulario para registrar </p>
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/usuario/crear" method="POST">
    
    <label>Nombre</label>
    <input type="text" class="form-control" name="usr_user" id="usr_user"placeholder="Nombre de usuario"><br>
    <button type="submit" class="btn btn-default">Registrar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>