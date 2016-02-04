<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Avance agua surco <small>insertar</small></h1>  
  <hr>
  <p>Formulario para registrar un nuevo registro de avance de agua por surco</p>
  <form action="<?php echo $fsConfig->getUrl() ?>index.php/avanceAguaSurco/insertar" method="POST">      
    <label>Número de documento</label>    
    <input type="text" class="form-control" name="numero" id="numero" placeholder="número del documento"><br> 
    <label>Id del surco</label>    
    <input type="text" class="form-control" name="surco" id="surco" placeholder="id del surco"><br> 
    <button type="submit" class="btn btn-default">Registrar</button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>