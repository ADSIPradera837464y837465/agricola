<?php
require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php'
?>
<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>

  <!-- esta es la forma correcta verificar
     if($objDetalleEntradaSalidaBodega === null): -->

  <?php if ($detalleEntradaSalidaBodega === null): ?>
    <h2>Actualmente no existe informacion en el sistema</h2>
  <?php else: ?>

    <form action="filtrar.php" method="post">
      <input type="text" id="filtrar" name="filtrar" required="" />
      <button type="submit">Filtrar </button>
    </form>
    <br>

    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
          <th>Id detalle</th>
          <th>Id detalle entrada salida bodega</th>
          <th>Producto id</th>
          <th>Id unidad de medida</th>
          <th>Cantidad </th>
          <th>Precio </th>
          <th>Creado en </th>
          <th>Actualizado en </th>
          <th>Eliminado en </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objDetalleEntradaSalidaBodega as $detalleEntradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_id ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->esb_id ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->pro_id ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->unm_id ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_cantidad ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_precio ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_created_at ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_updated_at ?></td>
            <td><?php echo $detalleEntradaSalidaBodega->des_udeleted_at ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/ver?id=<?php echo $detalleEntradaSalidaBodega->des_id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/editar?id=<?php echo $detalleEntradaSalidaBodega->des_id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a data-toggle="modal" data-target="#myModal<?php echo $detalleEntradaSalidaBodega->des_id ?>" class="btn btn-danger btn-xs">Eliminar</a>
              <?php include $fsConfig->getPath() . 'view/partial/modalEliminar.php'; ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>
</body>
</html>
