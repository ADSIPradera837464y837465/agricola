<?php

use FStudio\fsController as controller; ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo documento Entrada Salida Bodega</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/crear" method="post">

    <div class="form-group" class="modificar">
      <label for="esbId">id entrada salida bodega</label>
      <input type="text" class="form-control" id="esbId" name="entradaSalidaBodega[esbId]" placeholder="id entrada salida bodega ">
    </div>

    <div class="form-group" class="modificar">
      <label for="terIdElabora">id de tercero elabora </label>
      <input type="text" class="form-control" id="terIdElabora" name="entradaSalidaBodega[terIdElabora]" placeholder="id  tercero elabora">
    </div>
    <div class="form-group" class="modificar">
      <label for="terIdSolicita">id tercero Solicita </label>
      <input type="text" class="form-control" id="terIdSolicita" name="entradaSalidaBodega[terIdSolicita]" placeholder="id tercero solicita ">
    </div>
    <div class="form-group" class="modificar">
      <label for="tpdId">id tipo documento </label>
      <input type="text" class="form-control" id="tpdId" name="entradaSalidaBodega[tpdId]" placeholder="id tipo documento ">
    </div>
    <div class="form-group" class="modificar">
      <label for="fecha">Fecha</label>
      <input type="text" class="form-control" id="fecha" name="entradaSalidaBodega[fecha]" placeholder="fecha ">
    </div>
    <div class="form-group" class="modificar">
      <label for="observacion">observacion</label>
      <input type="text" class="form-control" id="observacion" name="entradaSalidaBodega[observacion]" placeholder="observacion ">
    </div>
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>
