<?php
include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<h1>Nuevo Detalle Entrada Salida Bodega</h1>
<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/crear" method="post">
    
    <div class="form-group" class="modificar">
      <label for="esbId">id entrada salida bodega</label>
       <input type="text" class="form-control" id="id" name="detalleEntradaSalidaBodega[esbId]" placeholder="id entrada salida bodega ">
       </div>
    <div class="form-group" class="modificar">
      <label for="proId">id de producto </label>
       <input type="text" class="form-control" id="id" name="detalleEntradaSalidaBodega[proId]" placeholder="id  producto">
    </div>
    <div class="form-group" class="modificar">
      <label for="unmId">id unidad medida </label>
       <input type="text" class="form-control" id="id" name="detalleEntradaSalidaBodega[unmId]" placeholder="id unidad medida ">
    </div>
    <div class="form-group" class="modificar">
      <label for="desCantidad">cantidad </label>
       <input type="text" class="form-control" id="id" name="detalleEntradaSalidaBodega[desCantidad]" placeholder="cantidad ">
    </div>
    <div class="form-group" class="modificar">
      <label for="desPrecio">precio $</label>
       <input type="text" class="form-control" id="id" name="detalleEntradaSalidaBodega[desPrecio]" placeholder="precio ">
    </div>
    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>