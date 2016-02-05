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
        <?php foreach ($objUsuario as $usuario) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $usuario->usr_user ?></td>
            <td><?php echo $usuario->usr_last_login_at ?></td>
            <td><?php echo $usuario->usr_created_at ?></td>
            <td><?php echo $usuario->usr_actived ?></td>
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
