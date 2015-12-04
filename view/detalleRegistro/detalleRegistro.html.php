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
          <th>Numero</th>
          <th>identificacion de empleado</th>
          <th>numero de labor</th>
          <th>numero de suerte</th>
          <th>numero de producto</th>
          <th>unidad de medida</th>
          <th>identificacion de la maquina</th>
          <th>tiempo muerto</th>
          <th>total horas trabajadas</th>
          <th>hora de inicio</th>
          <th>hora fin</th>
          <th>fecha de creacion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($detalleRegistro as $dRegistro) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $dRegistro->relme_numero ?></td>
            <td><?php echo $dRegistro->ter_id ?></td>
            <td><?php echo $dRegistro->lab_id ?></td>
            <td><?php echo $dRegistro->sue_id ?></td>
            <td><?php echo $dRegistro->pro_id ?></td>
            <td><?php echo $dRegistro->unm_id ?></td>
            <td><?php echo $dRegistro->maq_id ?></td>
            <td><?php echo $dRegistro->der_tiempo_muerto ?></td>
            <td><?php echo $dRegistro->der_total_horas_trabajadas ?></td>
            <td><?php echo $dRegistro->der_hora_inicio ?></td>
            <td><?php echo $dRegistro->der_hora_fin ?></td>
            <td><?php echo $dRegistro->der_created_at ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/iglesia/ver?id=<?php echo $usuario->usr_id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/iglesia/editar?id=<?php echo $usuario->usr_id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a data-toggle="modal" data-target="#myModal<?php echo $usuario->usr_id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
