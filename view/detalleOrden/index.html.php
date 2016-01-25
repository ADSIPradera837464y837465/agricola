<?php
include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Crud de tabla detalle orden</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleOrden/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id detalle orden</th>
        <th>Id orden de servicio</th>
        <th>Id servicio de maquina</th>
<!--        <th>Crear</th>
        <th>Actualizar</th>
        <th>Eliminar</th>-->
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objDetalleOrden as $detalleOrden): ?>
        <tr>
          <td><?php echo $detalleOrden->id ?></td>
          <td><?php echo $detalleOrden->orden_servicio_id ?></td>
          <td><?php echo $detalleOrden->servicio_id ?></td>
          <td>
            a href="#" class="btn btn-warning btn-xs">Ver</a>
            <a href="#" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" class="btn btn-danger btn-xs">Eliminar</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>




