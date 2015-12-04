
<?php

use azucar\myConfig\myConfig as config ?>
<?php include_once config::getPath() . 'view/parcial/head.php' ?>
<div class="container container-fluid">
  <h1>Crud de tabla detalle orden</h1>
  <a href="<?php echo config::getUrl() ?>index.php/detalleOrden/nuevo" class="btn btn-success">Nuevo</a>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id detalle orden</th>
        <th>Id orden de servicio</th>
        <th>Id servicio de maquina</th>
        <th>Crear</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($objdetalleOrden as $detalleOrden): ?>
        <tr>
          <td><?php echo $detalleOrden->deo_Id ?></td>
          <td><?php echo $detalleOrden->ors_Id ?></td>
          <td><?php echo $detalleOrden->ser_Id ?></td>
          <td><?php echo $detalleOrden->deo_created_at ?></td>
          <td><?php echo $detalleOrden->deo_updated_at ?></td>
          <td><?php echo $detalleOrden->deo_deleted_at ?></td>

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
<?php include_once config::getPath() . 'view/parcial/foot.php' ?>




