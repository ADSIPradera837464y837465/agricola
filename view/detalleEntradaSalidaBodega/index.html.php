<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <table border="1">
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
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
