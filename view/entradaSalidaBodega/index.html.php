<?php
require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php'
?>
<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>

  <!-- esta es la forma correcta verificar
     if($objDetalleEntradaSalidaBodega === null): -->

  <?php if ($entradaSalidaBodega === null): ?>
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
          <th>Id entrada</th>
          <th>Id tercero elb</th>
          <th>Id tercero soli</th>
          <th>Id tipo docu</th>
          <th>fecha </th>
          <th>observacion </th>
          <th>Creado en </th>
          <th>Actualizado en </th>
          <th>Eliminado en </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objEntradaSalidaBodega as $entradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $entradaSalidaBodega->esb_id ?></td>
            <td><?php echo $entradaSalidaBodega->ter_id_elabora ?></td>
            <td><?php echo $entradaSalidaBodega->ter_id_solicita ?></td>
            <td><?php echo $entradaSalidaBodega->tpd_id ?></td>
            <td><?php echo $entradaSalidaBodega->esb_fecha ?></td>
            <td><?php echo $entradaSalidaBodega->esb_observacion ?></td>
            <td><?php echo $entradaSalidaBodega->esb_created_at ?></td>
            <td><?php echo $entradaSalidaBodega->esb_updated_at ?></td>
            <td><?php echo $entradaSalidaBodega->esb_udeleted_at ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/ver?id=<?php echo $entradaSalidaBodega->des_id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/editar?id=<?php echo $entradaSalidaBodega->des_id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a data-toggle="modal" data-target="#myModal<?php echo $entradaSalidaBodega->des_id ?>" class="btn btn-danger btn-xs">Eliminar</a>
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
