<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php';
?>

<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(2) ?>

<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/nuevo"   class="btn btn-success glyphicon glyphicon-plus" >Nuevo</a>
  </p>
 <?php if($objMetodo !== false) :?> 
  

  <div>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
  </div>

  <form  class="navbar-form navbar-left" role="search" name="formulario_registro" method="POST">
    
    <input type="text" class="form-control" id="filtro" name="filtro">
  
    <button type="submit"  class="btn btn-warning glyphicon glyphicon-search">Filtrar </button>
  </form>


  <br>
  <table  class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>
        <th>Id detalle</th>
        <th>Id detalle entrada salida bodega</th>
        <th>Producto id</th>
        <th>Acciones</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($objMetodo as $detalleEntradaSalidaBodega) : ?>
        <tr>
          <td><input type="checkbox" id="" name=""></td>
          <td><?php echo $detalleEntradaSalidaBodega->id ?></td>
          <td><?php echo $detalleEntradaSalidaBodega->entrada_salida_bodega_id ?></td>
          <td><?php echo $detalleEntradaSalidaBodega->producto_id ?></td>
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/ver?id=<?php echo $detalleEntradaSalidaBodega->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/editar?id=<?php echo $detalleEntradaSalidaBodega->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle='modal' data-target='#myModal<?php echo $detalleEntradaSalidaBodega->id ?>' class="btn btn-danger btn-xs">eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarDetalleEntradaSalidaBodega.php'; ?></td>       
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <?php $pagina->render() ?>
     <?php else: ?>
      <h2>No hay registros</h2>
 
<?php endif;  ?>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
