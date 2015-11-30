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
          <th>Usuario</th>
          <th>Ultimo ingreso</th>
          <th>Creado en</th>
          <th>Activo</th>
          <th>Acciones</th>
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
